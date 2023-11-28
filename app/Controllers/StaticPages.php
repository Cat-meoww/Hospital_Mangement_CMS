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
    public function esophago_gastric_surgery()
    {
        return view('frontend/esophago-gastric-surgery', $this->data);
    }
    public function chairman()
    {
        return view('frontend/chairman', $this->data);
    }
    
    public function colorectal_surgery()
    {
        return view('frontend/colorectal-surgery', $this->data);
    }
    public function liver_pancreas()
    {
        return view('frontend/liver-pancreas', $this->data);
    }
    public function medical_gastroenterology()
    {
        return view('frontend/medical-gastroenterology', $this->data);
    }
    public function endogynecology()
    {
        return view('frontend/endogynecology', $this->data);
    }
    public function obesity_diabetes()
    {
        return view('frontend/obesity-diabetes', $this->data);
    }
    public function hernia_care()
    {
        return view('frontend/hernia-care', $this->data);
    }
    public function digestive_cancer_care()
    {
        return view('frontend/digestive-cancer-care', $this->data);
    }
    public function multi_organ_transplant()
    {
        return view('frontend/multi-organ-transplant', $this->data);
    }
    public function cardiology()
    {
        return view('frontend/cardiology', $this->data);
    }
    public function nephrology()
    {
        return view('frontend/nephrology', $this->data);
    }
    public function urology()
    {
        return view('frontend/urology', $this->data);
    }
    public function health_package()
    {
        return view('frontend/health-package', $this->data);
    }
    public function mgr()
    {
        return view('frontend/mgr', $this->data);
    }
    public function nbe()
    {
        return view('frontend/nbe', $this->data);
    }
    public function career()
    {
        return view('frontend/career', $this->data);
    }
    public function contact_us()
    {
        return view('frontend/contactus', $this->data);
    }
    public function bmw()
    {
        return view('frontend/bmw', $this->data);
    }
    public function insurance()
    {
        return view('frontend/insurance', $this->data);
    }
    public function blog()
    {
        return view('frontend/blog', $this->data);
    }
    public function press_release()
    {
        return view('frontend/press-release', $this->data);
    }
    public function magazines()
    {
        return view('frontend/magazines', $this->data);
    }
    public function doctor_info()
    {
        return view('frontend/doctorinfo', $this->data);
    }
    public function privacy()
    {
        return view('frontend/privacy', $this->data);
    }
}
