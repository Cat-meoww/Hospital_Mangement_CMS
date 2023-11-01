<?php

namespace App\Controllers\admin\cms;

use App\Controllers\General;

use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Files\FileCollection;

class best_deals extends General
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
        $this->data['title'] = "Best Deals";
        $Deals = new \App\Models\cms\Deals();
        $this->data['Deals'] = $Deals->select("cms_deals.*,properties.title,users.username")
            ->join('properties', 'properties.uuid = cms_deals.property_uuid', 'INNER')
            ->join('users', 'users.id = properties.agent_id', 'INNER')
            ->orderBy('id', 'DESC')
            ->findAll();
        $this->data['Options'] = [
            'visiblity' => [
                '' => 'Visiblity',
                'Public' => 'Public',
                'Private' => 'Private'
            ]
        ];
        return view('admin/cms/best_deals', $this->data);
    }

    /**
     * API post forms
     */
    public function create_deal()
    {

        try {

            $rules  = [
                'uuid' => [
                    'label' => 'Property UUID',
                    'rules' => "trim|required|is_not_unique[properties.uuid]",
                    'errors' => [
                        'is_not_unique' => "Please enter a valid Property UUID"
                    ]
                ],
                'visiblity' => [
                    'label' => " Visiblity",
                    'rules' => "required|in_list[Public,Private]",
                ],

            ];
            if ($this->validate($rules)) {

                $uuid = $this->request->getPost('uuid');
                $visiblity = $this->request->getPost('visiblity');
                $Deals = new \App\Models\cms\Deals();
                $query = $Deals->insert([
                    'property_uuid' => $uuid,
                    'visibility' => $visiblity,
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
    public function update_deal()
    {

        try {

            $rules  = [
                'id' => [
                    'label' => 'ID',
                    'rules' => "trim|required|is_natural|is_not_unique[cms_deals.id]",
                    'errors' => [
                        'is_not_unique' => "Related Deal not founded"
                    ],
                ],
                'uuid' => [
                    'label' => 'Property UUID',
                    'rules' => "trim|required|is_not_unique[properties.uuid]",
                    'errors' => [
                        'is_not_unique' => "Please enter a valid Property UUID"
                    ]
                ],
                'visiblity' => [
                    'label' => " Visiblity",
                    'rules' => "required|in_list[Public,Private]",
                ],
            ];
            if ($this->validate($rules)) {
                $Deals = new \App\Models\cms\Deals();
                $id = $this->request->getPost("id");

                $query = $Deals->where('id', $id)->set([
                    'property_uuid' => $this->request->getPost("uuid"),
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
            return $this->handle_exception($e);
        }
    }


    public function delete_deal()
    {

        try {

            $rules  = [
                'id' => [
                    'label' => 'ID',
                    'rules' => "trim|required|is_natural|is_not_unique[cms_deals.id]",
                    'errors' => [
                        'is_not_unique' => "Related Deal not founded"
                    ],
                ],
            ];
            if ($this->validate($rules)) {
                $id = $this->request->getPost("id");
                $Deals = new \App\Models\cms\Deals();



                $query = $Deals->where('id', $id)->delete();
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
