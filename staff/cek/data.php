<?php
session_start();
include '../../koneksi.php';

$id_user    = $_SESSION['id_user'];
$tiket      = $_GET['no_tiket'];

$catatan    = $_POST['keterangan_cek'];
$sql1   = "UPDATE cek_berkas SET cek_laporan=1,keterangan_cek='$catatan', tgl_cek_laporan= NOW() WHERE no_tiket='$tiket'";
$sql    = "UPDATE laporan SET id_tindakan=4,id_status=3, tanggal_periksa= NOW(),id_staff='$id_user' WHERE no_tiket='$tiket'";
$sql2 = "UPDATE penyidikan SET id_pengerjaan=2 WHERE no_tiket='$tiket'";

$insert2     = mysqli_query($konek, $sql2);
$insert1    = mysqli_query($konek, $sql1);
$insert     = mysqli_query($konek, $sql);

header("location:../laporan-semua.php");
