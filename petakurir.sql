-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Bulan Mei 2020 pada 03.53
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petakurir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_peta`
--

CREATE TABLE `tb_peta` (
  `id_peta` int(11) NOT NULL,
  `nama_pemilik` varchar(100) DEFAULT NULL,
  `alamat_lengkap` text DEFAULT NULL,
  `kota` varchar(150) DEFAULT NULL,
  `provinsi` varchar(150) DEFAULT NULL,
  `nohp` varchar(25) DEFAULT NULL,
  `lat` varchar(150) NOT NULL,
  `lon` varchar(150) NOT NULL,
  `terakhir_dikunjungi` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_peta`
--

INSERT INTO `tb_peta` (`id_peta`, `nama_pemilik`, `alamat_lengkap`, `kota`, `provinsi`, `nohp`, `lat`, `lon`, `terakhir_dikunjungi`) VALUES
(1, 'Rizki', 'Jalan Majapahit No. 5 Kecamatan Pungging', 'Mojokerto', 'Jawa Timur', '082245227822', '-7.471056', '112.440360', '2020-04-26 15:06:00'),
(2, 'Ahmad', 'Jalan Bhayangkara No. 55', 'Sidoarjo', 'Jawa Timur', '0899223442223', '-7.450925', '113.701535', '2020-04-25 17:00:00'),
(6, 'Kevin', 'Jalan Batu Bara No. 20', 'Malang', 'Jawa Timur', '08223344151515', '-8.052974822051658', '112.96229013719743', '2020-04-29 13:33:54'),
(7, 'Abadi', 'Jalan A Nomor 20 Desa Mawar', 'Sidoarjo', 'Jawa Timur', '098823244142', '-7.530229356606238', '113.59618738582346', '2020-05-07 17:09:42'),
(8, 'asd', 'ffad', 'afasd', 'fsaf', 'asdfa', '-8.16853691256933', '112.97627942800635', '2020-05-07 17:14:51');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_peta`
--
ALTER TABLE `tb_peta`
  ADD PRIMARY KEY (`id_peta`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_peta`
--
ALTER TABLE `tb_peta`
  MODIFY `id_peta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
