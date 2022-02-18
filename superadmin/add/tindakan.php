<?php
include '../../koneksi.php';
// menyimpan hasil inputan kedalam variabel
$nama_tindakan        = $_POST['nama_tindakan'];
$deskripsi_tindakan   = $_POST['deskripsi_tindakan'];




$sql1 = "INSERT into tindakan SET deskripsi_tindakan='$deskripsi_tindakan' ,nama_tindakan='$nama_tindakan'";




// perintah untuk mengeksekusi query di atas
$insert1     = mysqli_query($konek, $sql1);



/*
if($insert){
    echo "insert data berhasil";
}  else {
    echo "insert data gagal";
}
*/
header("location:../tbl_tindakan.php");
