<?php

namespace App\Controllers\admin;

use App\Controllers\General;
use App\Models\UserModel;
use App\Models\PropertyType;
use CodeIgniter\HTTP\RequestInterface;

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

    public function agent_management()
    {
        $userModel = new UserModel();
        $agentData = $userModel->where('user_role',2)->findAll();
        $this->data['title'] = "Agent Management";
        $this->data['user'] = $agentData;
        return view('admin/users/agent_management', $this->data);
    }
    public function client_management()
    {
        $userModel = new UserModel();
        $allUserData = $userModel->where('user_role',3)->findAll();
        $this->data['title'] = "Client Management";
        $this->data['user'] = $allUserData;
        return view('admin/users/client_management', $this->data);
    }
    public function property_type()
    {
        $Properties = new PropertyType();
        $allPropertyData = $Properties->findAll();
        $this->data['title'] = "Property Type";
        $this->data['properties'] = $allPropertyData;
        return view('admin/property/property_type', $this->data);
    }
    public function add_property(RequestInterface $request)
    {
        $this->request = $request;
        echo "sfsfsf";
        print_r($request); exit();
        $Properties = new PropertyType();
        $allPropertyData = $Properties->findAll();
        $this->data['title'] = "Property Type";
        $this->data['properties'] = $allPropertyData;
        return view('admin/property/property_type', $this->data);
    }
}
