<?php

namespace App\Controllers;


use App\Models\UserModel;
use Config\Security;
use Config\Services;

class General extends BaseController
{
    public $session;
    public $data;
    public $date;
    public $db;
    public $usermodel;
    public function __construct()
    {
        $this->session = session();
        $this->usermodel = new UserModel();
        $this->data['session'] = $this->session;
        $this->data['uri']  = service('uri');
        helper(['url', 'session', 'custom']);
        $this->date = date("Y-m-d H:i:s");
        $this->session = session();
        if (!$this->session->has('login') || !$this->session->login) {
            redirect('auth/login', 'refresh');
        }

        $this->data['user_id'] = $this->session->user_id;
        $this->data['title'] = "";

        $this->db = db_connect();
    }
}
