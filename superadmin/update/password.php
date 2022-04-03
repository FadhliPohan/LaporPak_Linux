<?php
include '../../koneksi.php';
// menyimpan hasil inputan kedalam variabel
$email          = $_POST['email'];

$options      = array("cost" => 4);
$pass         = password_hash($_POST['password'], PASSWORD_BCRYPT, $options);

$sql1 = "UPDATE admin SET  password='$pass' WHERE email='$email'";

// perintah untuk mengeksekusi query di atas
$update1     = mysqli_query($konek, $sql1);




header("location:../index.php");
