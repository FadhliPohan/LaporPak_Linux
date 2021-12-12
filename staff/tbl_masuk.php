<?php
$page = "masuk";
include 'header.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Laporan Sudah Diverifikasi</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
            
        
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>Jenis Kelamin</th>
                        <th>Pekerjaan</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>Jenis Kelamin</th>
                        <th>Pekerjaan</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php

                    include "../koneksi.php";

                    $sql = "SELECT * FROM user";
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
                            <td><?= $data['nama'] ?></td>
                            <td><?= $data['NIK'] ?></td>
                            <td><?= $data['jenis_kelamin'] ?></td>
                            <td><?= $data['pekerjaan'] ?></td>
                            <td><?= $data['alamat'] ?></td>
                            <td><a href='user/edit_user.php?id=$row[id_user]' class='btn btn-success btn-sm'>Edit</a>
                <a href='user/delete_user.php?id=$row[id_user]' class='btn btn-info btn-sm'>Delete</a></td>
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