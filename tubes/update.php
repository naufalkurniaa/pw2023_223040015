<?php 
require 'functions.php';

$id = $_GET["id"];

$berita = query("SELECT * FROM dashboard_admin WHERE id = $id")[0];

if (isset($_POST["submit"])) {

    if( ubah($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil diubah');
            document.location.href = 'dashboardadmin.php';
        </script>
        ";
    }else {
            echo "
            <script>
                alert('data gagal diubah');
                document.location.href = 'dashboardadmin.php';
            </script>
            ";
        }
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update data Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

    <!-- Tampilkan formulir untuk menambah berita -->
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
     <div class="col-md-8 mt-5 ms-5">
    <h2>Update Berita</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $berita["id"]; ?>">
        <input type="hidden" name="gambarLama" value="<?= $berita["gambar"]; ?>">
        <div class="mb-3 mt-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" id="judul" name="judul" class="form-control" required value="<?= $berita["judul"]; ?>">
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label d-block">Gambar</label>
            <img src="img/<?= $berita['gambar']; ?>" alt="" width="300">
            <input type="file" id="gambar" name="gambar" class="form-control">
        </div>

        <div class="mb-3">
            <label for="penulis" class="form-label">Penulis</label>
            <input type="text" id="penulis" name="penulis" class="form-control" required value="<?= $berita["penulis"]; ?>">
        </div>

        <div class="mb-3">
            <label for="konten" class="form-label">Konten</label>
            <textarea id="konten" name="konten" class="form-control" required><?= $berita["konten"]; ?></textarea>
        </div>

        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" id="tanggal" name="tanggal" class="form-control" required value="<?= $berita["tanggal"]; ?>">
        </div>


        <button type="submit" name="submit" class="btn btn-dark">Update Berita</button>
    </form>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>