-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2022 at 02:15 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spk_sabunwajah`
--
CREATE DATABASE IF NOT EXISTS `spk_sabunwajah` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `spk_sabunwajah`;

-- --------------------------------------------------------

--
-- Table structure for table `tb_berminyak`
--

CREATE TABLE IF NOT EXISTS `tb_berminyak` (
  `id_sbnb` int(10) NOT NULL AUTO_INCREMENT,
  `merek_sabun` varchar(32) NOT NULL,
  `merek` varchar(32) NOT NULL,
  `kesesuaian_kulit` varchar(32) NOT NULL,
  `harga_sabun` varchar(32) NOT NULL,
  `kualitas_sabun` varchar(32) NOT NULL,
  `rata_umur_pengguna` varchar(32) NOT NULL,
  `merek_angka` varchar(32) NOT NULL,
  `kesesuaian_angka` varchar(32) NOT NULL,
  `harga_angka` varchar(32) NOT NULL,
  `kualitas_angka` varchar(32) NOT NULL,
  `umur_angka` varchar(32) NOT NULL,
  PRIMARY KEY (`id_sbnb`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tb_berminyak`
--

INSERT INTO `tb_berminyak` (`id_sbnb`, `merek_sabun`, `merek`, `kesesuaian_kulit`, `harga_sabun`, `kualitas_sabun`, `rata_umur_pengguna`, `merek_angka`, `kesesuaian_angka`, `harga_angka`, `kualitas_angka`, `umur_angka`) VALUES
(1, 'Kahf', 'Ternama', 'Cukup Cocok', '37000', 'Berkualitas', '20 - 21', '4', '3', '3', '4', '3'),
(2, 'Nivea Men', 'Ternama', 'Cukup Cocok', '54000', 'Cukup Berkualitas', '20 - 21', '4', '3', '2', '3', '3'),
(3, 'Garnier Men', 'Sangat Ternama', 'Cukup Cocok', '34000', 'Cukup Berkualitas', '20 - 21', '5', '3', '3', '3', '3'),
(4, 'Vaseline Men', 'Ternama', 'Cukup Cocok', '39000', 'Cukup Berkualitas', '17 - 19', '4', '3', '3', '3', '2'),
(5, 'Ponds Men', 'Ternama', 'Cukup Cocok', '40000', 'Cukup Berkualitas', '20 - 21', '4', '3', '3', '3', '3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sensitif`
--

CREATE TABLE IF NOT EXISTS `tb_sensitif` (
  `id_sbns` int(10) NOT NULL AUTO_INCREMENT,
  `merek_sabun` varchar(32) NOT NULL,
  `merek` varchar(32) NOT NULL,
  `kesesuaian_kulit` varchar(32) NOT NULL,
  `harga_sabun` varchar(32) NOT NULL,
  `kualitas_sabun` varchar(32) NOT NULL,
  `rata_umur_pengguna` varchar(32) NOT NULL,
  `merek_angka` varchar(32) NOT NULL,
  `kesesuaian_angka` varchar(32) NOT NULL,
  `harga_angka` varchar(32) NOT NULL,
  `kualitas_angka` varchar(32) NOT NULL,
  `umur_angka` varchar(32) NOT NULL,
  PRIMARY KEY (`id_sbns`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tb_sensitif`
--

INSERT INTO `tb_sensitif` (`id_sbns`, `merek_sabun`, `merek`, `kesesuaian_kulit`, `harga_sabun`, `kualitas_sabun`, `rata_umur_pengguna`, `merek_angka`, `kesesuaian_angka`, `harga_angka`, `kualitas_angka`, `umur_angka`) VALUES
(1, 'Kahf', 'Ternama', 'Cocok', '37000', 'Sangat Berkualitas', '22 - 24', '4', '4', '3', '5', '4'),
(2, 'Nivea Men', 'Ternama', 'Cukup Cocok', '54000', 'Cukup Berkualitas', '20 - 21', '4', '3', '2', '3', '3'),
(3, 'Garnier Men', 'Ternama', 'Cukup Cocok', '34000', 'Berkualitas', '20 - 21', '4', '3', '3', '4', '3'),
(4, 'Vaseline Men', 'Sangat Ternama', 'Cukup Cocok', '39000', 'Berkualitas', '17 - 19', '5', '3', '3', '4', '2'),
(5, 'Ponds Men', 'Ternama', 'Cocok', '40000', 'Berkualitas', '20 - 21', '4', '4', '3', '4', '3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id_user` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(32) NOT NULL,
  `username` varchar(24) NOT NULL,
  `password` varchar(24) NOT NULL,
  `role` varchar(24) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `username`, `password`, `role`) VALUES
(2, 'Maulana', 'maul', 'maul', 'admin'),
(3, 'admin', 'admin', 'admin', 'admin'),
(4, 'indra', 'indra', 'indra', 'user'),
(5, 'dewi', 'dewi', 'dewi', 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
