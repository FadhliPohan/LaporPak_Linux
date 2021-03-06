<?php
$page = "approved";
include 'header.php';

?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tabel Laporan Diterima</h1>
    <p class="mb-4">Data dibawah ini merupakan data yang didapatkan dari seluruh aduan laporan yang telah disetujui oleh staff.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a class="form-row d-flex justify-left">
                <a href="laporan-semua.php" class="m-0 font-weight-bold text-primary wa-20 ">Data Laporan Diterima</a>
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
                        <th>
                            <center><b>No</b></center>
                        </th>
                        <th>
                            <center><b>Nama</b></center>
                        </th>
                        <th>
                            <center><b>No. Tiket</b></center>
                        </th>
                        <th>
                            <center><b>Judul</b></center>
                        </th>
                        <th>
                            <center><b>Tanggal Kejadian</b></center>
                        </th>
                        <th>
                            <center><b>Tanggal laporan</b></center>
                        </th>
                        <th>
                            <center><b>Print</b></center>
                        </th>
                        <th>
                            <center><b>Approve</b></center>
                        </th>

                    </tr>
                <tfoot>
                    <tr>
                        <th>
                            <center><b>No</b></center>
                        </th>
                        <th>
                            <center><b>Nama</b></center>
                        </th>
                        <th>
                            <center><b>No. Tiket</b></center>
                        </th>
                        <th>
                            <center><b>Judul</b></center>
                        </th>
                        <th>
                            <center><b>Tanggal Kejadian</b></center>
                        </th>
                        <th>
                            <center><b>Tanggal laporan</b></center>
                        </th>
                        <th>
                            <center><b>Print</b></center>
                        </th>
                        <th>
                            <center><b>Approve</b></center>
                        </th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php

                    include "../koneksi.php";

                    if (isset($_GET['p_awal']) && isset($_GET['p_akhir'])) {
                        $query = mysqli_query($konek, "SELECT * FROM detail_laporan WHERE tanggal BETWEEN '" . $_GET['p_awal'] . "' and '" . $_GET['p_akhir'] . "'") or die("SQL Anda Salah");
                    } else {

                        $sql = "SELECT d.*, u.*, cb.* FROM detail_laporan d JOIN user u join cek_berkas cb WHERE d.id_user = u.id_user and d.no_tiket=cb.no_tiket and cb.cek_id=1 and cb.cek_berkas=1 AND cb.cek_laporan=1 group by d.id_detail_laporan DESC";
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
                            <td align="center"><a href='cetak/cetak_selesai.php?no_tiket=<?php echo $data['no_tiket']; ?>' class='btn btn-primary '><i class="fas fa-list"></i></a>
                            <td align="center"><a href='surat_selesai.php?no_tiket=<?php echo $data['no_tiket']; ?>' class='btn btn-success '><i class="fas fa-check"></i></a>
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