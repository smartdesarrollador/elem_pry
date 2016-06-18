-- phpMyAdmin SQL Dump
-- version 2.7.0-pl2
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 19-03-2006 a las 20:36:14
-- Versión del servidor: 5.0.18
-- Versión de PHP: 5.1.2
-- 
-- Base de datos: `editorialmegabyte`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `autor`
--
create database editorialmegabyte;
use editorialmegabyte;

CREATE TABLE `autor` (
  `autorID` int(11) NOT NULL auto_increment,
  `nombre` char(50) NOT NULL,
  PRIMARY KEY  (`autorID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

-- 
-- Volcar la base de datos para la tabla `autor`
-- 

INSERT INTO `autor` VALUES (1, 'Eddy Blaider Aburto Correa');
INSERT INTO `autor` VALUES (2, 'Jaime P. S. Eddy B. Aburto');
INSERT INTO `autor` VALUES (3, 'Gesvin Romero Moreno');
INSERT INTO `autor` VALUES (4, 'Christian Crovetto Huerta');
INSERT INTO `autor` VALUES (5, 'Erika A. H. Christian C. H.');
INSERT INTO `autor` VALUES (6, 'Gean Carlo Apolinario García');
INSERT INTO `autor` VALUES (7, 'Gesvin Romero Moreno');
INSERT INTO `autor` VALUES (8, 'Henry Pantigoso Loza');
INSERT INTO `autor` VALUES (9, 'Iván Dextre Angeles');
INSERT INTO `autor` VALUES (10, 'Jaime Pantigoso Silva');
INSERT INTO `autor` VALUES (11, 'Joel de la Cruz Villar');
INSERT INTO `autor` VALUES (12, 'Jorge Arturo Cruz Huaman');
INSERT INTO `autor` VALUES (13, 'Juan José Castañeda León');
INSERT INTO `autor` VALUES (14, 'Julio Márquez Lozada');
INSERT INTO `autor` VALUES (15, 'Orlando Loyola Giraldo');
INSERT INTO `autor` VALUES (16, 'Raymundo Casas Navarro');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `ciudad`
-- 

CREATE TABLE `ciudad` (
  `ciudadID` int(11) NOT NULL auto_increment,
  `nombre` char(30) NOT NULL,
  PRIMARY KEY  (`ciudadID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

-- 
-- Volcar la base de datos para la tabla `ciudad`
-- 

INSERT INTO `ciudad` VALUES (1, 'Puno');
INSERT INTO `ciudad` VALUES (2, 'Piura');
INSERT INTO `ciudad` VALUES (3, 'Cajamarca');
INSERT INTO `ciudad` VALUES (4, 'Lima');
INSERT INTO `ciudad` VALUES (5, 'Arequipa');
INSERT INTO `ciudad` VALUES (6, 'Ica');
INSERT INTO `ciudad` VALUES (7, 'Tacna');
INSERT INTO `ciudad` VALUES (8, 'Tumbes');
INSERT INTO `ciudad` VALUES (9, 'Cusco');
INSERT INTO `ciudad` VALUES (10, 'Loreto');
INSERT INTO `ciudad` VALUES (11, 'Chimbote');
INSERT INTO `ciudad` VALUES (12, 'Ayacucho');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `clientes`
-- 

CREATE TABLE `clientes` (
  `clienteID` int(11) NOT NULL auto_increment,
  `nombres` char(40) NOT NULL,
  `direccion` char(80) NOT NULL,
  `ciudadID` int(11) NOT NULL,
  PRIMARY KEY  (`clienteID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

-- 
-- Volcar la base de datos para la tabla `clientes`
-- 

INSERT INTO `clientes` VALUES (1, 'Jose Martin Valdes', 'Av. Lima \r\n\r\n452', 5);
INSERT INTO `clientes` VALUES (2, 'Mely Urtado', 'Jr. Cercado 500', 6);
INSERT INTO `clientes` VALUES (3, 'Michael Accher', 'Av. Marina 458', 6);
INSERT INTO `clientes` VALUES (4, 'Alan Wong', 'Calle ica 452', 3);
INSERT INTO `clientes` VALUES (5, 'Elmer Paz', 'Jr. Puno 859', 2);
INSERT INTO `clientes` VALUES (6, 'Daniel Villar', 'Av. Pardo 890', 5);
INSERT INTO `clientes` VALUES (7, 'Marcos Aguilar', 'Av. Mariscal \r\n\r\n480', 4);
INSERT INTO `clientes` VALUES (9, 'Ruben Antonio', 'Av. Lima Nº 458 \r\n\r\nint 89', 9);
INSERT INTO `clientes` VALUES (10, 'Jhon Michael', 'Av. Julio 459', 12);
INSERT INTO `clientes` VALUES (11, 'Juan Jose Alvares', 'Jr. Ayacucho \r\n\r\n4589', 7);
INSERT INTO `clientes` VALUES (12, 'Juan Jose Alvares', 'Jr. Ayacucho \r\n\r\n4589', 7);
INSERT INTO `clientes` VALUES (13, 'Andres Alvarado', 'Jr. Tacna \r\n\r\n478', 3);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `descripcion`
-- 

CREATE TABLE `descripcion` (
  `libroID` int(11) NOT NULL,
  `descripcion` text,
  PRIMARY KEY  (`libroID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `descripcion`
-- 

INSERT INTO `descripcion` VALUES (32, 'Con este libro usted aprendera \r\n\r\na trabajar con paginas HTML, PHP, MySQL');
INSERT INTO `descripcion` VALUES (59, 'Demostracion 100');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `libros`
-- 

CREATE TABLE `libros` (
  `libroID` int(11) NOT NULL auto_increment,
  `titulo` char(60) NOT NULL,
  `precio` float NOT NULL,
  `autorID` int(11) NOT NULL,
  PRIMARY KEY  (`libroID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

-- 
-- Volcar la base de datos para la tabla `libros`
-- 

INSERT INTO `libros` VALUES (1, 'Aplique Programación en Visual Basic 6.0', 16.104, 1);
INSERT INTO `libros` VALUES (2, 'Aplique Programación con Visual C++ \r\n\r\n6.0', 40.26, 2);
INSERT INTO `libros` VALUES (4, 'Base de Datos con SQL Server 2000', 16.104, 1);
INSERT INTO `libros` VALUES (5, 'Modelamiento de Base de Datos con \r\n\r\nErwin 3.5', 16.1051, 7);
INSERT INTO `libros` VALUES (6, 'Excel 2002 XP Paso a Paso', 48.3153, 10);
INSERT INTO `libros` VALUES (7, 'Dreamweaver 4.0', 40.2628, 11);
INSERT INTO `libros` VALUES (8, 'Active Server Pages 3.0', 39.6, 1);
INSERT INTO `libros` VALUES (9, 'Programación en Java 2', 16.1051, 1);
INSERT INTO `libros` VALUES (10, 'Ingrese al mundo de Internet', 48.3153, 10);
INSERT INTO `libros` VALUES (11, 'Office XP 2002', 48.3153, 1);
INSERT INTO `libros` VALUES (12, 'Ensamble y Repare Pentium I II III \r\n\r\ny IV', 48.3153, 1);
INSERT INTO `libros` VALUES (13, 'HTML Para todo el Mundo', 48.3153, 1);
INSERT INTO `libros` VALUES (14, 'Power Point XP 2002 Paso a Paso', 48.3153, 11);
INSERT INTO `libros` VALUES (15, 'Visual Basic 6.0 Como debe ser', 48.3153, 13);
INSERT INTO `libros` VALUES (16, 'Corel Draw 10', 48.312, 9);
INSERT INTO `libros` VALUES (17, 'Power Builder 8.0 Como debe ser', 48.3153, 13);
INSERT INTO `libros` VALUES (18, 'Flash MX', 48.3153, 11);
INSERT INTO `libros` VALUES (19, 'Visio 2002 XP', 48.3153, 15);
INSERT INTO `libros` VALUES (20, 'Programación con C++ Builder 5', 48.3153, 1);
INSERT INTO `libros` VALUES (21, 'Desarrollo de aplicaciones con \r\n\r\nDelphi 6', 48.312, 10);
INSERT INTO `libros` VALUES (22, 'La cara oculta del Linux', 48.3153, 11);
INSERT INTO `libros` VALUES (23, 'El mundo de Autocad 2002', 32.2102, 8);
INSERT INTO `libros` VALUES (24, 'Pascal 7.0', 32.2102, 10);
INSERT INTO `libros` VALUES (25, 'Front Page XP 2002', 32.2102, 11);
INSERT INTO `libros` VALUES (26, 'Guía Visual de Excel XP 2002', 32.2102, 6);
INSERT INTO `libros` VALUES (27, 'Guía Visual de Access XP 2002', 32.2102, 6);
INSERT INTO `libros` VALUES (28, 'Guía Visual de Power Ponit XP \r\n\r\n2002', 32.2102, 11);
INSERT INTO `libros` VALUES (29, 'Guía Visual de Windows XP 2002', 32.2102, 6);
INSERT INTO `libros` VALUES (30, 'Razonamiento Verbal', 32.2102, 16);
INSERT INTO `libros` VALUES (31, 'Photoshop 7.0', 32.2102, 11);
INSERT INTO `libros` VALUES (32, 'Dreamweaver MX', 32.2102, 11);
INSERT INTO `libros` VALUES (33, 'Guía Práctica de Autocad 2002', 32.2102, 14);
INSERT INTO `libros` VALUES (34, 'Programación C++', 32.2102, 10);
INSERT INTO `libros` VALUES (35, 'Photoshop con KPTs', 32.2102, 12);
INSERT INTO `libros` VALUES (36, 'Programación en Excel con \r\n\r\nAplicaciones VB', 32.2102, 6);
INSERT INTO `libros` VALUES (37, 'Corel Draw 11', 32.208, 12);
INSERT INTO `libros` VALUES (38, 'Ms Project 2002', 32.2102, 15);
INSERT INTO `libros` VALUES (39, 'Programación en Lenguaje C', 32.2102, 10);
INSERT INTO `libros` VALUES (40, 'Visual Basic .NET', 32.2102, 5);
INSERT INTO `libros` VALUES (41, 'Aplicaciones Teórico Práctico SAP \r\n\r\n2000', 32.208, 8);
INSERT INTO `libros` VALUES (42, 'Guía Práctica Autocad 2004', 32.2102, 8);
INSERT INTO `libros` VALUES (43, 'Diseño Web', 32.2102, 11);
INSERT INTO `libros` VALUES (44, 'Algoritmos y Diagramas de Flujo', 48.312, 10);
INSERT INTO `libros` VALUES (45, 'Power Builder 9.0 Full Data Base', 48.3153, 13);
INSERT INTO `libros` VALUES (46, 'UML con Rational Rose', 48.3153, 7);
INSERT INTO `libros` VALUES (47, 'DHTML JavaScript y Aplicaciones \r\n\r\nASP.NET', 48.3153, 6);
INSERT INTO `libros` VALUES (48, 'S10 Costos y Presupuestos', 48.3153, 8);
INSERT INTO `libros` VALUES (49, 'Visual FoxPro 8.0 Full DataBase', 48.3153, 7);
INSERT INTO `libros` VALUES (50, 'Desarrolle Aplicaciones con DELPHI \r\n\r\n7', 48.312, 10);
INSERT INTO `libros` VALUES (51, 'Oracle  9i', 48.3153, 4);
INSERT INTO `libros` VALUES (52, 'Macromedia Flash MX 2004', 48.3153, 11);
INSERT INTO `libros` VALUES (53, 'Word 2002 XP Paso a Paso', 48.3153, 1);
INSERT INTO `libros` VALUES (54, 'Aprenda y Domine Excel 2000', 48.312, 1);
INSERT INTO `libros` VALUES (55, 'Access 2002 XP', 15.4, 1);
INSERT INTO `libros` VALUES (56, 'Introducción a la Computación', 48.3153, 1);
INSERT INTO `libros` VALUES (57, 'Guía Visual de Power Ponit XP \r\n\r\n2002', 48.3153, 6);
INSERT INTO `libros` VALUES (58, 'xxx', 0, 1);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `orden`
-- 

CREATE TABLE `orden` (
  `ordenID` int(11) NOT NULL,
  `libroID` int(11) NOT NULL,
  `Cantidad` tinyint(11) NOT NULL,
  `item` int(11) NOT NULL auto_increment,
  PRIMARY KEY  (`item`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

-- 
-- Volcar la base de datos para la tabla `orden`
-- 

INSERT INTO `orden` VALUES (1, 55, 10, 1);
INSERT INTO `orden` VALUES (1, 1, 5, 2);
INSERT INTO `orden` VALUES (2, 10, 8, 3);
INSERT INTO `orden` VALUES (3, 5, 50, 4);
INSERT INTO `orden` VALUES (3, 10, 16, 5);
INSERT INTO `orden` VALUES (3, 20, 15, 6);
INSERT INTO `orden` VALUES (3, 8, 10, 7);
INSERT INTO `orden` VALUES (13, 55, 127, 8);
INSERT INTO `orden` VALUES (13, 55, 90, 9);
INSERT INTO `orden` VALUES (13, 33, 45, 10);
INSERT INTO `orden` VALUES (13, 51, 1, 11);
INSERT INTO `orden` VALUES (14, 32, 5, 12);
INSERT INTO `orden` VALUES (15, 55, 8, 13);
INSERT INTO `orden` VALUES (15, 55, 9, 14);
INSERT INTO `orden` VALUES (15, 55, 0, 15);
INSERT INTO `orden` VALUES (16, 16, 10, 16);
INSERT INTO `orden` VALUES (16, 8, 0, 17);
INSERT INTO `orden` VALUES (16, 55, 89, 18);
INSERT INTO `orden` VALUES (16, 55, 127, 19);
INSERT INTO `orden` VALUES (17, 26, 2, 20);
INSERT INTO `orden` VALUES (17, 18, 1, 21);
INSERT INTO `orden` VALUES (18, 12, 10, 22);
INSERT INTO `orden` VALUES (18, 47, 2, 23);
INSERT INTO `orden` VALUES (19, 33, 8, 24);
INSERT INTO `orden` VALUES (19, 18, 100, 25);
INSERT INTO `orden` VALUES (22, 32, 10, 29);
INSERT INTO `orden` VALUES (20, 42, 8, 28);
INSERT INTO `orden` VALUES (22, 25, 15, 30);
INSERT INTO `orden` VALUES (24, 23, 6, 34);
INSERT INTO `orden` VALUES (23, 26, 10, 32);
INSERT INTO `orden` VALUES (23, 1, 8, 33);
INSERT INTO `orden` VALUES (24, 57, 10, 35);
INSERT INTO `orden` VALUES (28, 12, 5, 37);
INSERT INTO `orden` VALUES (28, 29, 4, 38);
INSERT INTO `orden` VALUES (28, 4, 1, 39);
INSERT INTO `orden` VALUES (29, 12, 56, 40);
INSERT INTO `orden` VALUES (33, 18, 10, 41);
INSERT INTO `orden` VALUES (38, 12, 5, 42);
INSERT INTO `orden` VALUES (38, 13, 63, 43);
INSERT INTO `orden` VALUES (38, 25, 10, 47);
INSERT INTO `orden` VALUES (39, 18, 5, 48);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `pedidos`
-- 

CREATE TABLE `pedidos` (
  `clienteID` int(11) NOT NULL,
  `monto` float NOT NULL,
  `Fecha` date NOT NULL,
  `ordenID` int(11) NOT NULL auto_increment,
  PRIMARY KEY  (`ordenID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

-- 
-- Volcar la base de datos para la tabla `pedidos`
-- 

INSERT INTO `pedidos` VALUES (5, 0, '2004-06-15', 40);
INSERT INTO `pedidos` VALUES (1, 150, '2004-06-04', 1);
INSERT INTO `pedidos` VALUES (2, 240, '2004-03-15', 2);
INSERT INTO `pedidos` VALUES (3, 1680, '2004-02-10', 3);
INSERT INTO `pedidos` VALUES (6, 3279.58, '2004-06-14', 38);
INSERT INTO `pedidos` VALUES (4, 0, '2004-06-14', 35);
INSERT INTO `pedidos` VALUES (9, 351.383, '2004-06-14', 28);
INSERT INTO `pedidos` VALUES (7, 439.23, '2004-06-14', 33);
INSERT INTO `pedidos` VALUES (5, 0, '2004-06-14', 37);
INSERT INTO `pedidos` VALUES (3, 614.922, '2002-05-01', 24);
INSERT INTO `pedidos` VALUES (5, 409.948, '2002-05-01', 23);
INSERT INTO `pedidos` VALUES (4, 732.05, '2002-05-01', 22);
INSERT INTO `pedidos` VALUES (4, 0, '2004-06-14', 36);
INSERT INTO `pedidos` VALUES (7, 0, '2002-05-01', 13);
INSERT INTO `pedidos` VALUES (5, 0, '2002-05-01', 14);
INSERT INTO `pedidos` VALUES (4, 0, '2002-05-01', 15);
INSERT INTO `pedidos` VALUES (5, 0, '2002-05-01', 16);
INSERT INTO `pedidos` VALUES (4, 0, '2002-05-01', 17);
INSERT INTO `pedidos` VALUES (2, 0, '2002-05-01', 18);
INSERT INTO `pedidos` VALUES (7, 4626.56, '2002-05-01', 19);
INSERT INTO `pedidos` VALUES (5, 0, '2002-05-01', 20);
INSERT INTO `pedidos` VALUES (9, 0, '2004-06-14', 29);
INSERT INTO `pedidos` VALUES (9, 219.615, '2004-06-13', 39);