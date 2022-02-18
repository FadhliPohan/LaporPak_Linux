<?php
include "../../koneksi.php";

$id= $_GET['no_tiket'];
$lapor = mysqli_query($konek, "DELETE from detail_laporan where no_tiket='$id'");
$lapor1 = mysqli_query($konek, "DELETE from laporan where no_tiket='$id'");
$lapor2 = mysqli_query($konek, "DELETE from penyidikan where no_tiket='$id'");
// $row  = mysqli_fetch_array($user);



// balik he halaman list tbl_materi
header("location:../laporan-semua.php");
