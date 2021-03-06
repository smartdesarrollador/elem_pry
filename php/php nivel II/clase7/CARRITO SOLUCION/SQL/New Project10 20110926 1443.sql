﻿-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.0.45-community-nt


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema libros_sc
--

CREATE DATABASE IF NOT EXISTS libros_sc;
USE libros_sc;

--
-- Definition of table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE `categorias` (
  `cat_id` int(10) unsigned NOT NULL auto_increment,
  `cat_nombre` varchar(45) NOT NULL,
  PRIMARY KEY  (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorias`
--

/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` (`cat_id`,`cat_nombre`) VALUES 
 (1,'categoria1'),
(2,'categoria2'),
(3,'categoria3'),
(4,'categoria4');


/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;


--
-- Definition of table `libros`
--

DROP TABLE IF EXISTS `libros`;
CREATE TABLE `libros` (
  `precio` double NOT NULL,
  `isbn` varchar(45) NOT NULL,
  `cat_id` int(10) unsigned NOT NULL auto_increment,
  `descripcion` varchar(45) NOT NULL,
  `autor` varchar(45) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  PRIMARY KEY  (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `libros`
--

/*!40000 ALTER TABLE `libros` DISABLE KEYS */;
INSERT INTO `libros` (`precio`,`isbn`,`cat_id`,`descripcion`,`autor`,`titulo`) VALUES 
 (10,'1',1,'libro de php1','luis','php1'),
(20,'2',2,'libro de php2','jorge','php2'),
(30,'3',3,'libro de php3','raul','php3'),
(40,'4',4,'libro de php4','esteban','php4');
/*!40000 ALTER TABLE `libros` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;