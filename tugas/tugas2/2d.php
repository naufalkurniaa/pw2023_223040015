<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas2c</title>
    <style>
        .kotakhitam {
            background-color: black;
            width: 50px;
            height: 50px;
        }

        .kotakputih {
            background-color: white;
            width: 50px;
            height: 50px;
        }
    </style>
</head>
<body>
<?php 

for ($i=1;$i<=5;$i++) {
    echo "<tr>";
    for ($j=1;$j<=5;$j++) {
        if (($i+$j) % 2 == 0) {
            echo "<td class="kotakhitam"></td>;
        } 
    }
}

?>    


</body>
</html>