-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Bulan Mei 2024 pada 18.13
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helpu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `masyarakat`
--

CREATE TABLE `masyarakat` (
  `nik` int(16) NOT NULL,
  `nama` varchar(36) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `telp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `masyarakat`
--

INSERT INTO `masyarakat` (`nik`, `nama`, `username`, `password`, `telp`) VALUES
(123, 'Nanang Hidayat', 'awnanang', 'nanang378', '085877536650'),
(33290, 'hidayat', 'hidayat', '123', '0857668'),
(2147483647, 'fathur ', 'fathuraw', '220604', '08674768290');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `tgl_pengaduan` date NOT NULL,
  `nik` int(16) NOT NULL,
  `isi_laporan` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` enum('0','proses','selesai') NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `no_telp` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `tgl_pengaduan`, `nik`, `isi_laporan`, `foto`, `status`, `nama`, `email`, `no_telp`) VALUES
(11, '2024-05-17', 2147483647, 'saya mengalami kekerasan seksual yang di lakukan oleh majikan saya dan saya binggung untuk melaporkanya maka saya mencoba untuk melaporkan melalui website help-u dan semoga help-u bisa membantu saya berikut saya kirimkan bukti foto yang dilakukan oleh majikan saya terimakasih help-u semoga bisa segera untuk di usut', 'Lambang Psht - Logo Hati Bersinar Png - 1000x1000 Wallpaper HD - WallpaperTip.jpeg', 'selesai', NULL, NULL, NULL),
(12, '2024-05-17', 1234, 'saya mengalami [elecehan seksual yang dilakukan oleh majikan saya dan saya sangat trauma dan tidak bisa normal kembali ', '', 'selesai', NULL, NULL, NULL),
(13, '2024-05-27', 2147483647, 'afsgsfbgsdgv', '', 'proses', NULL, NULL, NULL),
(14, '0000-00-00', 0, '', '', '', NULL, NULL, NULL),
(15, '0000-00-00', 5365467, '', '', 'proses', NULL, NULL, NULL),
(16, '0000-00-00', 0, '', '', '', NULL, NULL, NULL),
(17, '2024-05-27', 5365467, 'vhsdxzfghcgfhfjg', '', 'proses', NULL, NULL, NULL),
(18, '0000-00-00', 3246238, 'nsndjfnslfn', '', 'proses', NULL, NULL, NULL),
(19, '2024-05-27', 33290711, 'adabknbdakjbdakjk', '', 'proses', NULL, NULL, NULL),
(20, '2024-05-27', 687987, 'coba', '', 'selesai', 'coba', 'coba@gmail.com', '1234'),
(21, '2024-05-27', 3023890, 'sndbfksbfkjsk', '', 'selesai', 'coba lagi', 'lagi@gmail.com', '924967297628');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `level` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `telp`, `level`) VALUES
(1, 'firman aulia', 'firmanpoenya', '123', '099798713', 'petugas'),
(2, 'rizki akbar', 'qibar', '123', '0879761221', 'petugas'),
(3, 'taufan', 'opan', '123', '988781221', 'petugas'),
(5, 'ferdy yosiii', 'ijat', '123', '897801211', 'petugas'),
(6, 'admin', 'admin', 'admin', '9870971312', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id_tanggapan` int(11) NOT NULL,
  `id_pengaduan` int(11) NOT NULL,
  `tgl_tanggapan` date NOT NULL,
  `tanggapan` text NOT NULL,
  `id_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tanggapan`
--

INSERT INTO `tanggapan` (`id_tanggapan`, `id_pengaduan`, `tgl_tanggapan`, `tanggapan`, `id_petugas`) VALUES
(12, 11, '0000-00-00', 'baik terima kasih atas laporan saudara kami pihak help-u akan segera menindak lanjuti laporan saudara dan akan bekerja sama dengan petuga terkait untuk segera mengusut laporan saudara salam hangat help-u', 1),
(13, 20, '2024-05-27', 'baik', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`id_tanggapan`),
  ADD KEY `id_petugas` (`id_petugas`),
  ADD KEY `id_pengaduan` (`id_pengaduan`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `masyarakat`
--
ALTER TABLE `masyarakat`
  MODIFY `nik` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `id_tanggapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD CONSTRAINT `tanggapan_ibfk_1` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`),
  ADD CONSTRAINT `tanggapan_ibfk_2` FOREIGN KEY (`id_pengaduan`) REFERENCES `pengaduan` (`id_pengaduan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
