<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas2c</title>
    <style>
/* style css */

        * {
            margin: 0;
            padding: 0;
        }
        .kotak {
            width: 50px;
            height: 50px;
            background-color: red;
            border: 1px solid;
            display: inline-block;
            margin: 0;
            padding: 0;
            line-height: 50px;
            text-align: center;
            font-weight: bold;

        }


    </style>
</head>
<body>
 <?php for ($i=1;$i<=10;$i++) : ?>
 <div class="kotak">
    <?= $i; ?>
 </div>
 <?php endfor; ?>
<br>
 <?php for ($i=1;$i<=9;$i++) : ?>
 <div class="kotak">
    <?= $i; ?>
 </div>
 <?php endfor; ?>
<br>
 <?php for ($i=1;$i<=8;$i++) : ?>
 <div class="kotak">
    <?= $i; ?>
 </div>
 <?php endfor; ?>
<br>
 <?php for ($i=1;$i<=7;$i++) : ?>
 <div class="kotak">
    <?= $i; ?>
 </div>
 <?php endfor; ?>
<br>
 <?php for ($i=1;$i<=6;$i++) : ?>
 <div class="kotak">
    <?= $i; ?>
 </div>
 <?php endfor; ?>
<br>
 <?php for ($i=1;$i<=5;$i++) : ?>
 <div class="kotak">
    <?= $i; ?>
 </div>
 <?php endfor; ?>
<br>
 <?php for ($i=1;$i<=4;$i++) : ?>
 <div class="kotak">
    <?= $i; ?>
 </div>
 <?php endfor; ?>
<br>
 <?php for ($i=1;$i<=3;$i++) : ?>
 <div class="kotak">
    <?= $i; ?>
 </div>
 <?php endfor; ?>
<br>
 <?php for ($i=1;$i<=2;$i++) : ?>
 <div class="kotak">
    <?= $i; ?>
 </div>
 <?php endfor; ?>
<br>
 <?php for ($i=1;$i<=1;$i++) : ?>
 <div class="kotak">
    <?= $i; ?>
 </div>
 <?php endfor; ?>
    

</body>
</html>