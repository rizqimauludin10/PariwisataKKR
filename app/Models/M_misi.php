<?php

namespace App\Models;

use CodeIgniter\Model;

class M_misi extends Model
{

    protected $table = 'misi_profile';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_user', 'misi_title', 'misi_desc', 'updated_at'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';

    public function getMisi($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id]);
        }
    }

    public function updateMisi($data, $id)
    {
        $query = $this->db->table('misi_profile')->update($data, array('id' => $id));
        return $query;
    }
}
