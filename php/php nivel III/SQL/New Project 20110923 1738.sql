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
-- Create schema bdsiste
--

CREATE DATABASE IF NOT EXISTS bdsiste;
USE bdsiste;

--
-- Definition of table `noticias`
--

DROP TABLE IF EXISTS `noticias`;
CREATE TABLE `noticias` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `titulo` varchar(100) NOT NULL default '',
  `texto` text NOT NULL,
  `categoria` enum('promociones','ofertas','costas') NOT NULL default 'promociones',
  `fecha` date NOT NULL default '0000-00-00',
  `imagen` varchar(100) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `noticias`
--

/*!40000 ALTER TABLE `noticias` DISABLE KEYS */;
INSERT INTO `noticias` (`id`,`titulo`,`texto`,`categoria`,`fecha`,`imagen`) VALUES 
 (1,'Nueva promocion en Nervion','145 viviendas de lujo en urbanizacion ajardinada situadas en un entorno privilegiado','promociones','2004-02-04',NULL),
 (2,'Altimas viviendas junto al rio','Apartamentos de 1 y 2 dormitorios, con fantasticas vistas. Excelentes condiciones de financiacion.','ofertas','2004-02-05',NULL),
 (3,'Apartamentos en el Puerto de Sta María','En la playa de Valdelagrana, en primera línea de playa. Pisos reformados y completamente amueblados.','costas','2004-02-06','apartamento8.jpg'),
 (4,'Casa reformada en el barrio de la Judera','Dos plantas y Atico, 5 habitaciones, patio interior, amplio garaje. Situada en una calle tranquila y a un paso del centro historico.','promociones','2004-02-07',NULL),
 (5,'Promocion en Costa Ballena','Con vistas al campo de golf, magnificas calidades, entorno ajardinado con piscina y servicio de vigilancia.','costas','2004-02-09','apartamento9.jpg'),
 (6,'turismo','promociones y oferta para el viaje al cusco','ofertas','2011-09-20','Invierno.jpg'),
 (7,'viaje','viaje a arequipa con un increible descuento','promociones','2011-09-20','Puesta de sol.jpg'),
 (8,'viaje turistico','le ofrecemos un viaje a todos los lugares turisticos de iquitos','ofertas','2011-09-20','Colinas azules.jpg');
/*!40000 ALTER TABLE `noticias` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
