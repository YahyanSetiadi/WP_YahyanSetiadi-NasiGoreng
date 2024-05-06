<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanan_model extends CI_Model {

    public function get_pesanan() {
        return $this->db->get('menu')->result();
    }

    public function tambah_pesanan($data) {
        $data['total'] = $data['harga'] * $data['jumlah']; // Hitung total
        $this->db->insert('menu', $data);
    }

    public function get_pesanan_by_id($id) {
        return $this->db->get_where('menu', array('id' => $id))->row();
    }

    public function update_pesanan($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('menu', $data);
    }

    public function hapus_pesanan($id) {
        $this->db->where('id', $id);
        $this->db->delete('menu');
    }

    
}
