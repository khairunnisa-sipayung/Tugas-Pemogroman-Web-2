<?php
echo "Pengulangan untuk mencari kategori bilangan:<br><br>";

for ($i = 1; $i <= 19; $i++) {
    $kategori = "";

    if ($i % 2 == 0) {
        $kategori = "genap";
    } else {
        $kategori = "ganjil";
    }

    if ($i > 1) {
        $isPrima = true;
        for ($j = 2; $j * $j <= $i; $j++) {
            if ($i % $j == 0) {
                $isPrima = false;
                break;
            }
        }
        if ($isPrima) {
            $kategori .= " sekaligus bilangan prima";
        }
    }

    echo "<li> Angka $i adalah bilangan $kategori.<br></li>";
}
?>
