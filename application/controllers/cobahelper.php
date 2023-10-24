<?php
class cobahelper extends CI_Controller {
    public function __construct() {
        parent::__construct(); // panggil konstruktor kelas induk (untuk apa? saya juga kurang paham).
        // $this->load->helper('array'); // panggil helper array untuk pengelolaan array // dibikin komen karena udah ada di autoload
        // $this->load->model('bayar_model'); // ambil model 'bayar_model' yang akan digunakan.
    }
    public function index(){
        $data = ['dika', 'fais', 'adit', 'maja', 'razan', 
        'arrasyid', 'aqilah', 'bakti', 'alihkam', 'perkasa', 'atmaja'];

        $this->load->view('cobahelper_view',['pemenang' => $data]); // tampilkan 'bayar_total_view' dengan data total bayar.
    }

    public function math(){ // Associative Arrays
        $data = [
            'a' => 22,
            'b' => 64,
            'c' => 1000000
        ];

        $this->load->view('aritmatika_helper_view',$data);
    }
}