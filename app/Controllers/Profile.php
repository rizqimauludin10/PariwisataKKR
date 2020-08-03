<?php

namespace App\Controllers;

use App\Models\M_profile;
use App\Models\M_visi;
use App\Models\M_misi;

class Profile extends BaseController
{
    public function index()
    {
        echo view('admin/_partials/partial_header');
        echo view('admin/_partials/partial_sidebar');
        echo view('admin/_partials/partial_topbar');

        $model = new M_profile();
        $modelVisi = new M_visi();
        $modelMisi = new M_misi();
        $data['profile'] = $model->getProfile();
        $data['visi'] = $modelVisi->getVisi();
        $data['misi'] = $modelMisi->getMisi();
        echo view('profile/index', $data);

        echo view('admin/_partials/partial_footer');
    }

    public function profileUpdate()
    {
        echo view('admin/_partials/partial_header');
        echo view('admin/_partials/partial_sidebar');
        echo view('admin/_partials/partial_topbar');

        $model = new M_profile();
        $data['profile'] = $model->getProfile();


        echo view('profile/profile', $data);

        echo view('admin/_partials/partial_footer');
    }

    public function profilePublish()
    {
        $model = new M_profile();

        $id = $this->request->getPost('idProfile');
        $data = array(

            'id_user' => $this->request->getPost('idUser'),
            'profile_title' => $this->request->getPost('profileTitle'),
            'profile_desc' => $this->request->getPost('profileDesc'),
        );

        $model->updateProfile($data, $id);
        return redirect()->to(base_url('profile'));
    }


    public function visiUpdate()
    {
        echo view('admin/_partials/partial_header');
        echo view('admin/_partials/partial_sidebar');
        echo view('admin/_partials/partial_topbar');
        echo view('profile/visi');
        echo view('admin/_partials/partial_footer');
    }


    public function visiPublish()
    {
        return redirect()->to(base_url('profile'));
    }

    public function misiUpdate()
    {
        echo view('admin/_partials/partial_header');
        echo view('admin/_partials/partial_sidebar');
        echo view('admin/_partials/partial_topbar');
        echo view('profile/misi');
        echo view('admin/_partials/partial_footer');
    }


    public function misiPublish()
    {
        return redirect()->to(base_url('profile'));
    }
}
