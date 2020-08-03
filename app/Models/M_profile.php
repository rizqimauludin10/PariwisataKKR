<?php

namespace App\Models;

use CodeIgniter\Model;

class M_profile extends Model
{
    protected $table = 'profile';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_user', 'profile_title', 'profile_desc', 'updated_at'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';

    public function getProfile($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id]);
        }
    }

    public function updateProfile($data, $id)
    {
        $query = $this->db->table('profile')->update($data, array('id' => $id));
        return $query;
    }
}
