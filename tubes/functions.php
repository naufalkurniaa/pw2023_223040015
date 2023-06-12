<?php
$conn = mysqli_connect("localhost", "root", "", "tubes_pw2023");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;
    $judul = htmlspecialchars($data["judul"]);
    $penulis = htmlspecialchars($data["penulis"]);
    $konten = htmlspecialchars($data["konten"]);
    $tanggal = htmlspecialchars($data["tanggal"]);

    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO dashboard_admin
                VALUES
                (null,'$judul', '$penulis', '$konten', '$tanggal', '$gambar')

    ";

    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);

}


function upload() {
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];


    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if ( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
         echo "<script>
                alert('yang anda upload bukan gambar');
               </script>";
         return false;
    }


    if ( $ukuranFile > 5000000 ) {
        echo "<script>
                alert('ukuran gambar terlalu besar');
               </script>";
        return false;
    }


    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;  

    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

    return $namaFileBaru;
}

    

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM dashboard_admin WHERE id = $id");
    return mysqli_affected_rows($conn);
}



function ubah($data) {
    global $conn;

    $id = $data["id"];
    $judul = htmlspecialchars($data["judul"]);
    $penulis = htmlspecialchars($data["penulis"]);
    $konten = htmlspecialchars($data["konten"]);
    $tanggal = htmlspecialchars($data["tanggal"]);
    $gambarLama = $data["gambarLama"];

    if ( $_FILES['gambar']['error'] === 4 ) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    $query = "UPDATE dashboard_admin SET 
                judul = '$judul',
                penulis = '$penulis',
                konten = '$konten',
                tanggal = '$tanggal',
                gambar = '$gambar'
              WHERE id = $id  
            ";

    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);

}


function cari ($keyword) {
    $query = "SELECT * FROM dashboard_admin
              WHERE
                judul LIKE '%$keyword%' OR
                penulis LIKE '%$keyword%' OR
                konten LIKE '%$keyword%' OR
                tanggal LIKE '%$keyword%'
              ";

    return query($query);
}





?>