<?php
require('functions.php');
$title = 'Form ubah  data';




$id = $_GET['id'];

$layanan = query("SELECT * FROM daftar_layanan WHERE id=$id")[0];

if(isset($_POST['ubah'])){

    if(ubah($_POST)>0){
        echo "<Script>
                alert('Daftar Layanan berhasil di update');
                document.location.href = 'admin.php'
                </script>";
    }else{
        echo "
            <script>
                alert('Update gagal')
                document.location.href = 'admin.php'
            </script>
            ";
    }

}

require('views/ubah.view.php');