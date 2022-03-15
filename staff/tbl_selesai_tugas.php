<?php
$page = "semua";
include 'header.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tabel Semua Laporan</h1>
    <p class="mb-4">Data dibawah ini merupakan data yang didapatkan dari seluruh aduan laporan yang dilaporkkan oleh pelapor.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a class="form-row d-flex justify-left">
                <a href="laporan-semua.php" class="m-0 font-weight-bold text-primary wa-20 ">Data Keseluruhan Laporan</a>
                <i class="bi bi-arrow-repeat"></i>
            </a>

        </div>
        <div class="card-body">
            <div class="table-responsive table-striped">

                <form action="laporan-semua.php" method="get">
                    <div class="form-row">
                        <div class="form-group col-sm-4">
                            <label for="p_awal">Periode Awal</label>
                            <input type="date" class="form-control" name="p_awal" id="p_awal">

                        </div>

                        <div class="form-group col-sm-4">
                            <label for="p_akhir">Periode Akhir</label>
                            <input type="date" class="form-control" name="p_akhir" id="p_akhir">

                        </div>

                        <div class="form-group col-sm-4">
                            <label for="p_akhir">Periksa</label>
                            <input class="btn btn-primary btn-block  " name="mencari " type="submit" value="Cari">

                        </div>

                </form>

            </div>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead style="background-color: #3f65d4; color: #FFFFFF;">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>No.Tiket</th>
                        <th>Judul</th>
                        <th>Tanggal Kejadian</th>
                        <th>Tanggal laporan</th>
                        <th>Bukti</th>
                    </tr>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>No.Tiket</th>
                        <th>Judul</th>
                        <th>Tanggal Kejadian</th>
                        <th>Tanggal laporan</th>
                        <th>Bukti</th>

                    </tr>
                </tfoot>
                <tbody>
                    <?php

                    include "../koneksi.php";

                    if (isset($_GET['p_awal']) && isset($_GET['p_akhir'])) {
                        $query = mysqli_query($konek, "SELECT d.*, u.*,s.*, l.*, p.*, pe.* FROM detail_laporan d JOIN user u JOIN status s JOIN laporan l JOIN penyidikan p JOIN pengerjaan pe WHERE d.id_user = u.id_user and d.no_tiket = l.no_tiket and l.id_status= s.id_status and p.id_pengerjaan = p.id_pengerjaan and p.id_pengerjaan = '7' and tanggal BETWEEN '" . $_GET['p_awal'] . "' and '" . $_GET['p_akhir'] . "'") or die("SQL Anda Salah");
                    } else {

                        $sql = "SELECT d.*, u.*,s.*, l.*, p.*, pe.* FROM detail_laporan d JOIN user u JOIN status s JOIN laporan l JOIN penyidikan p JOIN pengerjaan pe WHERE d.id_user = u.id_user and d.no_tiket = l.no_tiket and l.id_status= s.id_status and p.id_pengerjaan = p.id_pengerjaan and p.id_pengerjaan = '7' group by d.id_detail_laporan DESC";
                        // $sql = "SELECT d.* , u.* from detail d join user u join user where d.id = u.id and d.id =u.lokasi on ";
                        // $sql = "SELECT * FROM detail_laporan group by id_detail_laporan DESC";
                        $query = mysqli_query($konek, $sql) or die("SQL Anda Salah");
                    }
                    //Baca hasil query dari databse, gunakan perulangan untuk 
                    //Menampilkan data lebh dari satu. disini akan digunakan
                    //while dan fungdi mysqli_fecth_array
                    //Membuat variabel untuk menampilkan nomor urut
                    $nomor = 0;
                    //Melakukan perulangan u/menampilkan data
                    while ($data = mysqli_fetch_array($query)) {
                        $nomor++; //Penambahan satu untuk nilai var nomor
                    ?>
                        <tr>
                            <td><?= $nomor ?></td>
                            <td><?= $data['nama'] ?></td>
                            <td><?= $data['no_tiket'] ?></td>
                            <td><?= $data['judul_laporan'] ?></td>
                            <td><?= $data['tanggal_kejadian'] ?></td>
                            <td><?= $data['tanggal'] ?></td>
                            <td><?= $data['lampiran_bukti'] ?></td>

                        </tr>

                        <!--Tutup Perulangan data-->
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php
include 'footer.php';
?>