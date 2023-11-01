<?php

namespace App\Controllers\API;


use App\Controllers\General;
use CodeIgniter\API\ResponseTrait;

class Authed extends General
{
    use ResponseTrait;


    public function __construct()
    {
        parent::__construct();
    }

    public function set_favorites()
    {
        try {

            $rules  = [
                'prop_id' => [
                    'label' => 'Property id',
                    'rules' => "is_not_unique[properties.id]",
                ],
            ];
            if ($this->validate($rules)) {
                $Favorites = new \App\Models\Favorites();

                $dataset = [
                    'user_id' => $this->session->user_id,
                    'property_id' => $this->request->getPost('prop_id')
                ];
                $fav = $Favorites->select('id')->where($dataset)->first();

                if ($fav) {

                    $query = $Favorites->where($dataset)->delete();
                    if ($query) {
                        return $this->respond([
                            'status' => "success",
                            'action' => 'delete',
                            'message' => "Removed Favorite",

                        ]);
                    } else {
                        throw new \Exception("Unable to Delete Favorite");
                    }
                } else {
                    $query = $Favorites->insert($dataset);
                    if ($query) {
                        return $this->respond([
                            'status' => "success",
                            'action' => 'insert',
                            'message' => "Added to Favorites",
                        ]);
                    } else {
                        throw new \Exception("Unable to Insert Favorite");
                    }
                }
            } else {
                throw new \Exception("Invalid data");
            }
        } catch (\Exception $e) {
            $data = ['status' => 'bad', 'message' => $e->getMessage()];
            $errors = $this->validator->getErrors();
            if (count($errors) > 0) {
                $data['errors'] = $errors;
            } else {
                $data['errors'] = $e->getMessage();
            }
            return $this->respond($data);
        }
    }
    public function get_favorites()
    {
        try {
            $Favorites = new \App\Models\Favorites();

            $dataset = [
                'user_id' => $this->session->user_id,
            ];
            $fav = $Favorites->select('property_id as id')->where($dataset)->get()->getResult();

            $response = ['status' => 'success', 'data' => $fav];
            return $this->respond($response);
        } catch (\Exception $e) {
            $data = ['status' => 'bad', 'message' => $e->getMessage()];

            return $this->respond($data);
        }
    }
}
