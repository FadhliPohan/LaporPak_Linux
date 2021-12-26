<?php
include '../../koneksi.php';
// menyimpan hasil inputan kedalam variabel
$id_user        = $_POST['id_user'];
$email          = $_POST['email'];

$options      = array("cost" => 4);
$pass         = password_hash($_POST['password'], PASSWORD_BCRYPT, $options);

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

function create_random($length)
{
    $data = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $string = 'SLUG';
    for ($i = 0; $i <= $length; $i++) {

        $pos = rand(0, strlen($data) - 1);
        $string .= $data[$pos];
    }
    return $string;
}

$slug = Create_random(12);

$idrole = '2';


$sql1 = "INSERT into admin SET email='$email', password='$pass',id_role='$idrole',slug='$slug'";


$sql2          = "insert into user SET email='$email',nama= '$nama',jenis_kelamin = '$jenis_kelamin',nik='$nik',alamat='$alamat',tmp_lahir= '$tmp_lahir',no_tlp = '$notlp',agama='$agama',tgl_lahir = '$tgl_lahir',pekerjaan='$pekerjaan',foto='$file_name'";

// perintah untuk mengeksekusi query di atas
$insert1     = mysqli_query($konek, $sql1);
$insert2     = mysqli_query($konek, $sql2);


/*
if($insert){
    echo "insert data berhasil";
}  else {
    echo "insert data gagal";
}
*/
header("location:../tbl_staff.php");
