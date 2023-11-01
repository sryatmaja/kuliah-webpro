<?php
class tes_akhir2_model extends CI_Model {
    public function hitungTotalBayar($totalBelanja, $isMember) {
        $ppn = 0.10; // PPN 10%
        if ($isMember) {
            $discount = 0.15; // 15% untuk member
        } else {
            $discount = 0; // 0 untuk non-member
        }
        
        $totalBayar = $totalBelanja + ($totalBelanja * $ppn) - ($discount * $totalBelanja);
        return $totalBayar;
    }
}
