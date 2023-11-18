<?php

namespace App\Controllers;

use \App\Models\UserModel;

class Home extends BaseController
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
        return view('frontend/index', $this->data);
    }
}
