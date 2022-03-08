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
            <h6 class="m-0 font-weight-bold text-light">Form Input Laporan</h6>
        </div>
        <div class="card-body">

            <form action="update/laporan.php" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="NOTIKET" class="col-sm-2 col-form-label">No.Tiket</label>
                    <div class="col-sm-3">
                        <input type="text" name="no_tiket" class="form-control" id="no_tiket" placeholder="10 Digit" maxlength="10" value="<?php echo  $row['no_tiket'] ?>" readonly>

                    </div>
                </div>
                <div class="form-group row">
                    <label for="judulLaporan" class="col-sm-2 col-form-label">Judul Laporan</label>
                    <div class="col-sm-10">
                        <input type="text" name="judul_laporan" class="form-control" id="judul_laporan" placeholder="Judul Laporan" value="<?php echo  $row['judul_laporan'] ?>">

                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-4">
                        <label for="klasifikasi">Klasifikasi Kejahatan</label>
                        <select name="id_klasifikasi" id="id_klasifikasi" class="form-control">
                            <option disabled="disabled">--Klasifikasi Jenis Kejahatan--
                            </option>

                            <?php
                            
                            $klasifikasi = mysqli_query($konek, "SELECT * FROM  klasifikasi ");

                            while ($p = mysqli_fetch_array($klasifikasi)) {
                                echo "<option value='$p[id_klasifikasi]' ";
                                if ($row['id_klasifikasi'] == $p['id_klasifikasi']) {
                                    echo "selected";
                                }
                                echo ">$p[nama_masalah]</option>";
                            }
                            ?>
                        </select>

                    </div>
                    <div class="form-group col-sm-4">
                        <label for="tempatLahir">Lokasi Kejadian</label>
                        <input type="text" class="form-control" name="lokasi_kejadian" id="lokasi_kejadian" value="<?php echo  $row['lokasi_kejadian'] ?>" placeholder="lokasi Kejadian">

                    </div>
                    <div class="form-group col-sm-4">
                        <label for="tglKejadian">Tanggal Kejadian</label>
                        <input type="date" class="form-control" value="<?php echo  $row['tanggal_kejadian'] ?>" name="tanggal_kejadian" id="tglKejadian">

                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-6">
                        <label for="namaSaksi">Saksi</label>
                        <input type="text" name="saksi" id="namaSaksi" class="form-control" placeholder="Nama saksi yang melihat" maxlength="13" value="<?php echo  $row['saksi'] ?>">

                    </div>
                    <div class="form-group col-sm-6">
                        <label for="bukti">Bukti</label>
                        <div class="input-group">
                            <input type="file" name="bukti" class="form-control" id="bukti" placeholder="Upload bukti" value="">
                            <div class="input-group-append">
                                <a target="_blank" href="../assets/img/laporan/<?php echo $row['lampiran_bukti'] ?>" class="btn btn-success m-1">Lihat disini</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="form-group row">
                    <label for="Deskripsi" class="col-sm-2 col-form-label">Deskripsi Kejadian</label>
                    <div class="col-sm-10">
                        <textarea rows="6" name="isi_laporan" class="form-control" id="isi_laporan" placeholder="Harap isikan alur kejadian dengan lengkap!"><?php echo  $row['isi_laporan'] ?></textarea>

                    </div>
                </div>
                <div class="form-actions">
                    <button href="laporan-semua.php" class="btn btn-info mt-2"><i class="fas fa-fw fa-arrow-left"></i> Kembali</button>
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