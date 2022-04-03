<?php
session_start();
if (empty($_SESSION['status_login'])) {
    header("location:login.php");
}
include "koneksi.php";

$id_role = $_SESSION['id_role'];



if ($id_role == 1) {
    header("location:../superadmin/");
} elseif ($id_role == 2) {
    header("location:../staff/");
} elseif ($id_role == 3) {
    header("location:../kepala/");
} elseif ($id_role == 4){
    header("location:../user/");
}else {
    header("location:login.php");
}


?>