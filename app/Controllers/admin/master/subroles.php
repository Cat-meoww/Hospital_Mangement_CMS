<?php

namespace App\Controllers\admin\master;

use App\Controllers\General;
use CodeIgniter\API\ResponseTrait;



class subroles extends General
{
    use ResponseTrait;

    public function __construct()
    {
        helper(['form']);
        parent::__construct();
    }

    public function index()
    {
        helper('text');

        $this->data['title'] = "Roles";
        $SubRoles = new \App\Models\SubRoles();
        $this->data['Dataset'] = $SubRoles
            ->select()
            ->orderBy('id', 'DESC')->findAll();

        $this->data['Options'] = [
            'visiblity' => [
                '' => 'Visiblity',
                'Public' => 'Public',
                'Private' => 'Private'
            ]
        ];
        return view('admin/all-master/subroles/index', $this->data);
    }
    public function new()
    {

        $this->data['title'] = "Events";

        $this->data['Options'] = [
            'visiblity' => [
                '' => 'Visiblity',
                'Public' => 'Public',
                'Private' => 'Private'
            ]
        ];

        return view('admin/all-master/subroles/create', $this->data);
    }
    public function edit($id)
    {

        try {
            $SubRoles = new \App\Models\SubRoles();

            if (!$SubRole = $SubRoles->select('*')->find($id)) {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }

            $this->data['title'] = "Events CMS";
            $this->data['item'] = $SubRole;


            return view('admin/all-master/subroles/update', $this->data);
        } catch (\Exception $e) {
            
            throw new \RuntimeException($e->getMessage(), $e->getCode(), $e);
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

    public function create()
    {
        try {

            $rules  = [
                'name' => [
                    'label' => 'Role Name',
                    'rules' => "trim|required|min_length[2]|max_length[100]|is_unique[sub_roles.name]",
                ],

                'description' => [
                    'label' => 'Meta Description',
                    'rules' => "trim|required|max_length[500]",
                ],
            ];
            if ($this->validate($rules)) {

                $SubRoles = new \App\Models\SubRoles();


                $data = [
                    'name' =>  $this->request->getPost('name'),
                    'description' => $this->request->getPost('description'),
                ];


                $query = $SubRoles->insert($data);

                $this->session->setFlashdata('success', 'Created a Role successfully');



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
                    'rules' => "trim|required|is_natural|is_not_unique[sub_roles.id]",
                    'errors' => [
                        'is_not_unique' => "Related Role not founded"
                    ],
                ],
                'name' => [
                    'label' => 'Role Name',
                    'rules' => "trim|required|min_length[2]|max_length[100]|is_unique[sub_roles.name,id,{id}]",
                ],

                'description' => [
                    'label' => 'Meta Description',
                    'rules' => "trim|required|max_length[500]",
                ],

            ];
            if ($this->validate($rules)) {
                $SubRoles = new \App\Models\SubRoles();
                $id = $this->request->getPost("id");

                if ($id <= 2) {
                    throw new \Exception("You cannot perform this action. dependeny !");
                } 
                $update = [
                    'name' =>  $this->request->getPost('name'),
                    'description' => $this->request->getPost('description'),
                ];

                $query = $SubRoles->where('id', $id)->set($update)->update();

                if ($query) {
                    return $this->respond([
                        'status' => "success",
                        'msg' => "Updated  data successfully."
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
                    'rules' => "trim|required|is_natural|is_not_unique[sub_roles.id]",
                    'errors' => [
                        'is_not_unique' => "Related Role not founded"
                    ],
                ],
            ];
            if ($this->validate($rules)) {
                $id = $this->request->getPost("id");
                if ($id <= 2) {
                    throw new \Exception("You cannot perform this action. dependeny !");
                }
                $SubRoles = new \App\Models\SubRoles();


                $query = $SubRoles->where('id', $id)->delete();
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
}
