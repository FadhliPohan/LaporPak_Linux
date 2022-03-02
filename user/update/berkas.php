<?php
session_start();
include '../../koneksi.php';

$no_tiket         = $_POST['no_tiket'];
$ktp     = $_FILES['ktp']['name'];
$kk      = $_FILES['kk']['name'];
$berkas  = $_FILES['berkas']['name'];


$ktp_baru = $no_tiket . '-' . $ktp;
$kk_baru = $no_tiket . '-' . $kk;
$berkas_baru = $no_tiket . '-' . $berkas;

$file_tmp_ktp      = $_FILES['ktp']['tmp_name'];
$file_tmp_kk       = $_FILES['kk']['tmp_name'];
$file_tmp_berkas   = $_FILES['berkas']['tmp_name'];

//pindahkan file
move_uploaded_file($file_tmp_ktp, "../../assets/img/laporan/" . $ktp_baru);
move_uploaded_file($file_tmp_kk, "../../assets/img/laporan/" . $kk_baru);
move_uploaded_file($file_tmp_berkas, "../../assets/img/laporan/" . $berkas_baru);

// sintaks sql untuk insert data
if ($ktp != "") {
    $sql            = "UPDATE detail_berkas SET ktp='$ktp_baru' where no_tiket='$no_tiket'";

    // perintah untuk mengeksekusi query di atas
    $insert         = mysqli_query($konek, $sql);
}
if ($kk != "") {
    $sql            = "UPDATE detail_berkas SET kk='$kk_baru' where no_tiket='$no_tiket'";

    // perintah untuk mengeksekusi query di atas
    $insert         = mysqli_query($konek, $sql);
}
if ($berkas != "") {
    $sql            = "UPDATE detail_berkas SET berkas='$berkas_baru' where no_tiket='$no_tiket'";

    // perintah untuk mengeksekusi query di atas
    $insert         = mysqli_query($konek, $sql);
}




header("location:../laporan-semua.php");
