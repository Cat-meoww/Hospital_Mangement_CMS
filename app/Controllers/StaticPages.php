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
        helper(['url', 'session', 'custom', 'number', 'form']);
        $this->data['title'] = "";
        $this->data['description'] = "";
        $this->date = date("Y-m-d h:i:s");
        $this->db = db_connect();
    }
    public function index()
    {
        return view('frontend/landing', $this->data);
    }
    public function coimbatore()
    {
        $this->data['recent_blogs'] = \App\Libraries\ViewComponents::Render_RecentBlogs();
        return view('frontend/coimbatore', $this->data);
    }
    public function home()
    {
        $this->data['recent_blogs'] = \App\Libraries\ViewComponents::Render_RecentBlogs();
        return view('frontend/coimbatore', $this->data);
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
    public function endoscopy()
    {
        return view('frontend/endoscopy', $this->data);
    }
    public function jaundice()
    {
        return view('frontend/jaundice', $this->data);
    }
    public function piles()
    {
        $this->data['service_name'] = "Piles";
        $this->data['Options'] = [
            'branches' => $this->generate_branches(),
        ];
        return view('frontend/piles', $this->data);
    }
    public function upper_gi()
    {
        return view('frontend/up-gi', $this->data);
    }
    public function gall_bladder()
    {
        $this->data['service_name'] = "Gall bladder";
        $this->data['Options'] = [
            'branches' => $this->generate_branches(),
        ];
        return view('frontend/gall-bladder', $this->data);
    }
    public function hernia_care()
    {
        $this->data['service_name'] = "Hernia";
        $this->data['Options'] = [
            'branches' => $this->generate_branches(),
        ];
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
        $this->data['service_name'] = "Urology";
        $this->data['Options'] = [
            'branches' => $this->generate_branches(),
        ];
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
    public function blog_single()
    {
        return view('frontend/blog-single', $this->data);
    }
    public function magazine_single()
    {
        return view('frontend/magazine-single', $this->data);
    }
    public function board_director()
    {
        return view('frontend/board-director', $this->data);
    }
    public function doctor_publication()
    {
        return view('frontend/doctor-publication', $this->data);
    }
    public function doctor_senthil()
    {
        return view('frontend/doctor-senthil', $this->data);
    }
    public function doctor_anand()
    {
        return view('frontend/doctor-anand', $this->data);
    }
    public function doctor_harish()
    {
        return view('frontend/doctor-harish', $this->data);
    }
    public function doctor_nalan()
    {
        return view('frontend/doctor-nalan', $this->data);
    }
    public function doctor_rajapandian()
    {
        return view('frontend/doctor-rajapandian', $this->data);
    }
    public function doctor_saravanakumar()
    {
        return view('frontend/doctor-saravanakumar', $this->data);
    }
    public function doctor_ramesh()
    {
        return view('frontend/doctor-ramesh', $this->data);
    }
    public function fissure()
    {
        $this->data['service_name'] = "Fissure";
        $this->data['Options'] = [
            'branches' => $this->generate_branches(),
        ];
        return view('frontend/fissure', $this->data);
    }
    public function pancreatic()
    {
        $this->data['service_name'] = "Pancreatic";
        $this->data['Options'] = [
            'branches' => $this->generate_branches(),
        ];
        return view('frontend/pancreatic-cancer', $this->data);
    }
    public function jaundice_demo()
    {
        $this->data['service_name'] = "Jaundice";
        $this->data['Options'] = [
            'branches' => $this->generate_branches(),
        ];
        return view('frontend/jaundice-demo', $this->data);
    }

    private function generate_branches()
    {
        $Branches = new \App\Models\Branches();

        $arrayOfObjects = $Branches->select('id,name')->where('visibility', 'Public')->get()->getResult();
        $associativeArray = [];
        $associativeArray[''] = "Select center";
        foreach ($arrayOfObjects as $object) {
            $associativeArray[$object->id] = $object->name;
        }
        return $associativeArray;
    }
}
