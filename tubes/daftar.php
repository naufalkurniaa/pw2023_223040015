<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-body-secondary">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
      <form class="d-flex mx-auto mb-2 mb-lg-0">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item me-2">
          <a class="nav-link bg-success rounded-3 px-3 mb-2 mb-lg-0" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link bg-success rounded-3 px-3 mb-lg-0" href="#">Daftar</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container daftarform rounded-4 mt-5 bg-success-subtle p-4 bayangan mb-5">
  <h2 class="text-center mb-4">Daftar</h2>
  <div class="row justify-content-center">
    <div class="col-lg-6 d-flex flex-column flex-grow-1">
      <form method="POST" action="register.php">
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="mb-3">
          <label for="confirm-password" class="form-label">Konfirmasi Password</label>
          <input type="password" class="form-control" id="confirm-password" name="confirm-password" required>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-3">
          <button type="submit" class="btn btn-success">Daftar</button>
          <div>
            <small>Sudah punya akun?</small>
            <a href="login.php" class="ms-2 text-decoration-none text-success">Login</a>
          </div>
        </div>
      </form>
      <a href="#" class="d-block text-center mt-3 text-decoration-none text-success">Kembali ke halaman utama</a>
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
        <li><a href="index.php" class="text-white text-decoration-none">Home</a></li>
          <li><a href="berita.php" class="text-white text-decoration-none">Berita</a></li>
          <li><a href="health.php" class="text-white text-decoration-none">Health</a></li>
          <li><a href="food.php" class="text-white text-decoration-none">Food</a></li>
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