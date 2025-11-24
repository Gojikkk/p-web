<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Hitung Sisa Pembagiann</h2>
<?php
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $hasil1 = $angka1 % $angka2;

        echo $angka1. " % " . $angka2 . " = " . $hasil1 . " <br>";
        ?>
</body>
</html>