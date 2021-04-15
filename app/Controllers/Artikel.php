<?php

namespace App\Controllers;


class Artikel extends BaseController{
    public function __construct()
    {
        $this->session = \Config\Services::session();
    }

    // public function index(){
    //     session();
    //     $data = [
    //         'validate' => \Config\Services::validation(),

    //     ];
    //     echo view ('login_v',$data);
        
    // }

   

}
