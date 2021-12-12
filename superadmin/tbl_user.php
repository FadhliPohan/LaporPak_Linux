<?php
$page = "user";
include 'header.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Pelapor</h1>
<p class="mb-4">Data ini merupkan data dari para pelapor.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Datail User</h6>
    </div>

    <div class="card-body">
        <div class="table-responsive table-striped">
        <div class="mb-2">
                    <a href="form-add-user.php" class="btn btn-info">Tambah User <i class="fas fa-fw fa-plus-circle"></i> </a>
                </div>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-dark">
                <tr>
                        <th>No</th>
                        <th>Email</th>
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
                        <th>Email</th>
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

                    $sql = "SELECT a.*, r.*, u.* FROM admin a JOIN role r JOIN user u WHERE a.id_role = 1 AND a.id_role = r.id_role AND a.id_user = u.id_user;";
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
                            <td><?= $data['email'] ?></td>
                            <td><?= $data['nama'] ?></td>
                            <td><?= $data['NIK'] ?></td>
                            <td><?= $data['jenis_kelamin'] ?></td>
                            <td><?= $data['pekerjaan'] ?></td>
                            <td><?= $data['alamat'] ?></td>
                            <td><a href='edit/user.php?email=<?php echo $data['email']; ?>' class='btn btn-info btn-circle'><i class="fas fa-info-circle"></i></a>
                                <a href='delete/user.php?email=<?php echo $data['email']; ?>'class='btn btn-danger btn-circle'><i class="fas fa-trash"></i></a></td>
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