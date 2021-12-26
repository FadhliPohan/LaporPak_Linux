<?php
// menyimpan hasil inputan kedalam variabel
$id_user        = $_POST['id_user'];
$email          = $_POST['email'];
$slug           = $_POST['slug'];
$nama           = $_POST['nama'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$nik            = $_POST['nik'];
$alamat         = $_POST['alamat'];
$tmp_lahir      = $_POST['tmp_lahir'];
$tgl_lahir      = $_POST['tgl_lahir'];
$notlp          = $_POST['notlp'];
$agama          = $_POST['agama'];
$pekerjaan      = $_POST['pekerjaan'];
$foto           = $_POST['foto'];


include '../koneksi.php';

// upload cover
$file_name      = $_FILES['cover']['name'];
$file_tmp       = $_FILES['cover']['tmp_name'];
move_uploaded_file($file_tmp,"cover/".$file_name);

// sintaks sql untuk insert data
$sql            = "insert into tbl_materi SET id='$id',title= '$title',category='$category',
    url = '$url',urlToImage='$urlToImage'";
// perintah untuk mengeksekusi query di atas
$insert         = mysqli_query($konek, $sql);
/*
if($insert){
    echo "insert data berhasil";
}  else {
    echo "insert data gagal";
}
*/
header("location:../index.php");
?>
