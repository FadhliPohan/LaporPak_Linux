<?php
include '../../koneksi.php';

$tiket = $_GET['no_tiket'];
$sql1 = "UPDATE cek_berkas SET cek_berkas=1, tgl_cek_berkas= NOW() WHERE no_tiket='$tiket'";


$insert1     = mysqli_query($konek, $sql1);

header("location:../cekdata.php?no_tiket=$tiket");
