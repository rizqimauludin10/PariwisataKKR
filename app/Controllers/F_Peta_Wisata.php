<?php

namespace App\Controllers;

use App\Models\M_wisata;

class F_Peta_Wisata extends BaseController
{

    protected $wisataModel;
    
    public function __construct()
    {
        $this->wisataModel = new M_wisata();
    }

    public function index()
    {
        // $currentPage = $this->request->getVar('page_peta_wisata') ? $this->request->getVar('page_peta_wisata') : 1;

        // $keyword = $this->request->getVar('keyword');

        // $keyword = $this->request->getVar('keyword');
        // if ($keyword) {
        //     $wisata = $this->wisataModel->search($keyword);
        // } else {
        //     $wisata = $this->wisataModel->getWisataAll();
        // }


        echo view('frontend/f_header');
        $model = new M_wisata();
        $data = [
            'f_peta_wisata' => $this->wisataModel
                ->join('kategori', 'kategori.id=wisata.id_kategori')
                ->orderBy('wisata.id', 'DESC')
                ->paginate(18, 'f_wisata'),
            'pager' => $this->wisataModel->pager,
        ];

        echo view('frontend/f_peta_wisata', $data);
        echo view('frontend/f_footer');
    }
}
