-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2021 at 01:05 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

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
  `id_role` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `email`, `password`, `id_role`, `id_user`) VALUES
(2, 'putri@gmail.com', '$2y$04$Iv2ZOFqEpUjki7eofDhEAuMAZN9qT6J4V.7umO0Jfg1tBbRGF/nAC', 1, 1),
(3, 'rahmat@gmail.com', '$2y$04$Iv2ZOFqEpUjki7eofDhEAuMAZN9qT6J4V.7umO0Jfg1tBbRGF/nAC', 2, 2),
(4, 'fadli@gmail.com', '$2y$04$Iv2ZOFqEpUjki7eofDhEAuMAZN9qT6J4V.7umO0Jfg1tBbRGF/nAC', 3, 3),
(5, 'riski@gmail.com', '$2y$04$Iv2ZOFqEpUjki7eofDhEAuMAZN9qT6J4V.7umO0Jfg1tBbRGF/nAC', 4, 4),
(7, 'rahmat2@gmail.com', '$2y$04$Iv2ZOFqEpUjki7eofDhEAuMAZN9qT6J4V.7umO0Jfg1tBbRGF/nAC', 3, 2),
(8, 'fadli1@gmail.com', '$2y$04$Iv2ZOFqEpUjki7eofDhEAuMAZN9qT6J4V.7umO0Jfg1tBbRGF/nAC', 4, 3),
(9, 'riski1@gmail.com', '$2y$04$Iv2ZOFqEpUjki7eofDhEAuMAZN9qT6J4V.7umO0Jfg1tBbRGF/nAC', 1, 4),
(11, 'rahmat3@gmail.com', '$2y$04$Iv2ZOFqEpUjki7eofDhEAuMAZN9qT6J4V.7umO0Jfg1tBbRGF/nAC', 4, 2),
(12, 'fadli3@gmail.com', '$2y$04$Iv2ZOFqEpUjki7eofDhEAuMAZN9qT6J4V.7umO0Jfg1tBbRGF/nAC', 1, 3),
(14, 'putri4@gmail.com', '$2y$04$Iv2ZOFqEpUjki7eofDhEAuMAZN9qT6J4V.7umO0Jfg1tBbRGF/nAC', 4, 1),
(15, 'rahmat4@gmail.com', '$2y$04$Iv2ZOFqEpUjki7eofDhEAuMAZN9qT6J4V.7umO0Jfg1tBbRGF/nAC', 1, 2),
(16, 'fadli4@gmail.com', '$2y$04$Iv2ZOFqEpUjki7eofDhEAuMAZN9qT6J4V.7umO0Jfg1tBbRGF/nAC', 2, 3),
(17, 'riski4@gmail.com', '$2y$04$Iv2ZOFqEpUjki7eofDhEAuMAZN9qT6J4V.7umO0Jfg1tBbRGF/nAC', 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `detail_laporan`
--

CREATE TABLE `detail_laporan` (
  `id_detail_laporan` int(11) NOT NULL,
  `id_klasifikasi` int(11) NOT NULL,
  `no_tiket` varchar(300) NOT NULL,
  `judul_laporan` text NOT NULL,
  `isi_laporan` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal_kejadian` date NOT NULL,
  `tanggal` date NOT NULL,
  `lampiran_bukti` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_laporan`
--

INSERT INTO `detail_laporan` (`id_detail_laporan`, `id_klasifikasi`, `no_tiket`, `judul_laporan`, `isi_laporan`, `id_user`, `tanggal_kejadian`, `tanggal`, `lampiran_bukti`) VALUES
(2, 2, '342fd', 'tawuran sma', 'sering terjadinya tawuran didepan rumah saya', 2, '2021-11-11', '2021-11-12', 'goto.jpg'),
(3, 1, 'e3242', 'perampasan sepeda motor', 'sering terjadinya peampokan didepan pasar', 2, '2021-11-25', '2021-11-12', 'jpg.jpg'),
(4, 2, '342fdf', 'tawuran sma', 'sering terjadinya tawuran didepan rumah saya', 2, '2021-11-11', '2021-11-12', 'goto.jpg'),
(5, 1, 'e3242sdf', 'perampasan sepeda motor', 'sering terjadinya peampokan didepan pasar', 2, '2021-11-25', '2021-11-12', 'jpg.jpg'),
(6, 2, '342fdsa', 'tawuran sma', 'sering terjadinya tawuran didepan rumah saya', 2, '2021-11-11', '2021-11-12', 'goto.jpg'),
(7, 1, 'e324dafd', 'perampasan sepeda motor', 'sering terjadinya peampokan didepan pasar', 2, '2021-11-25', '2021-11-23', 'jpg.jpg'),
(8, 2, '342fdsdfws', 'tawuran sma', 'sering terjadinya tawuran didepan rumah saya', 2, '2021-11-11', '2021-11-12', 'goto.jpg');

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
(2, 'Tawuran', 'tindak kejahatan yang membuat kedua belah pihak melakukan tindakan kekerasan');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_lapor` int(11) NOT NULL,
  `no_tiket` varchar(300) NOT NULL,
  `id_tindakan` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `id_staff` int(11) NOT NULL,
  `id_kepala` int(11) NOT NULL,
  `id_pengerjaan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id_lapor`, `no_tiket`, `id_tindakan`, `id_status`, `tanggal_selesai`, `id_staff`, `id_kepala`, `id_pengerjaan`) VALUES
(1, '1', 1, 3, '2021-11-11', 3, 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pengerjaan`
--

CREATE TABLE `pengerjaan` (
  `id_pengerjaan` int(11) NOT NULL,
  `status_pengerjaan` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `deskripsi_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `nama_status`, `deskripsi_status`) VALUES
(1, 'menunggu', 'Staff kepolisian sedang memeriksa data anda'),
(2, 'selesai', 'telah dilakukan penyesesaian, oleh staff'),
(3, 'Read', 'Staff sedang memeriksa  kelengkapan data');

-- --------------------------------------------------------

--
-- Table structure for table `surat_tugas`
--

CREATE TABLE `surat_tugas` (
  `id_srt_tugas` int(11) NOT NULL,
  `id_laporan` int(11) NOT NULL,
  `id_penerima` varchar(100) NOT NULL,
  `jadwal_aksi` date NOT NULL,
  `jadwal_selesai` date NOT NULL,
  `status_tugas` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'proses pengkajian', 'proses melakukan pengambilan data');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `NIK` int(200) NOT NULL,
  `alamat` text NOT NULL,
  `tmp_lahir` varchar(300) NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `no_tlp` int(15) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `foto` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `jenis_kelamin`, `NIK`, `alamat`, `tmp_lahir`, `tgl_lahir`, `no_tlp`, `agama`, `pekerjaan`, `foto`) VALUES
(1, 'putri', 'permpuan', 123432342, 'palembang jl.srimulyani no.3', 'lahat', '2021-11-02', 0, 'islam', 'Mahasiswa', 'putri.jpg'),
(2, 'rahmat', 'laki-laki', 43211122, 'palembang jl.srimulyani no.3', 'pekan baru', '2021-11-09', 0, 'islam', 'mahasiswa', 'rahmat.jpg'),
(3, 'fadli', 'laki-laki', 42352345, 'medan, padang sidempuan no.8', 'bontang', '2021-11-02', 0, 'islam', 'polisi', 'fadli.jpg'),
(4, 'rizki', 'laki-laki', 635465634, 'sumatra barat, jl.kesampingan no.2', 'padang', '2021-11-11', 0, 'islam', 'aktor', 'rizki.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_role` (`id_role`),
  ADD KEY `id_user` (`id_user`);

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
  ADD PRIMARY KEY (`id_srt_tugas`);

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
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `detail_laporan`
--
ALTER TABLE `detail_laporan`
  MODIFY `id_detail_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `klasifikasi`
--
ALTER TABLE `klasifikasi`
  MODIFY `id_klasifikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_lapor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengerjaan`
--
ALTER TABLE `pengerjaan`
  MODIFY `id_pengerjaan` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `surat_tugas`
--
ALTER TABLE `surat_tugas`
  MODIFY `id_srt_tugas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tindakan`
--
ALTER TABLE `tindakan`
  MODIFY `id_tindakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`),
  ADD CONSTRAINT `admin_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `detail_laporan`
--
ALTER TABLE `detail_laporan`
  ADD CONSTRAINT `detail_laporan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `admin` (`id_admin`),
  ADD CONSTRAINT `detail_laporan_ibfk_2` FOREIGN KEY (`id_klasifikasi`) REFERENCES `klasifikasi` (`id_klasifikasi`);

--
-- Constraints for table `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `laporan_ibfk_2` FOREIGN KEY (`id_tindakan`) REFERENCES `tindakan` (`id_tindakan`),
  ADD CONSTRAINT `laporan_ibfk_3` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`),
  ADD CONSTRAINT `laporan_ibfk_4` FOREIGN KEY (`id_staff`) REFERENCES `admin` (`id_admin`),
  ADD CONSTRAINT `laporan_ibfk_5` FOREIGN KEY (`id_kepala`) REFERENCES `admin` (`id_admin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
