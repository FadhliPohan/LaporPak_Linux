<!-- tgl mulai penyidikan dimulai
update laporan id kelapa menjadi id kepala -->

<?php
include '../../koneksi.php';



// menyimpan hasil inputan kedalam variabel

$no_tiket       = $_POST['no_tiket'];
$id_pengerjaan  = $_POST['id_pengerjaan'];
$tgl_mulai      = $_POST['tgl_mulai'];
$tgl_selesai    = $_POST['tgl_selesai'];
$hasil  = $_POST['hasil'];
$keterangan  = $_POST['keterangan'];

$sql1 = "UPDATE penyidikan SET id_pengerjaan='$id_pengerjaan' ,tgl_mulai='$tgl_mulai' ,tgl_selesai='$tgl_selesai' ,keterangan_penyidikan='$keterangan',hasil_penyidikan='$hasil' WHERE no_tiket='$no_tiket'";

// perintah untuk mengeksekusi query di atas
$insert1     = mysqli_query($konek, $sql1);




/*
if($insert){
    echo "insert data berhasil";
}  else {
    echo "insert data gagal";
}
*/
header("location:../tbl_surat_tugas.php");
