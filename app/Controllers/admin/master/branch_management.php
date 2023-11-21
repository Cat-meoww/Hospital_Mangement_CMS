<?php

namespace App\Controllers\admin\master;

use App\Controllers\General;
use CodeIgniter\API\ResponseTrait;

class branch_management extends General
{
    use ResponseTrait;
    public function __construct()
    {
        parent::__construct();
    }
    public function departments()
    {
        helper(['form']);
        $this->data['title'] = "Department Management";
        $Branches = new \App\Models\Branches();
        $this->data['Dataset'] = $Branches->orderBy('id', 'DESC')->findAll();
        $this->data['Options'] = [
            'departments' => $this->generate_departments(),
            'locations' => $this->generate_locations(),
            'visiblity' => [
                '' => 'Visiblity',
                'Public' => 'Public',
                'Private' => 'Private'
            ]
        ];

        return view('admin/all-master/management/branch_department', $this->data);
    }
    public function services($depts = false)
    {
        helper(['form']);
        $this->data['title'] = "Services Management";
        $Branches = new \App\Models\Branches();

        $this->data['Dataset'] = $Branches->orderBy('id', 'DESC')->findAll();
        $this->data['Options'] = [
            'services' => $this->generate_services(),
            'locations' => $this->generate_locations(),
            'visiblity' => [
                '' => 'Visiblity',
                'Public' => 'Public',
                'Private' => 'Private'
            ]
        ];

        return view('admin/all-master/management/branch_services', $this->data);
    }
    public function doctors()
    {
        helper(['form']);
        $this->data['title'] = "Doctors Management";
        $Branches = new \App\Models\Branches();

        $this->data['Dataset'] = $Branches->orderBy('id', 'DESC')->findAll();
        $this->data['Options'] = [
            'doctors' => $this->generate_doctors(),
            'locations' => $this->generate_locations(),
            'visiblity' => [
                '' => 'Visiblity',
                'Public' => 'Public',
                'Private' => 'Private'
            ]
        ];

        return view('admin/all-master/management/branch_doctors', $this->data);
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
    public function generate_departments()
    {
        $Departments = new \App\Models\Departments();

        $arrayOfObjects = $Departments->select('id,name')->get()->getResult();
        $associativeArray = [];

        foreach ($arrayOfObjects as $object) {
            $associativeArray[$object->id] = $object->name;
        }
        return $associativeArray;
    }
    public function generate_services()
    {
        $Services = new \App\Models\Services();

        $arrayOfObjects = $Services->select('id,name')->get()->getResult();
        $associativeArray = [];

        foreach ($arrayOfObjects as $object) {
            $associativeArray[$object->id] = $object->name;
        }
        return $associativeArray;
    }
    public function generate_doctors()
    {
        $Doctors = new \App\Models\Doctors();

        $arrayOfObjects = $Doctors->select('id,name')->get()->getResult();
        $associativeArray = [];

        foreach ($arrayOfObjects as $object) {
            $associativeArray[$object->id] = $object->name;
        }
        return $associativeArray;
    }



    /**
     * API post forms
     */

    public function update_departments()
    {

        try {

            $rules  = [
                'id' => [
                    'label' => 'Branch',
                    'rules' => "trim|required|is_natural|is_not_unique[branches.id]",
                    'errors' => [
                        'is_not_unique' => "Related {field} not founded"
                    ],
                ],
                'departments.*' => [
                    'label' => 'Department ID ',
                    'rules' => "trim|required|is_natural|is_not_unique[departments.id,visibility,Public]",
                    'errors' => [
                        'is_not_unique' => "Related {field} not founded"
                    ],
                ],


            ];
            if ($this->validate($rules)) {
                $Branches = new \App\Models\Branches();
                $id = $this->request->getPost("id");


                $query = $Branches->where('id', $id)->set([
                    'departments' => implode(",", $this->request->getPost('departments[]')),
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
    public function update_services()
    {

        try {

            $rules  = [
                'id' => [
                    'label' => 'Branch',
                    'rules' => "trim|required|is_natural|is_not_unique[branches.id]",
                    'errors' => [
                        'is_not_unique' => "Related {field} not founded"
                    ],
                ],
                'services.*' => [
                    'label' => 'Service ID ',
                    'rules' => "trim|required|is_natural|is_not_unique[services.id,visibility,Public]",
                    'errors' => [
                        'is_not_unique' => "Related {field} not founded"
                    ],
                ],


            ];
            if ($this->validate($rules)) {
                $Branches = new \App\Models\Branches();
                $id = $this->request->getPost("id");


                $query = $Branches->where('id', $id)->set([
                    'services' => implode(",", $this->request->getPost('services[]')),
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
    public function update_doctors()
    {

        try {

            $rules  = [
                'id' => [
                    'label' => 'Branch',
                    'rules' => "trim|required|is_natural|is_not_unique[branches.id]",
                    'errors' => [
                        'is_not_unique' => "Related {field} not founded"
                    ],
                ],
                'doctors.*' => [
                    'label' => 'dDoctors ID ',
                    'rules' => "trim|required|is_natural|is_not_unique[doctors.id,visibility,Public]",
                    'errors' => [
                        'is_not_unique' => "Related {field} not founded"
                    ],
                ],


            ];
            if ($this->validate($rules)) {
                $Branches = new \App\Models\Branches();
                $id = $this->request->getPost("id");


                $query = $Branches->where('id', $id)->set([
                    'doctors' => implode(",", $this->request->getPost('doctors[]')),
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

    public function generate_service_options()
    {
        try {

            $rules  = [
                'branchid' => [
                    'label' => 'Branch',
                    'rules' => "trim|required|is_natural|is_not_unique[branches.id]",
                    'errors' => [
                        'is_not_unique' => "Related {field} not founded"
                    ],
                ],
            ];
            if ($this->validate($rules)) {
                $Branches = new \App\Models\Branches();
                $Services = new \App\Models\Services();
                $branchId = $this->request->getPost("branchid");


                $query = $Branches->where('id', $branchId)->first();

                $selected_services = explode(',', $query->services);



                $Dataset = $Services->select('id,name as text')->whereIn('dept_id', explode(',', $query->departments))->where('visibility', 'Public')->get()->getResult();

                foreach ($Dataset as $key => $value) {
                    if (in_array($value->id, $selected_services)) {
                        $Dataset[$key]->selected = true;
                    }
                }
                if ($query) {
                    return $this->respond([
                        'status' => "success",
                        'data' => $Dataset
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
    public function generate_doctor_options()
    {
        try {

            $rules  = [
                'branchid' => [
                    'label' => 'Branch',
                    'rules' => "trim|required|is_natural|is_not_unique[branches.id]",
                    'errors' => [
                        'is_not_unique' => "Related {field} not founded"
                    ],
                ],
            ];
            if ($this->validate($rules)) {
                $Branches = new \App\Models\Branches();
                $Doctors = new \App\Models\Doctors();
                $branchId = $this->request->getPost("branchid");


                $query = $Branches->where('id', $branchId)->first();

                $selected_doctors = explode(',', $query->doctors);



                $Dataset = $Doctors->select('id,name as text')->whereIn('services ', array_map('intval', explode(',', $query->services)))->where('visibility', 'Public')->get()->getResult();


                foreach ($Dataset as $key => $value) {
                    if (in_array($value->id, $selected_doctors)) {
                        $Dataset[$key]->selected = true;
                    }
                }
                if ($query) {
                    return $this->respond([
                        'status' => "success",
                        'data' => $Dataset,
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
