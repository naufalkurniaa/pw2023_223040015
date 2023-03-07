<?php 
//ARRAY
//Membuat Array
$hari= array('Senin','Selasa','Rabu');
$bulan = ['Januari', 'Februari', 'Maret'];
$myArray =['Naufal', 39, false];
$binatang = ['🐈', '🐇', '🐒', '🦅','🐔'];

//Mencetak Array
echo $hari[1]; // 1 elemen menggunakan indexnya
echo "<hr>";
var_dump($hari);
echo "<hr>";
print_r($bulan);
echo "<hr>";
var_dump($myArray);
echo "<hr>";


// Manipulasi Array 

// Menambah elemen diakhir menggunakan index
$hari[]='Kamis';
$hari[]="Jum'at";
print_r($hari);
echo "<hr>";

// Menambah elemen di akhir menggunakan array_push()
array_push($bulan,'April', 'Mei', 'Juni');
print_r($bulan);
echo "<hr>";

//Menambah elemen di awal menggunakan array_unshift()
array_unshift($binatang,'🐍');
print_r($binatang);
echo "<hr>";

//Menghapus elemen di akhir, menggunakan array_pop()
array_pop($hari);
print_r($hari);
echo "<hr>";

//Menghapus elemen di awal, menggunakan array_shift()
array_shift($hari);
print_r($hari);
echo "<hr>";




?>