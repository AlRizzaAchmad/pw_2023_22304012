<?php require('partials/header.php'); ?>

<body>
  <section class="vh-100" style="background-color: #2779e2;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-9">

          <h1 class="text-white mb-4"></h1>

          <div class="card" style="border-radius: 15px;">
            <div class="card-body">

              <div class="row align-items-center pt-4 pb-3">
                <div class="col-md-3 ps-5">

                  <form action="" method="post">
                    <h6 class="mb-0">email/username</h6>

                </div>
                <div class="col-md-9 pe-5">

                  <input type="text" class="form-control form-control-lg" name="username" id="username" placeholder="example@example.com" />

                </div>
              </div>

              <hr class="mx-n3">

              <div class="row align-items-center py-3">
                <div class="col-md-3 ps-5">

                  <h6 class="mb-0">password</h6>

                </div>
                <div class="col-md-9 pe-5">

                  <input type="password" name="password" id="password" class="form-control form-control-lg" />

                </div>
              </div>

              <hr class="mx-n3">

              <div class="row align-items-center py-3">
                <div class="col-md-3 ps-5">

                  <h6 class="mb-0">konfirmasi password</h6>

                </div>
                <div class="col-md-9 pe-5">

                  <input type="password" name="konfirmasi" id="password" class="form-control form-control-lg" />

                </div>
              </div>

              <hr class="mx-n3">

              <hr class="mx-n3">

              <div class="px-5 py-4">
                <a href="login.php"><button type="submit" name="register" class="btn btn-primary btn-lg">Lanjutkan</button></a>
                </form>

              </div>

            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
</body>

</html>
<?php require('partials/footer.php'); ?>