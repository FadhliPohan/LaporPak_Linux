-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 20, 2022 at 02:18 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lapor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(300) NOT NULL,
  `id_role` int(11) DEFAULT 4,
  `slug` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `email`, `password`, `id_role`, `slug`) VALUES
(2, 'putri@gmail.com', '$2y$04$Iv2ZOFqEpUjki7eofDhEAuMAZN9qT6J4V.7umO0Jfg1tBbRGF/nAC', 1, '1fcawref'),
(3, 'rahmat@gmail.com', '$2y$04$glUfFBqqagz98DKsOGP8luPuGaFsfPJwl79od8rF.8MxGAhs9HFkK', 2, 'SLUGTGQAPMH25H5EG'),
(4, 'fadli@gmail.com', '$2y$04$Iv2ZOFqEpUjki7eofDhEAuMAZN9qT6J4V.7umO0Jfg1tBbRGF/nAC', 3, 'ergw'),
(5, 'riski@gmail.com', '$2y$04$Iv2ZOFqEpUjki7eofDhEAuMAZN9qT6J4V.7umO0Jfg1tBbRGF/nAC', 4, '4rgwer'),
(8, 'fadli1@gmail.com', '$2y$04$Iv2ZOFqEpUjki7eofDhEAuMAZN9qT6J4V.7umO0Jfg1tBbRGF/nAC', 4, 'rsegse'),
(9, 'riski1@gmail.com', '$2y$04$Iv2ZOFqEpUjki7eofDhEAuMAZN9qT6J4V.7umO0Jfg1tBbRGF/nAC', 1, 'brw'),
(11, 'rahmat3@gmail.com', '$2y$04$Iv2ZOFqEpUjki7eofDhEAuMAZN9qT6J4V.7umO0Jfg1tBbRGF/nAC', 4, '1rfgw'),
(12, 'fadli3@gmail.com', '$2y$04$Iv2ZOFqEpUjki7eofDhEAuMAZN9qT6J4V.7umO0Jfg1tBbRGF/nAC', 1, '3vw4d'),
(19, 'panda@su.com', '$2y$04$Iv2ZOFqEpUjki7eofDhEAuMAZN9qT6J4V.7umO0Jfg1tBbRGF/nAC', 1, 'serwa'),
(20, 'panda@user.com', '$2y$04$Iv2ZOFqEpUjki7eofDhEAuMAZN9qT6J4V.7umO0Jfg1tBbRGF/nAC', 4, 'srftws'),
(21, 'agus@gmail.com', '$2y$04$EHK0oza/vHQa0HWokrbDlurUU0xUw95DgWwYna4b4drT3iNSnU52u', 3, 'SLUG2WD6CDSK8CMYZ'),
(22, 'rijal@gmail.com', '$2y$04$6tw97AidENqVxSrcwQ0LbuZWEOy2RnGAxKOUCFK0o8T/n2AfayP62', 3, 'SLUGDNGUR4VNYLZUG'),
(23, 'nurdin@gmail.com', '$2y$04$bmzUNOSnpoTvpAeSJuY9n.na9AL7jaEoAPDc4W.qt6AHXnf2Agxgm', 2, 'SLUGWRK3EQVPCIIEL'),
(24, 'wijaya@gmail.com', '$2y$04$BfVHEUrWIrcHxnZFwmxgqOC.KRorPTEE.fByEKZ/.o.DLcsbAj5wO', 4, 'SLUGBB1UJK5HM4PQC'),
(25, 'andi@gmail.com', '$2y$04$ngCuibz1/Pyq1VRrOso37.sXanIBf3SOb8KaPKDsQcTGNzUEi4oSW', 1, 'SLUGP4S7D1NBHLV69'),
(40, 'dinar@gmail.com', '$2y$04$viJi3wMgain4SebGl8Xi0u0d9MbrbeNTTiNiPun36VJ9489RQmVdq', 4, 'SLUGO9S2RPV08JEVO');

-- --------------------------------------------------------

--
-- Table structure for table `cek_berkas`
--

CREATE TABLE `cek_berkas` (
  `id_cek` int(11) NOT NULL,
  `no_tiket` varchar(100) DEFAULT NULL,
  `cek_id` varchar(100) DEFAULT NULL,
  `tgl_cek_id` date DEFAULT NULL,
  `cek_berkas` varchar(100) DEFAULT NULL,
  `tgl_cek_berkas` date DEFAULT NULL,
  `cek_laporan` varchar(100) DEFAULT NULL,
  `tgl_cek_laporan` date DEFAULT NULL,
  `keterangan_cek` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cek_berkas`
--

INSERT INTO `cek_berkas` (`id_cek`, `no_tiket`, `cek_id`, `tgl_cek_id`, `cek_berkas`, `tgl_cek_berkas`, `cek_laporan`, `tgl_cek_laporan`, `keterangan_cek`) VALUES
(8, '72TCC28PYV', '1', '2022-03-19', '1', '2022-03-19', '1', '2022-03-19', ' '),
(10, 'GQT9NRHDBX', '1', '2022-03-19', '1', '2022-03-19', '1', '2022-03-19', '  Seluruh data lengkap'),
(11, 'LN1MR53LS0', '1', '2022-03-19', '1', '2022-03-19', '1', '2022-03-19', '      Data Lengkap dapat dilanjutkan');

-- --------------------------------------------------------

--
-- Table structure for table `detail_berkas`
--

CREATE TABLE `detail_berkas` (
  `id_berkas` int(11) NOT NULL,
  `no_tiket` text DEFAULT NULL,
  `ktp` text DEFAULT NULL,
  `kk` text DEFAULT NULL,
  `berkas` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_berkas`
--

INSERT INTO `detail_berkas` (`id_berkas`, `no_tiket`, `ktp`, `kk`, `berkas`) VALUES
(17, '72TCC28PYV', '72TCC28PYV-kodk1.jpg', '72TCC28PYV-fadli.jpeg', '72TCC28PYV-Red-eyed-tree-frog.jpg'),
(19, 'GQT9NRHDBX', 'GQT9NRHDBX-Red-eyed-tree-frog.jpg', 'GQT9NRHDBX-putri.jpeg', NULL),
(20, 'LN1MR53LS0', 'LN1MR53LS0-rahmat.jpeg', 'LN1MR53LS0-Diagram1.png', 'LN1MR53LS0-resmob.png');

-- --------------------------------------------------------

--
-- Table structure for table `detail_laporan`
--

CREATE TABLE `detail_laporan` (
  `id_detail_laporan` int(11) NOT NULL,
  `id_klasifikasi` int(11) DEFAULT NULL,
  `no_tiket` varchar(300) DEFAULT NULL,
  `judul_laporan` text DEFAULT NULL,
  `isi_laporan` text DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `tanggal_kejadian` date DEFAULT NULL,
  `lokasi_kejadian` text DEFAULT NULL,
  `tanggal` datetime DEFAULT current_timestamp(),
  `saksi` varchar(100) DEFAULT NULL,
  `lampiran_bukti` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_laporan`
--

INSERT INTO `detail_laporan` (`id_detail_laporan`, `id_klasifikasi`, `no_tiket`, `judul_laporan`, `isi_laporan`, `id_user`, `tanggal_kejadian`, `lokasi_kejadian`, `tanggal`, `saksi`, `lampiran_bukti`) VALUES
(46, 4, '72TCC28PYV', 'Pemukulan Sindikat Tidak diketahui', 'Saat itu saya sedang memancing', 24, '2022-03-09', 'dermaga Betung', '2022-03-07 10:38:04', 'kiki', '72TCC28PYV-rizki.jpeg'),
(48, 3, 'GQT9NRHDBX', 'Pemukulan Sindikat Tidak diketahui', 'wdwqd', 24, '2022-03-22', 'medan', '2022-03-08 08:40:08', 'rival', 'GQT9NRHDBX-Screenshot from 2022-01-30 11-53-30.png'),
(49, 7, 'LN1MR53LS0', 'Pemukulan Sindikat Tidak diketahui 3', 'saat itu riki sedang pergi', 24, '2022-03-25', 'medan', '2022-03-08 17:50:05', 'riki', 'LN1MR53LS0-rizki.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `klasifikasi`
--

CREATE TABLE `klasifikasi` (
  `id_klasifikasi` int(11) NOT NULL,
  `nama_masalah` varchar(300) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `klasifikasi`
--

INSERT INTO `klasifikasi` (`id_klasifikasi`, `nama_masalah`, `deskripsi`) VALUES
(1, 'Perampokan', 'Kejahatan menggambil atau merampas hak orang lain dalam bentuk materi'),
(2, 'Tawuran', 'tindak kejahatan yang membuat kedua belah pihak melakukan tindakan kekerasan'),
(3, 'Pemerkosaan', 'Tindakan asusila yang dilakukan oleh sekelompok, perorangan terhadap lawan jenisnya'),
(4, 'Penyesatan', '   melakukan pengelabuhan terhadap kelompok atau perorangan baik itu terhadap agama, ras, bangsa'),
(7, 'Penipuan', 'Tindak kejahatan Yang mengatas namakan diri orang lain untuk mengambil keuntungan'),
(8, 'penyalahgunaan Obat', 'Menggunakan Obat atau zat berbahaya yang dapat merusak tubuh seperti narkoba, sabu, dll.');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_lapor` int(11) NOT NULL,
  `no_tiket` varchar(300) DEFAULT NULL,
  `id_tindakan` int(11) DEFAULT NULL,
  `id_status` int(11) DEFAULT NULL,
  `tanggal_periksa` date DEFAULT NULL,
  `id_staff` int(11) DEFAULT NULL,
  `id_kepala` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id_lapor`, `no_tiket`, `id_tindakan`, `id_status`, `tanggal_periksa`, `id_staff`, `id_kepala`) VALUES
(18, '72TCC28PYV', 4, 3, '2022-03-19', 23, 20),
(20, 'GQT9NRHDBX', 4, 3, '2022-03-19', 23, 20),
(21, 'LN1MR53LS0', 4, 3, '2022-03-19', 23, 20);

-- --------------------------------------------------------

--
-- Table structure for table `pengerjaan`
--

CREATE TABLE `pengerjaan` (
  `id_pengerjaan` int(11) NOT NULL,
  `status_pengerjaan` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengerjaan`
--

INSERT INTO `pengerjaan` (`id_pengerjaan`, `status_pengerjaan`, `deskripsi`) VALUES
(1, 'Sedang Diverifikasi', 'Aduan Yang selah dibuat sedang dilakukan verifikasi data oleh para staff'),
(2, 'Terverifikasi', 'Aduan yang anda buat memenuhi syarat, selanjutnya akan dilakukan penyidikan'),
(4, 'Ditolak', 'Aduan ditolak Karena tidak memenuhi data yang dibutuhkan atau data yang diisikan salah'),
(5, 'Diterima', 'Aduan yang diberikan telah memenuhi syarat, akan dilakukan pengerjaan oleh staff kepolisian'),
(6, 'Menunggu', 'Aduan yang diberikan sedang dalam penyidikan oleh staff'),
(7, 'Selesai', 'Aduan yang diterima telah dikerjakan dan diselesaikan');

-- --------------------------------------------------------

--
-- Table structure for table `penyidikan`
--

CREATE TABLE `penyidikan` (
  `id_penyidikan` int(11) NOT NULL,
  `no_tiket` varchar(100) NOT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `id_pengerjaan` int(11) DEFAULT NULL,
  `hasil_penyidikan` varchar(300) DEFAULT NULL,
  `keterangan_penyidikan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penyidikan`
--

INSERT INTO `penyidikan` (`id_penyidikan`, `no_tiket`, `tgl_mulai`, `tgl_selesai`, `id_pengerjaan`, `hasil_penyidikan`, `keterangan_penyidikan`) VALUES
(15, '72TCC28PYV', NULL, NULL, 2, NULL, NULL),
(17, 'GQT9NRHDBX', NULL, NULL, 2, NULL, NULL),
(18, 'LN1MR53LS0', '2022-03-22', '2022-03-29', 7, 'Baik', 'Baik');

-- --------------------------------------------------------

--
-- Table structure for table `polisi`
--

CREATE TABLE `polisi` (
  `id_polisi` int(11) NOT NULL,
  `no_polisi` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `polisi`
--

INSERT INTO `polisi` (`id_polisi`, `no_polisi`, `jabatan`, `id_admin`) VALUES
(1, 'k2146008', 'Senior Staff', 2);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `status`) VALUES
(1, 'super admin'),
(2, 'staff'),
(3, 'kepala'),
(4, 'pelapor');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `nama_status` varchar(100) NOT NULL,
  `colour` varchar(100) NOT NULL,
  `deskripsi_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `nama_status`, `colour`, `deskripsi_status`) VALUES
(1, 'Menunggu', 'warning', 'Staff kepolisian sedang memeriksa data anda'),
(2, 'Selesai', 'success', 'telah dilakukan penyesesaian, oleh staff'),
(3, 'Read', 'primary', 'Staff sedang memeriksa  kelengkapan data'),
(4, 'Pending', 'danger', 'Sedang dilakukan pemeriksaan lebih lanjut oleh para staff'),
(6, 'Penyelidikan', 'info', 'Tim Staff sedang melakukan penyeledikan ke lokasi');

-- --------------------------------------------------------

--
-- Table structure for table `surat_tugas`
--

CREATE TABLE `surat_tugas` (
  `id_srt_tugas` int(11) NOT NULL,
  `no_tiket` varchar(11) DEFAULT NULL,
  `id_penerima` int(100) DEFAULT NULL,
  `jadwal_aksi` date DEFAULT NULL,
  `jadwal_selesai` date DEFAULT NULL,
  `status_tugas` int(11) DEFAULT NULL,
  `catatan_surat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surat_tugas`
--

INSERT INTO `surat_tugas` (`id_srt_tugas`, `no_tiket`, `id_penerima`, `jadwal_aksi`, `jadwal_selesai`, `status_tugas`, `catatan_surat`) VALUES
(9, 'LN1MR53LS0', 23, '2022-03-25', '2022-03-30', 1, 'Segera ditangani'),
(10, 'GQT9NRHDBX', 23, '2022-03-09', '2022-03-31', 1, 'Secepatnya dikerjakan'),
(11, '72TCC28PYV', 23, '2022-03-15', '2022-03-16', 1, 'Rahasia');

-- --------------------------------------------------------

--
-- Table structure for table `tindakan`
--

CREATE TABLE `tindakan` (
  `id_tindakan` int(11) NOT NULL,
  `nama_tindakan` varchar(100) NOT NULL,
  `deskripsi_tindakan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tindakan`
--

INSERT INTO `tindakan` (`id_tindakan`, `nama_tindakan`, `deskripsi_tindakan`) VALUES
(1, 'Proses Pengkajian', 'proses melakukan pengambilan data'),
(2, 'Perbaikan Data', 'Staff kelpolisian melakukan Perbaikan Data'),
(3, 'Cek Lokasi', 'Melakukan Cek ke lokasi Kejadian'),
(4, 'Laporan Penyelasian', 'Pihak staff kepolisian membuat laporan terkait aduan'),
(5, 'Aduan Ditutup', 'Aduan ditutup Oleh Pihak Kepolisian');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jenis_kelamin` varchar(100) DEFAULT NULL,
  `nik` varchar(200) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `tmp_lahir` varchar(300) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `no_tlp` varchar(15) DEFAULT NULL,
  `agama` varchar(100) DEFAULT NULL,
  `pekerjaan` varchar(100) DEFAULT NULL,
  `foto` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `nama`, `jenis_kelamin`, `nik`, `alamat`, `tmp_lahir`, `tgl_lahir`, `no_tlp`, `agama`, `pekerjaan`, `foto`) VALUES
(1, 'putri@gmail.com', 'putri', 'permpuan', '123432342', 'palembang jl.srimulyani no.3', 'lahat', '2021-11-02', '0', 'Islam', 'Mahasiswa', 'putri.jpeg'),
(2, 'rahmat@gmail.com', 'rahmat', 'Laki-laki', '43211122', 'palembang jl.srimulyani no.3', 'pekan baru', '2021-11-09', '0', 'Islam', 'Mahasiswa', 'rahmat.jpg'),
(4, 'riski@gmail.com', 'rizki', 'Laki-laki', '635465634', 'sumatra barat, jl.kesampingan no.2', 'padang', '2021-11-11', '0', 'Islam', 'aktor', 'rizki.jpg'),
(20, 'fadli@gmail.com', 'Fadli Pohann', 'Laki-laki', '1000999288', 'Pasid', 'bontang', '2021-12-30', '082165368470', 'Islam', 'Pegawai BUMN', 'fadli.jpeg'),
(21, 'agus@gmail.com', 'agus', 'Laki-laki', '362518645', 'medan', 'arab', '2003-06-10', '09816636', 'Islam', 'Wiraswasta', 'rahmat.jpeg'),
(22, 'rijal@gmail.com', 'rijalependi', 'Laki-laki', '4235345', 'medan', 'medan', '2021-12-29', '093845737', 'Islam', 'Programer', 'rizki.jpeg'),
(23, 'nurdin@gmail.com', 'nurdin', 'Laki-laki', '52321232', 'Palembang', 'Palembang', '2014-07-09', '04124642342', 'Islam', 'Programer', 'putri.jpeg'),
(24, 'wijaya@gmail.com', 'wijaya', 'Laki-laki', '45747288', 'wana asri1', 'Palembang', '2021-12-09', '0423472342', 'Kristen', 'Pegawai BUMN', 'rahmat.jpeg'),
(25, 'andi@gmail.com', 'Andi sabar', 'Laki-laki', '7687546', 'Palembang', 'medan', '2021-12-09', '053234223', 'Islam', 'Buruh', 'putri.jpeg'),
(29, 'ilyas@gmail.com', 'ilyas', 'Laki-Laki', '354234', 'nfdhgsafs', 'bontang', '2000-01-04', '46486954', 'islam', 'Dokter', 'fadli.jpg'),
(31, 'rikin@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 'rikin@gmail.com', 'riki', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'rikin@gmail.com', 'riki', 'Laki-Laki', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, 'rikin@gmail.com', 'riki', 'Laki-Laki', NULL, 'jl. sembiring', NULL, NULL, NULL, NULL, NULL, NULL),
(35, 'rikin@gmail.com', 'riki', 'Laki-Laki', '6546734523', 'jl. sembiring', NULL, NULL, NULL, NULL, NULL, NULL),
(36, 'rikin@gmail.com', 'riki', 'Laki-Laki', '6546734523', 'jl. sembiring', 'medan', '2022-03-10', '0786544', 'Hindu', 'Programer', 'LaporPak - Kepala Dashboard.pdf'),
(37, 'dinar@gmail.com', 'dinar', 'Laki-Laki', '6546734523', 'jl. sembiring', 'medan', '2022-03-16', '0243135423', 'Islam', 'Petani', 'fadli.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_role` (`id_role`);

--
-- Indexes for table `cek_berkas`
--
ALTER TABLE `cek_berkas`
  ADD PRIMARY KEY (`id_cek`);

--
-- Indexes for table `detail_berkas`
--
ALTER TABLE `detail_berkas`
  ADD PRIMARY KEY (`id_berkas`);

--
-- Indexes for table `detail_laporan`
--
ALTER TABLE `detail_laporan`
  ADD PRIMARY KEY (`id_detail_laporan`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_klasifikasi` (`id_klasifikasi`),
  ADD KEY `no_tiket` (`no_tiket`);

--
-- Indexes for table `klasifikasi`
--
ALTER TABLE `klasifikasi`
  ADD PRIMARY KEY (`id_klasifikasi`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_lapor`),
  ADD KEY `id_detail_lapor` (`no_tiket`),
  ADD KEY `id_tindakan` (`id_tindakan`),
  ADD KEY `id_status` (`id_status`),
  ADD KEY `id_staff` (`id_staff`),
  ADD KEY `id_kepala` (`id_kepala`);

--
-- Indexes for table `pengerjaan`
--
ALTER TABLE `pengerjaan`
  ADD PRIMARY KEY (`id_pengerjaan`);

--
-- Indexes for table `penyidikan`
--
ALTER TABLE `penyidikan`
  ADD PRIMARY KEY (`id_penyidikan`);

--
-- Indexes for table `polisi`
--
ALTER TABLE `polisi`
  ADD PRIMARY KEY (`id_polisi`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `surat_tugas`
--
ALTER TABLE `surat_tugas`
  ADD PRIMARY KEY (`id_srt_tugas`),
  ADD KEY `id_laporan` (`no_tiket`),
  ADD KEY `id_penerima` (`id_penerima`);

--
-- Indexes for table `tindakan`
--
ALTER TABLE `tindakan`
  ADD PRIMARY KEY (`id_tindakan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `cek_berkas`
--
ALTER TABLE `cek_berkas`
  MODIFY `id_cek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `detail_berkas`
--
ALTER TABLE `detail_berkas`
  MODIFY `id_berkas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `detail_laporan`
--
ALTER TABLE `detail_laporan`
  MODIFY `id_detail_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `klasifikasi`
--
ALTER TABLE `klasifikasi`
  MODIFY `id_klasifikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_lapor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `pengerjaan`
--
ALTER TABLE `pengerjaan`
  MODIFY `id_pengerjaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `penyidikan`
--
ALTER TABLE `penyidikan`
  MODIFY `id_penyidikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `polisi`
--
ALTER TABLE `polisi`
  MODIFY `id_polisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `surat_tugas`
--
ALTER TABLE `surat_tugas`
  MODIFY `id_srt_tugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tindakan`
--
ALTER TABLE `tindakan`
  MODIFY `id_tindakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_laporan`
--
ALTER TABLE `detail_laporan`
  ADD CONSTRAINT `detail_laporan_ibfk_2` FOREIGN KEY (`id_klasifikasi`) REFERENCES `klasifikasi` (`id_klasifikasi`);

--
-- Constraints for table `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `laporan_ibfk_2` FOREIGN KEY (`id_tindakan`) REFERENCES `tindakan` (`id_tindakan`),
  ADD CONSTRAINT `laporan_ibfk_3` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`),
  ADD CONSTRAINT `laporan_ibfk_4` FOREIGN KEY (`id_staff`) REFERENCES `admin` (`id_admin`),
  ADD CONSTRAINT `laporan_ibfk_5` FOREIGN KEY (`id_kepala`) REFERENCES `admin` (`id_admin`);

--
-- Constraints for table `surat_tugas`
--
ALTER TABLE `surat_tugas`
  ADD CONSTRAINT `surat_tugas_ibfk_2` FOREIGN KEY (`id_penerima`) REFERENCES `admin` (`id_admin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
