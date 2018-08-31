-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2018 at 11:48 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eattendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `bahagian`
--

CREATE TABLE `bahagian` (
  `id` int(11) NOT NULL,
  `bahagian` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bahagian`
--

INSERT INTO `bahagian` (`id`, `bahagian`) VALUES
(1, 'CNC'),
(2, 'IE'),
(3, 'MI'),
(4, 'PJE'),
(5, 'RAC'),
(6, 'SU'),
(7, 'TKS');

-- --------------------------------------------------------

--
-- Table structure for table `jadual`
--

CREATE TABLE `jadual` (
  `idj` int(11) NOT NULL,
  `bahagian` int(11) NOT NULL,
  `sesi` int(11) NOT NULL,
  `kelas` int(11) NOT NULL,
  `hari` varchar(255) NOT NULL,
  `slot` int(11) NOT NULL,
  `id_pen` int(11) NOT NULL,
  `id_sub` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadual`
--

INSERT INTO `jadual` (`idj`, `bahagian`, `sesi`, `kelas`, `hari`, `slot`, `id_pen`, `id_sub`) VALUES
(2, 7, 1, 1, 'ISNIN', 2, 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `jawatan`
--

CREATE TABLE `jawatan` (
  `id` int(11) NOT NULL,
  `jawatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jawatan`
--

INSERT INTO `jawatan` (`id`, `jawatan`) VALUES
(1, 'Admin'),
(2, 'Ketua Bahagian'),
(4, 'Pelajar'),
(3, 'Pengajar');

-- --------------------------------------------------------

--
-- Table structure for table `pelajar`
--

CREATE TABLE `pelajar` (
  `id_pelajar` int(11) NOT NULL,
  `nama_pelajar` varchar(255) NOT NULL,
  `no_ndp` varchar(10) NOT NULL,
  `jawatan` int(11) NOT NULL,
  `pass_pelajar` varchar(15) NOT NULL,
  `bahagian` int(11) NOT NULL,
  `ic` varchar(15) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `sesi` int(11) NOT NULL,
  `kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelajar`
--

INSERT INTO `pelajar` (`id_pelajar`, `nama_pelajar`, `no_ndp`, `jawatan`, `pass_pelajar`, `bahagian`, `ic`, `alamat`, `sesi`, `kelas`) VALUES
(8, 'hasan', '0117001', 4, 'user123', 7, '1', '-', 1, 1),
(9, 'husin', '0117002', 4, 'user123', 7, '2', '-', 1, 1),
(10, 'aidil', '0117003', 4, 'user123', 7, '3', '-', 1, 1),
(11, 'piqa', '0117004', 4, 'user123', 7, '4', '-', 1, 1),
(12, 'justin', '0117005', 4, 'user123', 7, '5', '-', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengajar`
--

CREATE TABLE `pengajar` (
  `id_pengajar` int(11) NOT NULL,
  `nama_pengajar` varchar(255) NOT NULL,
  `email_pengajar` varchar(255) NOT NULL,
  `pass_pengajar` varchar(15) NOT NULL,
  `jawatan` int(11) NOT NULL,
  `bahagian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajar`
--

INSERT INTO `pengajar` (`id_pengajar`, `nama_pengajar`, `email_pengajar`, `pass_pengajar`, `jawatan`, `bahagian`) VALUES
(13, 'Rafidah', 'rafidah@ilpkl.com', 'user123', 2, 7),
(17, 'Azwadi', 'azwadi@ilpkl.com', 'user123', 3, 7),
(18, 'Shahir', 'shahir@ilpkl.com', 'user123', 3, 7),
(19, 'Siti zubaidah', 'siti@ilpkl.com', 'user123', 3, 7),
(20, 'Junaidi', 'ju@ilpkl.com', 'user123', 3, 7),
(21, 'bokhari', 'bok@ilpkl.com', 'user123', 3, 7);

-- --------------------------------------------------------

--
-- Table structure for table `sesi`
--

CREATE TABLE `sesi` (
  `ids` int(11) NOT NULL,
  `sesi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sesi`
--

INSERT INTO `sesi` (`ids`, `sesi`) VALUES
(1, '1/2017'),
(2, '2/2017'),
(3, '1/2018'),
(4, '2/2018');

-- --------------------------------------------------------

--
-- Table structure for table `subjek`
--

CREATE TABLE `subjek` (
  `idsub` int(11) NOT NULL,
  `subjek` varchar(255) NOT NULL,
  `kod` varchar(255) NOT NULL,
  `bahagian` int(11) NOT NULL,
  `sesi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjek`
--

INSERT INTO `subjek` (`idsub`, `subjek`, `kod`, `bahagian`, `sesi`) VALUES
(1, 'Final Year Project II', 'KKS8034', 7, 1),
(2, 'Computer System Security', 'KKS8013', 7, 1),
(3, 'Database', 'KKS8023', 7, 1),
(4, 'Troubleshooting', 'KKS8099', 7, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bahagian`
--
ALTER TABLE `bahagian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadual`
--
ALTER TABLE `jadual`
  ADD PRIMARY KEY (`idj`),
  ADD KEY `bahagian` (`bahagian`),
  ADD KEY `sesi` (`sesi`),
  ADD KEY `kelas` (`kelas`),
  ADD KEY `sub_pen` (`id_pen`);

--
-- Indexes for table `jawatan`
--
ALTER TABLE `jawatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jawatan` (`jawatan`);

--
-- Indexes for table `pelajar`
--
ALTER TABLE `pelajar`
  ADD PRIMARY KEY (`id_pelajar`),
  ADD KEY `bahagian` (`bahagian`),
  ADD KEY `kelas` (`kelas`),
  ADD KEY `sesi` (`sesi`),
  ADD KEY `jawatan` (`jawatan`);

--
-- Indexes for table `pengajar`
--
ALTER TABLE `pengajar`
  ADD PRIMARY KEY (`id_pengajar`),
  ADD KEY `jawatan` (`jawatan`),
  ADD KEY `bahagian` (`bahagian`);

--
-- Indexes for table `sesi`
--
ALTER TABLE `sesi`
  ADD PRIMARY KEY (`ids`);

--
-- Indexes for table `subjek`
--
ALTER TABLE `subjek`
  ADD PRIMARY KEY (`idsub`),
  ADD UNIQUE KEY `subjek` (`subjek`),
  ADD KEY `sesi` (`sesi`),
  ADD KEY `bahagian` (`bahagian`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bahagian`
--
ALTER TABLE `bahagian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jadual`
--
ALTER TABLE `jadual`
  MODIFY `idj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jawatan`
--
ALTER TABLE `jawatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pelajar`
--
ALTER TABLE `pelajar`
  MODIFY `id_pelajar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pengajar`
--
ALTER TABLE `pengajar`
  MODIFY `id_pengajar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `sesi`
--
ALTER TABLE `sesi`
  MODIFY `ids` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subjek`
--
ALTER TABLE `subjek`
  MODIFY `idsub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadual`
--
ALTER TABLE `jadual`
  ADD CONSTRAINT `jadual_ibfk_2` FOREIGN KEY (`sesi`) REFERENCES `sesi` (`ids`),
  ADD CONSTRAINT `jadual_ibfk_3` FOREIGN KEY (`bahagian`) REFERENCES `bahagian` (`id`);

--
-- Constraints for table `pelajar`
--
ALTER TABLE `pelajar`
  ADD CONSTRAINT `pelajar_ibfk_2` FOREIGN KEY (`bahagian`) REFERENCES `bahagian` (`id`),
  ADD CONSTRAINT `pelajar_ibfk_3` FOREIGN KEY (`sesi`) REFERENCES `sesi` (`ids`);

--
-- Constraints for table `pengajar`
--
ALTER TABLE `pengajar`
  ADD CONSTRAINT `pengajar_ibfk_1` FOREIGN KEY (`jawatan`) REFERENCES `jawatan` (`id`),
  ADD CONSTRAINT `pengajar_ibfk_2` FOREIGN KEY (`bahagian`) REFERENCES `bahagian` (`id`);

--
-- Constraints for table `subjek`
--
ALTER TABLE `subjek`
  ADD CONSTRAINT `subjek_ibfk_1` FOREIGN KEY (`sesi`) REFERENCES `sesi` (`ids`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
