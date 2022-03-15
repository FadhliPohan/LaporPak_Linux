<?php
include '../../koneksi.php';

$tiket = $_GET['no_tiket'];
$sql1 = "UPDATE cek_berkas SET cek_berkas=1, tgl_cek_berkas= NOW() WHERE no_tiket='$tiket'";
$sql2 = "UPDATE penyidikan SET id_pengerjaan=2 WHERE no_tiket='$tiket'";

$insert2     = mysqli_query($konek, $sql2);

$insert1     = mysqli_query($konek, $sql1);

header("location:../cekdata.php?no_tiket=$tiket");
