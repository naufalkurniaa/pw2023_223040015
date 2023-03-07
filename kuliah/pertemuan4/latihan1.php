<?php 
    // memeriksa apakah $angka itu bilangan Ganjil
    // bilangan yang jika dibagi 2 sisanya 1
function cek_ganjil_genap($angka) //parameter
{
if($angka%2==1) {
    return "$angka adalah bilangan GANJIL <br>";
} else {
    return "$angka adalah bilangan GENAP <br>";
}
}

echo cek_ganjil_genap(10); //argument
echo cek_ganjil_genap(5);
echo cek_ganjil_genap(101);


?>