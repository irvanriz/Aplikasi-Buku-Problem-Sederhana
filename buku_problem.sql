-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24 Jul 2018 pada 11.49
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buku_problem`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bk_problem`
--

CREATE TABLE `bk_problem` (
  `id` int(11) NOT NULL,
  `tgl_problem` date NOT NULL,
  `problem` varchar(500) NOT NULL,
  `tgl_solusi` date NOT NULL,
  `solusi` varchar(500) NOT NULL,
  `status` varchar(20) NOT NULL,
  `user` varchar(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `bk_problem`
--

INSERT INTO `bk_problem` (`id`, `tgl_problem`, `problem`, `tgl_solusi`, `solusi`, `status`, `user`) VALUES
(16, '2018-07-17', 'Printer Keuangan Rusak', '2018-07-18', 'sadgasdgadsfg', 'Done', 'Irvan'),
(17, '2018-07-17', 'Problem Printer HRD ', '2018-07-20', 'Ganti Printer', 'Done', 'Irvan'),
(18, '2018-07-17', 'Laptop Legal Mati', '2018-07-18', 'Ganti Laptop', 'Done', 'Irvan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bk_problem`
--
ALTER TABLE `bk_problem`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bk_problem`
--
ALTER TABLE `bk_problem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
