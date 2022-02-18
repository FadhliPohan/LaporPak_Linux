<?php
include "../../koneksi.php";

$id = $_GET['tindakanku'];
$tindakan = mysqli_query($konek, "DELETE from tindakan where id_tindakan='$id'");

// $row  = mysqli_fetch_array($tindakan);



// balik he halaman list tbl_tindakan
header("location:../tbl_tindakan.php");
