<?php

function urutanAngka($angka)
{
    $nilai = 1;
    for ($i = 1; $i <= $angka; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $nilai ;
            $nilai++;
        }
        echo "<br>";
    }
}

urutanAngka(5);
?>