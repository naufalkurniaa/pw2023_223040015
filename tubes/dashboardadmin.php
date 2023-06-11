<?php
require 'functions.php';
$berita = query("SELECT * FROM dashboard_admin");


if ( isset($_POST["cari"])) {
    $berita = cari($_POST["keyword"]);
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   <style>
    .nav-link:hover {
        color: green !important;
    }
   </style> 
</head>
<body>

<div class="container-fluid">
    <div class="row">
      <div class="col-md-2 bg-dark text-white" style="height: 100vh;">
        <a href="index.php" class="text-decoration-none text-white"><h1 class="display-6 mt-3">MenitNews</h1></a>
        <hr class="bg-white">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link text-white" href="dashboardadmin.php">Dashboard</a>
          </li>
        </ul>
      </div>
    <div class="col-md-10">
      <div class="content p-4">
        <div class="container">
          <div class="row mt-4">
            <div class="col-md-6">
              <form action="" method="post">
                <div class="input-group mb-3">
                  <input type="text" name="keyword" class="form-control" placeholder="Masukkan kata kunci" autofocus autocomplete="off">
                  <button class="btn btn-dark" type="submit" name="cari">Cari</button>
                </div>
              </form>
            </div>
            <div class="col-md-12">
              <a href="tambahberita.php"><button class="btn btn-dark float-end mb-3">Tambah berita</button></a>
        <table class="table">
          <thead>
            <tr>
              <th>Judul</th>
              <th>Penulis</th>
              <th>Konten</th>
              <th>Tanggal</th>
              <th></th>
            </tr>
          </thead>
          <?php foreach( $berita as $row) : ?>
          <tbody>
            <tr>
              <td><?= $row["judul"]; ?></td>
              <td><?= $row["penulis"]; ?></td>
              <td><?= $row["konten"]; ?></td>
              <td><?= $row["tanggal"]; ?></td>
              <td>
                <a href="update.php?id=<?= $row["id"]; ?>" class="text-decoration-none"><span class="text-danger">Update</span></a> |
                <a href="hapus.php?id=<?= $row["id"]; ?>" class="text-decoration-none"><span class="text-danger" onclick="return confirm('yakin ingin menghapus data?');">Delete</span></a>
              </td>
            </tr>
          </tbody>
          <?php endforeach; ?>
        </table>
      </div>
    </div>
  </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  
</body>
</html>
