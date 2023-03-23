<?php 
$Data = [
  [
  'image' => '1.png',
  'nama' => 'al', 
  'nrp' => '1101' ,
  'jurusan' => 'Informatika' ,
  'email' => 'al@gmail.com',
  
  ],
  [
  'image' => '2.png',
  'nama' => 'Rizza', 
  'nrp' => '1102' ,
  'jurusan' => 'Informatika' ,
  'email' => 'Rizza@gmail.com',
  
  ],
  [
  'image' => '3.png',
  'nama' => 'ach', 
  'nrp' => '1103' ,
  'jurusan' => 'Informatika' ,
  'email' => 'ach@gmail.com',
  
  ],
  [
  'image' => '4.png',
  'nama' => 'Mad', 
  'nrp' => '1103' ,
  'jurusan' => 'Informatika' ,
  'email' => 'Mad@gmail.com',
  
  ],
  [
    'image' => '5.png',
    'nama' => 'Put', 
    'nrp' => '1104' ,
    'jurusan' => 'Informatika' ,
    'email' => 'Put@gmail.com',
    
 ],
 [
    'image' => '6.png',
    'nama' => 'Raa', 
    'nrp' => '1105' ,
    'jurusan' => 'Informatika' ,
    'email' => 'Raa@gmail.com',
        
],
[
    'image' => '7.png',
    'nama' => 'Tao', 
    'nrp' => '1106' ,
    'jurusan' => 'Informatika' ,
    'email' => 'Tao@gmail.com',
        
],
[
    'image' => '8.png',
    'nama' => 'Fan', 
    'nrp' => '1107' ,
    'jurusan' => 'Informatika' ,
    'email' => 'Fan@gmail.com',
        
],
[
    'image' => '9.png',
    'nama' => 'Nny', 
    'nrp' => '1108' ,
    'jurusan' => 'Informatika' ,
    'email' => 'Nny@gmail.com',
        
],
[
    'image' => '10.png',
    'nama' => 'Al Rizza', 
    'nrp' => '1109' ,
    'jurusan' => 'Informatika' ,
    'email' => 'alrizza@gmail.com',
        
],
  
  ];

?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>5A</title>
</head>
<body>
  <h2> Daftar Mahasiswa</h2>

  <?php foreach ($Data as $D) {?>
  <ul>
    <li> 
        <img src="images/<?=$D["image"]; ?>">
 </li>
    <li> Nama : <?=$D['nama']?> </li>
    <li> NRP : 123<?=$D['nrp']?> </li>
    <li> Jurusan : <?=$D['jurusan']?> </li>
    <li> Email : <?=$D['email']?> </li>
   
  </ul>
  
  <?php }?>

</body>
</html>