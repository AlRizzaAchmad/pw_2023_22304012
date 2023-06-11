<?php

require '../functions.php'; 
$layanan = cari($_GET['keyword']);

?>

<table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Gambar</th>
              <th scope="col">Nama</th>
              <th scope="col">Spesialis</th>
              <th scope="col">Nomor Telepon</th>
              <th scope="col">email</th>
              <th scope="col">Aksi</th>
            </tr>

            <?php if (empty($layanan)) : ?>
              <tr>
                <td colspan="4">
                  <P>Data tidak ditemukan</P>
                </td>

              </tr>
            <?php endif ?>


          </thead>
          <tbody>
            <?php $i = 1; ?>
            <?php foreach ($layanan as $lyn) : ?>
              <tr>
                <th scope="row"><?= $i++; ?></th>
                <td>
                  <img src="images/<?= $lyn['gambar']; ?>" width="100">
                </td>
                <td><?= $lyn['nama']; ?></td>
                <td><?= $lyn['spesialis']; ?></td>
                <td><?= $lyn['nomor_telepon']; ?></td>
                <td><?= $lyn['email']; ?></td>
                <td>
                  <a href="ubah.php?id=<?= $lyn['id']; ?>">Edit</a>
                  <a href="hapus.php?id=<?= $lyn['id']; ?>" onclick="return confirm ('Apakah anda yakin ingin menghapus data ini ? ');" class="badge text-bg-danger">hapus</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
          </table>