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
-- Create schema bd1
--

CREATE DATABASE IF NOT EXISTS bd1;
USE bd1;

--
-- Definition of table `genero`
--

DROP TABLE IF EXISTS `genero`;
CREATE TABLE `genero` (
  `id_genero` int(11) NOT NULL auto_increment,
  `nombre` varchar(20) default NULL,
  PRIMARY KEY  (`id_genero`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genero`
--

/*!40000 ALTER TABLE `genero` DISABLE KEYS */;
INSERT INTO `genero` (`id_genero`,`nombre`) VALUES 
 (1,'COMEDIA'),
 (2,'FUTURO'),
 (3,'ACCION'),
 (4,'COMEDIA'),
 (5,'TERROR'),
 (6,'DRAMA');
/*!40000 ALTER TABLE `genero` ENABLE KEYS */;


--
-- Definition of table `movimiento`
--

DROP TABLE IF EXISTS `movimiento`;
CREATE TABLE `movimiento` (
  `id_mov` int(11) NOT NULL auto_increment,
  `tipo` varchar(20) default NULL,
  `id_pelicula` int(11) NOT NULL,
  PRIMARY KEY  (`id_mov`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movimiento`
--

/*!40000 ALTER TABLE `movimiento` DISABLE KEYS */;
/*!40000 ALTER TABLE `movimiento` ENABLE KEYS */;


--
-- Definition of table `pelicula`
--

DROP TABLE IF EXISTS `pelicula`;
CREATE TABLE `pelicula` (
  `id_pelicula` int(11) NOT NULL auto_increment,
  `nombre` varchar(20) default NULL,
  `precio_venta` int(11) default NULL,
  `precio_alquiler` int(11) default NULL,
  `stock` int(11) default NULL,
  `id_genero` int(11) NOT NULL,
  PRIMARY KEY  (`id_pelicula`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelicula`
--

/*!40000 ALTER TABLE `pelicula` DISABLE KEYS */;
INSERT INTO `pelicula` (`id_pelicula`,`nombre`,`precio_venta`,`precio_alquiler`,`stock`,`id_genero`) VALUES 
 (1,'LOS PITUFOS',50,10,16,1),
 (2,'ALIEN VS DEPREDADOR',50,10,20,5),
 (3,'LA ERA DEL HIELO2',30,3,120,1),
 (4,'FUTURE 34',50,10,16,2),
 (5,'IRONMAN',50,10,16,2);
/*!40000 ALTER TABLE `pelicula` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
