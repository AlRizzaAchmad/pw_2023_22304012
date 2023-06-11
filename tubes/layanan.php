<?php
$title = 'layanan';
require('functions.php');
$layanan = query("SELECT * FROM daftar_layanan");
require('views/layanan.view.php');
