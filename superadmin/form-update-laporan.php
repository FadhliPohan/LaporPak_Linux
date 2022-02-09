<?php
$pages = "semua";
include 'header.php';
$tiket = $_GET['no_tiket'];
$tiketku = mysqli_query($konek, "SELECT d.*, k.*, u.* FROM detail_laporan d JOIN user u JOIN klasifikasi k WHERE d.no_tiket = '$tiket' and u.id_user = d.id_user and k.id_klasifikasi = d.id_klasifikasi");
$row = mysqli_fetch_array($tiketku);


?>

<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-primary">
            <h6 class="m-0 font-weight-bold text-light">Form edit Laporan</h6>
        </div>
        <div class="card-body">

            <form action="update/laporan.php" method="post">
                <div class="form-group row">
                    <label for="no_tiket" class="col-sm-2 col-form-label">No.Tiket</label>
                    <div class="col-sm-3">
                        <input type="text" name="no_tiket" class="form-control" id="no_tiket" placeholder="10 Digit" maxlength="10" value="<?php echo $row['no_tiket'] ?>" readonly>

                    </div>
                </div>
                <div class="form-group row">
                    <label for="judulLaporan" class="col-sm-2 col-form-label">Judul Laporan</label>
                    <div class="col-sm-10">
                        <input type="text" name="judul_laporan" class="form-control" id="judulLaporan" placeholder="Judul Laporan" value="<?php echo $row['judul_laporan'] ?>">

                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-4">
                        <label for="klasifikasi">Klasifikasi Kejahatan</label>
                        <select name="klasifikasi" id="klasifikasi" class="form-control">

                            <option disabled="disabled">--Klasifikasi Jenis Kejahatan--
                            </option>

                            <?php
                            $category = mysqli_query($konek, "SELECT d.*, k.*, u.* FROM detail_laporan d JOIN user u JOIN klasifikasi k WHERE d.no_tiket = '$tiket' and u.id_user = d.id_user and k.id_klasifikasi = d.id_klasifikasi");
                            while ($p = mysqli_fetch_array($category)) {
                                echo "<option value='$p[nama_masalah]' ";
                                if ($row['id_klarifikasi'] == $p['nama_masalah']) {
                                    echo "selected";
                                }
                                echo ">$p[nama_masalah]</option>";
                            }
                            ?>



                        </select>

                    </div>
                    <div class="form-group col-sm-4">
                        <label for="tempatLahir">Lokasi Kejadian</label>
                        <input type="text" class="form-control" name="lokasi_kejadian" id="lokasi_kejadian" placeholder="lokasi_kejadian" value="<?php echo $row['lokasi_kejadian'] ?>">

                    </div>
                    <div class="form-group col-sm-4">
                        <label for="tglKejadian">Tanggal Kejadian</label>
                        <input type="date" class="form-control" name="tgl_kejadian" value="<?php echo $row['tanggal_kejadian'] ?>" id="tglKejadian">

                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-6">
                        <label for="namaSaksi">Saksi</label>
                        <input type="text" name="nama_saksi" id="namaSaksi" class="form-control" placeholder="Nama saksi yang melihat" maxlength="110" value="<?php echo $row['saksi'] ?>">

                    </div>
                    <div class="form-group col-sm-6">
                        <label for="bukti">Bukti</label>
                        <input type="file" name="bukti" id="bukti" class="form-control" placeholder="Bukti yang mendukung" value="">

                    </div>
                </div>
                <div class="form-group row">
                    <label for="Deskripsi" class="col-sm-2 col-form-label">Deskripsi Kejadian</label>
                    <div class="col-sm-10">
                        <textarea rows="6" name="deskripsi" class="form-control" id="Deskripsi" placeholder="Harap isikan alur kejadian dengan lengkap!" value=""> <?php echo $row['isi_laporan'] ?></textarea>

                    </div>
                </div>
                <div class="form-actions">
                    <a href="laporan-semua.php" class="btn btn-info mt-2"><i class="fas fa-fw fa-arrow-left"></i> Kembali</a>
                    <a type="submit" class="btn btn-success mt-2"> <i class="fa fa-check"></i> Simpan</a>
                    <a type="reset" class="btn btn-danger mt-2"><i class="fa fa-times"></i> Hapus</a>
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