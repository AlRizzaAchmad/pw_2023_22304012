<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>
<?php if (empty($layanan)) : ?>
              <tr>
                <td colspan="4">
                  <P style="font-size: 30px ">Data tidak ditemukan </P>
                </td>

              </tr>
            <?php endif ?>
 
<div class="row" id="search-container">
    <?php foreach ($layanan as $item) : ?>
        <div class="col-md-6">
            <div class="card mb-3 mx-3 my-3" style="max-width: 900px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/<?= $item['gambar'] ?>" class="img-fluid rounded-start" style="object-fit:cover; width:540px; height:300px;" alt="...">
                        </a>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">
                                <h3 class="card-link text-decoration-none text-reset"><?= $item['nama'] ?></h3>
                            </h5>
                            <p class="card-text"><?= $item['spesialis']; ?></p>
                            <p class="card-text"><?= $item['nomor_telepon']; ?></p>
                            <p class="card-text"><?= $item['email']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php require('partials/footer.php'); ?>