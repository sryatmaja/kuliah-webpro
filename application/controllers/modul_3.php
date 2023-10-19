<?php
Class modul_3 extends CI_Controller{

    public function index(){
        echo "file ini berisi controller untuk modul 3 bagian pengamatan";
    }

    public function pengamatan2_1(){
        Echo'<h2>Hello Word</h2> <br> kode ini hanya menggunakan<br>file controller saja';
    }
    
    public function pengamatan2_2(){
        //memuat model 'hello_model'
        $this->load->model('pengamatan2_2_model');
        //menangkap objek dari kelas hello_model
        //yang telah dimuat ke variabel $model
        $model = $this->pengamatan2_2_model;
        echo"<html>";
        echo"<head><title>Controller dan Model</title></head>";
        echo"<body>";
        //memanggil properti $str milik objek $model
        echo"<h2>" . $model->str . "</h2>";
        echo"</body>";
        echo"</html>";
    }

    public function pengamatan2_3(){
        //memuat view pengamatan2_3_view.php
        $this->load->view('pengamatan2_3_view');
    }

    public function pengamatan2_4(){
        //memuat model 'pengamatan2_4_model'
        $this->load->model('pengamatan2_4_model');
        //menangkap objek dari kelas pengamatan2_4_model
        //yang telah dimuat ke variabel $model
        $model = $this->pengamatan2_4_model;
        //mengambil data dari model
        $s =$model->stx;
        //membuat data yang akan dikirim ke view
        //dalam bentuk array
        $data['teks'] = $s;
        //memuat view 'pengamatan2_4_view'
        //dengan mengirimkan data ke view bersangkutan
        $this->load->view('pengamatan2_4_view', $data);
    }
    // menggunakan controller
    public function hitung_luas_lingkaran_1(){
        $luas = 4;
        $jari = 20;

        $luas_linkaran = $luas * $jari * (22/7);
        
        echo "Luas lingkaran : ", $luas_linkaran; 
    }

    // menggunakan controller dan model
    public function hitung_luas_lingkaran_2(){
        $this->load->model('hitung_luas_lingkaran_2_model');
        $model = $this->hitung_luas_lingkaran_2_model;
        $jari_jari = $model->jari_jari;
        $luas=$model->luas();

        echo "jari-jari = $jari_jari<br>";
        echo "Luas = $luas";
    }

    // menggunakan controller dan view
    public function hitung_luas_lingkaran_3() {
        $this->jari_jari = 20;
        $this->luas = (22/7) * $this->jari_jari * $this->jari_jari;
        $data = array(
            'jari_jari' => $this->jari_jari,
            'luas' => $this->luas
        );
        $this->load->view('hitung_luas_lingkaran_3_view', $data);
    }

    // menggunakan model, controller dan view
    public function hitung_luas_lingkaran_4() {
        $this->load->model('hitung_luas_lingkaran_4_model');
        $model = $this->hitung_luas_lingkaran_4_model;
        $this->load->view('hitung_luas_lingkaran_4_view', array('model' => $model));
    }


    
}
?>