<?php
include '../../koneksi.php';
// menyimpan hasil inputan kedalam variabel
$id_user        = $_POST['id_user'];
$email          = $_POST['email'];
$nama           = $_POST['nama'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$nik            = $_POST['nik'];
$alamat         = $_POST['alamat'];
$tmp_lahir      = $_POST['tmp_lahir'];
$tgl_lahir      = $_POST['tgl_lahir'];

// $tanggal       = $_POST['tanggal_lahir'];
// $tgl           = explode('-', $tanggal);
// $tanggal_lahir = $tgl[2] . "-" . $tgl[1] . "-" . $tgl[0];

$notlp          = $_POST['notlp'];
$agama          = $_POST['agama'];
$pekerjaan      = $_POST['pekerjaan'];

$file_name      = $_FILES['foto']['name'];
$file_tmp       = $_FILES['foto']['tmp_name'];
move_uploaded_file($file_tmp, "../../assets/img/foto/" . $file_name);
//upload foto
// $image_name   = $_FILES['foto']['name'];
// $image        = $_FILES['foto']['tmp_name'];

// $location     = "../../assets/img/foto/" .$image_name;

// move_uploaded_file($image, $location);



// sintaks sql untuk insert data
// $sql          = "insert into admin SET email='$email',nama= '$nama',jenis_kelamin = '$jenis_kelamin',nik='$nik',alamat='$alamat',tmp_lahir= '$tmp_lahir',tgl_lahir='$tgl_lahir',notlp = '$notlp',agama='$agama',pekerjaan='$pekerjaan',foto='$image_name'";

$sql          = "insert into user SET email='$email',nama= '$nama',jenis_kelamin = '$jenis_kelamin',nik='$nik',alamat='$alamat',tmp_lahir= '$tmp_lahir',no_tlp = '$notlp',agama='$agama',tgl_lahir = '$tgl_lahir',pekerjaan='$pekerjaan',foto='$file_name'";

// perintah untuk mengeksekusi query di atas
$insert       = mysqli_query($konek, $sql);

/*
if($insert){
    echo "insert data berhasil";
}  else {
    echo "insert data gagal";
}
*/
header("location:../tbl_staff.php");
