<?php 
    $a = 15;
    $hasilkali = $a*5;
    $hasilbagi = $a/2;
    $hasiltambah = $a+75;
    $hasilkurang = $a-20;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas1b</title>
</head>
<body>
    
<p>
    <?php 
        echo "Aku adalah angka <b>$a</b> </br>";  
    ?>

    <?php
        echo "Jika aku dikali 5, maka aku sekarang menjadi <b>$hasilkali</b> </br>";   
    ?>

    <?php
        echo "Jika aku dibagi 2, maka aku sekarang menjadi <b>$hasilbagi</b> </br>";
    ?>

    <?php
        echo "Jika aku ditambah 75, maka aku sekarang menjadi <b>$hasiltambah</b> </br>";
    ?>

    <?php
        echo "Jika aku dikurang 20, maka aku sekarang menjadi <b>$hasilkurang</b>";
    ?>
</p>

</body>
</html>