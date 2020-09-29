<?php

namespace App\Models;

use CodeIgniter\Model;

class M_event extends Model
{
    protected $table = 'event';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_user', 'id_kategori', 'event_poster', 'event_name', 'event_desc', 'event_date', 'updated_at'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';


    public function getEvent($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id]);
        }
    }

    public function updateEvent($data, $id)
    {
        $query = $this->db->table('event')->update($data, array('id' => $id));
        return $query;
    }

    public function deleteEvent($id)
    {
        $query = $this->db->table('event')->delete(array('id' => $id));
        return $query;
    }
    // public function insertEvent($data)
    // {
    //     return $this->db->table('event')->insert($data);
    // }
}
