<?php
$page = "kepala";
include 'header.php';


?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-primary">
            <h6 class="m-0 font-weight-bold text-light">Form Kepala</h6>
        </div>
        <div class="card-body">

            <form action="add/kepala.php" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="NID" class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-3">
                        <input type="text" name="nik" class="form-control" id="nik" placeholder="10 Digit" maxlength="10" value="" required>

                    </div>
                </div>

                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Kepala</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap" value="" required>

                    </div>
                </div>

                <div class="form-row">

                    <div class="form-group col-sm-6">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="Email yang aktif" value="" required>

                    </div>
                    <div class="form-group col-sm-6">
                        <label for="password">Password</label>
                        <input type="Password" name="password" id="password" class="form-control" placeholder="Password Email" maxlength="13" value="" required>

                    </div>

                </div>

                <div class="form-row">
                    <div class="form-group col-sm-4">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="Laki-Laki">Laki - Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>

                    </div>
                    <div class="form-group col-sm-4">
                        <label for="tmp_lahir">Tempat Lahir</label>
                        <input type="text" class="form-control" name="tmp_lahir" id="tmp_lahir" placeholder="Kota Tempat Lahir" required>

                    </div>
                    <div class="form-group col-sm-4">
                        <label for="tgl_Lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" required>

                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-4">
                        <label for="notlp">No. Telepon</label>
                        <input type="text" name="notlp" id="notlp" class="form-control" placeholder="Nomor yang aktif" maxlength="13" value="" required>

                    </div>
                    <div class="form-group col-sm-4">
                        <label for="agama">Agama</label>
                        <select name="agama" id="agama" class="form-control" required>
                            <option value="">Pilih Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>

                    </div>
                    <div class="form-group col-sm-4">
                        <label for="agama">Pekerjaan</label>
                        <select name="pekerjaan" id="pekerjaan" class="form-control" required>
                            <option value="">Pilih Pekerjaan</option>
                            <option value="Polisi">Polisi</option>
                            <option value="TNI">TNI</option>
                            <option value="Wiraswasta">Wiraswasta</option>
                            <option value="PNS">PNS</option>
                            <option value="Nelayan">Nelayan</option>
                            <option value="Buruh">Buruh</option>
                            <option value="Pegawai BUMN">Pegawai BUMN</option>
                            <option value="Pegawai Swasta">Pegawai Swasta</option>
                            <option value="Programer">Programer</option>
                            <option value="Petani">Petani</option>
                            <option value="Dokter">Dokter</option>
                            <option value="Dan lain-lain">Dan lain-lain</option>
                        </select>

                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat Lengkap" value="" required>

                    </div>
                </div>
                <div class="form-group row">
                    <label for="foto" class="col-sm-2 col-form-label">Foto Profil</label>
                    <div class="col-sm-10">
                        <input type="file" name="foto" class="form-control" id="foto" placeholder="Foto anda" value="" required>

                    </div>
                </div>
                <div class="form-actions">
                    <a href="tbl_kepala.php" class="btn btn-info mt-2"><i class="fas fa-fw fa-arrow-left"></i> Kembali</a>
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