<?php

namespace App\Controllers;

use App\Models\M_wisata;
use App\Models\M_kategori;
use App\Models\M_event;
use App\Models\M_galleriWisata;


class F_home extends BaseController
{
    protected $wisataModel;
    protected $kategoriModel;
    protected $eventModel;
    protected $wisataGalleriModel;
    public function __construct()
    {
        $this->wisataModel = new M_wisata();
        $this->kategoriModel = new M_kategori();
        $this->eventModel = new M_event();
        $this->wisataGalleriModel = new M_galleriWisata();
        helper('text');
    }



    public function index()
    {

        
        $data = [
            'f_header' => "Beranda",
            'f_destinasi' => $this->wisataModel->getWisataLanding(),
            'f_kategori' => $this->kategoriModel->getKategori(),
            'f_event' => $this->eventModel->getEventLanding(),
            'f_galleri' => $this->wisataGalleriModel->getWisataGalleryLanding()
        ];
        
        echo view('frontend/f_header', $data);
        echo view('frontend/index', $data);
        echo view('frontend/f_footer');

        // d($data);
    }
}
