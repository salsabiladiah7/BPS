-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Mar 2020 pada 14.01
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `statistik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pd`
--

CREATE TABLE `data_pd` (
  `no_kk` int(12) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `tempat` varchar(40) NOT NULL,
  `tgl` varchar(40) NOT NULL,
  `pendidikan` varchar(40) NOT NULL,
  `pekerjaan` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_pd`
--

INSERT INTO `data_pd` (`no_kk`, `nama`, `tempat`, `tgl`, `pendidikan`, `pekerjaan`) VALUES
(4488, 'Diah', 'malang', '01-09-2003', 'MAN', 'pelajar');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_pd`
--
ALTER TABLE `data_pd`
  ADD PRIMARY KEY (`no_kk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
