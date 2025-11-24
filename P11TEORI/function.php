<?php
$nama="";
$email="";
$website="";
$telp="";
$namaErr="";
$pesan="";
$emailErr="";
$pesanErr="";
$websiteErr="";
$telpErr="";
$valid=true;

if(isset($_POST['submit'])){
    $nama=trim($_POST['nama']);
    $email=trim($_POST['email']);
    $telp=trim($_POST['telp']);
    $website=trim($_POST['website']);
    $pesan=trim($_POST['pesan']);

    if(empty($nama) && empty($email) && empty($website) && empty($telp) && empty($pesan)){
        $valid = false;
    }
    if(empty ($nama)){
        $namaErr="Nama tidak boleh kosong";
        $valid= false;
    }
    elseif(is_numeric($nama)){
            $namaErr="Nama harus huruf";
            $valid= false;
        }
    if (empty($email)){
        $emailErr="Email harus diisi";
        $valid= false;
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailErr="Formati email invalid";
            $valid= false;
    }
    if(!filter_var($website, FILTER_VALIDATE_URL)){
        $websiteErr="URL tidak valid";
        $valid= false;
    }
    if(empty($telp)){
        $telpErr="Nomor telepon harus diisi";
        $valid= false;
    }
    elseif(!is_numeric($telp)){
            $telpErr="Nomor HP hanya boleh angka";
            $valid= false;
    }
    if(empty($pesan)){
        $pesanErr="Pesan tidak boleh kosong";
        $valid= false;
    }
    if ($valid) {
        echo "<script>alert('Selamat! Data Anda berhasil dikirim');</script>";
    }
   
}
include("inti.php");
?>