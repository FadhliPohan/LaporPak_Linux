<?php
include '../../koneksi.php';

$id_tindakan = $_POST['id_tindakan'];
// menyimpan hasil inputan kedalam variabel
$nama_tindakan        = $_POST['nama_tindakan'];
$deskripsi_tindakan   = $_POST['deskripsi_tindakan'];



$sql1 = "UPDATE tindakan SET  deskripsi_tindakan='$deskripsi_tindakan' ,nama_tindakan='$nama_tindakan' WHERE id_tindakan='$id_tindakan'";




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
