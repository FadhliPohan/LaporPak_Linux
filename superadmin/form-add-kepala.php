<?php
$page ="kepala";
include 'header.php';

?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Kepala</h1>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-primary">
            <h6 class="m-0 font-weight-bold text-light">Form Kepala</h6>
        </div>
        <div class="card-body">

            <form action="" method="post">
                <div class="form-group row">
                    <label for="NID" class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-3">
                        <input type="text" name="nik" class="form-control" id="nik" placeholder="10 Digit" maxlength="10" value="">

                    </div>
                </div>
                <div class="form-group row">
                    <label for="namaDosen" class="col-sm-2 col-form-label">Nama Kepala</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap" value="">

                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-4">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="Laki-Laki">Laki - Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>

                    </div>
                    <div class="form-group col-sm-4">
                        <label for="tmp_lahir">Tempat Lahir</label>
                        <input type="text" class="form-control" name="tmp_lahir" id="tmp_lahir" placeholder="Kota Tempat Lahir">

                    </div>
                    <div class="form-group col-sm-4">
                        <label for="tgl_Lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tgl_lahir" id="tgl_Lahir">

                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-6">
                        <label for="no_tlp">No. Telepon</label>
                        <input type="text" name="no_tlp" id="no_tlp" class="form-control" placeholder="Nomor yang aktif" maxlength="13" value="">

                    </div>
                    <div class="form-group col-sm-6">
                        <label for="agama">Agama</label>
                        <select name="agama" id="agama" class="form-control">
                            <option value="">Pilih Agama</option>
                            <option value="Laki-Laki">Islam</option>
                            <option value="Perempuan">Kristen</option>
                            <option value="Laki-Laki">Katolik</option>
                            <option value="Perempuan">Hindu</option>
                            <option value="Laki-Laki">Budha</option>
                            <option value="Perempuan">Konghucu</option>
                        </select>

                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamatDosen" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" name="alamat_dosen" class="form-control" id="alamatDosen" placeholder="Alamat Lengkap" value="">

                    </div>
                </div>
                <div class="form-actions">
                    <!-- <a href="tbl" class="btn btn-info mt-2"><i class="fas fa-fw fa-arrow-left"></i> Kembali</a> -->
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