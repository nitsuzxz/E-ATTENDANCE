-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2018 at 08:33 PM
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
(7, 'Teknologi Komputer Sistem');

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
(7, 7, 1, 1, 'ISNIN', 1, 33, 2),
(8, 7, 1, 1, 'ISNIN', 2, 33, 2),
(9, 7, 1, 1, 'ISNIN', 3, 33, 2),
(10, 7, 1, 1, 'ISNIN', 4, 33, 2),
(11, 7, 1, 1, 'ISNIN', 5, 33, 2),
(12, 7, 1, 1, 'ISNIN', 6, 33, 2),
(13, 7, 1, 1, 'ISNIN', 7, 33, 2),
(14, 7, 1, 1, 'SELASA', 1, 32, 2),
(15, 7, 1, 1, 'SELASA', 2, 32, 2),
(16, 7, 1, 1, 'SELASA', 3, 32, 2),
(17, 7, 1, 1, 'SELASA', 4, 32, 2),
(18, 7, 1, 1, 'SELASA', 5, 32, 2),
(19, 7, 1, 1, 'SELASA', 6, 32, 2),
(20, 7, 1, 1, 'SELASA', 7, 32, 2),
(21, 7, 1, 1, 'RABU', 1, 31, 3),
(22, 7, 1, 1, 'RABU', 2, 31, 3),
(23, 7, 1, 1, 'RABU', 3, 31, 3),
(24, 7, 1, 1, 'RABU', 4, 31, 3),
(25, 7, 1, 1, 'RABU', 5, 31, 3),
(26, 7, 1, 1, 'RABU', 6, 31, 3),
(27, 7, 1, 1, 'RABU', 7, 31, 3),
(28, 7, 1, 1, 'KHAMIS', 1, 25, 3),
(29, 7, 1, 1, 'KHAMIS', 2, 25, 3),
(30, 7, 1, 1, 'KHAMIS', 3, 25, 3),
(31, 7, 1, 1, 'KHAMIS', 4, 25, 3),
(32, 7, 1, 1, 'KHAMIS', 5, 25, 3),
(33, 7, 1, 1, 'KHAMIS', 6, 25, 3),
(34, 7, 1, 1, 'KHAMIS', 7, 25, 3),
(35, 7, 1, 1, 'JUMAAT', 1, 34, 4),
(36, 7, 1, 1, 'JUMAAT', 2, 34, 4),
(37, 7, 1, 1, 'JUMAAT', 3, 34, 4),
(38, 7, 1, 1, 'JUMAAT', 4, 34, 4),
(39, 7, 1, 1, 'JUMAAT', 5, 34, 4),
(40, 7, 1, 1, 'JUMAAT', 6, 34, 4),
(41, 7, 1, 1, 'JUMAAT', 7, 34, 4);

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
-- Table structure for table `ke`
--

CREATE TABLE `ke` (
  `id_k` int(11) NOT NULL,
  `idj` int(11) NOT NULL,
  `id_p` int(11) NOT NULL,
  `kehadiran` varchar(11) NOT NULL,
  `tarikh` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ke`
--

INSERT INTO `ke` (`id_k`, `idj`, `id_p`, `kehadiran`, `tarikh`) VALUES
(1, 7, 1, '/', '2018-10-01'),
(2, 7, 2, '/', '2018-10-01'),
(3, 8, 1, '/', '2018-10-01'),
(4, 8, 2, '/', '2018-10-01'),
(5, 9, 1, '/', '2018-10-01'),
(6, 9, 2, '/', '2018-10-01'),
(7, 10, 1, '/', '2018-10-01'),
(8, 10, 2, '/', '2018-10-01'),
(9, 11, 1, '/', '2018-10-01'),
(10, 11, 2, '/', '2018-10-01'),
(11, 12, 1, '/', '2018-10-01'),
(12, 12, 2, '/', '2018-10-01'),
(13, 13, 1, '/', '2018-10-01'),
(14, 13, 2, '/', '2018-10-01'),
(15, 14, 1, 'o', '2018-10-02'),
(16, 14, 2, 'o', '2018-10-02'),
(17, 15, 1, 'o', '2018-10-02'),
(18, 15, 2, 'o', '2018-10-02'),
(19, 15, 1, 'o', '2018-10-02'),
(20, 15, 2, 'o', '2018-10-02'),
(21, 16, 1, 'o', '2018-10-02'),
(22, 16, 2, 'o', '2018-10-02'),
(23, 17, 1, 'o', '2018-10-02'),
(24, 17, 2, 'o', '2018-10-02'),
(25, 18, 1, 'o', '2018-10-02'),
(26, 18, 2, 'o', '2018-10-02'),
(27, 19, 1, 'o', '2018-10-02'),
(28, 19, 2, 'o', '2018-10-02'),
(29, 20, 1, 'o', '2018-10-02'),
(30, 20, 2, 'o', '2018-10-02'),
(31, 21, 1, 'o', '2018-10-03'),
(32, 21, 2, 'o', '2018-10-03'),
(33, 22, 1, 'o', '2018-10-03'),
(34, 22, 2, 'o', '2018-10-03'),
(35, 23, 1, 'o', '2018-10-03'),
(36, 23, 2, 'o', '2018-10-03'),
(37, 24, 1, 'o', '2018-10-03'),
(38, 24, 2, 'o', '2018-10-03'),
(39, 25, 1, 'o', '2018-10-03'),
(40, 25, 2, 'o', '2018-10-03'),
(41, 26, 1, 'o', '2018-10-03'),
(42, 26, 2, 'o', '2018-10-03'),
(43, 27, 1, 'o', '2018-10-03'),
(44, 27, 2, 'o', '2018-10-03'),
(45, 28, 1, 'o', '2018-10-04'),
(46, 28, 2, 'o', '2018-10-04'),
(47, 29, 1, 'k', '2018-10-04'),
(48, 29, 2, 'k', '2018-10-04'),
(49, 30, 1, 'k', '2018-10-04'),
(50, 30, 2, 'k', '2018-10-04'),
(51, 31, 1, 'k', '2018-10-04'),
(52, 31, 2, 'k', '2018-10-04'),
(53, 32, 1, 'k', '2018-10-04'),
(54, 32, 2, 'k', '2018-10-04'),
(55, 33, 1, 'k', '2018-10-04'),
(56, 33, 2, 'k', '2018-10-04'),
(57, 34, 1, 'k', '2018-10-04'),
(58, 34, 2, 'k', '2018-10-04'),
(59, 35, 1, '/', '2018-10-05'),
(60, 35, 2, '/', '2018-10-05'),
(61, 36, 1, '/', '2018-10-05'),
(62, 36, 2, '/', '2018-10-05'),
(63, 37, 1, '/', '2018-10-05'),
(64, 37, 2, '/', '2018-10-05'),
(65, 38, 1, '/', '2018-10-05'),
(66, 38, 2, '/', '2018-10-05'),
(67, 39, 1, '/', '2018-10-05'),
(68, 39, 2, '/', '2018-10-05'),
(69, 40, 1, '/', '2018-10-05'),
(70, 40, 2, '/', '2018-10-05'),
(71, 41, 1, '/', '2018-10-05'),
(72, 41, 2, '/', '2018-10-05'),
(73, 7, 1, '/', '2018-10-08'),
(74, 7, 2, '/', '2018-10-08'),
(75, 8, 1, '/', '2018-10-01'),
(76, 8, 2, '/', '2018-10-01'),
(77, 9, 1, '/', '2018-10-04'),
(78, 9, 2, '/', '2018-10-04'),
(79, 10, 1, '/', '2018-10-08'),
(80, 10, 2, '/', '2018-10-08'),
(81, 14, 1, '/', '2018-10-09'),
(82, 14, 2, '/', '2018-10-09'),
(83, 15, 1, '/', '2018-10-09'),
(84, 15, 2, '/', '2018-10-09'),
(85, 17, 1, '/', '2018-10-09'),
(86, 17, 2, '/', '2018-10-09');

-- --------------------------------------------------------

--
-- Table structure for table `pelajar`
--

CREATE TABLE `pelajar` (
  `id_pelajar` int(11) NOT NULL,
  `nama_pelajar` varchar(255) NOT NULL,
  `no_ndp` varchar(10) NOT NULL,
  `jawatan` int(11) NOT NULL,
  `bahagian` int(11) NOT NULL,
  `ic` varchar(15) NOT NULL,
  `sesi` int(11) NOT NULL,
  `kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelajar`
--

INSERT INTO `pelajar` (`id_pelajar`, `nama_pelajar`, `no_ndp`, `jawatan`, `bahagian`, `ic`, `sesi`, `kelas`) VALUES
(1, 'Justin Belaman A/L Xavier', '01115243', 4, 7, '990999-14-1122', 1, 1),
(2, 'Zul Hisyam Bin Azman', '01115236', 4, 7, '990988-14-4338', 1, 1);

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
(23, 'ikhmal', 'ikhmal', 'user123', 1, 7),
(25, 'rafidah', 'rafidah', 'user123', 2, 7),
(31, 'Bokhari', 'bokhari', 'user123', 3, 7),
(32, 'Azwadi', 'azwadi', 'user123', 3, 7),
(33, 'Siti Zubaidah', 'zubaidah', 'user123', 3, 7),
(34, 'Ahmad Shahir', 'shahir', 'user123', 3, 7);

-- --------------------------------------------------------

--
-- Table structure for table `sesi`
--

CREATE TABLE `sesi` (
  `ids` int(11) NOT NULL,
  `sesi` varchar(255) NOT NULL,
  `semester` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sesi`
--

INSERT INTO `sesi` (`ids`, `sesi`, `semester`) VALUES
(1, '1/2017', 'Semester 4'),
(2, '2/2017', 'Semester 3'),
(3, '1/2018', 'Semester 2'),
(4, '2/2018', 'Semester 1');

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
(2, 'Computer System Security', 'KKS8013', 7, 1),
(3, 'Database', 'KKS8023', 7, 1),
(4, 'Final Year Project', 'KKS8044', 7, 1);

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
  ADD KEY `sub_pen` (`id_pen`),
  ADD KEY `id_sub` (`id_sub`);

--
-- Indexes for table `jawatan`
--
ALTER TABLE `jawatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jawatan` (`jawatan`);

--
-- Indexes for table `ke`
--
ALTER TABLE `ke`
  ADD PRIMARY KEY (`id_k`),
  ADD KEY `id_p` (`id_p`),
  ADD KEY `idj` (`idj`);

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
  MODIFY `idj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `jawatan`
--
ALTER TABLE `jawatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ke`
--
ALTER TABLE `ke`
  MODIFY `id_k` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `pelajar`
--
ALTER TABLE `pelajar`
  MODIFY `id_pelajar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengajar`
--
ALTER TABLE `pengajar`
  MODIFY `id_pengajar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

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
  ADD CONSTRAINT `jadual_ibfk_3` FOREIGN KEY (`bahagian`) REFERENCES `bahagian` (`id`),
  ADD CONSTRAINT `jadual_ibfk_4` FOREIGN KEY (`id_sub`) REFERENCES `subjek` (`idsub`) ON DELETE CASCADE;

--
-- Constraints for table `ke`
--
ALTER TABLE `ke`
  ADD CONSTRAINT `ke_ibfk_1` FOREIGN KEY (`id_p`) REFERENCES `pelajar` (`id_pelajar`) ON DELETE CASCADE;

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
