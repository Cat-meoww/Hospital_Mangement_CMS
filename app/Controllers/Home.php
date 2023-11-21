<?php

namespace App\Controllers;

use \App\Models\UserModel;
use CodeIgniter\Exceptions\PageNotFoundException;
use Exception;

class Home extends BaseController
{
    public $session;
    public $db;
    public $usermodel;
    public $data;
    public $date;

    public function __construct()
    {
        $this->session = session();
        $this->usermodel = new UserModel();
        $this->data['session'] = $this->session;
        $this->data['uri']  = service('uri');
        helper(['url', 'session', 'custom', 'number']);
        $this->data['title'] = "";
        $this->date = date("Y-m-d h:i:s");
        $this->db = db_connect();
    }
    public function index()
    {
        return view('frontend/index', $this->data);
    }
    public function doctors_list($location_slug)
    {
        try {
           
            helper(['form']);
            $this->data['title'] = "Doctors";
            $validation = \Config\Services::validation();
            $validation->setRules([
                'slug' => [
                    'label'  => 'Location',
                    'rules'  => 'required|is_not_unique[branches.slug]',
                    'errors' => [
                        'is_not_unique' => 'Location {value} Not found',
                    ]
                ],
            ]);
            $data = [
                'slug'   => $location_slug,
            ];
            if (!$validation->run($data)) {
                throw new PageNotFoundException($validation->getError('slug'));
            } else {
                $Doctors = new \App\Models\Doctors();
                $Branches = new \App\Models\Branches();
                $filter_service = $this->request->getVar('service');

                $Branch = $Branches->where('slug', $location_slug)->where('visibility', 'Public')->first();
                $Branch_doctors = $Doctors->whereIn('id', array_map('intval', explode(',', $Branch->doctors)))->where('visibility', 'Public');

                // Filter By Service
                if ($filter_service ?? false) {
                    // $Branch_doctors = $Branch_doctors->whereIn('services', [17]);
                    $Branch_doctors = $Branch_doctors->where("FIND_IN_SET($filter_service,services) != FALSE");
                }

                $Branch_doctors = $Branch_doctors->get()->getResult();
                // dd($this->db->getLastQuery()->getQuery());
                $this->data['branch'] = $Branch;
                $this->data['doctors'] = $Branch_doctors;
                $this->data['filter_service'] = $filter_service;
                $this->data['services'] = $this->generate_services();
                return view('frontend/doctors-list', $this->data);
            }
        } catch (\Exception $e) {
            throw $e;
        }
    }
    private function generate_services()
    {
        $Services = new \App\Models\Services();

        $arrayOfObjects = $Services->select('id,name')->get()->getResult();
        $associativeArray = [];
        $associativeArray[''] = "All";
        foreach ($arrayOfObjects as $object) {
            $associativeArray[$object->id] = $object->name;
        }
        return $associativeArray;
    }
}
