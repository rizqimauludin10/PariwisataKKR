<?php

namespace App\Models;

use CodeIgniter\Model;

class M_kategori extends Model
{
    protected $table = 'kategori';
    protected $primaryKey = 'id';
    protected $allowedFields = ['poster_kategori','nama_kategori'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';

    public function getKategori()
    {
        return $this->findAll();
    }
}
