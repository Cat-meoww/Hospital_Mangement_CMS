<?php

namespace App\Controllers\admin\master;

use App\Controllers\General;
use App\Models\UserModel;
use App\Models\PropertyType;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\API\ResponseTrait;
use DateTime;

class UserMangement extends General
{
    use ResponseTrait;

    public function __construct()
    {
        helper(['form']);
        parent::__construct();
    }
    public function index()
    {
        return $this->dashboard();
    }
    public function dashboard()
    {
        $userModel = new UserModel();
        $Dataset = $userModel->findAll();
        $this->data['title'] = "User Management";
        $this->data['Dataset'] = $Dataset;
        $this->data['Options'] = [
            'roles' => $this->generate_roles(),
            'branches' => $this->generate_branch(),
            'visiblity' => [
                0 => "Active",
                1 => "In Active"
            ]
        ];
        return view('admin/users/user_management', $this->data);
    }
    private function generate_roles()
    {
        $UserRoles = new \App\Models\UserRoles();

        $arrayOfObjects = $UserRoles->select('id,role_name as name')->get()->getResult();
        $associativeArray = [];

        foreach ($arrayOfObjects as $object) {
            $associativeArray[$object->id] = $object->name;
        }
        return $associativeArray;
    }
    private function generate_branch()
    {
        $Model = new \App\Models\Branches();

        $arrayOfObjects = $Model->select('id,name')->get()->getResult();
        $associativeArray = [];
        $associativeArray['0'] = "Global Branch";

        foreach ($arrayOfObjects as $object) {
            $associativeArray[$object->id] = $object->name;
        }
        return $associativeArray;
    }

    /**
     * API post forms
     */
    public function create()
    {

        try {

            $rules  = [
                'username' => [
                    'label' => 'UserName',
                    'rules' => "trim|required|min_length[3]|max_length[100]|alpha_dash|is_unique[users.username]",
                ],
                'firstname' => [
                    'label' => 'First Name',
                    'rules' => "trim|required|min_length[3]|max_length[30]",
                ],
                'lastname' => [
                    'label' => 'Last Name',
                    'rules' => "trim|required|min_length[1]|max_length[30]",
                ],
                'email' => [
                    'label' => 'Email',
                    'rules' => "trim|required|valid_email|is_unique[users.email]",
                ],
                'telephone' => [
                    'label' => 'Telephone',
                    'rules' => "trim|required|min_length[10]|is_unique[users.telephone]",
                ],
                'branch' => [
                    'label' => 'Branch',
                    'rules' => "trim|required",
                ],
                'visiblity' => [
                    'label' => 'Visiblity',
                    'rules' => "trim|required|in_list[0,1]",
                ],
            ];
            if ($this->validate($rules)) {
                $UserModel = new \App\Models\UserModel();

                $email = $this->request->getPost('email');
                $branch = (int) $this->request->getPost('branch');


                $data = array(
                    'username' => $this->request->getPost('username'),
                    'firstname' =>  $this->request->getPost('firstname'),
                    'lastname' =>  $this->request->getPost('lastname'),
                    'user_role' => 1,
                    'telephone' => $this->request->getPost('telephone'),
                    'email' => $this->request->getPost('email'),
                    'password' => md5((string)$email),
                    'branch' => $branch
                );

                $query = $UserModel->insert($data);

                if ($query) {
                    return $this->respond([
                        'status' => "success",
                        'msg' => "Stored data successfully."
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
    public function update()
    {

        try {

            $rules  = [
                'id' => [
                    'label' => 'ID',
                    'rules' => "trim|required|is_natural|is_not_unique[users.id]",
                    'errors' => [
                        'is_not_unique' => "Related Ad not founded"
                    ],
                ],
                'username' => [
                    'label' => 'UserName',
                    'rules' => "trim|required|min_length[3]|max_length[300]|is_unique[users.username,id,{id}]",
                ],
                'firstname' => [
                    'label' => 'First Name',
                    'rules' => "trim|required|min_length[3]|max_length[300]",
                ],
                'lastname' => [
                    'label' => 'Last Name',
                    'rules' => "trim|required|min_length[1]|max_length[300]",
                ],
                'email' => [
                    'label' => 'Email',
                    'rules' => "trim|required|valid_email|is_unique[users.email,id,{id}]",
                ],
                'telephone' => [
                    'label' => 'Telephone',
                    'rules' => "trim|required|min_length[3]|max_length[300]|is_unique[users.telephone,id,{id}]",
                ],
                'branch' => [
                    'label' => 'Branch',
                    'rules' => "trim|required",
                ],
                'visiblity' => [
                    'label' => 'Visiblity',
                    'rules' => "trim|required|in_list[0,1]",
                ],
            ];
            if ($this->validate($rules)) {
                $UserModel = new \App\Models\UserModel();
                $id = $this->request->getPost("id");
                if ($id == 1) {
                    throw new \Exception('unable to perform action');
                }


                $query = $UserModel->where('id', $id)->set([
                    'username' => $this->request->getPost('username'),
                    'firstname' =>  $this->request->getPost('firstname'),
                    'lastname' =>  $this->request->getPost('lastname'),
                    'telephone' => $this->request->getPost('telephone'),
                    'email' => $this->request->getPost('email'),
                    'branch' => (int) $this->request->getPost('branch'),
                    'in_active' => (int) $this->request->getPost('visiblity'),
                ])->update();

                if ($query) {
                    return $this->respond([
                        'status' => "success",
                        'msg' => "Updated data successfully."
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

    public function delete()
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
            ];
            if ($this->validate($rules)) {
                $id = $this->request->getPost("id");
                if ($id == 1) {
                    throw new \Exception('Unable to perform action');
                }
                $UserModel = new \App\Models\UserModel();

                $query = $UserModel->where('id', $id)->delete();
                if ($query) {
                    return $this->respond([
                        'status' => "success",
                        'msg' => "Data Deleted successfully."
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
