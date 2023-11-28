<?php

namespace App\Controllers\admin\master\bookings;

use App\Controllers\General;
use CodeIgniter\API\ResponseTrait;

class video_management extends General
{
    use ResponseTrait;
    public function __construct()
    {
        parent::__construct();
    }

    public function doctors()
    {
        helper(['form']);
        $this->data['title'] = "Video Consultation Doctors";
        $VideoBookingDoctors = new \App\Models\VideoBookingDoctors();

        $this->data['Dataset'] = $VideoBookingDoctors->orderBy('id', 'DESC')->findAll();
        $this->data['Options'] = [
            'doctors' => $this->generate_doctors(),
            'unassigned_doctors' => $this->generate_unassigned_doctors(),
            'time_slots' => $this->generate_timeslots(),
            'visiblity' => [
                '' => 'Visiblity',
                'Public' => 'Public',
                'Private' => 'Private'
            ]
        ];



        return view('admin/all-master/management/bookings/video_mangement', $this->data);
    }


    public function generate_timeslots()
    {
        $TimeSlots = new \App\Models\TimeSlots();

        $arrayOfObjects = $TimeSlots->select('id,start_time,end_time')->orderBy('start_time', 'ASC')->get()->getResult();
        $associativeArray = [];

        foreach ($arrayOfObjects as $object) {
            $associativeArray[$object->id] = analogueFormate($object->start_time) . " - " . analogueFormate($object->end_time);
        }
        return $associativeArray;
    }
    public function generate_doctors()
    {
        $Doctors = new \App\Models\Doctors();

        $arrayOfObjects = $Doctors->select('id,name')->get()->getResult();
        $associativeArray = [];

        foreach ($arrayOfObjects as $object) {
            $associativeArray[$object->id] = $object->name;
        }
        return $associativeArray;
    }

    private function generate_unassigned_doctors()
    {
        $Doctors = new \App\Models\Doctors();

        $arrayOfObjects = $Doctors->select('doctors.id,doctors.name')->join('video_booking_doctors as vbd', 'doctors.id = vbd.doctor', 'left')->where('vbd.doctor IS NULL')->get()->getResult();
        $associativeArray = [];
        $associativeArray[''] = "Select Option";
        foreach ($arrayOfObjects as $object) {
            $associativeArray[$object->id] = $object->name;
        }
        return $associativeArray;
    }



    /**
     * API post forms
     */

    public function add_doctor()
    {

        try {

            $rules  = [
                'doctor' => [
                    'label' => 'Doctor',
                    'rules' => "trim|required|is_not_unique[doctors.id]|is_unique[video_booking_doctors.doctor]",
                    'errors' => [
                        'is_not_unique' => "Related {field} not founded",
                        'is_unique' => "Related {field} already exist"
                    ],
                ],
                'visiblity' => [
                    'label' => " Visiblity",
                    'rules' => "required|in_list[Public,Private]",
                ],


            ];
            if ($this->validate($rules)) {
                $VideoBookingDoctors = new \App\Models\VideoBookingDoctors();



                $query = $VideoBookingDoctors->insert([
                    'doctor' =>  (int) $this->request->getPost('doctor'),
                    'visibility' =>   $this->request->getPost('visiblity'),
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
    public function delete_doctor()
    {
        try {

            $rules  = [
                'id' => [
                    'label' => 'ID',
                    'rules' => "trim|required|is_natural|is_not_unique[video_booking_doctors.id]",
                    'errors' => [
                        'is_not_unique' => "Related Service not founded"
                    ],
                ],
            ];
            if ($this->validate($rules)) {
                $id = $this->request->getPost("id");
                $Modal = new \App\Models\VideoBookingDoctors();

                $query = $Modal->where('id', $id)->delete();
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
    public function update_doctor_timeslot()
    {
        try {

            $rules  = [
                'id' => [
                    'label' => 'Doctor',
                    'rules' => "trim|required|is_natural|is_not_unique[video_booking_doctors.id]",
                    'errors' => [
                        'is_not_unique' => "Related {field} not founded"
                    ],
                ],
                'timeslots.*' => [
                    'label' => 'Time Slots ',
                    'rules' => "trim|required|is_natural|is_not_unique[time_slots.id]",
                    'errors' => [
                        'is_not_unique' => "Related {field} not founded"
                    ],
                ],


            ];
            if ($this->validate($rules)) {
                $VideoBookingDoctors = new \App\Models\VideoBookingDoctors();
                $id = $this->request->getPost("id");


                $query = $VideoBookingDoctors->where('id', $id)->set([
                    'slots' => implode(",", $this->request->getPost('timeslots[]')),
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
