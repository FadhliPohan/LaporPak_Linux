<?php
include 'header.php';
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Laporan</h1>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-primary">
            <h6 class="m-0 font-weight-bold text-light">Form Input Laporan</h6>
        </div>
        <div class="card-body">

            <form action="" method="post">
                <div class="form-group row">
                    <label for="NID" class="col-sm-2 col-form-label">No.Tiket</label>
                    <div class="col-sm-3">
                        <input type="text" name="nid" class="form-control" id="NID" placeholder="10 Digit" maxlength="10" value="">

                    </div>
                </div>
                <div class="form-group row">
                    <label for="namaDosen" class="col-sm-2 col-form-label">Klarifikasi</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_dosen" class="form-control" id="namaDosen" placeholder="Nama Lengkap" value="">

                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-4">
                        <label for="jk">Jenis Kelamin</label>
                        <select name="jk" id="jk" class="form-control">
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="Laki-Laki">Laki - Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>

                    </div>
                    <div class="form-group col-sm-4">
                        <label for="tempatLahir">Tempat Lahir</label>
                        <input type="text" class="form-control" name="tempat_lahir" id="tempatLahir" placeholder="Kota Tempat Lahir">

                    </div>
                    <div class="form-group col-sm-4">
                        <label for="tglLahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tgl_lahir" id="tglLahir">

                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-6">
                        <label for="telpDosen">No. Telepon</label>
                        <input type="text" name="telp_dosen" id="telpDosen" class="form-control" placeholder="Nomor yang aktif" maxlength="13" value="">

                    </div>
                    <div class="form-group col-sm-6">
                        <label for="emailDosen">Email</label>
                        <input type="text" name="email_dosen" id="emailDosen" class="form-control" placeholder="Email yang aktif" value="">

                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamatDosen" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" name="alamat_dosen" class="form-control" id="alamatDosen" placeholder="Alamat Lengkap" value="">

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