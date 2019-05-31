-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 13 Feb 2019 pada 04.00
-- Versi Server: 5.5.34
-- Versi PHP: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `db_aplikasinissanjember`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_daftar_service`
--

CREATE TABLE IF NOT EXISTS `tb_daftar_service` (
  `id_daftar_service` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `tgl_service` datetime NOT NULL,
  `no_antri` int(11) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `noplat` varchar(10) NOT NULL,
  `jenismobil` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `alamat` text NOT NULL,
  `status_service` int(11) NOT NULL,
  `id_user_mekanik` int(11) NOT NULL,
  `kerusakan_mobil` text NOT NULL,
  `kerusakan` text NOT NULL,
  `astimasi_kerusakan` text NOT NULL,
  `final_kerusakan` varchar(300) NOT NULL,
  `status_baca` int(11) NOT NULL,
  PRIMARY KEY (`id_daftar_service`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data untuk tabel `tb_daftar_service`
--

INSERT INTO `tb_daftar_service` (`id_daftar_service`, `id_user`, `tgl_service`, `no_antri`, `nohp`, `noplat`, `jenismobil`, `email`, `alamat`, `status_service`, `id_user_mekanik`, `kerusakan_mobil`, `kerusakan`, `astimasi_kerusakan`, `final_kerusakan`, `status_baca`) VALUES
(20, 7, '2019-02-04 05:33:00', 1, '085812777080', 'L 424 AS', 'Elgrand', 'lrsdeviyanti@gmail.com', 'Randuagung, Lumajang', 0, 0, 'rem blong', '-rem baik-baik saja', '', '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_datamobil`
--

CREATE TABLE IF NOT EXISTS `tb_datamobil` (
  `id_mobil` int(50) NOT NULL,
  `nama_mobil` varchar(225) NOT NULL,
  `id_jnsmobil` int(50) NOT NULL,
  `jenis_mobil` varchar(225) NOT NULL,
  PRIMARY KEY (`id_mobil`,`id_jnsmobil`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mobil`
--

CREATE TABLE IF NOT EXISTS `tb_mobil` (
  `id_mobil` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `no_plat` varchar(20) NOT NULL,
  `jenis_mobil` varchar(20) NOT NULL,
  `type` varchar(50) NOT NULL,
  `no_bpkb` varchar(50) NOT NULL,
  `no_mesin` varchar(50) NOT NULL,
  `no_rangka` varchar(50) NOT NULL,
  PRIMARY KEY (`id_mobil`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data untuk tabel `tb_mobil`
--

INSERT INTO `tb_mobil` (`id_mobil`, `id_user`, `no_plat`, `jenis_mobil`, `type`, `no_bpkb`, `no_mesin`, `no_rangka`) VALUES
(30, 10, 'N 1234 A', 'Juke', '1.5 CVT', '54768789', '1234', '0876'),
(31, 7, 'L 424 AS', 'Elgrand', '2.5L Autech', '1111111111', '22222222', '333333'),
(32, 7, 'L 4 RAS', 'Juke', '1.5 CVT', '7676734', '4444', '3545'),
(34, 11, 'B 4 HRUL', 'Juke', '2.0 CRV', '0000000', '111', '222'),
(36, 12, 'P 9999 A', 'Grand Livina', 'XV', '7676734', '1234', '6666');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pengguna` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `no_ktp` varchar(225) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `alamat` text NOT NULL,
  `tmpt_tgl` varchar(225) NOT NULL,
  `jumlah_mobil` int(11) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_pengguna`, `username`, `password`, `no_ktp`, `no_hp`, `email`, `alamat`, `tmpt_tgl`, `jumlah_mobil`) VALUES
(7, 'Laras Devi Yanti', 'larasd', '12345', '34567890987459890', '085812777080', 'lrsdeviyanti@gmail.com', 'Randuagung, Lumajang', 'Tangerang/07 Desember 1997', 2),
(10, 'Amanah', 'amanah', '123', '98765667890', '0688766567', 'Amanah@gmail.com', 'Randuagung, Lumajang', 'Jakarta, 08 September 2005', 1),
(11, 'bahrullah', 'bahrul', '12345', '977843673843', '098568765', 'bahrul@gmail.com', 'Probolinggo', 'Probolinggo, 17 September 1997', 1),
(12, 'Alvi A', 'alvi', 'alvi', '67777677667837', '081267892973', 'alvi@gmail.com', 'Jember', 'Jember, 1 januari 1997', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user_mekanik`
--

CREATE TABLE IF NOT EXISTS `tb_user_mekanik` (
  `id_user_mekanik` int(11) NOT NULL AUTO_INCREMENT,
  `nama_mekanik` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  PRIMARY KEY (`id_user_mekanik`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `tb_user_mekanik`
--

INSERT INTO `tb_user_mekanik` (`id_user_mekanik`, `nama_mekanik`, `alamat`, `no_telp`) VALUES
(1, 'aa', 'dd', '08999999'),
(2, 'Budi', 'Surabaya', '8388607'),
(3, 'Bayu', 'Malang', '8388607'),
(4, 'bb', 'cc', '55'),
(5, 'gg', 'hh1', '5068456');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
