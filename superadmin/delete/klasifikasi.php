<?php
include "../../koneksi.php";

$id = $_GET['klasifikasiku'];
$status = mysqli_query($konek, "DELETE from status where id_klasifikasi='$id'");

// $row  = mysqli_fetch_array($klasifikasi);



// balik he halaman list tbl_klasifikasi
header("location:../tbl_klasifikasi.php");
