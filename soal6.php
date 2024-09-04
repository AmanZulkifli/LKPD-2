<?php

$student = [
    [
        'nama' => 'Andi',
        'nilai' => [80, 78, 82, 78, 88],
    ],
    [
        'nama' => 'Beni',
        'nilai' => [86, 70, 80, 85, 81],
    ],
    [
        'nama' => 'Dani',
        'nilai' => [83, 91, 70, 73, 81],
    ],
    [
        'nama' => 'Eko',
        'nilai' => [89, 85, 84, 86, 88],
        
    ],

];


$counter = 1;
foreach ($student as $students) {
    $nilai = $students['nilai'];
    $rataRata = array_sum($nilai) / count($nilai);
    echo $counter . ". Nilai " . $students['nama'] . " : " . $rataRata . "<br>";
    $counter++;
}


?>