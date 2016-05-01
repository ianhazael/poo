-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-05-2016 a las 04:24:16
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agenda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cajeros`
--

CREATE TABLE `cajeros` (
  `id` int(11) UNSIGNED NOT NULL,
  `nombre` tinytext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `apellido` tinytext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `telefono` tinyint(4) NOT NULL,
  `direccion` tinytext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `correo` tinytext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `fecha_ingreso` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ciudad` varchar(35) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `pais` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cajeros`
--

INSERT INTO `cajeros` (`id`, `nombre`, `apellido`, `telefono`, `direccion`, `correo`, `fecha_nacimiento`, `fecha_ingreso`, `ciudad`, `estado`, `pais`) VALUES
(1, 'Hazael', 'Gomez', 127, 'Desc', 'elda@hotmail.com', '1989-01-01', '2016-02-28 08:59:31', 'Hermosillo', 'Sonora', 'Mexico'),
(2, 'Hazael', 'Gomez', 127, 'Lever S/N', 'haza_gomez@yahoo.com', '2021-01-19', '2016-02-28 08:58:50', 'Hermosillo', 'Sonora', ''),
(3, 'Sara', 'Gomez', 127, 'Desconocida', 'sara@hotmail.com', '2015-02-17', '2016-02-28 08:58:37', 'Hermosillo', 'Sonora', 'Mexico'),
(4, 'otro nombre', 'otro apellido', 127, 'otra direccion', 'otro@correo.com', '1978-01-01', '2016-01-01 07:00:00', 'Nogales', 'Sonora', 'Mexico'),
(5, 'otro nombre2', 'otro apellido2', 127, 'otra direccion2', 'otro2@correo.com', '1978-01-01', '2016-01-01 07:00:00', 'Nogales2', 'Sonora', 'Mexico'),
(6, 'otro nombre2', 'otro apellido2', 127, 'otra direccion2', 'otro2@correo.com', '1978-01-01', '2016-01-01 07:00:00', 'Nogales2', 'Sonora', 'Mexico'),
(7, 'otro nombre2', 'otro apellido2', 127, 'otra direccion2', 'otro2@correo.com', '1978-01-01', '2016-01-01 07:00:00', 'Nogales2', 'Sonora', 'Mexico'),
(8, 'otro nombre2', 'otro apellido2', 127, 'otra direccion2', 'otro2@correo.com', '1978-01-01', '2016-01-01 07:00:00', 'Nogales2', 'Sonora', 'Mexico'),
(9, 'otro nombre2', 'otro apellido2', 127, 'otra direccion2', 'otro2@correo.com', '1978-01-01', '2016-01-01 07:00:00', 'Nogales2', 'Sonora', 'Mexico'),
(10, 'otro nombre2', 'otro apellido2', 127, 'otra direccion2', 'otro2@correo.com', '1978-01-01', '2016-01-01 07:00:00', 'Nogales2', 'Sonora', 'Mexico'),
(11, 'otro nombre2', 'otro apellido2', 127, 'otra direccion2', 'otro2@correo.com', '1978-01-01', '2016-01-01 07:00:00', 'Nogales2', 'Sonora', 'Mexico'),
(12, 'otro nombre2', 'otro apellido2', 127, 'otra direccion2', 'otro2@correo.com', '1978-01-01', '2016-01-01 07:00:00', 'Nogales2', 'Sonora', 'Mexico'),
(13, 'Juan Pablo', 'Bustillo', 126, 'Av Tecnologico SN', 'bustillo@ith.mx', '1996-01-01', '2016-04-21 15:41:22', 'Hermosillo', 'Sonora', 'Mexico'),
(14, 'Juan Pablo', 'Bustillo', 126, 'Av Tecnologico SN', 'bustillo@ith.mx', '1996-01-01', '2016-04-21 15:45:35', 'Hermosillo', 'Sonora', 'Mexico'),
(15, 'Juan Pablo', 'Bustillo', 126, 'Av Tecnologico SN', 'bustillo@ith.mx', '1996-01-01', '2016-04-21 15:45:55', 'Hermosillo', 'Sonora', 'Mexico'),
(16, '', 'Bustillo', 126, 'Av Tecnologico SN', 'bustillo@ith.mx', '1996-01-01', '2016-04-26 15:46:50', 'Hermosillo', 'Sonora', 'Mexico'),
(17, 'Daniel', 'Bustillo', 126, 'Av Tecnologico SN', 'bustillo@ith.mx', '1996-01-01', '2016-04-26 15:48:13', 'Hermosillo', 'Sonora', 'Mexico'),
(18, 'Julio Cesar', 'Fuentes', 120, 'Av Tecnologico SN', 'fuentes@ith.mx', '0000-00-00', '2016-04-27 15:44:23', 'Hermosillo', 'Sonora', 'Mexico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` tinytext NOT NULL,
  `apellidos` tinytext NOT NULL,
  `fecha_creacion` date NOT NULL,
  `RFC` varchar(15) NOT NULL,
  `direccion` tinytext NOT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `ciudad` varchar(45) DEFAULT NULL,
  `estado` varchar(30) DEFAULT NULL,
  `pais` varchar(45) DEFAULT 'Mexico'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `apellidos`, `fecha_creacion`, `RFC`, `direccion`, `telefono`, `correo`, `ciudad`, `estado`, `pais`) VALUES
(1, 'Hazael5', 'gOMEZ', '2016-02-29', 'twetewtewt', 'alguna direccion', '234234324', 'correo@correo.com', 'Hermosillo', 'Sonora', 'Mexico'),
(2, 'nuevoNombre', 'nuevoApellido', '2016-03-07', 'nuevoRFC', 'nuevaDdireccion', 'nuevoTel', 'nuevo@correo.com', 'nuevoHermosillo', 'nuevoSonora', 'nuevoMexico'),
(3, 'Ramses3', 'Urquijo', '2016-03-11', 'RAE234233', 'Av Tecnologico SN', '', 'ramses@ramses.com', 'Hermosillo', 'Sonora', 'Mexico'),
(4, 'Ramses4', 'Urquijo', '2016-03-11', 'RAE234233', 'Av Tecnologico SN', '33333333333', 'ramses@ramses.com', 'Hermosillo', 'Sonora', 'Mexico'),
(5, 'Ramses5', 'Urquijo', '2016-03-11', 'RAE234233', 'Av Tecnologico SN', 'pop', 'ramses@ramses.com', 'Hermosillo', 'Sonora', 'Mexico'),
(6, 'iiiiiii', 'iiiiiiiii', '2016-03-14', 'iiiiiiii', 'iiiiiiiii', 'iiiiiiii', 'iiiiiiiiii', 'iiiiiiii', 'iiiiiiiiii', 'iiiiiiiii'),
(7, 'jjjjjjjjjjj', 'jjjjjjjjjjjj', '2016-03-14', 'yyyyyyyyyyyy', 'ip', 'pop', 'iiiiiiiiiiiii', 'p', 'po', 'op'),
(8, 'Juan', 'Escutia', '2016-03-15', 'JEES9823133', 'alguna direccion', '6621010101', 'juan@mail.com', 'Hermosillo', 'Sonora', 'Mexico'),
(9, 'dare', 'devil', '2016-03-15', 'dade92433423', 'dsfsdfsdfds', 'sdfsdfsdf', 'esfsdf@erwqr.com', 'dsfsdfsdf', 'sdfsdfsdf', 'sdfsdfsdf'),
(10, 'Blanca Geraldine', 'Ruiz', '2016-03-15', 'GER23432', 'Desconocida', '', 'geraldine@ruiz.com', 'Hermosillo', 'Sonora', 'Mexico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_venta`
--

CREATE TABLE `detalle_venta` (
  `id_detalles` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` smallint(6) NOT NULL,
  `fecha` int(11) NOT NULL,
  `precio` mediumint(9) NOT NULL,
  `impuesto_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_productos` int(11) NOT NULL,
  `nombre` tinytext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `codigo` tinyint(4) NOT NULL,
  `precio` mediumint(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_productos`, `nombre`, `codigo`, `precio`) VALUES
(1, 'Paleta payaso', 23, 234),
(2, 'Jugo jumex', 32, 345);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_ventas` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_clientes` int(11) NOT NULL,
  `id_cajero` int(11) NOT NULL,
  `total` mediumint(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cajeros`
--
ALTER TABLE `cajeros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD PRIMARY KEY (`id_detalles`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_productos`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_ventas`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cajeros`
--
ALTER TABLE `cajeros`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  MODIFY `id_detalles` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_productos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_ventas` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
