<!DOCTYPE html>
<html>
<head>
    <title>Data Kategori</title>
</head>
<body>
    <h1>Data Kategori</h1>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kategori</th>
            <th>Keterangan</th>
            <th>Gambar</th>
        </tr>

        <?php
        $data = array(
            "NRP123" => array("Nama 1", "Budaya Daerah di Indonesia", "Keterangan 1", "gambar1.jpg"),
            "NRP234" => array("Nama 2", "Penemu-penemu terkenal di dunia", "Keterangan 2", "gambar2.jpg"),
            "NRP345" => array("Nama 3", "Flora dan Fauna terancam punah", "Keterangan 3", "gambar3.jpg"),
            "NRP456" => array("Nama 4", "Pahlawan Nasional Indonesia", "Keterangan 4", "gambar4.jpg"),
            "NRP567" => array("Nama 5", "Perusahaan Teknologi", "Keterangan 5", "gambar5.jpg"),
            // Tambahkan data lain sesuai kebutuhan
        );

        $no = 1;
        foreach ($data as $nrp => $info) {
            $kategori = "";
            $kategori_id = intval(substr($nrp, -3)) % 5;
            switch ($kategori_id) {
                case 1:
                    $kategori = "Budaya Daerah di Indonesia";
                    break;
                case 2:
                    $kategori = "Penemu-penemu terkenal di dunia";
                    break;
                case 3:
                    $kategori = "Flora dan Fauna terancam punah";
                    break;
                case 4:
                    $kategori = "Pahlawan Nasional Indonesia";
                    break;
                case 0:
                    $kategori = "Perusahaan Teknologi";
                    break;
                default:
                    $kategori = "Kategori Lain";
            }

            echo "<tr>";
            echo "<td>$no</td>";
            echo "<td>{$info[0]}</td>";
            echo "<td>$kategori</td>";
            echo "<td>{$info[2]}</td>";
            echo "<td><img src='{$info[3]}' alt='Gambar'></td>";
            echo "</tr>";
            $no++;
        }
        ?>

    </table>
</body>
</html>
