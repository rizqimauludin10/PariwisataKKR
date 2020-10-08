<?php

namespace App\Controllers;

use App\Models\M_wisata;

class F_About extends BaseController {

    protected $wisataModel;
    
    public function __construct()
    {
        $this->wisataModel = new M_wisata();
    }

    public function index() {
        echo view('frontend/f_header');
        echo view('frontend/f_about');
        echo view('frontend/f_footer');
    }
}