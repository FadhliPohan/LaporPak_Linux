<?php
include '../../koneksi.php';
// menyimpan hasil inputan kedalam variabel


$nama           = $_POST['nama'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$nik            = $_POST['nik'];
$alamat         = $_POST['alamat'];
$tmp_lahir      = $_POST['tmp_lahir'];
$tgl_lahir      = $_POST['tgl_lahir'];

$notlp          = $_POST['notlp'];
$agama          = $_POST['agama'];
$pekerjaan      = $_POST['pekerjaan'];

$file_name      = $_FILES['foto']['name'];
$file_tmp       = $_FILES['foto']['tmp_name'];
move_uploaded_file($file_tmp, "../../assets/img/foto/" . $file_name);

if($file_name != ""){
    $sql2 = "UPDATE user SET nama= '$nama',jenis_kelamin = '$jenis_kelamin',alamat='$alamat',tmp_lahir= '$tmp_lahir',no_tlp = '$notlp',agama='$agama',tgl_lahir = '$tgl_lahir',pekerjaan='$pekerjaan', foto='$file_name' where nik='$nik'";  
}else{
    $sql2 = "UPDATE user SET nama= '$nama',jenis_kelamin = '$jenis_kelamin',alamat='$alamat',tmp_lahir= '$tmp_lahir',no_tlp = '$notlp',agama='$agama',tgl_lahir = '$tgl_lahir',pekerjaan='$pekerjaan' where nik='$nik'";
}


// perintah untuk mengeksekusi query di atas

$update2     = mysqli_query($konek, $sql2);



if($update2){
    echo "insert data berhasil";
}  else {
    echo "insert data gagal";
}

header("location:../index.php");
