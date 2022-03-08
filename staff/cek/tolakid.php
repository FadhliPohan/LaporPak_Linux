<?php
include '../../koneksi.php';

$tiket = $_GET['no_tiket'];
$sql1 = "UPDATE cek_berkas SET cek_id=2, tgl_cek_id= NOW() WHERE no_tiket='$tiket'";


$insert1     = mysqli_query($konek, $sql1);


header("location:../cekberkas.php?no_tiket=$tiket");
