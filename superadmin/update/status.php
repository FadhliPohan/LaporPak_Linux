<?php
include '../../koneksi.php';

$id_status = $_POST['id_status'];
// menyimpan hasil inputan kedalam variabel
$nama_status        = $_POST['nama_status'];
$deskripsi_status   = $_POST['deskripsi_status'];



$sql1 = "UPDATE status SET  deskripsi_status='$deskripsi_status' ,nama_status='$nama_status' WHERE id_status='$id_status'";




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
