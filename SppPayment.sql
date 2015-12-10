-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 09, 2015 at 11:00 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pembayaranspp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `idadmin` int(4) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `username`, `password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE IF NOT EXISTS `divisi` (
  `kodedivisi` varchar(10) NOT NULL,
  `namadivisi` varchar(100) NOT NULL,
  PRIMARY KEY (`kodedivisi`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`kodedivisi`, `namadivisi`) VALUES
('DV02', 'Vokal'),
('DV01', 'Instrument'),
('DV03', 'Percusion'),
('DV04', 'DJ');

-- --------------------------------------------------------

--
-- Table structure for table `orangtua`
--

CREATE TABLE IF NOT EXISTS `orangtua` (
  `noktp` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `notelp` varchar(12) NOT NULL,
  `jeniskelamin` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  PRIMARY KEY (`noktp`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orangtua`
--

INSERT INTO `orangtua` (`noktp`, `nama`, `notelp`, `jeniskelamin`, `alamat`, `pekerjaan`) VALUES
('12367657776400098', 'Josi Aranda', '081222244423', 'Laki-Laki', 'Yogyakarta', 'CEO'),
('98990987888752986', 'Agung Falah A', '087767675235', 'Laki-Laki', 'Yogyakarta', 'Pengusaha');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE IF NOT EXISTS `pembayaran` (
  `kodepembayaran` varchar(10) NOT NULL,
  `NIS` varchar(10) NOT NULL,
  `jenispembayaran` varchar(100) NOT NULL,
  `tglpembayaran` datetime NOT NULL,
  `Divisi` varchar(100) NOT NULL,
  `totalpembayaran` varchar(100) NOT NULL,
  `noktp` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  PRIMARY KEY (`kodepembayaran`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`kodepembayaran`, `NIS`, `jenispembayaran`, `tglpembayaran`, `Divisi`, `totalpembayaran`, `noktp`, `username`) VALUES
('pm001', '0001', 'SPP level 1', '2015-12-03 19:18:32', 'DV01', '1500000', '12367657776400098', 'Mahadewi96'),
('pm002', '0002', 'SPP level 2', '2015-12-07 19:19:38', 'DV02', '2000000', '98990987888752986', 'Mahadewi96');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `NIS` varchar(10) NOT NULL,
  `namasiswa` varchar(100) NOT NULL,
  `jeniskelamin` varchar(50) NOT NULL,
  `tanggallahir` datetime NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `namaortu` varchar(100) NOT NULL,
  `divisi` varchar(50) NOT NULL,
  `noktportu` varchar(100) NOT NULL,
  PRIMARY KEY (`NIS`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
