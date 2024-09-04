<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ngitung Duit</title>
    <style>
        body {
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        h1 {
            font-size: 20px;
            margin-bottom: 20px;
            color: #333;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-size: 16px;
            color: #555;
        }
        input[type="number"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #00796b;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #00695c;
        }
        .result {
            margin-top: 20px;
            text-align: left;
        }
        .result p {
            margin: 5px 0;
            font-size: 14px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hitung Pecahan Uang</h1>
        <form action="" method="post">
            <label for="uang">Masukan Nominal</label>
            <input type="number" name="uang" placeholder="Masukkan jumlah uang" required>
            <input type="submit" value="Cek">
        </form>

        <div class="result">
            <?php
            if (isset($_POST['uang'])) {
                $uang = $_POST['uang'];

                function pecahan($uang) {
                    $pecahan = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500];
                    $hasil = [];
                    foreach ($pecahan as $lembar) {
                        if ($uang >= $lembar) {
                            $hasil[$lembar] = intdiv($uang, $lembar);
                            $uang %= $lembar; 
                        }
                    }
                    return $hasil;
                }

                $hasil = pecahan($uang);

                echo "<p>Jumlah uang: Rp " . number_format($_POST['uang'], 0, ',', '.') . "</p>";
                foreach ($hasil as $lembar => $value) {
                    echo "<p>Rp " . number_format($lembar, 0, ',', '.') . " : $value lembar</p>";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
