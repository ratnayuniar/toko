-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2020 at 11:38 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tokokelontong (2)`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `idBarang` int(10) UNSIGNED NOT NULL,
  `namaBarang` varchar(30) DEFAULT NULL,
  `stokBarang` int(10) NOT NULL,
  `hargaBeli` int(10) DEFAULT NULL,
  `hargaJual` int(10) DEFAULT NULL,
  `gambar_barang` varchar(50) NOT NULL,
  `jenis_satuan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`idBarang`, `namaBarang`, `stokBarang`, `hargaBeli`, `hargaJual`, `gambar_barang`, `jenis_satuan`) VALUES
(25, 'Sabun', 3, 5000, 8000, 'sabun.jpg', 'pcs'),
(26, 'Mie', 4, 2000, 5000, 'mie.jpg', 'pcs'),
(28, 'Tepung', 4, 5000, 7000, 'tepung1.jpg', 'kg');

-- --------------------------------------------------------

--
-- Table structure for table `detailpembelian`
--

CREATE TABLE `detailpembelian` (
  `idDetail` int(10) UNSIGNED NOT NULL,
  `idBarang` int(10) UNSIGNED NOT NULL,
  `idPembelian` int(10) UNSIGNED NOT NULL,
  `hargaBeli` int(10) UNSIGNED DEFAULT NULL,
  `jumlah` int(10) UNSIGNED DEFAULT NULL,
  `subTotal` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detailpembelian`
--

INSERT INTO `detailpembelian` (`idDetail`, `idBarang`, `idPembelian`, `hargaBeli`, `jumlah`, `subTotal`) VALUES
(40, 25, 13, 5000, 1, 5000),
(41, 26, 14, 2000, 4, 8000),
(42, 25, 15, 5000, 2, 10000);

--
-- Triggers `detailpembelian`
--
DELIMITER $$
CREATE TRIGGER `beli` AFTER INSERT ON `detailpembelian` FOR EACH ROW BEGIN
UPDATE barang SET stokBarang = stokBarang + NEW.jumlah
WHERE idBarang = new.idBarang;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `deletebeli` AFTER DELETE ON `detailpembelian` FOR EACH ROW BEGIN
UPDATE barang SET stokBarang = stokBarang - old.jumlah
WHERE idBarang = old.idBarang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `detailpenjualan`
--

CREATE TABLE `detailpenjualan` (
  `idDetail` int(10) UNSIGNED NOT NULL,
  `idBarang` int(10) UNSIGNED NOT NULL,
  `idPenjualan` int(10) UNSIGNED NOT NULL,
  `hargaJual` int(10) UNSIGNED DEFAULT NULL,
  `jumlah` int(10) UNSIGNED DEFAULT NULL,
  `subTotal` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detailpenjualan`
--

INSERT INTO `detailpenjualan` (`idDetail`, `idBarang`, `idPenjualan`, `hargaJual`, `jumlah`, `subTotal`) VALUES
(142, 25, 15, 320000, 1, 320000),
(144, 26, 15, 5000, 20, 100000),
(145, 25, 16, 320000, 1, 320000),
(146, 25, 16, 320000, 1, 320000),
(147, 25, 17, 8000, 3, 24000),
(148, 28, 17, 7000, 20, 140000),
(149, 25, 18, 8000, 1, 8000);

--
-- Triggers `detailpenjualan`
--
DELIMITER $$
CREATE TRIGGER `deletejual` AFTER DELETE ON `detailpenjualan` FOR EACH ROW BEGIN
UPDATE barang SET stokBarang = stokBarang + old.jumlah
WHERE idBarang = old.idBarang;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `jual` AFTER INSERT ON `detailpenjualan` FOR EACH ROW BEGIN
UPDATE barang SET stokBarang = stokBarang - NEW.jumlah
WHERE idBarang = new.idBarang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `idPembelian` int(10) UNSIGNED NOT NULL,
  `tanggal` date DEFAULT NULL,
  `total` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `nama_suplier` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`idPembelian`, `tanggal`, `total`, `nama_suplier`) VALUES
(13, '2020-07-15', 5000, 'Yuniar'),
(14, '2020-07-14', 8000, 'Ratna'),
(15, '2020-07-17', 10000, 'Tya');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `idPengguna` int(10) NOT NULL,
  `idPegawai` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `passPengguna` varchar(32) NOT NULL,
  `level` enum('Admin','Karyawan') DEFAULT NULL,
  `statusUser` enum('Aktif','Tidak Aktif') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`idPengguna`, `idPegawai`, `username`, `passPengguna`, `level`, `statusUser`) VALUES
(1, 1, 'ratna', '38753adc9fa129fd3626592006c4e8ce', 'Admin', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `idPenjualan` int(10) UNSIGNED NOT NULL,
  `tanggal` date DEFAULT NULL,
  `total` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `nama_pelanggan` varchar(50) NOT NULL,
  `kembali` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`idPenjualan`, `tanggal`, `total`, `nama_pelanggan`, `kembali`) VALUES
(15, '2020-07-16', 540000, 'Ratna', 0),
(16, '2020-07-16', 640000, 'Yuniar', 0),
(17, '2020-07-17', 164000, 'Ardiasari', 0),
(18, '2020-07-18', 8000, 'Nabila', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idBarang`);

--
-- Indexes for table `detailpembelian`
--
ALTER TABLE `detailpembelian`
  ADD PRIMARY KEY (`idDetail`),
  ADD KEY `Detail_Pembelian_FKIndex1` (`idPembelian`),
  ADD KEY `Detail_Pembelian_FKIndex2` (`idBarang`);

--
-- Indexes for table `detailpenjualan`
--
ALTER TABLE `detailpenjualan`
  ADD PRIMARY KEY (`idDetail`),
  ADD KEY `detailPenjualan_FKIndex1` (`idPenjualan`),
  ADD KEY `detailPenjualan_FKIndex2` (`idBarang`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`idPembelian`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`idPengguna`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`idPenjualan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `idBarang` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `detailpembelian`
--
ALTER TABLE `detailpembelian`
  MODIFY `idDetail` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `detailpenjualan`
--
ALTER TABLE `detailpenjualan`
  MODIFY `idDetail` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `idPembelian` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `idPengguna` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `idPenjualan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detailpembelian`
--
ALTER TABLE `detailpembelian`
  ADD CONSTRAINT `detailpembelian_ibfk_1` FOREIGN KEY (`idPembelian`) REFERENCES `pembelian` (`idPembelian`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detailpembelian_ibfk_2` FOREIGN KEY (`idBarang`) REFERENCES `barang` (`idBarang`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `detailpenjualan`
--
ALTER TABLE `detailpenjualan`
  ADD CONSTRAINT `detailpenjualan_ibfk_1` FOREIGN KEY (`idPenjualan`) REFERENCES `penjualan` (`idPenjualan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detailpenjualan_ibfk_2` FOREIGN KEY (`idBarang`) REFERENCES `barang` (`idBarang`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
