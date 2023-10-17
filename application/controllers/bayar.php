<?php
class Bayar extends CI_Controller {
    public function __construct() {
        parent::__construct(); // panggil konstruktor kelas induk (untuk apa? saya juga kurang paham).
        $this->load->helper('url'); // panggil helper URL untuk pengelolaan URL.
        $this->load->model('bayar_model'); // ambil model 'bayar_model' yang akan digunakan.
    }

    public function index() {
        $this->load->view('bayar_view'); // tampilkan 'bayar_view'.
    }
    
    public function hitung_total_bayar() {
        $total_belanja = $this->input->post('total_belanja'); // ambil nilai dari input 'total_belanja' pada 'bayar_view'.
        $status_member = $this->input->post('status_member'); // ambil nilai dari input 'status_member' pada 'bayar_view'.
        
        $ppn = 0.1; // ppn 10%
        $discount_member = 0.15; // diskon 15% untuk member.
        
        $total_bayar = $total_belanja + ($total_belanja * $ppn); // hitung total bayar dengan ppn.
        
        if ($status_member == 'member') {
            $total_bayar -= ($discount_member * $total_bayar); // pkai diskon if user == member.
        }

        $data['total_bayar'] = $total_bayar; // simpan data total bayar untuk ditampilkan di view.
        $this->load->view('bayar_total_view', $data); // tampilkan 'bayar_total_view' dengan data total bayar.
    }
}
?>
