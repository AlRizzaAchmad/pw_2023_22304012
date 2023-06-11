<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>

<div class="container mt-3">
  <h1>Tambah Daftar Layanan</h1>

  <div class="row">
    <div class="col-md-8">
      <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3 w-25">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" name="nama" id="nama" require maxlength="9" autofocus required>
        </div>
        <div class="mb-3">
          <label for="spesialis" class="form-label">Spesialis</label>
          <input type="text" class="form-control" name="spesialis" id="spesialis">
        </div>
        <div class="mb-3">
          <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
          <input type="text" class="form-control" name="nomor_telepon" id="nomor_telepon">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="text" class="form-control" name="email" id="email">
        </div>
        <div class="mb-3">
  <label for="gambar" class="form-label">Gambar</label>
  <input type="file" class="form-control" name="gambar" id="gambar" onchange="previewImage()">
  <img src="images/no.png" id="preview" width="200" style="display: block;" class="images-previe-w">
</div>
<button class="btn btn-primary" type="submit" name="tambah">Tambah Data</button>
</form>
</div>
</div>

</div>
<script>
  function previewImage() {
    var reader = new FileReader();
    reader.onload = function() {
        var preview = document.getElementById('preview');
        preview.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
}
</script>
<?php require('partials/footer.php'); ?>