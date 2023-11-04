<?php

// Array awal dengan 5 elemen string negara ASEAN
$aseanCountries = array(
    "Indonesia",
    "Singapura",
    "Malaysia",
    "Brunei",
    "Thailand"
);

// Tampilkan daftar negara ASEAN awal
echo "<h1>Daftar Negara ASEAN awal:</h1>";
echo "<ul>";
foreach ($aseanCountries as $country) {
    echo "<li>$country</li>";
}
echo "</ul>";

// Tambahkan 3 elemen baru ke array
$aseanCountries[] = "Laos";
$aseanCountries[] = "Filipina";
$aseanCountries[] = "Myanmar";

// Tampilkan daftar negara ASEAN baru
echo "<h1>Daftar Negara ASEAN baru:</h1>";
echo "<ul>";
foreach ($aseanCountries as $country) {
    echo "<li>$country</li>";
}
echo "</ul>";

?>