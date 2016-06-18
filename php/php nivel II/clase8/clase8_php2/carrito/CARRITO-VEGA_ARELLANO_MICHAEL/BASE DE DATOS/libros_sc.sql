-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 26-09-2011 a las 01:09:02
-- Versión del servidor: 5.1.33
-- Versión de PHP: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `libros_sc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcar la base de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`cat_id`, `cat_nombre`) VALUES
(1, 'Programacion Web'),
(2, 'Desarrollo Web'),
(3, 'Fiction'),
(4, 'Jardineria'),
(5, 'Pruevas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE IF NOT EXISTS `libros` (
  `isbn` int(11) NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `autor` varchar(70) NOT NULL,
  `descripcion` varchar(70) NOT NULL,
  `cat_id` int(11) NOT NULL,
  PRIMARY KEY (`isbn`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `libros`
--

INSERT INTO `libros` (`isbn`, `precio`, `titulo`, `autor`, `descripcion`, `cat_id`) VALUES
(1, 25, 'php developers', 'sterlings', 'libro de desarrollo web', 1),
(2, 30, 'sanson teach your self', 'matt sanstra', 'libro de prueva', 2),
(3, 50, 'visual basic.net para desarrolladores', 'michael vega', 'libro de desarrollo de sistemas', 3),
(4, 45, 'los jardines del eden', 'dedos de tijera', 'libro de jardineria', 4),
(5, 75, 'la ciudad y los perros', 'mario vargas llosa', 'libro de lectura', 5);
