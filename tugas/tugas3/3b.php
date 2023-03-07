<?php 

function urutanAngka($angka) {
    $max = 1;
    for ($i = 1; $i <= $angka; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $max++ . " ";
        }
        echo "<br>";
    }
}

echo urutanAngka(5);
 ?>