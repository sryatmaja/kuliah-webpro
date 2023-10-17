<?php
class bayar_model extends CI_Model {
    public function calculateTotal($total_belanja, $isMember) {
        $ppn = $total_belanja * 0.10;
        $discount = $isMember ? $total_belanja * 0.15 : 0;
        $total_bayar = $total_belanja + $ppn - $discount;
        return $total_bayar;
    }
}
?>