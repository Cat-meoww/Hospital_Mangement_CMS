<?php

namespace App\Controllers\admin\master;

use App\Controllers\General;
use CodeIgniter\API\ResponseTrait;

class doctors_role extends General
{
    use ResponseTrait;
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        return $this->dashboard();
    }
    public function dashboard()
    {
        helper(['form']);
        $this->data['title'] = "Doctors roles";
        $Doctors_roles = new \App\Models\Doctors_roles();
        $this->data['Dataset'] = $Doctors_roles
            ->select('*')
            ->orderBy('id', 'DESC')->findAll();
        $this->data['Options'] = [
            'visiblity' => [
                '' => 'Visiblity',
                'Public' => 'Public',
                'Private' => 'Private'
            ]
        ];

        return view('admin/all-master/doctors_role', $this->data);
    }

    /**
     * API post forms
     */
    public function create()
    {

        try {

            $rules  = [
                'name' => [
                    'label' => 'Doctor Role Name',
                    'rules' => "trim|required|min_length[3]|max_length[150]|is_unique[doctors_roles.name]",

                ],

                'description' => [
                    'label' => 'Description',
                    'rules' => "trim|required|min_length[3]|max_length[500]|",
                ],

                'visiblity' => [
                    'label' => " Visiblity",
                    'rules' => "required|in_list[Public,Private]",
                ],
            ];
            if ($this->validate($rules)) {
                $Doctors_roles = new \App\Models\Doctors_roles();

                $query = $Doctors_roles->insert([
                    'name' => $this->request->getPost('name'),
                    'description' => $this->request->getPost('description'),
                    'visibility' => $this->request->getPost('visiblity'),
                    'created_by' => $this->session->user_id
                ]);

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
                    'rules' => "trim|required|is_natural|is_not_unique[doctors_roles.id]",
                    'errors' => [
                        'is_not_unique' => "Related Doctor Role not founded"
                    ],
                ],
                'name' => [
                    'label' => 'Doctor Role Name',
                    'rules' => "trim|required|min_length[3]|max_length[300]|is_unique[doctors_roles.name,id,{id}]",
                ],
                'description' => [
                    'label' => 'Description',
                    'rules' => "trim|required|min_length[3]|max_length[500]|",
                ],

                'visiblity' => [
                    'label' => " Visiblity",
                    'rules' => "required|in_list[Public,Private]",
                ],
            ];
            if ($this->validate($rules)) {
                $Doctors_roles = new \App\Models\Doctors_roles();
                $id = $this->request->getPost("id");


                $query = $Doctors_roles->where('id', $id)->set([
                    'name' => $this->request->getPost('name'),
                    'description' => $this->request->getPost('description'),
                    'visibility' => $this->request->getPost('visiblity'),
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
                    'rules' => "trim|required|is_natural|is_not_unique[doctors_roles.id]",
                    'errors' => [
                        'is_not_unique' => "Related Doctor Role not founded"
                    ],
                ],
            ];
            if ($this->validate($rules)) {
                $id = $this->request->getPost("id");
                $Doctors_roles = new \App\Models\Doctors_roles();

                $query = $Doctors_roles->where('id', $id)->delete();
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
