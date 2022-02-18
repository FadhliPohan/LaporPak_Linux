<?php
$page = 'tindakan';
include 'header.php';



?>

<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-primary">
            <h6 class="m-0 font-weight-bold text-light">Form Input Tindakan Pengerjaan</h6>
        </div>
        <div class="card-body">

            <form action="add/tindakan.php" method="POST" enctype="multipart/form-data">

                <div class="form-group row">
                    <label for="Jenistindakan" class="col-sm-2 col-form-label">Nama Tindakan</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_tindakan" class="form-control" id="nama_tindakan" placeholder="Harap Jenis tindakan Kejahatan" value="" required>

                    </div>
                </div>

                <div class="form-group row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi tindakan</label>
                    <div class="col-sm-10">
                        <textarea rows="6" name="deskripsi_tindakan" class="form-control" id="deskripsi_tindakan" placeholder="Harap isikan deskripsi tindakan pengerjaan dengan lengkap!" value="" required></textarea>

                    </div>
                </div>
                <div class="form-actions">
                    <button href="tbl_tindakan.php" class="btn btn-info mt-2"><i class="fas fa-fw fa-arrow-left"></i> Kembali</button>
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