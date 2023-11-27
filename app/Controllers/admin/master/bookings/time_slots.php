<?php

namespace App\Controllers\admin\master\bookings;

use App\Controllers\General;
use CodeIgniter\API\ResponseTrait;

class time_slots extends General
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
        $this->data['title'] = "Time Slots";
        $TimeSlots = new \App\Models\TimeSlots();
        $this->data['Dataset'] = $TimeSlots->orderBy('start_time', 'ASC')->findAll();
        

        return view('admin/all-master/time_slots', $this->data);
    }
    



    /**
     * API post forms
     */
    public function create()
    {

        try {

            $rules  = [
                'start_time' => [
                    'label' => 'Start time',
                    'rules' => "trim|required|valid_date[H:i]|is_unique[time_slots.start_time]",
                    
                ],
                'end_time' => [
                    'label' => 'End Time',
                    'rules' => "trim|required|valid_date[H:i]|date_greater_than[{start_time}]|time_duration[{start_time},15]",
                    'errors' => [
                        'date_greater_than' => "{field} must be greater than Start Time"
                    ],
                ],
                
               
            ];
            if ($this->validate($rules)) {
                $TimeSlots = new \App\Models\TimeSlots();

                $query = $TimeSlots->insert([
                    'start_time' => $this->request->getPost('start_time'),
                    'end_time' => $this->request->getPost('end_time'),
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
    
    public function delete()
    {
        try {

            $rules  = [
                'id' => [
                    'label' => 'ID',
                    'rules' => "trim|required|is_natural|is_not_unique[time_slots.id]",
                    'errors' => [
                        'is_not_unique' => "Related Service not founded"
                    ],
                ],
            ];
            if ($this->validate($rules)) {
                $id = $this->request->getPost("id");
                $TimeSlots = new \App\Models\TimeSlots();

                $query = $TimeSlots->where('id', $id)->delete();
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
