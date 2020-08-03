<?php

namespace App\Controllers;

use App\Models\M_visi;

class Visi extends BaseController
{

    public function index()
    {
        echo view('admin/_partials/partial_header');
        echo view('admin/_partials/partial_sidebar');
        echo view('admin/_partials/partial_topbar');

        $model = new M_visi();
        $data['visi'] = $model->getVisi();
        echo view('profile/visi', $data);

        echo view('admin/_partials/partial_footer');
    }

    public function visiPublish()
    {
        $model = new M_visi();

        $id = $this->request->getPost('idVisi');
        $data = array(

            'id_user' => $this->request->getPost('idUser'),
            'visi_title' => $this->request->getPost('visiTitle'),
            'visi_desc' => $this->request->getPost('visiDesc'),
        );

        $model->updateVisi($data, $id);
        return redirect()->to(base_url('profile'));
    }

    public function visiUpdate()
    {
        echo view('admin/_partials/partial_header');
        echo view('admin/_partials/partial_sidebar');
        echo view('admin/_partials/partial_topbar');

        $model = new M_visi();
        $data['visi'] = $model->getVisi();
        echo view('profile/visi', $data);

        echo view('admin/_partials/partial_footer');
    }
}
