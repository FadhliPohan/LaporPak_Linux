<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LaporPak - Register</title>

    <!-- Custom fonts for this template-->
    <link href="../Boostrap/boostrap/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../Boostrap/boostrap/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">

                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Buat Akun LaporPak Sekarang!</h1>
                            </div>
                            <form action="proses_register.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="NIK">NIK</label>
                                        <input type="text" name="nik" class="form-control" id="nik" placeholder="Isikan NIK Anda" maxlength="10" value="" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="Nama Lengkap">Nama Lengkap</label>
                                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Isikan Nama Anda" value="" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Email">Email</label>
                                    <input type="text" name="email" id="email" class="form-control" placeholder="Email yang aktif" value="" required>
                                </div>
                                <div class="form-group">
                                    <input type="Password" name="password" id="password" class="form-control" placeholder="Password Email" maxlength="13" value="" required>
                                </div>
                                <div class="form-group">
                                    <label for="Alamat">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat Lengkap" value="" required>

                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="Jenis Kelamin">Jenis Kelamin</label>
                                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                                            <option value="">Pilih Jenis Kelamin</option>
                                            <option value="Laki-Laki">Laki - Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="Kota Lahir">Kota Lahir</label>
                                        <input type="text" class="form-control" name="tmp_lahir" id="tmp_lahir" placeholder="isikan Kota Tempat Lahir Anda" required>

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="Tanggal Lahir">Tanggal Lahir</label>
                                        <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="Nomor Telepon">Nomor Telepon</label>
                                        <input type="text" name="notlp" id="notlp" class="form-control" placeholder="Nomor yang aktif" maxlength="13" value="" required>

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
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
                                    <div class="col-sm-6">
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
                                <div class="form-group">
                                    <label for="Foto Profil">Foto Profil</label>
                                    <input type="file" name="foto" class="form-control" id="foto" placeholder="Foto anda" value="" required>
                                </div>
                                <button type="submit" href="proses_register.php" class="btn btn-primary btn-user btn-block">
                                    Buat Akun
                                </button>
                                <!-- <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a> -->
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.php">Sudah Memiliki Akun? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../Boostrap/boostrap/vendor/jquery/jquery.min.js"></script>
    <script src="../Boostrap/boostrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../Boostrap/boostrap/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../Boostrap/boostrap/js/sb-admin-2.min.js"></script>

</body>

</html>