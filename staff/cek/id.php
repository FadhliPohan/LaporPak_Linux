<?php
include '../../koneksi.php';

session_start();
$id_user          = $_SESSION['id_user'];


// menyimpan hasil inputan kedalam variabel
$id_user          = $_SESSION['id_user'];
$tiket = $_GET['no_tiket'];
$sql = "UPDATE laporan SET id_tindakan=2,id_status=3,id_staff='$id_user' tanggal_pemeriksa NOW() WHERE no_tiket='$tiket'";

$sql1 = "UPDATE cek_berkas SET cek_id=1, tgl_cek_id= NOW() WHERE no_tiket='$tiket'";



$insert     = mysqli_query($konek, $sql);
$insert1     = mysqli_query($konek, $sql1);


header("location:../cekberkas.php?no_tiket=$tiket");
