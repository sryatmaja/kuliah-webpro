<?php
class transaksi_model extends CI_Model{
    function simpan_barang(){
        $nama_barang = $this->input->post('barang');
        $qty = $this->input->post('qty');
        $id_barang = $this->db->get_where('barang', array('nama_barang'=>$nama_barang))->row_array();
        $data = array('barang_id'=>$id_barang['barang_id'],
                        'qty'=>$qty,
                        'harga'=>$id_barang['harga'],
                        'status'=>'0');
        $this->db->insert('transaksi_detail', $data);
    }
    function tampilkan_detail_transaksi(){
        $query = "SELECT td.t_detail_id, td.qty, td.harga, b.nama_barang from transaksi_detail as td, barang as b where b.barang_id = td.barang_id";
        return $this->db->query($query);
    }
    function hapusitem($id){
        $this->db->where('t_detail_id', $id);
        $this->db->delete('transaksi_detail');
    }
    function selesai_belanja($data){
        $this->db->insert('transaksi', $data);
        $last_id = $this->db->query("SELECT transaksi_id from transaksi order by transaksi_id desc")->row_array();
        $this->db->query("UPDATE transaksi_detail set transaksi_id='".$last_id['transaksi_id']."'where status = '0'");
        $this->db->query("UPDATE transaksi_detail set status='1' where status = '0'");
    }
}