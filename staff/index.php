<?php
$page = "index";
include 'header.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Semua Laporan</div>
                            <?php
                            $data_semua = mysqli_query($konek, "SELECT d.*, u.* FROM detail_laporan d JOIN user u WHERE d.id_user = u.id_user group by d.id_detail_laporan DESC");
                            $semua = mysqli_num_rows($data_semua);
                            ?>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                        <h3> <?php echo $semua; ?></h3>
                                    </div>
                                </div>
                                <div class="col">

                                    <h6>Laporan</h6>

                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Laporan Diterima</div>
                            <?php
                            $data_diterima = mysqli_query($konek, "SELECT d.*, u.*, cb.* FROM detail_laporan d JOIN user u join cek_berkas cb WHERE d.id_user = u.id_user and d.no_tiket=cb.no_tiket and cb.cek_id=1 and cb.cek_berkas=1 AND cb.cek_laporan=1 group by d.id_detail_laporan DESC");
                            $diterima = mysqli_num_rows($data_diterima);
                            ?>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                        <h3> <?php echo $diterima; ?></h3>
                                    </div>
                                </div>
                                <div class="col">

                                    <h6>Laporan</h6>

                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Laporan Selesai
                            </div>
                            <?php
                            $data_selesai = mysqli_query($konek, "SELECT d.*, u.*,s.*, l.*, p.*, pe.* FROM detail_laporan d JOIN user u JOIN status s JOIN laporan l JOIN penyidikan p JOIN pengerjaan pe WHERE d.id_user = u.id_user and d.no_tiket = l.no_tiket and l.id_status= s.id_status and l.no_tiket = p.no_tiket and p.id_pengerjaan = '7' group by d.id_detail_laporan DESC");
                            $selesai = mysqli_num_rows($data_selesai);
                            ?>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                        <h3> <?php echo $selesai; ?></h3>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $selesai; ?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Laporan Ditolak</div>
                            <?php
                            $data_tolak = mysqli_query($konek, "SELECT d.*, u.*,s.*, l.*, p.*, pe.* FROM detail_laporan d JOIN user u JOIN status s JOIN laporan l JOIN penyidikan p JOIN pengerjaan pe WHERE d.id_user = u.id_user and d.no_tiket = l.no_tiket and l.id_status= s.id_status and p.id_pengerjaan = p.id_pengerjaan and p.id_pengerjaan = '4' group by d.id_detail_laporan DESC");
                            $tolak = mysqli_num_rows($data_tolak);
                            ?>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $tolak ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php
include 'footer.php';
?>