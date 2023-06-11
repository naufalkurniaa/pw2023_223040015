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
    $konten = htmlspecialchars($data["konten"]);
    $penulis = htmlspecialchars($data["penulis"]);
    $tanggal = htmlspecialchars($data["tanggal"]);

    $query = "INSERT INTO dashboard_admin
                VALUES
                (null,'$judul', '$konten', '$penulis', '$tanggal')

    ";

    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);

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

    $query = "UPDATE dashboard_admin SET 
                judul = '$judul',
                penulis = '$penulis',
                konten = '$konten',
                tanggal = '$tanggal'
              WHERE id = $id  
            ";

    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);

}








?>