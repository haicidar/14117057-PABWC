<?php
$n = 37;
for ($angka = 1; $angka <= $n; $angka++) {
    $prima = true;
    for ($i = 2; $i < $angka; $i++) {
        if ($angka % $i == 0)
            $prima = false;
    }if ($prima)
        echo "$angka ";
}