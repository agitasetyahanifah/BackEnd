-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2022 at 05:28 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penduduk`
--

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `id` int(11) NOT NULL,
  `nik` varchar(25) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `status` varchar(30) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `kewarganegaraan` varchar(20) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `tgl` date NOT NULL,
  `golDarah` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`id`, `nik`, `nama`, `jenis`, `alamat`, `status`, `pekerjaan`, `kewarganegaraan`, `tempat`, `tgl`, `golDarah`) VALUES
(6, '331311560103008', 'Agita Setya Hanifah', 'Perempuan', 'Jetak RT 04 RW 02 Suruhkalang, Jaten, Karanganyar', 'Lajang', 'Mahasiswi', 'WNI', 'Karanganyar', '2003-01-16', 'B'),
(7, '331311560103008', 'Agita', 'Perempuan', 'Karanganyar', 'Belum Menikah', 'Mahasiswi', 'WNI', 'Karanganyar', '2003-01-16', 'B');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
