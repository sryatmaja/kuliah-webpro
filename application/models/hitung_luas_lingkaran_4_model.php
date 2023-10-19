<?php
class hitung_luas_lingkaran_4_model extends CI_Model {
    public $jari_jari = 20;

    public function luas() {
        $pi = 3.14;
        // hitung Luas Permukaan Tabung
        $luas= $pi * $this->jari_jari * $this->jari_jari;
        return $luas;
    }
}
?>
