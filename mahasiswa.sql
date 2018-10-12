-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Okt 2018 pada 05.10
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mhs`
--

CREATE TABLE `mhs` (
  `nama` varchar(20) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `hobi` varchar(35) NOT NULL,
  `fakultas` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mhs`
--

INSERT INTO `mhs` (`nama`, `nim`, `jenis_kelamin`, `hobi`, `fakultas`, `alamat`) VALUES
('M. MUSYAHID ABROR', '6701174119', 'Laki-Laki', 'BULU TANGKIS', 'FAKULTAS ILMU TERAPA', 'LOMBOK'),
('kamal amaw', '6701174145', 'Laki-Laki', 'SEPAKBOLA', 'FAKULTAS ILMU TERAPA', 'LOMBOK');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
