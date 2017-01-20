-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20 Jan 2017 pada 10.25
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `petty_cash`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_data`
--

CREATE TABLE IF NOT EXISTS `tb_data` (
`idData` int(11) NOT NULL,
  `idProject` int(11) NOT NULL,
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_data`
--

INSERT INTO `tb_data` (`idData`, `idProject`, `idUser`) VALUES
(1, 1, 9),
(2, 2, 9),
(4, 2, 10),
(3, 3, 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengeluaran`
--

CREATE TABLE IF NOT EXISTS `tb_pengeluaran` (
`idPengeluaran` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idProject` int(11) DEFAULT NULL,
  `namaPengeluaran` varchar(100) NOT NULL,
  `jumlahPengeluaran` int(11) NOT NULL,
  `jam` time NOT NULL,
  `tanggal` date NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pengeluaran`
--

INSERT INTO `tb_pengeluaran` (`idPengeluaran`, `idUser`, `idProject`, `namaPengeluaran`, `jumlahPengeluaran`, `jam`, `tanggal`, `foto`) VALUES
(3, 10, NULL, 'makan mnum', 114, '10:33:26', '2017-01-16', 'data'),
(5, 9, 1, 'beli bahan pokok', 120, '12:47:05', '2017-01-16', 'data'),
(6, 9, 1, 'minum', 870, '07:24:33', '2017-01-13', 'data'),
(7, 9, 1, 'beli hp', 120, '23:14:03', '2017-01-15', 'data'),
(8, 9, 1, 'beli laptop', 121, '23:14:59', '2017-01-15', 'data'),
(9, 9, NULL, 'makan', 113, '10:34:16', '2017-01-16', 'data'),
(10, 9, 1, 'minum', 675, '10:33:51', '2017-01-16', 'data'),
(12, 9, NULL, 'makan', 980, '06:28:32', '2017-01-04', 'saja'),
(13, 11, NULL, 'makan', 876, '09:56:23', '2017-01-16', 'data'),
(14, 9, 1, 'makan', 133, '10:59:22', '2017-01-17', 'data'),
(15, 9, NULL, 'beli nasi', 112, '11:15:35', '2017-01-16', 'data'),
(16, 9, 2, 'tugas', 111, '11:23:52', '2017-01-17', 'data'),
(17, 23, NULL, 'gggg', 1000000, '14:57:06', '2017-01-17', 'data'),
(18, 9, 1, 'tugas', 12000000, '14:58:38', '2017-01-17', 'data'),
(19, 9, 2, 'coba', 1200, '14:59:11', '2017-01-17', 'data');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_project`
--

CREATE TABLE IF NOT EXISTS `tb_project` (
`idProject` int(11) NOT NULL,
  `namaProject` varchar(100) NOT NULL,
  `anggaran` int(11) NOT NULL,
  `settingAnggaran` varchar(25) NOT NULL,
  `sisa` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_project`
--

INSERT INTO `tb_project` (`idProject`, `namaProject`, `anggaran`, `settingAnggaran`, `sisa`) VALUES
(1, 'keuangan', 10000, 'harian', 1000),
(2, 'ekonomi', 1500000, 'harian', 500000),
(3, 'administrasi', 2500000, 'bulanan', 1000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
`idUser` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`idUser`, `username`, `email`, `password`, `level`) VALUES
(9, 'kangmahfud', 'makhfudzamhari@gmail.com', '1b6e5b8b619574a8d5e7', 'user'),
(10, 'nindyagustina', 'nindyagustina@gmail.com', '02c4a9be99830ab63ede', 'admin'),
(11, 'makhfud', 'makhfudzamhari@gmail.com', 'ec12a23ab48d4b468ff6', 'admin'),
(12, 'muslimmuhammad', 'muslimalfatih@gmail.com', 'e866c273793974838c0e', 'admin'),
(14, 'nindyagustin', 'nindyagustina@gmail.com', 'b10c7270bf65e8baba45', 'member'),
(15, 'zainul', 'zainulrofiqi@gmail.com', '2807c1c6a3183f35b6ac', 'member'),
(16, 'nindyagustin', 'nindyagustina@gmail.com', '02031209', 'admin'),
(18, 'zaipluk', 'zainulrofiqi@gmail.com', '02031209', 'user'),
(23, 'gangsantri', 'gangsantri@gasek.com', '02031209', 'admin'),
(25, 'gangsantri', 'nindyozora@gmail.com', '02031209', 'user'),
(26, 'muslim', 'muslimalfatih19@gmail.com', '1', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_data`
--
ALTER TABLE `tb_data`
 ADD PRIMARY KEY (`idData`), ADD KEY `idProject` (`idProject`,`idUser`), ADD KEY `idUser` (`idUser`);

--
-- Indexes for table `tb_pengeluaran`
--
ALTER TABLE `tb_pengeluaran`
 ADD PRIMARY KEY (`idPengeluaran`), ADD KEY `idUser` (`idUser`,`idProject`), ADD KEY `idUser_2` (`idUser`), ADD KEY `idProject` (`idProject`), ADD KEY `idUser_3` (`idUser`), ADD KEY `idProject_2` (`idProject`);

--
-- Indexes for table `tb_project`
--
ALTER TABLE `tb_project`
 ADD PRIMARY KEY (`idProject`);

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
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_pengeluaran`
--
ALTER TABLE `tb_pengeluaran`
MODIFY `idPengeluaran` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tb_project`
--
ALTER TABLE `tb_project`
MODIFY `idProject` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_data`
--
ALTER TABLE `tb_data`
ADD CONSTRAINT `tb_data_ibfk_1` FOREIGN KEY (`idProject`) REFERENCES `tb_project` (`idProject`),
ADD CONSTRAINT `tb_data_ibfk_2` FOREIGN KEY (`idUser`) REFERENCES `tb_user` (`idUser`);

--
-- Ketidakleluasaan untuk tabel `tb_pengeluaran`
--
ALTER TABLE `tb_pengeluaran`
ADD CONSTRAINT `tb_pengeluaran_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `tb_user` (`idUser`),
ADD CONSTRAINT `tb_pengeluaran_ibfk_2` FOREIGN KEY (`idProject`) REFERENCES `tb_project` (`idProject`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
