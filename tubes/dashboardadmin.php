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
            <a class="nav-link text-white mb-3" href="#">Insert</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white mb-3 href="#">Update</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white mb-3" href="#">Delete</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Search</a>
          </li>
        </ul>
      </div>
      <div class="col-md-10">
        <div class="content p-4">
          <!-- Konten isi dari setiap menu akan ditampilkan di sini -->
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  
</body>
</html>
