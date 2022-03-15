<?php
include 'header.php';
$tiket = $_GET['no_tiket'];



?>

<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-primary">
            <h6 class="m-0 font-weight-bold text-light">Form Input Surat Tugas</h6>
        </div>
        <div class="card-body">

            <form action="add/penyidikan.php" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="NOTIKET" class="col-sm-2 col-form-label">No.Tiket</label>
                    <div class="col-sm-3">
                        <input type="text" name="no_tiket" class="form-control" id="no_tiket" placeholder="10 Digit" maxlength="10" value="<?php echo $tiket; ?>" readonly>

                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-sm-4">
                        <label for="klasifikasi">Pelaksana Tugas</label>
                        <select name="id_pengerjaan" id="id_pengerjaan" class="form-control">
                            <option disabled="disabled" selected="selected">--Pilih Tahap Pengerjaan--
                            </option>


                            <?php

                            $tampil4 = mysqli_query($konek, "SELECT * from pengerjaan");
                            while ($row4 = mysqli_fetch_array($tampil4)) {
                            ?>
                                <option value="<?php echo $row4['id_pengerjaan']; ?>"><?php echo $row4['status_pengerjaan']; ?></option>';
                            <?php } ?>



                        </select>

                    </div>
                    <div class="form-group col-sm-4">
                        <label for="aksi">Jadwal Aksi</label>
                        <input type="date" class="form-control" name="tgl_mulai" id="tgl_mulai" placeholder="lokasi Kejadian">

                    </div>
                    <div class="form-group col-sm-4">
                        <label for="tgl_selesai">Jadwal Selesai</label>
                        <input type="date" class="form-control" name="tgl_selesai" id="tgl_selesai">

                    </div>
                </div>

                <div class="form-group row">
                    <label for="hasil" class="col-sm-2 col-form-label">Hasil Penyidikan</label>
                    <div class="col-sm-10">
                        <textarea rows="6" name="hasil" class="form-control" id="hasil" placeholder="Berikan Catatan Hasil Penyidikan!" value=""></textarea>

                    </div>
                </div>
                <div class="form-group row">
                    <label for="keterangan" class="col-sm-2 col-form-label">Catatan Surat Tugas</label>
                    <div class="col-sm-10">
                        <textarea rows="6" name="keterangan" class="form-control" id="keterangan" placeholder="Berikan Catatan Keterangan!" value=""></textarea>

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