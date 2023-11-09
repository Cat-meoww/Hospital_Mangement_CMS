<?php

namespace App\Controllers\admin\master;

use App\Controllers\General;
use CodeIgniter\API\ResponseTrait;

class departments extends General
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
        $this->data['title'] = "Departments";
        $Departments = new \App\Models\Departments();
        $this->data['Dataset'] = $Departments->orderBy('id', 'DESC')->findAll();
        $this->data['Options'] = [
            'visiblity' => [
                '' => 'Visiblity',
                'Public' => 'Public',
                'Private' => 'Private'
            ]
        ];

        return view('admin/all-master/departments', $this->data);
    }



    /**
     * API post forms
     */
    public function create()
    {

        try {

            $rules  = [
                'name' => [
                    'label' => 'Service Name',
                    'rules' => "trim|required|min_length[3]|max_length[150]|is_unique[departments.name]",
                ],

                'description' => [
                    'label' => 'Description',
                    'rules' => "trim|required|min_length[3]|max_length[500]|",
                ],
                'slug' => [
                    'label' => 'Slug',
                    'rules' => "required|alpha_dash|is_unique[departments.slug]",
                ],
                'visiblity' => [
                    'label' => " Visiblity",
                    'rules' => "required|in_list[Public,Private]",
                ],
            ];
            if ($this->validate($rules)) {
                $Departments = new \App\Models\Departments();

                $query = $Departments->insert([
                    'name' => $this->request->getPost('name'),
                    'description' => $this->request->getPost('description'),
                    'slug' => $this->request->getPost('slug'),
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
                    'rules' => "trim|required|is_natural|is_not_unique[departments.id]",
                    'errors' => [
                        'is_not_unique' => "Related Service not founded"
                    ],
                ],
                'name' => [
                    'label' => 'Service Name',
                    'rules' => "trim|required|min_length[3]|max_length[300]|is_unique[departments.name,id,{id}]",
                ],
                'description' => [
                    'label' => 'Description',
                    'rules' => "trim|required|min_length[3]|max_length[500]|",
                ],
                'slug' => [
                    'label' => 'Slug',
                    'rules' => "required|regex_match[/[A-Za-z0-9\-]+/]|is_unique[departments.slug,id,{id}]",
                ],
                'visiblity' => [
                    'label' => " Visiblity",
                    'rules' => "required|in_list[Public,Private]",
                ],
            ];
            if ($this->validate($rules)) {
                $Departments = new \App\Models\Departments();
                $id = $this->request->getPost("id");


                $query = $Departments->where('id', $id)->set([
                    'name' => $this->request->getPost('name'),
                    'description' => $this->request->getPost('description'),
                    'slug' => $this->request->getPost('slug'),
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
                    'rules' => "trim|required|is_natural|is_not_unique[departments.id]",
                    'errors' => [
                        'is_not_unique' => "Related Service not founded"
                    ],
                ],
            ];
            if ($this->validate($rules)) {
                $id = $this->request->getPost("id");
                $Departments = new \App\Models\Departments();

                $query = $Departments->where('id', $id)->delete();
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
