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
        $starting_month = date("Y-m-01");
        $ending_month = date("Y-m-t");
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



        // Pie Chart Data
        $SQL = "SELECT t1.total, t2.name FROM (SELECT count(id) as total, branch FROM `general_bookings` where created_on BETWEEN '$starting_month' AND '$ending_month'   GROUP BY branch) as t1 RIGHT JOIN branches t2 ON t1.branch = t2.id ORDER BY `t2`.`name` ASC;";
        $query = $this->db->query($SQL);

        $DATASET['piechart']['date'] = date("M Y");
        foreach ($query->getResult() as $item) {
            $DATASET['piechart']['label'][] = $item->name ?? "Unknown";
            $DATASET['piechart']['dataset'][] = (int) $item->total ?? 0;
        }

        



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
}
