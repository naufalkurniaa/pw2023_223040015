<?php 
require 'functions.php';
$berita = query("SELECT * FROM dashboard_admin");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $beritaDetail = null;
            foreach ($berita as $item) {
                if ($item['id'] == $id) {
                    $beritaDetail = $item;
                    break;
                }
  }
}  



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


<div class="row">
 <?php if ($beritaDetail): ?>
  <div class="container col-md-6">
    <h1 class="text-start mb-3"><?= $beritaDetail['judul']; ?></h1>
    <p class="text-start mb-0">MenitNews - <?= $beritaDetail['tanggal']; ?></p>
    <img src="img/<?= $beritaDetail['gambar']; ?>" class="img-fluid my-3" width="800" height="400" alt="Gambar Berita">
    <p class="text-start">Penulis: <?= $beritaDetail['penulis']; ?></p>
    <?php 
    $konten = $beritaDetail['konten'];
    $paragraf = explode("\n", $konten);
    foreach ($paragraf as $p) {
      echo "<p class='text-start'>$p</p>";
    }
  ?>
  </div>
 <?php else: ?>
    <p>Berita tidak ditemukan.</p>
 <?php endif; ?>
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