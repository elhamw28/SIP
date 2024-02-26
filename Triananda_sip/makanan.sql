/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 10.4.21-MariaDB : Database - makanan
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`makanan` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `makanan`;

/*Table structure for table `barang_keluar` */

DROP TABLE IF EXISTS `barang_keluar`;

CREATE TABLE `barang_keluar` (
  `kode_out` int(11) NOT NULL AUTO_INCREMENT,
  `kode_produk` int(11) DEFAULT NULL,
  `tgl_keluar` date DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `keterangan` varchar(125) DEFAULT NULL,
  PRIMARY KEY (`kode_out`),
  KEY `kode_barang` (`kode_produk`),
  CONSTRAINT `barang_keluar_ibfk_1` FOREIGN KEY (`kode_produk`) REFERENCES `produk` (`kode_produk`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

/*Data for the table `barang_keluar` */

insert  into `barang_keluar`(`kode_out`,`kode_produk`,`tgl_keluar`,`jumlah`,`keterangan`) values 
(1,1,'2022-06-20',2,'Pembelian'),
(7,1,'2022-06-30',5,'Terjual'),
(10,6,'2022-06-23',9,'Terjual');

/*Table structure for table `barang_masuk` */

DROP TABLE IF EXISTS `barang_masuk`;

CREATE TABLE `barang_masuk` (
  `kode_in` int(11) NOT NULL AUTO_INCREMENT,
  `kode_produk` int(11) DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `jumlah` int(15) DEFAULT NULL,
  `keterangan` varchar(125) DEFAULT NULL,
  PRIMARY KEY (`kode_in`),
  KEY `kode_barang` (`kode_produk`),
  CONSTRAINT `barang_masuk_ibfk_1` FOREIGN KEY (`kode_produk`) REFERENCES `produk` (`kode_produk`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

/*Data for the table `barang_masuk` */

insert  into `barang_masuk`(`kode_in`,`kode_produk`,`tgl_masuk`,`jumlah`,`keterangan`) values 
(1,1,'2022-06-30',2,'Butuh');

/*Table structure for table `customer` */

DROP TABLE IF EXISTS `customer`;

CREATE TABLE `customer` (
  `kode_customer` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(125) DEFAULT NULL,
  `alamat` varchar(125) DEFAULT NULL,
  `no_telp` varchar(14) DEFAULT NULL,
  PRIMARY KEY (`kode_customer`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `customer` */

insert  into `customer`(`kode_customer`,`nama`,`alamat`,`no_telp`) values 
(1,'Alif','Sleman','0822734583384'),
(2,'Fajar','Jogja','0892187215763');

/*Table structure for table `produk` */

DROP TABLE IF EXISTS `produk`;

CREATE TABLE `produk` (
  `kode_produk` int(11) NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(125) DEFAULT NULL,
  `kategori` varchar(125) DEFAULT NULL,
  `tgl_pembuatan` date DEFAULT NULL,
  `tgl_kadaluarsa` date DEFAULT NULL,
  `harga` int(15) DEFAULT NULL,
  PRIMARY KEY (`kode_produk`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `produk` */

insert  into `produk`(`kode_produk`,`nama_produk`,`kategori`,`tgl_pembuatan`,`tgl_kadaluarsa`,`harga`) values 
(1,'Taro','Snack','2022-06-01','2023-06-20',5000),
(6,'Kopi Kuli','Kopi','2022-06-23','2022-06-17',15000);

/*Table structure for table `review` */

DROP TABLE IF EXISTS `review`;

CREATE TABLE `review` (
  `kode_review` int(11) NOT NULL AUTO_INCREMENT,
  `kode_customer` int(11) DEFAULT NULL,
  `kode_produk` int(11) DEFAULT NULL,
  `review` varchar(125) DEFAULT NULL,
  `nilai` int(11) DEFAULT NULL,
  PRIMARY KEY (`kode_review`),
  KEY `kode_customer` (`kode_customer`),
  KEY `kode_produk` (`kode_produk`),
  CONSTRAINT `review_ibfk_1` FOREIGN KEY (`kode_customer`) REFERENCES `customer` (`kode_customer`),
  CONSTRAINT `review_ibfk_2` FOREIGN KEY (`kode_produk`) REFERENCES `produk` (`kode_produk`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

/*Data for the table `review` */

insert  into `review`(`kode_review`,`kode_customer`,`kode_produk`,`review`,`nilai`) values 
(1,2,1,'Nggak Enak',2),
(9,2,6,'produk sangat enak',4);

/*Table structure for table `transaksi` */

DROP TABLE IF EXISTS `transaksi`;

CREATE TABLE `transaksi` (
  `kode_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `kode_customer` int(11) DEFAULT NULL,
  `tgl_transaksi` date DEFAULT NULL,
  `kode_produk` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  PRIMARY KEY (`kode_transaksi`),
  KEY `kode_produk` (`kode_produk`),
  KEY `transaksi_ibfk_1` (`kode_customer`),
  CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`kode_customer`) REFERENCES `customer` (`kode_customer`),
  CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`kode_produk`) REFERENCES `produk` (`kode_produk`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `transaksi` */

insert  into `transaksi`(`kode_transaksi`,`kode_customer`,`tgl_transaksi`,`kode_produk`,`harga`,`jumlah`,`total`) values 
(1,2,'2022-06-24',1,15000,2,30000),
(3,2,'2022-06-10',1,5000,8,20000);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
