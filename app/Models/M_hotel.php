<?php

namespace App\Models;

use CodeIgniter\Model;

class M_hotel extends Model {

    protected $table = 'hotel';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_user','hotel_poster','hotel_slug', 'hotel_name', 'hotel_address', 'hotel_desc', 'hotel_contact', 'hotel_price', 'hotel_lat', 'hotel_lng', 'hotel_facility', 'updated_at'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';

    public function getHotel($slug = false) {
        if ($slug == false) {
            return $this->findAll();
        } else {
            $this->db->table('hotel');
            $this->where('event.event_slug', $slug);
            $data1 = $this->get()->getRowArray();
            return $data1;
        }
    }

    public function getHotelGallery($slug)
    {
        $this->db->table('hotel');
        $this->join('gallery_hotel', 'gallery_hotel.id_hotel=hotel.id');
        $this->where('hotel.hotel_slug', $slug);
        $data1 = $this->get()->getResultArray();

        return $data1;
    }

    public function deleteHotel($slug)
    {
        return $this->db->table('hotel')->delete(['hotel_slug' => $slug]);
    }
}