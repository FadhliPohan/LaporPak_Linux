<?php
// menyimpan hasil inputan kedalam variabel

$id_klasifikasi   = $_POST['id_klasifikasi'];
$no_tiket         = $_POST['no_tiket'];
$judul_laporan    = $_POST['judul_laporan'];
$isi_laporan      = $_POST['isi_laporan'];
$tanggal_kejadian = $_POST['tanggal_kejadian'];
$lokasi_kejadian  = $_POST['lokasi_kejadian'];
$saksi            = $_POST['saksi'];


include '../../koneksi.php';

// upload cover
$bukti      = $_FILES['bukti']['name'];

$bukti_baru = $no_tiket . '-' . $bukti;

$file_tmp       = $_FILES['bukti']['tmp_name'];

move_uploaded_file($file_tmp, "../../assets/img/laporan/" . $bukti_baru);

// sintaks sql untuk insert data


// $sql            = "UPDATE `detail_laporan` SET `id_klasifikasi` = '$id_klasifikasi',`judul_laporan` = '$judul_laporan',`tanggal_kejadian` = '$tanggal_kejadian', `isi_laporan` = '$isi_laporan', `lokasi_kejadian` = '$lokasi_kejadian', `saksi` = '$saksi', 'lampiran_bukti' = '$bukti_baru' WHERE `no_tiket`= $no_tiket;";

if ($bukti != "") {
    $sql            = "UPDATE detail_laporan SET id_klasifikasi='$id_klasifikasi', judul_laporan = '$judul_laporan',isi_laporan='$isi_laporan',tanggal_kejadian='$tanggal_kejadian',lokasi_kejadian= '$lokasi_kejadian',saksi = '$saksi', lampiran_bukti = '$bukti_baru' WHERE no_tiket= '$no_tiket'";
} else {
    $sql            = "UPDATE detail_laporan SET id_klasifikasi='$id_klasifikasi', judul_laporan = '$judul_laporan',isi_laporan='$isi_laporan',tanggal_kejadian='$tanggal_kejadian',lokasi_kejadian= '$lokasi_kejadian',saksi = '$saksi' WHERE no_tiket= '$no_tiket'";
}

// perintah untuk mengeksekusi query di atas
$insert         = mysqli_query($konek, $sql);

/*
if($insert){
    echo "insert data berhasil";
}  else {
    echo "insert data gagal";
}
*/
header("location:../index.php");
