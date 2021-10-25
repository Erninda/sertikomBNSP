-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Agu 2021 pada 16.07
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sertif`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `nomor` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `namaFile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `test`
--

INSERT INTO `test` (`id`, `nomor`, `kategori`, `judul`, `waktu`, `namaFile`) VALUES
(1, 'test1/001', 'Undangan', 'Undangan 01', '2021-08-28 09:26:18', 'undangan.pdf'),
(2, 'test1/002', 'Pengumuman', 'Pengumuman 01', '2021-08-28 09:27:15', 'pengumuman01.pdf'),
(7, 'test1/007', 'Undangan', 'Undangan 07', '2021-08-28 13:10:16', 'undangan.pdf'),
(8, 'pdf/001', 'Pengumuman', 'Test Pdf', '2021-08-28 13:34:19', 'Jadwal_Matrikulasi_D3-D4_Mahasiswa1.pdf');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
