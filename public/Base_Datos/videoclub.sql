-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-07-2020 a las 02:35:23
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `videoclub`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actfav`
--

CREATE TABLE `actfav` (
  `id_actorfav` int(11) NOT NULL,
  `id_socio` int(11) DEFAULT NULL,
  `id_actor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `actfav`:
--

--
-- Volcado de datos para la tabla `actfav`
--

INSERT INTO `actfav` (`id_actorfav`, `id_socio`, `id_actor`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 2),
(4, 4, 3),
(5, 5, 4),
(6, 6, 5),
(7, 7, 6),
(8, 8, 7),
(9, 9, 8),
(10, 10, 9),
(11, 11, 10),
(12, 12, 11),
(13, 13, 12),
(14, 14, 13),
(15, 15, 14),
(16, 16, 15),
(17, 17, 16),
(18, 18, 17),
(19, 19, 18),
(20, 20, 19),
(21, 21, 21),
(22, 22, 22),
(23, 23, 23),
(24, 24, 24),
(25, 25, 25),
(26, 26, 26),
(27, 27, 27),
(28, 28, 28),
(29, 29, 29),
(30, 30, 30),
(31, 31, 5),
(32, 32, 10),
(33, 33, 15),
(34, 34, 20),
(35, 35, 25),
(36, 36, 30),
(37, 37, 2),
(38, 38, 4),
(39, 39, 6),
(40, 40, 8),
(41, 41, 10),
(42, 42, 12),
(43, 43, 14),
(44, 44, 16),
(45, 45, 18),
(46, 46, 20),
(47, 47, 22),
(48, 48, 24),
(49, 49, 26),
(50, 50, 28);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actores`
--

CREATE TABLE `actores` (
  `id_actor` int(11) NOT NULL,
  `id_persona` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `actores`:
--

--
-- Volcado de datos para la tabla `actores`
--

INSERT INTO `actores` (`id_actor`, `id_persona`) VALUES
(1, 101),
(2, 102),
(3, 103),
(4, 104),
(5, 105),
(6, 106),
(7, 107),
(8, 108),
(9, 109),
(10, 110),
(11, 111),
(12, 112),
(13, 113),
(14, 114),
(15, 115),
(16, 116),
(17, 117),
(18, 118),
(19, 119),
(20, 120),
(21, 121),
(22, 122),
(23, 123),
(24, 124),
(25, 125),
(26, 126),
(27, 127),
(28, 128),
(29, 129),
(30, 130),
(31, 131),
(32, 132),
(33, 133),
(34, 134),
(35, 135),
(36, 136),
(37, 137),
(38, 138),
(39, 139),
(40, 140),
(41, 141),
(42, 142),
(43, 143),
(44, 144),
(45, 145),
(46, 146),
(47, 147),
(48, 148),
(49, 149),
(50, 150),
(51, 151),
(52, 152),
(53, 153),
(54, 154),
(55, 155),
(56, 156),
(57, 157),
(58, 158),
(59, 159),
(60, 160),
(61, 161),
(62, 162),
(63, 163),
(64, 164),
(65, 165),
(66, 166),
(67, 167),
(68, 168),
(69, 169),
(70, 170),
(71, 171),
(72, 172),
(73, 173),
(74, 174),
(75, 175),
(76, 176),
(77, 177),
(78, 178),
(79, 179),
(80, 180),
(81, 181),
(82, 182),
(83, 183),
(84, 184),
(85, 185),
(86, 186),
(87, 187),
(88, 188),
(89, 189),
(90, 190),
(91, 191),
(92, 192),
(93, 193),
(94, 194),
(95, 195),
(96, 196),
(97, 197),
(98, 198),
(99, 199),
(100, 200);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `copias`
--

CREATE TABLE `copias` (
  `id_copia` int(11) NOT NULL,
  `id_pelicula` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=REDUNDANT;

--
-- RELACIONES PARA LA TABLA `copias`:
--

--
-- Volcado de datos para la tabla `copias`
--

INSERT INTO `copias` (`id_copia`, `id_pelicula`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15),
(16, 16),
(17, 17),
(18, 18),
(19, 19),
(20, 20),
(21, 21),
(22, 22),
(23, 23),
(24, 24),
(25, 25),
(26, 26),
(27, 27),
(28, 28),
(29, 29),
(30, 30),
(31, 31),
(32, 32),
(33, 33),
(34, 34),
(35, 35),
(36, 36),
(37, 37),
(38, 38),
(39, 39),
(40, 40),
(41, 41),
(42, 42),
(43, 43),
(44, 44),
(45, 45),
(46, 46),
(47, 47),
(48, 48),
(49, 49),
(50, 50),
(51, 51),
(52, 52),
(53, 53),
(54, 54),
(55, 55),
(56, 56),
(57, 57),
(58, 58),
(59, 59),
(60, 60),
(61, 61),
(62, 62),
(63, 63),
(64, 64),
(65, 65),
(66, 66),
(67, 67),
(68, 68),
(69, 69),
(70, 70),
(71, 71),
(72, 72),
(73, 73),
(74, 74),
(75, 75),
(76, 76),
(77, 77),
(78, 78),
(79, 79),
(80, 80),
(81, 81),
(82, 82),
(83, 83),
(84, 84),
(85, 85),
(86, 86),
(87, 87),
(88, 88),
(89, 89),
(90, 90),
(91, 91),
(92, 92),
(93, 93),
(94, 94),
(95, 95),
(96, 96),
(97, 97),
(98, 98),
(99, 99),
(100, 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `devoluciones`
--

CREATE TABLE `devoluciones` (
  `id_devolucion` int(11) NOT NULL,
  `id_prestamo` int(11) DEFAULT NULL,
  `fecha_dev` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `devoluciones`:
--

--
-- Volcado de datos para la tabla `devoluciones`
--

INSERT INTO `devoluciones` (`id_devolucion`, `id_prestamo`, `fecha_dev`) VALUES
(1, 1, '2018-11-11 15:30:04'),
(2, 2, '2019-01-13 16:32:42'),
(3, 3, '2020-03-29 17:55:03'),
(4, 4, '2019-11-03 18:44:51'),
(5, 5, '2020-04-12 19:44:02'),
(6, 6, '2018-05-21 20:23:37'),
(7, 7, '2020-12-08 21:00:01'),
(8, 8, '2018-02-12 20:23:37'),
(9, 9, '2020-06-15 19:44:02'),
(10, 10, '2019-05-19 18:44:51'),
(11, 11, '2020-08-14 17:55:03'),
(12, 12, '2018-04-08 16:32:42'),
(13, 13, '2020-04-16 15:30:04'),
(14, 14, '2018-01-18 14:23:32'),
(15, 15, '2020-06-13 13:14:05'),
(16, 16, '2018-09-10 12:15:21'),
(17, 17, '2020-08-09 11:16:06'),
(18, 18, '2018-05-28 10:17:11'),
(19, 19, '2019-12-16 09:18:07'),
(20, 20, '2018-01-02 18:19:33'),
(21, 21, '2019-02-03 17:56:08'),
(22, 22, '2020-03-04 16:45:55'),
(23, 23, '2017-04-06 15:34:09'),
(24, 24, '2018-05-07 14:23:45'),
(25, 25, '2019-06-08 13:12:10'),
(26, 26, '2020-07-12 12:48:12'),
(27, 27, '2019-08-15 11:58:11'),
(28, 28, '2018-09-20 12:48:12'),
(29, 29, '2016-12-13 13:12:10'),
(30, 30, '2020-03-18 14:23:45'),
(31, 31, '2018-06-17 15:34:09'),
(32, 32, '2015-01-16 16:45:55'),
(33, 33, '2020-12-30 17:56:08'),
(34, 34, '2016-08-26 18:19:33'),
(35, 35, '2020-09-23 09:18:07'),
(36, 36, '2015-10-27 10:17:11'),
(37, 37, '2016-09-23 11:16:06'),
(38, 38, '2012-08-25 12:15:21'),
(39, 39, '2019-12-10 13:14:05'),
(40, 40, '2016-08-13 14:23:32'),
(41, 41, '2019-11-12 15:30:04'),
(42, 42, '2020-08-13 16:32:42'),
(43, 43, '2015-09-07 17:55:03'),
(44, 44, '2016-12-29 18:44:51'),
(45, 45, '2015-03-27 19:44:02'),
(46, 46, '2020-06-15 20:23:37'),
(47, 47, '2020-06-08 21:00:01'),
(48, 48, '2017-12-24 20:23:37'),
(49, 49, '2015-08-13 19:44:02'),
(50, 50, '2014-03-21 18:44:51'),
(51, 51, '2018-11-11 17:55:03'),
(52, 52, '2012-10-09 16:32:42'),
(53, 53, '2011-07-28 15:30:04'),
(54, 54, '2018-08-29 14:23:32'),
(55, 55, '2015-01-02 13:14:05'),
(56, 56, '1987-09-28 12:15:21'),
(57, 57, '2020-02-19 11:16:06'),
(58, 58, '2020-01-06 10:17:11'),
(59, 59, '2017-06-18 09:18:07'),
(60, 60, '1967-11-29 18:19:33'),
(61, 61, '1999-10-09 17:56:08'),
(62, 62, '1976-12-24 16:45:55'),
(63, 63, '2019-08-24 15:34:09'),
(64, 64, '2013-05-29 14:23:45'),
(65, 65, '1997-09-14 13:12:10'),
(66, 66, '1965-12-24 12:48:12'),
(67, 67, '2018-11-22 11:58:11'),
(68, 68, '2011-12-29 12:48:12'),
(69, 69, '2000-12-23 13:12:10'),
(70, 70, '2012-08-12 14:23:45'),
(71, 71, '2016-04-05 15:34:09'),
(72, 72, '2019-03-25 16:45:55'),
(73, 73, '1954-09-28 17:56:08'),
(74, 74, '0000-00-00 00:00:00'),
(75, 75, '0000-00-00 00:00:00'),
(76, 76, '0000-00-00 00:00:00'),
(77, 77, '1999-07-29 11:16:06'),
(78, 78, '2011-03-28 12:15:21'),
(79, 79, '2019-12-09 13:14:05'),
(80, 80, '2016-03-27 14:23:32'),
(81, 81, '2018-11-05 15:30:04'),
(82, 82, '2010-12-12 16:32:42'),
(83, 83, '2000-09-16 17:55:03'),
(84, 84, '1999-12-23 18:44:51'),
(85, 85, '1789-04-29 19:44:02'),
(86, 86, '1912-12-28 20:23:37'),
(87, 87, '1945-08-09 21:00:01'),
(88, 88, '1996-06-26 20:23:37'),
(89, 89, '1799-12-29 19:44:02'),
(90, 90, '2013-07-03 18:44:51'),
(91, 91, '2019-12-28 17:55:03'),
(92, 92, '1987-11-20 16:32:42'),
(93, 93, '2000-12-20 15:30:04'),
(94, 94, '2011-11-09 14:23:32'),
(95, 95, '1900-04-20 13:14:05'),
(96, 96, '2015-07-30 12:15:21'),
(97, 97, '2019-10-19 11:16:06'),
(98, 98, '2003-08-09 10:17:11'),
(99, 99, '2020-12-19 09:18:07'),
(100, 100, '2019-09-28 18:19:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `directores`
--

CREATE TABLE `directores` (
  `id_director` int(11) NOT NULL,
  `id_persona` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `directores`:
--

--
-- Volcado de datos para la tabla `directores`
--

INSERT INTO `directores` (`id_director`, `id_persona`) VALUES
(1, 201),
(2, 202),
(3, 203),
(4, 204),
(5, 205),
(6, 206),
(7, 207),
(8, 208),
(9, 209),
(10, 210),
(11, 211),
(12, 212),
(13, 213),
(14, 214),
(15, 215),
(16, 216),
(17, 217),
(18, 218),
(19, 219),
(20, 220),
(21, 221),
(22, 222),
(23, 223),
(24, 224),
(25, 225),
(26, 226),
(27, 227),
(28, 228),
(29, 229),
(30, 230),
(31, 231),
(32, 232),
(33, 233),
(34, 234),
(35, 235),
(36, 236),
(37, 237),
(38, 238),
(39, 239),
(40, 240),
(41, 241),
(42, 242),
(43, 243),
(44, 243),
(45, 245),
(46, 246),
(47, 247),
(48, 248),
(49, 249),
(50, 250),
(51, 251),
(52, 252),
(53, 253),
(54, 254),
(55, 255),
(56, 256),
(57, 257),
(58, 258),
(59, 259),
(60, 260),
(61, 261),
(62, 262),
(63, 263),
(64, 264),
(65, 265),
(66, 266),
(67, 267),
(68, 268),
(69, 269),
(70, 270),
(71, 271),
(72, 272),
(73, 273),
(74, 274),
(75, 275),
(76, 276),
(77, 277),
(78, 278),
(79, 279),
(80, 280),
(81, 281),
(82, 282),
(83, 283),
(84, 284),
(85, 285),
(86, 286),
(87, 287),
(88, 288),
(89, 289),
(90, 290),
(91, 291),
(92, 292),
(93, 293),
(94, 294),
(95, 295),
(96, 296),
(97, 297),
(98, 298),
(99, 299),
(100, 300);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dirfav`
--

CREATE TABLE `dirfav` (
  `id_dirfav` int(11) NOT NULL,
  `id_socio` int(11) DEFAULT NULL,
  `id_director` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `dirfav`:
--

--
-- Volcado de datos para la tabla `dirfav`
--

INSERT INTO `dirfav` (`id_dirfav`, `id_socio`, `id_director`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5),
(6, 6, 6),
(7, 7, 7),
(8, 8, 8),
(9, 9, 9),
(10, 10, 10),
(11, 11, 11),
(13, 13, 13),
(14, 14, 14),
(15, 15, 15),
(16, 16, 16),
(17, 17, 17),
(18, 18, 18),
(19, 19, 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

CREATE TABLE `generos` (
  `id_genero` int(11) NOT NULL,
  `des_gen` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `generos`:
--

--
-- Volcado de datos para la tabla `generos`
--

INSERT INTO `generos` (`id_genero`, `des_gen`) VALUES
(5, 'Acción'),
(6, 'Aventura'),
(4, 'Ciencia Ficción'),
(3, 'Comedia'),
(1, 'Drama'),
(8, 'Fántastico'),
(9, 'Infantil'),
(7, 'Suspenso'),
(2, 'Terror');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genfav`
--

CREATE TABLE `genfav` (
  `id_generofav` int(11) NOT NULL,
  `id_genero` int(11) DEFAULT NULL,
  `id_socio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `genfav`:
--

--
-- Volcado de datos para la tabla `genfav`
--

INSERT INTO `genfav` (`id_generofav`, `id_genero`, `id_socio`) VALUES
(1, 1, 1),
(2, 2, 3),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5),
(6, 6, 7),
(7, 1, 8),
(8, 2, 7),
(9, 3, 9),
(10, 4, 10),
(11, 5, 11),
(12, 6, 12),
(13, 9, 13),
(14, 1, 14),
(15, 2, 15),
(16, 3, 16),
(17, 7, 17),
(18, 8, 18),
(19, 4, 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listaespera`
--

CREATE TABLE `listaespera` (
  `id_espera` int(11) NOT NULL,
  `fecha_registro` date DEFAULT NULL,
  `id_pelicula` int(11) DEFAULT NULL,
  `id_socio` int(11) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `listaespera`:
--

--
-- Volcado de datos para la tabla `listaespera`
--

INSERT INTO `listaespera` (`id_espera`, `fecha_registro`, `id_pelicula`, `id_socio`, `estado`) VALUES
(1, '2018-06-15', 1, 1, 'disponible'),
(2, '2019-09-25', 2, 2, 'disponible'),
(3, '2019-10-30', 3, 3, 'dispponible'),
(4, '2019-12-24', 4, 4, 'disponible'),
(5, '2020-01-15', 5, 5, 'disponible'),
(6, '2020-02-14', 6, 6, 'disponible'),
(7, '2020-03-30', 7, 7, 'disponible'),
(8, '2019-11-20', 8, 8, 'disponible'),
(9, '2019-12-12', 9, 9, 'disponible'),
(10, '2019-12-28', 10, 10, 'disponible'),
(11, '2019-11-20', 11, 11, 'disponible'),
(12, '2019-12-06', 12, 12, 'disponible'),
(13, '2019-08-04', 13, 13, 'disponible'),
(14, '2020-04-04', 14, 14, 'disponible'),
(15, '2019-09-09', 15, 15, 'disponible'),
(16, '2019-10-14', 16, 16, 'disponible'),
(17, '2019-04-05', 17, 17, 'disponible'),
(18, '2019-12-07', 18, 18, 'disponible'),
(19, '2019-02-20', 19, 19, 'disponible'),
(20, '2019-06-30', 20, 20, 'disponible'),
(21, '2019-01-06', 21, 21, 'disponible'),
(22, '2019-07-01', 22, 22, 'disponible'),
(23, '2019-10-10', 23, 23, 'disponible'),
(24, '2019-08-20', 24, 24, 'disponible'),
(25, '2020-05-05', 25, 25, 'disponible'),
(26, '2020-04-30', 26, 26, 'disponible'),
(27, '2020-03-07', 27, 27, 'disponible'),
(28, '2019-09-01', 28, 28, 'disponible'),
(29, '2019-05-07', 29, 29, 'disponible'),
(30, '2019-06-27', 30, 30, 'disponible'),
(31, '2020-04-19', 31, 31, 'disponible'),
(32, '2019-12-17', 32, 32, 'disponible'),
(33, '2019-04-24', 33, 33, 'disponible'),
(34, '2019-06-30', 34, 34, 'disponible'),
(35, '2019-08-28', 35, 35, 'disponible'),
(36, '2019-08-18', 36, 36, 'disponible'),
(37, '2020-01-19', 37, 37, 'disponible'),
(38, '2019-09-22', 38, 38, 'disponible'),
(39, '2019-01-21', 39, 39, 'disponible'),
(40, '2020-10-25', 40, 40, 'disponible'),
(41, '2019-03-22', 41, 41, 'disponible'),
(42, '2019-04-06', 42, 42, 'disponible'),
(43, '2019-12-02', 43, 43, 'disponible'),
(44, '2019-02-26', 44, 44, 'disponible'),
(45, '2019-11-06', 45, 45, 'disponible'),
(46, '2019-09-04', 46, 46, 'disponible'),
(47, '2019-11-13', 47, 47, 'disponible'),
(48, '2009-06-12', 48, 48, 'disponible'),
(49, '2019-06-17', 49, 49, 'disponible'),
(50, '2020-03-01', 50, 50, 'disponible'),
(51, '2019-02-20', 51, 50, 'no disponible'),
(52, '2019-03-29', 52, 49, 'no disponible'),
(53, '2018-06-09', 53, 48, 'no disponible'),
(54, '2018-11-12', 54, 47, 'no disponible'),
(55, '2018-02-07', 55, 46, 'no disponible'),
(56, '2019-12-17', 56, 45, 'no disponible'),
(57, '2020-01-08', 57, 44, 'no disponible'),
(58, '2019-07-08', 58, 43, 'no disponible'),
(59, '2019-12-13', 59, 42, 'no disponible'),
(60, '2018-08-19', 60, 41, 'no disponible'),
(61, '2019-08-17', 61, 40, 'no disponible'),
(62, '2020-02-06', 62, 39, 'no disponible'),
(63, '2019-12-10', 63, 38, 'no disponible'),
(64, '2019-01-01', 64, 37, 'no disponible'),
(65, '2019-03-10', 65, 36, 'no disponible'),
(66, '2019-10-13', 66, 35, 'no disponible'),
(67, '2020-03-04', 67, 34, 'no disponible'),
(68, '2019-12-08', 68, 33, 'no disponible'),
(69, '2020-11-11', 69, 32, 'no disponible'),
(70, '2020-01-09', 70, 31, 'no disponible'),
(71, '2020-01-08', 71, 30, 'no disponible'),
(72, '2019-12-14', 72, 29, 'no disponible'),
(73, '2018-10-13', 73, 28, 'no disponible'),
(74, '2018-11-06', 74, 27, 'no disponible'),
(75, '2018-06-08', 75, 26, 'no disponible'),
(76, '2018-07-09', 76, 25, 'no disponible'),
(77, '2018-01-06', 77, 24, 'no disponible'),
(78, '2018-07-06', 78, 23, 'no disponible'),
(79, '2018-07-01', 79, 22, 'no disponible'),
(80, '2018-03-28', 80, 21, 'no disponible'),
(81, '2018-06-27', 81, 20, 'no disponible'),
(82, '2018-07-05', 82, 19, 'no disponible'),
(83, '2018-08-07', 83, 18, 'no disponible'),
(84, '2018-12-09', 84, 17, 'no disponible'),
(85, '2018-04-22', 85, 16, 'no disponible'),
(86, '2017-04-24', 86, 15, 'no disponible'),
(87, '2017-04-09', 87, 14, 'no disponible'),
(88, '2017-05-07', 88, 13, 'no disponible'),
(89, '2017-12-17', 89, 12, 'no disponible'),
(90, '2017-05-05', 90, 11, 'no disponible'),
(91, '2017-08-11', 91, 10, 'no disponible'),
(92, '2017-06-15', 92, 9, 'no disponible'),
(93, '2017-06-02', 93, 8, 'no disponible'),
(94, '2018-03-04', 94, 7, 'no disponible'),
(95, '2018-06-03', 95, 6, 'no disponible'),
(96, '2018-07-04', 96, 5, 'no disponible'),
(97, '2018-06-02', 97, 4, 'no disponible'),
(98, '2018-01-19', 98, 3, 'no disponible'),
(99, '2019-10-08', 99, 2, 'no disponible'),
(100, '2019-01-30', 100, 1, 'no disponible');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `id_pelicula` int(11) NOT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `id_director` int(11) DEFAULT NULL,
  `id_genero` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `peliculas`:
--

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id_pelicula`, `titulo`, `id_director`, `id_genero`) VALUES
(1, 'EL PAYASO DEL MAL', 1, 2),
(2, 'EL JUEGO DE ENDER', 2, 4),
(3, 'CAPITAN AMERICA Y EL SOLDADO DEL INVIERNO\r\n', 3, 5),
(4, 'ANT-MAN', 4, 4),
(5, 'ESCALOFRIOS', 5, 3),
(6, 'LOS ILUSIONISTAS', 6, 7),
(7, 'EL ORIGEN DEL PLANETA DE LOS SIMIOS \r\n', 7, 4),
(8, 'EL CONJURO', 8, 2),
(9, 'DEADPOOL', 9, 5),
(10, 'ALIEN COVENANT', 10, 7),
(11, 'KRANMPUS EL TERROR DE LA NAVIDAD', 11, 2),
(12, '12 HORAS PARA SOBREVIVI: EL A?O DE LA ELECCION', 12, 7),
(13, 'ACTIVIDAD PARANORMAL LA DIMENSION FANTASMA', 13, 2),
(14, 'EL RENACIDO', 14, 5),
(15, 'SPIDERMAN HOMECOMING', 15, 5),
(16, 'LIBRANOS DEL MAL ', 16, 2),
(17, 'LA RAZON DE ESTAR CONTIGO', 17, 1),
(18, 'CHAPPIE', 18, 4),
(19, 'PUNTO DE QUIEBRE', 19, 5),
(20, 'R.I.P.D POLICIA DEL MAS ALLA', 1, 5),
(21, 'EDGE OF TOMORROW AL FILO DEL MA?ANA', 2, 5),
(22, 'PACIFIC RIM', 3, 5),
(23, 'THOR', 4, 8),
(24, 'TED', 5, 3),
(25, 'JACK EL CASAGIGANTES', 6, 6),
(26, 'GUERRA MUNDIAL Z', 7, 1),
(27, 'UNA VOZ SILENCIOSA', 8, 1),
(28, 'LOGAN', 9, 5),
(29, 'MAD MAX FURIA EN EL CAMINO', 10, 5),
(30, 'MAZE RUNNER CORRER O MORIR', 11, 6),
(31, 'HORNS', 12, 1),
(32, 'SING VEN Y CANTA', 13, 9),
(33, 'JUSTICE LEAGUE VS. TEEN TITANS', 14, 6),
(34, 'EL LIBRO DE LA VIDA ', 15, 9),
(35, 'AMOR INDIGO', 16, 1),
(36, 'MISS PEREGRINE\'S HOME FOR PECULIAR CHILDREN', 17, 4),
(37, 'TRASCENDER', 18, 4),
(38, 'CAMINO A MARTE', 19, 5),
(39, 'GHOST IN THE SHELL', 1, 6),
(40, 'PIXELS', 2, 3),
(41, 'KINGSMAN SERVIVIO SECRETO', 3, 5),
(42, 'POMPEYA', 4, 7),
(43, 'PERDIDA', 5, 7),
(44, 'NO RESPIRES', 6, 7),
(45, 'THE MARTIAN', 7, 7),
(46, 'EL SEPTIMO HIJO', 8, 8),
(47, 'BIENVENIDOS AL AYER ', 9, 4),
(48, 'LA HORCA', 10, 2),
(49, 'A QUIET PLACE', 11, 1),
(50, 'Morgana una leyenda de terror', 3, 2),
(51, 'Morgan', 4, 7),
(52, 'Iron Mam', 5, 4),
(53, 'Godzilla the planet of monsters', 6, 4),
(54, 'Atomica', 10, 5),
(55, 'Kung fu panda', 15, 9),
(56, 'La tumba de las luciernagas', 15, 7),
(57, 'El incre?ble castillo vagabundo', 10, 7),
(58, 'Como entrebar a tu dragon', 18, 9),
(59, 'The purge', 3, 7),
(60, 'Parasyte', 4, 1),
(61, 'El hobbit un viaje inesperado', 7, 8),
(62, 'Rapidos y furiosos', 10, 5),
(63, 'it', 11, 2),
(64, 'Siete deseos', 13, 2),
(65, 'Gravedad', 13, 2),
(66, 'Zootopia', 10, 9),
(67, 'Extraterrestrial', 15, 2),
(68, 'La torre oscura', 12, 8),
(69, 'Transformers', 11, 4),
(70, 'Man of steel', 10, 4),
(71, 'La quija origin of evil', 6, 3),
(72, 'The lazarus effect', 9, 2),
(73, 'Warcraft', 10, 4),
(74, 'Kong the skull island', 14, 4),
(75, 'Godzilla king of the mosters', 5, 4),
(76, 'No toques dos veces', 10, 2),
(77, 'En el corazon del mar', 1, 6),
(78, 'valerian and the city of a thousand planets', 17, 4),
(79, 'Nerve un juego sin reglas', 16, 7),
(80, 'Exodus gods and kings', 13, 7),
(81, 'Terminator dark fate', 5, 4),
(82, 'La gran muralla', 10, 4),
(83, 'Night at the museum: secret of the tomb', 10, 9),
(84, 'Iro man 2', 11, 5),
(85, 'Colossal', 15, 8),
(86, 'The hangover', 19, 3),
(87, 'La piramide', 14, 2),
(88, 'La momia', 16, 3),
(89, 'Buenos vecinos', 2, 3),
(90, 'La bruja', 5, 2),
(91, 'Teke teke', 2, 2),
(92, 'The ring', 10, 2),
(93, 'La maldicion', 17, 2),
(94, 'Overlord', 1, 4),
(95, 'Bad times at the el royale', 8, 7),
(96, 'Bienvenidos al fin del mundo', 2, 3),
(97, 'Lucy', 10, 4),
(98, 'The shining', 16, 2),
(99, 'Kill bill', 5, 5),
(100, 'La teoria del todo', 18, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliprestada`
--

CREATE TABLE `peliprestada` (
  `id_peliprestada` int(11) NOT NULL,
  `id_prestamo` int(11) DEFAULT NULL,
  `id_copia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=REDUNDANT;

--
-- RELACIONES PARA LA TABLA `peliprestada`:
--

--
-- Volcado de datos para la tabla `peliprestada`
--

INSERT INTO `peliprestada` (`id_peliprestada`, `id_prestamo`, `id_copia`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5),
(6, 6, 6),
(7, 7, 7),
(8, 8, 8),
(9, 9, 9),
(10, 10, 10),
(11, 11, 11),
(12, 12, 12),
(13, 13, 13),
(14, 14, 14),
(15, 15, 15),
(16, 16, 16),
(17, 17, 17),
(18, 18, 18),
(19, 19, 19),
(20, 20, 20),
(21, 21, 21),
(22, 22, 22),
(23, 23, 23),
(24, 24, 24),
(25, 25, 25),
(26, 26, 26),
(27, 27, 27),
(28, 28, 28),
(29, 29, 29),
(30, 30, 30),
(31, 31, 31),
(32, 32, 32),
(33, 33, 33),
(34, 34, 34),
(35, 35, 35),
(36, 36, 36),
(37, 37, 37),
(38, 38, 38),
(39, 39, 39),
(40, 40, 40),
(41, 41, 41),
(42, 42, 42),
(43, 43, 43),
(44, 44, 44),
(45, 45, 45),
(46, 46, 46),
(47, 47, 47),
(48, 48, 48),
(49, 49, 49),
(50, 50, 50),
(51, 51, 51),
(52, 52, 52),
(53, 53, 53),
(54, 54, 54),
(55, 55, 55),
(56, 56, 56),
(57, 57, 57),
(58, 58, 58),
(59, 59, 59),
(60, 60, 60),
(61, 61, 61),
(62, 62, 62),
(63, 63, 63),
(64, 64, 64),
(65, 65, 65),
(66, 66, 66),
(67, 67, 67),
(68, 68, 68),
(69, 69, 69),
(70, 70, 70),
(71, 71, 71),
(72, 72, 72),
(73, 73, 73),
(74, 74, 74),
(75, 75, 75),
(76, 76, 76),
(77, 77, 77),
(78, 78, 78),
(79, 79, 79),
(80, 80, 80),
(81, 81, 81),
(82, 82, 82),
(83, 83, 83),
(84, 84, 84),
(85, 85, 85),
(86, 86, 86),
(87, 87, 87),
(88, 88, 88),
(89, 89, 89),
(90, 90, 90),
(91, 91, 91),
(92, 92, 92),
(93, 93, 93),
(94, 94, 94),
(95, 95, 95),
(96, 96, 96),
(97, 97, 97),
(98, 98, 98),
(99, 99, 99),
(100, 100, 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id_persona` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `ap_paterno` varchar(50) DEFAULT NULL,
  `ap_materno` varchar(50) DEFAULT NULL,
  `dir` varchar(50) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `personas`:
--

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id_persona`, `nombre`, `ap_paterno`, `ap_materno`, `dir`, `telefono`) VALUES
(1, 'Patricia', 'Reyes', 'Reyes', 'La cuadrilla', '7223128976'),
(2, 'Ariel', 'Moreno', 'Romualdo', 'El colibri', '7226854415'),
(3, 'Alexis', 'Rebollar', 'López', 'Colorines', '7223474108'),
(4, 'Aldo', 'Rodríguez', 'Reyes', 'El Arco', '7228429552'),
(5, 'Alejandro', 'Miguel', 'Cruz', 'Villa Victoria', '7226661684'),
(6, 'Eduardo', 'Agapito', 'Bobadilla', 'Villa de Allende', '5587603343'),
(7, 'Gonzalo', 'Vazquez', 'Gutierrez', 'La Pedrera', '7221573419'),
(8, 'Leontino', 'Delgado', 'Castillo', 'El colibri', '7226824529'),
(9, 'Isidoro', 'Mendieta', 'Gutierrez', 'La cuadrilla', '7225054266'),
(10, 'Maricruz', 'Miguel', 'Gomez', 'Amanalco', '7222348589'),
(11, 'Francisco', 'Calixto', 'Garcia', 'San Francisco', '7225616554'),
(12, 'Antonio', 'Aguilar', 'Mateo', 'San Juan', '7228452401'),
(13, 'Tomas', 'Bañuelos', 'Colin', 'La Peña', '7222957429'),
(14, 'Laura', 'Vazquez', 'Medina', 'La Pedrera', '5614160679'),
(15, 'Gabriela', 'Mendieta', 'Gutierrez', 'La cuadrilla', '7223164439'),
(16, 'Ricardo', 'Morales', 'Segundo', 'Luis Donaldo', '7291438512'),
(17, 'Arturo', 'Dominguez', 'de Paz', 'Loma Bonita', '5566973074'),
(18, 'Salvador', 'Morales', 'Gutierrez', 'Colosio', '7228730075'),
(19, 'Enrique', 'Garcia', 'López', 'Villa Victoria', '7223702240'),
(20, 'Ana', 'Garcia', 'Tinoco', 'Avenida Toluca', '7292327283'),
(21, 'Brandon', 'Lopez', 'Lopez', 'Polvillos', '7222467466'),
(22, 'Israel', 'Gomez', 'Reyes', 'Amanalco', '7224750083'),
(23, 'Jorge', 'Mondragon', 'Bartolo', 'El Arco', '7225859910'),
(24, 'Agustin', 'Mendez', 'Cardozo', 'Colonia Sanchez', '7224738589'),
(25, 'Jesus', 'Sanchez', 'Sanchez', 'Colonia Sanchez', '7222356099'),
(26, 'Luis', 'Valencia', 'Romo', 'Agua Prieta', '7226804854'),
(27, 'Jose', 'Bernardo', 'Osorio', 'El chorrito', '7227807845'),
(28, 'Maximino', 'Santana', 'López', 'Santo Tomas', '7228098760'),
(29, 'Alejandro', 'Negron', 'Sanchez', 'Adolfo Ruiz', '7228903876'),
(30, 'Georgina', 'Guzman', 'Osorio', 'Colorines', '7227908798'),
(31, 'Renata', 'Guadarrama', 'Valencia', 'Angostura', '5587603343'),
(32, 'Jorge', 'Cambron', 'Lopez', 'La Cruz', '7221503456'),
(33, 'Diego', 'Valencia', 'Romo', 'Colorines', '7221346090'),
(34, 'Israel', 'Perez', 'Rodriguez', 'El rincon', '7223908909'),
(35, 'Jose', 'Hernandez', 'Tapia', 'Rincon Grande', '7228765678'),
(36, 'Maria', 'Romo', 'Lopez', 'Rincon', '7229807809'),
(37, 'Jafet', 'Vazquez', 'Casas', 'El Durazno', '7228903456'),
(38, 'Juan', 'Medina', 'Lopez', 'Atezcapan', '7224567890'),
(39, 'Juan', 'Faustino', 'Marquez', 'La cruz', '6643807854'),
(40, 'Jose', 'Guadarrama', 'Vargas', 'El colibri', '7228901234'),
(41, 'Blanca', 'Solorzano', 'Limas', 'Las fincas', '7227604312'),
(42, 'Alejandro', 'Dominguez', 'Santana', 'El durazno', '7223400981'),
(43, 'Salvador', 'Velazquez', 'de Paz', 'Villa Victoria', '5522019715'),
(44, 'Carlos', 'Villazteca', 'Rebollo', 'Villa Victoria', '7225854841'),
(45, 'Antonio', 'Calvillo', 'Valencia', 'Colorines', '6331326633'),
(46, 'Irving', 'Juarez', 'Calvillo', 'Colorines', '7223917436'),
(47, 'Consuelo', 'Guzman', 'Tapia', 'Santo Tomas', '7224010083'),
(48, 'Antonio', 'Yepez', 'Torres', 'Colorines', '7221664211'),
(49, 'Manuel', 'Felix', 'Gallardo', 'El Pinal', '7222818591'),
(50, 'Cesar', 'Casas', 'Rebollar', 'El Sifon', '7224316091'),
(51, 'Alexis', 'Tavira', 'Rebollar', 'Chichipicas', '7226448752'),
(52, 'Alfredo', 'Lopez', 'Marcos', 'San Bartolo', '7227325722'),
(53, 'Alma', 'Aguilar', 'Fuentes', 'Alcantarilla', '7256937639'),
(54, 'Andrea', 'Acosta', 'Garduño', 'Avandaro', '7228325693'),
(55, 'Andrea', 'Sanchez', 'Lopez', 'La capilla', '7223212335'),
(56, 'Luisa', 'Reyes', 'Lopez', 'San Bartolo', '7222345667'),
(57, 'Antonio', 'Carbajal', 'Gomez', 'Santa Maria', '7222738890'),
(58, 'Areli', 'Lopez', 'Lopez', 'San Bartolo', '7221235784'),
(59, 'Azarael', 'Lopez', 'Gomez', 'San Juan', '7298635282'),
(60, 'Bethsabe', 'Velazquez', 'Alcantar', 'Avenida Juarez', '7227937353'),
(61, 'Brandon', 'Jaimes', 'Martinez', 'Camino a la Peña', '7222627725'),
(62, 'Brenda', 'Lopez', 'Segundo', 'Polvillos', '7224563735'),
(63, 'Brian', 'Carbajal', 'Ruiz', 'Palito verde', '7226726652'),
(64, 'Mijael', 'Guadarrama', 'Hernandez', 'Casas viejas', '7227895437'),
(65, 'Carlos', 'Rojas', 'Espinoza', 'La Peña', '7226734590'),
(66, 'Cecilia', 'Guerrero', 'Martinez', 'Acatitlan', '7224908590'),
(67, 'Citlali', 'Mora', 'Mora', 'San Lucas', '7228456073'),
(68, 'Daniela', 'Estrada', 'Estrada', 'El Refugio', '7228554399'),
(69, 'Daniel', 'Martinez', 'Olvera', 'San Bartolo', '7229909453'),
(70, 'Daniela', 'Bautista', 'Ruiz', 'Alfareros', '7225630080'),
(71, 'Diego', 'Gonzalez', 'Tinoco', 'Chichipicas', '7223008589'),
(72, 'Edith', 'Nava', 'Suarez', 'El deposito', '7225638020'),
(73, 'Eduardo', 'Mendieta', 'Vilchis', 'Tierras Blancas', '7226936432'),
(74, 'Eduardo', 'Mercado', 'Gomez', 'San Bartolo', '7225367431'),
(75, 'Eliu', 'Calzada', 'Suarez', 'Independencia', '7227893753'),
(76, 'Eric', 'Garcia', 'Montes', 'Acaticlan', '7225687590'),
(77, 'Esmeralda', 'Bautista', 'Mendez', 'La Escondida', '7228885590'),
(78, 'Everardo', 'Robles', 'Marcos', 'Pipioltepec', '7235476599'),
(79, 'Fernanda', 'Mercado', 'Solis', 'Impepsa', '7223004433'),
(80, 'Fernando', 'Olvera', 'Vera', 'Pipioltepec', '7228628843'),
(81, 'Lali', 'Leines', 'Maldonado', 'El Arco', '7224293764'),
(82, 'Guadalupe', 'Mercado', 'Sanchez', 'Avenida Toluca', '7225638745'),
(83, 'Jose', 'Tavira', 'Lopez', 'Los Girasoles', '7226536346'),
(84, 'Ismael', 'Ruiz', 'Gomez', 'Tierras Blancas', '7219865326'),
(85, 'Ivan', 'Patena', 'Mujica', 'Loma Bonita', '7254526244'),
(86, 'Jennifer', 'Ramirez', 'Sanchez', 'El colibri', '7226772633'),
(87, 'Mario', 'Blanco', 'Morales', 'Colonos', '7228172552'),
(88, 'Jesus', 'Delgado', 'Colin', 'La Estrella', '7229653463'),
(89, 'Johana', 'Vargas', 'Quintero', 'San Juan', '7225555920'),
(90, 'Marcus', 'Fenix', 'Cole', 'Loto Azul', '7235376436'),
(91, 'Carlos', 'Johnson', 'Lopez', 'San Antonio', '7222536352'),
(92, 'Cesar', 'Mendez', 'Hernandez', 'Colosio', '7222653636'),
(93, 'Jonathan', 'Ruiz', 'Palacios', 'Los Rosales', '7236273789'),
(94, 'Emilio', 'Azcarraga', 'Ñañez', 'Centro', '7229383746'),
(95, 'Gabriel', 'Trejo', 'Alfaro', 'Fray Gregorio', '7236235624'),
(96, 'Mauro', 'Osorio', 'Mateo', 'La cuadrilla', '7235477523'),
(97, 'Jorge', 'Rivera', 'Ramirez', 'Centro', '7222736783'),
(98, 'Braulio', 'Mendieta', 'Rojas', 'La Pedrera', '7233898961'),
(99, 'Emanuel', 'Valencia', 'Lopez', 'Palito verde', '7234866498'),
(101, 'Harrison', 'Ford', 'Nidelman', 'Chicago', '7226487925'),
(102, 'Daisy Jazz', 'Isobel', 'Ridley', 'Londres', '7224781254'),
(103, 'Adam Douglas', 'Driver', 'Wright', 'San Diego', '7224985623'),
(104, 'Christopher Michael', 'Pratt', 'Louise', 'Minnesota', '7223915965'),
(105, 'Bryce Dallas', 'Howard', 'Alley', 'Los Ángeles', '7223164814'),
(106, 'Leonardo Wilhelm', 'DiCaprio', 'Indenbirken', 'Los Ángeles', '7222413663'),
(107, 'Margot Elise', 'Robbie', 'Kessler', 'Dalby', '7214578451'),
(108, 'Uma Karuna', 'Thurman', 'von Schlebrügge', 'Boston', '7256596834'),
(109, 'Doug', 'Jones', 'Jones', 'Indianápolis', '7235219923'),
(110, 'Gael', 'García', 'Bernal', 'Guadalajara', '7237020891'),
(111, 'Emma Charlotte Duerre', 'Watson', 'Luesby', 'París', '7238821859'),
(112, 'Daniel Jacob', 'Radcliffe', 'Gresham', 'Londres', '7240622827'),
(113, 'Daniel Robert', 'Elfman', 'Elfman', 'Los Ángeles', '7242423795'),
(114, 'Bradley Charles', 'Cooper', 'Campano', 'Filadelfia', '7244224763'),
(115, 'Martin Fitzgerald', 'Lawrence', 'Chlora', 'Fráncfort del Meno', '7246025731'),
(116, 'Vanessa Anne', 'Hudgens', 'Guangco', 'Salinas', '7247826699'),
(117, 'Willard Carrol', 'Smith', 'Bright', 'Filadelfia', '7249627667'),
(118, 'Thomas Jacob', 'Black', 'Cohen', 'Santa Mónica', '7251428635'),
(119, 'Benedict Timothy', 'Carlton', 'Ventham', 'Hammersmith', '7253229603'),
(120, 'Rachel Anne', 'McAdams', 'McAdams', 'London', '7255030571'),
(121, 'Adrien', 'Brody', 'Plachy', 'Nueva York', '7256831539'),
(122, 'Scarlett Ingrid', 'Johansson', 'Sloan', 'Nueva York', '7258632508'),
(123, 'Robert John', 'Downey', 'Ford', 'Nueva York', '7260433476'),
(124, 'Elizabeth Chase', 'Olsen', 'Jones', 'Los Ángeles', '7262234444'),
(125, 'Josef Francis', 'Anthony', 'Pilato', 'Fitchburg', '7264035412'),
(126, 'Christina', 'Ricci', 'Murdoch', 'Santa Mónica', '7265836380'),
(127, 'Hilda', 'Noomi', 'Rapace', 'Hudiksvall', '7267637348'),
(128, 'Matthew David', 'McConaughey', 'Kathleen', 'Texas', '7269438316'),
(129, 'Matthew', 'Damon', 'Paige', 'Cambridge', '7271239284'),
(130, 'Keri Lynn', 'Russell', 'Stephens', 'Fountain Valley', '7273040252'),
(131, 'Stephen', 'Glenn', 'Martin', 'Los Ángeles', '7264035412'),
(132, 'Jonathan', 'Vincent', 'Voight', 'Dalby', '7267637348'),
(133, 'Cuba', 'Michael', 'Gooding', 'Boston', '7269438316'),
(134, 'Samuel', 'Leroy', 'Jackson', 'Indianápolis', '7271239284'),
(135, 'Mel Columcille', 'Gerard', 'Gibson', 'Indianápolis', '7273040252'),
(136, 'George', 'Timothy', 'Clooney', 'Santa Mónica', '7264035412'),
(137, 'Thomas', 'Cruise', 'Mapother', 'Boston', '7267637348'),
(138, 'José Antonio', 'Domínguez', 'Bandera', 'Los Ángeles', '7269438316'),
(139, 'Nicolas', 'Kim', 'Coppola', 'Filadelfia', '7271239284'),
(140, 'Robin', 'McLaurin', 'Williams', 'Filadelfia', '7273040252'),
(141, 'Morgan', 'Freeman', 'Revere', 'Salinas', '7264035412'),
(142, 'William', 'Bradley', 'Pitt', 'Filadelfia', '7267637348'),
(143, 'Denzel', 'Hayes', 'Washington', 'Santa Mónica', '7269438316'),
(144, 'Russell', 'Ira', 'Crowe', 'Nueva York', '7271239284'),
(145, 'Alfredo', 'James', 'Pacino', 'Los Ángeles', '7273040252'),
(146, 'John', 'Christopher', 'Depp', 'Fitchburg', '7264035412'),
(147, 'Thomas', 'Jeffrey', 'Hanks', 'Santa Mónica', '7267637348'),
(148, 'Robert', 'Anthony', 'De Niro', 'Hudiksvall', '7269438316'),
(149, 'Dustin', 'Lee', 'Hoffman', 'Texas', '7271239284'),
(150, 'Richard ', 'Tiffany ', 'Gere', 'Nueva York', '7273040252'),
(151, 'Pedro', 'Infante', 'Cruz', 'Sinaloa', '7226789076'),
(152, 'Jorge', 'Alberto', 'Negrete', 'Guanajuato', '7228090874'),
(153, 'Mario', 'Moreno', 'Reyes', 'Ciudad de Mexico', '7514982313'),
(154, 'Gael', 'Garcia', 'Bernal', 'Guadalajara', '7123205061'),
(155, 'Salma', 'Hayek', 'Jimenez', 'Los Ángeles', '7213033334'),
(156, 'Diego', 'Luna', 'Alexander', 'Ciudad de Mexico', '7211401663'),
(157, 'Dolores', 'Lopez', 'Negrete', 'Durango', '7214134451'),
(158, 'Eugenio', 'Gonzalez', 'Derbez', 'Ciudad de Mexico', '7256292830'),
(159, 'Roberto', 'Gomez', 'Bolaños', 'Ciudad de Mexico', '7132109923'),
(160, 'Luis Miguel', 'Gallego', 'Basteri', 'Acapulco', '7231220301'),
(161, 'Fernando', 'Colunga', 'Olivares', 'Ciudad de Mexico', '7223231109'),
(162, 'Kate', 'del Castillo', 'Negrete', 'Ciudad de Mexico', '7240226801'),
(163, 'Alfonso', 'Cuaron', 'Orozco', 'Los Ángeles', '7226904574'),
(164, 'Diego Andres', 'Gonzalez', 'Boneta', 'Ciudad de Mexico', '7223908089'),
(165, 'Elsa', 'Aguirre', 'Juarez', 'Chihuahua', '6643189054'),
(166, 'Xavier', 'Lopez', 'Lopez', 'Chicago', '7247816100'),
(167, 'Guillermo', 'del Toro', 'Gomez', 'Guadalajara', '7221090617'),
(168, 'John', 'Christopher', 'Depp', 'Owensboro, Kentucky', '7210420610'),
(169, 'Thomas', 'Cruise', 'Mapother', 'Nueva York', '7223020603'),
(170, 'Willard', 'Carroll', 'Smith', 'Pensilvania', '7255121571'),
(171, 'Thomas', 'Jeffrey', 'Hanks', 'California', '7225130539'),
(172, 'George', 'Timothy', 'Clooney', 'Kentucky', '7251231510'),
(173, 'Angelina', 'Jolie', 'Voight', 'Los Ángeles', '7220430317'),
(174, 'Arnold', 'Alois', 'Schwarzenegger', 'Austria', '752130041'),
(175, 'Julia', 'Fiona', 'Roberts', 'Georgia', '7227806456'),
(176, 'José Antonio', 'Domínguez', 'Bandera', 'Málaga', '7265831390'),
(177, 'Michael', 'Kirk', 'Douglas', 'Nueva Jersey', '7262130308'),
(178, 'Jennifer', 'Joanna', 'Aniston', 'California', '7221401316'),
(179, 'Michael', 'Sylvester', 'Stallone', 'Nueva York', '7221231204'),
(180, 'Morgan', 'Freeman', 'Freeman', 'Memphis', '7223548901'),
(181, 'Hugh', 'Michael', 'Jackman', 'Sídney', '7521780076'),
(182, 'Scarlett', 'Ingrid', 'Johansson', 'Nueva York', '6643187612'),
(183, 'Dwayne', 'Douglas', 'Johnson', 'California', '7514982313'),
(184, 'Mary', 'Louise', 'Streep', 'Nueva Jersey', '7220115061'),
(185, 'Quentin', 'Jerome', 'Tarantino', 'Tennessee', '6643187854'),
(186, 'James', 'Eugene', 'Carrey', 'Ontario', '6330001663'),
(187, 'John', 'Joseph', 'Travolta', 'Nueva Jersey', '6334134451'),
(188, 'Walter', 'Bruce', 'Willis', ' Alemania Occidental', '6336292830'),
(189, 'Christopher', 'Hemsworth', 'Hemsworth', 'Melbourne', '6642109923'),
(190, 'Keanu', 'Charles', 'Reeves', 'Ontario', '6641220301'),
(191, 'Nicole', 'Mary', 'Kidman', 'Hawái', '6333231102'),
(192, 'Mark', 'Sinclair', 'Vincent', 'California', '6670226801'),
(193, 'Benjamin', 'Geza', 'Affleck', 'California', '6676904574'),
(194, 'Mel', 'Columcille', 'Gibson', 'Nueva York', '6673908089'),
(195, 'Richard', 'Tiffany', 'Gere', 'Filadelfia', '6673081054'),
(196, 'Sean', 'Justin', 'Penn', 'Santa Mónica', '6647816100'),
(197, 'Jennifer', 'Shrader', 'Lawrence', 'Kentucky', '6331090617'),
(198, 'Nicolas', 'Kim', 'Coppola', 'California', '6330420610'),
(199, 'Charlize', 'Theron', 'Theron', 'Benoni', '6333229603'),
(200, 'Ryan', 'Thomas', 'Gosling', 'London', '6675030571'),
(201, 'Jason', 'Statham', 'Statham', 'Derbyshire', '6676831539'),
(202, 'George', 'Walton', 'Lucas Jr.', 'San Francisco', '3460129612'),
(203, 'Steven', 'Allan', 'Spielberg', 'Cincinati', '3468901123'),
(204, 'James', 'Francis', 'Cameron', 'Kapuskasing', '4561108902'),
(205, 'Martin', 'Charles', 'Scorsese', 'Queens', '8905671143'),
(206, 'Quentin', 'Jerome', 'Tarantino', 'Knoxville', '4568967712'),
(207, 'Guillermo', 'del Toro', 'Gomez', 'Guadalajara', '7226661684'),
(208, 'Alejandro', 'González', 'Iñarritu', 'Ciudad de México', '5523065555'),
(209, 'Alfonso', 'Cuarón', 'Orozco', 'Ciudad de México', '5553678912'),
(210, 'Timothy', 'Walter', 'Burton', 'Burbank', '3460097823'),
(211, 'Clinton', 'Eastwood', 'Jr.', 'San Francisco', '3467861098'),
(212, 'Michael', 'Benjamin', 'Bay', 'Los Angeles', '8901235432'),
(213, 'Peter', 'Robert', 'Jackson', 'Pukerua Bay', '8903541875'),
(214, 'Samuel', 'Marshall', 'Raimi', 'Royal Oak', '3568793210'),
(215, 'Rajmund Roman', 'Thierry', 'Polanski', 'Francia', '7895647761'),
(216, 'Kevin', 'Feige', '', 'Boston', '4567520194'),
(217, 'George', 'Andrew', 'Romero', 'Toronto', '4560174429'),
(218, 'Jeffrey', 'Jacob', 'Abrams', 'Nueva York', '8906443008'),
(219, 'Ridley', 'Scott', 'Kt', 'South Shields', '7764531230'),
(220, 'Christopher', 'Edward', 'Nolan', 'Westminster', '6763412897'),
(221, 'Matthew', 'George', 'Reeves', 'Rockville Centre', '6714239870'),
(222, 'Richard', 'Stuart', 'Linklater', 'Illinois', '7225545091'),
(223, 'David', 'Kehit', 'Lynch', 'Los Angeles', '7267940056'),
(224, 'Allan', 'Stewart', 'Konigsberg', 'Texas', '5567901000'),
(225, 'Richard', 'Stuart', 'Linklater', 'Manhattan', '7225545091'),
(226, 'Michael', 'Haneke', 'Linklater', 'Illinois', '7225545091'),
(227, 'Francis', 'Ford', 'Coppola', 'Kentucky', '7225545091'),
(228, 'Paul', 'Thomas', 'Anderson', 'Frandford', '7225545091'),
(229, 'Werner', 'Herzog', 'Stipetic', 'Massachusets', '7225890134'),
(230, 'Mike', 'Leigh', 'OBE', 'Amsterdam', '7226891700'),
(231, 'Jafar', 'Panahi', '', 'Teheran', '5590543155'),
(232, 'Alfred', 'Joseph', 'Hitchcock', 'Leytonstone', '8102856273'),
(233, 'Paolo', 'Sorrentino', '', 'Italia', '9108271853'),
(234, 'David', 'Keith', 'Lynch', 'Montana', '7281028401'),
(235, 'Terrence', 'Vance', 'Gilliam', 'Minnesota', '9101894231'),
(236, 'Friedrich', 'Christian', 'Anton Lang', 'Los Angeles', '9018275191'),
(237, 'Serguéi', 'Mijáilovich', 'Eizenshtéin', 'Riga', '8920564721'),
(238, 'Hayao', 'Miyazaki', '', 'Bunkyo', '4526172852'),
(239, 'Isao', 'Takahata', '', 'Tokyo', '6571828594'),
(240, 'Allan', 'Stewart', 'Konigsberg', 'Bronx', '1827564728'),
(241, 'Howard', 'Winchester', 'Hawks', 'Goshen', '8192746234'),
(242, 'Joseph', 'Leo', 'Mankiewicz', 'Pensilvania', '9102857462'),
(243, 'George', 'Dewey', 'Cukor', 'Nueva York', '6172643123'),
(244, 'George', 'Orson', 'Welles', 'Winsconsin', '0192748572'),
(245, 'Henry', 'Chance', 'Aronofsky', 'Nueva York', '6273817264'),
(246, 'Wesley', 'Wales', 'Anderson', 'Houston', '1827430195'),
(247, 'Jan', 'Tomáš', 'Forman', 'Republica Checa', '6647721287'),
(248, 'David', 'Samuel', 'Peckinpah', 'Fresno', '8274663123'),
(249, 'Sergio', 'Leone', '', 'Roma', '7281726542'),
(250, 'William', 'Wyler', '', 'MulHouse', '6632817265'),
(251, 'Billy', 'Wilder', 'Chaplin', 'Londres', '7273040252'),
(252, 'Ingmar', 'Bergman', 'Cocteau', 'Minnesota', '7264035412'),
(253, 'Federico', 'Fellini', 'Malick', 'Los Ángeles', '7267637348'),
(254, 'Charles', 'Chaplin', 'Mankiewicz', 'Los Ángeles', '7269438316'),
(255, 'Terrence', 'Malick', 'Ford', 'Salinas', '7271239284'),
(256, 'Andrei', 'Tarkovsky', 'Welles', 'Filadelfia', '7264035412'),
(257, 'Vittorio', 'De', 'Aronofsky', 'Santa Mónica', '7267637348'),
(258, 'Buster', 'Keaton', 'Godard', 'Hammersmith', '7269438316'),
(259, 'François', 'Truffaut', 'Forman', 'Nueva York', '7273040252'),
(260, 'John', 'Huston', 'Gibson', 'Nueva York', '7271239284'),
(261, 'Elia', 'Kazan', 'Peckinpah', 'Nueva York', '7264035412'),
(262, 'Fred', 'Zinnemann', 'Leone', 'Los Ángeles', '7267637348'),
(263, 'John', 'Lasseter', 'Wyler', 'Fitchburg', '7269438316'),
(264, 'Frank', 'Capra', 'Chaplin', 'Santa Mónica', '7271239284'),
(265, 'Ridley', 'Scott', 'Cocteau', 'Texas', '7271239284'),
(266, 'David', 'Lean', 'Malick', 'Los Ángeles', '7264035412'),
(267, 'David', 'Fincher', 'Peckinpah', 'Indianápolis', '7271239284'),
(268, 'Luis', 'García', 'Leone', 'Guadalajara', '7273040252'),
(269, 'Peter', 'Jackson', 'Cocteau', 'Filadelfia', '7269438316'),
(270, 'Victor', 'Fleming', 'Lynch', 'Santa Mónica', '7264035412'),
(271, 'Michael', 'Curtiz', 'Gilliam', 'Hammersmith', '7267637348'),
(272, 'Giuseppe', 'Tornatore', 'Kubrick', 'London', '7269438316'),
(273, 'D.W.', 'Griffith', 'Lang', 'Nueva York', '7271239284'),
(274, 'Carl', 'Theodor', 'Murnau', 'Nueva York', '7273040252'),
(275, 'Masaki', 'Kobayashi', 'Wiene', 'Nueva York', '7271239284'),
(276, 'Paul', 'Verhoeven', 'Wilder', 'Santa Mónica', '7269438316'),
(277, 'Bela', 'Tarr', 'Bergman', 'Texas', '7273040252'),
(278, 'Oliver', 'Stone', 'Lang', 'Los Ángeles', '7271239284'),
(279, 'Robert', 'Zemeckis', 'Murnau', 'Dalby', '7264035412'),
(280, 'David', 'Cronenberg', 'Wiene', 'Boston', '7267637348'),
(281, 'Kathryn', 'Bigelow', 'Scorsese', 'Guadalajara', '7271239284'),
(282, 'Robert', 'Altman', 'Wilder', 'París', '7273040252'),
(283, 'Paul', 'Thomas', 'Bergman', 'Los Ángeles', '7264035412'),
(284, 'Jean', 'Jacques', 'Anaud', 'Filadelfia', '7267637348'),
(285, 'Juan', 'José', 'Campanella', 'Salinas', '7271239284'),
(286, 'Peter', 'Greenaway', 'Wiene', 'Filadelfia', '7273040252'),
(287, 'Richard', 'Donner', 'Wilder', 'London', '7267637348'),
(288, 'Ang', 'Lee', 'Leone', 'Fitchburg', '7264035412'),
(289, 'Jim', 'Sheridan', 'Wyler', 'Santa Mónica', '7267637348'),
(290, 'Sam', 'Mendes', 'Cocteau', 'Los Ángeles', '7273040252'),
(291, 'George', 'A.', 'Malick', 'Dalby', '7271239284'),
(292, 'Brian', 'Russell', 'De Palma', 'Nueva Jersey', '9918274623'),
(293, 'Lars', 'von', 'Trier', 'Copenhague', '7726355123'),
(294, 'Pedro', 'Almodóvar', 'Caballero', 'Ciudad Real', '8019982645'),
(295, 'Frank', 'Arpad', 'Darabont', 'Doubs', '6672212764'),
(296, 'Béla', 'Tarr', '', 'Hungria', '8918275431'),
(297, 'Thomas', 'Vinterberg', '', 'Dinamarca', '8109902453'),
(298, 'Kathryn', 'Ann', 'Bigelow', 'California', '2234125678'),
(299, 'Peter', 'Greenaway', '', 'Newport', '3425678675'),
(300, 'Richard', 'Donald', 'Schwartzberg', 'Nueva York', '1892866578'),
(301, 'Jean', 'Jacques', 'Anaud', 'Filadelfia', '8956423456'),
(307, 'Antonio', 'Lujano', 'Bautista', 'Colorienes', '5555555555'),
(315, 'lujano', 'a', 'a', 'aa', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE `prestamos` (
  `id_prestamo` int(11) NOT NULL,
  `fecha` datetime DEFAULT NULL,
  `id_socio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=REDUNDANT;

--
-- RELACIONES PARA LA TABLA `prestamos`:
--

--
-- Volcado de datos para la tabla `prestamos`
--

INSERT INTO `prestamos` (`id_prestamo`, `fecha`, `id_socio`) VALUES
(1, '2020-10-23 10:20:07', 1),
(2, '2015-03-07 15:15:10', 2),
(3, '2019-01-27 07:02:25', 3),
(4, '2013-09-11 18:15:14', 4),
(5, '2011-11-29 10:55:47', 5),
(6, '2016-07-04 19:12:10', 6),
(7, '2017-12-09 12:25:52', 7),
(8, '2017-04-11 13:35:15', 8),
(9, '2018-08-29 14:15:14', 9),
(10, '2018-10-03 15:15:15', 10),
(11, '2019-11-16 17:45:32', 11),
(12, '2017-12-11 18:45:34', 12),
(13, '2019-09-28 20:54:48', 13),
(14, '0000-00-00 00:00:00', 14),
(15, '2017-01-22 13:15:28', 15),
(16, '0000-00-00 00:00:00', 16),
(17, '2019-07-24 15:19:22', 17),
(18, '2014-08-28 13:45:26', 18),
(19, '2011-10-26 16:45:31', 19),
(20, '2010-01-29 12:04:20', 20),
(21, '2020-11-05 17:35:12', 21),
(22, '2018-04-26 11:10:48', 22),
(23, '2015-05-26 12:25:14', 23),
(24, '2016-09-11 18:45:10', 24),
(25, '2017-10-12 19:45:12', 25),
(26, '2005-03-18 16:12:30', 26),
(27, '2013-02-25 18:15:10', 27),
(28, '2020-01-13 19:45:12', 28),
(29, '2012-11-02 22:10:45', 29),
(30, '2011-12-14 14:02:23', 30),
(31, '2017-11-17 11:10:45', 31),
(32, '2018-06-23 14:22:15', 32),
(33, '2019-02-07 13:56:02', 33),
(34, '2020-08-17 20:20:20', 34),
(35, '2015-09-18 12:54:12', 35),
(36, '2016-11-22 18:17:25', 36),
(37, '2017-04-20 21:10:02', 37),
(38, '2018-07-15 13:14:25', 38),
(39, '2016-12-09 18:03:20', 39),
(40, '2015-10-11 13:04:38', 40),
(41, '2019-08-26 18:03:02', 41),
(42, '2017-06-13 14:12:15', 42),
(43, '2020-09-05 21:15:10', 43),
(44, '2015-10-07 18:15:12', 44),
(45, '2013-02-17 14:05:14', 45),
(46, '2017-11-20 12:05:14', 46),
(47, '2011-01-27 21:10:15', 47),
(48, '2010-09-03 19:14:12', 48),
(49, '2011-06-17 21:14:14', 49),
(50, '2017-11-11 19:14:12', 50),
(51, '2012-09-09 18:15:14', 1),
(52, '2011-07-23 16:12:11', 2),
(53, '2018-08-21 15:20:22', 3),
(54, '2014-11-22 14:17:18', 4),
(55, '2012-09-15 09:02:01', 5),
(56, '2014-02-19 13:13:14', 6),
(57, '2020-01-04 14:45:02', 7),
(58, '2017-06-15 16:19:14', 8),
(59, '2015-11-21 21:10:12', 9),
(60, '2016-09-09 15:13:02', 10),
(61, '2017-12-10 20:20:18', 11),
(62, '2019-07-24 07:15:12', 12),
(63, '2013-03-29 23:12:25', 13),
(64, '2016-09-04 18:15:14', 14),
(65, '2015-12-04 15:15:18', 15),
(66, '2018-11-12 21:14:18', 16),
(67, '2011-12-27 22:04:12', 17),
(68, '2000-11-23 13:54:12', 18),
(69, '2012-05-12 21:10:02', 19),
(70, '2016-02-05 09:12:14', 20),
(71, '2019-01-25 23:12:15', 21),
(72, '2018-08-28 21:10:05', 22),
(73, '2019-12-09 18:50:55', 23),
(74, '2020-05-18 14:05:10', 24),
(75, '2019-11-19 12:25:05', 25),
(76, '2018-07-20 21:10:15', 26),
(77, '2011-03-21 18:50:50', 27),
(78, '2019-12-01 13:00:58', 28),
(79, '2016-01-27 14:07:44', 29),
(80, '2018-09-05 12:15:14', 30),
(81, '0000-00-00 00:00:00', 31),
(82, '2000-08-16 21:18:12', 32),
(83, '2016-12-03 14:15:12', 33),
(84, '2017-04-19 20:25:14', 34),
(85, '2018-11-28 18:10:12', 35),
(86, '2019-07-01 21:09:27', 36),
(87, '2014-05-23 14:02:54', 37),
(88, '2017-12-25 16:15:03', 38),
(89, '2013-06-28 18:10:12', 39),
(90, '2019-11-18 20:45:30', 40),
(91, '2017-10-22 18:32:45', 41),
(92, '2013-12-18 21:10:25', 42),
(93, '2011-11-02 09:02:05', 43),
(94, '2015-04-19 16:45:02', 44),
(95, '2015-07-28 20:20:25', 45),
(96, '2019-09-19 18:45:10', 46),
(97, '2014-04-21 16:02:33', 47),
(98, '2020-12-09 21:10:45', 48),
(99, '2015-09-28 18:15:45', 49),
(100, '2017-09-28 15:30:11', 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `socios`
--

CREATE TABLE `socios` (
  `id_socio` int(11) NOT NULL,
  `id_persona` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `socios`:
--

--
-- Volcado de datos para la tabla `socios`
--

INSERT INTO `socios` (`id_socio`, `id_persona`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15),
(16, 16),
(17, 17),
(18, 18),
(19, 19),
(20, 20),
(21, 21),
(22, 22),
(23, 23),
(24, 24),
(25, 25),
(26, 26),
(27, 27),
(28, 28),
(29, 29),
(30, 30),
(31, 31),
(32, 32),
(33, 33),
(34, 34),
(35, 35),
(36, 36),
(37, 37),
(38, 38),
(39, 39),
(40, 40),
(41, 41),
(42, 42),
(43, 43),
(44, 44),
(45, 45),
(46, 46),
(47, 47),
(48, 48),
(49, 49),
(50, 50),
(51, 51),
(52, 52),
(53, 53),
(54, 54),
(55, 55),
(56, 56),
(57, 57),
(58, 58),
(59, 59),
(60, 60),
(61, 61),
(62, 62),
(63, 63),
(64, 64),
(65, 65),
(66, 66),
(67, 67),
(68, 68),
(69, 69),
(70, 70),
(71, 71),
(72, 72),
(73, 73),
(74, 74),
(75, 75),
(76, 76),
(77, 77),
(78, 78),
(79, 79),
(80, 80),
(81, 81),
(82, 82),
(83, 83),
(84, 84),
(85, 85),
(86, 86),
(87, 87),
(88, 88),
(89, 89),
(90, 90),
(91, 91),
(92, 92),
(93, 93),
(94, 94),
(95, 95),
(96, 96),
(97, 97),
(98, 98),
(99, 99),
(100, 100);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actfav`
--
ALTER TABLE `actfav`
  ADD PRIMARY KEY (`id_actorfav`),
  ADD KEY `id_socio` (`id_socio`),
  ADD KEY `id_actor` (`id_actor`);

--
-- Indices de la tabla `actores`
--
ALTER TABLE `actores`
  ADD PRIMARY KEY (`id_actor`),
  ADD KEY `id_persona` (`id_persona`);

--
-- Indices de la tabla `copias`
--
ALTER TABLE `copias`
  ADD PRIMARY KEY (`id_copia`),
  ADD KEY `id_pelicula` (`id_pelicula`);

--
-- Indices de la tabla `devoluciones`
--
ALTER TABLE `devoluciones`
  ADD PRIMARY KEY (`id_devolucion`),
  ADD KEY `id_prestamo` (`id_prestamo`);

--
-- Indices de la tabla `directores`
--
ALTER TABLE `directores`
  ADD PRIMARY KEY (`id_director`),
  ADD KEY `id_persona` (`id_persona`);

--
-- Indices de la tabla `dirfav`
--
ALTER TABLE `dirfav`
  ADD PRIMARY KEY (`id_dirfav`),
  ADD KEY `id_socio` (`id_socio`),
  ADD KEY `id_director` (`id_director`);

--
-- Indices de la tabla `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`id_genero`),
  ADD UNIQUE KEY `des_gen` (`des_gen`);

--
-- Indices de la tabla `genfav`
--
ALTER TABLE `genfav`
  ADD PRIMARY KEY (`id_generofav`),
  ADD KEY `id_genero` (`id_genero`),
  ADD KEY `id_socio` (`id_socio`);

--
-- Indices de la tabla `listaespera`
--
ALTER TABLE `listaespera`
  ADD PRIMARY KEY (`id_espera`),
  ADD KEY `id_pelicula` (`id_pelicula`),
  ADD KEY `id_socio` (`id_socio`);

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id_pelicula`),
  ADD UNIQUE KEY `titulo` (`titulo`),
  ADD KEY `id_director` (`id_director`),
  ADD KEY `id_genero` (`id_genero`);

--
-- Indices de la tabla `peliprestada`
--
ALTER TABLE `peliprestada`
  ADD PRIMARY KEY (`id_peliprestada`),
  ADD KEY `id_prestamo` (`id_prestamo`),
  ADD KEY `id_copia` (`id_copia`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id_persona`);

--
-- Indices de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD PRIMARY KEY (`id_prestamo`),
  ADD KEY `id_socio` (`id_socio`);

--
-- Indices de la tabla `socios`
--
ALTER TABLE `socios`
  ADD PRIMARY KEY (`id_socio`),
  ADD KEY `id_persona` (`id_persona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actfav`
--
ALTER TABLE `actfav`
  MODIFY `id_actorfav` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `actores`
--
ALTER TABLE `actores`
  MODIFY `id_actor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de la tabla `copias`
--
ALTER TABLE `copias`
  MODIFY `id_copia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de la tabla `devoluciones`
--
ALTER TABLE `devoluciones`
  MODIFY `id_devolucion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de la tabla `directores`
--
ALTER TABLE `directores`
  MODIFY `id_director` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de la tabla `dirfav`
--
ALTER TABLE `dirfav`
  MODIFY `id_dirfav` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `generos`
--
ALTER TABLE `generos`
  MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `genfav`
--
ALTER TABLE `genfav`
  MODIFY `id_generofav` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `listaespera`
--
ALTER TABLE `listaespera`
  MODIFY `id_espera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id_pelicula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de la tabla `peliprestada`
--
ALTER TABLE `peliprestada`
  MODIFY `id_peliprestada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=316;

--
-- AUTO_INCREMENT de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  MODIFY `id_prestamo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de la tabla `socios`
--
ALTER TABLE `socios`
  MODIFY `id_socio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
