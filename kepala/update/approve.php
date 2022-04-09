
<?php
include '../../koneksi.php';



// menyimpan hasil inputan kedalam variabel

$no_tiket       = $_GET['no_tiket'];


$sql1 = "UPDATE laporan SET id_status='2', id_tindakan='5' WHERE no_tiket='$no_tiket'";

// perintah untuk mengeksekusi query di atas
$insert1     = mysqli_query($konek, $sql1);




/*
if($insert){
    echo "insert data berhasil";
}  else {
    echo "insert data gagal";
}
*/
header("location:../tbl_selesai_tugas.php");
