<?php

namespace App\Controllers;

use \App\Models\UserModel;
use CodeIgniter\Exceptions\PageNotFoundException;
use Exception;

class StaticPages extends BaseController
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
        helper(['url', 'session', 'custom', 'number']);
        $this->data['title'] = "";
        $this->date = date("Y-m-d h:i:s");
        $this->db = db_connect();
    }
    public function index()
    {
        return view('frontend/landing', $this->data);
    }
    public function home()
    {
        return view('frontend/home', $this->data);
    }
    
    public function aboutus()
    {
        return view('frontend/aboutus', $this->data);
    }
    public function service()
    {
        return view('frontend/esophago-gastric-surgery', $this->data);
    }
    public function health_package()
    {
        return view('frontend/health-package', $this->data);
    }
    
}
