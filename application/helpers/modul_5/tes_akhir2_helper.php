<?php

function hitung_ppn($total, $discount) {
    $ppn = ($total - ($total * $discount / 100)) * 0.1;
    return $ppn;
}


function hitung_total_setelah_discount($total, $discount) {
    return $total - ($total * $discount / 100);
}

function hitung_total_setelah_pajak($total, $discount) {
    $total_setelah_discount = hitung_total_setelah_discount($total, $discount);
    $ppn = hitung_ppn($total, $discount);
    return $total_setelah_discount + $ppn;
}
