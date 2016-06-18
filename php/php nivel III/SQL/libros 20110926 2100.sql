-- MySQL Administrator dump 1.4
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
  `cat_nombre` varchar(50) NOT NULL,
  PRIMARY KEY  (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

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
`cat_id` int(10) unsigned NOT NULL auto_increment,
  `isbn` int(10) not null,
  `titulo` varchar(50) NOT NULL,
  `autor` varchar(50) default NULL,
  `descripcion` text NOT NULL,
  `precio` int(11) NOT NULL,

  PRIMARY KEY  (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `libros`
--

/*!40000 ALTER TABLE `libros` DISABLE KEYS */;
INSERT INTO `libros` (`cat_id`,`isbn`,`titulo`,`autor`,`descripcion`,`precio`) VALUES
 (1,1,'php1','autor1','descripcion1',30),
 (2,2,'php2','autor2','descripcion2',29),
 (3,3,'php3','autor3','descripcion3',40),
 (4,4,'php4','autor4','descripcion4',37);
/*!40000 ALTER TABLE `libros` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;