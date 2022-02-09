<?php
$page = 'status';
include 'header.php';



?>

<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-primary">
            <h6 class="m-0 font-weight-bold text-light">Form Input Status Pengerjaan</h6>
        </div>
        <div class="card-body">

            <form action="add/status.php" method="POST" enctype="multipart/form-data">

                <div class="form-group row">
                    <label for="Jenisstatus" class="col-sm-2 col-form-label">Nama Pengerjaan</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_status" class="form-control" id="nama_status" placeholder="Harap Jenis status Kejahatan" value="" required>

                    </div>
                </div>

                <div class="form-group row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi status</label>
                    <div class="col-sm-10">
                        <textarea rows="6" name="deskripsi_status" class="form-control" id="deskripsi_status" placeholder="Harap isikan deskripsi status pengerjaan dengan lengkap!" value="" required></textarea>

                    </div>
                </div>
                <div class="form-actions">
                    <button href="tbl_status.php" class="btn btn-info mt-2"><i class="fas fa-fw fa-arrow-left"></i> Kembali</button>
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