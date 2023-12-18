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
        count(CASE WHEN date(created_on) = '$current_date'  THEN 1 ELSE NULL END) as today_total,
        SUM(CASE WHEN status='3' THEN revenue ELSE NULL END) as total_revenue
        FROM general_bookings";
        $query = $this->db->query($SQL);
        $result = $query->getRow();

        $DATASET['bookings']['general'] = $result->total;
        $DATASET['bookings']['today']['general'] = $result->today_total;
        $DATASET['bookings']['revenue']['general'] = $result->total_revenue;


        //dd($SQL);

        // Video data query
        $SQL = "SELECT 
         count(*) as total ,
         count(CASE WHEN date(v.created_on) = '$current_date'  THEN 1 ELSE NULL END) as today_total,
         SUM(CASE WHEN p.status='SUCCESS'  THEN p.amount ELSE NULL END) as total_revenue
         FROM video_bookings as v
         INNER JOIN payments as p ON p.booking_id= v.id
         ";
        $query = $this->db->query($SQL);
        $result = $query->getRow();


        $DATASET['bookings']['revenue']['video'] = $result->total_revenue;
        $DATASET['bookings']['video'] = $result->total;
        $DATASET['bookings']['today']['video'] = $result->today_total;
        $DATASET['bookings']['total'] = $DATASET['bookings']['video'] + $DATASET['bookings']['general'];

        // Recent video bookings
        $VideoBookings = new \App\Models\VideoBookings();
        $bookings = $VideoBookings->select('video_bookings.id,video_bookings.firstname,video_bookings.booking_date,payments.status,services.name as service')
            ->join('payments', 'payments.booking_id = video_bookings.id', 'inner')
            ->join('services', 'services.id = video_bookings.service', 'inner')
            ->orderBy('video_bookings.id', "DESC")->limit(7)->get()->getResult();
        $DATASET['videobookings'] = $bookings;


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
