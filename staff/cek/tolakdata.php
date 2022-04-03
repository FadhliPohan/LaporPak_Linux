<?php
include '../../koneksi.php';

$tiket = $_GET['no_tiket'];
$catatan = $_POST['keterangan_cek'];
$sql = "UPDATE penyidikan SET id_pengerjaan=4 WHERE no_tiket='$tiket'";
$sql1 = "UPDATE cek_berkas SET cek_laporan=2,keterangan_cek='$catatan', tgl_cek_laporan= NOW() WHERE no_tiket='$tiket'";

$insert     = mysqli_query($konek, $sql);
$insert1     = mysqli_query($konek, $sql1);

header("location:../kerja-ditolak.php");
