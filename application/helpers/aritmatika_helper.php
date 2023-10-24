<?php
// fungsi ini untuk menghitung penjumlahan bilangan
function tambah($a, $b) {
    if(!is_numeric($a) OR !is_numeric($b)) return null;
    return $a + $b;
}
function kurang($a, $b) {
    if(!is_numeric($a) OR !is_numeric($b)) return null;
    return $a - $b;
}
function kali($a, $b) {
    if(!is_numeric($a) OR !is_numeric($b)) return null;
    return $a * $b;
}
function bagi($a, $b) {
    if(!is_numeric($a) OR !is_numeric($b)) return null;
    return $a / $b;
}