<?php
include "../../koneksi.php";

$id= $_GET['email'];
$lapor = mysqli_query($konek, "DELETE from admin where email='$id'");
// $row  = mysqli_fetch_array($user);



// balik he halaman list tbl_materi
// header("location:../tbl_staff.php");
?>

