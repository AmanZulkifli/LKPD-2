<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perkalian</title>
    <style>
        body {
            background-color: #f0f8ff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: auto;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        h1 {
            font-size: 20px;
            margin-bottom: 15px;
            color: #333;
        }
        .hasil {
            margin: 10px 0;
        }
        p {
            margin: 5px 0;
            font-size: 16px;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hasil Perkalian</h1>
        <div class="hasil">
            <?php
                for ($n = 1; $n <= 2; $n++) {
                    for ($i = 10; $i >= 1; $i--) {
                        echo "<p>" . $i . " x " . $n . " = " . ($i * $n) . "</p>";
                    }
                    echo "<hr>"; 
                }
            ?>
        </div>
    </div>
</body>
</html>
