<?php

function koneksi()
{
  $conn = mysqli_connect('localhost', 'root', '', 'pw2023_223040123') or die('KONEKSI GAGAL!');
  return $conn;
}

$conn = koneksi();

function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function upload()
{
  $nama_file = $_FILES['gambar']['name'];
  $tipe_file = $_FILES['gambar']['type'];
  $ukuran_file = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmp_file = $_FILES['gambar']['tmp_name'];

  // ketika gambar gak ada yang dipilih
  if ($error === 4) {
    echo "<script>
    alert ('pilih gambar dahulu');
    </script>";
    return false;
  }
  // mengecek eksitensi gambar
  $daftar_gambar = ['jpg', 'jpeg', 'png'];
  $ekstensi_file = explode('.', $nama_file);
  $ekstensi_file = strtolower(end($ekstensi_file));
  if (!in_array($ekstensi_file, $daftar_gambar)) {

    echo "<script>
    alert ('tolong pilih gambar dahulu');
    </script>";
    return false;
  }

  // type file 
  if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
    echo "<script>
    alert ('tolong pilih gambar dahulu');
    </script>";
    return false;
  }
  // mencoba cek ukuran file maks 5mb
  if ($ukuran_file > 5000000) {
    echo "<script> 
            alert('ukuran terlalu besar !');
            </script>";
    return false;
  }
  //lolos file
  $nama_file_baru = uniqid();
  $nama_file_baru .= '.';
  $nama_file_baru .= $ekstensi_file;
  move_uploaded_file($tmp_file, 'images/' . $nama_file_baru);
  return $nama_file_baru;
}

function tambah($data)
{
  $conn = koneksi();

  $nama = htmlspecialchars($data['nama']);
  $spesialis = htmlspecialchars($data['spesialis']);
  $nomor_telepon = htmlspecialchars($data['nomor_telepon']);
  $email = htmlspecialchars($data['email']);

  // akan mengambil function upload lewat fungsion upload

  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $query = " INSERT INTO  
                daftar_layanan
                VALUES
                (null,'$nama','$gambar','$spesialis','$nomor_telepon','$email')";

  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}


function hapus($id)
{
  $conn = koneksi();
  


  mysqli_query($conn, "DELETE FROM daftar_layanan WHERE id=$id");
  return mysqli_affected_rows($conn);
}


function ubah($data)
{
  $conn = koneksi();
  $id = $data['id'];
  $nama = htmlspecialchars($data['nama']);
  $spesialis = htmlspecialchars($data['spesialis']);
  $nomor_telepon = htmlspecialchars($data['nomor_telepon']);
  $email = htmlspecialchars($data['email']);
  $gambar = htmlspecialchars($data['gambar']);
  

  $query = "UPDATE daftar_layanan SET
              nama = '$nama', 
              spesialis = '$spesialis',
              nomor_telepon = '$nomor_telepon',
              email = '$email',
              gambar = '$gambar'
              WHERE id = $id ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM daftar_layanan
            WHERE 
            nama LIKE '%$keyword%' OR
            spesialis LIKE '%$keyword%' OR
            nomor_telepon LIKE '%$keyword%' OR
            email LIKE '%$keyword%' OR
            gambar LIKE '%$keyword%' 
            ";
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function signup($data)
{
  global $conn;

  $username = strtolower(stripslashes($data['username']));
  $password = mysqli_real_escape_string($conn, $data['password']);
  $password2 = mysqli_real_escape_string($conn, $data['konfirmasi']);

  //cek jika password tidak sama dengan konfirmasi password maka akan muncul alert
  if ($password !== $password2) {
    echo "
    <script>
      alert('Password tidak sama');
    </script>
  ";
    return false;
  }

  $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
  if (mysqli_fetch_assoc($result)) {
    echo "
    <script>
      alert('username sudah ada');
    </script>
  ";
    return false;
  }

  //enkripsi password
  $password = password_hash($password, PASSWORD_DEFAULT);
  mysqli_query($conn, "INSERT INTO users VALUES (null, '$username', '$password')");
  return mysqli_affected_rows($conn);
}
