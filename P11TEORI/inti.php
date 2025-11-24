<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <form action="function.php" method="post">
            <div class="data">
                <div class="data-header">
                    <p>Contoh Validasi Form dengan PHP</p>
                </div>
                    <div class="isi-data">
                        <b>Nama</b> <input type="text" name="nama" value="<?= htmlspecialchars($nama ?? '') ?>" 
                        style="<?= !empty($namaErr) ? 'border:2px solid red;' : 'border:1px solid #000000ff;' ?>">
                        <span class="error"><?= $namaErr ?? '' ?></span><br>

                        <b>Email</b> <input type="text" name="email" value="<?= htmlspecialchars($email ?? '') ?>"
                        style="<?= !empty($emailErr) ? 'border:2px solid red;' : 'border:1px solid #000000ff;' ?>">
                        <span class="error"><?= $emailErr ?? '' ?></span><br>

                        <b>Website</b> <input type="text" name="website" value="<?= htmlspecialchars($website ?? '') ?>"
                        style="<?= !empty($websiteErr) ? 'border:2px solid red;' : 'border:1px solid #000000ff;' ?>">
                        <span class="error"><?= $websiteErr ?? '' ?></span><br>

                        <b>Telp</b> <input type="text" name="telp" value="<?= htmlspecialchars($telp ?? '') ?>"style="
                        <?= !empty($telpErr) ? 'border:2px solid red;' : 'border:1px solid #000000ff;' ?>">
                        <span class="error"><?= $telpErr ?? '' ?></span><br>
                        
                        <b>Pesan</b> <textarea name="pesan" style="<?= !empty($pesanErr) ? 'border:2px solid red;' : 'border:1px solid #000000ff;' ?>"><?= htmlspecialchars($pesan ?? '') ?></textarea>
                        <span class="error"><?= $pesanErr ?? '' ?></span><br>
            
                        <input type="submit" name="submit" value="Sign in">
                    </div>
            </div>
        </form>
</body>
</html>