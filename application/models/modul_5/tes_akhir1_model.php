<?php
class tes_akhir1_model extends CI_Model {
    public function hitungPpn($total_pembelian) {
        // hitung besarnya PPN (10% dari total_pembelian)
        $besar_ppn = $total_pembelian * 0.1;
        // hitung total_pembelian setelah ditambahkan PPN
        $total_pembelian_setelah_ppn = $total_pembelian + $besar_ppn;
        
        // reutrn hasil perhitungan dlam bentuk array asosiatif biar gaperlu simpen array di controller
        return array(
            'total_pembelian_sebelum_ppn' => $total_pembelian,
            'besar_ppn' => $besar_ppn,
            'total_pembelian_setelah_ppn' => $total_pembelian_setelah_ppn
        );
    }
}
?>
