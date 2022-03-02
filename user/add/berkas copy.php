<?php
session_start();
include '../../koneksi.php';
$tiket = $_POST['no_tiket'];


// upload cover
$ktp     = $_FILES['ktp']['name'];
$kk      = $_FILES['kk']['name'];
$berkas  = $_FILES['berkas']['name'];

//cek dulu jika ada gambar produk jalankan coding ini
if ($berkas != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg', 'pdf', 'docx', 'doc'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $ktp);
    $y = explode('.', $kk);
    $xz = explode('.', $berkas); //memisahkan nama file dengan ekstensi yang diupload

    $ekstensi = strtolower(end($x, $y, $z));
    $file_tmp_ktp = $_FILES['ktp']['tmp_name'];
    $file_tmp_kk = $_FILES['kk']['tmp_name'];
    $file_tmp_berkas = $_FILES['berkas']['tmp_name'];
    $angka_acak     = rand(1, 999);
    $ktp_baru = $angka_acak . '-' . $ktp;
    $kk_baru = $angka_acak . '-' . $kk;
    $berkas_baru = $angka_acak . '-' . $berkas; //menggabungkan angka acak dengan nama file sebenarnya

    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        move_uploaded_file($file_tmp_ktp, '../../assets/img/laporan/' . $ktp_baru);
        move_uploaded_file($file_tmp_kk, '../../assets/img/laporan/' . $kk_baru);
        move_uploaded_file($file_tmp_berkas, '../../assets/img/laporan/' . $berkas_baru);
        //memindah file gambar ke folder gambar
        // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
        $query = "INSERT INTO detail_berkas (no_tiket,ktp, kk, berkas) VALUES ('$tiket','$ktp_baru', '$kk_baru', '$berkas_baru')";
        $result = mysqli_query($konek, $query);
        // periska query apakah ada error
        if (!$result) {
            die("Query gagal dijalankan: " . mysqli_errno($konek) .
                " - " . mysqli_error($konek));
        } else {
            //tampil alert dan akan redirect ke halaman index.php
            //silahkan ganti index.php sesuai halaman yang akan dituju
            echo "<script>alert('Data berhasil ditambah.');window.location='laporan-semua.php';</script>";
        }
    } else {
        //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
        echo "<script>alert('Ekstensi gambar yang boleh hanya jpg, png,PDF, docx dan doc.');window.location='form-add-berkas.php';</script>";
    }
} else {
    $query = "INSERT INTO detail_berkas (no_tiket,ktp, kk, berkas) VALUES ('$tiket','$ktp_baru', '$kk_baru', NULL)";
    $result = mysqli_query($konek, $query);
    // periska query apakah ada error
    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($konek) .
            " - " . mysqli_error($konek));
    } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
        echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
    }
}
header("location:../laporan-semua.php; ?>");
