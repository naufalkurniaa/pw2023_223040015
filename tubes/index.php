<?php 
require 'functions.php';
$berita = query("SELECT * FROM dashboard_admin");



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MenitNews</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
      .card-title:hover {
         color: green;
       }

       .nav-link:hover {
         color: green;
       }

       .footer-link:hover {
        color: green !important;
      }

    </style>
</head>
<body class="bg-body-secondary">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">MenitNews</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="berita.php">Berita</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="health.php">Health</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="food.php">Food</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item me-2">
          <a class="nav-link bg-success rounded-3 px-3 mb-2 mb-lg-0" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link bg-success rounded-3 px-3 mb-lg-0" href="daftar.php">Daftar</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row">
      <div class="col-md-7">
        <div class="card mb-3">
          <a href="headline.php"><img src="img/gambar1.jpg" class="card-img-top" alt="jalanan macet"></a>
          <div class="card-body">
            <a href="headline.php" class="text-decoration-none text-black"><h5 class="card-title">Hindari Macet, Pemerintah Imbau Masyarakat Mulai Mudik Akhir Pekan Ini</h5></a>
          </div>
        </div>
        <div class="row">
        <?php foreach ($berita as $brt) : ?>
        <div class="col-md-4">
          <div class="card mb-3">
            <a href="details.php?id=<?= $brt['id']; ?>"><img src="img/<?= $brt["gambar"]; ?>" class="card-img-top"></a>
            <div class="card-body">
              <a href="details.php?id=<?= $brt['id']; ?>" class="text-decoration-none text-black"><h5 class="card-title"><?= $brt["judul"]; ?></h5></a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
      </div>
    </div>

    
    <div class="col-md-1"></div>
    <div class="col-md-1"></div>


    <div class="col-md-3">
      <div class="mb-4">
          <h2>Trending</h2>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card mb-3">
            <a href="banteng.php"><img src="img/gambar5.jpg" class="card-img-top" alt="Festival Berbahaya"></a>
            <div class="card-body">
              <a href="banteng.php" class="text-decoration-none text-black"><h5 class="card-title">Dikejar Banteng hingga Adu Jotos, Berikut 5 Festival Paling Berbahaya di Dunia</h5></a>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="card mb-3">
            <a href="covid.php"><img src="img/gambar6.jpg" class="card-img-top" alt="Manusia memakai masker"></a>
            <div class="card-body">
              <a href="covid.php" class="text-decoration-none text-black"><h5 class="card-title">Kasus Covid-19 Naik Lagi, Apakah Disebabkan Subvarian Baru Arcturus?</h5></a>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="card mb-3">
            <a href="surat.php"><img src="img/gambar7.jpg" class="card-img-top" alt="Surat larangan ASN"></a>
            <div class="card-body">
              <a href="surat.php" class="text-decoration-none text-black"><h5 class="card-title">Beredar Surat Larangan ASN Kemenkes Berbicara RUU Kesehatan di Luar Forum Resmi, Apa Isinya?</h5></a>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="card mb-3">
            <a href="ketupat.php"><img src="img/gambar11.jpg" class="card-img-top" alt="Surat larangan ASN"></a>
            <div class="card-body">
              <a href="ketupat.php" class="text-decoration-none text-black"><h5 class="card-title">Resep Ketupat Rice Cooker, Matang Sempurna dan Hemat Uang Gas</h5></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="bg-dark text-white py-4">
  <div class="container">
    <div class="row text-center">
      <div class="col-md-4">
        <h6 class="display-6">MenitNews</h6>
      </div>
      <div class="col-md-4">
        <h6>Menu</h6>
        <ul class="list-unstyled">
          <li><a href="index.php" class="text-white text-decoration-none footer-link">Home</a></li>
          <li><a href="berita.php" class="text-white text-decoration-none footer-link">Berita</a></li>
          <li><a href="health.php" class="text-white text-decoration-none footer-link">Health</a></li>
          <li><a href="food.php" class="text-white text-decoration-none footer-link">Food</a></li>
        </ul>
      </div>
      <div class="col-md-4 text-start">
        <h6>Kontak</h6>
        <p>Telepon : +6285520864791</p>
        <p>Email   : menitnews@gmail.com</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">
        <p>Copyright &copy; 2023 - MenitNews</p>
      </div>
    </div>
  </div>
</footer>

















    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>