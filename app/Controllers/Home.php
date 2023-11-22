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
        helper(['url', 'session', 'custom', 'number', 'form']);
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
    private function generate_branches()
    {
        $Branches = new \App\Models\Branches();

        $arrayOfObjects = $Branches->select('id,name')->where('visibility', 'Public')->get()->getResult();
        $associativeArray = [];
        $associativeArray[''] = "Select center";
        foreach ($arrayOfObjects as $object) {
            $associativeArray[$object->id] = $object->name;
        }
        return $associativeArray;
    }

    public function general_booking()
    {
        $this->data['title'] = "Book Appointment";
        $this->data['Options'] = [
            'branches' => $this->generate_branches(),
        ];

        return view('frontend/bookings/general-booking', $this->data);
    }

    public function book_appointment()
    {
        try {
            $rules = [
                'branch' => [
                    'label' => 'Branch',
                    'rules' => "trim|required|is_not_unique[branches.id,visibility,Public]",
                    'errors' => [
                        'is_not_unique' => "Related {field} not founded"
                    ],
                ],
                'service' => [
                    'label' => 'Service',
                    'rules' => "trim|required|is_not_unique[services.id,visibility,Public]",
                    'errors' => [
                        'is_not_unique' => "Related {field} not founded"
                    ],
                ],
                'name' => [
                    'label' => 'Full Name',
                    'rules' => "trim|required|alpha_space",

                ],
                'phone' => [
                    'label' => 'Phone Number',
                    'rules' => "trim|required|numeric|exact_length[10]",
                    'errors' => [
                        'numeric' => 'Required valid number',
                        'exact_length' => 'Required 10 digits {field}',
                    ]
                ],
                'email' => [
                    'label' => 'Email',
                    'rules' => "trim|required|valid_email|max_length[50]",
                ],
                'age' => [
                    'label' => 'Age',
                    'rules' => "trim|required|numeric|greater_than[0]|less_than[100]",
                    'errors' => [
                        'less_than' => "{field} must be less than 100 "
                    ],
                ],
                'booking-date' => [
                    'label' => 'Prefered Date',
                    'rules' => "trim|required|valid_date[Y-m-d]|from_today",
                ],
                'message' => [
                    'label' => 'Message',
                    'rules' => "trim|required",
                ],
            ];

            if (!$this->validate($rules)) {
                return redirect()->back()->withInput();
            } else {
                $GeneralBookings = new \App\Models\GeneralBookings();
                $Branches = new \App\Models\Branches();

                $branch = (int) $this->request->getPost('branch');
                $service = (int) $this->request->getPost('service');


                $foo = $Branches->where('id', $branch)->where("FIND_IN_SET($service,services) != FALSE")->first();
                if (!$foo) {
                    throw new Exception("unable to locate branch or service");
                }

                $query = $GeneralBookings->insert([
                    'branch' => $branch,
                    'service' => $service,
                    'name' => $this->request->getPost('name'),
                    'age' => $this->request->getPost('age'),
                    'message' => $this->request->getPost('message'),
                    'phone' => $this->request->getPost('phone'),
                    'email' => $this->request->getPost('email'),
                    'booking_date' => $this->request->getPost('booking-date'),
                ]);

                if ($query) {
                    return redirect()->back()->with('success', "Successfully added your Booking appointment");
                }
                throw new Exception("Unable to store data");
            }
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', $e->getMessage());
        }
    }
}
