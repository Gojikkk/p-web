<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Anda Telah Login!</h2>
     <?php
        $username = $_POST['username'];
        $password = $_POST['password'];
        $tanggal = date("d F Y");

        echo "Tanggal : " . $tanggal . "<br>";
        echo "Username : " . $username . "<br>";
        echo "Password : " . $password . "<br>";
    ?>
</body>
</html>