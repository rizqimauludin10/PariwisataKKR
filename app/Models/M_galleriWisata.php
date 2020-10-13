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

    public function getWisataGalleryLanding()
    {
        $this->db->table('gallery_wisata');
        $this->orderBy('gallery_wisata.id', 'RANDOM');
        $this->limit(6);
        $data1 = $this->get()->getResultArray();

        return $data1;
    }
}
