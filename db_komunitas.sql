-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 21 Feb 2019 pada 12.51
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
(2, 'Adimas Sastra N', 'Kweden T', 'pria', 15000),
(4, 'John Doe', 'Missipi', 'pria', 12320300),
(5, 'Jane Doe', 'Florida', 'wanita', 1000000),
(6, 'Minerva Hooper', 'Rookserve', 'wanita', 1000000),
(7, 'Sage Rodriguez', 'Mispool', 'pria', 1000000),
(8, 'Philip Chaney', 'Nestle', 'pria', 100000000),
(9, 'Morris Boe', 'North Dakota', 'pria', 19230000),
(10, 'Doris Greene', 'Sologne', 'pria', 18000000),
(11, 'Mason Porter', 'Nessu', 'pria', 1200000),
(12, 'Alden Chen', 'Chaos', 'pria', 139000000),
(13, 'Colton Hodges', 'Texas', 'pria', 19000000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_komunitas`
--
ALTER TABLE `tb_komunitas`
  ADD PRIMARY KEY (`id_komunitas`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_komunitas`
--
ALTER TABLE `tb_komunitas`
  MODIFY `id_komunitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
