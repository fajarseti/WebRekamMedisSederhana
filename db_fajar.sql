/*
SQLyog Ultimate v10.42 
MySQL - 5.0.45 : Database - a121405084
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`a121405084` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `a121405084`;

/*Table structure for table `anggota` */

DROP TABLE IF EXISTS `anggota`;

CREATE TABLE `anggota` (
  `id_anggota` int(5) NOT NULL auto_increment,
  `nama` varchar(50) default NULL,
  `alamat` varchar(50) default NULL,
  `kota` varchar(20) default NULL,
  `namauser` varchar(50) default NULL,
  `katakunci` varchar(100) default NULL,
  PRIMARY KEY  (`id_anggota`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `anggota` */

insert  into `anggota`(`id_anggota`,`nama`,`alamat`,`kota`,`namauser`,`katakunci`) values (1,'anang','mranggen','Semarang','anang','c4ca4238a0b923820dcc509a6f75849b'),(2,'gondok','anjungan','Bandung','gondok','c4ca4238a0b923820dcc509a6f75849b'),(3,'ehem','cililitan','Jakarta','ehem','c4ca4238a0b923820dcc509a6f75849b'),(4,'sepatu','cangkiran','Surabaya','sepatu','c4ca4238a0b923820dcc509a6f75849b');

/*Table structure for table `barang` */

DROP TABLE IF EXISTS `barang`;

CREATE TABLE `barang` (
  `kd_brg` int(10) NOT NULL auto_increment,
  `nm_brg` varchar(20) default NULL,
  `hrg_brg` int(10) default NULL,
  `brt_brg` int(10) default NULL,
  `stn_brg` varchar(5) default NULL,
  `wrn_brg` varchar(15) default NULL,
  `bntk_brg` varchar(10) default NULL,
  `uk_brg` varchar(10) default NULL,
  `prdsn_brg` varchar(15) default NULL,
  PRIMARY KEY  (`kd_brg`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `barang` */

insert  into `barang`(`kd_brg`,`nm_brg`,`hrg_brg`,`brt_brg`,`stn_brg`,`wrn_brg`,`bntk_brg`,`uk_brg`,`prdsn_brg`) values (1,'cpu',5000000,2,'Kg','hitam','Padat','Sedang','acer'),(2,'mouse',50000,800,'Gram','biru','Padat','Kecil','logitech'),(3,'susu',10000,800,'Gram','putih','Cair','Kecil','ultramilk'),(4,'zenfone 2',1500000,600,'Gram','putih','Padat','Sedang','asus'),(5,'sandal',20000,500,'Gram','hijau','Padat','Sedang','swallow'),(6,'coca-cola',5000,450,'Gram','hitam','Cair','Kecil','coca-cola'),(7,'lemari',250000,5,'Kg','coklat','Padat','Besar','olimpic'),(8,'spidol',6000,100,'Gram','biru','Padat','Kecil','snowman');

/*Table structure for table `books` */

DROP TABLE IF EXISTS `books`;

CREATE TABLE `books` (
  `book_id` int(5) NOT NULL auto_increment,
  `book_name` varchar(50) default NULL,
  `book_price` decimal(10,2) default NULL,
  PRIMARY KEY  (`book_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `books` */

insert  into `books`(`book_id`,`book_name`,`book_price`) values (1,'Hibrid Da',100000.00),(2,'Android Andromax',75000.00),(3,'Laptop',25000.00);

/*Table structure for table `dokter` */

DROP TABLE IF EXISTS `dokter`;

CREATE TABLE `dokter` (
  `id_dokter` int(11) NOT NULL auto_increment,
  `noid` varchar(5) default NULL,
  `nama_dokter` varchar(25) default NULL,
  `spesialis_dokter` varchar(20) default NULL,
  `tarif_dokter` decimal(12,2) default NULL,
  PRIMARY KEY  (`id_dokter`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `dokter` */

insert  into `dokter`(`id_dokter`,`noid`,`nama_dokter`,`spesialis_dokter`,`tarif_dokter`) values (1,'1','Heru','Tulang',25000.00),(2,'2','Iin','Mata',120000.00),(3,'3','Joko','THT',190000.00),(4,'4','Eko','Kelamin',200000.00),(5,'5','Tri Utomo','Ginjal',170000.00);

/*Table structure for table `dtl_periksa` */

DROP TABLE IF EXISTS `dtl_periksa`;

CREATE TABLE `dtl_periksa` (
  `id_dtlperiksa` int(10) NOT NULL auto_increment,
  `no_periksa` varchar(5) default NULL,
  `noid` varchar(5) default NULL,
  `jml_periksa` decimal(10,0) default NULL,
  PRIMARY KEY  (`id_dtlperiksa`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `dtl_periksa` */

insert  into `dtl_periksa`(`id_dtlperiksa`,`no_periksa`,`noid`,`jml_periksa`) values (1,'01','1',1),(2,'01','3',1),(3,'02','2',2),(4,'02','4',2);

/*Table structure for table `obat` */

DROP TABLE IF EXISTS `obat`;

CREATE TABLE `obat` (
  `id_obat` int(5) NOT NULL auto_increment,
  `no_obat` varchar(5) default NULL,
  `nama_obat` varchar(25) default NULL,
  `jns_obat` varchar(15) default NULL,
  `gram_obat` int(3) default NULL,
  `tarif_obat` decimal(12,2) default NULL,
  PRIMARY KEY  (`id_obat`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `obat` */

insert  into `obat`(`id_obat`,`no_obat`,`nama_obat`,`jns_obat`,`gram_obat`,`tarif_obat`) values (1,'1','C IPI','Tablet',400,10000.00),(2,'2','Insto','Tetes',100,20000.00),(3,'3','OBH Combi','Sirup',150,300000.00),(4,'4','De Nature Gang Jie','Tablet',500,450000.00),(5,'5','Luruh Batu','Tablet',600,500000.00);

/*Table structure for table `orders` */

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `order_id` int(12) NOT NULL auto_increment,
  `order_name` varchar(15) default NULL,
  `order_address` text,
  `book_id` int(11) default NULL,
  `order_amount` decimal(10,0) default NULL,
  PRIMARY KEY  (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `orders` */

insert  into `orders`(`order_id`,`order_name`,`order_address`,`book_id`,`order_amount`) values (1,'fajar','semarang',1,1),(8,'tiwi','bima 1',3,2),(7,'reza','smg',3,2);

/*Table structure for table `pasien` */

DROP TABLE IF EXISTS `pasien`;

CREATE TABLE `pasien` (
  `id_pasien` int(5) NOT NULL auto_increment,
  `nirm` varchar(5) default NULL,
  `nama_pasien` varchar(25) default NULL,
  `alamat_pasien` text,
  `tgl_lahir` date default NULL,
  `jns_kelamin` varchar(10) default NULL,
  PRIMARY KEY  (`id_pasien`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `pasien` */

insert  into `pasien`(`id_pasien`,`nirm`,`nama_pasien`,`alamat_pasien`,`tgl_lahir`,`jns_kelamin`) values (8,'01','eko','semarang','1996-02-02','Pria'),(9,'02','betri','rembang','1996-12-04','Wanita'),(10,'03','fajar','semarang','1995-12-17','Pria'),(13,'04','henry','ngaliyan','1995-06-07','Pria'),(14,'05','tiwi','mijen','1996-10-04','Wanita');

/*Table structure for table `pegawai` */

DROP TABLE IF EXISTS `pegawai`;

CREATE TABLE `pegawai` (
  `nip` varchar(10) default NULL,
  `nama` varchar(50) default NULL,
  `password` varchar(10) default NULL,
  `bagian` varchar(15) default NULL,
  `agama` varchar(10) default NULL,
  `jkel` varchar(10) default NULL,
  `pendidikan` varchar(20) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `pegawai` */

insert  into `pegawai`(`nip`,`nama`,`password`,`bagian`,`agama`,`jkel`,`pendidikan`) values ('1','fajar','123','admin','Islam','Pria','SMA'),('2','tiwi',NULL,'sekretaris','Islam','Wanita','SMA'),('3','reza',NULL,'tu','Islam','Pria','SMP'),('4','henry',NULL,'desainer','Kristen','Pria','SMA'),('5','arvin',NULL,'auditor','Katolik','Pria','SMA'),('6','diany',NULL,'teller','Islam','Wanita','SMP'),('7','vanessa',NULL,'teller','Kristen','Wanita','SMA'),('8','kartika',NULL,'cs','Islam','Wanita','SMA'),('9','ivana',NULL,'teller','Kristen','Wanita','SMA');

/*Table structure for table `periksa` */

DROP TABLE IF EXISTS `periksa`;

CREATE TABLE `periksa` (
  `id_periksa` int(10) NOT NULL auto_increment,
  `no_periksa` varchar(5) default NULL,
  `tgl_periksa` date default NULL,
  `nirm` varchar(5) default NULL,
  PRIMARY KEY  (`id_periksa`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `periksa` */

insert  into `periksa`(`id_periksa`,`no_periksa`,`tgl_periksa`,`nirm`) values (1,'01','2016-06-01','01'),(2,'02','2016-06-14','03');

/*Table structure for table `produk` */

DROP TABLE IF EXISTS `produk`;

CREATE TABLE `produk` (
  `kd` char(17) NOT NULL,
  `nm_prd` char(35) default NULL,
  `hrg` int(20) default NULL,
  PRIMARY KEY  (`kd`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `produk` */

insert  into `produk`(`kd`,`nm_prd`,`hrg`) values ('01','celana',10000),('14','coklat',1000),('12','swallow',12000),('02','aqua',14000),('03','ayam',90000),('06','jelly',80000),('07','gerry',70000),('04','jajan',79000),('05','hp',60000),('08','biskuit',40000),('10','jeans',86000),('09','kaos',50000),('13','sepatu',45000),('15','sabun wangi',20000);

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(5) NOT NULL auto_increment,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id`,`username`,`password`,`level`) values (2,'teguh','c4ca4238a0b923820dcc509a6f75849b','user'),(7,'admin','c4ca4238a0b923820dcc509a6f75849b','admin'),(8,'Bejo','c81e728d9d4c2f636f067f89cc14862c','user'),(9,'anang','c4ca4238a0b923820dcc509a6f75849b','anggota'),(10,'gondok','c4ca4238a0b923820dcc509a6f75849b','anggota'),(11,'ehem','c4ca4238a0b923820dcc509a6f75849b','anggota'),(12,'sepatu','c4ca4238a0b923820dcc509a6f75849b','anggota');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
