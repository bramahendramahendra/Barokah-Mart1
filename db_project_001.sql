-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2018 at 08:01 PM
-- Server version: 5.5.57-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_project_001`
--

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
  `no_pelanggan` int(50) NOT NULL,
  `nama_pelanggan` varchar(100) DEFAULT NULL,
  `alamat` text,
  `kota` text,
  `kode_pos` text,
  `nomor_telepon` text,
  `tempat_lahir` text,
  `tanggal_lahir` date DEFAULT NULL,
  PRIMARY KEY (`no_pelanggan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `kode_barang` int(50) NOT NULL,
  `nama_barang` varchar(100) DEFAULT NULL,
  `brand` text,
  `kategori` text,
  `stock` int(50) DEFAULT NULL,
  `harga_barang` int(50) DEFAULT NULL,
  PRIMARY KEY (`kode_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `suplier`
--

CREATE TABLE IF NOT EXISTS `suplier` (
  `id_supplier` int(50) NOT NULL AUTO_INCREMENT,
  `nama_suplier` varchar(100) DEFAULT NULL,
  `kode_barang` int(50) DEFAULT NULL,
  `nama_barang` varchar(100) DEFAULT NULL,
  `brand` text,
  `kategori` text,
  `stock` int(50) DEFAULT NULL,
  `harga_barang` int(50) NOT NULL,
  PRIMARY KEY (`id_supplier`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Triggers `suplier`
--
DROP TRIGGER IF EXISTS `suplier_produk`;
DELIMITER //
CREATE TRIGGER `suplier_produk` AFTER INSERT ON `suplier`
 FOR EACH ROW BEGIN
 INSERT INTO produk SET
 kode_barang = NEW.kode_barang, nama_barang=New.nama_barang, brand=New.brand, kategori=New.kategori, stock=New.stock, harga_barang=New.harga_barang
 ON DUPLICATE KEY UPDATE stock=	stock+New.stock, harga_barang=New.harga_barang;
 END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `no_transaksi` int(50) NOT NULL AUTO_INCREMENT,
  `kode_barang` varchar(50) DEFAULT NULL,
  `nama_barang` varchar(100) DEFAULT NULL,
  `jumlah` int(100) DEFAULT NULL,
  `harga_barang` int(100) DEFAULT NULL,
  `total_transaksi` int(100) DEFAULT NULL,
  PRIMARY KEY (`no_transaksi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Triggers `transaksi`
--
DROP TRIGGER IF EXISTS `beli_transaksi_`;
DELIMITER //
CREATE TRIGGER `beli_transaksi_` AFTER INSERT ON `transaksi`
 FOR EACH ROW BEGIN
 INSERT INTO produk SET
 kode_barang = NEW.kode_barang, nama_barang=New.nama_barang, stock=New.jumlah, harga_barang=New.harga_barang
 ON DUPLICATE KEY UPDATE stock=stock-New.jumlah;
 END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user_system`
--

CREATE TABLE IF NOT EXISTS `user_system` (
  `id_user` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `nama_pengguna` varchar(100) DEFAULT NULL,
  `level` text,
  `alamat` text,
  `kota` text,
  `kode_pos` text,
  `nomor_telepon` text,
  `tempat_lahir` text,
  `tanggal_lahir` date DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Triggers `user_system`
--
DROP TRIGGER IF EXISTS `user_pelanggan`;
DELIMITER //
CREATE TRIGGER `user_pelanggan` AFTER INSERT ON `user_system`
 FOR EACH ROW BEGIN
 INSERT INTO pelanggan SET
 no_pelanggan = NEW.id_user, nama_pelanggan=New.nama_pengguna, alamat=New.alamat, kota=New.kota, kode_pos=New.kode_pos, nomor_telepon=New.nomor_telepon, tempat_lahir=New.tempat_lahir, tanggal_lahir=New.tanggal_lahir
 ON DUPLICATE KEY UPDATE nama_pelanggan=New.nama_pengguna;
 END
//
DELIMITER ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
