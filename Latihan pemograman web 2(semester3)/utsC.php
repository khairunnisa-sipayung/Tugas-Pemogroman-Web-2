<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Harga Barang array multidimensi</title>
</head>
<body>
<?php
$TableHargaBarang = array(
    array(
        "ID" => 1,
        "Produk" => "Minyak Telon",
        "Stok" => 20,
        "Harga" => 30000,
        
    ),
    array(
        "ID" => 2,
        "Produk" => "Diapers",
        "Stok" => 25,
        "Harga" => 51000,
        
    ),
    array(
        "ID" => 3,
        "Produk" => "Baby Oil",
        "Stok" => 15,
        "Harga" => 16000,
        
    ),
    array(
        "ID" => 4,
        "Produk" => "Shampo Baby",
        "Stok" => 20,
        "Harga" => 20000,
        
    ),
    array(
        "ID" => 5,
        "Produk" => "Bedak",
        "Stok" => 15,
        "Harga" => 15000,
        
    ),
    array(
        "ID" => 6,
        "Produk" => "Baju Bayi",
        "Stok" => 20,
        "Harga" => 35500,
        
    ),
    array(
        "ID" => 7,
        "Produk" => "Jumper",
        "Stok" => 25,
        "Harga" => 50000,
        
    ),
   );
   
   ?>
   <table border="1" cellpadding="9" cellspacing="0" style=" margin: 10 auto;">
    <tr>
        <th>ID</th>
        <th>Produk</th>
        <th>Stok</th>
        <th>Harga</th>
        <th>Jumlah</th>
    </tr>

    <?php 
    foreach ($TableHargaBarang as $Barang) {
        echo "<tr>";
        echo "<td>".$Barang["ID"]."</td>";
        echo "<td>" . $Barang["Produk"] . "</td>";
        echo "<td>" . $Barang["Stok"] . "</td>";
        echo "<td>" . $Barang["Harga"] . "</td>";
        echo "<td>" . $Barang["Stok"] * $Barang["Harga"] . "</td>";
        echo "</tr>";
    };

    ?>
    </table>
</body>
</html> 