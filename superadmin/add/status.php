<?php
include '../../koneksi.php';
// menyimpan hasil inputan kedalam variabel
$nama_status        = $_POST['nama_status'];
$deskripsi_status   = $_POST['deskripsi_status'];




$sql1 = "INSERT into status SET deskripsi_status='$deskripsi_status' ,nama_status='$nama_status'";




// perintah untuk mengeksekusi query di atas
$insert1     = mysqli_query($konek, $sql1);



/*
if($insert){
    echo "insert data berhasil";
}  else {
    echo "insert data gagal";
}
*/
header("location:../tbl_status.php");
