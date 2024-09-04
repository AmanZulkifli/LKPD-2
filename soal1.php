<?php

    $isi = $_POST['isi'] ?? "";
    $angka = filter_var($isi, FILTER_SANITIZE_NUMBER_INT);


    $change= str_split($angka);
    $hasil = implode(",", $change);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cek angka</title>
    <style>
        body {
    text-align: center;
    margin-top: 50px;
    background-color: #F9b469;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}

.a {
    padding: 10px;
    font-size: 16px;
}

.cek {
    padding: 10px 20px;
    font-size: 16px;
    margin-left: 10px;
}

p {
    margin-top: 20px;
    font-size: 18px;
    font-weight: bold;
    background-color: #f2b3f7;
    width : 50%;
    height: 100px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 12px;
    box-shadow: 5px 10px #888;
}

.warna {

}

    </style>

</head>
<body>
    <form action="" method="post">
        <label for="isi">Masukan teks</label>
        <input type="text" class="a"name="isi">
        
        <input type="submit" name="cek" class="cek" value="cek">
    </form>

    <?php
    if($hasil) {
        echo "<p>Teks Mengandung Angka"." <span class='warna'> ". $hasil."</span></p>";
    } else {
        echo "<p>Teks Tidak Mengandung Angka</p>";
    }
?>
</body>
</html>