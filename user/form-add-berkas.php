<?php
include 'header.php';
$tiket = $_GET['no_tiket'];
function create_random($length)
{
    $data = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $string = '';
    for ($i = 0; $i < $length; $i++) {
        $pos = rand(0, strlen($data) - 1);
        $string .= $data[$pos];
    }
    return $string;
}


?>

<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-primary">
            <h6 class="m-0 font-weight-bold text-light">Form Input Laporan</h6>
        </div>
        <div class="card-body">

            <form action="add/berkas.php" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="NOTIKET" class="col-sm-2 col-form-label">No.Tiket</label>
                    <div class="col-sm-3">
                        <input type="text" name="no_tiket" class="form-control" id="no_tiket" placeholder="10 Digit" maxlength="10" value="<?php echo  $tiket; ?>" readonly>

                    </div>
                </div>
                <div class="form-group row">
                    <label for="ktp" class="col-sm-2 col-form-label">ID KTP</label>
                    <div class="col-sm-10">
                        <input type="file" name="ktp" class="form-control" id="ktp" placeholder="Upload Kartu Tanda Penduduk" value="" required>
                        <h6 class="m-1 font-weight">*note : Harap Isikan Kartu Tanda Penduduk Anda</h6>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kk" class="col-sm-2 col-form-label">Kartu Keluarga</label>
                    <div class="col-sm-10">
                        <input type="file" name="kk" class="form-control" id="kk" placeholder="Upload Kartu Keluarga" value="" required>
                        <h6 class="m-1 font-weight">*note : Harap Isikan Kartu Keluarga Anda</h6>

                    </div>
                </div>
                <div class="form-group row">
                    <label for="berkas" class="col-sm-2 col-form-label">Berkas</label>
                    <div class="col-sm-10">
                        <input type="file" name="berkas" class="form-control" id="berkas" placeholder="Upload Berkas" value="">
                        <h6 class="m-1 font-weight">*note : Harap Isikan Bukti visum/Bukti Berobat Anda terkait Penganiayaan </h6>
                        <h6 class="m-1 font-weight">*note : Harap Isikan STNK/BPKB/Bukti kepemilikan Anda terkait perampokan/pencurian</h6>
                    </div>
                </div>



                <div class="form-actions">
                    <button href="laporan-semua.php" class="btn btn-info mt-2"><i class="fas fa-fw fa-arrow-left"></i> Kembali</button>
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