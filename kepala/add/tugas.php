<!-- tgl mulai penyidikan dimulai
update laporan id kelapa menjadi id kepala -->

<?php
include '../../koneksi.php';
session_start();


// menyimpan hasil inputan kedalam variabel
$id_user          = $_SESSION['id_user'];
$no_tiket       = $_POST['no_tiket'];
$id_penerima    = $_POST['id_penerima'];
$jadwal_aksi    = $_POST['jadwal_aksi'];
$jadwal_selesai = $_POST['jadwal_selesai'];
$catatan_surat  = $_POST['catatan_surat'];

$sql1 = "INSERT into surat_tugas SET no_tiket='$no_tiket' ,id_penerima='$id_penerima' ,jadwal_aksi='$jadwal_aksi' ,status_tugas=1 ,jadwal_selesai='$jadwal_selesai' ,catatan_surat='$catatan_surat'";

$sql2 = "UPDATE laporan SET id_tindakan=3,id_status=6,id_kepala='$id_user' WHERE no_tiket='$no_tiket'";
// perintah untuk mengeksekusi query di atas
$insert1     = mysqli_query($konek, $sql1);
$insert1     = mysqli_query($konek, $sql2);



/*
if($insert){
    echo "insert data berhasil";
}  else {
    echo "insert data gagal";
}
*/
header("location:../tbl_surat_tugas.php");
