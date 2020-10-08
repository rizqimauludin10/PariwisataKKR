<?php

namespace App\Controllers;

use App\Models\M_wisata;

class F_Profile extends BaseController
{
    protected $wisataModel;
    
    public function __construct()
    {
        $this->wisataModel = new M_wisata();
    }

    public function index() {
        echo view('frontend/f_header');
        echo view('frontend/f_profile');
        echo view('frontend/f_footer');
    }
}