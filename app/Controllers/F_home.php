<?php

namespace App\Controllers;

class F_home extends BaseController
{
    public function index()
    {
        echo view('frontend/f_header');


        // $model = new M_event();
        // $data['event'] = $model->getEvent();
        // echo view('event/index', $data);
        echo view('frontend/index');
        echo view('frontend/f_footer');
    }
}
