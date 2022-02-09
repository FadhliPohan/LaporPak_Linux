<?php
include '../../koneksi.php';
// menyimpan hasil inputan kedalam variabel
$deskripsi        = $_POST['deskripsi'];
$nama_masalah          = $_POST['nama_masalah'];




$sql1 = "INSERT into klasifikasi SET nama_masalah='$nama_masalah' ,deskripsi='$deskripsi'";




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
