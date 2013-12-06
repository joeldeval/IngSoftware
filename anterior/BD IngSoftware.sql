-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 29-10-2013 a las 22:11:43
-- Versión del servidor: 5.1.33
-- Versión de PHP: 5.2.9-2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `ingsoftware`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erroresconocidos`
--

CREATE TABLE IF NOT EXISTS `erroresconocidos` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Error` varchar(50) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Comentarios` varchar(50) NOT NULL,
  `Solucion` tinyint(1) NOT NULL,
  `Fecha` datetime NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcar la base de datos para la tabla `erroresconocidos`
--

INSERT INTO `erroresconocidos` (`Id`, `Error`, `Nombre`, `Comentarios`, `Solucion`, `Fecha`) VALUES
(1, '', '0', '', 0, '2013-10-29 20:53:14'),
(2, '', '0', '', 0, '2013-10-29 20:54:42'),
(3, '', '0', '', 0, '2013-10-29 20:54:56'),
(4, '', 'O', '', 0, '2013-10-29 20:56:28'),
(5, '', 'a', 'Error no solucionado', 0, '2013-10-29 20:58:03'),
(6, '', 'a', 'Error no solucionado', 0, '2013-10-29 20:58:34'),
(7, 'Red', 'O', 'Error no solucionado', 0, '2013-10-29 21:02:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidencias`
--

CREATE TABLE IF NOT EXISTS `incidencias` (
  `Id` int(5) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `Telefono` int(10) NOT NULL,
  `Domicilio` varchar(50) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Incidencia` varchar(50) NOT NULL,
  `Fecha` datetime NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Volcar la base de datos para la tabla `incidencias`
--

INSERT INTO `incidencias` (`Id`, `Nombre`, `Telefono`, `Domicilio`, `Correo`, `Incidencia`, `Fecha`) VALUES
(3, 'O', 3, 'f', 'f', 'Red', '2013-10-29 20:12:19'),
(2, 'Yo', 33321233, 'Loma Sur', 'yo@prueba.com', 'Sesion', '2013-10-29 19:34:13'),
(4, 'O', 3, 'f', 'f', 'Red', '2013-10-29 20:22:16'),
(5, '0', 3, 'f', 'f', 'Red', '2013-10-29 20:26:12'),
(6, '0', 3, 'f', 'f', 'Red', '2013-10-29 20:26:54'),
(7, '0', 3, 'f', 'f', 'Red', '2013-10-29 20:27:05'),
(8, '0', 3, 'f', 'f', 'Red', '2013-10-29 20:31:30'),
(9, 'O', 3, 'f', 'f', 'Red', '2013-10-29 20:33:14'),
(10, 'O', 3, 'f', 'f', 'Red', '2013-10-29 20:33:27'),
(11, 'O', 3, 'f', 'f', 'Red', '2013-10-29 20:33:50'),
(12, '0', 3, 'f', 'f', 'Red', '2013-10-29 20:37:34'),
(13, '0', 3, 'f', 'f', 'Red', '2013-10-29 20:38:38'),
(14, '0', 3, 'f', 'f', 'Red', '2013-10-29 20:39:03'),
(15, '0', 3, 'f', 'f', 'Red', '2013-10-29 20:39:15'),
(16, '0', 3, 'f', 'f', 'Red', '2013-10-29 20:39:26'),
(17, '0', 3, 'f', 'f', 'Red', '2013-10-29 20:44:16'),
(18, '0', 3, 'f', 'f', 'Red', '2013-10-29 20:46:36'),
(19, '0', 3, 'f', 'f', 'Red', '2013-10-29 20:46:48'),
(20, '0', 3, 'f', 'f', 'Red', '2013-10-29 20:48:40'),
(21, '0', 3, 'f', 'f', 'Red', '2013-10-29 20:49:22'),
(22, 'a', 1, 'a', 'a', 'a', '2013-10-29 20:57:56');
