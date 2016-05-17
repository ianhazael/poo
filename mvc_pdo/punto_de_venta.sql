-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-05-2016 a las 20:34:55
-- Versión del servidor: 5.7.9
-- Versión de PHP: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `punto_de_venta`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cajeros`
--

DROP TABLE IF EXISTS `cajeros`;
CREATE TABLE IF NOT EXISTS `cajeros` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Nombres` tinytext COLLATE utf8_spanish_ci NOT NULL,
  `Apellidos` tinytext COLLATE utf8_spanish_ci NOT NULL,
  `Fecha_Nacimiento` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Correo` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `Telefono` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `Puesto` tinytext COLLATE utf8_spanish_ci NOT NULL,
  `Fecha_Ingreso` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cajeros`
--

INSERT INTO `cajeros` (`Id`, `Nombres`, `Apellidos`, `Fecha_Nacimiento`, `Correo`, `Telefono`, `Puesto`, `Fecha_Ingreso`) VALUES
(29, 'Julio', 'Fuentes', '2015-11-30', 'julio_fuentes@hotmail.com', '2-12-43-18', 'Estudiante', '2016-05-05 20:25:36'),
(28, 'Geraldine', 'Ruiz', '2015-12-31', 'ieral.ruiz@hotmail.com', '2-12-43-18', 'E', '2016-05-05 20:15:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Fecha_Creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `RFC` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Nombres` tinytext COLLATE utf8_spanish_ci NOT NULL,
  `Apellidos` tinytext COLLATE utf8_spanish_ci NOT NULL,
  `Direccion` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `Correo` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `Ciudad` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Estado` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Pais` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`Id`, `Fecha_Creacion`, `RFC`, `Nombres`, `Apellidos`, `Direccion`, `Correo`, `Ciudad`, `Estado`, `Pais`) VALUES
(44, '2016-05-05 20:16:15', 'RURB970828', 'Geraldine', 'Ruiz', 'Salustiana', 'ieral.ruiz@hotmail.com', 'Hermosillo', 'Sonora', 'Mexico'),
(45, '2016-05-05 20:26:39', '34567009', 'Elisa', 'Robles', 'Salustiana', 'elisa@hotmail.com', 'Hermosillo', 'Sonora', 'Mexico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleventas`
--

DROP TABLE IF EXISTS `detalleventas`;
CREATE TABLE IF NOT EXISTS `detalleventas` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Cantidad` int(10) NOT NULL,
  `Sub_Total` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `IVA` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Total` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `detalleventas`
--

INSERT INTO `detalleventas` (`Id`, `Fecha`, `Cantidad`, `Sub_Total`, `IVA`, `Total`) VALUES
(12, '2016-05-05 20:27:09', 4, '$230', '$890', '$985'),
(11, '2016-05-04 02:09:51', 2, '$12.00', '$890', '$14.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Nombre` tinytext COLLATE utf8_spanish_ci NOT NULL,
  `Codigo` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Precio` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`Id`, `Nombre`, `Codigo`, `Precio`) VALUES
(8, 'Laptop', '1233', '$4500'),
(9, 'Computadora', 'Comp3434', '$4500.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

DROP TABLE IF EXISTS `ventas`;
CREATE TABLE IF NOT EXISTS `ventas` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Precio_Unitario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Total` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`Id`, `Precio_Unitario`, `Total`) VALUES
(9, '$500', '$50000');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
