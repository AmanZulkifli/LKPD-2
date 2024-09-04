<?php

    $jam = $_POST['jam'] ?? "";
    if($jam > 8) {
        $lebih = $jam - 8;
        $gede = 50000;
        $kecil = $lebih - 1;
        $kecil = $kecil * 25000;
        $kompensasi = $kecil + $gede;
    } elseif ($jam <= 8 && $jam > 0) {
        echo " Anda tidak lembur, jangan harap kompensasi";
        $lebih= 0;
        $kompensasi = 0;
    } else {
                echo "Masukan jam kerja lembur anda";

        $kompensasi = 0;
        $lebih = 0;
        $jam = 0 ;
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cek angka</title>
    <style>
        body {
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
        .hasil {
            margin-top: 20px;
            background-color: #fff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .error {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <label for="jam">Masukan Lama Kerja</label>
        <input type="text" name="jam" id="jam">
        <input type="submit" name="cek" value="cek">
    </form>

    <?php
    if (isset($jam)) {
        echo '<div class="hasil">';
        echo "Lama kerja : " . htmlspecialchars($jam) . " jam <br>";
        echo "Jam lebih : " . htmlspecialchars($lebih) . " jam <br>";
        echo "kompensasi : " . htmlspecialchars($kompensasi) . " rupiah"; 
        echo '</div>';
    } else {
        echo '<div class="error">Error: Input tidak valid.</div>';
    }
    ?>
</body>
</html>