-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jan 2022 pada 01.46
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `kategori` varchar(22) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` enum('bisa dijual','tidak bisa dijual') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`id_produk`, `nama_produk`, `kategori`, `harga`, `status`) VALUES
(6, 'ALCOHOL GEL POLISH CLEANSER GP-CLN01', 'L QUEENLY', 12500, 'bisa dijual'),
(9, 'ALUMUNIUM FOIL ALL IN ONE BULAT 23mm IM', 'L MTH AKSESORIS (IM)', 1000, 'bisa dijual'),
(11, 'ALUMUNIUM FOIL ALL IN ONE BULAT 30mm IM', 'L MTH AKSESORIS (IM)', 1000, 'bisa dijual'),
(12, 'ALUMUNIUM FOIL ALL IN ONE SHEET 250mm IM', 'L MTH AKSESORIS (IM)', 12500, 'tidak bisa dijual'),
(15, 'ALUMUNIUM FOIL HDPE/PE BULAT 23mm IM', 'L MTH AKSESORIS (IM)', 12500, 'bisa dijual'),
(17, 'ALUMUNIUM FOIL HDPE/PE BULAT 30mm IM', 'L MTH AKSESORIS (IM)', 1000, 'bisa dijual'),
(18, 'ALUMUNIUM FOIL HDPE/PE SHEET 250mm IM', 'L MTH AKSESORIS (IM)', 13000, 'tidak bisa dijual'),
(19, 'ALUMUNIUM FOIL PET SHEET 250mm IM', 'L MTH AKSESORIS (IM)', 1000, 'tidak bisa dijual'),
(22, 'ARM PENDEK MODEL U', 'L MTH AKSESORIS (IM)', 13000, 'bisa dijual'),
(23, 'ARM SUPPORT KECIL', 'L MTH TABUNG (LK)', 13000, 'tidak bisa dijual'),
(24, 'ARM SUPPORT KOTAK PUTIH', 'L MTH AKSESORIS (IM)', 13000, 'tidak bisa dijual'),
(26, 'ARM SUPPORT PENDEK POLOS', 'L MTH TABUNG (LK)', 13000, 'bisa dijual'),
(27, 'ARM SUPPORT S IM', 'L MTH AKSESORIS (IM)', 1000, 'tidak bisa dijual'),
(28, 'ARM SUPPORT T (IMPORT)', 'L MTH AKSESORIS (IM)', 13000, 'bisa dijual'),
(29, 'ARM SUPPORT T - MODEL 1 ( LOKAL )', 'L MTH TABUNG (LK)', 10000, 'bisa dijual'),
(50, 'BLACK LASER TONER FP-T3 (100gr)', 'L MTH AKSESORIS (IM)', 13000, 'tidak bisa dijual'),
(56, 'BODY PRINTER CANON IP2770', 'SP MTH SPAREPART (LK)', 500, 'bisa dijual'),
(58, 'BODY PRINTER T13X', 'SP MTH SPAREPART (LK)', 15000, 'bisa dijual'),
(59, 'BOTOL 1000ML BLUE KHUSUS UNTUK EPSON R1800/R800 - ', 'CI MTH TINTA LAIN (IM)', 10000, 'bisa dijual'),
(60, 'BOTOL 1000ML CYAN KHUSUS UNTUK EPSON R1800/R800/R1', 'CI MTH TINTA LAIN (IM)', 10000, 'tidak bisa dijual'),
(61, 'BOTOL 1000ML GLOSS OPTIMIZER KHUSUS UNTUK EPSON R1', 'CI MTH TINTA LAIN (IM)', 1500, 'bisa dijual'),
(62, 'BOTOL 1000ML L.LIGHT BLACK KHUSUS UNTUK EPSON 2400', 'CI MTH TINTA LAIN (IM)', 1500, 'tidak bisa dijual'),
(63, 'BOTOL 1000ML LIGHT BLACK KHUSUS UNTUK EPSON 2400 -', 'CI MTH TINTA LAIN (IM)', 1500, 'tidak bisa dijual'),
(64, 'BOTOL 1000ML MAGENTA KHUSUS UNTUK EPSON R1800/R800', 'CI MTH TINTA LAIN (IM)', 1000, 'bisa dijual'),
(65, 'BOTOL 1000ML MATTE BLACK KHUSUS UNTUK EPSON R1800/', 'CI MTH TINTA LAIN (IM)', 1500, 'tidak bisa dijual'),
(66, 'BOTOL 1000ML ORANGE KHUSUS UNTUK EPSON R1900/R2000', 'CI MTH TINTA LAIN (IM)', 1500, 'bisa dijual'),
(67, 'BOTOL 1000ML RED KHUSUS UNTUK EPSON R1800/R800/R19', 'CI MTH TINTA LAIN (IM)', 1000, 'tidak bisa dijual'),
(68, 'BOTOL 1000ML YELLOW KHUSUS UNTUK EPSON R1800/R800/', 'CI MTH TINTA LAIN (IM)', 1500, 'tidak bisa dijual'),
(70, 'BOTOL KOTAK 100ML LK', 'L MTH AKSESORIS (LK)', 1000, 'bisa dijual'),
(72, 'BOTOL 10ML IM', 'S MTH STEMPEL (IM)', 1000, 'tidak bisa dijual'),
(74, 'alumunium', 'SP MTH SPAREPART (LK)', 900000, 'tidak bisa dijual'),
(80, 'alumunium', 'S MTH STEMPEL (IM)', 300000, 'bisa dijual');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data`
--
ALTER TABLE `data`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
