<?php
$angka = isset($_GET['Angka']) ? (int)$_GET['Angka'] : 10;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>latihan5a</title>
</head>
<body>
    <?php 
        for ($i = $angka; $i >= 1; $i--){
            for ($j = 1; $j <= $i; $j++){
                echo $j. " ";
            }
            echo "<br>";
        }
    ?>
</body>
</html>
