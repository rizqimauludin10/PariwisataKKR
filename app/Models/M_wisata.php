<?php


namespace App\Models;

use CodeIgniter\Model;

class M_wisata extends Model
{

    protected $table = 'wisata';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_user', 'id_kategori', 'wisata_poster', 'wisata_slug', 'wisata_name', 'wisata_desc', 'wisata_operational', 'wisata_address', 'wisata_cost', 'wisata_category', 'wisata_contact', 'wisata_facility', 'wisata_lat', 'wisata_lng', 'updated_at'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';

    public function getWisata($id = false)
    {
        if ($id == false) {
            return $this->db->table('wisata')
                ->join('kategori', 'kategori.id=wisata.id')
                ->get()->getResultArray();
        } else {
            return $this->getWhere(['id' => $id]);
        }
    }

    public function getWisataAll($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['wisata_slug'  => $slug])->first();
    }

    public function deleteWisata($id)
    {
        $query = $this->db->table('wisata')->delete(array('id' => $id));
        return $query;
    }
}
