-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 19, 2019 at 05:29 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id10591975_tol_kel7`
--

-- --------------------------------------------------------

--
-- Table structure for table `golongan`
--

CREATE TABLE `golongan` (
  `id_gol` int(5) NOT NULL,
  `harga_gol` varchar(15) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `golongan`
--

INSERT INTO `golongan` (`id_gol`, `harga_gol`, `ket`) VALUES
(1, 'Rp 6500', 'Golongan 1'),
(2, 'Rp 9500', 'Golongan 2'),
(3, 'Rp 13000', 'Golongan 3');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` varchar(20) NOT NULL,
  `nama` text NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama`, `username`, `password`, `status`) VALUES
('123654', 'maman', 'mimin', '123654', 'Pegawai'),
('676', 'ddg', 'ugh', '676', 'Pegawai'),
('A0207-18', 'Indri', 'indri', 'A0207-18', 'Admin'),
('A1811-19', 'Arsy', 'arsy', 'A1811-19', 'Admin'),
('B0901-19', 'Farrell', 'farrell', 'B0901-19', 'Pegawai'),
('B1010-19', 'Zaidan', 'zaidan', 'B1010-19', 'Pegawai'),
('B1305-19', 'Novita', 'novita', 'B1305-19', 'Admin'),
('farrell', 'farrell f', 'farrell', 'farrell', 'Admin'),
('nik123', 'maman', 'mamans', 'nik123', 'Pegawai');

-- --------------------------------------------------------

--
-- Table structure for table `tol`
--

CREATE TABLE `tol` (
  `id_tol` int(10) NOT NULL,
  `golongan` varchar(35) NOT NULL,
  `harga_tol` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tol`
--

INSERT INTO `tol` (`id_tol`, `golongan`, `harga_tol`) VALUES
(1, 'Golongan 1', '6500'),
(2, 'Golongan 3', '13000'),
(3, 'Golongan 1', '6500'),
(4, 'Golongan 1', '6500'),
(5, 'Golongan 1', '6500'),
(6, 'Golongan 1', '6500'),
(7, 'Golongan 3', '13000'),
(8, 'Golongan 1', '6500'),
(9, 'Golongan 1', '6500'),
(10, 'Golongan 1', '6500'),
(11, 'Golongan 3', '13000'),
(12, 'Golongan 2', '9500'),
(13, 'Golongan 2', '9500'),
(14, 'Golongan 1', '6500'),
(15, 'Golongan 2', '9500'),
(16, 'Golongan 2', '9500'),
(17, 'Golongan 2', '9500'),
(18, 'Golongan 3', '13000'),
(19, 'Golongan 3', '13000'),
(20, 'Golongan 1', '6500'),
(21, 'Golongan 1', '6500'),
(22, 'Golongan 1', '6500'),
(23, 'Golongan 1', '6500'),
(24, 'Golongan 3', '13000'),
(25, 'Golongan 1', '6500'),
(26, 'Golongan 2', '9500'),
(27, 'Golongan 1', '6500'),
(28, 'Golongan 1', '6500'),
(29, 'Golongan 3', '13000'),
(30, 'Golongan 1', '6500'),
(31, 'Golongan 2', '9500'),
(32, 'Golongan 1', '6500'),
(33, 'Golongan 1', '6500'),
(34, 'Golongan 3', '13000'),
(35, 'Golongan 3', '13000'),
(36, 'Golongan 3', '13000'),
(37, 'Golongan 3', '13000'),
(38, 'Golongan 3', '13000'),
(39, 'Golongan 1', '6500'),
(40, 'Golongan 3', '13000'),
(41, 'Golongan 3', '13000'),
(42, 'Golongan 2', '9500'),
(43, 'Golongan 3', '13000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `golongan`
--
ALTER TABLE `golongan`
  ADD PRIMARY KEY (`id_gol`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `tol`
--
ALTER TABLE `tol`
  ADD PRIMARY KEY (`id_tol`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `golongan`
--
ALTER TABLE `golongan`
  MODIFY `id_gol` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tol`
--
ALTER TABLE `tol`
  MODIFY `id_tol` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
