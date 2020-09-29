<?php

namespace App\Controllers;

use App\Models\M_galleriWisata;
use App\Models\M_wisata;
use App\Models\M_kategori;
use App\Models\M_artikel;

class Artikel extends BaseController
{
    protected $artikelModel;
    public function __construct()
    {
        $this->artikelModel = new M_artikel();
    }

    public function index()
    {
        echo view('admin/_partials/partial_header');
        echo view('admin/_partials/partial_sidebar');
        echo view('admin/_partials/partial_topbar');

        $model = new M_wisata();
        $data['wisata'] = $model->getWisataAll();
        echo view('wisata/index', $data);

        echo view('admin/_partials/partial_footer');
    }
}
