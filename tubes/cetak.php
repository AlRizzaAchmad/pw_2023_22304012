<?php

require_once __DIR__ .'/vendor/autoload.php';

require ("functions.php");
$layanan = query("SELECT * FROM daftar_layanan") ;

$mpdf = new \Mpdf\Mpdf();

$html='<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>data layanan</title>
</head>
<body>
    <h1>Daftar Layanan</h1>

    <table class="table" border="1" cellpadding="10" cellspacing="0">
            <tr>
              <th>#</th>
              <th>Gambar</th>
              <th>Nama</th>
              <th>Spesialis</th>
              <th>Nomor Telepon</th>
              <th>email</th>
            </tr>';

            $i = 1;
            foreach( $layanan as $lyn){
                $html .= '<tr>
            <td>'. $i++ .'</td>
            <td><img src="images/'. $lyn["gambar"] .'" width="100"></td>
            <td>'. $lyn["nama"] .'</td>
            <td>'. $lyn["spesialis"] .'</td>
            <td>'. $lyn["nomor_telepon"] .'</td>
            <td>'. $lyn["email"] .'</td>
          </tr>';

            }

$html .= '</table>
</body>
</html>';
$mpdf->WriteHTML($html);
$mpdf->Output('Daftar-Layanan', 'I');