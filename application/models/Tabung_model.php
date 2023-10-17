<?php
class Tabung_model extends CI_Model {
    public $jari2 = 5;
    public $tinggi = 8;

    public function hitungLuas() {
        return $vol = 2 * 3.14 * $this->jari2 * ($this->jari2 + $this->tinggi);
    }

    public function hitungVolume() {
        return $l = 3.14 * pow($this->jari2, 2) * $this->tinggi;
    }
}
?>
