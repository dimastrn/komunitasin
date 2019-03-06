-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 06 Mar 2019 pada 11.40
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_komunitas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`) VALUES
(6, 'admin', '$2a$12$HwbiNQtZF6/5HviXl8ypd.n5d1Pe4RIl2YX0HZvxyEbCtILZ.7iHi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_komunitas`
--

CREATE TABLE `tb_komunitas` (
  `id_komunitas` int(11) NOT NULL,
  `nama` char(80) NOT NULL,
  `alamat` text NOT NULL,
  `gender` enum('pria','wanita') NOT NULL,
  `gaji` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_komunitas`
--

INSERT INTO `tb_komunitas` (`id_komunitas`, `nama`, `alamat`, `gender`, `gaji`) VALUES
(2, 'Adimas Sastra Nugraha', 'Kweden Tegalan', 'pria', 15000),
(5, 'Jane Doe', 'Florida', 'wanita', 1000000),
(6, 'Minerva Hooper', 'Rookserve', 'wanita', 1000000),
(7, 'Sage Rodriguez', 'Mispool', 'pria', 1000000),
(8, 'Philip Chaney', 'Nestle', 'pria', 100000000),
(9, 'Morris Boe', 'North Dakota', 'pria', 19230000),
(10, 'Doris Greene', 'Sologne', 'pria', 18000000),
(11, 'Mason Porter', 'Nessu', 'pria', 1200000),
(12, 'Alden Chen', 'Chaos', 'pria', 139000000),
(13, 'Colton Hodges', 'Texas', 'pria', 19000000),
(14, 'Baru', 'mana aja', 'pria', 10000),
(15, 'Baru', 'mana aja', 'pria', 10000),
(16, 'adsd', 'asd', 'pria', 123),
(17, 'adsd', 'asd', 'pria', 123),
(18, 'asd', 'asd', 'pria', 22);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tb_komunitas`
--
ALTER TABLE `tb_komunitas`
  ADD PRIMARY KEY (`id_komunitas`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_komunitas`
--
ALTER TABLE `tb_komunitas`
  MODIFY `id_komunitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
