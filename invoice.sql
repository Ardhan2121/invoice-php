# Host: localhost  (Version 5.5.5-10.4.14-MariaDB)
# Date: 2023-03-29 14:25:24
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "data_pembelian"
#

DROP TABLE IF EXISTS `data_pembelian`;
CREATE TABLE `data_pembelian` (
  `ID_Invoice` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Barang` varchar(255) DEFAULT NULL,
  `Qty` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_Invoice`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "data_pembelian"
#


#
# Structure for table "invoice"
#

DROP TABLE IF EXISTS `invoice`;
CREATE TABLE `invoice` (
  `ID_Invoice` int(11) NOT NULL,
  `ID_Pelanggan` int(11) DEFAULT NULL,
  `Tanggal_Invoice` date DEFAULT NULL,
  `Tanggal_JatuhTempo` date DEFAULT NULL,
  `Subtotal` decimal(10,0) DEFAULT NULL,
  `Pajak` int(3) DEFAULT NULL,
  `Diskon` int(3) DEFAULT NULL,
  `Total` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`ID_Invoice`),
  KEY `ID_Pelanggan` (`ID_Pelanggan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "invoice"
#


#
# Structure for table "detail_invoice"
#

DROP TABLE IF EXISTS `detail_invoice`;
CREATE TABLE `detail_invoice` (
  `ID_Invoice` int(11) NOT NULL,
  `ID_Produk` int(11) NOT NULL,
  `Diskon` int(11) DEFAULT NULL,
  `Harga_Jual` decimal(10,0) DEFAULT NULL,
  `Harga_Promo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID_Produk`,`ID_Invoice`),
  KEY `ID_Invoice` (`ID_Invoice`),
  CONSTRAINT `detail_invoice_ibfk_1` FOREIGN KEY (`ID_Invoice`) REFERENCES `invoice` (`ID_Invoice`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "detail_invoice"
#


#
# Structure for table "karyawan"
#

DROP TABLE IF EXISTS `karyawan`;
CREATE TABLE `karyawan` (
  `Username` varchar(30) NOT NULL DEFAULT '',
  `Nama_Karyawan` varchar(255) DEFAULT NULL,
  `Password` text DEFAULT NULL,
  `Hak_Akses` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "karyawan"
#


#
# Structure for table "pelanggan"
#

DROP TABLE IF EXISTS `pelanggan`;
CREATE TABLE `pelanggan` (
  `ID_Pelanggan` int(11) NOT NULL,
  `Nama_Pelanggan` varchar(255) DEFAULT NULL,
  `Email_Pelanggan` varchar(255) DEFAULT NULL,
  `Alamat_Pelanggan` varchar(255) DEFAULT NULL,
  `NoTelp_Pelanggan` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID_Pelanggan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "pelanggan"
#


#
# Structure for table "produk"
#

DROP TABLE IF EXISTS `produk`;
CREATE TABLE `produk` (
  `ID_Produk` int(11) NOT NULL,
  `Nama_Produk` varchar(255) DEFAULT NULL,
  `Harga_Produk` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`ID_Produk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "produk"
#

