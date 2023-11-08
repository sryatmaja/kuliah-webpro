<?php

function is_ganjil($angka)
{
    return $angka % 2 == 1 ? true : false;
}

function is_genap($angka)
{
    return $angka % 2 == 0 ? true : false;
}

function is_prima($angka)
{
    if ($angka <= 1) return false;
    if ($angka <= 3) return true;
    if ($angka % 2 == 0 || $angka % 3 == 0) return false;
    for ($i = 5; $i * $i <= $angka; $i += 6) {
        if ($angka % $i == 0 || $angka % ($i + 2) == 0) return false;
    }
    return true;
}

function is_kelipatan_dua($angka)
{
    return $angka % 2 == 0 ? true : false;
}
