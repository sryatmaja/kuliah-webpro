<?php
class modul_4 extends CI_Controller {
    public function __construct() { //https://app.sko.dev/post/penjelaskan-tentang-parent-construct-pada-oop-di-php
        parent::__construct();
        $this->load->helper('url'); // mmuat helper url (https://stackoverflow.com/questions/11581636/fatal-error-call-to-undefined-function-base-url-in-c-wamp-www-test-ci-applic)
        // $this->load->model('tes_akhir1_model');
        // $this->load->model('Bayar_model');

    }

    public function index() {
        $this->load->view('modul_4/index');
    }

    public function pengamatan() {
        if (isset($_POST['btnsubmit'])){
            //memuat model Lingkaran Model
            $this->load->model('modul_4/pengamatan_model');
            //menangkap model yang telah dimuat oleh controller
            $model = $this->pengamatan_model;
            //mengambil nilai dari form input
            $radius = $_POST['jari2'];
            //menentukan nilai $radius
            $model->set_radius($radius);
            //memuat view dan mengirimkan $model ke view
            $this->load->view('modul_4/lingkaran_hasil_view', array('model'=>$model));
            }else{
            //menampilkan form
            $this->load->view('modul_4/lingkaran_form_view');
            }
    }

    public function tes_akhir1() {
        // Memuat tampilan input_form
        $this->load->view('modul_4/tes_akhir1_input');
    }

    public function tes_akhir1_hitung() {
        // mngambil total_pembelian dari POST data
        $total_pembelian = $this->input->post('total_pembelian');

        // mmeriska apakah total_pembelian adalah angka
        if (!is_numeric($total_pembelian)) {
            echo "Masukkan total pembelian yang valid.";
            return;
        }

        // hitunh ppn dan memuat tampilan ppn_output dengan hasil perhitungan
        $result = $this->tes_akhir1_model->hitungPpn($total_pembelian);
        $this->load->view('modul_4/tes_akhir1_output', $result);
    }

    public function tes_akhir2() {
        // Memuat tampilan input_form
        $this->load->view('modul_4/tes_akhir2_input');
    }

    public function tes_akhir2_hitung() {
        $totalBelanja = $this->input->post('totalBelanja');
        $isMember = $this->input->post('isMember');
        
        $totalBayar = $this->tes_akhir2_model->hitungTotalBayar($totalBelanja, $isMember);
        
        $data['totalBayar'] = $totalBayar;
        $this->load->view('modul_4/tes_akhir2_output', $data);
    }
} 
?>