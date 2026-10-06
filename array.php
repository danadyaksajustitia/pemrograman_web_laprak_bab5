<?php

function cari($array, $cari): bool {
    foreach ($array as $nilai) {
        if ($nilai == $cari) {
            return true;
        }
    }

    return false;
}

$angka = [10, 20, 30, 40, 50];

var_dump(cari($angka, 30));
var_dump(cari($angka, 60));

?>