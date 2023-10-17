<?php
class bangun_datar extends CI_Controller {
    public function index() {
        $this->load->model('bangun_datar_model');
        $model=$this->bangun_datar_model;

        // $model->LuasPersegi = 2000;
        // $model->PanjangPersegi = 10;

        $this->load->view('bangun_datar_view', array('model'=>$model)); 
    }
    
    // public function custompersegi() {
    //     $this->load->model('Tabung_model'); // memanggil model Tabung_model

    //     // membuat variable $model dapat mengakses isi dari Tabung_model dengan menganggap var $model adalah Tabung_model
    //     $model=$this->Tabung_model;

    //     // mengubah atau menimpa nilai var yang ada pada model dengan nilai yang baru
    //     $model->jari2 = 10;
    //     $model->tinggi = 100;

    //     // smua nilai dari variable dan function tersimpan sebagai array 
    //     $this->load->view('Tabung_view', array('model'=>$model)); 
    // }
}
?>
