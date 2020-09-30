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

    public function getWisataAll()
    {

        return $this->db->table('wisata')
            ->join('kategori', 'kategori.id=wisata.id_kategori')
            ->get()->getResultArray();
    }


    public function getWisata($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        // return $this->db->table('wisata')
        //     ->join('kategori', 'kategori.id=wisata.id_kategori', 'left')
        //     ->join('gallery_wisata', 'gallery_wisata.id_wisata=wisata.id', 'left')
        //     ->where('wisata.wisata_slug', $slug)
        //     ->get()
        //     ->getRowArray();

        $this->db->table('wisata');
        $this->join('kategori', 'kategori.id=wisata.id_kategori');
        $this->where('wisata.wisata_slug', $slug);
        $data1 = $this->get()->getRowArray();

        return $data1;
    }

    public function getWisataGallery($slug)
    {
        $this->db->table('wisata');
        $this->join('gallery_wisata', 'gallery_wisata.id_wisata=wisata.id');
        $this->where('wisata.wisata_slug', $slug);
        $data1 = $this->get()->getResultArray();

        return $data1;
    }

    public function deleteWisata($slug)
    {
        return $this->db->table('wisata')->delete(['wisata_slug' => $slug]);
    }
}
