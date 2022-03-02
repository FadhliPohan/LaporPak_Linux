<?php
session_start();
include '../../koneksi.php';

// menyimpan hasil inputan kedalam variabel
$id_user          = $_SESSION['id_user'];
$id_klasifikasi   = $_POST['id_klasifikasi'];
$no_tiket         = $_POST['no_tiket'];
$judul_laporan    = $_POST['judul_laporan'];
$isi_laporan      = $_POST['isi_laporan'];
$tanggal_kejadian = $_POST['tanggal_kejadian'];
$lokasi_kejadian  = $_POST['lokasi_kejadian'];
$saksi            = $_POST['saksi'];
$id_status        = '1';
$id_pengerjaan    = '1';
$id_tindakan      = '1';


// upload cover
$file_name      = $_FILES['bukti']['name'];
$file_tmp       = $_FILES['bukti']['tmp_name'];
move_uploaded_file($file_tmp, "../../assets/img/laporan/" . $file_name);

// sintaks sql untuk insert data
$sql            = "UPDATE detail_laporan SET id_klasifikasi='$id_klasifikasi',judul_laporan = '$judul_laporan',isi_laporan='$isi_laporan',tanggal_kejadian='$tanggal_kejadian',lokasi_kejadian= '$lokasi_kejadian',saksi = '$saksi', id_user = '$id_user', lampiran_bukti = '$file_name' WHERE no_tiket='$no_tiket'";


$sql1            = "UPDATE laporan SET id_status= '$id_status',id_tindakan= '$id_tindakan' WHERE no_tiket='$no_tiket'";

$sql2            = "UPDATE penyidikan SET  id_pengerjaan = '1' WHERE no_tiket='$no_tiket'";

// perintah untuk mengeksekusi query di atas
$insert         = mysqli_query($konek, $sql);
$insert1        = mysqli_query($konek, $sql1);
$insert2        = mysqli_query($konek, $sql2);

/*
if($insert){
    echo "insert data berhasil";
}  else {
    echo "insert data gagal";
}
*/
header("location:../laporan-semua.php");
