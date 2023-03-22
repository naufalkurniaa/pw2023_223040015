<?php 
$mahasiswa = [
    [
      "nama" => "Naufal Kurnia Azizurrahman",
      "nrp" => "223040015",
      "email" => "naufalkurnia50@gmail.com",
      "jurusan" => "Teknik Informatika",
      "gambar" => "naufal.jpg"
    ],
    
    [
        "nama" => "Nama2",
        "nrp" => "22304002",
        "email" => "email2",
        "jurusan" => "Teknik Informatika",
        "gambar" => "merah.jpg"
      ],

      [
        "nama" => "Nama3",
        "nrp" => "22304003",
        "email" => "email3",
        "jurusan" => "Teknik Informatika",
        "gambar" => "naufal.jpg"
      ],

      [
        "nama" => "nama4",
        "nrp" => "22304004",
        "email" => "email4",
        "jurusan" => "Teknik Informatika",
        "gambar" => "merah.jpg"
      ],
      [
        "nama" => "nama5",
        "nrp" => "22304005",
        "email" => "email5",
        "jurusan" => "Teknik Informatika",
        "gambar" => "naufal.jpg"
      ],
      [
        "nama" => "nama6",
        "nrp" => "22304006",
        "email" => "email6",
        "jurusan" => "Teknik Informatika",
        "gambar" => "merah.jpg"
      ],
      [
        "nama" => "nama7",
        "nrp" => "22304007",
        "email" => "email7",
        "jurusan" => "Teknik Informatika",
        "gambar" => "naufal.jpg"
      ],
      [
        "nama" => "nama8",
        "nrp" => "22304008",
        "email" => "email8",
        "jurusan" => "Teknik Informatika",
        "gambar" => "merah.jpg"
      ],
      [
        "nama" => "nama9",
        "nrp" => "22304009",
        "email" => "email9",
        "jurusan" => "Teknik Informatika",
        "gambar" => "naufal.jpg"
      ],
      [
        "nama" => "nama10",
        "nrp" => "22304010",
        "email" => "email10",
        "jurusan" => "Teknik Informatika",
        "gambar" => "merah.jpg"
      ],              
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?> ">
        </li>    
        <li>Nama : <?= $mhs["nama"]; ?>   </li>
        <li>nrp : <?= $mhs["nrp"]; ?>  </li>
        <li>email : <?= $mhs["email"]; ?>   </li>
        <li>jurusan : <?= $mhs["jurusan"]; ?>   </li>
    </ul>
    <?php endforeach; ?>
    
</body>
</html>