<?php 
    $a = "Topi";
    $b = "Bundar";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1a</title>
</head>
<body>
    
<h2><i>
    <?php
        echo "\"$a saya $b, $b $a saya.\"";
    ?>
    </i>
</h2>

<h2><i>
   "<?php
        echo "$a saya $b, $b $a saya.";
    ?>"
    </i>
</h2>

<h2><i>
    "<?php
       echo $a . ' saya ' . $b . ', ' . $b .' '. $a . ' saya.';
    ?>"
    </i>
</h2>

<?php 
    $nama_depan = 'Naufal';
    $nama_belakang = 'Kurnia';
    echo $nama_depan .' '. $nama_belakang;
?>

</body>
</html> 