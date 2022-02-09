<?php
include "../../koneksi.php";

$id = $_GET['statusku'];
$status = mysqli_query($konek, "DELETE from status where id_status='$id'");

// $row  = mysqli_fetch_array($status);



// balik he halaman list tbl_status
header("location:../tbl_status.php");
