<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perbandingan Bilangan</title>
    <style>
        body {
            background-color: #e0f7fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            text-align: center;
        }
        h1 {
            font-size: 22px;
            color: #00796b;
            margin-bottom: 15px;
        }
        .hasil {
            margin: 10px 0;
            font-size: 16px;
            color: #333;
        }
        p {
            margin: 5px 0;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Perbandingan Bilangan</h1>
        <div class="hasil">
            <?php
                $bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
                $bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

                $persamaan = array_intersect($bil1, $bil2);
                echo "<p>Bilangan yang ada di kedua variabel:<br>" . implode(", ", $persamaan) . "</p>";

                $perbedaan = array_diff($bil1, $bil2);
                echo "<p>Bilangan yang tidak ada di kedua variabel:<br>" . implode(", ", $perbedaan) . "</p>";
            ?>
        </div>
    </div>
</body>
</html>
