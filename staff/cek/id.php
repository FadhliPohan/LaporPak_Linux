<?php
include '../../koneksi.php';

$id_klasifikasi     = $_POST['id_klasifikasi'];
// menyimpan hasil inputan kedalam variabel
$nama_masalah       = $_POST['nama_masalah'];
$deskripsi          = $_POST['deskripsi'];



$sql1 = "UPDATE klasifikasi SET  deskripsi='$deskripsi' ,nama_masalah='$nama_masalah' WHERE id_klasifikasi='$id_klasifikasi'";




// perintah untuk mengeksekusi query di atas
$insert1     = mysqli_query($konek, $sql1);



/*
if($insert){
    echo "insert data berhasil";
}  else {
    echo "insert data gagal";
}
*/
header("location:../tbl_klasifikasi.php");
