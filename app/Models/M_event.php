<?php

namespace App\Models;

use CodeIgniter\Model;

class M_event extends Model
{
    protected $table = 'event';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_user', 'id_kategori', 'event_poster','event_slug', 'event_name', 'event_address', 'event_desc', 'event_date', 'event_lat', 'event_lng', 'updated_at'];
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

    public function deleteEvent($slug)
    {
        return $this->db->table('event')->delete(['event_slug' => $slug]);
    }


    public function getEventAll(){
        
        return $this->db->table('event')
            ->get()->getResultArray();
    
    }

    public function getEventDetail($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        $this->db->table('event');
        $this->join('kategori', 'kategori.id=event.id_kategori');
        $this->where('event.event_slug', $slug);
        $data1 = $this->get()->getRowArray();

        return $data1;
    }

    public function getEventGallery($slug)
    {
        $this->db->table('event');
        $this->join('gallery_event', 'gallery_event.id_event=event.id');
        $this->where('event.event_slug', $slug);
        $data1 = $this->get()->getResultArray();

        return $data1;
    }

}
