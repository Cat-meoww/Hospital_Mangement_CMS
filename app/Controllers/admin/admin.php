<?php

namespace App\Controllers\admin;

use App\Controllers\General;
use App\Models\UserModel;
use App\Models\PropertyType;
use CodeIgniter\HTTP\RequestInterface;
use DateTime;

class admin extends General
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
        $this->construct_dashboard_data();
        return view('admin/dashboard', $this->data);
    }

    private function construct_dashboard_data()
    {
        $DATASET = [];

        $current_date = date("Y-m-d");

        // General data query
        $SQL = "SELECT 
        count(id) as total ,
        count(CASE WHEN date(created_on) = '$current_date'  THEN 1 ELSE NULL END) as today_total
        FROM general_bookings";
        $query = $this->db->query($SQL);
        $result = $query->getRow();

        $DATASET['bookings']['general'] = $result->total;
        $DATASET['bookings']['today']['general'] = $result->today_total;


        //dd($SQL);

        // Video data query
        $SQL = "SELECT 
         count(id) as total ,
         count(CASE WHEN date(created_on) = '$current_date'  THEN 1 ELSE NULL END) as today_total
         FROM video_bookings";
        $query = $this->db->query($SQL);
        $result = $query->getRow();


        $DATASET['bookings']['video'] = $result->total;
        $DATASET['bookings']['today']['video'] = $result->today_total;
        $DATASET['bookings']['total'] = $DATASET['bookings']['video'] + $DATASET['bookings']['general'];


        $DATASET['piechart']['date'] = date("M Y");

        $this->data['dataset'] = $DATASET;
    }



    public function agent_management()
    {
        $userModel = new UserModel();
        $agentData = $userModel->where('user_role', 2)->findAll();
        $this->data['title'] = "Agent Management";
        $this->data['user'] = $agentData;
        return view('admin/users/agent_management', $this->data);
    }
    public function client_management()
    {
        $userModel = new UserModel();
        $allUserData = $userModel->where('user_role', 3)->findAll();
        $this->data['title'] = "Client Management";
        $this->data['user'] = $allUserData;
        return view('admin/users/client_management', $this->data);
    }
    public function profile()
    {
        $userModel = new UserModel();
        $allUserData = $userModel->select('users.*,user_role.role_name')->join('user_role', 'user_role.id=users.user_role', 'inner')->find($this->session->user_id);
        $this->data['title'] = "Profile";
        $this->data['user'] = $allUserData;
        return view('admin/profile', $this->data);
    }
}
