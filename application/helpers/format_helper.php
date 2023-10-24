<?php
function format_rp($a){
    if(!is_numeric($a))  return null;
    $n = number_format($a,0,'','.');
    $d = 'Rp '. $n .',-';
    return $d;                    
}