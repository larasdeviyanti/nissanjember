-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2019 at 04:53 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aplikasinissanjember`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id_login` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY (`id_login`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`, `level`, `nama`) VALUES
(1, 'admin', 'admin', 'Admin', 'Admin'),
(2, 'mekanik', 'mekanik', 'Mekanik', 'Mekanik');

-- --------------------------------------------------------

--
-- Table structure for table `tb_daftar_service`
--

CREATE TABLE IF NOT EXISTS `tb_daftar_service` (
  `id_daftar_service` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `tgl_service` datetime NOT NULL,
  `no_antri` int(50) NOT NULL,
  `nohp` varchar(50) NOT NULL,
  `noplat` varchar(50) NOT NULL,
  `jenismobil` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `status_service` varchar(50) NOT NULL,
  `id_user_mekanik` int(11) NOT NULL,
  `kerusakan_mobil` text NOT NULL,
  `kerusakan` text NOT NULL,
  `estimasi_kerusakan` text NOT NULL,
  `final_kerusakan` varchar(225) NOT NULL,
  `status_baca` varchar(225) NOT NULL,
  PRIMARY KEY (`id_daftar_service`,`id_user`,`noplat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_mobil`
--

CREATE TABLE IF NOT EXISTS `tb_jenis_mobil` (
  `id_jenis_mobil` int(11) NOT NULL AUTO_INCREMENT,
  `nama_mobil` varchar(50) NOT NULL,
  PRIMARY KEY (`id_jenis_mobil`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tb_jenis_mobil`
--

INSERT INTO `tb_jenis_mobil` (`id_jenis_mobil`, `nama_mobil`) VALUES
(1, 'TERRA'),
(2, 'NAVARA'),
(3, 'XTRAIL'),
(4, 'JUKE'),
(5, 'SERENA'),
(6, 'ELGRAND'),
(7, 'GRAND LIVINA');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mobil`
--

CREATE TABLE IF NOT EXISTS `tb_mobil` (
  `id_mobil` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `no_plat` varchar(50) NOT NULL,
  `no_bpkb` varchar(50) NOT NULL,
  `jenis_mobil` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `no_mesin` varchar(50) NOT NULL,
  `no_rangka` varchar(50) NOT NULL,
  PRIMARY KEY (`id_mobil`,`no_plat`,`no_bpkb`,`no_mesin`,`no_rangka`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tb_mobil`
--

INSERT INTO `tb_mobil` (`id_mobil`, `id_user`, `no_plat`, `no_bpkb`, `jenis_mobil`, `type`, `no_mesin`, `no_rangka`) VALUES
(3, 2, 'L 412 AS', '111', 'Juke', '1.5 CVT BLACK INTERIOR', '222', '333'),
(4, 2, 'L 4 RAS', '122', 'Juke', '1.5 CVT RED INTERIOR', '123', '334');

-- --------------------------------------------------------

--
-- Table structure for table `tb_type_mobil`
--

CREATE TABLE IF NOT EXISTS `tb_type_mobil` (
  `id_type_mobil` int(11) NOT NULL AUTO_INCREMENT,
  `id_type_jenis` int(11) NOT NULL,
  `type_mobil` varchar(50) NOT NULL,
  PRIMARY KEY (`id_type_mobil`,`id_type_jenis`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `tb_type_mobil`
--

INSERT INTO `tb_type_mobil` (`id_type_mobil`, `id_type_jenis`, `type_mobil`) VALUES
(1, 1, '2.5L M/T(4X2)'),
(2, 1, '2.5L E A/T(4X2)'),
(3, 1, '2.5L VL A/T(4X2)'),
(4, 1, '2.5L VL A/T(4X4)'),
(5, 2, '2.5 SL MT'),
(6, 2, '2.5 VL MT'),
(7, 2, '2.5 VL AT'),
(8, 3, '2.0 MT'),
(9, 3, '2.0 CVT'),
(10, 3, '2.5 CVT'),
(11, 3, 'XTREMER'),
(12, 3, 'HYBRID'),
(13, 4, '1.5 CVT BLACK INTERIOR'),
(14, 4, '1.5 CVT RED INTERIOR'),
(15, 4, '1.5 REVOLT CVT BLACK INTERIOR'),
(16, 4, '1.5 REVOLT CVT RED INTERIOR'),
(17, 4, 'REVOLT II'),
(18, 5, '2.0 X'),
(19, 5, '2.0 HWS'),
(20, 5, '2.0 AUTECH'),
(21, 6, '2.5L AUTECH'),
(22, 7, '1.5 SV MT'),
(23, 7, '1.5 SV CVT'),
(24, 7, '1.5 XV MT'),
(25, 7, '1.5 XV CVT'),
(26, 7, '1.5 HWS XV MT'),
(27, 7, '1.5 HWS XV CVT'),
(28, 7, '1.5 HWS AUTECH'),
(29, 7, 'XGEAR 1.5 MT'),
(30, 7, 'XGEAR 1.5 CVT'),
(31, 8, '1.2 MT'),
(32, 8, '1.2 AT'),
(33, 8, '1.2 XS AT'),
(34, 8, '1.5 MT'),
(35, 8, '1.5 AT');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pengguna` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(8) NOT NULL,
  `no_ktp` int(100) NOT NULL,
  `no_hp` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `tmpt_tgl` varchar(50) NOT NULL,
  `jumlah_mobil` int(11) NOT NULL,
  PRIMARY KEY (`id_user`,`username`,`password`,`no_ktp`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_pengguna`, `username`, `password`, `no_ktp`, `no_hp`, `email`, `alamat`, `tmpt_tgl`, `jumlah_mobil`) VALUES
(2, 'Laras Devi Yanti', 'larasdvy', '12345', 2147483647, 2147483647, 'lrsdeviyanti@gmail.com', 'Randuagung, Lumajang', 'Tangerang, 07 Desember 1997', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_mekanik`
--

CREATE TABLE IF NOT EXISTS `tb_user_mekanik` (
  `id_user_mekanik` int(11) NOT NULL AUTO_INCREMENT,
  `nama_mekanik` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user_mekanik`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_user_mekanik`
--

INSERT INTO `tb_user_mekanik` (`id_user_mekanik`, `nama_mekanik`, `alamat`, `no_telp`) VALUES
(1, 'Agus', 'Tegal Besar, Jember', '087676345654');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
