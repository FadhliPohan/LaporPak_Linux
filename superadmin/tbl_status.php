<?php
$page = "stasus";
include 'header.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Status</h1>
    <p class="mb-4">Data ini merupaka data dari keseluruhan Status Pengerjaan.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data detail Status Pengerjaan</h6>
        </div>


        <div class="card-body">
            <div class="table-responsive table-striped">
                <div class="mb-2">
                    <a href="form-add-status.php" class="btn btn-primary">Tambah Status Pengerjaan <i class="fas fa-fw fa-plus-circle"></i> </a>
                </div>
                <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
                    <thead style="background-color: #3f65d4; color: #FFFFFF;">
                        <tr>
                            <th>No</th>
                            <th>Jenis Klasifikasi</th>
                            <th>Deskripsi</th>
                            <th>Edit</th>
                            <th>Hapus</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Jenis Klasifikasi</th>
                            <th>Deskripsi</th>

                            <th>Edit</th>
                            <th>Hapus</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php

                        include "../koneksi.php";

                        $sql = "SELECT * FROM status;";
                        $query = mysqli_query($konek, $sql) or die("SQL Anda Salah");
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
                                <td><?= $data['nama_status'] ?></td>
                                <td><?= $data['deskripsi_status'] ?></td>
                                <td><a href='form-update-status.php?statusku=<?php echo $data['id_status']; ?>' class='btn btn-warning '><i class="fas fa-pen"></i></a>
                                </td>
                                <td><a href='delete/status.php?status=<?php echo $data['id_status']; ?>' class='btn btn-danger '><i class="fas fa-trash"></i></a>
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