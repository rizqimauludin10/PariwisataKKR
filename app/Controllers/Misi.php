<?php

namespace App\Controllers;

use App\Models\M_misi;

class Misi extends BaseController
{
    public function index()
    {
        echo view('admin/_partials/partial_header');
        echo view('admin/_partials/partial_sidebar');
        echo view('admin/_partials/partial_topbar');

        $model = new M_misi();
        $data['misi'] = $model->getMisi();
        echo view('profile/misi', $data);

        echo view('admin/_partials/partial_footer');
    }

    public function misiPublish()
    {
        $model = new M_misi();

        $id = $this->request->getPost('idMisi');
        $data = array(

            'id_user' => $this->request->getPost('idUser'),
            'misi_title' => $this->request->getPost('misiTitle'),
            'misi_desc' => $this->request->getPost('misiDesc'),
        );

        $model->updateMisi($data, $id);
        return redirect()->to(base_url('profile'));
    }

    public function misiUpdate()
    {
        echo view('admin/_partials/partial_header');
        echo view('admin/_partials/partial_sidebar');
        echo view('admin/_partials/partial_topbar');

        $model = new M_misi();
        $data['misi'] = $model->getMisi();
        echo view('profile/misi', $data);

        echo view('admin/_partials/partial_footer');
    }
}
