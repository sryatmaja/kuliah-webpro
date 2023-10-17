<?php
class halo extends CI_Controller{
    public function index(){
        echo "<h1>selamat datang ini index</h1>";
    }
    public function darimodel(){
        $this->load->model('halo_model');
        $tampil = $this->halo_model;
        $tampil->halo();
    }
    public function dariview(){
        $this->load->view('halo_view');
    }
}