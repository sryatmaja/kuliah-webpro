<?php
class tugas141123 extends CI_Controller{
    function __construct(){
        parent::__construct();
        // $this->load->model(array('tugas141123/barang_model', 'tugas141123/transaksi_model'));
    }
    function index(){
        if(isset($_POST['submit'])){
            $this->transaksi_model->simpan_barang();
            redirect('tugas141123');
        }else{
            $data['barang'] = $this->barang_model->tampil_data();
            $data['detail'] = $this->transaksi_model->tampilkan_detail_transaksi()->result();
            $this->load->view('tugas141123/form_transaksi', $data);
        }
    }
    function hapus_item(){
        $id = $this->uri->segment(3);
        $this->transaksi_model->hapusitem($id);
        redirect('tugas141123');
    }
    function selesai_belanja(){
        $tanggal = date('y-m-d');
        $data = array('operator_id'=>'3', 'tanggal_transaksi'=>$tanggal);
        $this->transaksi_model->selesai_belanja($data);
        redirect('tugas141123');
    }
}