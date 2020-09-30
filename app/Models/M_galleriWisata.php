<?php

namespace App\Models;

use CodeIgniter\Model;

class M_galleriWisata extends Model
{
    protected $table = 'gallery_wisata';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_wisata', 'gallery_file', 'updated_at'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';

    public function getWisataGallery($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id]);
        }
    }
}
