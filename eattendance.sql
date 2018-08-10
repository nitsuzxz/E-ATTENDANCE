-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2018 at 06:13 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

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
-- Table structure for table `hari_slot`
--

CREATE TABLE `hari_slot` (
  `id` int(11) NOT NULL,
  `id_hari` int(11) NOT NULL,
  `id_slot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `kehadiran`
--

CREATE TABLE `kehadiran` (
  `id` int(11) NOT NULL,
  `id_pelajar` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_pengajar` int(11) NOT NULL,
  `att` tinyint(1) NOT NULL,
  `catatan` varchar(255) NOT NULL,
  `lampiran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `bahagian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `kelas`, `bahagian`) VALUES
(1, '1-1', 7),
(2, '1-2', 7),
(3, '1-3', 7),
(4, '1-4', 7),
(5, '2-1', 7),
(6, '2-2', 7),
(7, '2-3', 7),
(8, '2-4', 7);

-- --------------------------------------------------------

--
-- Table structure for table `pelajar`
--

CREATE TABLE `pelajar` (
  `id_pelajar` int(11) NOT NULL,
  `nama_pelajar` varchar(255) NOT NULL,
  `no_ndp` varchar(10) NOT NULL,
  `pass_pelajar` varchar(15) NOT NULL,
  `bahagian` int(11) NOT NULL,
  `ic` varchar(15) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelajar`
--

INSERT INTO `pelajar` (`id_pelajar`, `nama_pelajar`, `no_ndp`, `pass_pelajar`, `bahagian`, `ic`, `alamat`, `kelas`) VALUES
(6, 'zarith', '1919191', 'user123', 7, '90012', 'johor', 3),
(7, 'luqman', '890', 'user123', 2, '890988900988', '-', 2);

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
(14, 'ali', 'ali@ilpkl.com', 'user123', 3, 7),
(15, 'amir', 'amir@ilpkl.com', 'user123', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `shari`
--

CREATE TABLE `shari` (
  `id` int(11) NOT NULL,
  `hari` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shari`
--

INSERT INTO `shari` (`id`, `hari`) VALUES
(1, 'ISNIN'),
(5, 'JUMAAT'),
(4, 'KHAMIS'),
(3, 'RABU'),
(2, 'SELASA');

-- --------------------------------------------------------

--
-- Table structure for table `slot`
--

CREATE TABLE `slot` (
  `id` int(11) NOT NULL,
  `slot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slot`
--

INSERT INTO `slot` (`id`, `slot`) VALUES
(1, 1),
(2, 2),
(3, 1),
(4, 2),
(5, 3),
(6, 4),
(7, 5),
(8, 6),
(9, 5),
(10, 6),
(11, 7),
(12, 7);

-- --------------------------------------------------------

--
-- Table structure for table `subjek`
--

CREATE TABLE `subjek` (
  `id` int(11) NOT NULL,
  `subjek` varchar(255) NOT NULL,
  `kod` varchar(255) NOT NULL,
  `bahagian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjek`
--

INSERT INTO `subjek` (`id`, `subjek`, `kod`, `bahagian`) VALUES
(4, 'math', 'mth42', 6);

-- --------------------------------------------------------

--
-- Table structure for table `subpen`
--

CREATE TABLE `subpen` (
  `id` int(11) NOT NULL,
  `sub` int(11) NOT NULL,
  `pengajar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subpen`
--

INSERT INTO `subpen` (`id`, `sub`, `pengajar`) VALUES
(1, 4, 13);

-- --------------------------------------------------------

--
-- Table structure for table `ttbp`
--

CREATE TABLE `ttbp` (
  `id_ttb` int(11) NOT NULL,
  `id_pengajar` int(11) NOT NULL,
  `id_bahagian` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_sh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bahagian`
--
ALTER TABLE `bahagian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hari_slot`
--
ALTER TABLE `hari_slot`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_hari` (`id_hari`),
  ADD KEY `id_slot` (`id_slot`);

--
-- Indexes for table `jawatan`
--
ALTER TABLE `jawatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jawatan` (`jawatan`);

--
-- Indexes for table `kehadiran`
--
ALTER TABLE `kehadiran`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_pelajar` (`id_pelajar`),
  ADD KEY `id_pengajar` (`id_pengajar`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bahagian` (`bahagian`);

--
-- Indexes for table `pelajar`
--
ALTER TABLE `pelajar`
  ADD PRIMARY KEY (`id_pelajar`),
  ADD KEY `bahagian` (`bahagian`),
  ADD KEY `kelas` (`kelas`);

--
-- Indexes for table `pengajar`
--
ALTER TABLE `pengajar`
  ADD PRIMARY KEY (`id_pengajar`),
  ADD KEY `jawatan` (`jawatan`),
  ADD KEY `bahagian` (`bahagian`);

--
-- Indexes for table `shari`
--
ALTER TABLE `shari`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hari` (`hari`);

--
-- Indexes for table `slot`
--
ALTER TABLE `slot`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `subjek`
--
ALTER TABLE `subjek`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bahagian` (`bahagian`);

--
-- Indexes for table `subpen`
--
ALTER TABLE `subpen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub` (`sub`),
  ADD KEY `pengajar` (`pengajar`);

--
-- Indexes for table `ttbp`
--
ALTER TABLE `ttbp`
  ADD PRIMARY KEY (`id_ttb`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_bahagian` (`id_bahagian`),
  ADD KEY `id_pengajar` (`id_pengajar`),
  ADD KEY `id_slot` (`id_sh`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bahagian`
--
ALTER TABLE `bahagian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hari_slot`
--
ALTER TABLE `hari_slot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jawatan`
--
ALTER TABLE `jawatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kehadiran`
--
ALTER TABLE `kehadiran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pelajar`
--
ALTER TABLE `pelajar`
  MODIFY `id_pelajar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pengajar`
--
ALTER TABLE `pengajar`
  MODIFY `id_pengajar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `shari`
--
ALTER TABLE `shari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slot`
--
ALTER TABLE `slot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `subjek`
--
ALTER TABLE `subjek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subpen`
--
ALTER TABLE `subpen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ttbp`
--
ALTER TABLE `ttbp`
  MODIFY `id_ttb` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hari_slot`
--
ALTER TABLE `hari_slot`
  ADD CONSTRAINT `hari_slot_ibfk_1` FOREIGN KEY (`id_hari`) REFERENCES `shari` (`id`),
  ADD CONSTRAINT `hari_slot_ibfk_2` FOREIGN KEY (`id_slot`) REFERENCES `slot` (`id`);

--
-- Constraints for table `kehadiran`
--
ALTER TABLE `kehadiran`
  ADD CONSTRAINT `kehadiran_ibfk_1` FOREIGN KEY (`id_pelajar`) REFERENCES `pelajar` (`id_pelajar`),
  ADD CONSTRAINT `kehadiran_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `bahagian` (`id`),
  ADD CONSTRAINT `kehadiran_ibfk_4` FOREIGN KEY (`id_pengajar`) REFERENCES `pengajar` (`id_pengajar`);

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`bahagian`) REFERENCES `bahagian` (`id`);

--
-- Constraints for table `pelajar`
--
ALTER TABLE `pelajar`
  ADD CONSTRAINT `pelajar_ibfk_1` FOREIGN KEY (`kelas`) REFERENCES `kelas` (`id`),
  ADD CONSTRAINT `pelajar_ibfk_2` FOREIGN KEY (`bahagian`) REFERENCES `bahagian` (`id`);

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
  ADD CONSTRAINT `subjek_ibfk_1` FOREIGN KEY (`bahagian`) REFERENCES `bahagian` (`id`);

--
-- Constraints for table `subpen`
--
ALTER TABLE `subpen`
  ADD CONSTRAINT `subpen_ibfk_1` FOREIGN KEY (`pengajar`) REFERENCES `pengajar` (`id_pengajar`),
  ADD CONSTRAINT `subpen_ibfk_2` FOREIGN KEY (`sub`) REFERENCES `subjek` (`id`);

--
-- Constraints for table `ttbp`
--
ALTER TABLE `ttbp`
  ADD CONSTRAINT `ttbp_ibfk_1` FOREIGN KEY (`id_sh`) REFERENCES `hari_slot` (`id`),
  ADD CONSTRAINT `ttbp_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id`),
  ADD CONSTRAINT `ttbp_ibfk_3` FOREIGN KEY (`id_bahagian`) REFERENCES `bahagian` (`id`),
  ADD CONSTRAINT `ttbp_ibfk_4` FOREIGN KEY (`id_pengajar`) REFERENCES `pengajar` (`id_pengajar`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
