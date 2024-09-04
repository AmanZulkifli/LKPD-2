<?php

$umur = [12, 15, 17, 20, 25, 30, 35, 40, 45, 50];


function dewasa($umur) {
    $dewasa = [];

    foreach($umur as $u) {
        if ($u >= 17) {
        $dewasa[] = $u;
        }
    }

    return $dewasa;
}

function anak($umur) {
    $anak = [];

    foreach($umur as $u) {
        if ($u < 17) {
        $anak[] = $u;
        }
    }

    return $anak;
}


echo "List Usia :" . implode(", ", $umur). "<br>";
echo "Jumlah kategori Dewasa : " . count(dewasa($umur)) . "<br>";
echo "Jumlah kategori Anak : " . count(anak($umur));

?>