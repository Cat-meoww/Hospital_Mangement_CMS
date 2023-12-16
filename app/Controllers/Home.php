<?php

namespace App\Controllers;

use \App\Models\UserModel;
use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\HTTP\Message;
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
        $this->date = date("Y-m-d H:i:s");
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
    public function doctor_info($slug)
    {
        try {
            $Doctors = new \App\Models\Doctors();
            $Doctor_roles = new \App\Models\Doctors_roles();
            $CmsPages = new \App\Models\CmsPages();

            if (!$Doctor = $Doctors->where('slug', $slug)->where('visibility', 'Public')->first()) {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
            $this->data['title'] = $Doctor->name;
            $this->data['doctor'] = $Doctor;
            $this->data['doctor_role'] = $Doctor_roles->select('name')->find($Doctor->role)->name ?? "";
            $this->data['cms'] = $CmsPages->where('slug', $slug)->where('type', 'doctor')->first();


            return view('frontend/doctor-info', $this->data);
        } catch (\Exception $e) {
            throw new \RuntimeException($e->getMessage(), $e->getCode(), $e);
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
                ], true);

                if ($query) {

                    $Services = new \App\Models\Services();
                    $ServiceName = $Services->select('name')->where('id', $service)->first()->name ?? "miscellaneous";
                    $populate = [
                        'booking_id' => $query,
                        'name' => $this->request->getPost('name'),
                        'phno' => $this->request->getPost('phone'),
                        'branch' => $foo->name,
                        'service' => $ServiceName,
                        'booking_date' => $this->request->getPost('booking-date'),
                    ];

                    $this->send_mail($this->request->getPost('email'), "Booking Appointment", view('layout/templates/email_general_booking', $populate));


                    return redirect()
                        ->with('booking_id', $query)
                        ->with('customer', $this->request->getPost('name'))
                        ->with('service', $ServiceName)
                        ->to('appointment/thanks');
                }
                throw new Exception("Unable to store data");
            }
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', $e->getMessage());
        }
    }

    public function video_booking()
    {
        $this->data['title'] = "Video consultation";
        $this->data['Options'] = [
            'services' => $this->generate_video_services(),
        ];

        return view('frontend/bookings/video-booking', $this->data);
    }
    private function generate_video_services()
    {


        if (!$associativeArray = cache('generate_video_services')) {

            $VB_Docs = new \App\Models\VideoBookingDoctors();

            $doctors = $VB_Docs->select('doctor')->where('visibility', 'Public')->get()->getResult();
            $doctors_ids = [];
            foreach ($doctors as $doc) {
                $doctors_ids[] = (int) $doc->doctor;
            }
            $service_csv = [];

            $Doctors = new \App\Models\Doctors();

            $Doctors_Services = $Doctors->select('services')->whereIn('id', $doctors_ids)->get()->getResult();


            foreach ($Doctors_Services as $service) {
                $service_csv[] = $service->services;
            }
            $services_ids = explode(',', implode(',', $service_csv));

            $Services = new \App\Models\Services();
            $arrayOfObjects = $Services->select('id,name')->whereIn('id', $services_ids)->get()->getResult();
            $associativeArray = [];

            $associativeArray[''] = "Select ";
            foreach ($arrayOfObjects as $object) {
                $associativeArray[$object->id] = $object->name;
            }
            // Save into the cache for 5 minutes
            cache()->save('generate_video_services', $associativeArray, 60);
        }

        return $associativeArray;
    }


    public function handle_video_form()
    {
        try {
            $rules = [
                'service' => [
                    'label' => 'Service',
                    'rules' => "trim|required|is_natural|is_not_unique[services.id]",
                    'errors' => [
                        'is_not_unique' => "Related {field} not founded"
                    ],
                ],
                'doctor' => [
                    'label' => 'doctor',
                    'rules' => "trim|required|is_natural|is_not_unique[video_booking_doctors.id]",
                    'errors' => [
                        'is_not_unique' => "Related {field} not founded"
                    ],
                ],
                'booking-date' => [
                    'label' => 'Booking Date',
                    'rules' => "trim|required|valid_date[Y-m-d]|from_today",
                    'errors' => [
                        'is_not_unique' => "Related {field} not founded"
                    ],
                ],
                'time-slot' => [
                    'label' => 'Time slot',
                    'rules' => "trim|required|is_natural|is_not_unique[time_slots.id]",
                    'errors' => [
                        'is_not_unique' => "Related {field} not founded"
                    ],
                ],
                'first-name' => [
                    'label' => 'First Name',
                    'rules' => "trim|required|alpha_space|min_length[2]",
                ],
                'last-name' => [
                    'label' => 'Last Name',
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
                'message' => [
                    'label' => 'Message',
                    'rules' => "trim|required",
                ],
            ];

            if (!$this->validate($rules)) {

                return redirect()->back()->withInput();
            } else {

                $service = (int) $this->request->getPost('service');
                $doctor = (int) $this->request->getPost('doctor');
                $BookingDate = $this->request->getPost('booking-date');
                $slot = (int)$this->request->getPost('time-slot');

                $TimeSlots = new \App\Models\TimeSlots();
                $slotData = $TimeSlots->where('id', $slot)->first();
                if (!$slotData) {
                    throw new Exception("Required Valid Slot Data");
                }

                $VideoBookingDoctors = new \App\Models\VideoBookingDoctors();
                $foo = $VideoBookingDoctors->select('doctors.id')
                    ->where('video_booking_doctors.id', $doctor)
                    ->where("FIND_IN_SET($slot,slots) != FALSE")
                    ->join('doctors', 'doctors.id=video_booking_doctors.doctor', 'INNER')
                    ->where("FIND_IN_SET($service,doctors.services) != FALSE")
                    ->first();

                if (!$foo) {
                    throw new Exception("Required valid data");
                }

                $ReservedSlots = new \App\Models\ReservedSlots();
                $is_reserved = $ReservedSlots->select('id')->where('slot_id', $slot)->where('doctor_id', $doctor)->where('booking_date', $BookingDate)->first();

                if ($is_reserved) {
                    throw new Exception("The slot is already reserved");
                }





                $VideoBookings = new \App\Models\VideoBookings();

                $transaction_id = \Ramsey\Uuid\Uuid::uuid4();

                $insertID = $VideoBookings->insert([
                    'firstname' => $this->request->getPost('first-name'),
                    'lastname' => $this->request->getPost('last-name'),
                    'phone' => $this->request->getPost('phone'),
                    'email' => $this->request->getPost('email'),
                    'service' => $service,
                    'doctor' => $doctor,
                    'booking_date' => $this->request->getPost('booking-date'),
                    'slot_id' => $slot,
                    'start_time' => $slotData->start_time,
                    'end_time' => $slotData->end_time,
                    'message' => $this->request->getPost('message'),
                    'transaction_id' => $transaction_id
                ], true);

                if ($insertID) {
                    $payment_init = $this->payment_handler(1000, $transaction_id, $insertID);


                    //Need to make readlock of 8 mintues
                    return redirect()->to("payment/checkout/$transaction_id");

                    //
                    // $ReservedSlots->insert([
                    //     'doctor_id' => $doctor,
                    //     'booking_date' => $BookingDate,
                    //     'slot_id' => $slot,
                    //     'booking_id' => $insertID,
                    // ]);


                }
                throw new Exception("Unable to store data");
            }
        } catch (\Exception $e) {

            return redirect()->back()->withInput()->with('error', $e->getMessage());
        }
    }

    private function payment_handler(int $amount, $transaction_id, $resource_id)
    {

        try {

            $Payments = new \App\Models\Payments();
            $api = new \Razorpay\Api\Api(env('RAZORPAY_API_KEY'), env('RAZORPAY_API_SECRET'));
            $order = $api->order->create([
                'amount' => $amount * 100, // Amount in paisa
                'currency' => 'INR',
                'receipt' => $transaction_id,
                'notes' => [
                    'resource_id' => $resource_id,
                    'resource_type' => "video booking",
                    'transaction_id' => $transaction_id
                ]
            ]);

            if (!$order->id ?? false) {
                throw new \Exception('Unable to create an order');
            }


            $Payments->insert([
                'booking_id' => $resource_id,
                'transaction_id' => $transaction_id,
                'status' => "INIT",
                'order_id' => $order->id,
                'amount' => $amount,
                'expired_on' => addDateTime(10),
            ]);

            return true;
        } catch (\Exception $th) {
            return false;
        }
    }

    public function payment_checkout($transaction_id)
    {
        try {
            $Payments = new \App\Models\Payments();
            $VideoBookings = new \App\Models\VideoBookings();


            if (!$payment = $Payments->where('transaction_id', $transaction_id)->where('expired_on >',$this->date)->whereIn('status', ['INIT', 'FAILED'])->first()) {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
            $customer = $VideoBookings->find($payment->booking_id);

            $this->data['title'] = "PAYMENT CHECKOUT";
            $this->data['customer'] = $customer;
            $this->data['rpc_payload'] = json_encode([
                "key" => env('RAZORPAY_API_KEY'),
                "amount" =>  $payment->amount * 100,
                "currency" => "INR",
                "name" => env('app.name'),
                "description" => env('app.name'),
                "image" => base_url('frontend/assets/images/logo/gem.png'),
                "order_id" => $payment->order_id,
                "callback_url" => base_url('payment/verify'),
                "prefill" => [
                    "name" => "$customer->firstname  $customer->lastname",
                    "email" => $customer->email,
                    "contact" => $customer->phone
                ],
                "theme" => [
                    "color" => "#0d3e21"
                ]
            ]);

            return view('frontend/bookings/checkout', $this->data);
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function payment_verify()
    {
        try {
            $rules = [
                'razorpay_payment_id' => "trim|required",
                'razorpay_order_id' =>  "trim|required|is_not_unique[payments.order_id]",
                'razorpay_signature' =>  "trim|required"
            ];

            if (!$this->validate($rules)) {

                throw new \Exception('Payment verification failed');
            } else {
                $Payments = new \App\Models\Payments();
                $api = new \Razorpay\Api\Api(env('RAZORPAY_API_KEY'), env('RAZORPAY_API_SECRET'));
                $razorpay_payment_id = $this->request->getPost('razorpay_payment_id');
                $razorpay_order_id = $this->request->getPost('razorpay_order_id');
                $razorpay_signature = $this->request->getPost('razorpay_signature');

                $attributes = [
                    'razorpay_order_id' => $razorpay_order_id,
                    'razorpay_payment_id' => $razorpay_payment_id,
                    'razorpay_signature' => $razorpay_signature,
                ];

                $api->utility->verifyPaymentSignature($attributes);
                $query = $Payments->set(
                    [
                        'status' => 'SUCCESS',
                        'payment_id' => $razorpay_payment_id,
                        'verify_signature' => $razorpay_signature
                    ]
                )->where('order_id', $razorpay_order_id)->update();
                $payment = $Payments->select('booking_id')->where('order_id', $razorpay_order_id)->first();
                if ($query) {
                    $VideoBookings = new \App\Models\VideoBookings();
                    $ReservedSlots = new \App\Models\ReservedSlots();
                    $booking = $VideoBookings->find($payment->booking_id);
                    $Services = new \App\Models\Services();
                    $ServiceName = $Services->select('name')->where('id', $booking->firstname)->first()->name ?? "miscellaneous";

                    $ReservedSlots->insert([
                        'doctor_id' => $booking->doctor,
                        'booking_date' => $booking->booking_date,
                        'slot_id' => $booking->slot_id,
                        'booking_id' => $booking->id,
                    ]);

                    $populate = [
                        'booking_id' =>  $booking->id,
                        'name' =>  $booking->firstname,
                        'phno' =>  $booking->phone,
                        'branch' => "Branch name",
                        'service' => $ServiceName,
                        'booking_date' => $booking->booking_date,
                    ];
                    $this->send_mail($booking->email, "Video Appointment", view('layout/templates/email_general_booking', $populate));

                    return redirect()
                        ->with('booking_id', $booking->id)
                        ->with('customer', $booking->firstname)
                        ->with('service', $ServiceName)
                        ->to('appointment/thanks');
                }
            }
        } catch (\Exception $e) {
            throw new \RuntimeException($e->getMessage(), $e->getCode(), $e);
        }
    }

    public function thanks()
    {
        $this->data['title'] = "Thanks";
        return view('frontend/general-thank', $this->data);
    }

    private function send_mail($To, $Subject, $Message)
    {
        try {
            $email = \Config\Services::email();
            $config = [
                'protocol' => 'smtp',
                'charset' => 'utf-8',
                'wordWrap' => false,
                'mailType' => 'html',
                'priority' => 1,
                'SMTPHost' => env('app.smtp.host'),
                'SMTPPort' => (int) env('app.smtp.port'),
                'SMTPUser' => env('app.smtp.user'),
                'SMTPPass' => env('app.smtp.password'),
                'SMTPKeepAlive' => true,
                'validate' => true,
                'SMTPCrypto' => 'ssl',
            ];

            $email->initialize($config);


            $email->setTo($To);
            $email->setFrom(env('app.smtp.user'), 'GEM MAILER');
            //$email->setCC('naveen@insakal.in');


            $email->setSubject($Subject);
            $email->setMessage($Message);


            if ($email->send(false)) {
                return true;
            } else {
                echo "Something went wrong !";
                d($email);
                dd($email->printDebugger(['headers']));
            }
        } catch (\Throwable $th) {

            return false;
        }
    }
}
