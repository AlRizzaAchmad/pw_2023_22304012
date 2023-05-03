<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<style>
    body {
         background-color : green 
         background-size: cover
    }




</style>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Sehatku</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <a class="btn btn-outline-success" href="login.php" type="submit">login</a>
      </form>
    </div>
  </div>
</nav>

<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://berita.99.co/wp-content/uploads/2022/04/rs-mayapada.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://ik.trn.asia/uploads/2020/04/Siloam.jpg?tr=w-995" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://cdn01.indozone.id/local/5d416f3402999.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>




<div>
<div class="my-5">
  <div class="p-5 text-center bg-body-tertiary">
    <div class="container py-5">
      <h1 class="text-body-emphasis">Sehatku</h1>
    
    </div>
  </div>
</div>
</div>

<div>
  <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">Inovasi Teknologi Kesehatan. <span class="text-body-secondary"></span></h2>
        <p class="lead">Di era digital, pemanfaatan teknologi berperan penting dalam menunjang kehidupan masyarakat Indonesia.
  Dari sisi kesehatan, inovasi teknologi bidang kesehatan dimanfaatkan untuk memperluas akses pelayanan kesehatan serta mempermudah masyarakat mendapatkan informasi kesehatan yang akurat dan terpercaya guna meningkatkan literasi kesehatan. Dalam hal ini, Kementerian Kesehatan Republik Indonesia merancang sebuah aplikasi konsultasi interaktif secara daring melalui SehatPedia yang dapat diakses oleh masyarakat luas.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="images/temansehat.png" width=500px; height=500px; alt="">
      </div>
    </div>
</div>
<div>
   <div class="album py-5 bg-body-tertiary">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <img src="images/bayi.png" width="100%" height="225"></img>
            <div class="card-body">
              <p class="card-text">Kesehatan Bayi</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="asset/bayi.php" type="button" class="btn btn-sm btn-outline-secondary">View</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="images/diabetes.png" width="100%" height="225"></img>
            <div class="card-body">
              <p class="card-text">Penyakit Diabetes</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="diabetes.php" type="button" class="btn btn-sm btn-outline-secondary">View</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="images/kanker.png" width="100%" height="225"></img>
            <div class="card-body">
              <p class="card-text">Penyakit Kanker</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="kanker.php" type="button" class="btn btn-sm btn-outline-secondary">View</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img src="images/kesehatanmulut.png" width="100%" height="225"></img>
            <div class="card-body">
              <p class="card-text">Kesehatan Mulut</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="kesehatanmulut.php" type="button" class="btn btn-sm btn-outline-secondary">View</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">  
          <img src="images/mata.png" width="100%" height="225"></img>
            <div class="card-body">
              <p class="card-text">Kesehatan Mata</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="mata.php" type="button" class="btn btn-sm btn-outline-secondary">View</a>


                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="images/olahraga.png" width="100%" height="225"></img>
            <div class="card-body">
              <p class="card-text">Olahraga</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="olahraga.php" type="button" class="btn btn-sm btn-outline-secondary">View</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      

</div>

<footer class="text-center text-lg-start text-black" style="background-color: #fffff; width: 100%;">
        <div class="container-fluid">
            <section class="">
                <div class="row">
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">
                            Sehatku
                        </h6>

                    </div>
                    <hr class="w-100 clearfix d-md-none" />
                    <hr class="w-100 clearfix d-md-none" />
                    <hr class="w-100 clearfix d-md-none" />
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                        <p><i class="fas fa-envelope mr-3"></i> LayanankesehatanIndonesia@gmail.com</p>
                        <p><i class="fas fa-phone mr-3"></i> +62 87426512526 , +62 857139455 , +62 826475111</p>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee" href="#!" role="button"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac" href="#!" role="button"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </section>
        </div>
        <div class="text-center p-3" style="background-color: white">
            © 2023 Layanan  
            <a class="text-black" href="#">Kesehatan</a>
        </div>
    </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
 
</body>
</html>