-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2017 at 08:40 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projectolx`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `NAMA` varchar(255) NOT NULL,
  `EMAIL` varchar(255) DEFAULT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `USERNAME` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`NAMA`, `EMAIL`, `PASSWORD`, `USERNAME`) VALUES
('AZHAR OGI', 'azharogi@gmail.com', 'b93939873fd4923043b9dec975811f66', 'azharogi'),
('Dio Wisnu H', 'wsinudio@yahoo.com', 'dio', 'DIO');

-- --------------------------------------------------------

--
-- Table structure for table `iklan`
--

CREATE TABLE IF NOT EXISTS `iklan` (
`ID_IKLAN` int(11) NOT NULL,
  `USERNAME_MEMBER` varchar(255) DEFAULT NULL,
  `JUDUL` varchar(30) DEFAULT NULL,
  `FOTO_BARANG` varchar(255) DEFAULT NULL,
  `HARGA` varchar(255) DEFAULT NULL,
  `KATEGORI` varchar(255) DEFAULT NULL,
  `DESKRIPSI` text,
  `STATUS_BARANG` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iklan`
--

INSERT INTO `iklan` (`ID_IKLAN`, `USERNAME_MEMBER`, `JUDUL`, `FOTO_BARANG`, `HARGA`, `KATEGORI`, `DESKRIPSI`, `STATUS_BARANG`) VALUES
(4, 'zharlet', 'XIAOMI MI4', 'https://www.w3schools.com/html/pic_mountain.jpg', '0', 'HANDPHONE', 'DI JUAL HANDPHONE XIAOMI MI4 LTE \r\nBONUS GAK ADA , YANG PENTING HAPENYA ADA :p hahaha', 'Ready'),
(5, 'zharlet', 'IPHONE 5S 64GB', 'https://www.w3schools.com/html/pic_mountain.jpg', '805', 'HANDPHONE', 'Dijual smartphone', 'Ready'),
(6, 'zharlet', ' MI MAX 64GB LIKE NEW', 'http://localhost/projectolx/assets/image/Untitled_Diagram_(6).jpg', '80000', 'HANDPHONE', 'Dijual handphone', 'Ready'),
(12, 'zharlet', 'MANGGA RASA LEMON', 'http://localhost/projectolx/assets/image/(PD)_Tarik_Tunai.jpg', '30000', 'BUAH', 'Dijual mangga rasa lemon , tanpa perantara , masih mulus kinyis" ex.cewek mantan pacar ... cod sekitar ub ', 'Ready'),
(15, 'zharlet', ' EALAH ', 'NULL', '1', 'HANDPHONE', '11', 'Ready');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
`ID_KOMENTAR` int(11) NOT NULL,
  `ID_IKLAN` int(11) NOT NULL,
  `USERNAME_MEMBER` varchar(255) DEFAULT NULL,
  `KOMENTAR` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`ID_KOMENTAR`, `ID_IKLAN`, `USERNAME_MEMBER`, `KOMENTAR`) VALUES
(1, 3, 'zharlet', 'keren gan :)'),
(10, 3, 'zharlet', 'anjay bos :D'),
(11, 4, 'zharlet', 'keren bos'),
(12, 7, 'zharlet', 'cok'),
(13, 7, 'zharlet', 'masih ?'),
(14, 12, 'zharletc', 'coba deh'),
(17, 15, 'zharlet', 'oke deh bosku yang ganteng hahakek sekuteng hay\r\n');

-- --------------------------------------------------------

--
-- Stand-in structure for view `latest_iklan`
--
CREATE TABLE IF NOT EXISTS `latest_iklan` (
`ID_IKLAN` int(11)
,`USERNAME_MEMBER` varchar(255)
,`JUDUL` varchar(30)
,`FOTO_BARANG` varchar(255)
,`HARGA` varchar(255)
,`KATEGORI` varchar(255)
,`DESKRIPSI` text
,`STATUS_BARANG` varchar(30)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `latest_pesan`
--
CREATE TABLE IF NOT EXISTS `latest_pesan` (
`ID_PESAN` int(11)
,`TO_USERNAME` varchar(255)
,`FROM_USERNAME` varchar(255)
,`PESAN` text
,`STATUS` int(11)
);
-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
`ID` int(11) NOT NULL,
  `NAMA` varchar(255) NOT NULL,
  `EMAIL` varchar(255) DEFAULT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `USERNAME` varchar(255) NOT NULL,
  `TANGGAL_LAHIR` date NOT NULL,
  `FOTO_PROFIL` varchar(255) NOT NULL,
  `NO_HAPE` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`ID`, `NAMA`, `EMAIL`, `PASSWORD`, `USERNAME`, `TANGGAL_LAHIR`, `FOTO_PROFIL`, `NO_HAPE`) VALUES
(12, 'Azhar Ogi', 'azharogi@gmail.com', 'e2000039de82e6c208ac36af0d9fc80c', 'zharlet', '1992-11-11', 'http://localhost/projectolx/assets/image/profil.jpg', '081318063888'),
(13, 'ABANG SEKAREP', 'riplesekarep@gmail.com', '958f62f9f8b7f348d08943189fda3b15', 'zharletc', '0000-00-00', 'http://localhost/projectolx/assets/image/IMG_2191.JPG', '0882828282'),
(15, 'AZHAR OGI 2', 'gendeng@gmail.com', '958f62f9f8b7f348d08943189fda3b15', 'gendeng', '1996-12-30', 'http://localhost/projectolx/assets/image/IMG_2757.JPG', '085791711493');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
`ID_PESAN` int(11) NOT NULL,
  `TO_USERNAME` varchar(255) NOT NULL,
  `FROM_USERNAME` varchar(255) NOT NULL,
  `PESAN` text NOT NULL,
  `STATUS` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`ID_PESAN`, `TO_USERNAME`, `FROM_USERNAME`, `PESAN`, `STATUS`) VALUES
(2, 'zharlet', 'e', 'Masih masbro', 0),
(5, 'zharlet', 'zharlet', 'BARANG MASIH ADA BRO ?', 0),
(6, 'zharletc', 'zharlet', 'hai', 0),
(7, 'zharlet', 'e', 'GOBLOK SIA AING', 0),
(8, 'zharletc', 'zharlet', 'lagi ngapain bos ?', 0),
(9, 'zharlet', 'zharlet', 'masih cok ?', 0),
(10, 'zharlet', 'zharlet', 'masih tah', 0),
(11, 'zharletc', 'zharlet', 'masih cok ?', 0),
(12, 'zharletc', 'zharlet', 'Halo bos', 0),
(13, 'zharletc', 'zharlet', 'Hai', 0),
(14, 'zharletc', 'zharlet', 'Hai', 0),
(15, 'zharlet', 'zharletc', 'COK Masih ada ?', 0),
(16, 'zharletc', 'zharlet', 'masih bro ?', 0);

-- --------------------------------------------------------

--
-- Structure for view `latest_iklan`
--
DROP TABLE IF EXISTS `latest_iklan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `latest_iklan` AS select `iklan`.`ID_IKLAN` AS `ID_IKLAN`,`iklan`.`USERNAME_MEMBER` AS `USERNAME_MEMBER`,`iklan`.`JUDUL` AS `JUDUL`,`iklan`.`FOTO_BARANG` AS `FOTO_BARANG`,`iklan`.`HARGA` AS `HARGA`,`iklan`.`KATEGORI` AS `KATEGORI`,`iklan`.`DESKRIPSI` AS `DESKRIPSI`,`iklan`.`STATUS_BARANG` AS `STATUS_BARANG` from `iklan` order by `iklan`.`ID_IKLAN` desc;

-- --------------------------------------------------------

--
-- Structure for view `latest_pesan`
--
DROP TABLE IF EXISTS `latest_pesan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `latest_pesan` AS select `pesan`.`ID_PESAN` AS `ID_PESAN`,`pesan`.`TO_USERNAME` AS `TO_USERNAME`,`pesan`.`FROM_USERNAME` AS `FROM_USERNAME`,`pesan`.`PESAN` AS `PESAN`,`pesan`.`STATUS` AS `STATUS` from `pesan` order by `pesan`.`ID_PESAN` desc;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`USERNAME`), ADD UNIQUE KEY `USERNAME` (`USERNAME`);

--
-- Indexes for table `iklan`
--
ALTER TABLE `iklan`
 ADD PRIMARY KEY (`ID_IKLAN`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
 ADD PRIMARY KEY (`ID_KOMENTAR`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
 ADD PRIMARY KEY (`ID`,`USERNAME`), ADD UNIQUE KEY `USERNAME` (`USERNAME`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
 ADD PRIMARY KEY (`ID_PESAN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `iklan`
--
ALTER TABLE `iklan`
MODIFY `ID_IKLAN` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
MODIFY `ID_KOMENTAR` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
MODIFY `ID_PESAN` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
