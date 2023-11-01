<?php

namespace App\Controllers\API\admin;


use App\Controllers\General;
use CodeIgniter\API\ResponseTrait;

class master extends General
{
    use ResponseTrait;


    public function __construct()
    {
        parent::__construct();
    }

    public function create_amenities()
    {

        try {

            $rules  = [
                'amenity' => [
                    'label' => 'Amenity',
                    'rules' => "trim|required|min_length[2]|is_unique[amenities.amenity]",
                ],
                'visiblity' => [
                    'label' => " Visiblity",
                    'rules' => "required|in_list[Public,Private]",
                ]
            ];
            if ($this->validate($rules)) {
                $Amenities = new \App\Models\Amenities();
                $query = $Amenities->insert([
                    'amenity' => $this->request->getPost("amenity"),
                    'visibility' => $this->request->getPost("visiblity"),
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
            $data = ['status' => 'bad'];
            $errors = $this->validator->getErrors();
            if (count($errors) > 0) {
                $data['errors'] = $errors;
            } else {
                $data['errors'] = $e->getMessage();
            }

            return $this->respond($data);
        }
    }
    public function update_amenities()
    {

        try {

            $rules  = [
                'id' => [
                    'label' => 'ID',
                    'rules' => "trim|required|is_natural|is_not_unique[amenities.id]",
                    'errors' => [
                        'is_not_unique' => "Related amenity not founded"
                    ],
                ],
                'amenity' => [
                    'label' => 'Amenity',
                    'rules' => "trim|required|min_length[2]|is_unique[amenities.amenity,id,{id}]",
                    'errors' => [
                        'is_unique' => "The Amenity fields must contain a unique value. Duplicate already exist."
                    ],
                ],
                'visiblity' => [
                    'label' => " Visiblity",
                    'rules' => "required|in_list[Public,Private]",
                ]
            ];
            if ($this->validate($rules)) {
                $Amenities = new \App\Models\Amenities();
                $query = $Amenities->where('id', $this->request->getPost("id"))->set([
                    'amenity' => $this->request->getPost("amenity"),
                    'visibility' => $this->request->getPost("visiblity"),
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
            $data = ['status' => 'bad'];
            $errors = $this->validator->getErrors();
            if (count($errors) > 0) {
                $data['errors'] = $errors;
            } else {
                $data['errors'] = $e->getMessage();
            }

            return $this->respond($data);
        }
    }
    public function delete_amenities()
    {

        try {

            $rules  = [
                'id' => [
                    'label' => 'ID',
                    'rules' => "trim|required|is_natural|is_not_unique[amenities.id]",
                    'errors' => [
                        'is_not_unique' => "Related amenity not founded"
                    ],
                ],
            ];
            if ($this->validate($rules)) {
                $Amenities = new \App\Models\Amenities();
                $query = $Amenities->where('id', $this->request->getPost("id"))->delete();
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
            $data = ['status' => 'bad'];
            $errors = $this->validator->getErrors();
            if (count($errors) > 0) {
                $data['errors'] = $errors;
            } else {
                $data['errors'] = $e->getMessage();
            }

            return $this->respond($data);
        }
    }
    public function create_property_type()
    {

        try {

            $rules  = [
                'property_type' => [
                    'label' => 'Property type',
                    'rules' => "trim|required|min_length[2]|is_unique[property_type.property]",
                ],
                'visiblity' => [
                    'label' => " Visiblity",
                    'rules' => "required|in_list[Public,Private]",
                ]
            ];
            if ($this->validate($rules)) {
                $property_type = new \App\Models\PropertyType();
                $query = $property_type->insert([
                    'property' => $this->request->getPost("property_type"),
                    'visibility' => $this->request->getPost("visiblity"),
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
            $data = ['status' => 'bad'];
            $errors = $this->validator->getErrors();
            if (count($errors) > 0) {
                $data['errors'] = $errors;
            } else {
                $data['errors'] = $e->getMessage();
            }

            return $this->respond($data);
        }
    }
    public function update_property_type()
    {

        try {

            $rules  = [
                'id' => [
                    'label' => 'ID',
                    'rules' => "trim|required|is_natural|is_not_unique[property_type.id]",
                    'errors' => [
                        'is_not_unique' => "Related amenity not founded"
                    ],
                ],
                'property_type' => [
                    'label' => 'Property type',
                    'rules' => "trim|required|min_length[2]|is_unique[property_type.property,id,{id}]",
                    'errors' => [
                        'is_unique' => "The Property type fields must contain a unique value. Duplicate already exist."
                    ],
                ],
                'visiblity' => [
                    'label' => " Visiblity",
                    'rules' => "required|in_list[Public,Private]",
                ]
            ];
            if ($this->validate($rules)) {
                $property_type = new \App\Models\PropertyType();
                $query = $property_type->where('id', $this->request->getPost("id"))->set([
                    'property' => $this->request->getPost("property_type"),
                    'visibility' => $this->request->getPost("visiblity"),
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
            $data = ['status' => 'bad'];
            $errors = $this->validator->getErrors();
            if (count($errors) > 0) {
                $data['errors'] = $errors;
            } else {
                $data['errors'] = $e->getMessage();
            }

            return $this->respond($data);
        }
    }
    public function delete_property_type()
    {

        try {

            $rules  = [
                'id' => [
                    'label' => 'ID',
                    'rules' => "trim|required|is_natural|is_not_unique[property_type.id]",
                    'errors' => [
                        'is_not_unique' => "Related property type not founded"
                    ],
                ],
            ];
            if ($this->validate($rules)) {
                $property_type = new \App\Models\PropertyType();
                $query = $property_type->where('id', $this->request->getPost("id"))->delete();
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
            $data = ['status' => 'bad'];
            $errors = $this->validator->getErrors();
            if (count($errors) > 0) {
                $data['errors'] = $errors;
            } else {
                $data['errors'] = $e->getMessage();
            }

            return $this->respond($data);
        }
    }

    public function create_cms_faq()
    {

        try {

            $rules  = [
                'question' => [
                    'label' => 'Question',
                    'rules' => "trim|required|min_length[3]|max_length[500]|is_unique[cms_faq.question]",
                ],
                'answer' => [
                    'label' => 'Answer',
                    'rules' => "trim|required|min_length[2]",
                ],
                'visiblity' => [
                    'label' => " Visiblity",
                    'rules' => "required|in_list[Public,Private]",
                ]
            ];
            if ($this->validate($rules)) {
                $faq = new \App\Models\cms\Cms_faq();
                $query = $faq->insert([
                    'question' => $this->request->getPost("question"),
                    'answer' => $this->request->getPost("answer"),
                    'visibility' => $this->request->getPost("visiblity"),
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
            $data = ['status' => 'bad'];
            $errors = $this->validator->getErrors();
            if (count($errors) > 0) {
                $data['errors'] = $errors;
            } else {
                $data['errors'] = $e->getMessage();
            }

            return $this->respond($data);
        }
    }
    public function update_cms_faq()
    {

        try {

            $rules  = [
                'id' => [
                    'label' => 'ID',
                    'rules' => "trim|required|is_natural|is_not_unique[cms_faq.id]",
                    'errors' => [
                        'is_not_unique' => "Related Faq not founded"
                    ],
                ],
                'question' => [
                    'label' => 'Question',
                    'rules' => "trim|required|min_length[2]|is_unique[cms_faq.question,id,{id}]",
                    'errors' => [
                        'is_unique' => "The Property type fields must contain a unique value. Duplicate already exist."
                    ],
                ],
                'answer' => [
                    'label' => 'Answer',
                    'rules' => "trim|required|min_length[2]",
                ],
                'visiblity' => [
                    'label' => " Visiblity",
                    'rules' => "required|in_list[Public,Private]",
                ]
            ];
            if ($this->validate($rules)) {
                $faq = new \App\Models\cms\Cms_faq();
                $query = $faq->where('id', $this->request->getPost("id"))->set([
                    'question' => $this->request->getPost("question"),
                    'answer' => $this->request->getPost("answer"),
                    'visibility' => $this->request->getPost("visiblity"),
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
            $data = ['status' => 'bad'];
            $errors = $this->validator->getErrors();
            if (count($errors) > 0) {
                $data['errors'] = $errors;
            } else {
                $data['errors'] = $e->getMessage();
            }

            return $this->respond($data);
        }
    }
    public function delete_cms_faq()
    {

        try {

            $rules  = [
                'id' => [
                    'label' => 'ID',
                    'rules' => "trim|required|is_natural|is_not_unique[cms_faq.id]",
                    'errors' => [
                        'is_not_unique' => "Related FAQ not founded"
                    ],
                ],
            ];
            if ($this->validate($rules)) {
                $faq = new \App\Models\cms\Cms_faq();
                $query = $faq->where('id', $this->request->getPost("id"))->delete();
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
            $data = ['status' => 'bad'];
            $errors = $this->validator->getErrors();
            if (count($errors) > 0) {
                $data['errors'] = $errors;
            } else {
                $data['errors'] = $e->getMessage();
            }

            return $this->respond($data);
        }
    }
}
