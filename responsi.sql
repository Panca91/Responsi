-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Nov 2021 pada 04.41
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `responsi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `inventaris`
--

CREATE TABLE `inventaris` (
  `item_id` varchar(10) NOT NULL,
  `item_name` varchar(30) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `unit` varchar(15) DEFAULT NULL,
  `arrival_date` date DEFAULT NULL,
  `category` varchar(20) DEFAULT NULL,
  `item_status` varchar(20) DEFAULT NULL,
  `price` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `inventaris`
--

INSERT INTO `inventaris` (`item_id`, `item_name`, `amount`, `unit`, `arrival_date`, `category`, `item_status`, `price`) VALUES
('BMW001', 'BMW Sports 001X', 3, 'units', '2021-10-08', 'Vehicles', 'Well', 1200000000),
('CHR', 'Chair', 15, 'units', '2021-09-14', 'Inventory Office', 'Well', 20000),
('PBOOKHP39', 'HP ProBook ', 15, 'fruits', '2021-09-27', 'Elektronic', 'Well', 5000000),
('TBL', 'Table', 15, 'units', '2021-09-15', 'Inventory Office', 'Well', 50000),
('TNH01', 'Main Building Land', 350, 'm2', '2003-12-17', 'Buildings', 'Well', 977605000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) DEFAULT NULL,
  `full_name` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone_num` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`username`, `password`, `full_name`, `email`, `phone_num`) VALUES
('admin', 'admin123', 'Panca Aulia R', 'panca@gmail.com', '087899091345'),
('petugas', 'petugas123', 'Petugas', 'petugas@gmail.com', '089912347645');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `inventaris`
--
ALTER TABLE `inventaris`
  ADD PRIMARY KEY (`item_id`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
