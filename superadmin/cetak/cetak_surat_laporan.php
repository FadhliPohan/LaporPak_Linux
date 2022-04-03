<html>

<head>
    <title> Transkrip Mahasiswa </title>

    <style type="text/css" media="print, screen">
        body {
            font-family: "Times New Roman", Times, Verdana;
            /*background-color: #C0C0C0;*/
            font-size: 10pt;
            margin: 0;
            padding: 0;
        }

        p {
            margin: 0;
            padding: 0;
        }

        #container {
            margin: 0 auto;
            padding: 10px;
            width: 280mm;
            background-color: #fff;
            /*height: 280mm;*/
            /*overflow: hidden;*/
            /*border-bottom: 1px solid #c0c0c0;*/
        }

        #header {
            text-align: center;
            margin-bottom: 15px;
            line-height: 1px;
        }

        #header .address {
            font-size: 12px;
        }

        #header h2,
        #header h3,
        #header h4 {
            text-align: left;
            margin: 0;
            padding: 0;
            font-weight: normal;
        }

        #header h2 {
            margin: 0;
            padding: 0;
        }

        #header h3 {
            margin: 0;
            padding: 0;
            font-size: 16pt;
        }

        #header h4 {
            margin: 0;
            padding: 0;
            font-size: 10pt;
        }

        #header hr {
            border: 1px solid #ododod;
        }

        #header a {
            display: block;
            text-align: left;
            /*float: left;*/
            text-decoration: underline;
            /*display: none;*/
            z-index: 100;
        }

        #header a:hover {
            text-decoration: none;
        }

        #logo_ugm {
            /*text-align: center;*/
            margin: 0 auto;
            width: 45px;
            height: 45px;
            display: block;
        }

        #header img {
            width: 45px;
            height: 45px;
        }

        #nomor_transkrip {
            text-align: center;
            margin-bottom: 15px;
        }

        #nomor_transkrip h1 {
            margin: 0;
            padding: 0;
            font-size: 14pt;
        }

        #nomor_transkrip hr {
            margin: 0 auto;
            padding: 0;
            width: 290px;
            border: 1px solid #ododod;
        }

        #info_mhs {
            margin-bottom: 10px;
        }

        #info_mhs table {
            font-size: 10pt;
            margin: 0;
            padding: 0;
        }

        #info_mhs th {
            text-align: left;
            font-weight: normal;
        }

        #info_mhs td #table_transkrip {
            margin-bottom: 10px;
        }

        #table_transkrip table {
            /*border: 1px solid #000;*/
            font-family: Arial;
            border: none;
            border-collapse: collapse;
            /*width: 100%;*/
            float: left;
        }

        #table_transkrip th {
            border-top: 1px solid #000;
            border-bottom: 1px solid #000;
            font-size: 10pt;
            padding: 0 5px;
        }

        #table_transkrip td {
            /*border: 1px solid #000;*/
            /**/
            /*border-left: 1px solid #000;
border-right: 1px solid #000;
/**/

            text-align: center;
            font-size: 8pt;
            padding: 0 5px;
            vertical-align: top;
        }

        #table_transkrip .spacer {
            border-top: none;
            border-bottom: none;
            border-left: 1px solid #000;
            border-right: 1px solid #000;
        }

        #table_transkrip .left {
            text-align: left;
            /*width: 200px;*/
        }

        #table_transkrip .right {
            text-align: right;
            /*width: 200px;*/
        }

        #table_transkrip .noborder {
            text-align: left;
            border: none;
        }

        #table_transkrip .border-left {
            border: none;
        }

        #table_transkrip .border-right {
            text-align: left;
            border-top: none;
            border-left: none;
            border-bottom: none;
        }

        #table_transkrip .colspace {
            border-top: none;
        }

        #table_transkrip .colspace-bottom {
            border-top: none;
        }

        #table_transkrip .colspace-up {
            border-bottom: none;
        }

        #table_transkrip .total_sks {
            border-top: none;
            border-bottom: none;
        }

        #table_transkrip .index-prestasi {
            text-align: left;
            border-top: none;
            border-left: none;
            border-bottom: none;
        }

        #table_transkrip .no-left {
            border-left: none;
        }

        #table_transkrip .no-right {
            border-right: none;
        }

        #table_transkrip .no-top {
            border-top: none;
        }

        #table_transkrip .top {
            border-top: 1px solid #000;
        }

        #table_transkrip .no-bottom {
            border-bottom: none;
        }

        #table_transkrip .bottom {
            border-bottom: 1px solid #000;
        }

        .bleft {
            border-left: 1px solid #000;
        }

        .bright {
            border-right: 1px solid #000;
        }

        #table_transkrip .no-border {
            border: none;
        }

        #table_transkrip .middle {
            vertical-align: middle;
        }

        #judul-skripsi {
            margin-bottom: 10px;
        }

        #judul-skripsi table {
            width: 100%;
            border-collapse: collapse;
        }

        #judul-skripsi th {
            font-weight: normal;
            text-align: left;
            width: 95px;
            vertical-align: top;
        }

        #pembimbing {
            float: left;
            width: 380px;
        }

        #pembimbing table {
            border-collapse: collapse;
        }

        #pembimbing th {
            text-align: left;
            font-weight: normal;
            vertical-align: top;
        }

        #pembimbing td {
            vertical-align: top;
            /*width: 250px;*/
        }

        #table_right {
            float: right;
        }

        #table_right table {
            border-collapse: collapse;
        }

        #table_right th {
            text-align: left;
            font-weight: normal;
        }

        #table_right td {
            width: 250px;
        }

        div.nobreak .hidden {
            visibility: hidden;
            display: none;
        }

        div.page-break

        /*.hidden */
            {
            visibility: visible;
            margin: 10px 0px 10px 0px;
        }

        .spacer {
            border-top: none;
            border-bottom: none;
            border-left: 1px solid #000;
            border-right: 1px solid #000;
        }
    </style>


    <style type="text/css" media="print">
        .hidden_print {
            display: none;
        }
    </style>

    <style type="text/css" media="all">
        .hr {
            border: 1px solid #000;
        }

        #table_transkrip {
            border: 1px solid #000;
            min-height: 770px;
            overflow: hidden;
        }
    </style>
</head>

<body>

    <div id="header">
        <table width="90%" border="0" cellpadding="0" cellspacing="0">
            <tbody>
                <tr>
                    <td valign="top" width="12%"><img src="../../assets/img/polres/bareskrim.png" style="width:85px !important;height:85px !important"></td>
                    <td align="center" valign="top">
                        <label>KEMENTERIAN RISET, TEKNOLOGI, DAN PENDIDIKAN TINGGI</label><br>
                        <label>UNIVERSITAS MALIKUSSALEH</label><br>
                        <label><b>FAKULTAS TEKNIK</b></label><br>
                        <label class="address">Cot Teungku Nie Reuleut Kecamatan Muara Batu - Aceh Utara<br>
                            Telepon. (0645) 41373 - 40915 Faks. 0645-44450 Laman : http://www.unimal.ac.id<br><br>
                        </label>
                    </td>
                    <td valign="top" width="12%"><img src="../../assets/img/polres/bareskrim.png" style="width:85px !important;height:85px !important"></td>
                </tr>
            </tbody>
        </table>
        <hr class="hr">
    </div>


    <div class="page_break">
        <div id="info_mhs">
            <table width="100%" border="0">
                <tbody>
                    <tr>
                        <td colspan="3" align="center">
                            <h3>DAFTAR PRESTASI AKADEMIK</h3>
                        </td>
                    </tr>
                    <tr>
                        <th width="15%"></th>
                        <th width="1%"></th>
                        <td width="30%"></td>
                    </tr>
                    <tr>
                        <th width="15%">NAMA MAHASISWA</th>
                        <th width="1%">:</th>
                        <td width="30%">MUHAMMAD FADHLI DZIL IKRAM</td>
                    </tr>
                    <tr>
                        <th>NOMOR INDUK MAHASISWA</th>
                        <th>:</th>
                        <td>160180022</td>
                    </tr>
                    <tr>
                        <th>TEMPAT TANGGAL LAHIR</th>
                        <th>:</th>
                        <td>KOTA BONTANG KALIMANTAN TIMUR, 03 APRIL 1998</td>
                    </tr>
                    <tr>
                        <th>PROGRAM STUDI</th>
                        <th>:</th>
                        <td>SISTEM INFORMASI</td>
                    </tr>
                    <tr style="display:none">
                        <th>KONSENTRASI DIPILIH</th>
                        <th>:</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>JENJANG PENDIDIKAN</th>
                        <th>:</th>
                        <td>STRATA 1</td>
                    </tr>
                    <tr>
                        <th>TANGGAL LULUS</th>
                        <th>:</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>AKREDITASI PRODI / NOMOR</th>
                        <th>:</th>
                        <td>(B) / 11773/SK/BAN-PT/AK-ISK/S/X/2021</td>
                    </tr>
                    <tr>
                        <th>AKREDITASI INSTITUSI / NOMOR</th>
                        <th>:</th>
                        <td>(B) / 0575/SK/BAN-PT/Akred/PT/V/2016</td>
                    </tr>
                    <tr>
                        <th valign="top">JUDUL SKRIPSI</th>
                        <th valign="top">:</th>
                        <td valign="top" style="text-align: justify;">MEDIA PEMBELAJARAN INTERAKTIF MEMBANGUN ANDROID APPLICATION FOR BEGINNERS BERBASIS MULTIMEDIA</td>
                    </tr>
                </tbody>
            </table>
        </div>



        <a href="cetak.php" target="_BLANK">TES PRINT</a>

</body>

</html>