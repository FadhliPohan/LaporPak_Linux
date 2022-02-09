<?php
$page = "klasifikasi";
include 'header.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Klasifikasi</h1>
    <p class="mb-4">Data ini merupaka data dari semua jenis klasifikasi kejahatan.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data detail Klasifikasi kejahatan</h6>
        </div>


        <div class="card-body">
            <div class="table-responsive table-striped">
                <div class="mb-2">
                    <a href="form-add-klasifikasi.php" class="btn btn-primary">Tambah klasifikasi Kejahatan <i class="fas fa-fw fa-plus-circle"></i> </a>
                </div>
                <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
                    <thead style="background-color: #3f65d4; color: #FFFFFF;">
                        <tr>
                            <th>No</th>
                            <th>Jenis Kejahatan</th>
                            <th>Deskripsi Kejahatan</th>

                            <th>Edit</th>
                            <th>Hapus</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Jenis Kejahatan</th>
                            <th>Deskripsi Kejahatan</th>

                            <th>Edit</th>
                            <th>Hapus</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php

                        include "../koneksi.php";

                        $sql = "SELECT * FROM klasifikasi;";
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
                                <td><?= $data['nama_masalah'] ?></td>
                                <td><?= $data['deskripsi'] ?></td>
                                <td><a href='form-update-klasifikasi.php?klasifikasiku=<?php echo $data['id_klasifikasi']; ?>' class='btn btn-warning '><i class="fas fa-pen"></i></a>
                                </td>
                                <td><a href='delete/klasifikasi.php?klasifikasi=<?php echo $data['id_klasifikasi']; ?>' class='btn btn-danger '><i class="fas fa-trash"></i></a>
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