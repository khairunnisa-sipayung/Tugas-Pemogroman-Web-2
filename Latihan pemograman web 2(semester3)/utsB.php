<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diskon</title>
</head>
<body>
<?php 
$Diskon = [
    [
        "tanggal" => "20 November 2023", 
        "produk" => [
            "Baju Bayi"   => 35500,
            "Diapers"     => 51000,
            "Bedak"       => 15000,
            "Minyak Telon"=> 30000,
            "Baby Oil"    => 16000
        ],
    ]
];
?>
<div style="border: 1px solid #000; padding: 10px; width: 400px">
<?php
foreach ($Diskon as $diskonTotal) {
    $total = $diskonTotal["produk"]["Baju Bayi"] * 3 + $diskonTotal["produk"]["Diapers"] * 5 + $diskonTotal["produk"]["Bedak"] + $diskonTotal["produk"]["Minyak Telon"] * 2 + $diskonTotal["produk"]["Baby Oil"] * 3;

    $diskon = 0; // Initialize discount
    $total_bayar = $total; // Initialize total bayar

    if ($total >= 200000 && $total < 300000) {
        $diskon = (($total * 10) / 100);
        $total_bayar = ($total - $diskon);
    } elseif ($total >= 300000) {
        $diskon = (($total * 20) / 100);
        $total_bayar = ($total - $diskon);
    }

    echo "<p>" . "Tanggal Transaksi      : " . $diskonTotal["tanggal"] . "</p>";
    echo "<p>" . "Produk                 :" . "</p>";
    echo "<p>" . "Baju Bayi (3x35.500)   : Rp " . number_format($diskonTotal["produk"]["Baju Bayi"] * 3, 0, '.', '.') . "</p>";
    echo "<p>" . "Diapers (5X51.000)     : Rp " . number_format($diskonTotal["produk"]["Diapers"] * 5, 0, '.', '.') . "</p>";
    echo "<p>" . "Bedak (1X15.000)       : Rp " . number_format($diskonTotal["produk"]["Bedak"], 0, '.', '.') . "</p>";
    echo "<p>" . "Minyak Telon (2X30.000): Rp " . number_format($diskonTotal["produk"]["Minyak Telon"] * 2, 0, '.', '.') . "</p>";
    echo "<p>" . "Baby Oil (3X16.000)    : Rp " . number_format($diskonTotal["produk"]["Baby Oil"] * 3, 0, '.', '.') . "</p>";
    echo "<p>" . "Total                  : Rp " . number_format($total, 0, '.', '.') . "</p>";
    echo "<p>" . "Diskon                 : Rp " . number_format($diskon, 0, '.', '.') . "</p>";
    echo "<p>" . "Total Pembayaran       : Rp " . number_format($total_bayar, 0, '.', '.') . "</p>";
}
?>
</div>
</body>
</html>
