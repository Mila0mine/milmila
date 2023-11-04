<?php

function hitungFaktorial($p) {
    if ($p < 0) {
        return "Bilangan negatif tidak memiliki faktorial.";
    } elseif ($p== 0 || $p == 1) {
        return 1;
    } else {
        $faktorh = 1;
        for ($i = 2; $i <= $p; $i++) {
            $faktorh *= $i;
        }
        return $faktorh;
    }
}

// Contoh penggunaan fungsi
$bilanganku = 5;
$hasilFaktorial = hitungFaktorial($bilanganku);
echo "Faktorial dari $bilanganku adalah $hasilFaktorial";

?>