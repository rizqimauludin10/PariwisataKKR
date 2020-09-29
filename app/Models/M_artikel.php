<?php

namespace App\Models;

use CodeIgniter\Model;

class M_artikel extends Model
{
    protected $table = 'artikel';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_user', 'artikel_poster', 'artikel_header', 'artikel_desc', 'updated_at'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
}
