<?php

$nama1 = "Fema Flamelina Putri";
$nama2 = "Artasya Legina";
$hasil1 = strlen($nama1);
$hasil2 = strlen($nama2);
function charcheck($hasil1, $hasil2, $nama1, $nama2) {
    if($hasil1 >  $hasil2) {
    $output = $hasil1 - $hasil2;
    echo $nama1 . " lebih panjang dari " . $nama2 . " sebesar " . $output;
    
} elseif($hasil2 >  $hasil1) {
    $output = $hasil2 - $hasil1;
    echo $nama2 . " lebih panjang dari " . $nama1 . " sebesar " . $output;
} else {
    echo "error";
}}

echo charcheck($hasil1, $hasil2, $nama1, $nama2);
?>