-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 15-08-2018 a las 00:50:07
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ascender_iglesia`
--
CREATE DATABASE IF NOT EXISTS `ascender_iglesia` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `ascender_iglesia`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_asignar_eventoi`
--

DROP TABLE IF EXISTS `tb_asignar_eventoi`;
CREATE TABLE IF NOT EXISTS `tb_asignar_eventoi` (
  `id_aeI` int(11) NOT NULL AUTO_INCREMENT,
  `id_invitado` int(11) DEFAULT NULL,
  `id_evento` int(11) DEFAULT NULL,
  `ninos` text,
  `observaciones` text,
  PRIMARY KEY (`id_aeI`),
  KEY `id_invitado` (`id_invitado`),
  KEY `id_evento` (`id_evento`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Truncar tablas antes de insertar `tb_asignar_eventoi`
--

TRUNCATE TABLE `tb_asignar_eventoi`;
--
-- Volcado de datos para la tabla `tb_asignar_eventoi`
--

INSERT INTO `tb_asignar_eventoi` (`id_aeI`, `id_invitado`, `id_evento`, `ninos`, `observaciones`) VALUES
(1, 2, 9, 'Ninguno', 'LLEVARAN PIZZA'),
(2, 3, 9, 'Ninguno', 'LLEVARAN PIZZA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_asignar_eventom`
--

DROP TABLE IF EXISTS `tb_asignar_eventom`;
CREATE TABLE IF NOT EXISTS `tb_asignar_eventom` (
  `id_aeM` int(11) NOT NULL AUTO_INCREMENT,
  `id_miembro` int(11) DEFAULT NULL,
  `id_evento` int(11) DEFAULT NULL,
  `ninos` text,
  `observaciones` text,
  PRIMARY KEY (`id_aeM`),
  KEY `id_miembro` (`id_miembro`),
  KEY `id_evento` (`id_evento`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Truncar tablas antes de insertar `tb_asignar_eventom`
--

TRUNCATE TABLE `tb_asignar_eventom`;
--
-- Volcado de datos para la tabla `tb_asignar_eventom`
--

INSERT INTO `tb_asignar_eventom` (`id_aeM`, `id_miembro`, `id_evento`, `ninos`, `observaciones`) VALUES
(6, 7, 9, '0', 'hola'),
(7, 13, 9, 'NINGUNO', 'LLEVARAN PONCHE'),
(8, 9, 9, 'NINGUNO', 'LLEVARAN PONCHE'),
(9, 15, 9, 'NINGUNO', 'LLEVARAN PONCHE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_asignar_ministerio`
--

DROP TABLE IF EXISTS `tb_asignar_ministerio`;
CREATE TABLE IF NOT EXISTS `tb_asignar_ministerio` (
  `id_amm` int(11) NOT NULL AUTO_INCREMENT,
  `id_miembro` int(11) DEFAULT NULL,
  `id_ministerio` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_amm`),
  KEY `id_miembro` (`id_miembro`),
  KEY `id_ministerio` (`id_ministerio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Truncar tablas antes de insertar `tb_asignar_ministerio`
--

TRUNCATE TABLE `tb_asignar_ministerio`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_asigna_fam`
--

DROP TABLE IF EXISTS `tb_asigna_fam`;
CREATE TABLE IF NOT EXISTS `tb_asigna_fam` (
  `idaFam` int(11) NOT NULL AUTO_INCREMENT,
  `id_fam` int(11) DEFAULT NULL,
  `id_miembro` int(11) DEFAULT NULL,
  `tipo` text,
  PRIMARY KEY (`idaFam`),
  UNIQUE KEY `id_miembro_2` (`id_miembro`),
  KEY `id_fam` (`id_fam`),
  KEY `id_miembro` (`id_miembro`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Truncar tablas antes de insertar `tb_asigna_fam`
--

TRUNCATE TABLE `tb_asigna_fam`;
--
-- Volcado de datos para la tabla `tb_asigna_fam`
--

INSERT INTO `tb_asigna_fam` (`idaFam`, `id_fam`, `id_miembro`, `tipo`) VALUES
(54, 4, 40, 'indefinido'),
(55, 7, 9, 'indefinido'),
(56, 7, 10, 'indefinido'),
(57, 5, 42, 'indefinido'),
(58, 5, 41, 'indefinido'),
(59, 6, 11, 'indefinido'),
(60, 6, 35, 'indefinido');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_eventos`
--

DROP TABLE IF EXISTS `tb_eventos`;
CREATE TABLE IF NOT EXISTS `tb_eventos` (
  `id_evento` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_evento` text NOT NULL,
  `nom_evento` text,
  `fecha_evento` date DEFAULT NULL,
  `Lugar` text,
  `horario` time DEFAULT NULL,
  `cupo` int(11) DEFAULT NULL,
  `observaciones` text,
  `imagen_evento` text NOT NULL,
  PRIMARY KEY (`id_evento`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Truncar tablas antes de insertar `tb_eventos`
--

TRUNCATE TABLE `tb_eventos`;
--
-- Volcado de datos para la tabla `tb_eventos`
--

INSERT INTO `tb_eventos` (`id_evento`, `codigo_evento`, `nom_evento`, `fecha_evento`, `Lugar`, `horario`, `cupo`, `observaciones`, `imagen_evento`) VALUES
(9, 'TLL', 'Taller Teología Sistemática Sesión 1', '2018-03-04', 'Centro de reunión Ascender ', '10:00:00', 50, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit, nisi vitae congue ullamcorper, est metus convallis odio, eget congue tellus ipsum et ligula. Fusce tellus tellus, facilisis eget scelerisque nec, pellentesque in lacus. Maecenas aliquet porta quam, vel dapibus elit posuere non. Cras vel dolor sem. Nulla dignissim sapien tellus, vel vulputate nisi luctus a. Nulla scelerisque leo eget nisi tristique, eget scelerisque arcu commodo. Nunc gravida tellus ac ornare auctor. Nullam ut fringilla orci, sed rutrum nisi. Aenean ac pellentesque sem.', 'Teologia.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_familia`
--

DROP TABLE IF EXISTS `tb_familia`;
CREATE TABLE IF NOT EXISTS `tb_familia` (
  `id_fam` int(11) NOT NULL AUTO_INCREMENT,
  `Apellidos` text NOT NULL,
  `desc_fam` text,
  PRIMARY KEY (`id_fam`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Truncar tablas antes de insertar `tb_familia`
--

TRUNCATE TABLE `tb_familia`;
--
-- Volcado de datos para la tabla `tb_familia`
--

INSERT INTO `tb_familia` (`id_fam`, `Apellidos`, `desc_fam`) VALUES
(3, 'MARMOLEJO SALAS', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'),
(4, 'TEPACH REYES', 'FAMILIA 001'),
(5, 'FAMILIA PRUEBA', 'PRUEBA'),
(6, 'SDNJVN', 'CNVJNDS'),
(7, 'REYES CASTILLO', 'REYES CASTILLO REYES CASTILLO REYES CASTILLO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_inivitado`
--

DROP TABLE IF EXISTS `tb_inivitado`;
CREATE TABLE IF NOT EXISTS `tb_inivitado` (
  `id_invitado` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_invitado` text NOT NULL,
  `nom_invitado` text,
  `apat_inivtado` text,
  `amat_invitado` text,
  `fnaci_invitado` text,
  `edad_invitado` int(4) DEFAULT NULL,
  `sexo_invitado` enum('Hombre','Mujer') DEFAULT NULL,
  `estado_civil_i` text,
  `Estado_inivitado` text,
  `Lada_inivitado` int(4) DEFAULT NULL,
  `telefono_inivtado` varchar(10) DEFAULT NULL,
  `movil_invitado` varchar(10) DEFAULT NULL,
  `email_invitado` text,
  `domicilio_invitado` text,
  `num_invitado` text,
  `ciudad_invitado` text,
  `pais_invitado` text,
  `iglesia` text,
  `fecha_ingreso_mimebro` date DEFAULT NULL,
  `hospedaje` text,
  `nom_imagen` text,
  PRIMARY KEY (`id_invitado`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Truncar tablas antes de insertar `tb_inivitado`
--

TRUNCATE TABLE `tb_inivitado`;
--
-- Volcado de datos para la tabla `tb_inivitado`
--

INSERT INTO `tb_inivitado` (`id_invitado`, `codigo_invitado`, `nom_invitado`, `apat_inivtado`, `amat_invitado`, `fnaci_invitado`, `edad_invitado`, `sexo_invitado`, `estado_civil_i`, `Estado_inivitado`, `Lada_inivitado`, `telefono_inivtado`, `movil_invitado`, `email_invitado`, `domicilio_invitado`, `num_invitado`, `ciudad_invitado`, `pais_invitado`, `iglesia`, `fecha_ingreso_mimebro`, `hospedaje`, `nom_imagen`) VALUES
(2, 'A-001', 'Mariana Karina', 'Vazquez', 'Garcia', '1994-08-28', 23, 'Mujer', 'Casado/a', NULL, 55, '554055433', '554055433', 'anairam15g@gmail.com', 'Cuathemoc ', '12', 'Ecatepec de Morelos', 'México', 'JW', '2018-03-05', 'No', 'giphy.gif'),
(3, 'A-002', 'Alberto', 'Tellez', 'Reyez', '2000-03-23', 18, 'Hombre', 'Soltero/a', NULL, 55, '5555555555', '555555555', '2222@gmail.com', '333', '3333', '3333', '3', '33333', '2018-03-05', '33333', 'asi.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_miembros`
--

DROP TABLE IF EXISTS `tb_miembros`;
CREATE TABLE IF NOT EXISTS `tb_miembros` (
  `id_miembro` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_miembro` text NOT NULL,
  `nom_miembro` text,
  `apat_miembro` text,
  `amat_miembro` text,
  `fnaci_miembro` text,
  `edad_miembro` int(4) DEFAULT NULL,
  `sexo_miembro` enum('Hombre','Mujer') DEFAULT NULL,
  `estado_civil_m` text,
  `Estado_miembro` text,
  `Lada_miembro` int(4) DEFAULT NULL,
  `telefono_miembro` varchar(10) DEFAULT NULL,
  `movil_miembro` varchar(10) DEFAULT NULL,
  `email_miembro` text,
  `domicilio_miembro` text,
  `num_miembro` text,
  `ciudad_miembro` text,
  `pais_miembro` text,
  `Clasificacion_miembro` text,
  `Ministerio_miembro` text CHARACTER SET utf8 COLLATE utf8_slovenian_ci,
  `fecha_ingreso_mimebro` date DEFAULT NULL,
  `nom_imagen` text,
  PRIMARY KEY (`id_miembro`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Truncar tablas antes de insertar `tb_miembros`
--

TRUNCATE TABLE `tb_miembros`;
--
-- Volcado de datos para la tabla `tb_miembros`
--

INSERT INTO `tb_miembros` (`id_miembro`, `codigo_miembro`, `nom_miembro`, `apat_miembro`, `amat_miembro`, `fnaci_miembro`, `edad_miembro`, `sexo_miembro`, `estado_civil_m`, `Estado_miembro`, `Lada_miembro`, `telefono_miembro`, `movil_miembro`, `email_miembro`, `domicilio_miembro`, `num_miembro`, `ciudad_miembro`, `pais_miembro`, `Clasificacion_miembro`, `Ministerio_miembro`, `fecha_ingreso_mimebro`, `nom_imagen`) VALUES
(7, 'AS00001', 'Marlon Roberto', 'Corona', 'Arrazattee', '1988 10 16', 29, 'Hombre', 'Soltero/a', NULL, 33, '31659307', '3315205333', 'thebrightdays@hotmail.com', 'Cerrada Insurgentes', '368', 'Zapopan', 'México', 'Hombre', 'Pastor', '2017-12-20', 'hombre.png'),
(9, 'AS0061', 'KARLA ', 'REYES', 'CASTILLO', '1979-10-14', 38, 'Hombre', 'Casado/a', NULL, 1, '3339645933', '3339645933', 'admonreal11523@hotmail.com', 'LOMA SAN MATEO', '82', 'TLAJOMULCO DE ZUÑIGA', 'MEXICO', 'ADULTO', 'SERVICIO', '2018-01-06', 'hombre.png'),
(10, 'AS0062', 'NATANAEL', 'REYES', 'CASTILLO', '1999-01-22', 18, 'Hombre', 'Soltero/a', NULL, 1, '3335974903', '3335974903', 'reyesnew@hotmail.com', 'LOMA SAN MATEO', '82', 'TLAJOMULCO DE ZUÑIGA', 'MEXICO', 'JOVEN', 'AUDIOVISUALES', '2018-01-06', 'hombre.png'),
(11, 'AS0063', 'ADRIAN ', 'RIVERA', 'BENITEZ', '1993-03-30', 24, 'Hombre', 'Soltero/a', NULL, 1, '3317246615', '3317246615', 'ing.com.riv@gmail.com', 'AV MARINA VALLARTA #545', '13', 'ZAPOPAN', 'MEXICO', 'JOVEN ', 'MULTIMEDIA', '2018-01-06', 'hombre.png'),
(12, 'AS0064', 'JOSE LUIS', 'ZEPEDA', 'LARIOS', '1987-12-29', 30, 'Hombre', 'Soltero/a', NULL, 1, '3311185920', '3311185920', 'joseluis.zepla@gmail.com', 'BLVD DEL RODEO #221', '80', 'ZAPOPAN', 'MEXICO', 'ADULTO', 'AUDIOVISUALES', '2018-01-06', 'hombre.png'),
(13, 'AS0065', 'BETTY', 'PALOMINO', 'ORTIZ', '1958-02-04', 58, 'Mujer', 'Divorciado/a', NULL, 1, '3313044016', '3313044016', 'bettypaob@gmail.com', 'MARINA VALLARTA #370', '4', 'ZAPOPAN', 'MEXICO', 'ADULTO', 'NINGUNO', '2018-01-06', 'mujer.png'),
(14, 'AS0066', 'MARIO ALFONSO', 'MARMOLEJO', 'CASTILLO', '1976-07-07', 41, 'Hombre', 'Casado/a', NULL, 1, '3310612155', '3310612155', '', 'FRACC CAMPO REAL, COTO CANARIAS', '15', 'ZAPOPAN', 'MEXICO', 'ADULTO', 'NINGUNO', '2018-01-06', 'hombre.png'),
(15, 'AS0067', 'PRISILA HORTENCIA', 'SALAS', 'ROMERO', '1978-12-11', 39, 'Mujer', 'Casado/a', NULL, 1, '3313211718', '3313211718', '', 'FRACC CAMPO REAL, COTO CANARIAS', '15', 'ZAPOPAN', 'MEXICO', 'ADULTO', 'NINGUNO', '2018-01-06', 'mujer.png'),
(16, 'AS0068', 'MARIO DANIEL', 'MARMOLEJO', 'SALAS', '2007-09-26', 30, 'Hombre', 'Soltero/a', NULL, 1, '3310612155', '3313211718', '', 'FRACC CAMPO REAL, COTO CANARIAS', '15', 'ZAPOPAN', 'MEXICO', 'NIÑO', '.', '2018-01-06', 'hombre.png'),
(17, 'AS0069', 'EVAN ALEJANDRO', 'MARMOLEJO', 'SALAS', '2010-12-14', 7, 'Hombre', 'Soltero/a', NULL, 1, '3313211718', '3313211718', '', 'FRACC CAMPO REAL, COTO CANARIAS', '15', 'ZAPOPAN', 'MEXICO', 'NIÑO', '.', '2018-01-06', 'hombre.png'),
(18, 'AS0070', 'VALERIA', 'MARMOLEJO', 'SALAS', '2012-11-12', 5, 'Mujer', 'Soltero/a', NULL, 1, '3310612155', '3310612155', '', 'FRACC CAMPO REAL, COTO CANARIAS', '15', 'ZAPOPAN', 'MEXICO', 'NIÑO', '.', '2018-01-06', 'mujer.png'),
(19, 'AS0071', 'KARINA ESTEFANIA', 'RAMIREZ', 'GUERRA', '1995-03-23', 22, 'Mujer', 'Casado/a', NULL, 1, '3311777240', '3311777240', 'estefania.rmrzguerra@gmail.com', 'VOLCAN CASIGUINA', '3912', 'GUADALAJARA', 'MEXICO', 'JOVEN', 'ALABANZA', '2018-01-06', 'mujer.png'),
(20, 'AS0072', 'FRANCISCO ISMAEL ', 'GARCIA ', 'ARANDA', '1990-12-02', 27, 'Hombre', 'Casado/a', NULL, 1, '3312977061', '3312977061', 'pako_1787798@live.com.mx', 'VOLCAN CASIGUINA', '3912', 'GUADALAJARA', 'MEXICO', 'JOVEN', 'ALABANZA', '2018-01-06', 'hombre.png'),
(21, 'AS0073', 'MELANIE DIANEY', 'RODRIGUEZ', 'PARRA', '1994-01-22', 24, 'Mujer', 'Soltero/a', NULL, 1, '24004398', '3324553710', 'melandianey.red@gmail.com', 'VALLE DE ARANDAS ', '91', 'ZAPOPAN', 'MEXICO', 'JOVEN', 'ALABANZA', '2018-01-06', 'mujer.png'),
(22, 'AS0074', 'DULCE MARIA ', 'PARRA ', 'CASTRO ', '1969-03-26', 48, 'Mujer', 'Casado/a', NULL, 1, '24004398', '24004398', 'dulce-parra@hotmail.com', 'VALLE DE ARANDAS ', '91', 'ZAPOPAN', 'MEXICO', 'ADULTO', '.', '2018-01-06', 'mujer.png'),
(23, 'AS0075', 'SILVIA ', 'LUPERCIO ', 'FERNANDEZ', '1979-10-21', 38, 'Mujer', 'Casado/a', NULL, 1, '3312102088', '3312102088', 'silviassfernandez@gmail.com', 'LOPEZ MATEOS', '61', 'ZAPOPAN', 'MEXICO', 'ADULTO', 'INTERNET', '2018-01-06', 'mujer.png'),
(24, 'AS0076', 'JOSE RICARDO ', 'ANTUNA', 'VALERIA', '1967-03-18', 50, 'Hombre', 'Casado/a', NULL, 1, '36066221', '3311780727', 'cpc_ricardoantuna@hotmail.com', 'ANTONIO GARCIA CUBAS', '3533', 'GUADALAJARA', 'MEXICO', 'ADULTO', '.', '2018-01-06', 'hombre.png'),
(25, 'AS0077', 'OSWALDO', 'DINERO', '.', '1996-12-31', 21, 'Hombre', 'Soltero/a', NULL, 1, '3310671751', '3310671751', '', 'ANAHUAC', '491', 'ZAPOPAN', 'MEXICO', 'JOVEN', '.', '2018-01-06', 'hombre.png'),
(26, 'AS0078', 'ENRIQUE', 'CASILLAS', 'GARCIA', '1955-07-26', 62, 'Hombre', 'Casado/a', NULL, 1, '3314085140', '3314085140', 'vicentorres_55@hotmail.com', 'AV LAS CAÑADAS ', '142', 'ZAPOPAN', 'MEXICO', 'ADULTO', '.', '2018-01-09', 'hombre.png'),
(27, 'AS0079', 'CARMEN ', 'ROSALES', 'RIOS', '1960-05-26', 57, 'Mujer', 'Casado/a', NULL, 1, '3310104441', '3310104441', 'carmen_rosales@hotmail.com', 'AV CAÑADAS', '143', 'ZAPOPAN', 'MEXICO', 'ADULTO', '.', '2018-01-09', 'mujer.png'),
(29, 'AS0081', 'ROMINA NICOLE ALICIA', 'WALTON', 'MARTINEZ', '1996-09-07', 21, 'Hombre', 'Soltero/a', NULL, 1, '3331683356', '3322586750', 'romawalton@gmail.com', 'VOLCAL USULUTAN', '55', 'GUADALAJARA', 'MEXICO', 'JOVEN', 'UJIER', '2018-01-09', 'mujer.png'),
(31, 'AS0083', 'MIGUEL ANGEL ', 'IÑIGUEZ', 'LOMELI', '1994-03-08', 23, 'Hombre', 'Soltero/a', NULL, 33, '3319781532', '3319781532', 'miguel_123_78@hotmail.com', 'VALLE DE LA GOLONDRINAS', '2662', 'ZAPOPAN', 'MEXICO', 'JOVEN', 'ALABANZA', '2018-01-20', 'hombre.png'),
(32, 'AS0085', 'MARIA CARMEN', 'FRANCO', '.', '1967-10-25', 50, 'Mujer', 'Soltero/a', NULL, 33, '3314662680', '3314662680', 'matrayda@gmail.com', 'AV. BEETHOVEN 5216-2', '', 'ZAPOPAN', 'MEXICO', 'ADULTO', '.', '2018-01-21', 'mujer.png'),
(35, 'AS0005', 'Roberto', 'Corona', 'Pío ', '1961-05-07', 57, 'Hombre', 'Casado/a', NULL, 33, '31659307', '3313117640', 'pio_agua@yahoo.com.mx', 'Cerrada Insurgentes', '368', 'Zapopan', 'México', 'Hombre', 'Alabanza', '2018-03-01', 'hombre.png'),
(40, 'A1', 'Bryan Anthony ', 'Tepach', 'Reyes', '1996-08-31', 22, 'Hombre', 'Soltero/a', NULL, 1, '5540665456', '5540665456', 'anthony.tepach@gmail.com', 'Firmamento', '777', 'Jardines del Bosque, Guadalajara, Jal.', 'México', 'njencj', 'Música', '2018-03-02', 'rott.jpg'),
(41, 'njn', 'j', 'nj', 'njnj', '2018-03-22', 76, 'Hombre', 'Soltero/a', NULL, 777, '777777', '7777777', 'anairam15g@gmail.com', 'jnjn', '767777', 'jiuh', 'huh', 'uh', 'uh', '2018-03-06', 'hombre.png'),
(42, 'a1', 'Hola', 'Soy una', 'Prueba', '2018-03-22', 0, 'Hombre', 'Soltero/a', NULL, 0, 'j', 'jnj', 'n@c.com', 'jn', 'jnjn', 'j', 'nj', 'njnj', 'n', '2018-03-06', 'hombre.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_ministerios`
--

DROP TABLE IF EXISTS `tb_ministerios`;
CREATE TABLE IF NOT EXISTS `tb_ministerios` (
  `id_ministerio` int(11) NOT NULL AUTO_INCREMENT,
  `nom_minsterio` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `encargado_min` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `des_ministerio` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `img_ministerio` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_ministerio`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Truncar tablas antes de insertar `tb_ministerios`
--

TRUNCATE TABLE `tb_ministerios`;
--
-- Volcado de datos para la tabla `tb_ministerios`
--

INSERT INTO `tb_ministerios` (`id_ministerio`, `nom_minsterio`, `encargado_min`, `des_ministerio`, `img_ministerio`) VALUES
(1, 'Desarrollo de APPs', 'Anthony Tepach', 'Encargado del desarrollo de aplicaciones para la Iglesia', 'desarrollo_apps.jpg'),
(2, 'Música', 'Marlon', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuario`
--

DROP TABLE IF EXISTS `tb_usuario`;
CREATE TABLE IF NOT EXISTS `tb_usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nom_usuario` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `pass_usuario` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Truncar tablas antes de insertar `tb_usuario`
--

TRUNCATE TABLE `tb_usuario`;
--
-- Volcado de datos para la tabla `tb_usuario`
--

INSERT INTO `tb_usuario` (`id_usuario`, `nom_usuario`, `pass_usuario`) VALUES
(1, 'admin', 'pass'),
(2, 'Anthony Tepach', 'tepach'),
(3, 'Mariana Vazquez', 'vazquez');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tb_asignar_eventoi`
--
ALTER TABLE `tb_asignar_eventoi`
  ADD CONSTRAINT `tb_asignar_eventoi_ibfk_1` FOREIGN KEY (`id_invitado`) REFERENCES `tb_inivitado` (`id_invitado`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_asignar_eventoi_ibfk_2` FOREIGN KEY (`id_evento`) REFERENCES `tb_eventos` (`id_evento`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tb_asignar_eventom`
--
ALTER TABLE `tb_asignar_eventom`
  ADD CONSTRAINT `tb_asignar_eventom_ibfk_1` FOREIGN KEY (`id_miembro`) REFERENCES `tb_miembros` (`id_miembro`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_asignar_eventom_ibfk_2` FOREIGN KEY (`id_evento`) REFERENCES `tb_eventos` (`id_evento`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tb_asignar_ministerio`
--
ALTER TABLE `tb_asignar_ministerio`
  ADD CONSTRAINT `tb_asignar_ministerio_ibfk_1` FOREIGN KEY (`id_miembro`) REFERENCES `tb_miembros` (`id_miembro`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_asignar_ministerio_ibfk_2` FOREIGN KEY (`id_ministerio`) REFERENCES `tb_ministerios` (`id_ministerio`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tb_asigna_fam`
--
ALTER TABLE `tb_asigna_fam`
  ADD CONSTRAINT `tb_asigna_fam_ibfk_1` FOREIGN KEY (`id_fam`) REFERENCES `tb_familia` (`id_fam`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_asigna_fam_ibfk_2` FOREIGN KEY (`id_miembro`) REFERENCES `tb_miembros` (`id_miembro`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
