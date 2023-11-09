<?php

namespace App\Controllers\admin\master;

use App\Controllers\General;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Model;
use Config\App;

class location extends General
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
        $this->data['title'] = "Locations";
        $Ads = new \App\Models\Locations();
        $this->data['Faqs'] = $Ads->orderBy('id', 'DESC')->findAll();
        $this->data['Options'] = [
            'state' => $this->generate_states(),
            'visiblity' => [
                '' => 'Visiblity',
                'Public' => 'Public',
                'Private' => 'Private'
            ]
        ];
        return view('admin/all-master/locations', $this->data);
    }

    private function generate_states($country_id = 101)
    {
        $states_model = new \App\Models\States();

        $arrayOfObjects = $states_model->select('name')->where('country_id', $country_id)->get()->getResult();
        $associativeArray = [];
        $associativeArray[''] = 'Select State';
        foreach ($arrayOfObjects as $object) {
            $associativeArray[$object->name] = $object->name;
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
                'city' => [
                    'label' => 'City Name',
                    'rules' => "trim|required|min_length[3]|max_length[300]|is_unique[locations.state]",
                ],

                'state' => [
                    'label' => 'State',
                    'rules' => "required|is_not_unique[states.name]",
                ],
                'slug' => [
                    'label' => 'Slug',
                    'rules' => "required|alpha_dash|is_unique[locations.slug]",
                ],
                'visiblity' => [
                    'label' => " Visiblity",
                    'rules' => "required|in_list[Public,Private]",
                ],
            ];
            if ($this->validate($rules)) {
                $Locations = new \App\Models\Locations();

                $query = $Locations->insert([
                    'city' => $this->request->getPost('city'),
                    'state' => $this->request->getPost('state'),
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
                    'rules' => "trim|required|is_natural|is_not_unique[locations.id]",
                    'errors' => [
                        'is_not_unique' => "Related Ad not founded"
                    ],
                ],
                'city' => [
                    'label' => 'City Name',
                    'rules' => "trim|required|min_length[3]|max_length[300]|is_unique[locations.state,id,{id}]",
                ],
                'state' => [
                    'label' => 'State',
                    'rules' => "required|is_not_unique[states.name]",
                ],
                'slug' => [
                    'label' => 'Slug',
                    'rules' => "required|regex_match[/[A-Za-z0-9\-]+/]|is_unique[locations.slug,id,{id}]",
                ],
                'visiblity' => [
                    'label' => " Visiblity",
                    'rules' => "required|in_list[Public,Private]",
                ],
            ];
            if ($this->validate($rules)) {
                $Locations = new \App\Models\Locations();
                $id = $this->request->getPost("id");


                $query = $Locations->where('id', $id)->set([
                    'city' => $this->request->getPost('city'),
                    'state' => $this->request->getPost('state'),
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
                    'rules' => "trim|required|is_natural|is_not_unique[locations.id]",
                    'errors' => [
                        'is_not_unique' => "Related Location not founded"
                    ],
                ],
            ];
            if ($this->validate($rules)) {
                $id = $this->request->getPost("id");
                $Locations = new \App\Models\Locations();

                $query = $Locations->where('id', $id)->delete();
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
