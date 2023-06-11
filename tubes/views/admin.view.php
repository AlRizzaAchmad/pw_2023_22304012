<?php require('partials/header.php'); ?>


<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Sehatku</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./layanan.php">Layanan</a>
        </li>
      </ul>
      <div class="navbar-nav my-2">
        <a class="nav-item btn btn-primary ms-3" href="./logout.php">Sign Out</a>
      </div>
    </div>
  </div>
</nav>
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-lg-8 col-md-10 col-sm-12 card-container">
      <div class="card text-center">
        <div class="card-header">
          <h4>Data perawat</h4>
          <a href="tambah.php" class="btn btn-primary">Tambah Data perawat</a>
          <a href="cetak.php" class="btn btn-primary" target="_blank">Cetak</a>
          <br>
          <br>
          <form action="" method="POST">
            <input type="text" name="keyword" size="50" placeholder="cari" autocomplete="off" class="keyword" autofocus>
            <button type="submit" name="cari">cari</button>
          </form>
          </br>
        </div>
        <div class="container">
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
        </div>

      </div>
    </div>
  </div>
</div>
<script src="js/script.js"></script>
</body>
<?php require('partials/footer.php'); ?>