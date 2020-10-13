<?php

namespace App\Controllers;

use App\Models\M_wisata;
use App\Models\M_kategori;

class F_destinasi extends BaseController
{
    protected $wisataModel;
    protected $kategoriModel;
    public function __construct()
    {
        $this->wisataModel = new M_wisata();
        $this->kategoriModel = new M_kategori();
    }

    public function index()
    {
        $pager = \Config\Services::pager();
        $currentPage = $this->request->getVar('page_wisata') ? $this->request->getVar('page_wisata') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $wisata = $this->wisataModel->search($keyword);
        } else {
            $wisata = $this->wisataModel->getWisataAll();
        }


        $model = new M_wisata();
        $data = [
            'f_header' => "Destinasi Wisata",
            'f_destinasi' => $this->wisataModel
            ->join('kategori', 'kategori.id=wisata.id_kategori')
            ->orderBy('wisata.id', 'DESC')
            ->paginate(18, 'f_wisata'),
            'f_kategori' => $this->kategoriModel->getKategori(),
            // 'count' => $this->wisataModel->countKategori(),
            'pager' => $this->wisataModel->pager,
            'currentPage' => $currentPage
        ];
        
        
        echo view('frontend/f_header', $data);
        echo view('frontend/f_destinasi', $data);
        echo view('frontend/f_footer');
        d($data);
    }


    public function detail($slug)
    {
        // $data = $this->wisataModel->where(['wisata_slug' => $slug])->first();
        $data = [
            'title' => 'Detail Wisata',
            'wisata' => $this->wisataModel->getWisata($slug),
            'gallery' => $this->wisataModel->getWisataGallery($slug)

        ];
        echo view('frontend/f_header');
        echo view('frontend/f_destinasi_detail', $data);
        echo view('frontend/f_footer');
    }

    public function getKategori() {

        $data = [
            'kategori' => $this->kategoriModel->getKategori()
        ];

        return $data;
    }
}
