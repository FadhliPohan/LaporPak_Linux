<?php
$page = "su";
include 'header.php';
$id_mail = $_GET['emailku'];
$mailku = mysqli_query($konek, "SELECT a.*, r.*, u.* FROM admin a JOIN role r JOIN user u WHERE a.email = '$id_mail' AND a.id_role = r.id_role AND a.email = u.email;");
$row = mysqli_fetch_array($mailku);

?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-primary">
            <h6 class="m-0 font-weight-bold text-light">Form Super Admin</h6>
        </div>
        <div class="card-body">

            <form action="add/su.php" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="NID" class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-3">
                        <input type="text" name="nik" class="form-control" id="nik" placeholder="10 Digit" maxlength="10" value="<?php echo $row['nik'] ?>" required>

                    </div>
                </div>

                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Admin</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap" value="<?php echo $row['nama'] ?>" required>

                    </div>
                </div>

                <div class="form-group row">

                    <div class="form-group col-sm-6">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="Email yang aktif" value="<?php echo $row['email'] ?>" readonly>

                    </div>
                    <div class="form-group col-sm-6">
                        <label for="password">Password</label>
                        <input type="Password" name="password" id="password" class="form-control" placeholder="Password Email" maxlength="13" value="" required>

                    </div>

                </div>

                <div class="form-row">
                    <div class="form-group col-sm-4">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <?php $jekel = $row['jenis_kelamin']; ?>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                            <option value="">Pilih Jenis Kelamin</option>
                            <option <?php echo ($jekel == 'Laki-laki') ? "selected" : "" ?>>Laki - laki</option>
                            <option <?php echo ($jekel == 'Perempuan') ? "selected" : "" ?>>Perempuan</option>
                        </select>

                    </div>
                    <div class="form-group col-sm-4">
                        <label for="tmp_lahir">Tempat Lahir</label>
                        <input type="text" class="form-control" name="tmp_lahir" id="tmp_lahir" value="<?php echo $row['tmp_lahir'] ?>" placeholder="Kota Tempat Lahir" required>

                    </div>
                    <div class="form-group col-sm-4">
                        <label for="tgl_Lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" value="<?php echo $row['tgl_lahir'] ?>" name="tgl_lahir" id="tgl_lahir" required>

                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-4">
                        <label for="notlp">No. Telepon</label>
                        <input type="text" name="notlp" id="notlp" class="form-control" placeholder="Nomor yang aktif" maxlength="13" value="<?php echo $row['no_tlp'] ?>" required>

                    </div>
                    <div class="form-group col-sm-4">
                        <label for="agama">Agama</label>
                        <?php $agama = $row['agama']; ?>
                        <select name="agama" id="agama" class="form-control" required>
                            <option value="">Pilih Agama</option>
                            <option <?php echo ($agama == 'Islam') ? "selected" : "" ?>>Islam</option>
                            <option <?php echo ($agama == 'Kristen') ? "selected" : "" ?>>Kristen</option>
                            <option <?php echo ($agama == 'Katolik') ? "selected" : "" ?>>Katolik</option>
                            <option <?php echo ($agama == 'Budha') ? "selected" : "" ?>>Budha</option>
                            <option <?php echo ($agama == 'Hindu') ? "selected" : "" ?>>Hindu</option>
                            <option <?php echo ($agama == 'Konghucu') ? "selected" : "" ?>>Konghucu</option>
                        </select>

                    </div>
                    <div class="form-group col-sm-4">
                        <label for="agama">Pekerjaan</label>
                        <?php $pekerjaan = $row['pekerjaan']; ?>
                        <select name="pekerjaan" id="pekerjaan" class="form-control" required>
                            <option value="">Pilih Pekerjaan</option>
                            <option <?php echo ($pekerjaan == 'Polisi') ? "selected" : "" ?>>Polisi</option>
                            <option <?php echo ($pekerjaan == 'TNI') ? "selected" : "" ?>>TNI</option>
                            <option <?php echo ($pekerjaan == 'Wiraswasta') ? "selected" : "" ?>>Wiraswasta</option>
                            <option <?php echo ($pekerjaan == 'PNS') ? "selected" : "" ?>>PNS</option>
                            <option <?php echo ($pekerjaan == 'Nelayan') ? "selected" : "" ?>>Nelayan</option>
                            <option <?php echo ($pekerjaan == 'Buruh') ? "selected" : "" ?>>Buruh</option>
                            <option <?php echo ($pekerjaan == 'Pegawai BUMN') ? "selected" : "" ?>>Pegawai BUMN</option>
                            <option <?php echo ($pekerjaan == 'Pegawai Swasta') ? "selected" : "" ?>>Pegawai Swasta</option>
                            <option <?php echo ($pekerjaan == 'Programer') ? "selected" : "" ?>>Programer</option>
                            <option <?php echo ($pekerjaan == 'Petani') ? "selected" : "" ?>>Petani</option>
                            <option <?php echo ($pekerjaan == 'Dokter') ? "selected" : "" ?>>Dokter</option>
                            <option <?php echo ($pekerjaan == 'Dan lain-lain') ? "selected" : "" ?>>Dan lain-lain</option>

                        </select>

                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat Lengkap" value="<?php echo $row['alamat'] ?>" required>

                    </div>
                </div>
                <div class="form-group row">
                    <label for="foto" class="col-sm-2 col-form-label">Foto Profil</label>
                    <div class="col-sm-10">
                        <input type="file" name="foto" class="form-control" id="foto" placeholder="Foto anda" value="" required>

                    </div>
                </div>
                <div class="form-actions">
                    <a href="tbl_su.php" class="btn btn-info mt-2"><i class="fas fa-fw fa-arrow-left"></i> Kembali</a>
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