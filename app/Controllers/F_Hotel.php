<?php

namespace App\Controllers;

use App\Models\M_hotel;

class F_Hotel extends BaseController {
    protected $hotelModel;
    
    public function __construct()
    {
        $this->hotelModel = new M_hotel();
    }

    public function index() {
        echo view('frontend/f_header');
        echo view('frontend/f_hotel');
        echo view('frontend/f_footer');
    }
}