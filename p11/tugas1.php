<?php
$name="";
$email="";
$website="";
$gender="";
$nameErr="";
$emailErr="";
$websiteErr="";
$genderErr="";

if(isset($_POST['submit'])){
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $website = trim($_POST['website']);
    $gender = trim($_POST['gender']);

if(empty($name) && empty($email) && empty($gender)){
   echo "<script>alert('Harap isi data terlebih dahulu');</script>";
}
elseif(empty($name)){
    $nameErr= "<script>alert('Harap isi nama terlebih dahulu');</script>";
}
elseif(empty($email)){
    $emailErr= "<script>alert('Harap isi email terlebih dahulu');</script>";
}
elseif(!filter_var($website, FILTER_VALIDATE_URL)){
    $websiteErr= "<script>alert('Harap masukkan url yang valid');</script>";
}
elseif(empty ($gender)){
    $genderErr= "<script>alert('Harap isi gender terlebih dahulu');</script>";
}
elseif(!empty($name) && !empty($email) && !empty($gender)){
    echo "<script>alert('Selamat data kamu sudah berhasil diinput');</script>";
}
}

?>

<h3>PHP Form Validation Example</h3>
<p style="color: red">*required field</p>

<form action="tugas1.php" method="post">
    Name: <input type="text" name="name" value="<?php echo $name ?>">  *<br><br>
    <?php echo $nameErr; ?>
    E-mail: <input type="text" name="email" value="<?php echo $email ?>"> *<br><br>
    <?php echo $emailErr; ?>
    Website: <input type="text" name="website" value="<?php echo $website ?>"><br><br>
    <?php echo $websiteErr; ?>
    Comment: <textarea name="comment"></textarea><br><br>
    Gender: 
    <input type="radio" name="gender" value="female" <?php if ($gender == "female") echo "checked"; ?>>Female
    <input type="radio" name="gender" value="male" <?php if ($gender == "male") echo "checked"; ?>>Male *<br><br>
    <?php echo $genderErr; ?>
    <input type="submit" name="submit" value="Kirim">
    
</form>