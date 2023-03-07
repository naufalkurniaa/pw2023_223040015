<?php 
echo "<h4>Menghitung Luas Lingkaran</h4>";
function hitungLuasLingkaran($r) {
    return "jari-jari = $r cm <br> Luas Lingkaran = " . 3.14 * $r * $r . " cm2";

}
echo hitungLuasLingkaran(10);

echo "<hr>";

echo "<h4>Menghitung Keliling Lingkaran</h4>";
function hitungKelilingLingkaran($r) {
    return "jari-jari = $r cm <br> Keliling lingkaran = " . 2 * 3.14 * $r . " cm";

}
echo hitungKelilingLingkaran(20);

echo "<hr>";


?>