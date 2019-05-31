-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2019 at 06:30 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_aplikasinissanjember`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_daftar_service`
--

CREATE TABLE `tb_daftar_service` (
  `id_daftar_service` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_service` datetime NOT NULL,
  `no_antri` int(11) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `noplat` varchar(10) NOT NULL,
  `tipemobil` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `alamat` text NOT NULL,
  `status_service` int(11) NOT NULL,
  `id_user_mekanik` int(11) NOT NULL,
  `kerusakan_mobil` text NOT NULL,
  `kerusakan` text NOT NULL,
  `astimasi_kerusakan` text NOT NULL,
  `status_baca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_daftar_service`
--

INSERT INTO `tb_daftar_service` (`id_daftar_service`, `id_user`, `tgl_service`, `no_antri`, `nohp`, `noplat`, `tipemobil`, `email`, `alamat`, `status_service`, `id_user_mekanik`, `kerusakan_mobil`, `kerusakan`, `astimasi_kerusakan`, `status_baca`) VALUES
(7, 1, '2018-11-17 02:34:03', 1, '2147483647', 'P 1055', 'kijang', 'bahrul@gmail.com', 'jember', 1, 0, '', 'cobaa', 'cobaa', 0),
(8, 1, '2018-11-17 03:32:33', 2, '8888', 'L 2022', 'kijang 2', 'bahrul@gmail.com', 'kediri', 1, 0, '', '-', '-', 1),
(9, 1, '2018-11-17 03:51:00', 3, '2147483647', 'S 222', 'Adidas', 'didas@gmail.com', 'surabaya', 1, 0, '', '-', '-', 0),
(10, 1, '2018-11-17 04:12:54', 4, '085485975485', 'N 5653', 'kijang', 'agus@gmail.com', 'jember', 1, 0, '', '-', '-', 0),
(12, 1, '2018-11-18 09:26:18', 1, '09867855566', 'P 222', 'Ferrari', 'coba@gmail.com', 'jember', 0, 0, '', '-', '-', 0),
(14, 1, '2018-11-18 09:48:12', 2, '0895553333', 'P 293', 'Ferrariw', 'test@gmail.com', 'jember', 0, 0, '', '-', '-', 0),
(15, 6, '2018-12-28 12:00:00', 1, '021738783723', 'A8222', 'Innova', 'test7@gmail.com', 'test7', 0, 0, 'coba', '-', '-', 0),
(16, 4, '2018-12-28 12:00:00', 2, '08993848273', 'P 00274', 'Innova', 'test1@gmail.com', 'test1', 0, 0, 'knalpot rusak', '-', '-', 0),
(17, 6, '2018-12-28 12:00:00', 3, '021738783723', 'A8155', 'Kijangaa', 'test7@gmail.com', 'test7', 0, 0, 'spion rusak', '-', '-', 0),
(18, 6, '2018-12-31 12:00:00', 1, '021738783723', 'A8155', 'Kijangaa', 'test7@gmail.com', 'test7', 0, 0, 'kaca rusak', '-', '-', 0),
(19, 6, '2019-01-01 03:43:14', 1, '021738783723', 'A8155', 'Kijangaa', 'test7@gmail.com', 'test7', 0, 0, 'test', '-', '-', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_mobil`
--

CREATE TABLE `tb_mobil` (
  `id_mobil` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `no_plat` varchar(20) NOT NULL,
  `tipe_mobil` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mobil`
--

INSERT INTO `tb_mobil` (`id_mobil`, `id_user`, `no_plat`, `tipe_mobil`) VALUES
(1, 4, 'P 00274', 'Innova'),
(2, 4, 'P 38273', 'Kijang'),
(23, 6, 'A8155', 'Kijangaa'),
(24, 6, 'A8222', 'Innova');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_pengguna` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `alamat` text NOT NULL,
  `jumlah_mobil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_pengguna`, `username`, `password`, `no_hp`, `email`, `alamat`, `jumlah_mobil`) VALUES
(1, 'bahrullah', 'bahrul', '123456', '', '', '', 0),
(3, 'test1', 'test2', 'test3', '089387482374', 'test@gmail.com', 'jember', 0),
(4, 'test1', 'test1', 'test1', '08993848273', 'test1@gmail.com', 'test1', 0),
(6, 'Kimmy', 'test7', 'test7', '021738783723', 'test7@gmail.com', 'test7', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_mekanik`
--

CREATE TABLE `tb_user_mekanik` (
  `id_user_mekanik` int(11) NOT NULL,
  `nama_mekanik` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user_mekanik`
--

INSERT INTO `tb_user_mekanik` (`id_user_mekanik`, `nama_mekanik`, `alamat`, `no_telp`) VALUES
(1, 'aa', 'dd', '08999999'),
(2, 'Budi', 'Surabaya', '8388607'),
(3, 'Bayu', 'Malang', '8388607'),
(4, 'bb', 'cc', '55'),
(5, 'gg', 'hh1', '5068456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_daftar_service`
--
ALTER TABLE `tb_daftar_service`
  ADD PRIMARY KEY (`id_daftar_service`);

--
-- Indexes for table `tb_mobil`
--
ALTER TABLE `tb_mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_user_mekanik`
--
ALTER TABLE `tb_user_mekanik`
  ADD PRIMARY KEY (`id_user_mekanik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_daftar_service`
--
ALTER TABLE `tb_daftar_service`
  MODIFY `id_daftar_service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_mobil`
--
ALTER TABLE `tb_mobil`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_user_mekanik`
--
ALTER TABLE `tb_user_mekanik`
  MODIFY `id_user_mekanik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
