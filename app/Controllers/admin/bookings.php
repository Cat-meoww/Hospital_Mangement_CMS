<?php

namespace App\Controllers\admin;

use App\Controllers\General;
use CodeIgniter\API\ResponseTrait;


class bookings extends General
{
    use ResponseTrait;
    public function __construct()
    {
        helper('form');
        parent::__construct();
    }
    public function index()
    {
        return $this->dashboard();
    }
    public function dashboard()
    {
        $this->data['title'] = "Dashboard";
        return view('admin/dashboard', $this->data);
    }
    public function general_bookings()
    {

        $GeneralBookings = new \App\Models\GeneralBookings();
        $this->data['title'] = "General Booking Enquires";
        $this->data['Dataset'] = $GeneralBookings->orderBy('created_on', 'DESC')->findAll();


        $this->data['Options'] = [
            'services' => $this->generate_services(),
            'branch' => $this->generate_branches(),
            'date_types' => [
                'ENTRY' => "Entry Date Wise",
                'BOOKING' => "Booking Date Wise",
                'FOLLOW' => "Follow up Date Wise"
            ],
            'action' => [
                '' => "Select atleast One",
                '2' => "Progress",
                '3' => "Completed",
                '4' => "Rejected"
            ],
            'booking_status' =>  $this->generate_booking_status(),
            'branches' =>  $this->generate_branches(),
            'services' =>  $this->generate_services()
        ];

        return view('admin/bookings/general_bookings', $this->data);
    }
    public function service_bookings()
    {

        $GeneralBookings = new \App\Models\GeneralBookings();
        $this->data['title'] = "Service Booking Enquires";
        $this->data['Dataset'] = $GeneralBookings->orderBy('created_on', 'DESC')->findAll();


        $this->data['Options'] = [
            'services' => $this->generate_services(),
            'branch' => $this->generate_branches(),
            'date_types' => [
                'ENTRY' => "Entry Date Wise",
                'BOOKING' => "Booking Date Wise",
                'FOLLOW' => "Follow up Date Wise"
            ],
            'action' => [
                '' => "Select atleast One",
                '2' => "Follow Up",
                '3' => "Turned On",
                '4' => "Turned Off"
            ],
            'booking_status' =>  $this->generate_booking_status(),
            'branches' =>  $this->generate_branches(),
            'services' =>  $this->generate_services()
        ];

        return view('admin/bookings/service_bookings', $this->data);
    }
    public function video_bookings()
    {


        $VideoBookings = new \App\Models\VideoBookings();
        $this->data['title'] = "Video Booking Enquires";



        $this->data['Options'] = [
            'services' => $this->generate_services(),
            'doctors' => $this->generate_doctors(),
            'date_types' => [
                'ENTRY' => "Entry Date Wise",
                'BOOKING' => "Booking Date Wise"
            ],
            'payment_status' => [
                'ALL' => "All",
                'INIT' => "Init",
                'SUCCESS' => "Success",
                'FAILED' => "Failed",
            ]
        ];
        return view('admin/bookings/video_bookings', $this->data);
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

        $arrayOfObjects = $Branches->select('id,name')->get()->getResult();
        $associativeArray = [];
        $associativeArray[''] = "All";
        foreach ($arrayOfObjects as $object) {
            $associativeArray[$object->id] = $object->name;
        }
        return $associativeArray;
    }
    private function generate_doctors()
    {
        $Doctors = new \App\Models\Doctors();

        $arrayOfObjects = $Doctors->select('id,name')->get()->getResult();
        $associativeArray = [];

        foreach ($arrayOfObjects as $object) {
            $associativeArray[$object->id] = $object->name;
        }
        return $associativeArray;
    }
    private function generate_booking_status()
    {


        $arrayOfObjects = $this->db->table('general_booking_status')->select('id,status,alias')->get()->getResult();
        $associativeArray = [];
        $associativeArray[''] = "All";

        foreach ($arrayOfObjects as $object) {
            $associativeArray[$object->id] = $object->alias;
            $this->data['booking_status'][$object->id] = $object->status;
        }
        return $associativeArray;
    }
    private function generate_video_doctors()
    {
        $Doctors = new \App\Models\Doctors();

        $arrayOfObjects = $Doctors->select('video_booking_doctors.id,doctors.name')->join('video_booking_doctors', 'video_booking_doctors.doctor=doctors.id', 'INNER')->get()->getResult();
        $associativeArray = [];

        foreach ($arrayOfObjects as $object) {
            $associativeArray[$object->id] = $object->name;
        }


        return $associativeArray;
    }

    /**
     * Datatables
     */
    public function video_datatable()
    {
        try {
            // sleep(10);
            $ordercol = ['video_bookings.id', 'video_bookings.firstname', 'video_bookings.lastname', 'video_bookings.phone', 'video_bookings.email', 'video_bookings.id', 'video_bookings.id', 'video_bookings.booking_date', 'video_bookings.start_time'];
            $VideoBookings = new \App\Models\VideoBookings();
            $sql = $VideoBookings->select();

            $recordsTotal = $sql->countAllResults(false);


            $sql->select('video_bookings.*,payments.status');
            $sql->join('payments', 'payments.booking_id = video_bookings.id', 'inner');

            $PostData = [
                'datetype' => $this->request->getVar('datetype'),
                'from_date' =>  $this->request->getVar('from_date'),
                'to_date' => $this->request->getVar('to_date'),
                'pay_status' => $this->request->getVar('pay_status'),
            ];
            $rules  = [
                'datetype' => 'in_list[BOOKING,ENTRY]',
                'from_date' => 'required|valid_date[Y-m-d]',
                'to_date' => 'required|valid_date[Y-m-d]',
                'pay_status' => 'in_list[ALL,INIT,SUCCESS,FAILED]',
            ];

            if ($this->validateData($PostData, $rules)) {
                $datetype = $this->request->getVar('datetype');
                $from_date = $this->request->getVar('from_date');
                $to_date = $this->request->getVar('to_date');
                $pay_status = $this->request->getVar('pay_status');

                switch ($datetype) {
                    case 'ENTRY':
                        $sql = $sql->where('date(video_bookings.created_on) >=', $from_date)->where('date(video_bookings.created_on) <=', $to_date);
                        break;
                    case 'BOOKING':
                        $sql = $sql->where('booking_date >=', $from_date)->where('booking_date <=', $to_date);
                        break;

                    default:

                        break;
                }

                if ($pay_status != "ALL") {
                    $sql = $sql->where('payments.status', $pay_status);
                }
            }


            if ($this->request->getVar('search[value]')) {
                $filterval = $this->request->getPost('search[value]');
                $sql =  $sql->groupStart()
                    ->like('video_bookings.id', $filterval)
                    ->orLike('video_bookings.firstname', $filterval)
                    ->orLike('video_bookings.lastname', $filterval)
                    ->orLike('video_bookings.phone', $filterval)
                    ->orLike('video_bookings.email', $filterval)
                    ->orLike('video_bookings.booking_date', $filterval)
                    ->groupEnd();
            }

            if ($this->request->getVar('order')) {
                $colorder = $this->request->getPost('order[0][column]');
                $coldir = $this->request->getPost('order[0][dir]');
                $columnname = $ordercol[$colorder] ??   'id';

                $sql = $sql->orderBy($columnname, $coldir);
            } else {
                //default
                $sql = $sql->orderBy('video_bookings.id', "DESC");
            }
            $recordsFiltered = $sql->countAllResults(false);
            if ($this->request->getPost('length') != -1) {
                $sql = $sql->limit($this->request->getPost('length'), $this->request->getPost('start'));
            }

            $query = $sql->get();
            $data = [];

            $services = $this->generate_services();
            $doctors = $this->generate_video_doctors();
            foreach ($query->getResult() as $row) {
                $subarray = [];
                $subarray[] = "#" . $row->id;
                $subarray[] = $row->firstname;
                $subarray[] = $row->lastname;
                $subarray[] = $row->phone;
                $subarray[] = $row->email;
                $subarray[] = $doctors[$row->doctor] ?? "unknown";
                $subarray[] = $services[$row->service] ?? "unknown";
                $subarray[] = $row->booking_date;
                $subarray[] = analogueFormate($row->start_time)  . " - " . analogueFormate($row->end_time);
                $subarray[] = $row->status;

                $data[] = $subarray;
            }
            $output = [
                "draw"                 => $this->request->getPost('draw'),
                "recordsTotal"         => $recordsTotal,
                "recordsFiltered"    => $recordsFiltered,
                "data"                 => $data,
            ];
            return $this->respond($output);
        } catch (\Exception $e) {
            return $this->handle_exception($e);
        }
    }

    public function general_datatable()
    {
        try {

            $ordercol = ['id', 'firstname', 'lastname', 'phone', 'email', 'id', 'id', 'booking_date', 'start_time'];
            $GeneralBookings = new \App\Models\GeneralBookings();
            $sql = $GeneralBookings->select();

            $recordsTotal = $sql->countAllResults(false);


            $PostData = [
                'datetype' => $this->request->getVar('datetype'),
                'from_date' =>  $this->request->getVar('from_date'),
                'to_date' => $this->request->getVar('to_date'),
            ];
            $rules  = [
                'datetype' => 'in_list[BOOKING,ENTRY,FOLLOW]',
                'from_date' => 'required|valid_date[Y-m-d]',
                'to_date' => 'required|valid_date[Y-m-d]',
            ];

            if ($this->validateData($PostData, $rules)) {
                $datetype = $this->request->getVar('datetype');
                $from_date = $this->request->getVar('from_date');
                $to_date = $this->request->getVar('to_date');
                $booking_status = $this->request->getVar('booking_status');
                $branch = $this->request->getVar('branch');
                $service = $this->request->getVar('service');



                switch ($datetype) {
                    case 'ENTRY':
                        $sql = $sql->where('date(created_on) >=', $from_date)->where('date(created_on) <=', $to_date);
                        break;
                    case 'BOOKING':
                        $sql = $sql->where('booking_date >=', $from_date)->where('booking_date <=', $to_date);
                        break;
                    case 'FOLLOW':
                        $sql = $sql->where('follow_date >=', $from_date)->where('follow_date <=', $to_date);
                        break;

                    default:

                        break;
                }

                if ($booking_status) {
                    $sql = $sql->where('status', (int)$booking_status);
                }
                if ($branch) {
                    $sql = $sql->where('branch', (int)$branch);
                }
                if ($service) {
                    $sql = $sql->where('service', (int)$service);
                }
            }


            if ($this->request->getVar('search[value]')) {
                $filterval = $this->request->getPost('search[value]');
                $sql =  $sql->groupStart()
                    ->like('id', $filterval)
                    ->orLike('name', $filterval)
                    ->orLike('age', $filterval)
                    ->orLike('phone', $filterval)
                    ->orLike('email', $filterval)
                    ->orLike('booking_date', $filterval)
                    ->groupEnd();
            }

            if ($this->request->getVar('order')) {
                $colorder = $this->request->getPost('order[0][column]');
                $coldir = $this->request->getPost('order[0][dir]');
                $columnname = $ordercol[$colorder] ??   'id';

                $sql = $sql->orderBy($columnname, $coldir);
            } else {
                //default
                $sql = $sql->orderBy('id', "DESC");
            }
            $recordsFiltered = $sql->countAllResults(false);
            if ($this->request->getPost('length') != -1) {
                $sql = $sql->limit($this->request->getPost('length'), $this->request->getPost('start'));
            }

            $query = $sql->get();

            $data = [];
            $lastquery = (string) $this->db->getLastQuery();

            $services = $this->generate_services();
            $Branches = $this->generate_branches();
            $Booking_status = $this->generate_booking_status();

            foreach ($query->getResult() as $row) {
                $subarray = [];
                $subarray[] = "#" . $row->id;
                $subarray[] = $Branches[$row->branch] ?? "Unknown";
                $subarray[] = $services[$row->service] ?? "Unknown";
                $subarray[] = $row->name;
                $subarray[] = $row->age;
                $subarray[] = $row->phone;


                $subarray[] = $row->booking_date;
                $subarray[] = humanizeDate($row->created_on);
                $subarray[] = $row->follow_date ? humanizeDate($row->follow_date) : "";
                $subarray[] = $row->revenue;
                $subarray[] = $Booking_status[$row->status] ?? "Unknown";
                $subarray[] = '1';
                $subarray['id'] = $row->id;
                $subarray['status'] = $this->data['booking_status'][$row->status] ?? "Unknown";

                $data[] = $subarray;
            }
            $output = [
                "draw"                 => $this->request->getPost('draw'),
                "recordsTotal"         => $recordsTotal,
                "recordsFiltered"    => $recordsFiltered,
                "data"                 => $data,
            ];
            return $this->respond($output);
        } catch (\Exception $e) {
            return $this->handle_exception($e);
        }
    }
    public function service_datatable()
    {
        try {

            $ordercol = ['id', 'firstname', 'lastname', 'phone', 'email', 'id', 'id', 'booking_date', 'start_time'];
            $ServiceBookings = new \App\Models\ServiceBookings();
            $sql = $ServiceBookings->select();

            $recordsTotal = $sql->countAllResults(false);


            $PostData = [
                'datetype' => $this->request->getVar('datetype'),
                'from_date' =>  $this->request->getVar('from_date'),
                'to_date' => $this->request->getVar('to_date'),
            ];
            $rules  = [
                'datetype' => 'in_list[BOOKING,ENTRY,FOLLOW]',
                'from_date' => 'required|valid_date[Y-m-d]',
                'to_date' => 'required|valid_date[Y-m-d]',
            ];

            if ($this->validateData($PostData, $rules)) {
                $datetype = $this->request->getVar('datetype');
                $from_date = $this->request->getVar('from_date');
                $to_date = $this->request->getVar('to_date');
                $booking_status = $this->request->getVar('booking_status');
                $branch = $this->request->getVar('branch');
                $service = $this->request->getVar('service');



                switch ($datetype) {
                    case 'ENTRY':
                        $sql = $sql->where('date(created_on) >=', $from_date)->where('date(created_on) <=', $to_date);
                        break;
                    case 'BOOKING':
                        $sql = $sql->where('booking_date >=', $from_date)->where('booking_date <=', $to_date);
                        break;
                    case 'FOLLOW':
                        $sql = $sql->where('follow_date >=', $from_date)->where('follow_date <=', $to_date);
                        break;

                    default:

                        break;
                }

                if ($booking_status) {
                    $sql = $sql->where('status', (int)$booking_status);
                }
                if ($branch) {
                    $sql = $sql->where('branch', (int)$branch);
                }
                if ($service) {
                    $sql = $sql->where('service', (int)$service);
                }
            }


            if ($this->request->getVar('search[value]')) {
                $filterval = $this->request->getPost('search[value]');
                $sql =  $sql->groupStart()
                    ->like('id', $filterval)
                    ->orLike('name', $filterval)
                    ->orLike('phone', $filterval)
                    ->orLike('booking_date', $filterval)
                    ->groupEnd();
            }

            if ($this->request->getVar('order')) {
                $colorder = $this->request->getPost('order[0][column]');
                $coldir = $this->request->getPost('order[0][dir]');
                $columnname = $ordercol[$colorder] ??   'id';

                $sql = $sql->orderBy($columnname, $coldir);
            } else {
                //default
                $sql = $sql->orderBy('id', "DESC");
            }
            $recordsFiltered = $sql->countAllResults(false);
            if ($this->request->getPost('length') != -1) {
                $sql = $sql->limit($this->request->getPost('length'), $this->request->getPost('start'));
            }

            $query = $sql->get();

            $data = [];
            $lastquery = (string) $this->db->getLastQuery();

            
            $Branches = $this->generate_branches();
            $Booking_status = $this->generate_booking_status();

            foreach ($query->getResult() as $row) {
                $subarray = [];
                $subarray[] = "#" . $row->id;
                $subarray[] = $Branches[$row->branch] ?? "Unknown";
                $subarray[] = $row->service;
                $subarray[] = $row->name;
                $subarray[] = $row->phone;


                $subarray[] = $row->booking_date;
                $subarray[] = humanizeDate($row->created_on);
                $subarray[] = $row->follow_date ? humanizeDate($row->follow_date) : "";
                $subarray[] = $row->revenue;
                $subarray[] = $Booking_status[$row->status] ?? "Unknown";
                $subarray[] = '1';
                $subarray['id'] = $row->id;
                $subarray['status'] = $this->data['booking_status'][$row->status] ?? "Unknown";

                $data[] = $subarray;
            }
            $output = [
                "draw"                 => $this->request->getPost('draw'),
                "recordsTotal"         => $recordsTotal,
                "recordsFiltered"    => $recordsFiltered,
                "data"                 => $data,
            ];
            return $this->respond($output);
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


    /**
     * Api services
     */
    public function general_update_status()
    {

        try {
            $rules  = [
                'id' => [
                    'label' => 'ID',
                    'rules' => "trim|required|is_natural|is_not_unique[general_bookings.id]",
                    'errors' => [
                        'is_not_unique' => "Related Booking id not founded"
                    ],
                ],
                'action' => [
                    'label' => 'Action',
                    'rules' => "trim|required|is_not_unique[general_booking_status.id]",
                ],


                'comments' => [
                    'label' => 'Comments',
                    'rules' => "trim|required|min_length[3]|max_length[500]",
                ],


            ];
            if ($this->validate($rules)) {
                $GeneralBookings = new \App\Models\GeneralBookings();
                $BookingActions = new \App\Models\BookingActions();
                $id = $this->request->getPost('id');
                $action = $this->request->getPost('action');
                $comments = $this->request->getPost('comments');
                $follow_up = $this->request->getPost('follow_date');
                $revenue = (int) $this->request->getPost('revenue');

                $data = [
                    'status' => $action,
                ];


                if ($action == "2") {
                    if (!$this->validator->check($follow_up, 'required|valid_date[Y-m-d]|from_today', ['required' => "Required Valid Follow up date", 'valid_date' => "Required Valid Follow up date Formate"])) {
                        throw new \Exception("Required valid date");
                    }
                    $data['follow_date'] = $follow_up;
                }
                if ($action == "3") {
                    if (!$this->validator->check($revenue, 'required|greater_than[0]', ['required' => "Required Revenue", 'greater_than' => "Revenue Must be greater than 0"])) {
                        throw new \Exception("Required valid Revenue");
                    }
                    $data['revenue'] = $revenue;
                }





                $query = $GeneralBookings->where('id', $id)->set($data)->update();



                if ($query) {

                    $BookingActions->insert([
                        'booking_id' => $id,
                        'action' => $action,
                        'comments' => $comments,
                        'created_by' => $this->session->user_id
                    ]);
                    return $this->respond([
                        'status' => "success",
                        'msg' => "Stored data successfully."
                    ]);
                }
                throw new \Exception("Unable to Update Status");
            } else {
                throw new \Exception("Invalid data");
            }
        } catch (\Exception $e) {

            return $this->handle_exception($e);
        }
    }
    public function service_update_status()
    {

        try {
            $rules  = [
                'id' => [
                    'label' => 'ID',
                    'rules' => "trim|required|is_natural|is_not_unique[service_bookings.id]",
                    'errors' => [
                        'is_not_unique' => "Related Booking id not founded"
                    ],
                ],
                'action' => [
                    'label' => 'Action',
                    'rules' => "trim|required|is_not_unique[general_booking_status.id]",
                ],


                'comments' => [
                    'label' => 'Comments',
                    'rules' => "trim|required|min_length[3]|max_length[500]",
                ],


            ];
            if ($this->validate($rules)) {
                $ServiceBookings = new \App\Models\ServiceBookings();
                $BookingActions = new \App\Models\BookingActions();
                $id = $this->request->getPost('id');
                $action = $this->request->getPost('action');
                $comments = $this->request->getPost('comments');
                $follow_up = $this->request->getPost('follow_date');
                $revenue = (int) $this->request->getPost('revenue');

                $data = [
                    'status' => $action,
                ];


                if ($action == "2") {
                    if (!$this->validator->check($follow_up, 'required|valid_date[Y-m-d]|from_today', ['required' => "Required Valid Follow up date", 'valid_date' => "Required Valid Follow up date Formate"])) {
                        throw new \Exception("Required valid date");
                    }
                    $data['follow_date'] = $follow_up;
                }
                if ($action == "3") {
                    if (!$this->validator->check($revenue, 'required|greater_than[0]', ['required' => "Required Revenue", 'greater_than' => "Revenue Must be greater than 0"])) {
                        throw new \Exception("Required valid Revenue");
                    }
                    $data['revenue'] = $revenue;
                }





                $query = $ServiceBookings->where('id', $id)->set($data)->update();



                if ($query) {

                    $BookingActions->insert([
                        'booking_id' => $id,
                        'action' => $action,
                        'comments' => $comments,
                        'created_by' => $this->session->user_id
                    ]);
                    return $this->respond([
                        'status' => "success",
                        'msg' => "Stored data successfully."
                    ]);
                }
                throw new \Exception("Unable to Update Status");
            } else {
                throw new \Exception("Invalid data");
            }
        } catch (\Exception $e) {

            return $this->handle_exception($e);
        }
    }
}
