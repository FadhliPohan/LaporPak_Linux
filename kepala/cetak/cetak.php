<?php
include '../../koneksi.php';

session_start();


// menyimpan hasil inputan kedalam variabel
$id_user          = $_SESSION['id_user'];
$tiket = $_GET['no_tiket'];
$tiketku = mysqli_query($konek, "SELECT d.*, k.*, u.* FROM detail_laporan d JOIN user u JOIN klasifikasi k WHERE d.no_tiket = '$tiket' and u.id_user = d.id_user and k.id_klasifikasi = d.id_klasifikasi");
$row = mysqli_fetch_array($tiketku);



$pemeriksa = mysqli_query($konek, "SELECT st.*, u.* FROM surat_tugas st JOIN user u  WHERE st.no_tiket = '$tiket' and st.id_penerima = u.id_user");

$data = mysqli_fetch_array($pemeriksa);

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LaporPak - Kepala Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="../../Boostrap/boostrap/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../Boostrap/boostrap/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../../Boostrap/boostrap/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">
    <!-- surat tugas dari notiket ke staff -->
    <!-- $sql = "UPDATE laporan SET id_tindakan=2,id_status=3,id_staff='$id_user' tanggal_pemeriksa NOW() WHERE no_tiket='$tiket'"; -->
    <!-- Begin Page Content -->

    <div id="container" style="margin: 0% 4% 5% 8%;">
        <div id="header">
            <table table-responsive table-striped>
                <tbody>
                    <tr>
                        <td valign="top" width="12%"><img src="../../assets/img/polres/lambang_polri.png" style="width:85px !important;height:85px !important"></td>
                        <td align="center" valign="top">
                            <label>KEPOLISIAN NEGARA REPUBLIK INDONESIA</label><br>
                            <label>DAERAH SUMATERA SELATAN</label><br>
                            <label><b>RESORT TALANG KELAPA</b></label><br>
                            <label class="address">CJl. Palembang - Jambi No.25, Sukamoro, Talang Klp., Kabupaten Banyu Asin, Sumatera Selatan 30961.<br>

                            </label>
                        </td>
                        <td valign="top" width="12%"><img src="../../assets/img/polres/bareskrim.png" style="width:85px !important;height:85px !important"></td>
                    </tr>
                </tbody>
            </table>
            <hr class="hr">
        </div>
    </div>

    <div style="margin: 0% 4% 10% 8%;">
        <div>
            <table table-responsive table-striped>
                <tbody>
                    <tr>
                        <td colspan="3" align="center">
                            <h3>SURAT TUGAS ADUAN MASYARAKAT</h3>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="noborder">&nbsp;</td>
                    </tr>

                    <tr>
                        <th width="15%"></th>
                        <th width="1%"></th>
                        <td width="30%"></td>
                    </tr>
                    <tr>
                        <th width="15%">NAMA PENGADU</th>
                        <th width="1%">:</th>
                        <td width="30%"><?php echo $row['nama']; ?></td>
                    </tr>
                    <tr>
                        <th>NOMOR KTP</th>
                        <th>:</th>
                        <td><?php echo $row['nik']; ?></td>
                    </tr>
                    <tr>
                        <th>TEMPAT TANGGAL LAHIR</th>
                        <th>:</th>
                        <td><?php echo $row['tmp_lahir']; ?>, <?php echo $row['tgl_lahir']; ?></td>
                    </tr>
                    <tr>
                        <th>PEKERJAAN</th>
                        <th>:</th>
                        <td><?php echo $row['pekerjaan']; ?></td>
                    </tr>
                    <tr style="display:none">
                        <th>NOMOR TIKET</th>
                        <th>:</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>ALAMAT</th>
                        <th>:</th>
                        <td><?php echo $row['alamat']; ?></td>
                    </tr>
                    <tr>
                        <th>AGAMA</th>
                        <th>:</th>
                        <td><?php echo $row['agama']; ?></td>
                    </tr>
                    <tr>
                        <th>NOMOR HANDPHONE</th>
                        <th>:</th>
                        <td><?php echo $row['no_tlp']; ?></td>
                    </tr>
                    <tr>
                        <th>NOMOR TIKET</th>
                        <th>:</th>
                        <td><?php echo $row['no_tiket']; ?></td>
                    </tr>

                </tbody>
            </table>
            <br>
            <table width="100%" style="border:none;">
                <tbody>
                    <tr>
                        <td colspan="3" valign="top" style="text-align: justify;">

                            <h6> &nbsp;&nbsp;&nbsp; Dengan Surat ini maka dibenarkan bahwa yang beridentitas diatas telah memenuhi syarat baik itu identitas, berkas, dan laporan dan selanjutnya akan ditindak lanjuti oleh yang berkaitan sebagai berikut staff.</h6>

                        </td>
                    </tr>

                </tbody>
            </table>
            <br>
            <table table-responsive table-striped>
                <tbody>
                    <tr>
                        <th width="15%"></th>
                        <th width="1%"></th>
                        <td width="30%"></td>
                    </tr>
                    <tr>
                        <th width="15%">NAMA STAFF</th>
                        <th width="1%">:</th>
                        <td width="30%"><?php echo $data['nama']; ?></td>
                    </tr>
                    <tr>
                        <th>NOMOR KTP</th>
                        <th>:</th>
                        <td><?php echo $data['nik']; ?></td>
                    </tr>
                    <tr>
                        <th>TEMPAT TANGGAL LAHIR</th>
                        <th>:</th>
                        <td><?php echo $data['tmp_lahir']; ?>, <?php echo $data['tgl_lahir']; ?></td>
                    </tr>
                    <tr>
                        <th>PEKERJAAN</th>
                        <th>:</th>
                        <td><?php echo $data['pekerjaan']; ?></td>
                    </tr>
                    <tr style="display:none">
                        <th>NOMOR TIKET</th>
                        <th>:</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>ALAMAT</th>
                        <th>:</th>
                        <td><?php echo $data['alamat']; ?></td>
                    </tr>
                    <tr>
                        <th>AGAMA</th>
                        <th>:</th>
                        <td><?php echo $data['agama']; ?></td>
                    </tr>
                    <tr>
                        <th>NOMOR HANDPHONE</th>
                        <th>:</th>
                        <td><?php echo $data['no_tlp']; ?></td>
                    </tr>
                    <tr>
                        <th>NOMOR TIKET</th>
                        <th>:</th>
                        <td><?php echo $data['no_tiket']; ?></td>
                    </tr>

                </tbody>
            </table>
            <br>
            <table width="100%" style="border:none;">
                <tbody>
                    <tr>
                        <td colspan="3" valign="top" style="text-align: justify;">

                            <h6> &nbsp;&nbsp;&nbsp; Dibenarkan bahwa yang beridentitas diatas merupkan staff yang akan melanjutkan proses penyidikan, dan segala hal-hal yang akan dibutuhkan dapat langsung disampaikan dapat langsung diberikan kepada staff tersebut.</h6>

                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" valign="top" style="text-align: justify;">

                            <h6> &nbsp;&nbsp;&nbsp; Sehubungan dengan surat ini kami ucapkan terimakasih sebesar besarnya kepada kedua belah pihak dan dapat diterima dengan baik, dan semoga aduan diatas dapat diselesaikan dengan maksimal.</h6>

                        </td>
                    </tr>

                </tbody>
            </table>

            <table width="100%" style="border:none;">
                <tbody>
                    <tr>
                        <td colspan="2" class="noborder">&nbsp;</td>
                    </tr>

                    <tr>
                        <td width="60%" rowspan="14" class="noborder">
                            <div style="border: 1px ;width: 80px;height: 120px;float: right;margin-right: 38px;"></div>
                        </td>
                        <td class="left noborder">Talang Kelapa, <?php echo date("Y/m/d"); ?></td>
                    </tr>
                    <tr>
                        <td class="left noborder"><span id="POLSEK TALANG KELAPA	">POLSEK TALANG KELAPA </span></td>
                    </tr>
                    <tr>
                        <th class="left noborder">&nbsp; </th>
                    </tr>
                    <tr>
                        <th class="left noborder">&nbsp; </th>
                    </tr>
                    <tr>
                        <th colspan="3" class="left noborder">&nbsp; </th>
                    </tr>
                    <tr>
                        <th class="left noborder">&nbsp; </th>
                    </tr>

                    <tr>
                        <th colspan="3" class="left noborder">&nbsp; </th>
                    </tr>
                    <tr>
                        <td class="left noborder"><span id="HARIS MUNANDAR HASYIM, SH, S.IK"><b>HARIS MUNANDAR HASYIM, SH, S.IK</b></span></td>
                    </tr>
                    <tr>
                        <td class="left noborder">NIP. <span id="	86111595"> 86111595</span></td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="../../Boostrap/boostrap/vendor/jquery/jquery.min.js"></script>
    <script src="../../Boostrap/boostrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../Boostrap/boostrap/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../Boostrap/boostrap/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../../Boostrap/boostrap/vendor/chart.js/Chart.min.js"></script>
    <script src="../../Boostrap/boostrap/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../../Boostrap/boostrap/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../../Boostrap/boostrap/js/demo/chart-area-demo.js"></script>
    <script src="../../Boostrap/boostrap/js/demo/chart-pie-demo.js"></script>
    <script src="../../Boostrap/boostrap/js/demo/datatables-demo.js"></script>


    <script>
        window.print();
    </script>
</body>

</html>