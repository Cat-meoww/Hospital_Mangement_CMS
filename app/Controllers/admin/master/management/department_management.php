<?php

namespace App\Controllers\admin\master\management;

use App\Controllers\General;
use CodeIgniter\API\ResponseTrait;

class department_management extends General
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
        $this->data['title'] = "Department Management";
        $Branches = new \App\Models\Branches();
        $this->data['Dataset'] = $Branches->orderBy('id', 'DESC')->findAll();
        $this->data['Options'] = [
            'locations' => $this->generate_locations(),
            'visiblity' => [
                '' => 'Visiblity',
                'Public' => 'Public',
                'Private' => 'Private'
            ]
        ];

        return view('admin/all-master/branches', $this->data);
    }
    public function generate_locations()
    {
        $Locations = new \App\Models\Locations();

        $arrayOfObjects = $Locations->select('id,city')->get()->getResult();
        $associativeArray = [];
        $associativeArray[''] = 'Select City';
        foreach ($arrayOfObjects as $object) {
            $associativeArray[$object->id] = $object->city;
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
                    'rules' => "trim|required|min_length[3]|max_length[150]|is_unique[branches.name]",
                ],

                'description' => [
                    'label' => 'Description',
                    'rules' => "trim|required|min_length[3]|max_length[500]",
                ],
                'location' => [
                    'label' => 'Location',
                    'rules' => "trim|required|is_not_unique[locations.id]",
                ],
                'slug' => [
                    'label' => 'Slug',
                    'rules' => "required|alpha_dash|is_unique[branches.slug]",
                ],
                'address' => [
                    'label' => 'Address',
                    'rules' => "required|max_length[500]|is_unique[branches.address]",
                ],
                'email' => [
                    'label' => 'email',
                    'rules' => "required|max_length[50]|valid_email",
                ],
                'telephone' => [
                    'label' => 'Telephone',
                    'rules' => "required|max_length[15]|regex_match[/^[0-9]{10}$/]",
                    'errors' => [
                        'regex_match' => 'The {field} field must be a 10-digit number.'
                    ]
                ],
                'gmap' => [
                    'label' => 'Google map url ',
                    'rules' => "required|valid_url|valid_url_strict",
                ],
                'visiblity' => [
                    'label' => " Visiblity",
                    'rules' => "required|in_list[Public,Private]",
                ],
            ];
            if ($this->validate($rules)) {
                $Branches = new \App\Models\Branches();

                $query = $Branches->insert([
                    'name' => $this->request->getPost('name'),
                    'description' => $this->request->getPost('description'),
                    'slug' => $this->request->getPost('slug'),
                    'location_id' => $this->request->getPost('location'),
                    'address' => $this->request->getPost('address'),
                    'email' => $this->request->getPost('email'),
                    'telephone' => $this->request->getPost('telephone'),
                    'gmap' => $this->request->getPost('gmap'),
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
                    'rules' => "trim|required|is_natural|is_not_unique[branches.id]",
                    'errors' => [
                        'is_not_unique' => "Related Service not founded"
                    ],
                ],
                'name' => [
                    'label' => 'Service Name',
                    'rules' => "trim|required|min_length[3]|max_length[300]|is_unique[branches.name,id,{id}]",
                ],
                'description' => [
                    'label' => 'Description',
                    'rules' => "trim|required|min_length[3]|max_length[500]",
                ],
                'location' => [
                    'label' => 'Location',
                    'rules' => "trim|required|is_not_unique[locations.id]",
                ],

                'address' => [
                    'label' => 'Address',
                    'rules' => "required|max_length[500]|is_unique[branches.address,id,{id}]",
                ],
                'email' => [
                    'label' => 'email',
                    'rules' => "required|max_length[50]|valid_email",
                ],
                'telephone' => [
                    'label' => 'Telephone',
                    'rules' => "required|max_length[15]|regex_match[/^[0-9]{10}$/]",
                    'errors' => [
                        'regex_match' => 'The {field} field must be a 10-digit number.'
                    ]
                ],
                'gmap' => [
                    'label' => 'Google map url ',
                    'rules' => "required|valid_url|valid_url_strict",
                ],
                'slug' => [
                    'label' => 'Slug',
                    'rules' => "required|regex_match[/[A-Za-z0-9\-]+/]|is_unique[branches.slug,id,{id}]",
                ],
                'visiblity' => [
                    'label' => " Visiblity",
                    'rules' => "required|in_list[Public,Private]",
                ],
            ];
            if ($this->validate($rules)) {
                $Branches = new \App\Models\Branches();
                $id = $this->request->getPost("id");


                $query = $Branches->where('id', $id)->set([
                    'name' => $this->request->getPost('name'),
                    'description' => $this->request->getPost('description'),
                    'slug' => $this->request->getPost('slug'),
                    'location_id' => $this->request->getPost('location'),
                    'address' => $this->request->getPost('address'),
                    'email' => $this->request->getPost('email'),
                    'telephone' => $this->request->getPost('telephone'),
                    'gmap' => $this->request->getPost('gmap'),
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
                $Branches = new \App\Models\Branches();

                $query = $Branches->where('id', $id)->delete();
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
