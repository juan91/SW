-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 24-06-2014 a las 16:22:15
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `egogym`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `persona_id` int(11) NOT NULL,
  `entities_id` int(11) NOT NULL,
  `cargo` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_clientes_personas_idx` (`persona_id`),
  KEY `fk_clientes_entities1_idx` (`entities_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coaches`
--

CREATE TABLE IF NOT EXISTS `coaches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `persona_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_coaches_personas1_idx` (`persona_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entities`
--

CREATE TABLE IF NOT EXISTS `entities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8_unicode_ci,
  `fec_reg` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE IF NOT EXISTS `personas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `identificacion` bigint(20) DEFAULT NULL,
  `direccion` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefono` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `celular` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `celular2` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `genero` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fec_nac` date DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `ocupacion` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gsanguineo` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lesiones` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cuales` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id`, `nombres`, `apellidos`, `identificacion`, `direccion`, `telefono`, `celular`, `celular2`, `email`, `genero`, `fec_nac`, `created`, `ocupacion`, `gsanguineo`, `lesiones`, `cuales`) VALUES
(5, 'juan david', 'delgado jojoa', 1000, 'mocondino', '78898989', '', '', 'jua1231@hotmail.com', 'M', '1993-06-16', '2014-06-16 03:32:03', 'estudiante', 'o+', 'ninguna', 'ninguna'),
(6, 'jose luis', 'ceron', 89898989, 'ma234', '898989', '898989', '8998', 'pac@hotmail.com', 'm', '2012-06-16', '2014-06-16 06:13:52', 'aasdf', 'asdf', 'no', 'no'),
(7, 'jefer', 'arcos', 9089090, 'asdf234', '234234234', '234234', '23423432', 'jua1231@hotmail.com', 'm', '1955-06-16', '2014-06-16 06:14:25', 'ning', 'ning', 'ning', 'ning'),
(8, 'pacho', 'jojoa', 8989890, 'mnfg54', '234234', '234234', '', 'pac@hotmail.com', 'm', '1994-06-16', '2014-06-16 06:14:55', 'ning', 'o+', 'ninguna', 'nsdf'),
(9, 'jessika', 'ceron', 78978789, 'mklÃ±j', '898989', '89898998', 'i', 'jer@hotmail.com', 'F', '2012-06-16', '2014-06-16 07:08:52', 'as', 'asdf', 'asdfas', 'fasdfasf'),
(10, 'delia ', 'jojoa', 108202, 'vl345', '73256565', '', '', '', 'F', '1954-06-24', '2014-06-24 02:52:21', 'trabaja', '0', 'ninguna', ''),
(11, 'angie', 'jossa', 23423, 'mz csl 8923', '3012443452', '', '', 'jua1231@hotmail.com', 'F', '2012-06-24', '2014-06-24 02:57:32', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas_servicios`
--

CREATE TABLE IF NOT EXISTS `personas_servicios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fec_ini` datetime DEFAULT NULL,
  `fec_fin` datetime DEFAULT NULL,
  `sesiones` int(11) DEFAULT NULL,
  `valor` float NOT NULL,
  `observaciones` text COLLATE utf8_unicode_ci,
  `activo` tinyint(1) DEFAULT NULL,
  `persona_id` int(11) NOT NULL,
  `servicio_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_servicios_personas_personas1_idx` (`persona_id`),
  KEY `fk_servicios_personas_servicios1_idx` (`servicio_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=24 ;

--
-- Volcado de datos para la tabla `personas_servicios`
--

INSERT INTO `personas_servicios` (`id`, `fec_ini`, `fec_fin`, `sesiones`, `valor`, `observaciones`, `activo`, `persona_id`, `servicio_id`) VALUES
(22, '2014-06-20 22:29:00', '2014-07-20 22:29:00', 30, 35000, 'ninguna', 1, 5, 4),
(23, '2014-06-20 22:31:00', '2014-06-20 22:31:00', 30, 28000, '', 1, 9, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE IF NOT EXISTS `servicios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8_unicode_ci,
  `valor` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `nombre`, `descripcion`, `valor`) VALUES
(4, 'Mensualidad', '30 dias', 35000),
(5, 'Tiquetera', '40 dias', 42000),
(6, 'session', '1 dia', 4000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `persona_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_users_personas1_idx` (`persona_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `fk_clientes_entities1` FOREIGN KEY (`entities_id`) REFERENCES `entities` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_clientes_personas` FOREIGN KEY (`persona_id`) REFERENCES `personas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `coaches`
--
ALTER TABLE `coaches`
  ADD CONSTRAINT `fk_coaches_personas1` FOREIGN KEY (`persona_id`) REFERENCES `personas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `personas_servicios`
--
ALTER TABLE `personas_servicios`
  ADD CONSTRAINT `fk_servicios_personas_personas1` FOREIGN KEY (`persona_id`) REFERENCES `personas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_servicios_personas_servicios1` FOREIGN KEY (`servicio_id`) REFERENCES `servicios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_personas1` FOREIGN KEY (`persona_id`) REFERENCES `personas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
