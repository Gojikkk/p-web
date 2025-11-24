<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $jumlahuang = 1575250;
    $a = intval ($jumlahuang / 100000);
    $sisa = intval ($jumlahuang % 100000);

    $b = intval ($sisa / 50000);
    $sisa = intval ($sisa % 50000);

    $c = intval ($sisa / 20000);
    $sisa = intval ($sisa % 20000);

    $d = intval ($sisa / 5000);
    $sisa = intval ($sisa % 5000);

    $e = intval ($sisa / 100);
    $sisa = intval ($sisa % 100);

    $f = intval ($sisa / 50);
    $sisa = intval ($sisa % 50);

    echo "Jumlah Rp.100.000: ".$a."<br>";
    echo "Jumlah Rp.50.000: ".$b."<br>";
    echo "Jumlah Rp.20.000: ".$c."<br>";
    echo "Jumlah Rp.5.000: ".$d."<br>";
    echo "Jumlah Rp.100: ".$e."<br>";
    echo "Jumlah Rp.50: ".$f;
    ?>
</body>
</html>