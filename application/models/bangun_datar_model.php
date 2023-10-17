<?php
class bangun_datar_model extends CI_Model{
    public $LebarPersegi = 20;
    public $PanjangPersegi = 3;

    public function HitungLuasPersegi(){
        return $luas = $this->PanjangPersegi * $this->LebarPersegi;
    }

    public function HitungKelilingPersegi(){
        return $keliling = (2 * $this->PanjangPersegi) + (2 * $this->LebarPersegi);
    }
}
?>
