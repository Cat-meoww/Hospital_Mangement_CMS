<?php

namespace App\Controllers\API\admin;


use App\Controllers\General;
use CodeIgniter\API\ResponseTrait;
use DateTime;

class users extends General
{
    use ResponseTrait;

    public function __construct()
    {
        parent::__construct();
    }

    public function update_info()
    {
        try {

            $rules  = [
                'id' => [
                    'label' => 'ID',
                    'rules' => "trim|required|is_natural|is_not_unique[users.id]",
                    'errors' => [
                        'is_not_unique' => "Related User not founded"
                    ],
                ],
                'firstname' => [
                    'label' => 'First Name',
                    'rules' => "trim|alpha_space|required|min_length[3]|max_length[150]",
                ],
                'lastname' => [
                    'label' => 'Last Name',
                    'rules' => "trim|alpha_space|required|min_length[1]|max_length[150]",
                ],
                'telephone' => [
                    'label' => 'Contact Phone',
                    'rules' => "trim|integer|required|min_length[10]|max_length[14]",
                ],



            ];
            if ($this->validate($rules)) {
                $UserModel = new \App\Models\UserModel();
                $id = $this->request->getPost("id");
                if ($id != $this->session->user_id) {
                    throw new \Exception("Unable to store data");
                }

                $update = [
                    'firstname' => $this->request->getPost('firstname'),
                    'lastname' => $this->request->getPost('lastname'),
                    'telephone' => $this->request->getPost('telephone'),
                ];

                $query = $UserModel->where('id', $id)->set($update)->update();


                if ($query) {

                    $this->session->set([
                        'firstname' => $this->request->getPost('firstname'),
                        'lastname' => $this->request->getPost('lastname'),
                    ]);
                    return $this->respond([
                        'status' => "success",
                        'msg' => "Updated Profile data successfully."
                    ]);
                }
                throw new \Exception("Unable to store data");
            } else {
                throw new \Exception("Invalid data");
            }
        } catch (\Exception $e) {
            return $this->handle_exception($e);
        }
    }
    public function update_pwd()
    {
        try {

            $rules  = [
                'id' => [
                    'label' => 'ID',
                    'rules' => "trim|required|is_natural|is_not_unique[users.id]",
                    'errors' => [
                        'is_not_unique' => "Related User not founded"
                    ],
                ],
                'password' => [
                    'label' => 'Password',
                    'rules' => "required|min_length[5]",
                ],
                'passconf' => [
                    'label' => 'Confirm Password',
                    'rules' => "required|min_length[5]|matches[password]",
                ],




            ];
            if ($this->validate($rules)) {
                $UserModel = new \App\Models\UserModel();
                $id = $this->request->getPost('id');
                $password = $this->request->getPost('password');


                $update = [
                    'password' => md5((string) $password),

                ];

                $query = $UserModel->where('id', $id)->set($update)->update();


                if ($query) {


                    return $this->respond([
                        'status' => "success",
                        'msg' => "Changed password successfully."
                    ]);
                }
                throw new \Exception("Unable to store data");
            } else {
                throw new \Exception("Invalid data");
            }
        } catch (\Exception $e) {
            return $this->handle_exception($e);
        }
    }

    private function handle_exception(\Exception $e)
    {
        $data = ['status' => 'bad'];
        $data['message'] = $e->getMessage();
        $errors = $this->validator->getErrors();
        if (count($errors) > 0) {
            $data['errors'] = $errors;
        } else {
            $data['errors'] = $e->getMessage();
        }
        return $this->respond($data);
    }
}
