<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_barang($keyword = null) {
        if ($keyword) {
            $this->db->like('nama_barang', $keyword);
           
        }
         $this->db->where('status_hapus', 0);
         $query = $this->db->get('barang');
        return $query->result();
    }

    public function tambah_barang($data) {
        $this->db->insert('barang', $data);
    }

    public function edit_barang($id, $data) {
        
        $this->db->where('id_barang', $id);
        $this->db->update('barang', $data);
    }

    public function hapus_barang($id, $data) {
        $this->db->where('id_barang', $id);
        $this->db->update('barang', $data);
    }
    function get_barang_by_id ($id) {
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->limit(1);
         $this->db->where('id_barang', $id); 
        return $this->db->get()->row();
        

        
    }
}
