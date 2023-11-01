<?php

namespace App\Controllers\admin;

use App\Controllers\General;

use CodeIgniter\HTTP\RequestInterface;

class enquiries extends General
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
    public function faq()
    {
        $faq = new \App\Models\Faq_enquiries();
        $this->data['title'] = "Enquires faq ";
        $this->data['leads'] = $faq->orderBy('id','DESC')->findAll();
        return view('admin/enquiries/faq', $this->data);
    }
    public function contact_us()
    {
        $contact_us = new \App\Models\Contact_enquiries();
        $this->data['title'] = "Enquires contact-us ";
        $this->data['leads'] = $contact_us->orderBy('id','DESC')->findAll();
        return view('admin/enquiries/contactus', $this->data);
    }
}
