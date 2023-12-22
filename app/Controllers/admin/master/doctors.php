<?php

namespace App\Controllers\admin\master;

use App\Controllers\General;
use CodeIgniter\API\ResponseTrait;

class doctors extends General
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
        $this->data['title'] = "Doctors List";
        $Doctors = new \App\Models\Doctors();
        $this->data['Dataset'] = $Doctors
            ->select()
            ->orderBy('id', 'DESC')->findAll();
        $this->data['Options'] = [
            'departments' => $this->generate_departments(),
            'services' => $this->generate_services(),
            'roles' => $this->generate_roles(),
            'visiblity' => [
                '' => 'Visiblity',
                'Public' => 'Public',
                'Private' => 'Private'
            ]
        ];

        return view('admin/all-master/doctors', $this->data);
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
    private function generate_roles()
    {
        $Doctor_roles = new \App\Models\Doctors_roles();

        $arrayOfObjects = $Doctor_roles->select('id,name')->where('visibility', 'Public')->get()->getResult();
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
                    'label' => 'Doctor Name',
                    'rules' => "trim|required|min_length[3]|max_length[150]",
                ],
                'departments.*' => [
                    'label' => 'Department ID ',
                    'rules' => "trim|required|is_natural|is_not_unique[departments.id,visibility,Public]",
                    'errors' => [
                        'is_not_unique' => "Related {field} not founded"
                    ],
                ],
                'services.*' => [
                    'label' => 'Services ID ',
                    'rules' => "trim|required|is_natural|is_not_unique[services.id,visibility,Public]",
                    'errors' => [
                        'is_not_unique' => "Related {field} not founded"
                    ],
                ],
                'description' => [
                    'label' => 'Description',
                    'rules' => "trim|required|min_length[3]|max_length[500]|",
                ],
                'education' => [
                    'label' => 'Education',
                    'rules' => "trim|required|min_length[2]|max_length[500]",
                ],
                'experience' => [
                    'label' => 'experience',
                    'rules' => "trim|required|numeric|less_than[100]|greater_than_equal_to[1]",
                ],
                'role' => [
                    'label' => 'Role',
                    'rules' => "trim|required|is_not_unique[doctors_roles.id]",
                ],
                'slug' => [
                    'label' => 'Slug',
                    'rules' => "required|alpha_dash|is_unique[doctors.slug]",
                ],
                'visiblity' => [
                    'label' => " Visiblity",
                    'rules' => "required|in_list[Public,Private]",
                ],
                'imagefile' => [
                    'label' => "Profile Image",
                    'rules' => "uploaded[imagefile]|max_size[imagefile,1048]|is_image[imagefile]",
                ]
            ];
            if ($this->validate($rules)) {
                $Doctors = new \App\Models\Doctors();


                $imagename = $this->uploadImage('imagefile');
                if (!$imagename) {
                    throw new \Exception("Upload Image failed to save");
                }

                $query = $Doctors->insert([
                    'name' => $this->request->getPost('name'),
                    'description' => $this->request->getPost('description'),
                    'slug' => $this->request->getPost('slug'),
                    'dept_ids' => implode(",", $this->request->getPost('departments[]')),
                    'services' => implode(",", $this->request->getPost('services[]')),
                    'role' => $this->request->getPost('role'),
                    'education' => $this->request->getPost('education'),
                    'experience' => $this->request->getPost('experience'),
                    'image' => $imagename,
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
    private function uploadImage($imageName, $oldfilename = false)
    {

        $IMAGE = $this->request->getFile($imageName);

        $baseroot = ROOTPATH . 'public/uploads/doctors/';
        $SAVEDPATH = $baseroot . $IMAGE->getRandomName();

        $image = \Config\Services::image()
            ->withFile($IMAGE)
            ->fit(500, 500, 'center')
            ->save($SAVEDPATH);
        if (!$image) {
            return false;
        }

        if ($oldfilename) {
            $oldfile = new \CodeIgniter\Files\File($baseroot . $oldfilename);
            if ($oldfile->isFile()) {
                unlink($baseroot . $oldfilename);
            }
        }


        $file = new \CodeIgniter\Files\File($SAVEDPATH);

        return $file->getFilename();
    }
    public function update()
    {
        try {

            $rules  = [
                'id' => [
                    'label' => 'ID',
                    'rules' => "trim|required|is_natural|is_not_unique[doctors.id]",
                    'errors' => [
                        'is_not_unique' => "Related Service not founded"
                    ],
                ],
                'name' => [
                    'label' => 'Doctor Name',
                    'rules' => "trim|required|min_length[3]|max_length[150]",
                ],
                'departments.*' => [
                    'label' => 'Department ID ',
                    'rules' => "trim|required|is_natural|is_not_unique[departments.id,visibility,Public]",
                    'errors' => [
                        'is_not_unique' => "Related {field} not founded"
                    ],
                ],
                'services.*' => [
                    'label' => 'Services ID',
                    'rules' => "trim|required|is_natural|is_not_unique[services.id,visibility,Public]",
                    'errors' => [
                        'is_not_unique' => "Related {field} not founded"
                    ],
                ],
                'description' => [
                    'label' => 'Description',
                    'rules' => "trim|required|min_length[3]|max_length[500]",
                ],
                'education' => [
                    'label' => 'Education',
                    'rules' => "trim|required|min_length[2]|max_length[500]",
                ],
                'experience' => [
                    'label' => 'experience',
                    'rules' => "trim|required|numeric|less_than[100]|greater_than_equal_to[1]",
                ],
                'role' => [
                    'label' => 'Role',
                    'rules' => "trim|required|is_not_unique[doctors_roles.id]",
                ],
                'slug' => [
                    'label' => 'Slug',
                    'rules' => "required|alpha_dash|is_unique[doctors.slug,id,{id}]",
                ],
                'visiblity' => [
                    'label' => " Visiblity",
                    'rules' => "required|in_list[Public,Private]",
                ],

            ];
            if ($this->validate($rules)) {
                $Doctors = new \App\Models\Doctors();
                $id = $this->request->getPost("id");

                $update = [
                    'name' => $this->request->getPost('name'),
                    'description' => $this->request->getPost('description'),
                    'slug' => $this->request->getPost('slug'),
                    'dept_ids' => implode(",", $this->request->getPost('departments[]')),
                    'services' => implode(",", $this->request->getPost('services[]')),
                    'role' => $this->request->getPost('role'),
                    'education' => $this->request->getPost('education'),
                    'experience' => $this->request->getPost('experience'),
                    'visibility' => $this->request->getPost('visiblity'),
                    'created_by' => $this->session->user_id
                ];

                $olddata = $Doctors->select('image,slug')->where('id', $id)->first();
                $newimg = $this->request->getFile('imagefile');

                if ($newimg->getSize() > 0) {
                    $newimagename = $this->uploadImage('imagefile', $olddata->image);

                    if ($newimagename) {
                        $update['image'] = $newimagename;
                    }
                }

                $query = $Doctors->where('id', $id)->set($update)->update();

                if ($query) {
                    //CMS pages slug relation ship updated
                    $CmsPages = new  \App\Models\CmsPages();
                    $CmsPages->where('type', 'doctor')->where('slug', $olddata->slug)->set('slug', $this->request->getPost('slug'))->update();

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
                    'rules' => "trim|required|is_natural|is_not_unique[doctors.id]",
                    'errors' => [
                        'is_not_unique' => "Related Doctor not founded"
                    ],
                ],
            ];
            if ($this->validate($rules)) {
                $id = $this->request->getPost("id");
                $Doctors = new \App\Models\Doctors();
                $olddata = $Doctors->where('id', $id)->first();
                unlink(ROOTPATH . 'public/uploads/doctors/' . $olddata->image);
                $query = $Doctors->where('id', $id)->delete();
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

    public function generate_services_options()
    {
        try {

            $rules  = [
                'departments.*' => [
                    'label' => 'Department',
                    'rules' => "trim|required|is_not_unique[departments.id]",
                    'errors' => [
                        'is_not_unique' => "Related Department not founded"
                    ],
                ],

            ];
            if ($this->validate($rules)) {
                $Services = new \App\Models\Services();

                $doctors_id = $this->request->getPost('doctor_id') ?? false;

                $Dataset = $Services->select('id,name as text')->whereIn('dept_id',  $this->request->getPost('departments[]') ?? [])->where('visibility', 'Public')->get()->getResult();


                if ($doctors_id) {
                    $Doctors = new \App\Models\Doctors();
                    $query = $Doctors->select('services')->where('id', $doctors_id)->first();
                    if ($query) {
                        $selected_services = explode(',', $query->services);
                        foreach ($Dataset as $key => $value) {
                            if (in_array($value->id, $selected_services)) {
                                $Dataset[$key]->selected = true;
                            }
                        }
                    }
                }

                return $this->respond([
                    'status' => "success",
                    'data' => $Dataset
                ]);

                throw new \Exception("Unable to store data");
            } else {
                throw new \Exception("Invalid data");
            }
        } catch (\Exception $e) {
            return $this->handle_exception($e);
        }
    }
}
