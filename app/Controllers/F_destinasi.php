<?php

namespace App\Controllers;

use App\Models\M_wisata;

class F_destinasi extends BaseController
{
    protected $wisataModel;
    public function __construct()
    {
        $this->wisataModel = new M_wisata();
    }

    public function index()
    {
        $pager = \Config\Services::pager();

        echo view('frontend/f_header');
        $model = new M_wisata();
        //$data['f_destinasi'] = $model->getWisataAll();
        $data = [
            'f_destinasi' => $model->paginate(3),
            'pager' => $model->pager
        ];
        echo view('frontend/f_destinasi', $data);
        echo view('frontend/f_footer');
    }

    public function getAllDestination()
    {
        $pager = \Config\Services::pager();
        $model = new M_wisata();
        $data = [
            'f_destinasi_p' => $model->paginate(5),
            'pager' => $model->pager
        ];

        return view('frontend/f_destinasi', $data);
    }

    public function detailDestination($slug = false)
    {
        $data = [
            'title' => 'Detail Wisata',
            'wisata' => $this->wisataModel->getWisataAll($slug)

        ];

        return view('/f_wisata/detail', $data);
    }

    public function detail($slug)
    {
        // $data = $this->wisataModel->where(['wisata_slug' => $slug])->first();
        $data = [
            'title' => 'Detail Wisata',
            'wisata' => $this->wisataModel->getWisataAll($slug)

        ];
        echo view('frontend/f_header');
        echo view('frontend/f_destinasi_detail', $data);
        echo view('frontend/f_footer');
    }
}
