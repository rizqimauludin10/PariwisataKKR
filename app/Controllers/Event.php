<?php

namespace App\Controllers;

use App\Models\M_event;
use App\Models\M_kategori;

class Event extends BaseController
{
    public function index()
    {
        echo view('admin/_partials/partial_header');
        echo view('admin/_partials/partial_sidebar');
        echo view('admin/_partials/partial_topbar');

        $model = new M_event();

        $data['event'] = $model->getEvent();

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

        $filePoster = $this->request->getFile('eventPoster');
        if ($filePoster->getError() == 4) {
            $namePosterFile = 'defaultimage.png';
        } else {
            $namePosterFile = $filePoster->getRandomName();
            $filePoster->move('img/event', $namePosterFile);
        }

        $model = new M_event();

        $data = [
            'id_user' => $this->request->getVar('idUser'),
            'id_kategori' => $this->request->getVar('idKategori'),
            'event_name' => $this->request->getVar('eventName'),
            'event_desc' => $this->request->getVar('eventDesc'),
            'event_date' => $this->request->getVar('eventDate'),
            'event_poster' => $namePosterFile

        ];

        $model->insert($data);

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

        $id = $this->request->getPost('idProfile');
        $data = array(

            'id_user' => $this->request->getPost('idUser'),
            'profile_title' => $this->request->getPost('profileTitle'),
            'profile_desc' => $this->request->getPost('profileDesc'),
        );

        $model->updateProfile($data, $id);
        return redirect()->to(base_url('event'));
    }

    public function deleteEvent($id)
    {
        $model = new M_event();
        $model->deleteEvent($id);
        return redirect()->to(base_url('event'));
    }
}
