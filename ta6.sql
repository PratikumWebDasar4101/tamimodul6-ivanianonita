-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2018 at 03:43 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta6`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE `daftar` (
  `id` int(255) NOT NULL,
  `nim` text NOT NULL,
  `nama` text NOT NULL,
  `kelas` text NOT NULL,
  `jenis_kelamin` text NOT NULL,
  `hobi` text NOT NULL,
  `fakultas` text NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`id`, `nim`, `nama`, `kelas`, `jenis_kelamin`, `hobi`, `fakultas`, `alamat`) VALUES
(0, '65467', 'hgfhg', 'D3MI4102', 'perempuan', 'Array', 'FIF', 'ghfghg'),
(1, '2', 'vania', 'D3MI4101', 'perempuan', 'Membaca', 'FIF', 'dlg'),
(2, '4063', 'Shintaa', 'D3MI4101', 'perempuan', 'Membaca', 'FRI', 'wdq'),
(3, '54635', 'risky', 'D3MI4103', 'laki-laki', 'Berenang', 'FRI', 'klaten'),
(1980, '1234567', 'taaaa', 'D3MI4103', 'perempuan', 'Berenang', 'FIT', 'sukapura'),
(9780, '11890', 'Nateline', 'D3MI4103', 'perempuan', 'Membaca', 'FIT', 'Bojongsoang'),
(10010, '213245', 'Nadd', '', '', '', 'FIT', 'Dayeuhkolot'),
(11108, '670119871', 'nana', 'D3MI4102', 'perempuan', 'Nontonfilm', 'FEB', 'Buah Batu'),
(12345, '90876778', 'nadine', 'D3MI4103', 'perempuan', 'Berenang', 'FEB', 'Buah Batu'),
(33333, '67908', 'Nonita', 'D3MI4101', 'perempuan', 'Berenang', 'FIT', 'sukapura'),
(44444, '55555', 'Fafa', 'D3MI4102', 'laki-laki', 'Berenang', 'FIT', 'Klaten'),
(66666, '11111', 'Dilla', '', '', '', 'FIT', 'Bandung'),
(67098, '167890233', 'Nadia', 'D3MI4101', 'perempuan', 'Berenang', 'FIT', 'klaten'),
(98768, '178960', 'Siti Aminah', '', '', '', 'FIT', 'Buah Batu'),
(112233, '6701123', 'Shinta', 'D3MI4101', 'perempuan', 'Berenang', 'FIT', 'Se'),
(891011, '112234455', 'Shintaa', 'D3MI4101', 'laki-laki', 'Nontonfilm', 'FIT', 'Semarang'),
(1234567, '189076543', 'Riska ', '', '', '', 'FIF', 'Baleendah'),
(1227851783, '1221212', 'hesti', '', '', '', 'FIT', 'Sees');

-- --------------------------------------------------------

--
-- Table structure for table `posting`
--

CREATE TABLE `posting` (
  `id` int(225) NOT NULL,
  `nama` text NOT NULL,
  `isi` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posting`
--
ALTER TABLE `posting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posting`
--
ALTER TABLE `posting`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
