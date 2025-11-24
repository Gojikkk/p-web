<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $bilagan = 100;
    $pembagi=3;   
    
    for ($pembagi=1; $pembagi<=3; $pembagi++){
        $hasilBagi = intval (100 / $pembagi);
        $sisaBagi = 100 % $pembagi;
        echo $bilagan." dibagi dengan ".$pembagi." adalah ".$hasilBagi." sisa ".$sisaBagi."<br>";
    }
    ?>

</body>
</html>