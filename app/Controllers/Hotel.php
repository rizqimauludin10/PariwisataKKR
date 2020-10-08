<?php

namespace App\Controllers;

use App\Models\M_hotel;
use App\Models\M_galleriHotel;

class Hotel extends BaseController{

    protected $hotelModel;
    public function __construct()
    {
        $this->hotelModel = new M_hotel();
    }
    
    public function index() {
        $pager = \Config\Services::pager();

        echo view('admin/_partials/partial_header');
        echo view('admin/_partials/partial_sidebar');
        echo view('admin/_partials/partial_topbar');

        $currentPage = $this->request->getVar('page_hotel') ? $this->request->getVar('page_hotel') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $wisata = $this->hotelModel->search($keyword);
        } else {
            $wisata = $this->hotelModel->getHotel();
        }

        $data  = [
            'title' => 'Daftar Hotel',
            'hotel' => $this->hotelModel
                ->orderBy('hotel.id', 'DESC')
                ->paginate(10, 'hotel'),
            'pager' => $this->hotelModel->pager,
            'currentPage' => $currentPage

        ];

        echo view('hotel/index', $data);

        echo view('admin/_partials/partial_footer');

        d($data);

    }

    public function hotelCreate()
    {
        echo view('admin/_partials/partial_header');
        echo view('admin/_partials/partial_sidebar');
        echo view('admin/_partials/partial_topbar');

        echo view('hotel/hotel_input');

        echo view('admin/_partials/partial_footer');
    }

    public function hotelSave() {
        $db = db_connect('default');
        $builder = $db->table('hotel');

        $filePoster = $this->request->getFile('hotelPoster');

        if ($filePoster->getError() == 4) {
            $namePosterFile = 'defaultimage.png';
        } else {
            $namePosterFile = $filePoster->getRandomName();
            $filePoster->move('img/hotel', $namePosterFile);
        }

        $model = new M_hotel();
        $model2 = new M_galleriHotel();
        $slug = url_title($this->request->getVar('hotelName'), '-', true);

        $data = [
            'id_user' => $this->request->getVar('idUser'),
            'hotel_name' => $this->request->getVar('hotelName'),
            'hotel_slug' => $slug,
            'hotel_desc' => $this->request->getVar('hotelDesc'),
            'hotel_address' => $this->request->getVar('hotelAddress'),
            'hotel_price' => $this->request->getVar('hotelCost'),
            'hotel_contact' => $this->request->getVar('hotelContact'),
            'hotel_facility' => $this->request->getVar('hotelFacility'),
            'hotel_lat' => $this->request->getVar('lat'),
            'hotel_lng' => $this->request->getVar('lang'),
            'hotel_poster' => $namePosterFile
        ];

        $model->insert($data);
        $last_id = $db->insertID();

        $file_image = $this->request->getFiles();


        foreach ($file_image['hotelUpload'] as $img) {
            $gallery_file = $img->getRandomName();
            $img->move('img/wisata/hotelGallery', $gallery_file);

            $hotel_gallery = [
                'id_hotel' => $last_id,
                'file' => $gallery_file
            ];

            $model2->insert($hotel_gallery);
        }
        return redirect()->to(base_url('hotel'));
    }


    public function deleteHotel($slug)
    {
        $model = new M_hotel();
        $model->deleteHotel($slug);
        return redirect()->to(base_url('hotel'));
    }
}