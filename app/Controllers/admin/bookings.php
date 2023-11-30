<?php

namespace App\Controllers\admin;

use App\Controllers\General;



class bookings extends General
{

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
            'branch' => $this->generate_branch(),
        ];
        return view('admin/bookings/general_bookings', $this->data);
    }
    private function generate_services()
    {
        $Services = new \App\Models\Services();

        $arrayOfObjects = $Services->select('id,name')->get()->getResult();
        $associativeArray = [];

        foreach ($arrayOfObjects as $object) {
            $associativeArray[$object->id] = $object->name;
        }
        return $associativeArray;
    }
    private function generate_branch()
    {
        $Branches = new \App\Models\Branches();

        $arrayOfObjects = $Branches->select('id,name')->get()->getResult();
        $associativeArray = [];

        foreach ($arrayOfObjects as $object) {
            $associativeArray[$object->id] = $object->name;
        }
        return $associativeArray;
    }
}
