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

    public function get_video_doctors()
    {
        try {
            $rules  = [
                'service' => [
                    'label' => 'Service',
                    'rules' => "trim|required|is_natural|is_not_unique[services.id]",
                    'errors' => [
                        'is_not_unique' => "Related {field} not founded"
                    ],
                ],
            ];
            if ($this->validate($rules)) {

                $Doctors = new \App\Models\Doctors();



                $serviceId = $this->request->getPost("service");

                $Dataset = $Doctors->select('VBD.id,doctors.name as text')
                    ->where("FIND_IN_SET($serviceId,services) != FALSE")
                    ->join('video_booking_doctors as VBD', 'doctors.id=VBD.doctor', 'INNER')
                    ->get()->getResult();



                if ($Dataset) {
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
    public function get_time_slots()
    {
        try {

            $rules  = [
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
                'bookingdate' => [
                    'label' => 'Booking Date',
                    'rules' => "trim|required|valid_date[Y-m-d]|from_today",
                    'errors' => [
                        'is_not_unique' => "Related {field} not founded"
                    ],
                ]
            ];
            if ($this->validate($rules)) {

                $db = db_connect();
                $Doctors = new \App\Models\Doctors();



                $serviceId = $this->request->getPost("service");
                $doctorId = (int) $this->request->getPost("doctor");
                $bookingdate = $this->request->getPost("bookingdate");



                $doctor_data = $Doctors->select('VBD.slots')

                    ->where('VBD.id', $doctorId)
                    ->join('video_booking_doctors as VBD', 'doctors.id=VBD.doctor', 'INNER')
                    ->where("FIND_IN_SET($serviceId,doctors.services) != FALSE")->first();



                if (!$doctor_data) {
                    throw new \Exception("Doctor not found");
                }


                $ReservedSlots = new \App\Models\ReservedSlots();

                $ReservedResult = $ReservedSlots->select('slot_id')->where('doctor_id', $doctorId)->where('booking_date', $bookingdate)->get()->getResult();
                $BookedSlot = [];
                foreach ($ReservedResult as  $slot) {
                    $BookedSlot[] = $slot->slot_id;
                }


                $TimeSlots = new \App\Models\TimeSlots();
                $doctor_slots = explode(',', $doctor_data->slots);

                $query = $TimeSlots->select('id,start_time,end_time');
                if (count($BookedSlot) > 0) {
                    $query = $query->whereNotIn('id', $BookedSlot);
                }

                $query = $query->whereIn('id', $doctor_slots)->get()->getResult();



                if ($query) {
                    return $this->respond([
                        'status' => "success",
                        'data' => $query,
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
}
