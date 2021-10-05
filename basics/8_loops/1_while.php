<?php

$x = 1; // nilai awal

//disimpulkan bahwa nilai x = 1, karena nilai x lebih kecil dari 5 maka kondisi tersebut bernilai true
while ($x <= 5) {
    echo "Nomor: $x <br/>";
    $x++;
}
"<br>";
$y = 5;
//disimpulkan bahwa nilai y = 5, karena nilai y lebih kecil dari 1 maka kondisi tersebut bernilai false, maka code selanjutnya tidak di eksikusi.
while ($y <= 1) {
    echo "Nilai Y: $y <br/>";
    $y++;
}


// contoh loop data string
echo "-----------------------------------------";
echo "<br/>";
$warna = ['Merah', 'Kuning', 'Hijau', 'Biru', 'Putih', 'Kuning']; // data warna berupa data array
$i = 0;
$arrayleght = count($warna);
while ($i < $arrayleght) {
    echo $warna[$i] . "<br/>";
    $i++;
}
