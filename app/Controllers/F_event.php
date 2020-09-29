<?php

namespace App\Controllers;

use App\Models\M_event;

class F_event extends BaseController
{

    public function index()
    {

        helper('text');
        $data = [
            "title" => "Event Pariwisata Kubu Raya",
        ];

        echo view('frontend/f_header', $data);

        $model = new M_event();
        $data['f_event'] = $model->getEvent();
        // $data['f_event'] = [
        //     $model->getEvent(),
        //     'pager' => $model->pager
        // ];
        echo view('frontend/f_event', $data);
        echo view('frontend/f_footer');
    }
}
