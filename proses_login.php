<?php
// menyimpan inputan dari halaman login
$email  = $_POST['email'];
$password   = $_POST['password'];

// memanggil konfigurasi database
include 'koneksi.php';
// perintah SQL untuk chek data ke database
// $sql  = "select * from admin where email='$email'";
$sql ="SELECT a.*, r.*, u.* FROM admin a JOIN role r JOIN user u WHERE a.email = '$email' AND a.id_role = r.id_role AND a.email = u.email;";
$user = mysqli_query($konek, $sql);

// menghitung jumlah data yang ketemu
if (mysqli_num_rows($user) > 0) {
    // kalau berhasil maka dialihkan ke halaman index
    session_start();
    $userData = mysqli_fetch_array($user);

    if (password_verify($password, $userData['password'])) {
        // password benar
        $_SESSION['status_login'] = "sudah_login";
        $_SESSION['email']   = $userData['email'];
        $_SESSION['id_role']   = $userData['id_role'];
        $_SESSION['slug']   = $userData['slug'];
        $_SESSION['foto']   = $userData['foto'];

        if ($userData['id_role'] == 1) {
            echo "<script>alert('Anda Telah Login Sebagai Super Admin');location.href='superadmin/index.php'</script>";
        } elseif ($userData['id_role'] == 2) {
            echo "<script>alert('Anda Telah Login Sebagai Staff Kepolisian');location.href='staff/index.php'</script>";
        } elseif ($userData['id_role'] == 3) {
            echo "<script>alert('Anda Telah Login Sebagai Kepala Kepolisian');location.href='kepala/index.php'</script>";
        } else {
            echo "<script>alert('Anda Telah Login Sebagai Pelapor');location.href='user/index.php'</script>";
        }
    } else {
        echo "<script>alert('Username dan Password tidak terdaftar');location.href='login.php'</script>";
    }
} else {
    // kalau gagal maka balik ke halaman login
    echo "<script>alert('Gagal Login');location.href='login.php'</script>";
}
