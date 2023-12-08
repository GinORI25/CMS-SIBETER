<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konten_model extends CI_Model
{

    public function getKonten($limit, $start, $search = null)
    {
        if ($search) {
            $this->db->like('judul', $search);
            $this->db->or_like('keterangan', $search);
        }
        $this->db->join('kategori', 'konten.id_kategori = kategori.id_kategori');
        $this->db->join('user', 'konten.username = user.username');
        $this->db->order_by('tanggal DESC');
        return $this->db->get('konten', $limit, $start, $search)->result_array();
    }
    public function countAllContent()
    {
        return $this->db->get('konten')->num_rows();
    }

    public function RCP()
    {
        $this->db->from('konten a');
        $this->db->join('kategori b', 'a.id_kategori=b.id_kategori');
        $this->db->join('user c', 'a.username=c.username');
        $this->db->order_by('id_konten',' DESC');
        $this->db->limit(5);
        return $this->db->get()->result_array();
    }

    public function konten_limit1()
    {
        $this->db->from('konten a');
        $this->db->join('kategori b', 'a.id_kategori=b.id_kategori');
        $this->db->join('user c', 'a.username=c.username');
        $this->db->order_by('id_konten DESC');
        $this->db->limit(1);
        return $this->db->get()->result_array();
    }
 
}