# Host: localhost  (Version 5.5.5-10.4.27-MariaDB)
# Date: 2023-03-05 02:21:43
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

#
# Data for table "invoice"
#

INSERT INTO `invoice` VALUES (3,1,'2023-03-04',NULL,40000,100,200,80000);

#
# Structure for table "detail_invoice"
#

DROP TABLE IF EXISTS `detail_invoice`;
CREATE TABLE `detail_invoice` (
  `ID_Invoice` int(11) NOT NULL,
  `ID_Produk` int(11) NOT NULL,
  `Jumlah_Produk` int(11) DEFAULT NULL,
  `Harga_Produk` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`ID_Produk`,`ID_Invoice`),
  KEY `ID_Invoice` (`ID_Invoice`),
  CONSTRAINT `detail_invoice_ibfk_1` FOREIGN KEY (`ID_Invoice`) REFERENCES `invoice` (`ID_Invoice`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

#
# Data for table "detail_invoice"
#

INSERT INTO `detail_invoice` VALUES (3,3,1,40000);

#
# Structure for table "karyawan"
#

DROP TABLE IF EXISTS `karyawan`;
CREATE TABLE `karyawan` (
  `id_karyawan` int(11) NOT NULL AUTO_INCREMENT,
  `Nama_Karyawan` varchar(255) DEFAULT NULL,
  `Email_Karyawan` varchar(255) DEFAULT NULL,
  `NoTelp_Karyawan` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_karyawan`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

#
# Data for table "karyawan"
#


#
# Structure for table "logn"
#

DROP TABLE IF EXISTS `logn`;
CREATE TABLE `logn` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "logn"
#

INSERT INTO `logn` VALUES (2,'fadli','0a539e9da09b0ab58fd282832c07b6ab'),(4,'gathan','3b0c1398b1413190850e16bee3d4575c'),(5,'fadli2','fcea920f7412b5da7be0cf42b8c93759'),(6,'eawr','e10adc3949ba59abbe56e057f20f883e'),(7,'ardhan','e10adc3949ba59abbe56e057f20f883e'),(8,'azka','c17162acf59feea06ca80e2f1b15f144'),(9,'rizki','e10adc3949ba59abbe56e057f20f883e');

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

INSERT INTO `pelanggan` VALUES (1,'123','tangseltempatpkl@gmail.com','123123','1231-2312-3123');

#
# Structure for table "produk"
#

DROP TABLE IF EXISTS `produk`;
CREATE TABLE `produk` (
  `ID_Produk` int(11) NOT NULL,
  `Nama_Produk` varchar(255) DEFAULT NULL,
  `Harga_Produk` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`ID_Produk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

#
# Data for table "produk"
#

INSERT INTO `produk` VALUES (2,'Produk B',30000),(3,'Produk C',40000),(4,'Produk D',50000),(5,'Produk E',60000),(6,'Produk F',70000),(7,'Produk G',80000),(8,'Produk H',90000),(9,'Produk I',100000);
