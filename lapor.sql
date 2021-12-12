-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Okt 2021 pada 04.55
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(300) NOT NULL,
  `id_role` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `email`, `password`, `id_role`, `id_user`) VALUES
(2, 'putri@gmail.com', '123123', 1, 1),
(3, 'rahmat@gmail.com', '11231', 2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_laporan`
--

CREATE TABLE `detail_laporan` (
  `id_detail_laporan` int(11) NOT NULL,
  `id_klasifikasi` int(11) NOT NULL,
  `no_tiket` int(11) NOT NULL,
  `judul_laporan` text NOT NULL,
  `isi_laporan` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal_kejadian` date NOT NULL,
  `date` datetime NOT NULL,
  `lapiran_bukti` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_laporan`
--

INSERT INTO `detail_laporan` (`id_detail_laporan`, `id_klasifikasi`, `no_tiket`, `judul_laporan`, `isi_laporan`, `id_user`, `tanggal_kejadian`, `date`, `lapiran_bukti`) VALUES
(1, 1, 3143, 'Preampokan didaerah semanggi', 'saya sedang duduk tiba tiba tas ssaya diambil oleh lelaki berjaket hitam', 2, '2021-10-01', '2021-10-16 15:30:30', 'dwerf.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `klasifikasi`
--

CREATE TABLE `klasifikasi` (
  `id_klasifikasi` int(11) NOT NULL,
  `nama_masalah` varchar(300) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `klasifikasi`
--

INSERT INTO `klasifikasi` (`id_klasifikasi`, `nama_masalah`, `deskripsi`) VALUES
(1, 'Perampokan', 'Kejahatan menggambil atau merampas hak orang lain dalam bentuk materi'),
(2, 'Tawuran', 'tindak kejahatan yang membuat kedua belah pihak melakukan tindakan kekerasan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id_lapor` int(11) NOT NULL,
  `id_detail_lapor` int(11) NOT NULL,
  `id_tindakan` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `id_staff` int(11) NOT NULL,
  `id_kepala` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `polisi`
--

CREATE TABLE `polisi` (
  `id_polisi` int(11) NOT NULL,
  `nama_polisi` varchar(100) NOT NULL,
  `NIK` int(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id_role`, `status`) VALUES
(1, 'super admin'),
(2, 'staff'),
(3, 'kepala'),
(4, 'pelapor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `nama_status` varchar(100) NOT NULL,
  `deskripsi_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`id_status`, `nama_status`, `deskripsi_status`) VALUES
(1, 'menunggu', 'Staff kepolisian sedang memeriksa data anda');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tindakan`
--

CREATE TABLE `tindakan` (
  `id_tindakan` int(11) NOT NULL,
  `nama_tindakan` varchar(100) NOT NULL,
  `deskripsi_tindakan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tindakan`
--

INSERT INTO `tindakan` (`id_tindakan`, `nama_tindakan`, `deskripsi_tindakan`) VALUES
(1, 'proses pengkajian', 'proses melakukan pengambilan data');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `NIK` int(200) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `jenis_kelamin`, `NIK`, `alamat`) VALUES
(1, 'putri', 'permpuan', 123432342, 'palembang jl.srimulyani no.3'),
(2, 'rahmat', 'laki-laki', 43211122, 'palembang jl.srimulyani no.3');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_role` (`id_role`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `detail_laporan`
--
ALTER TABLE `detail_laporan`
  ADD PRIMARY KEY (`id_detail_laporan`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_klasifikasi` (`id_klasifikasi`);

--
-- Indeks untuk tabel `klasifikasi`
--
ALTER TABLE `klasifikasi`
  ADD PRIMARY KEY (`id_klasifikasi`);

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_lapor`),
  ADD KEY `id_detail_lapor` (`id_detail_lapor`),
  ADD KEY `id_tindakan` (`id_tindakan`),
  ADD KEY `id_status` (`id_status`),
  ADD KEY `id_staff` (`id_staff`),
  ADD KEY `id_kepala` (`id_kepala`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indeks untuk tabel `tindakan`
--
ALTER TABLE `tindakan`
  ADD PRIMARY KEY (`id_tindakan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `detail_laporan`
--
ALTER TABLE `detail_laporan`
  MODIFY `id_detail_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `klasifikasi`
--
ALTER TABLE `klasifikasi`
  MODIFY `id_klasifikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_lapor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tindakan`
--
ALTER TABLE `tindakan`
  MODIFY `id_tindakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`),
  ADD CONSTRAINT `admin_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `detail_laporan`
--
ALTER TABLE `detail_laporan`
  ADD CONSTRAINT `detail_laporan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `admin` (`id_admin`),
  ADD CONSTRAINT `detail_laporan_ibfk_2` FOREIGN KEY (`id_klasifikasi`) REFERENCES `klasifikasi` (`id_klasifikasi`);

--
-- Ketidakleluasaan untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `laporan_ibfk_1` FOREIGN KEY (`id_detail_lapor`) REFERENCES `detail_laporan` (`id_detail_laporan`),
  ADD CONSTRAINT `laporan_ibfk_2` FOREIGN KEY (`id_tindakan`) REFERENCES `tindakan` (`id_tindakan`),
  ADD CONSTRAINT `laporan_ibfk_3` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`),
  ADD CONSTRAINT `laporan_ibfk_4` FOREIGN KEY (`id_staff`) REFERENCES `admin` (`id_admin`),
  ADD CONSTRAINT `laporan_ibfk_5` FOREIGN KEY (`id_kepala`) REFERENCES `admin` (`id_admin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
