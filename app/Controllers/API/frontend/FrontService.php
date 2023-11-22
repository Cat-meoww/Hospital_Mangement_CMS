<?php

namespace App\Controllers\API\frontend;

use CodeIgniter\API\ResponseTrait;
use App\Controllers\BaseController;

class FrontService extends BaseController
{
    use ResponseTrait;

    private $geo_url;
    private bool $cache = false;
    private int $cacheIntervel = 30;

    public function __construct()
    {
        if ($this->cache) {
            $this->cachePage($this->cacheIntervel);
        }
    }
    public function get_services()
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

                $Dataset = $Services->select('id,name as text')->whereIn('id ', $selected_services)->where('visibility', 'Public')->get()->getResult();

                if ($query) {
                    return $this->respond([
                        'status' => "success",
                        'data' => $Dataset,
                    ]);
                }

                throw new \Exception("Unable to retrive data");
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
