<?php
$menus = [
    'nasi'  => 2000,
    'ikan'  => 3000,
    'ayam'  => 4000,
    'sayur' => 2000,
    'tumis' => 2000
];

$selected = $_GET['menu'] ?? [];
$nama = htmlspecialchars($_GET['nama'] ?? 'Pembeli');

$total = 0;
foreach ($selected as $item) {
    if (isset($menus[$item])) {
        $total += $menus[$item];
    }
}
?>

<html>
<head>
    <title>Struk Kantin Mamah Dedeh</title>
</head>
<body>
    <h2>Total Harga : <?php echo $total; ?></h2>

    <?php
    echo "<p>Hi, $nama</p>";

    if ($total < 7000) {
        echo "<p><b>Tidak ada bonus atau potongan harga.</b></p>";
        echo "<h3>Selamat Makan $nama, by Mamah Dedeh</h3>";
    } elseif ($total >= 7000 && $total < 13000) {
        echo "<h3>Bonus :</h3>";
        echo "<ul><li>Minuman Gratis : Teh Manis Dingin</li></ul>";
    } elseif ($total == 13000) {
        $diskon = $total * 0.10;
        $hargaAkhir = $total - $diskon;
        echo "<h3>Bonus :</h3>";
        echo "<ul>
                <li>Minuman Gratis : Jus Alpukat</li>
                <li>Diskon : $diskon</li>
                <li>Harga Sekarang : $hargaAkhir</li>
              </ul>";
    } else {
        echo "<p><i>Pembelian di luar ketentuan bonus.</i></p>";
    }
    ?>
</body>
</html>
