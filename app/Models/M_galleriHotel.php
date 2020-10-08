<?php

namespace App\Models;

use CodeIgniter\Model;

class M_galleriHotel extends Model {
    protected $table = 'gallery_hotel';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_hotel', 'file', 'updated_at'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';

    public function getHotelGallery($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id]);
        }
    }

}