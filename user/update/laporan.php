<?php
// menyimpan hasil inputan kedalam variabel

$id_klasifikasi   = $_POST['id_klasifikasi'];
$no_tiket         = $_POST['no_tiket'];
$judul_laporan    = $_POST['judul_laporan'];
$isi_laporan      = $_POST['isi_laporan'];
$tanggal_kejadian = $_POST['tanggal_kejadian'];
$lokasi_kejadian  = $_POST['lokasi_kejadian'];
$saksi            = $_POST['saksi'];
$lapiran_bukti    = $_POST['lapiran_bukti'];



include '../../koneksi.php';

// upload cover
$file_name      = $_FILES['foto']['name'];
$file_tmp       = $_FILES['foto']['tmp_name'];
move_uploaded_file($file_tmp, "../../assets/img/foto/" . $file_name);

// sintaks sql untuk insert data
$sql            = "insert into detail_laporan SET id_$id_klasifikasi='$id_klasifikasi',no_tiket= '$no_tiket',judul_laporan = '$judul_laporan',isi_laporan='$isi_laporan',tanggal_kejadian='$tanggal_kejadian',lokasi_kejadian= '$lokasi_kejadian',saksi = '$saksi',lapiran_bukti='$lapiran_bukti'";

$sql1            = "insert into laporan SET no_tiket='$no_tiket',id_status= '$id_status'";

// perintah untuk mengeksekusi query di atas
$insert         = mysqli_query($konek, $sql);
$insert1         = mysqli_query($konek, $sql1);
/*
if($insert){
    echo "insert data berhasil";
}  else {
    echo "insert data gagal";
}
*/
header("location:../index.php");
