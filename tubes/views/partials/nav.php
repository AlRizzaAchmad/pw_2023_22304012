<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index>php">Sehatku</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="layanan.php">Layanan</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            akun
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="login.php">login</a></li>
            <li><a class="dropdown-item" href="register.php">register</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search" method="POST">
        <input class="keyword form-control me-2" type="text" placeholder="Search" aria-label="Search" name="keyword" id="keyword" autocomplete="off">
        <button class="cari btn btn-outline-success" type="submit" name="cari" id="cari">Search</button>
      </form>
    </div>
  </div>
</nav>

<?php
if(isset($_POST['cari'])){
  $layanan = cari($_POST['keyword']);
}

?>