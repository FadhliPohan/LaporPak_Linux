<?php
include 'header.php';
function create_random($length)
{
    $data = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $string = '';
    for($i = 0; $i < $length; $i++) 
    {
        $pos = rand(0, strlen($data)-1);
        $string .= $data[$pos];
    }
    return $string;
}


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
                        <input type="text" name="nid" class="form-control" id="NID" placeholder="10 Digit" maxlength="10" value="<?php echo  $num = create_random(5);?>" readonly>

                    </div>
                </div>
                <div class="form-group row">
                    <label for="judulLaporan" class="col-sm-2 col-form-label">Judul Laporan</label>
                    <div class="col-sm-10">
                        <input type="text" name="judul_laporan" class="form-control" id="judulLaporan" placeholder="Judul Laporan" value="">

                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-4">
                        <label for="klasifikasi">Klasifikasi Kejahatan</label>
                        <select name="klasifikasi" id="klasifikasi" class="form-control">
                            <option value="">Pilih Jenis Kejahatan</option>
                            <option value="Laki-Laki">Laki - Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>

                    </div>
                    <div class="form-group col-sm-4">
                        <label for="tempatLahir">Lokasi Kejadian</label>
                        <input type="text" class="form-control" name="lokasi_kejadian" id="lokasi_kejadian" placeholder="lokasi_kejadian">

                    </div>
                    <div class="form-group col-sm-4">
                        <label for="tglKejadian">Tanggal Kejadian</label>
                        <input type="date" class="form-control" name="tgl_kejadian" id="tglKejadian">

                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-6">
                        <label for="namaSaksi">Saksi</label>
                        <input type="text" name="nama_saksi" id="namaSaksi" class="form-control" placeholder="Nama saksi yang melihat" maxlength="13" value="">

                    </div>
                    <div class="form-group col-sm-6">
                        <label for="bukti">Bukti</label>
                        <input type="text" name="bukti" id="bukti" class="form-control" placeholder="Bukti yang mendukung" value="">

                    </div>
                </div>
                <div class="form-group row">
                    <label for="Deskripsi" class="col-sm-2 col-form-label">Deskripsi Kejadian</label>
                    <div class="col-sm-10">
                        <textarea rows= "8" name="deskripsi" class="form-control" id="alamatDosen" placeholder="Harap isikan alur kejadian dengan lengkap!" value=""></textarea>

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