-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 22-12-2011 a las 23:51:35
-- Versión del servidor: 5.5.8
-- Versión de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `php_03`
create database php_03;
use php_03;
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `idcategoria` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  PRIMARY KEY (`idcategoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Volcar la base de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idcategoria`, `nombre`, `descripcion`) VALUES
(1, 'MainBoard', 'Es la parte principal de la coputadora'),
(2, 'Procesador', 'el cerebro de la computadora'),
(3, 'Memoria RAM', 'Es donde el computador gusrda los datos momentaneamente'),
(4, 'teclado', 'dispositivo que se utiliza para el manejo de caracteres'),
(25, 'melisa', 'bailarina de raul romero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcar la base de datos para la tabla `menus`
--

INSERT INTO `menus` (`id`, `nombre`, `titulo`) VALUES
(8, 'jorge', 'el periodista'),
(9, 'luisquito', 'el bailarin'),
(10, 'pedro', 'el cocinero'),
(11, 'juan', 'el deportista'),
(13, 'julieta', 'la saltarina');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE IF NOT EXISTS `persona` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `fec_nac` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `persona`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `codproducto` int(11) NOT NULL AUTO_INCREMENT,
  `desproducto` varchar(50) NOT NULL,
  `puproducto` decimal(16,2) NOT NULL,
  `imgproducto` varchar(50) NOT NULL,
  PRIMARY KEY (`codproducto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `producto`
--

INSERT INTO `producto` (`codproducto`, `desproducto`, `puproducto`, `imgproducto`) VALUES
(1, 'php avanzado', '50.26', '1'),
(2, 'php y mysql for dummys', '15.00', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idusuario` varchar(16) NOT NULL,
  `clave` varchar(32) DEFAULT NULL,
  `nombres` varchar(100) DEFAULT NULL,
  `paterno` varchar(32) DEFAULT NULL,
  `materno` varchar(32) DEFAULT NULL,
  `correo` varchar(64) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `estado` char(1) DEFAULT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `clave`, `nombres`, `paterno`, `materno`, `correo`, `direccion`, `telefono`, `estado`) VALUES
(' 4 ', ' 15 ', ' luanito ', ' sanchesz ', ' fiola ', ' hot.com ', ' san martin ', ' 356546546 ', 'A'),
('2', '10', 'luis', 'mar', 'lula', 'hotmail.com', 'los jazminez', '23423454', 's'),
('4', '15', 'luan', 'sanchesz', 'fiola', 'hot.com', 'los olivos', '356546546', 'A');
