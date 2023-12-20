-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jan 2021 pada 06.54
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cekresi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(13) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$jdov5y5tVCvc2Xf/XWfZYe6cAYf.IE6nqkRyHzT3fYu/.kwQfIEp2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `resi`
--

CREATE TABLE `resi` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `noresi` char(11) NOT NULL,
  `tujuanpengiriman` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `notelp` char(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `resi`
--

INSERT INTO `resi` (`id`, `nama`, `noresi`, `tujuanpengiriman`, `lokasi`, `notelp`) VALUES
(1, 'Muhammad Aziiz Pranaja', '19051397030', 'Samarinda', 'Surabaya', '081299816609'),
(2, 'Willyta Asmara Diya Abadi', '19051397017', 'Ponorogo', 'Nganjuk ', '085731687591'),
(3, 'Moch.Ibnoe Nadhir', '19051397020', 'Sidoarjo', 'Mojokerto', '081356780912'),
(4, 'Amalia Fanda', '19051397012', 'surabaya', 'gresik', '082376406327'),
(7, 'muhammad gibran', '19051397060', 'surabaya', 'ngawi', '087653205890'),
(14, 'herlina Syafhita M', '19051397070', 'pasuruan', 'malang', '086543098723'),
(15, 'Glory Natali Agnys ', '19051397006', 'solo', 'madiun', '084219087639'),
(16, 'Haidar Guhardy Muhammad', '19051397005', 'surabaya', 'kebraon', '081245879012'),
(18, 'Otniel Patar Iuliano', '19051397028', 'candi sidoarjo', 'bandara juanda', '081288714450'),
(19, 'Elsa Dwi Handayaningtyas', '19051397035', 'banyuwangi', 'probolinggo ', '081234431323');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `resi`
--
ALTER TABLE `resi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `resi`
--
ALTER TABLE `resi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
