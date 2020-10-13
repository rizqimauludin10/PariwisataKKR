<?php

namespace App\Controllers;

use App\Models\M_event;
use App\Models\M_kategori;
use App\Models\M_galleriEvent;

class Event extends BaseController
{
    protected $eventModel;
    protected $kategoriModel;
    public function __construct()
    {
        $this->eventModel = new M_event();
        $this->kategoriModel = new M_kategori();
        helper('text');
    }

    public function index()
    {
        $pager = \Config\Services::pager();

        $currentPage = $this->request->getVar('page_event') ? $this->request->getVar('page_event') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $wisata = $this->eventModel->search($keyword);
        } else {
            $wisata = $this->eventModel->getEventAll();
        }

        echo view('admin/_partials/partial_header');
        echo view('admin/_partials/partial_sidebar');
        echo view('admin/_partials/partial_topbar');

        $model = new M_event();

        $data  = [
            'title' => 'Daftar Event ',
            'event' => $this->eventModel
                ->join('kategori', 'kategori.id=event.id_kategori', 'left')
                ->orderBy('event.id', 'DESC')
                ->paginate(10, 'event'),
            'pager' => $this->eventModel->pager,
            'currentPage' => $currentPage

        ];

        echo view('event/index', $data);

        echo view('admin/_partials/partial_footer');
    }

    public function view_event()
    {
        echo view('admin/_partials/partial_header');
        echo view('admin/_partials/partial_sidebar');
        echo view('admin/_partials/partial_topbar');

        //$model = new M_event();
        //$data['event'] = $model->getEvent();
        echo view('event/event_view');

        echo view('admin/_partials/partial_footer');
    }

    public function eventUpdate()
    {
        echo view('admin/_partials/partial_header');
        echo view('admin/_partials/partial_sidebar');
        echo view('admin/_partials/partial_topbar');

        $model = new M_event();
        $data['event'] = $model->getEvent();

        echo view('event/event_update', $data);
        echo view('admin/_partials/partial_footer');
    }

    public function eventCreate()
    {
        echo view('admin/_partials/partial_header');
        echo view('admin/_partials/partial_sidebar');
        echo view('admin/_partials/partial_topbar');

        $model = new M_event();
        $model2 = new M_kategori();

        $data['event'] = $model->getEvent();
        $data['kategori'] = $model2->getKategori();


        echo view('event/event_input', $data);

        echo view('admin/_partials/partial_footer');
    }

    public function eventSave()
    {

        $db = db_connect('default');
        $builder = $db->table('event');

        $filePoster = $this->request->getFile('eventPoster');
        if ($filePoster->getError() == 4) {
            $namePosterFile = 'defaultimage.png';
        } else {
            $namePosterFile = $filePoster->getRandomName();
            $filePoster->move('img/event', $namePosterFile);
        }

        $model = new M_event();
        $model2 = new M_galleriEvent();
        $slug = url_title($this->request->getVar('eventName'), '-', true);

        $data = [
            'id_user' => $this->request->getVar('idUser'),
            'id_kategori' => $this->request->getVar('idKategori'),
            'event_name' => $this->request->getVar('eventName'),
            'event_slug' => $slug,
            'event_desc' => $this->request->getVar('eventDesc'),
            'event_address' => $this->request->getVar('eventAddress'),
            'event_date' => $this->request->getVar('eventDate'),
            'event_lat' => $this->request->getVar('lat'),
            'event_lng' => $this->request->getVar('lang'),
            'event_poster' => $namePosterFile

        ];

        $model->insert($data);
        $last_id = $db->insertID();

        $file_image = $this->request->getFiles();

        foreach ($file_image['eventUpload'] as $img) {
            $gallery_file = $img->getRandomName();
            $img->move('img/event/galleryevent', $gallery_file);

            $event_gallery = [
                'id_event' => $last_id,
                // 'gallery_file' => $img->getRandomName()
                'event_gallery_file' => $gallery_file
            ];

            $model2->insert($event_gallery);
            // $img->move('img/wisata/gallerywisata', $img->getRandomName());
        }

        return redirect()->to(base_url('event'));
    }

    public function do_upload()
    {
        $config = array(
            'upload_path' => "./uploads/",
            'allowed_types' => "gif|jpg|png|jpeg|pdf",
            'overwrite' => TRUE,
            'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
            'max_height' => "768",
            'max_width' => "1024"
        );

        $this->load->library('upload', $config);
        if ($this->upload->do_upload()) {
            $data = array('upload_data' => $this->upload->data());
            $this->load->view('upload_success', $data);
        } else {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('custom_view', $error);
        }
    }

    public function eventUpdatePublish()
    {
        $model = new M_event();
        return redirect()->to(base_url('event'));
    }

    public function deleteEvent($slug)
    {
        $model = new M_event();
        $model->deleteEvent($slug);
        return redirect()->to(base_url('event'));
    }
}
