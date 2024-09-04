<?php
$data = [ 80, 90, 75, 100, 85, 100, 66];
$cari = 100;

function search($data, $cari) {
    $hasil = array_count_values($data);
    
    $output = "Jumlah angka 100 = " . ($hasil[$cari] ?? 0);
    return $output;
}

echo search($data, $cari);


?>