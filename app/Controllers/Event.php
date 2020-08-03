<?php

namespace App\Controllers;

class Event extends BaseController
{
    public function index()
    {
        echo view('admin/_partials/partial_header');
        echo view('admin/_partials/partial_sidebar');
        echo view('admin/_partials/partial_topbar');

        //$model = new M_misi();
        //$data['misi'] = $model->getMisi();
        echo view('event/index');

        echo view('admin/_partials/partial_footer');
    }
}
