<?php

namespace App\Controllers\admin;

use App\Controllers\General;
use App\Models\UserModel;
use App\Models\PropertyType;
use App\Models\Services;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\I18n\Time;
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

    public function profile()
    {
        $userModel = new UserModel();
        $allUserData = $userModel->select('users.*,user_role.role_name')->join('user_role', 'user_role.id=users.user_role', 'inner')->find($this->session->user_id);
        $this->data['title'] = "Profile";
        $this->data['user'] = $allUserData;
        return view('admin/profile', $this->data);
    }

    public function admin_exception(\Throwable $e)
    {

        $this->data['message'] = $e->getMessage();
        $this->data['title'] = $e->getMessage();
        return view('errors/html/admin_exception', $this->data);
    }

    public function enable2FactorAuth()
    {
        $this->data['title'] = "Enable Two-factor authentication";
        $user = $this->usermodel->find($this->session->user_id);


        $provisioningUrl = \Config\Services::Authenticator()->sendOTP($user);

        $this->data['ProvisionalUrl'] = 'https://chart.googleapis.com/chart?chs=300x300&chld=M|0&cht=qr&chl=' . urlencode($provisioningUrl);

        return view('admin/twofactorauth', $this->data);
    }
    public function passkeys()
    {
        $this->data['title'] = "Passkeys";
        $user = $this->usermodel->find($this->session->user_id);


        

        return view('admin/security/passkeys', $this->data);
    }
}
