<?php 
$perangkatkeras = ["Motherboard", "Processor", "Hard Disk", "PC Cooler", "VGA Card", "SSD"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Macam - macam perangkat keras komputer</title>
</head>
<body>
    
<h2>Macam - macam perangkat keras komputer</h2>
<ol>
    <?php foreach($perangkatkeras as $pk) : ?>
    <li><?= $pk; ?></li>
    <?php endforeach; ?>
</ol>

<?php 
$perangkatkeras = ["Card Reader", "Hard Disk", "Modem", "Motherboard", "PC Coller", "Processor", "SSD", "VGA Card"];
?>


<h2>Macam - macam perangkat keras komputer baru</h2>
<ol>
    <?php foreach($perangkatkeras as $pk) : ?>
         <li><?= $pk; ?></li>
    <?php endforeach; ?>
</ol>


</body>
</html>