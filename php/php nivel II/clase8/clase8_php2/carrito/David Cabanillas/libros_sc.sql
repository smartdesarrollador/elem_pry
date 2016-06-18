-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 28-09-2011 a las 01:22:42
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `libros_sc`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `categorias`
-- 

CREATE TABLE `categorias` (
  `cat_id` int(11) NOT NULL auto_increment,
  `cat_nombre` varchar(45) NOT NULL,
  PRIMARY KEY  (`cat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- Volcar la base de datos para la tabla `categorias`
-- 

INSERT INTO `categorias` VALUES (1, 'PROGRAMACION WEB');
INSERT INTO `categorias` VALUES (2, 'DISENO GRAFICO');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `libros`
-- 

CREATE TABLE `libros` (
  `id` int(11) NOT NULL auto_increment,
  `cat_id` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `autor` varchar(45) NOT NULL,
  `isbn` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- Volcar la base de datos para la tabla `libros`
-- 

INSERT INTO `libros` VALUES (1, 1, 'PHP', 'David', 1, 10, 'Libro de Php');
INSERT INTO `libros` VALUES (2, 2, 'PHOTOSHOP', 'Moises', 2, 20, 'Libro de Photoshop');
