/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.11-MariaDB : Database - db_speedboat
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_speedboat` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_speedboat`;

/*Table structure for table `tb_jadwal` */

DROP TABLE IF EXISTS `tb_jadwal`;

CREATE TABLE `tb_jadwal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `asal` varchar(100) DEFAULT NULL,
  `waktu_berangkat` datetime DEFAULT NULL,
  `tujuan` varchar(100) DEFAULT NULL,
  `waktu_sampai` datetime DEFAULT NULL,
  `id_speedboat` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_speedboat` (`id_speedboat`),
  CONSTRAINT `tb_jadwal_ibfk_1` FOREIGN KEY (`id_speedboat`) REFERENCES `tb_speedboat` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_jadwal` */

insert  into `tb_jadwal`(`id`,`asal`,`waktu_berangkat`,`tujuan`,`waktu_sampai`,`id_speedboat`,`created_at`,`updated_at`) values 
(1,'nusa penida','2021-02-21 12:37:35','sanur','2021-02-21 12:38:25',4,NULL,NULL);

/*Table structure for table `tb_pembelian` */

DROP TABLE IF EXISTS `tb_pembelian`;

CREATE TABLE `tb_pembelian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_tiket` varchar(255) DEFAULT NULL,
  `id_jadwal` int(11) DEFAULT NULL,
  `id_speedboat` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `status` enum('Pending','Terkonfirmasi','Batal','Selesai') DEFAULT NULL,
  `bukti` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_jadwal` (`id_jadwal`),
  KEY `id_speedboat` (`id_speedboat`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `tb_pembelian_ibfk_1` FOREIGN KEY (`id_jadwal`) REFERENCES `tb_jadwal` (`id`),
  CONSTRAINT `tb_pembelian_ibfk_2` FOREIGN KEY (`id_speedboat`) REFERENCES `tb_speedboat` (`id`),
  CONSTRAINT `tb_pembelian_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_pembelian` */

/*Table structure for table `tb_speedboat` */

DROP TABLE IF EXISTS `tb_speedboat`;

CREATE TABLE `tb_speedboat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_speedboat` varchar(100) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `kapasitas` int(11) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `tb_speedboat_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_speedboat` */

insert  into `tb_speedboat`(`id`,`nama_speedboat`,`id_user`,`kapasitas`,`deskripsi`,`created_at`,`updated_at`) values 
(4,'speedboat1',2,30,'cepat sampai tujuan',NULL,NULL),
(5,'speedboat 2',3,10,'asdaa',NULL,NULL),
(6,'fsfz',2,20,'arataefg\r\n\r\n',NULL,NULL);

/*Table structure for table `tb_user` */

DROP TABLE IF EXISTS `tb_user`;

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(20) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(250) DEFAULT NULL,
  `jeniskelamin` enum('Perempuan','Laki-laki') DEFAULT NULL,
  `nohp` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` enum('Admin','SAdmin','Direktur','Customer') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_user` */

insert  into `tb_user`(`id`,`nik`,`nama`,`alamat`,`jeniskelamin`,`nohp`,`email`,`password`,`role`,`created_at`,`updated_at`) values 
(2,'nik1','dawid','sesetan','Perempuan','08123457890','iawidyasavitri@gmail.com','halo123','Admin','2021-02-21 11:59:58','2021-02-21 12:00:01'),
(3,'nik2','nia','renon','Perempuan','08998776689','milliniautami@gmail.com','test123','SAdmin',NULL,NULL),
(4,'fsf','test','trsr','Laki-laki','98755464','testset','12345','Customer',NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
