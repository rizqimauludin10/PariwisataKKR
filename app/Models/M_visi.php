<?php

namespace App\Models;

use CodeIgniter\Model;

class M_visi extends Model
{
    protected $table = 'visi';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_user', 'visi_title', 'visi_desc', 'updated_at'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';


    public function getVisi($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id]);
        }
    }

    public function updateVisi($data, $id)
    {
        $query = $this->db->table('visi')->update($data, array('id' => $id));
        return $query;
    }
}
