<?php
include "../../koneksi.php";

$id= $_GET['no_tiket'];
$lapor = mysqli_query($konek, "DELETE from detail_laporan where no_tiket='$id'");
// $row  = mysqli_fetch_array($user);



// balik he halaman list tbl_materi
header("location:../laporan-semua.php");
?>

