<?php
class tes_akhir extends CI_Model {
    // Mendapatkan semua data
    public function get_mobil() {
        $query = $this->db->get('mobil');
        return $query->result();
    }

    // Menambahkan data
    public function add_mobil($data) {
        $this->db->insert('mobil', $data);
    }

    // Mendapatkan data berdasarkan ID
    public function get_mobil_by_id($id) {
        $query = $this->db->get_where('mobil', array('id' => $id));
        return $query->row();
    }

    // Mengupdate data berdasarkan ID
    public function update_mobil($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('mobil', $data);
    }

    // Menghapus data berdasarkan ID
    public function delete_mobil($id) {
        $this->db->where('id', $id);
        $this->db->delete('mobil');
    }
}
