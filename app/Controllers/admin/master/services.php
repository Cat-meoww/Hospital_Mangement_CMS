<?php

namespace App\Controllers\admin\master;

use App\Controllers\General;
use CodeIgniter\API\ResponseTrait;

class services extends General
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
        $this->data['title'] = "Services";
        $Services = new \App\Models\Services();
        $this->data['Dataset'] = $Services
            ->select('services.*,departments.id as dept_id,departments.name as dept_name')
            ->join('departments', 'departments.id = services.dept_id', 'left')
            ->orderBy('id', 'DESC')->findAll();
        $this->data['Options'] = [
            'department' => $this->generate_departments(),
            'visiblity' => [
                '' => 'Visiblity',
                'Public' => 'Public',
                'Private' => 'Private'
            ]
        ];

        return view('admin/all-master/services', $this->data);
    }

    private function generate_departments()
    {
        $Departments_model = new \App\Models\Departments();

        $arrayOfObjects = $Departments_model->select('id,name')->get()->getResult();
        $associativeArray = [];
        $associativeArray[''] = 'Select Department';
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
                'name' => [
                    'label' => 'Service Name',
                    'rules' => "trim|required|min_length[3]|max_length[150]|is_unique[services.name]",

                ],
                'dept_id' => [
                    'label' => 'Department',
                    'rules' => "trim|required|is_not_unique[departments.id]",
                    'errors' => [
                        'is_not_unique' => "Related Department not founded"
                    ],
                ],
                'description' => [
                    'label' => 'Description',
                    'rules' => "trim|required|min_length[3]|max_length[500]|",
                ],
                'slug' => [
                    'label' => 'Slug',
                    'rules' => "required|alpha_dash|is_unique[services.slug]",
                ],
                'visiblity' => [
                    'label' => " Visiblity",
                    'rules' => "required|in_list[Public,Private]",
                ],
            ];
            if ($this->validate($rules)) {
                $Services = new \App\Models\Services();

                $query = $Services->insert([
                    'name' => $this->request->getPost('name'),
                    'dept_id' => $this->request->getPost('dept_id'),
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
                    'rules' => "trim|required|is_natural|is_not_unique[services.id]",
                    'errors' => [
                        'is_not_unique' => "Related Service not founded"
                    ],
                ],
                'name' => [
                    'label' => 'Service Name',
                    'rules' => "trim|required|min_length[3]|max_length[300]|is_unique[services.name,id,{id}]",
                ],
                'description' => [
                    'label' => 'Description',
                    'rules' => "trim|required|min_length[3]|max_length[500]|",
                ],
                'slug' => [
                    'label' => 'Slug',
                    'rules' => "required|regex_match[/[A-Za-z0-9\-]+/]|is_unique[services.slug,id,{id}]",
                ],
                'dept_id' => [
                    'label' => 'Department',
                    'rules' => "trim|required|is_not_unique[departments.id]",
                    'errors' => [
                        'is_not_unique' => "Related Department not founded"
                    ],
                ],
                'visiblity' => [
                    'label' => " Visiblity",
                    'rules' => "required|in_list[Public,Private]",
                ],
            ];
            if ($this->validate($rules)) {
                $Services = new \App\Models\Services();
                $id = $this->request->getPost("id");


                $query = $Services->where('id', $id)->set([
                    'name' => $this->request->getPost('name'),
                    'description' => $this->request->getPost('description'),
                    'slug' => $this->request->getPost('slug'),
                    'dept_id' => $this->request->getPost('dept_id'),
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
                    'rules' => "trim|required|is_natural|is_not_unique[services.id]",
                    'errors' => [
                        'is_not_unique' => "Related Service not founded"
                    ],
                ],
            ];
            if ($this->validate($rules)) {
                $id = $this->request->getPost("id");
                $Services = new \App\Models\Services();

                $query = $Services->where('id', $id)->delete();
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
