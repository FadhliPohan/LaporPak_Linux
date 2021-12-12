<?php
$page = "selesai";
include 'header.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Laporan Selesai</h1>
    <p class="mb-4">Data pada tabel ini merupaka dari bererapa data dari laporan yang telah selesai dikerjakan.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTable</h6>
        </div>


        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No.Tiket</th>
                            <th>Nama</th>
                            <th>Judul</th>
                            <th>Tanggal Kejadian</th>
                            <th>Tanggal laporan</th>
                            <th>Bukti</th>
                            <th>Aksi</th>
                        </tr>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>No.Tiket</th>
                            <th>Nama</th>
                            <th>Judul</th>
                            <th>Tanggal Kejadian</th>
                            <th>Tanggal laporan</th>
                            <th>Bukti</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php

                        include "../koneksi.php";

                        if (isset($_GET['p_awal']) && isset($_GET['p_akhir'])) {
                            $query = mysqli_query($konek, "SELECT * FROM detail_laporan WHERE tanggal BETWEEN '" . $_GET['p_awal'] . "' and '" . $_GET['p_akhir'] . "'") or die("SQL Anda Salah");
                        } else {

                            $sql = "SELECT d.*, u.* FROM detail_laporan d JOIN user u WHERE d.id_user = u.id_user group by d.id_detail_laporan DESC";
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
                                <td><?= $data['no_tiket'] ?></td>
                                <td><?= $data['nama'] ?></td>
                                <td><?= $data['judul_laporan'] ?></td>
                                <td><?= $data['tanggal_kejadian'] ?></td>
                                <td><?= $data['tanggal'] ?></td>
                                <td><?= $data['lampiran_bukti'] ?></td>
                                <td><a href='edit/laporan.php?no_tiket=<?php echo $data['no_tiket']; ?>' class='btn btn-info btn-circle'><i class="fas fa-info-circle"></i></a>
                                    <a href='delete/laporan.php?no_tiket=<?php echo $data['no_tiket']; ?>' class='btn btn-danger btn-circle'><i class="fas fa-trash"></i></a>
                                </td>
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