<?php

namespace App\Controllers\admin\cms;

use App\Controllers\General;
use App\Models\UserModel;
use App\Models\PropertyType;
use CodeIgniter\HTTP\RequestInterface;

class faq extends General
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
        $this->data['title'] = "Faq";
        $cms = new \App\Models\cms\Cms_faq();
        $this->data['Faqs'] = $cms->findAll();
        return view('admin/cms/faq', $this->data);
    }
}
