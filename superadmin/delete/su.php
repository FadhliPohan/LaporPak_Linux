<?php
include "../../koneksi.php";

$id= $_GET['email'];
$admin = mysqli_query($konek, "DELETE from admin where email='$id'");
$user = mysqli_query($konek, "DELETE from user where email='$id'");
// $row  = mysqli_fetch_array($user);



// balik he halaman list tbl_materi
header("location:../tbl_su.php");
