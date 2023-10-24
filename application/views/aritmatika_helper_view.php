<?php
echo "$a + $b = ".tambah($a,$b)."<br/>";
echo "$a - $b = ".kurang($a,$b)."<br/>";
echo "$a * $b = ".kali($a,$b)."<br/>";
echo "$a / $b = ".bagi($a,$b)."<br/>";
echo "test format rupiah ".format_rp($c)."<br/>";
echo "test format rupia kali ".format_rp(kali($a, $c))."<br/>";

?>