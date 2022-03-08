<!-- surat tugas dari notiket ke staff -->
<!-- $sql = "UPDATE laporan SET id_tindakan=2,id_status=3,id_staff='$id_user' tanggal_pemeriksa NOW() WHERE no_tiket='$tiket'"; -->

<?php
$page = "semua";
include 'header.php';
$tiket = $_GET['no_tiket'];
$tiketku = mysqli_query($konek, "SELECT d.*, k.*, u.* FROM detail_laporan d JOIN user u JOIN klasifikasi k WHERE d.no_tiket = '$tiket' and u.id_user = d.id_user and k.id_klasifikasi = d.id_klasifikasi");
$row = mysqli_fetch_array($tiketku);
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tabel Semua Laporan</h1>
    <p class="mb-4">Data dibawah ini merupakan data yang didapatkan dari seluruh aduan laporan yang dilaporkkan oleh pelapor.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a class="form-row d-flex justify-left">
                <a href="laporan-semua.php" class="m-0 font-weight-bold text-primary wa-20 ">Data Keseluruhan Laporan</a>
                <i class="bi bi-arrow-repeat"></i>
            </a>

        </div>
        <div class="card-body">

            <div id="container">
                <div id="header">
                    <table table-responsive table-striped>
                        <tbody>
                            <tr>
                                <td valign="top" width="12%"><img src="../assets/img/polres/bareskrim.png" style="width:85px !important;height:85px !important"></td>
                                <td align="center" valign="top">
                                    <label>KEPOLISIAN NEGARA REPUBLIK INDONESIA</label><br>
                                    <label>DAERAH SUMATERA SELATAN</label><br>
                                    <label><b>RESORT TALANG KELAPA</b></label><br>
                                    <label class="address">CJl. Palembang - Jambi No.25, Sukamoro, Talang Klp., Kabupaten Banyu Asin, Sumatera Selatan 30961.<br>

                                    </label>
                                </td>
                                <td valign="top" width="12%"><img src="../assets/img/polres/bareskrim.png" style="width:85px !important;height:85px !important"></td>
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
                                <th width="15%"></th>
                                <th width="1%"></th>
                                <td width="30%"></td>
                            </tr>
                            <tr>
                                <th width="15%">NAMA PENGADU</th>
                                <th width="1%">:</th>
                                <td width="30%"><?php echo $row['nama'];?></td>
                            </tr>
                            <tr>
                                <th>NOMOR KTP</th>
                                <th>:</th>
                                <td><?php echo $row['nik'];?></td>
                            </tr>
                            <tr>
                                <th>TEMPAT TANGGAL LAHIR</th>
                                <th>:</th>
                                <td><?php echo $row['tmp_lahir'];?>, <?php echo $row['tgl_lahir'];?></td>
                            </tr>
                            <tr>
                                <th>PEKERJAAN</th>
                                <th>:</th>
                                <td><?php echo $row['pekerjaan'];?></td>
                            </tr>
                            <tr style="display:none">
                                <th>NOMOR TIKET</th>
                                <th>:</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>ALAMAT</th>
                                <th>:</th>
                                <td><?php echo $row['alamat'];?></td>
                            </tr>
                            <tr>
                                <th>AGAMA</th>
                                <th>:</th>
                                <td><?php echo $row['agama'];?></td>
                            </tr>
                            <tr>
                                <th>NOMOR HANDPHONE</th>
                                <th>:</th>
                                <td><?php echo $row['no_hp'];?></td>
                            </tr>
                            <tr>
                                <th>NOMOR TIKET</th>
                                <th>:</th>
                                <td><?php echo $row['no_tiket'];?></td>
                            </tr>
                            <tr>
                                <th valign="top">PEMERIKSA BERKAS</th>
                                <th valign="top">:</th>
                                <td valign="top" style="text-align: justify;">MEDIA PEMBELAJARAN INTERAKTIF MEMBANGUN ANDROID APPLICATION FOR BEGINNERS BERBASIS MULTIMEDIA</td>
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
                                <td width="30%">MUHAMMAD FADHLI DZIL IKRAM</td>
                            </tr>
                            <tr>
                                <th>NOMOR KTP</th>
                                <th>:</th>
                                <td>160180022</td>
                            </tr>
                            <tr>
                                <th>TEMPAT TANGGAL LAHIR</th>
                                <th>:</th>
                                <td>KOTA BONTANG KALIMANTAN TIMUR, 03 APRIL 1998</td>
                            </tr>
                            <tr>
                                <th>PEKERJAAN</th>
                                <th>:</th>
                                <td>SISTEM INFORMASI</td>
                            </tr>
                            <tr style="display:none">
                                <th>NOMOR TIKET</th>
                                <th>:</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>ALAMAT</th>
                                <th>:</th>
                                <td>STRATA 1</td>
                            </tr>
                            <tr>
                                <th>AGAMA</th>
                                <th>:</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>NOMOR HANDPHONE</th>
                                <th>:</th>
                                <td>(B) / 11773/SK/BAN-PT/AK-ISK/S/X/2021</td>
                            </tr>
                            <tr>
                                <th>NOMOR TIKET</th>
                                <th>:</th>
                                <td>(B) / 0575/SK/BAN-PT/Akred/PT/V/2016</td>
                            </tr>
                            <tr>
                                <th valign="top">PEMERIKSA BERKAS</th>
                                <th valign="top">:</th>
                                <td valign="top" style="text-align: justify;">MEDIA PEMBELAJARAN INTERAKTIF MEMBANGUN ANDROID APPLICATION FOR BEGINNERS BERBASIS MULTIMEDIA</td>
                            </tr>

                        </tbody>
                    </table>

                    <table width="100%" style="border:none;">
                        <tbody>
                            <tr>
                                <td colspan="2" class="noborder">&nbsp;</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="noborder">&nbsp;</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="noborder">&nbsp;</td>
                            </tr>
                            <tr>
                                <td width="60%" rowspan="14" class="noborder">
                                    <div style="border: 1px ;width: 80px;height: 120px;float: right;margin-right: 38px;"></div>
                                </td>
                                <td class="left noborder">Talang Kelapa, <?php echo date("Y/m/d");?></td>
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
                                <th class="left noborder">&nbsp; </th>
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
                            <tr>
                                <th colspan="3" class="noborder">&nbsp; </th>
                            </tr>
                            <tr>
                                <th colspan="3" class="noborder">&nbsp; </th>
                            </tr>
                            <tr>
                                <th colspan="3" class="noborder">&nbsp; </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- tombol -->
            <div class="form-actions">
                <button href="laporan-semua.php" class="btn btn-info mt-2"><i class="fas fa-fw fa-arrow-left"></i> Kembali</button>
                <button type="submit" class="btn btn-success mt-2"> <i class="fa fa-check"></i> Cetak</button>

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