<!-- surat tugas dari notiket ke staff -->

<?php
session_start();

$id_user    = $_SESSION['id_user'];
$page = "surat_tugas";
include 'header.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tabel Surat Tugas</h1>
    <p class="mb-4">Data dibawah ini merupakan data surat tugas yang harus dikerjakan.</p>

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
                        <th>Status</th>
                        <th align="center">Cek Surat Tugas</th>
                        <th>Laporkan</th>
                    </tr>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>No.Tiket</th>
                        <th>Judul</th>
                        <th>Tanggal Kejadian</th>
                        <th>Tanggal laporan</th>
                        <th>Status</th>
                        <th>Cek Surat Tugas</th>
                        <th>Laporkan</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php

                    include "../koneksi.php";

                    if (isset($_GET['p_awal']) && isset($_GET['p_akhir'])) {
                        $query = mysqli_query($konek, "SELECT * FROM detail_laporan WHERE tanggal BETWEEN '" . $_GET['p_awal'] . "' and '" . $_GET['p_akhir'] . "'") or die("SQL Anda Salah");
                    } else {

                        $sql = "SELECT d.*, u.*, st.*, p.* FROM detail_laporan d JOIN user u JOIN surat_tugas st JOIN penyidikan p WHERE d.id_user = u.id_user and st.no_tiket = d.no_tiket and d.no_tiket = p.no_tiket and p.id_pengerjaan =2 group by d.id_detail_laporan DESC";
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
                            <td align="center"><a href='surat_tugas.php?no_tiket=<?php echo $data['no_tiket']; ?>' class='btn btn-primary'><i class="fas fa-print"></i></a>
                            <td align="center"><a href='form-add-penyidikan.php?no_tiket=<?php echo $data['no_tiket']; ?>' class='btn btn-success'><i class="fas fa-add"></i></a>
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