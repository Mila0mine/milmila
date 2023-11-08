<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flora dan Fauna</title>
</head>
<body>
<?php
// Membuat associative array dengan data flora dan fauna terancam punah
$floraFauna = array(
    "Spesies 1" => array(
        "Nama" => "Badak Jawa",
        "Lokasi Habitat" => "Pulau Jawa, Indonesia",
        "Populasi Tersisa" => "Kurang dari 70 ekor",
        "Status Konservasi" => "Kritis",
        "Gambar" => "../img/img mila//badak_jawa.jpg"
    ),
    "Spesies 2" => array(
        "Nama" => "Harimau Sumatera",
        "Lokasi Habitat" => "Pulau Sumatera, Indonesia",
        "Populasi Tersisa" => "Kurang dari 400 ekor",
        "Status Konservasi" => "Kritis",
        "Gambar" => "../img/img mila/harimau_sumatra.jpg"
    ),
    "Spesies 3" => array(
        "Nama" => "Gajah Sumatera",
        "Lokasi Habitat" => "Pulau Sumatera, Indonesia",
        "Populasi Tersisa" => "Kurang dari 2,800 ekor",
        "Status Konservasi" => "Kritis",
        "Gambar" => "../img/img mila/gajah_sumatra.jpg"
    ),
    "Spesies 4" => array(
        "Nama" => "Orang utan Kalimantan",
        "Lokasi Habitat" => "Kalimantan, Indonesia",
        "Populasi Tersisa" => "Kurang dari 104,700 ekor",
        "Status Konservasi" => "Kritis",
        "Gambar" => "../img/img mila/orangutan_kalimantan.jpg"
    ),
    "Spesies 5" => array(
        "Nama" => "Harimau Amur",
        "Lokasi Habitat" => "Asia Timur",
        "Populasi Tersisa" => "Kurang dari 400 ekor",
        "Status Konservasi" => "Kritis",
        "Gambar" => "../img/img mila/harimau_amur.jpg"
    ),
    "Spesies 6" => array(
        "Nama" => "Gajah Asia",
        "Lokasi Habitat" => "Hutan, padang rumput, dan sungai di Asia",
        "Populasi Tersisa" => "Kurang dari 50.000 individu",
        "Status Konservasi" => "Terancam (Endangered)",
        "Gambar" => "../img/img mila/gajah_asia.jpg"
    ),
    "Spesies 7" => array(
        "Nama" => "Orangutan",
        "Lokasi Habitat" => "Hutan hujan tropis di Asia Tenggara",
        "Populasi Tersisa" => "Kurang dari 100.000 individu",
        "Status Konservasi" => "Terancam (Endangered)",
        "Gambar" => "../img/img mila/orangutan.jpg"
    ),
    "Spesies 8" => array(
        "Nama" => "Komodo",
        "Lokasi Habitat" => "Pulau Komodo, Indonesia",
        "Populasi Tersisa" => "Kurang dari 4.000 individu",
        "Status Konservasi" => "Terancam (Endangered)",
        "Gambar" => "../img/img mila/komodo.jpg"
    ),
    "Spesies 9" => array(
        "Nama" => "Kura-kura Penyu Hijau",
        "Lokasi Habitat" => "Perairan tropis di seluruh dunia",
        "Populasi Tersisa" => "Kurang dari 500.000 individu",
        "Status Konservasi" => "Rentan (Vulnerable)",
        "Gambar" => "../img mila/penyu_hijau.jpg"
    ),
    "Spesies 10" => array(
        "Nama" => "Paus Biru",
        "Lokasi Habitat" => "Perairan laut di seluruh dunia",
        "Populasi Tersisa" => "Kurang dari 10.000 individu",
        "Status Konservasi" => "Terancam (Endangered)",
        "Gambar" => "../img/img mila/paus_biru.jpg"
    ),
);

?>

<h1 style="text-align: center;">Flora dan Fauna Terancam Punah Di Indonesia</h1>
<table border='1' cellpadding="3" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Lokasi Habitat</th>
        <th>Populasi Tersisa</th>
        <th>Status Konversi</th>
        <th>Gambar</th>
    </tr>

    <?php 
    $nomormila = 1;
    foreach ($floraFauna as $spesies) {
        echo "<tr>";
        echo "<td>$nomormila</td>";
        echo "<td>" . $spesies["Nama"] . "</td>";
        echo "<td>" . $spesies["Lokasi Habitat"] . "</td>";
        echo "<td>" . $spesies["Populasi Tersisa"] . "</td>";
        echo "<td>" . $spesies["Status Konservasi"] . "</td>";
        echo "<td><img src='" . $spesies["Gambar"] . "' alt='"  . "' width='100'></td>";
        echo "</tr>";
        $nomormila++;
    };

echo "Nama : Mila Erdita</br>";
echo "NIM : 701220306 </br>";
echo "ujung nim 306</br>306%5= 15,3= 3";
echo "Jadi saya mengambil topik flora dan fauna";  

    ?>
</table>

</body>
</html>