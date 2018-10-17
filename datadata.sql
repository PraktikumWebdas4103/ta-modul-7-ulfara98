-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Okt 2018 pada 17.10
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datadata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nama` varchar(30) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `asal` varchar(25) NOT NULL,
  `moto` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nama`, `nim`, `jk`, `prodi`, `fakultas`, `asal`, `moto`) VALUES
('Taehyung', '6701123456', 'Laki-Laki', 'DesainInterior', 'FIK', 'Itaewon', 'cheer up and smile!'),
('Aluna Claire', '6701136744', 'Perempuan', 'DesainInterior', 'FIK', 'Jerman', 'Cherie, ja!'),
('Iqbaal', '6701156789', 'Laki-Laki', 'ManajemenInformatika', 'FIT', 'Jakarta', 'loving u was blue'),
('Ulfa', '6701171070', 'Perempuan', 'ManajemenInformatika', 'FIT', 'Bandung', 'Fall seven times, stand up eight.'),
('Renachan', '6701179822', 'Perempuan', 'ManajemenInformatika', 'FIT', 'Japan', 'Do it now, or never.'),
('Miyawaki Sakura', '6702236745', 'Perempuan', 'DesainInterior', 'FIK', 'Hokkaido', 'Life is a candy!');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
