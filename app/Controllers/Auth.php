<?php

namespace App\Controllers;
use App\Models\authModel;    

class Auth extends BaseController
{
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->loginModel = new \App\Models\authModel();
        helper('form');
    }

    public function index()
    {
        session();
        $data['validation'] = $this->validator;
        $data = [ 'validate' => \Config\Services::validation()];

        //echo view ('users/header_v');
        echo view ('register_form_v', $data);
        //echo view ('users/footer_v');

    }

}
