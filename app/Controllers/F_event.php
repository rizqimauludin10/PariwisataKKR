<?php

namespace App\Controllers;

use App\Models\M_event;
use App\Models\M_kategori;

class F_event extends BaseController
{

    protected $wisataModel;
    protected $kategoriModel;
    public function __construct()
    {
        $this->eventModel = new M_event();
        $this->kategoriModel = new M_kategori();
    }
    

    public function index()
    {
        helper('text');

        $pager = \Config\Services::pager();

        $currentPage = $this->request->getVar('page_event') ? $this->request->getVar('page_event') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $wisata = $this->eventModel->search($keyword);
        } else {
            $wisata = $this->eventModel->getEventAll();
        }

        echo view('frontend/f_header');

        $data = [
            'f_event' => $this->eventModel
                ->join('kategori', 'kategori.id=event.id_kategori')
                ->orderBy('event.id', 'DESC')
                ->paginate(12, 'f_event'),
            'f_kategori' => $this->kategoriModel->getKategori(),
            'pager' => $this->eventModel->pager,
            'currentPage' => $currentPage
        ];

        echo view('frontend/f_event', $data);
        echo view('frontend/f_footer');
        // d($data);
    }
}
