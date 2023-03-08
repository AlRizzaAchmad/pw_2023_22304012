<?php
$r = 10 ;
$pi = 3.14;
echo "<h4>Menghitung Luas Lingkaran</h4>";
function hitungLuasLingkaran($pi,$r)
{
    $luas = $pi* $r * $r;
    return $luas .  "cm" . "<sup>" . 2 . "</sup>";
   
}
echo "Jari-jari = 10 cm. </br>";
echo "Luas Lingkaran = " . hitungLuasLingkaran($pi,$r) . "<hr>";
echo "<h4>Menghitung Keliling Lingkaran</h4>";
function hitungKelilingLingkaran($pi,$r)
{
    $r = 20 ;
    $keliling = 2* $pi * $r;
    return $keliling . " cm";
}
echo "Jari-jari = 20cm. </br> </br>";
echo "Keliling lingkaran = " . hitungKelilingLingkaran($pi,2*$r) . "<hr>";
?>