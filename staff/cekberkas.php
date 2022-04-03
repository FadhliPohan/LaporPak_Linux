<?php
include 'header.php';
$tiket = $_GET['no_tiket'];
$tiketku = mysqli_query($konek, "SELECT * FROM detail_berkas WHERE no_tiket = '$tiket'");
$row = mysqli_fetch_array($tiketku);


?>

<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-primary">
            <h6 class="m-0 font-weight-bold text-light">Form Input Laporan</h6>
        </div>
        <div class="card-body">

            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="NOTIKET" class="col-sm-2 col-form-label">No.Tiket</label>
                    <div class="col-sm-3">
                        <input type="text" name="no_tiket" class="form-control" id="no_tiket" placeholder="10 Digit" maxlength="10" value="<?php echo  $tiket; ?>" readonly>

                    </div>
                </div>
                <div class="form-group row">
                    <label for="ktp" class="col-sm-2 col-form-label">ID KTP</label>
                    <div class="col-sm-10">
                        <div class="input-group">
                            <input type="file" name="ktp" class="form-control" id="ktp" placeholder="Upload Kartu Tanda Penduduk" value="">
                            <div class="input-group-append">
                                <a target="_blank" href="../assets/img/laporan/<?php echo $row['ktp'] ?>" class="btn btn-success m-1">Lihat disini</a>
                            </div>
                        </div>

                        <h6 class="m-1 font-weight">*note : Tidak perlu diisi bila tidak ingin diubah</h6>
                        <h6 class="m-1 font-weight">*note : Harap Isikan Kartu Tanda Penduduk Anda</h6>


                    </div>


                </div>
                <div class="form-group row">
                    <label for="kk" class="col-sm-2 col-form-label">Kartu Keluarga</label>
                    <div class="col-sm-10">
                        <div class="input-group">
                            <input type="file" name="kk" class="form-control" id="kk" placeholder="Upload Kartu Keluarga" value="">
                            <div class="input-group-append">
                                <a target="_blank" href="../assets/img/laporan/<?php echo $row['kk'] ?>" class="btn btn-success m-1">Lihat disini</a>
                            </div>
                        </div>
                        <h6 class="m-1 font-weight">*note : Tidak perlu diisi bila tidak ingin diubah</h6>
                        <h6 class="m-1 font-weight">*note : Harap Isikan Kartu Keluarga Anda</h6>

                    </div>
                </div>
                <div class="form-group row">
                    <label for="berkas" class="col-sm-2 col-form-label">Berkas</label>
                    <div class="col-sm-10">
                        <div class="input-group">
                            <input type="file" name="berkas" class="form-control" id="berkas" placeholder="Upload Berkas" value="">
                            <div class="input-group-append">
                                <a target="_blank" href="../assets/img/laporan/<?php echo $row['berkas'] ?>" class="btn btn-success m-1">Lihat disini</a>
                            </div>
                        </div>
                        <h6 class="m-1 font-weight">*note : Tidak perlu diisi bila tidak ingin diubah</h6>
                        <h6 class="m-1 font-weight">*note : Harap Isikan Bukti visum/Bukti Berobat Anda terkait Penganiayaan </h6>
                        <h6 class="m-1 font-weight">*note : Harap Isikan STNK/BPKB/Bukti kepemilikan Anda terkait perampokan/pencurian</h6>
                    </div>
                </div>



                <div class="form-actions">
                    <a href="cekid.php" class="btn btn-info mt-2"><i class="fas fa-fw fa-arrow-left"></i> Kembali</a>
                    <a href="cek/berkas.php?no_tiket=<?php echo $tiket; ?>" class="btn btn-success mt-2"><i class="fa fa-check"></i> Diterima</a>
                    <a href="cek/tolakberkas.php?no_tiket=<?php echo $tiket; ?>" class="btn btn-danger mt-2"><i class="fa fa-times"></i> Ditolak</a>
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