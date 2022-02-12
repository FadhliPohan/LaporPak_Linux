<?php
$page = "status";
include 'header.php';
$id_status = $_GET['statusku'];
$statusku = mysqli_query($konek, "SELECT * FROM status WHERE id_status = '$id_status';");
$row = mysqli_fetch_array($statusku);

?>

<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-primary">
            <h6 class="m-0 font-weight-bold text-light">Form Input Laporan</h6>
        </div>
        <div class="card-body">

            <form action="update/status.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id_status" value="<?php echo $id_status; ?>">
                <div class="form-group row">
                    <label for="Jenisstatus" class="col-sm-2 col-form-label">Jenis status</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_status" class="form-control" id="Jenisstatus" placeholder="Harap Jenis status Kejahatan" value="<?php echo $row['nama_status'] ?>" required>

                    </div>
                </div>

                <div class="form-group row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi status</label>
                    <div class="col-sm-10">
                        <textarea rows="6" name="deskripsi_status" class="form-control" id="Deskripsi" placeholder="Harap isikan alur kejadian dengan lengkap!"> <?php echo $row['deskripsi_status'] ?></textarea>

                    </div>
                </div>
                <div class="form-actions">
                    <button href="tbl_status.php" class="btn btn-info mt-2"><i class="fas fa-fw fa-arrow-left"></i> Kembali</button>
                    <button type="submit" class="btn btn-success mt-2"> <i class="fa fa-check"></i> Update</button>
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