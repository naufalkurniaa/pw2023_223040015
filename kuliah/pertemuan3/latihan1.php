<?php 

// Pengulangan While
// 1. Inisialisasi / nilai awal
// 2. Kondisi terminasi / kapan pengulangannya berhenti
// increment / decrement (penambahan atau pengurangan nilai agar nilai awal itu mendekati nilai kondisi terminasi)

$nilai_awal = 2;                  // Inisialisasi
while ($nilai_awal <= 10) {        // Kondisi terminasi
    echo "Hello World $nilai_awal x <br>";
    $nilai_awal +=2;            // Increment
    //  $nilai_awal++ = $nilai_awal+=1;
    //  $nilai_awal-- = $nilai_awal-=1;
}

echo "<hr>";

//for 
for ($nilai_awal=1; $nilai_awal<=10; $nilai_awal++) {
    echo "Hello World $nilai_awal x <br>";
}



?>