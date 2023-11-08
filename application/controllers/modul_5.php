<?php
class modul_5 extends CI_Controller {
    public function __construct() { //https://app.sko.dev/post/penjelaskan-tentang-parent-construct-pada-oop-di-php
        parent::__construct();
        $this->load->helper('url'); // mmuat helper url (https://stackoverflow.com/questions/11581636/fatal-error-call-to-undefined-function-base-url-in-c-wamp-www-test-ci-applic)
        // $this->load->model('tes_akhir1_model');
        // $this->load->model('Bayar_model');
        //memuat file helper 'array_helper.php'
        // $this->load->helper('array');
        //memuat file helper 'matematika_helper.php'
        // $this->load->helper('modul_5/pengamatan2_helper');

        }

    public function index() {
        $this->load->view('modul_5/index');
    }

    public function pengamatan1() {
        $data = ['pyton', 'Perl', 'PHP', 'Ruby'];
        //mengirim $data ke view
        $this->load->view('modul_5/pengamatan1_view', ['data'=>$data]);
    }
    
    public function pengamatan2() {
        $data = [
        'a'=> 10,
        'b'=> 3,
        'c'=> 25,
        ];
        //mengirim $data ke view
        $this->load->view('modul_5/pengamatan2_view', $data);
    }

    public function tes_akhir1() {
        $this->load->view('modul_5/tes_akhir1_input_view');
    }
    
    // https://linuxhint.com/php-one-line-if-statement/
    public function tes_akhir1_hitung() {
        $angka = $this->input->post('angka');
        $data['angka'] = $angka;
        // (Condition) ? trueStatement : falseStatement
        $data['ganjil'] = is_ganjil($angka) ? 'Ganjil' : 'Bukan Ganjil';
        $data['genap'] = is_genap($angka) ? 'Genap' : 'Bukan Genap';
        $data['prima'] = is_prima($angka) ? 'Prima' : 'Bukan Prima';
        $data['kelipatan_dua'] = is_kelipatan_dua($angka, 2) ? 'Kelipatan 2' : 'Bukan Kelipatan 2';
    
        $this->load->view('modul_5/tes_akhir1_output_view', $data);
    }
    public function tes_akhir2()
    {
        $total_belanja = 1000;
        $discount = 10; // 10% discount

        $ppn = hitung_ppn($total_belanja, $discount);
        $total_setelah_discount = hitung_total_setelah_discount($total_belanja, $discount);
        $total_setelah_pajak = hitung_total_setelah_pajak($total_belanja, $discount);

        $data['total_belanja'] = $total_belanja;
        $data['ppn'] = $ppn;        
        $data['discount'] = $total_belanja * $discount / 100;
        $data['total_setelah_discount'] = $total_setelah_discount;
        $data['total_setelah_pajak'] = $total_setelah_pajak;

        $this->load->view('modul_5/tes_akhir2_view', $data);
    }

}
