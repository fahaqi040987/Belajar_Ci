/*
Navicat MySQL Data Transfer

Source Server         : zombi-host
Source Server Version : 50626
Source Host           : localhost:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50626
File Encoding         : 65001

Date: 2016-12-03 08:39:06
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for blog
-- ----------------------------
DROP TABLE IF EXISTS `blog`;
CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `tipe` enum('baru','lama') NOT NULL,
  `gambar` text NOT NULL,
  `penulis` varchar(30) NOT NULL,
  `status` enum('publish','draft') NOT NULL,
  `tags` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_blog`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of blog
-- ----------------------------

-- ----------------------------
-- Table structure for kategori
-- ----------------------------
DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(50) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kategori
-- ----------------------------
INSERT INTO `kategori` VALUES ('1', 'Car / Truck');
INSERT INTO `kategori` VALUES ('3', 'Car / Truck');

-- ----------------------------
-- Table structure for latihan_crud
-- ----------------------------
DROP TABLE IF EXISTS `latihan_crud`;
CREATE TABLE `latihan_crud` (
  `id_latihan` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(15) NOT NULL,
  `nama` varchar(70) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `umur` int(11) NOT NULL,
  PRIMARY KEY (`id_latihan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of latihan_crud
-- ----------------------------

-- ----------------------------
-- Table structure for level
-- ----------------------------
DROP TABLE IF EXISTS `level`;
CREATE TABLE `level` (
  `id_level` int(11) NOT NULL AUTO_INCREMENT,
  `nama_level` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_level`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of level
-- ----------------------------
INSERT INTO `level` VALUES ('1', 'Administrator');
INSERT INTO `level` VALUES ('2', 'Admin');

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `nama_menu` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES ('1', 'HOME');
INSERT INTO `menu` VALUES ('2', 'ROLE');
INSERT INTO `menu` VALUES ('3', 'ABOUT');

-- ----------------------------
-- Table structure for produk
-- ----------------------------
DROP TABLE IF EXISTS `produk`;
CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) NOT NULL,
  `nama_produk` varchar(80) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `dimensi` varchar(30) NOT NULL,
  `warna` varchar(25) NOT NULL,
  `material` varchar(25) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_produk`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of produk
-- ----------------------------
INSERT INTO `produk` VALUES ('6', '3', '', '', '0', '', '', '', '', '1423119638_instagram_circle_gray-128.png', '2016-11-05 10:23:59');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_level` int(11) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `tanggal_buat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id_level` (`id_level`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', '1', 'aku', 'aku', '2016-08-18 13:43:11');
INSERT INTO `users` VALUES ('2', '2', 'kami', 'kami', '2016-08-18 13:43:17');

-- ----------------------------
-- Procedure structure for p_so
-- ----------------------------
DROP PROCEDURE IF EXISTS `p_so`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `p_so`()
BEGIN
	SELECT * FROM tbl_so;
END
;;
DELIMITER ;
