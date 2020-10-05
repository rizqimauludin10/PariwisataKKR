<?php

namespace App\Controllers;

use App\Models\M_galleriWisata;
use App\Models\M_wisata;
use App\Models\M_kategori;

class Wisata extends BaseController
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

        echo view('admin/_partials/partial_header');
        echo view('admin/_partials/partial_sidebar');
        echo view('admin/_partials/partial_topbar');

        $currentPage = $this->request->getVar('page_wisata') ? $this->request->getVar('page_wisata') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $wisata = $this->wisataModel->search($keyword);
        } else {
            $wisata = $this->wisataModel->getWisataAll();
        }

        $data  = [
            'title' => 'Daftar Destinasi Wisata',
            'wisata' => $this->wisataModel
                ->join('kategori', 'kategori.id=wisata.id_kategori', 'left')
                ->orderBy('wisata.id', 'DESC')
                ->paginate(10, 'wisata'),
            'pager' => $this->wisataModel->pager,
            'currentPage' => $currentPage

        ];

        echo view('wisata/index', $data);

        echo view('admin/_partials/partial_footer');
        // d($data);
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

        // $validate =  $this->validate([
        //     'wisata_poster' => 'uploaded[wisata_poster]|mime_in[wisata_poster,image/jpg,image/gif,image/jpeg,image/png]|max_size[wisata_poster,2000]'
        // ]);

        if ($filePoster->getError() == 4) {
            $namePosterFile = 'defaultimage.png';
        } else {
            $namePosterFile = $filePoster->getRandomName();
            $filePoster->move('img/wisata', $namePosterFile);
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
            'wisata_lat' => $this->request->getVar('lat'),
            'wisata_lng' => $this->request->getVar('lang'),
            'wisata_poster' => $namePosterFile

        ];

        $model->insert($data);
        $last_id = $db->insertID();

        $file_image = $this->request->getFiles();



        foreach ($file_image['destinasiUpload'] as $img) {
            $gallery_file = $img->getRandomName();
            $img->move('img/wisata/gallerywisata', $gallery_file);

            $destinasi_gallery = [
                'id_wisata' => $last_id,
                // 'gallery_file' => $img->getRandomName()
                'gallery_file' => $gallery_file
            ];

            $model2->insert($destinasi_gallery);
            // $img->move('img/wisata/gallerywisata', $img->getRandomName());
        }
        // session()->setFlashdata('success', 'Berhasil upload');
        return redirect()->to(base_url('wisata'));
    }


    public function deleteWisata($slug)
    {
        $model = new M_wisata();
        $model->deleteWisata($slug);
        return redirect()->to(base_url('wisata'));
    }

    public function detailWisata($slug)
    {
        $data = [
            'title' => 'Detail Wisata',
            'wisata' => $this->wisataModel->getWisata($slug),
            'gallery' => $this->wisataModel->getWisataGallery($slug)
        ];

        return $data;
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Wisata',
            'wisata' => $this->wisataModel->getWisata($slug),
            'gallery' => $this->wisataModel->getWisataGallery($slug)

        ];


        echo view('admin/_partials/partial_header');
        echo view('admin/_partials/partial_sidebar');
        echo view('admin/_partials/partial_topbar');
        echo view('wisata/wisata_detail', $data);
        echo view('admin/_partials/partial_footer');
    }
}
