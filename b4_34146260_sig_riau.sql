-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql105.byetcluster.com
-- Waktu pembuatan: 25 Bulan Mei 2023 pada 22.07
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `b4_34146260_sig_riau`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `titik_api`
--

CREATE TABLE `titik_api` (
  `id_titik` int(8) NOT NULL,
  `kabupaten_kota` varchar(255) NOT NULL,
  `ibukota` varchar(255) NOT NULL,
  `luas_wilayah` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `titik_panas` varchar(255) NOT NULL,
  `curah_hujan` varchar(255) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `titik_api`
--

INSERT INTO `titik_api` (`id_titik`, `kabupaten_kota`, `ibukota`, `luas_wilayah`, `status`, `titik_panas`, `curah_hujan`, `latitude`, `longitude`) VALUES
(1, 'Kab. Indragiri hilir', 'Indragiri hilir ', '12614,78', 'Tinggi', '408', '2.056', ' -0.4911523', '101.5888768'),
(2, 'Kab. Indragiri Hulu', 'Indragiri Hulu', '7723,80', 'Sedang', '128', '2.702', '-0.4911523', '-101.5888768'),
(3, 'Kab. Kampar', 'Kampar', '10983,47', 'Rendah', '55', '2252', '0.3216939', '100.4017736'),
(4, 'Kab. Kepulauan Meranti', 'Kepulauan Meranti', '3707,84', 'Tinggi', '366', '2605', '1.057515', '102.0620569'),
(5, 'Kab. Kuantan Singing', 'Kuantan Singing', '5259,36', 'rendah', '20', '1.925', '-0.4924107', '100.8169918'),
(6, 'Kab. Pelalawan', 'Pelalawan', '12758,45', 'Tinggi', '961', '1.925', '0.4414579', '102.0680992'),
(7, 'Kab. Rokan hilir', 'Rokan hilir', '12614,78', 'Tinggi', '321', '2.503', '2.0730874', '99.4852943'),
(8, 'Kab. Rokan hulu', 'Rokan hulu', '7723,80', 'rendah', '62', '2.347', '0.8945747', '99.8309565'),
(9, 'Kab. Siak ', 'Siak', '8275,18', 'Tinggi', '435', '1265', '0.8305629', '100.5847835'),
(10, 'Kab. Kota Dumai', 'Kota Dumai', '1623,38', 'Sedang', '268', '2.029', '1.6677457', '101.3290553'),
(11, 'Kab. Pekan baru', 'Pekan baru', '632,27', 'rendah', '6', '2.070', '0.5141324', '101.2763561'),
(12, 'Kab. Bengkalis', 'Bengkalis', '6975,41', 'Tinggi', '903', '1.944', '1.4892568', '102.0595012');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `titik_api`
--
ALTER TABLE `titik_api`
  ADD PRIMARY KEY (`id_titik`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `titik_api`
--
ALTER TABLE `titik_api`
  MODIFY `id_titik` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
