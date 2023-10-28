<?php 
$JawabanIsset = "Isset adalah = fungsi yang digunakan untuk memeriksa apakah suatu variabel telah diatur (di deklarasikan) dan memiliki nilai (tidak NULL).";
$jawabanEmpty = "Empty adalah = fungsi yang digunakan untuk memeriksa apakah suatu variabel kosong atau memiliki nilai yang dianggap kosong ataupun tidak terdefinisi.";

function soal($style) {
    global $JawabanIsset, $jawabanEmpty;

    $hasil = '';

    if ($style == 'Isset') {
        $hasil = $JawabanIsset;
    }

    if ($style == 'Empty') {
        $hasil = $jawabanEmpty;
    }
    
    echo $hasil;
}

// Contoh penggunaan:
$style = 'Isset';
soal($style) ;

echo "<br><br>";

$style = 'Empty';
soal($style);




 ?>