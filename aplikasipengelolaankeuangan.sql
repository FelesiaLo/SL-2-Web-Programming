-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Apr 2022 pada 21.36
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasipengelolaankeuangan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `accountprofile`
--

CREATE TABLE `accountprofile` (
  `namaDepan` varchar(30) NOT NULL,
  `namaTengah` varchar(30) NOT NULL,
  `namaBelakang` varchar(30) NOT NULL,
  `tempatLahir` varchar(30) NOT NULL,
  `tglLahir` date NOT NULL,
  `NIK` int(11) NOT NULL,
  `wargaNegara` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `noHP` bigint(13) NOT NULL,
  `alamat` text NOT NULL,
  `kodePos` int(11) NOT NULL,
  `fotoProfil` longblob NOT NULL,
  `username` varchar(30) NOT NULL,
  `password1` varchar(30) NOT NULL,
  `password2` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `accountprofile`
--

INSERT INTO `accountprofile` (`namaDepan`, `namaTengah`, `namaBelakang`, `tempatLahir`, `tglLahir`, `NIK`, `wargaNegara`, `email`, `noHP`, `alamat`, `kodePos`, `fotoProfil`, `username`, `password1`, `password2`) VALUES
('theresia', 'felesia', 'lo', 'Jakarta', '2002-10-13', 1234567, 'Indonesia', 'test@gmail.com', 123456789012, 'Jalan', 12187, 0x323032312d31312d3239202832292e706e67, 'fele', 'asdf', 'asdf');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `accountprofile`
--
ALTER TABLE `accountprofile`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `NIK` (`NIK`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
