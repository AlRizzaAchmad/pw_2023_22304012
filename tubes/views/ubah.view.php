<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>

<div class="container mt-3">
  <h1>Update Daftar Layanan</h1>

  <div class="row">
    <div class="col-md-8">
      <form action="" method="post">
        <input type="hidden" name='id' value="<?= $layanan['id'];?>" >
        <div class="mb-3 w-25">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" name="nama" id="nama" require maxlength="9" autofocus required value="<?= $layanan['nama'];?>" >
        </div>
        <div class="mb-3">
          <label for="spesialis" class="form-label">Spesialis</label>
          <input type="text" class="form-control" name="spesialis" id="spesialis" value="<?= $layanan['spesialis'];?>">
        </div>
        <div class="mb-3">
          <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
          <input type="text" class="form-control" name="nomor_telepon" id="nomor_telepon" value="<?= $layanan['nomor_telepon'];?>">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="text" class="form-control" name="email" id="email" value="<?= $layanan['email'];?>">
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="file" name="gambar" class="form-control" id="gambar" onchange="previewImage(event);">
            <h5 class="my-3" id="gambar-text">Gambar Saat Ini</h5>
            <img src="images/<?= $layanan['gambar'] ?>" alt="" id="preview" width="100">
        </div>
        <button class="btn btn-primary" type="submit" name="ubah">Ubah Data</button>
      </form>
    </div>
  </div>

</div>
<script>
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var preview = document.getElementById('preview');
            preview.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>

<?php require('partials/footer.php'); ?>