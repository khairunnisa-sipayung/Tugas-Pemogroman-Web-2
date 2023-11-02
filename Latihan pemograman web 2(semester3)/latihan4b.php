<?php 

$Negara = ["Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand"];

echo "<b>Daftar Negara ASEAN awal :</b>";
echo "<ul>";
foreach ($Negara as $negara_asean) {
echo "<li>$negara_asean</li>";

}
echo "</ul>";

echo "<b>Daftar Negara ASEAN baru :</b>";
echo "<ul>";
$negara_asean = array_push($Negara, "Laos", "Filiphina", "Myanmar");
foreach ($Negara as $negara_asean) {
echo "<li>$negara_asean</li>";

}
echo "</ul>";

 ?>

