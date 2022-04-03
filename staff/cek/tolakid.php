<?php
include '../../koneksi.php';

$tiket = $_GET['no_tiket'];
$sql = "UPDATE penyidikan SET id_pengerjaan=4 WHERE no_tiket='$tiket'";
$sql1 = "UPDATE cek_berkas SET cek_id=2, tgl_cek_id= NOW() WHERE no_tiket='$tiket'";

$insert     = mysqli_query($konek, $sql);
$insert1     = mysqli_query($konek, $sql1);


header("location:../kerja-ditolak.php");
