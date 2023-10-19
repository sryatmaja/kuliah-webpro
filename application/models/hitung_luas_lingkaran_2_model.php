<?php
class hitung_luas_lingkaran_2_model extends CI_Model {
    public $jari_jari = 20;

    public function luas() {
        $luas = (22/7) * $this->jari_jari * $this->jari_jari;
        return $luas;
    }
}
?>