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
        return view('admin/dashboard', $this->data);
    }

    private function construct_dashboard_data()
    {
        $starting_month = new DateTime("Y-m-01");
        $ending_month = new DateTime("Y-m-t");
        $SQL = "SELECT 
        count(id) as total ,
        count(CASE WHEN created_on BETWEEN AND  THEN 1 ELSE NULL END;)
         FROM general_bookings";
        $query = $this->db->query($SQL);

        echo $query->getNumRows();
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
