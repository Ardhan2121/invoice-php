# Host: localhost  (Version 5.5.5-10.4.27-MariaDB)
# Date: 2023-02-23 14:02:28
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "invoice"
#

DROP TABLE IF EXISTS `invoice`;
CREATE TABLE `invoice` (
  `ID_Invoice` int(11) NOT NULL,
  `ID_Pelanggan` int(11) DEFAULT NULL,
  `Tanggal_Invoice` date DEFAULT NULL,
  `Tanggal_JatuhTempo` date DEFAULT NULL,
  `Jumlah_Pembayaran` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`ID_Invoice`),
  KEY `ID_Pelanggan` (`ID_Pelanggan`),
  CONSTRAINT `invoice_ibfk_1` FOREIGN KEY (`ID_Pelanggan`) REFERENCES `pelanggan` (`ID_Pelanggan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

#
# Data for table "invoice"
#


#
# Structure for table "karyawan"
#

DROP TABLE IF EXISTS `karyawan`;
CREATE TABLE `karyawan` (
  `ID_Karyawan` int(11) NOT NULL,
  `Nama_Karyawan` varchar(255) DEFAULT NULL,
  `Email_Karyawan` varchar(255) DEFAULT NULL,
  `NoTelp_Karyawan` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID_Karyawan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

#
# Data for table "pelanggan"
#

INSERT INTO `pelanggan` VALUES (1,'123','123@gmi.cmo','123123','123123'),(2,'123123','124124@gmail.com','12123','0815-8683-7092');

#
# Structure for table "produk"
#

DROP TABLE IF EXISTS `produk`;
CREATE TABLE `produk` (
  `ID_Produk` int(11) NOT NULL,
  `Nama_Produk` varchar(255) DEFAULT NULL,
  `Harga_Produk` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`ID_Produk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

#
# Data for table "produk"
#


#
# Structure for table "detail_invoice"
#

DROP TABLE IF EXISTS `detail_invoice`;
CREATE TABLE `detail_invoice` (
  `ID_Detail` int(11) NOT NULL,
  `ID_Invoice` int(11) DEFAULT NULL,
  `ID_Produk` int(11) DEFAULT NULL,
  `Jumlah_Produk` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_Detail`),
  KEY `ID_Invoice` (`ID_Invoice`),
  KEY `ID_Produk` (`ID_Produk`),
  CONSTRAINT `detail_invoice_ibfk_1` FOREIGN KEY (`ID_Invoice`) REFERENCES `invoice` (`ID_Invoice`),
  CONSTRAINT `detail_invoice_ibfk_2` FOREIGN KEY (`ID_Produk`) REFERENCES `produk` (`ID_Produk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

#
# Data for table "detail_invoice"
#

