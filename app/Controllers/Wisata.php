<?php

namespace App\Controllers;

use App\Models\M_galleriWisata;
use App\Models\M_wisata;
use App\Models\M_kategori;

class Wisata extends BaseController
{
    protected $wisataModel;
    public function __construct()
    {
        $this->wisataModel = new M_wisata();
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


    public function wisataCreate()
    {
        echo view('admin/_partials/partial_header');
        echo view('admin/_partials/partial_sidebar');
        echo view('admin/_partials/partial_topbar');

        $model = new M_wisata();
        $model2 = new M_kategori();

        $data['wisata'] = $model->getWisata();
        $data['kategori'] = $model2->getKategori();


        echo view('wisata/wisata_input', $data);

        echo view('admin/_partials/partial_footer');
    }

    public function wisataSave()
    {
        $db = db_connect('default');
        $builder = $db->table('wisata');

        $filePoster = $this->request->getFile('destinasiPoster');
        //$filePoster2 = $this->request->getFile('galleriFile');
        if ($filePoster->getError() == 4) {
            $namePosterFile = 'defaultimage.png';
            //$namePosterFile2 = 'defaultimage.png';
        } else {
            $namePosterFile = $filePoster->getRandomName();
            //$namePosterFile2 = $filePoster2->getRandomName();
            $filePoster->move('img/wisata', $namePosterFile);
            //$filePoster2->move('img/wisata/gallerywisata', $namePosterFile2);
        }

        $model = new M_wisata();
        $model2 = new M_galleriWisata();
        $slug = url_title($this->request->getVar('destinasiName'), '-', true);

        $data = [
            'id_user' => $this->request->getVar('idUser'),
            'id_kategori' => $this->request->getVar('idKategori'),
            'wisata_name' => $this->request->getVar('destinasiName'),
            'wisata_slug' => $slug,
            'wisata_desc' => $this->request->getVar('destinasiDesc'),
            'wisata_operational' => $this->request->getVar('destinasiOperational'),
            'wisata_address' => $this->request->getVar('destinasiAddress'),
            'wisata_cost' => $this->request->getVar('destinasiCost'),
            'wisata_contact' => $this->request->getVar('destinasiContact'),
            'wisata_facility' => $this->request->getVar('destinasiFacility'),
            'wisata_poster' => $namePosterFile

        ];

        //$builder->insert($data);
        $model->insert($data);
        // $last_id = $db->insertID();

        // $data2 = [
        //     'id_wisata' => $last_id,
        //     'galleri_name' => $this->request->getVar('galleri_name'),
        //     'galleri_desc' => $this->request->getVar('galleri_desc'),
        //     'gallery_file' => $namePosterFile2
        // ];

        // $model2->insert($data2);
        session()->setFlashdata('success', 'Berhasil upload');
        return redirect()->to(base_url('wisata'));
    }


    public function deleteWisata($id)
    {
        $model = new M_wisata();
        $model->deleteWisata($id);
        return redirect()->to(base_url('wisata'));
    }

    public function detailWisata($slug)
    {
        $model = new M_wisata();
        $data = [
            'title' => 'Detail Wisata',
            'wisata' => $this->wisataModel->getWisataAll($slug)
        ];

        return view('wisata/detail', $data);
    }

    public function detail($slug)
    {
        // $data = $this->wisataModel->where(['wisata_slug' => $slug])->first();
        $data = [
            'title' => 'Detail Wisata',
            'wisata' => $this->wisataModel->getWisataAll($slug)

        ];

        echo view('admin/_partials/partial_header');
        echo view('admin/_partials/partial_sidebar');
        echo view('admin/_partials/partial_topbar');
        echo view('wisata/wisata_detail', $data);
        echo view('admin/_partials/partial_footer');
    }
}
