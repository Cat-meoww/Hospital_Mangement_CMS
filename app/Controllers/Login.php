<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\HTTP\Request;

class Login extends BaseController
{
    public $session;
    public $usermodel;
    public function __construct()
    {
        helper('cookie');
        $this->session = session();
        $this->usermodel = new UserModel();
    }

    public function index()
    {
        return view('auth-login');
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

            return view('auth-login', ['validation' => $this->validator]);
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
                'password' => md5($password),
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
            'login' => true,
            'token' => $usertoken,
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
}
