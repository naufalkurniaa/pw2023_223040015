<?php
define('BASE_URL', '/pw2023_223040015/kuliah/pertemuan12/');


function koneksi()
{
  // Koneksi ke DB
  $conn = mysqli_connect('localhost', 'root', '', 'pw2023_223040015') or die('Koneksi Database Gagal!');

  return $conn;
}

function query($query)
{

  $conn = koneksi();
  $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data)
{
  $conn = koneksi();

  $nim = htmlspecialchars( $data['nim']);
  $nama = htmlspecialchars($data['nama']);
  $email = htmlspecialchars ($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $gambar = htmlspecialchars ($data['gambar']);


  $query = "INSERT INTO mahasiswa VALUES(null, '$nim', '$nama', '$email', '$jurusan', '$gambar')";
  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function dd($value)
{
  echo "<pre>";
  var_dump($value);
  die;
  echo "</pre>";
}

function uriIS($uri)
{
  return ($_SERVER["REQUEST_URI"] == $uri) ? 'active' : '';
}
function delete($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM mahasiswa WHERE id= $id") or die (mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

// atau juga bisa 
// function delete ($id){
// $conn = koneksi ();
// $query = "DELETE FROM mahasiswa where id = $id";
// mysqli_query($conn, $query) or die (mysqli_affected_rows($conn));
// return mysqli_affected_rows($conn);}
function ubah($data)
{
  $conn = koneksi();
  
  $id = $data['id'];
  
  $nama = htmlspecialchars($data['nama']);
  $nim = htmlspecialchars($data['nim']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "UPDATE mahasiswa SET
            nama = '$nama',
            nim = '$nim',
            email = '$email',
            jurusan = '$jurusan',
            gambar = '$gambar'
            WHERE id =$id";
  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}