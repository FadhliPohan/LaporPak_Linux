-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 27, 2022 at 07:56 AM
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
(1, 'emil@gmail.com', '$2y$04$oOaGAkV41ucQ92M1R8f43ugcLqOmfW.7Jz.bsvTz55AySYiwdNXqu', 4, 'SLUGPV8YSDDDCPLJ3'),
(2, 'iksan@gmail.com', '$2y$04$fUp7KwQu0X6vrdA183OVguLHWQ.SOurzQbXvktntWTpxVtFLXTjWm', 4, 'SLUGXLUGGHYZIFHWK');

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
(1, 'emil@gmail.com', 'Emil Harahap', 'Laki-Laki', '6546734523', 'jl. sembiring no 42', 'medan', '1994-02-01', '0823112454', 'Kristen', 'Polisi', 'rizki.jpeg'),
(2, 'iksan@gmail.com', 'Iksan', 'Laki-Laki', '6546774564', 'jl. sembiring no 43', 'jakarta', '2022-03-09', '0823112453', 'Islam', 'TNI', '2.jpg');

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
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `cek_berkas`
--
ALTER TABLE `cek_berkas`
  MODIFY `id_cek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `detail_berkas`
--
ALTER TABLE `detail_berkas`
  MODIFY `id_berkas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `detail_laporan`
--
ALTER TABLE `detail_laporan`
  MODIFY `id_detail_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `klasifikasi`
--
ALTER TABLE `klasifikasi`
  MODIFY `id_klasifikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_lapor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `pengerjaan`
--
ALTER TABLE `pengerjaan`
  MODIFY `id_pengerjaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `penyidikan`
--
ALTER TABLE `penyidikan`
  MODIFY `id_penyidikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

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
  MODIFY `id_srt_tugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `tindakan`
--
ALTER TABLE `tindakan`
  MODIFY `id_tindakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

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
