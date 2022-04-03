<?php
$page = "user";
include 'header.php';
$id_mail = $_GET['setting'];
$mailku = mysqli_query($konek, "SELECT a.*, r.*, u.* FROM admin a JOIN role r JOIN user u WHERE a.email = '$id_mail' AND a.id_role = r.id_role AND a.email = u.email;");
$row = mysqli_fetch_array($mailku);

?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-primary">
            <h6 class="m-0 font-weight-bold text-light">Form User</h6>
        </div>
        <div class="card-body">

            <form action="update/password.php" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" name="email" id="email" class="form-control" placeholder="Email yang aktif" value="<?php echo $row['email'] ?>" readonly>

                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password Baru</label>
                    <div class="col-sm-10">
                        <input type="Password" name="password" id="password" class="form-control" placeholder="Password Email" maxlength="13" value="" required>

                    </div>
                </div>

                

                <div class="form-actions">
                    <a href="index.php" class="btn btn-info mt-2"><i class="fas fa-fw fa-arrow-left"></i> Kembali</a>
                    <button type="submit" class="btn btn-success mt-2"> <i class="fa fa-check"></i> Simpan</button>
                    <button type="reset" class="btn btn-danger mt-2"><i class="fa fa-times"></i> Hapus</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Content Row -->


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<!-- Container fluid  -->

<?php
include 'footer.php';
?>