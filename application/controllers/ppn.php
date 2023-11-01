<?php
class ppn extends CI_Controller {
    public function __construct() { //https://app.sko.dev/post/penjelaskan-tentang-parent-construct-pada-oop-di-php
        parent::__construct();
        $this->load->helper('url'); // mmuat helper url (https://stackoverflow.com/questions/11581636/fatal-error-call-to-undefined-function-base-url-in-c-wamp-www-test-ci-applic)
        $this->load->model('tes_akhir1_model');
    }

    public function index() {
        // Memuat tampilan input_form
        $this->load->view('ppn_input');
    }

    public function hitung() {
        // mngambil total_pembelian dari POST data
        $total_pembelian = $this->input->post('total_pembelian');

        // mmeriska apakah total_pembelian adalah angka
        if (!is_numeric($total_pembelian)) {
            echo "Masukkan total pembelian yang valid.";
            return;
        }

        // hitunh ppn dan memuat tampilan ppn_output dengan hasil perhitungan
        $result = $this->tes_akhir1_model->hitungPpn($total_pembelian);
        $this->load->view('ppn_output', $result);
    }
}
?>
