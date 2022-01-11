<?php
// menyimpan hasil inputan kedalam variabel

$id_klasifikasi   = $_POST['id_klasifikasi'];
$no_tiket         = $_POST['no_tiket'];
$judul_laporan    = $_POST['judul_laporan'];
$isi_laporan      = $_POST['isi_laporan'];
$tanggal_kejadian = $_POST['tanggal_kejadian'];
$lapiran_bukti    = $_POST['lapiran_bukti'];


include '../koneksi.php';

// upload cover
$file_name      = $_FILES['foto']['name'];
$file_tmp       = $_FILES['foto']['tmp_name'];
move_uploaded_file($file_tmp, "../../assets/img/foto/" . $file_name);

// sintaks sql untuk insert data
$sql              = "insert into tbl_materi SET id='$id',title= '$title',category='$category',
    url           = '$url',urlToImage='$urlToImage'";
// perintah untuk mengeksekusi query di atas
$insert           = mysqli_query($konek, $sql);
/*
if($insert){
    echo "insert data berhasil";
}  else {
    echo "insert data gagal";
}
*/
header("location:../index.php");
