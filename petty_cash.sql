-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2017 at 02:57 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petty_cash`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_data`
--

CREATE TABLE `tb_data` (
  `idData` int(11) NOT NULL,
  `idProject` int(11) NOT NULL,
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_data`
--

INSERT INTO `tb_data` (`idData`, `idProject`, `idUser`) VALUES
(1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengeluaran`
--

CREATE TABLE `tb_pengeluaran` (
  `idPengeluaran` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idProject` int(11) DEFAULT NULL,
  `namaPengeluaran` varchar(100) NOT NULL,
  `jumlahPengeluaran` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengeluaran`
--

INSERT INTO `tb_pengeluaran` (`idPengeluaran`, `idUser`, `idProject`, `namaPengeluaran`, `jumlahPengeluaran`, `tanggal`, `foto`) VALUES
(1, 2, 1, 'makan malam', 1000000, '2017-01-25 23:51:29', '401811?304810632946745?2037291625?n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_project`
--

CREATE TABLE `tb_project` (
  `idProject` int(11) NOT NULL,
  `namaProject` varchar(100) NOT NULL,
  `anggaran` int(11) NOT NULL,
  `settingAnggaran` varchar(25) NOT NULL,
  `sisa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_project`
--

INSERT INTO `tb_project` (`idProject`, `namaProject`, `anggaran`, `settingAnggaran`, `sisa`) VALUES
(1, 'ISO 1996', 12000000, 'bulanan', 11000000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_reset`
--

CREATE TABLE `tb_reset` (
  `idReset` int(11) NOT NULL,
  `email` text NOT NULL,
  `code` varchar(30) NOT NULL,
  `jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_reset`
--

INSERT INTO `tb_reset` (`idReset`, `email`, `code`, `jam`) VALUES
(1, 'nindyagustina89@gmail.com', '4iM1O', '23:14:31'),
(2, 'nindyagustina89@gmail.com', '5D4C6', '08:50:06');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `idUser` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL,
  `kode_verifikasi` text NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`idUser`, `username`, `email`, `password`, `level`, `kode_verifikasi`, `status`) VALUES
(1, 'nindy', 'nindyagustina63@gmail.com', 'wer123', 'admin', '123', 'sudah terverifikasi'),
(2, 'nindyozora', 'nindyagustina8@gmail.com', 'nindy1234', 'user', '9oY2Y', 'sudah terverifikasi'),
(3, 'makhfud', 'makhfudzamhari@gmail.com', 'gYNgDD23', 'user', 'aR5o6', 'belum terverifikasi'),
(4, 'nindya', 'nindyagustina89@gmail.com', '454uun6n', 'user', '7zN13', 'sudah terverifikasi'),
(5, 'asmarani', 'asmaranipratama54@gmail.com', 'D67D4Ns9', 'user', 'do159', 'belum terverifikasi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_data`
--
ALTER TABLE `tb_data`
  ADD PRIMARY KEY (`idData`),
  ADD KEY `idProject` (`idProject`,`idUser`),
  ADD KEY `idUser` (`idUser`);

--
-- Indexes for table `tb_pengeluaran`
--
ALTER TABLE `tb_pengeluaran`
  ADD PRIMARY KEY (`idPengeluaran`),
  ADD KEY `idUser` (`idUser`,`idProject`),
  ADD KEY `idUser_2` (`idUser`),
  ADD KEY `idProject` (`idProject`),
  ADD KEY `idUser_3` (`idUser`),
  ADD KEY `idProject_2` (`idProject`);

--
-- Indexes for table `tb_project`
--
ALTER TABLE `tb_project`
  ADD PRIMARY KEY (`idProject`);

--
-- Indexes for table `tb_reset`
--
ALTER TABLE `tb_reset`
  ADD PRIMARY KEY (`idReset`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_data`
--
ALTER TABLE `tb_data`
  MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_pengeluaran`
--
ALTER TABLE `tb_pengeluaran`
  MODIFY `idPengeluaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_project`
--
ALTER TABLE `tb_project`
  MODIFY `idProject` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_reset`
--
ALTER TABLE `tb_reset`
  MODIFY `idReset` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_data`
--
ALTER TABLE `tb_data`
  ADD CONSTRAINT `tb_data_ibfk_1` FOREIGN KEY (`idProject`) REFERENCES `tb_project` (`idProject`),
  ADD CONSTRAINT `tb_data_ibfk_2` FOREIGN KEY (`idUser`) REFERENCES `tb_user` (`idUser`);

--
-- Constraints for table `tb_pengeluaran`
--
ALTER TABLE `tb_pengeluaran`
  ADD CONSTRAINT `tb_pengeluaran_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `tb_user` (`idUser`),
  ADD CONSTRAINT `tb_pengeluaran_ibfk_2` FOREIGN KEY (`idProject`) REFERENCES `tb_project` (`idProject`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
