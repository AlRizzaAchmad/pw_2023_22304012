
<?php 
require ('functions.php');
$title = 'Admin';

$layanan = query("SELECT * FROM daftar_layanan") ;

if (isset($_POST['cari'])){
    $layanan = cari($_POST['keyword']);
}



require('views/admin.view.php');

?>
