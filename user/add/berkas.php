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

move_uploaded_file($file_tmp_ktp, "../../assets/img/laporan/" . $ktp_baru);
move_uploaded_file($file_tmp_kk, "../../assets/img/laporan/" . $kk_baru);
move_uploaded_file($file_tmp_berkas, "../../assets/img/laporan/" . $berkas_baru);

if($berkas !=""){
    $sql            = "INSERT INTO detail_berkas (no_tiket,ktp, kk, berkas) VALUES ('$no_tiket','$ktp_baru', '$kk_baru', '$berkas_baru')";
} else {
    $sql            = "INSERT INTO detail_berkas (no_tiket,ktp, kk, berkas) VALUES ('$no_tiket','$ktp_baru', '$kk_baru', NULL)";
}
// sintaks sql untuk insert data
$sql            = "INSERT INTO detail_berkas (no_tiket,ktp, kk, berkas) VALUES ('$no_tiket','$ktp_baru', '$kk_baru', '$berkas_baru')";


// perintah untuk mengeksekusi query di atas
$insert         = mysqli_query($konek, $sql);



header("location:../laporan-semua.php");
