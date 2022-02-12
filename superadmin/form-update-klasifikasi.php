<?php
$page = "klasifikasi";
include 'header.php';
$id_klasifikasi = $_GET['klasifikasiku'];
$klasifikasiku = mysqli_query($konek, "SELECT * FROM klasifikasi WHERE id_klasifikasi = '$id_klasifikasi';");
$row = mysqli_fetch_array($klasifikasiku);

?>

<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-primary">
            <h6 class="m-0 font-weight-bold text-light">Form Input Laporan</h6>
        </div>
        <div class="card-body">

            <form action="update/klasifikasi.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id_klasifikasi" value="<?php echo $id_klasifikasi; ?>">
                <div class="form-group row">
                    <label for="JenisKlasifikasi" class="col-sm-2 col-form-label">Jenis Klasifikasi</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_masalah" class="form-control" id="JenisKlasifikasi" placeholder="Harap Jenis Klasifikasi Kejahatan" value="<?php echo $row['nama_masalah'] ?>" required>

                    </div>
                </div>

                <div class="form-group row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi Klasifikasi</label>
                    <div class="col-sm-10">
                        <textarea rows="6" name="deskripsi" class="form-control" id="Deskripsi" placeholder="Harap isikan alur kejadian dengan lengkap!"> <?php echo $row['deskripsi'] ?></textarea>

                    </div>
                </div>
                <div class="form-actions">
                    <button href="tbl_klasifikasi.php" class="btn btn-info mt-2"><i class="fas fa-fw fa-arrow-left"></i> Kembali</button>
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