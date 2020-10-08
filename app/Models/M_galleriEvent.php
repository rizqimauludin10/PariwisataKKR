<?php

namespace App\Models;

use CodeIgniter\Model;

class M_galleriEvent extends Model {
    
    protected $table = 'gallery_event';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_event', 'event_gallery_file', 'updated_at'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';

    public function getEventGallery($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id]);
        }
    }
}