<?php

namespace App\Controllers;

use App\Models\UserModel;


class Login extends BaseController
{
    public $session;
    public $usermodel;
    public $data;
    public $date;
    public function __construct()
    {
        helper('cookie');
        $this->session = session();
        $this->usermodel = new UserModel();
        $this->data['session'] = $this->session;
        $this->date = date("Y-m-d H:i:s");
    }

    public function index()
    {
        return view('auth/auth-login', $this->data);
    }
    public function auth_check()
    {
        $rules = [
            'email'    => 'required|valid_email',
            'password' => 'required|min_length[5]|max_length[225]|validate_user[email,password]',
        ];
        $error = [
            'password' => ['validate_user' => "Email or Password doesn't match"],
            'email' => ['valid_email' => "Require valid mail id"]
        ];
        if (!$this->validate($rules, $error)) {

            $this->session->setFlashdata('warn', $this->validator->listErrors('alert-row'));
            //$this->session->setFlashdata('reason', $this->validator->listErrors());
            //return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
            $this->data['validation'] = $this->validator;
            return view('auth/auth-login', $this->data);
        } else {
            $email = $this->request->getGetPost('email');
            $this->usermodel = new UserModel();
            $data = $this->usermodel->where('email', $email)->first();
            $this->set_userdata($data);
            setcookie("controller", "12345", time() + 3600);
            return $this->user_dashboard();
        }
    }

    public function register()
    {

        $rules = [
            'first_name'    => 'required',
            'last_name'    => 'required',
            'telephone'    => 'required|integer|greater_than[999999999]|less_than[10000000000]|is_unique[users.telephone]',
            'email'    => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[5]|max_length[225]',
            'confirm_password' => 'required|matches[password]',
        ];

        $error = [
            'first_name' => ['validate_first_name' => "First Name Required"],
            'last_name' => ['validate_last_name' => "Last Name Required"],
            'telephone' => ['validate_telephone' => "Telephone Required"],
            'email' => ['valid_email' => "Require valid mail id"],
            'password' => ['validate_password' => "Password Required"],
            'confirm_password' => ['validate_confirm_password' => "Password Doesn't Match"],
        ];

        if (!$this->validate($rules, $error)) {

            // $this->session->setFlashdata('warn', 'Please enter a valid data');
            // $this->session->setFlashdata('reason', 'Invalid Data! ');
            return redirect()->back()->with('warn', $this->validator->listErrors('alert-row'))->withInput();
        } else {


            $password = $this->request->getPost('password');
            $first_name = $this->request->getPost('first_name');
            $last_name = $this->request->getPost('last_name');
            $data = array(

                'firstname' => $first_name,
                'lastname' => $last_name,
                'user_role' => 2,
                'username' => $first_name . " " . $last_name,
                'telephone' => $this->request->getPost('telephone'),
                'email' => $this->request->getPost('email'),
                'password' => md5((string)$password),
            );
            $this->usermodel = new UserModel();

            $this->usermodel->insert($data);
            $this->session->setFlashdata('success', 'Successfully Registered 🦁🦁 Please Login');
            return redirect()->back();
        }
    }


    private function set_userdata($data)
    {
        $usertoken = md5(uniqid("auth", true));
        $update = ['is_logged' => 1, 'token' => $usertoken];
        $this->usermodel->where('id', $data['id'])->set($update)->update();
        $userdata = array(
            'username' => $data['username'],
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'user_role' => $data['user_role'],
            'user_id' => $data['id'],
            'branch_id' => (int)$data['branch'],
            'login' => true,
            'token' => $usertoken,
            'sub_role' => $data['sub_role'],
        );
        $this->session->set($userdata);
    }
    public function user_dashboard()
    {
        $userrole = $this->session->user_role;

        //1 -> admin
        //2 -> agent
        //3 -> end user
        if ($userrole == 1) {
            return redirect()->to('admin/dashboard');
        } else if ($userrole == 2) {
            return redirect()->to('agent/my-profile');
        } else if ($userrole == 3) {
            return redirect()->to('client/dashboard');
        } else {
            return redirect()->to('global/chat');
        }
    }
    public function dashboard()
    {
        return view('dashboard/dashboard');
    }
    public function logout()
    {

        $update = ['is_logged' => 0, 'token' => ''];
        $this->usermodel->where('id', $this->session->user_id)->set($update)->update();
        $this->session->destroy();
        return redirect('auth/login');
    }
    public function forgot_pwd()
    {
        helper('form');
        return view('auth/auth-forgot-pwd', $this->data);
    }
    public function forgot_pwd_check()
    {
        try {
            helper('custom');
            $rules = [
                'email'    => [
                    'label' => "Email",
                    'rules' => 'required|valid_email|is_not_unique[users.email]',
                    'errors' => [
                        'is_not_unique' => "Related Email Id not founded"
                    ],
                ]
            ];

            if (!$this->validate($rules)) {
                return redirect()->back()->withInput();
            } else {
                $email = $this->request->getPost('email');
                $uuid =  \Ramsey\Uuid\Uuid::uuid4();
                $appname = env('app.name');
                $Platform = $this->request->getUserAgent()->getPlatform();

                $user = $this->usermodel->where('email', $email)->first();




                $ResetPWd = new \App\Models\ResetPwd();
                if ($ResetPWd->where('user_id', $user['id'])->where('expired_on >=', $this->date)->first()) {
                    throw new \Exception("Reset link has sent already");
                }



                $ResetPWd->insert([
                    'uuid' => $uuid,
                    'user_id' => $user['id'],
                    'expired_on' => addDateTime(10),
                    'useragent' => $Platform,
                    'ip_address' => $this->request->getIPAddress(),
                ]);

                $populate = [
                    'uuid' => $uuid,
                    'appname' => $appname
                ];

                $mailer = new \App\Libraries\Mailer();

                if (!$mailer->send_mail($email, "[$appname] | Password reset", view('layout/templates/password_reset', $populate))) {
                    throw new \Exception("Unable to send Reset link to your mail id");
                }

                return redirect()->back()->with('success', "Succesfully Sent Reset link to your Email Id");
            }
        } catch (\Throwable $th) {
            return redirect()->back()->withInput()->with('success', $th->getMessage());
        }
    }
    public function password_reset_view($uuid)
    {
        try {
            helper('form');
            $ResetPwd = new \App\Models\ResetPwd();


            if (!$record = $ResetPwd->where('uuid', $uuid)->where('expired_on >=', $this->date)->first()) {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Reset link has been expired");
            }
            if ((bool)$record->is_changed) {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Reset link is no longer available");
            }
            $this->data['title'] = "Reset Passeord";

            $this->data['record'] = $record;
            $this->data['uuid'] = $uuid;


            return view('auth/auth-password-reset', $this->data);
        } catch (\Exception $e) {
            throw new \RuntimeException($e->getMessage(), $e->getCode(), $e);
        }
    }
    public function password_verify($uuid)
    {
        try {
            helper('form');
            $ResetPwd = new \App\Models\ResetPwd();
            if (!$record = $ResetPwd->where('uuid', $uuid)->where('expired_on >=', $this->date)->first()) {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Reset link has been expired");
            }
            if ((bool)$record->is_changed) {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Reset link is no longer available");
            }
            $rules = [
                'password' => [
                    'label' => 'Password',
                    'rules' => "required|min_length[5]",
                ],
                'passconf' => [
                    'label' => 'Confirm Password',
                    'rules' => "required|min_length[5]|matches[password]",
                ],
            ];

            if (!$this->validate($rules)) {
                return redirect()->back()->withInput();
            } else {
                $password = $this->request->getPost('password');
                $update = [
                    'password' => md5((string) $password),
                ];
                $query = $this->usermodel->where('id', $record->user_id)->set($update)->update();
                if ($query) {

                    $ResetPwd->where('uuid', $uuid)->set('is_changed', 1)->update();
                    return redirect()->to('auth/login')->with('success', 'Your password has been reset successfully  🎉 .');
                }
                throw new \Exception("Something went wrong !");
            }
        } catch (\Exception $e) {
            throw new \RuntimeException($e->getMessage(), $e->getCode(), $e);
        }
    }
}
