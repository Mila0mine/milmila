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
        "Gambar" => "../Tugas5/assets/img/badak_jawa.jpeg"
    ),
    "Spesies 2" => array(
        "Nama" => "Harimau Sumatera",
        "Lokasi Habitat" => "Pulau Sumatera, Indonesia",
        "Populasi Tersisa" => "Kurang dari 400 ekor",
        "Status Konservasi" => "Kritis",
        "Gambar" => "../Tugas5/assets/img/harimau_sumatra.jpeg"
    ),
    "Spesies 3" => array(
        "Nama" => "Gajah Sumatera",
        "Lokasi Habitat" => "Pulau Sumatera, Indonesia",
        "Populasi Tersisa" => "Kurang dari 2,800 ekor",
        "Status Konservasi" => "Kritis",
        "Gambar" => "../Tugas5/assets/img/gajah_sumatra.jpeg"
    ),
    "Spesies 4" => array(
        "Nama" => "Orang utan Kalimantan",
        "Lokasi Habitat" => "Kalimantan, Indonesia",
        "Populasi Tersisa" => "Kurang dari 104,700 ekor",
        "Status Konservasi" => "Kritis",
        "Gambar" => "../Tugas5/assets/img/orangutan_kalimantan.jpeg"
    ),
    "Spesies 5" => array(
        "Nama" => "Harimau Amur",
        "Lokasi Habitat" => "Asia Timur",
        "Populasi Tersisa" => "Kurang dari 400 ekor",
        "Status Konservasi" => "Kritis",
        "Gambar" => "../Tugas5/assets/img/harimau_amur.jpeg"
    ),
    "Spesies 6" => array(
        "Nama" => "Gajah Asia",
        "Lokasi Habitat" => "Hutan, padang rumput, dan sungai di Asia",
        "Populasi Tersisa" => "Kurang dari 50.000 individu",
        "Status Konservasi" => "Terancam (Endangered)",
        "Gambar" => "../Tugas5/assets/img/gajah_asia.jpeg"
    ),
    "Spesies 7" => array(
        "Nama" => "Orangutan",
        "Lokasi Habitat" => "Hutan hujan tropis di Asia Tenggara",
        "Populasi Tersisa" => "Kurang dari 100.000 individu",
        "Status Konservasi" => "Terancam (Endangered)",
        "Gambar" => "../Tugas5/assets/img/orangutan.jpeg"
    ),
    "Spesies 8" => array(
        "Nama" => "Komodo",
        "Lokasi Habitat" => "Pulau Komodo, Indonesia",
        "Populasi Tersisa" => "Kurang dari 4.000 individu",
        "Status Konservasi" => "Terancam (Endangered)",
        "Gambar" => "../Tugas5/assets/img/komodo.jpeg"
    ),
    "Spesies 9" => array(
        "Nama" => "Kura-kura Penyu Hijau",
        "Lokasi Habitat" => "Perairan tropis di seluruh dunia",
        "Populasi Tersisa" => "Kurang dari 500.000 individu",
        "Status Konservasi" => "Rentan (Vulnerable)",
        "Gambar" => "../Tugas5/assets/img/kura_kura_penyu_hijau.jpeg"
    ),
    "Spesies 10" => array(
        "Nama" => "Paus Biru",
        "Lokasi Habitat" => "Perairan laut di seluruh dunia",
        "Populasi Tersisa" => "Kurang dari 10.000 individu",
        "Status Konservasi" => "Terancam (Endangered)",
        "Gambar" => "../Tugas5/assets/img/paus_biru.jpeg"
    ),
);
// Mencetak tabel
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
    $nomor = 1;
    foreach ($floraFauna as $spesies) {
        echo "<tr>";
        echo "<td>$nomor</td>";
        echo "<td>" . $spesies["Nama"] . "</td>";
        echo "<td>" . $spesies["Lokasi Habitat"] . "</td>";
        echo "<td>" . $spesies["Populasi Tersisa"] . "</td>";
        echo "<td>" . $spesies["Status Konservasi"] . "</td>";
        echo "<td><img src='" . $spesies["Gambar"] . "' alt='"  . "' width='100'></td>";
        echo "</tr>";
        $nomor++;
    };
//Alasan mendapat tabel flora dan fauna
echo "Nama : Putra agus muslimin</br>";
echo "NIM : 701220032</br>";
echo "Jadi ujung nim saya yakni 032</br>032% = 0,32*5= 1,6 6/2= 3";

    ?>
</table>

</body>
</html>