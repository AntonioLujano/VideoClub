-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-07-2020 a las 21:00:45
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
-- Base de datos: `videoclub1`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_Socios` (IN `pnombre` VARCHAR(50), `pap_paterno` VARCHAR(50), `pap_materno` VARCHAR(50), `pdir` VARCHAR(50), `ptelefono` VARCHAR(10))  BEGIN
declare id int;
	if not exists (select id_persona FROM personas WHERE nombre=pnombre and ap_paterno=pap_paterno and ap_materno=pap_materno and dir=pdir and telefono=ptelefono) then
		INSERT INTO personas(nombre,ap_paterno,ap_materno,dir,telefono)values(pnombre,pap_paterno,pap_materno,pdir,ptelefono);
		select(select id_persona FROM personas WHERE nombre=pnombre and ap_paterno=pap_paterno and ap_materno=pap_materno and dir=pdir and telefono=ptelefono)into id from dual;
		insert into socios(id_persona)values(id);
	else if not exists (select s.id_socio FROM personas p,socios s WHERE nombre=pnombre and ap_paterno=pap_paterno and ap_materno=pap_materno and dir=pdir and telefono=ptelefono and p.id_persona=s.id_persona) then
			select "ya existe persona";
            select(select id_persona FROM personas WHERE nombre=pnombre and ap_paterno=pap_paterno and ap_materno=pap_materno and dir=pdir and telefono=ptelefono)into id from dual;
			insert into socios(id_persona)values(id);
		else 
			select "ya existe registro";
		end if;
    end if;
END$$

DELIMITER ;

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
  `nombre_act` varchar(50) DEFAULT NULL,
  `ap_paterno` varchar(50) DEFAULT NULL,
  `ap_materno` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `actores`
--

INSERT INTO `actores` (`id_actor`, `nombre_act`, `ap_paterno`, `ap_materno`) VALUES
(1, 'Harrison', 'Ford', 'Nidelman'),
(2, 'Daisy Jazz', 'Isobel', 'Ridley'),
(3, 'Adam Douglas', 'Driver', 'Wright'),
(4, 'Christopher Michael', 'Pratt', 'Louise'),
(5, 'Bryce Dallas', 'Howard', 'Alley'),
(6, 'Leonardo Wilhelm', 'DiCaprio', 'Indenbirken'),
(7, 'Margot Elise', 'Robbie', 'Kessler'),
(8, 'Uma Karuna', 'Thurman', 'von Schlebrügge'),
(9, 'Doug', 'Jones', 'Jones'),
(10, 'Gael', 'García', 'Bernal'),
(11, 'Emma Charlotte Duerre', 'Watson', 'Luesby'),
(12, 'Daniel Jacob', 'Radcliffe', 'Gresham'),
(13, 'Daniel Robert', 'Elfman', 'Elfman'),
(14, 'Bradley Charles', 'Cooper', 'Campano'),
(15, 'Martin Fitzgerald', 'Lawrence', 'Chlora'),
(16, 'Vanessa Anne', 'Hudgens', 'Guangco'),
(17, 'Willard Carrol', 'Smith', 'Bright'),
(18, 'Thomas Jacob', 'Black', 'Cohen'),
(19, 'Benedict Timothy', 'Carlton', 'Ventham'),
(20, 'Rachel Anne', 'McAdams', 'McAdams'),
(21, 'Adrien', 'Brody', 'Plachy'),
(22, 'Scarlett Ingrid', 'Johansson', 'Sloan'),
(23, 'Robert John', 'Downey', 'Ford'),
(24, 'Elizabeth Chase', 'Olsen', 'Jones'),
(25, 'Josef Francis', 'Anthony', 'Pilato'),
(26, 'Christina', 'Ricci', 'Murdoch'),
(27, 'Hilda', 'Noomi', 'Rapace'),
(28, 'Matthew David', 'McConaughey', ''),
(29, 'Matthew', 'Damon', 'Paige'),
(30, 'Keri Lynn', 'Russell', 'Stephens'),
(31, 'Stephen', 'Glenn', 'Martin'),
(32, 'Jonathan', 'Vincent', 'Voight'),
(33, 'Cuba', 'Michael', 'Gooding'),
(34, 'Samuel', 'Leroy', 'Jackson'),
(35, 'Mel Columcille', 'Gerard', 'Gibson'),
(36, 'George', 'Timothy', 'Clooney'),
(37, 'Thomas', 'Cruise', 'Mapother'),
(38, 'José Antonio', 'Domínguez', 'Bandera'),
(39, 'Nicolas', 'Kim', 'Coppola'),
(40, 'Robin', 'McLaurin', 'Williams'),
(41, 'Morgan', 'Freeman', 'Revere'),
(42, 'William', 'Bradley', 'Pitt'),
(43, 'Denzel', 'Hayes', 'Washington'),
(44, 'Russell', 'Ira', 'Crowe'),
(45, 'Alfredo', 'James', 'Pacino'),
(46, 'John', 'Christopher', 'Depp'),
(47, 'Thomas', 'Jeffrey', 'Hanks'),
(48, 'Robert', 'Anthony', 'De Niro'),
(49, 'Dustin', 'Lee', 'Hoffman'),
(50, 'Richard ', 'Tiffany ', 'Gere'),
(51, 'Pedro', 'Infante', 'Cruz'),
(52, 'Jorge', 'Alberto', 'Negrete'),
(53, 'Mario', 'Moreno', 'Reyes'),
(54, 'Gael', 'Garcia', 'Bernal'),
(55, 'Salma', 'Hayek', 'Jimenez'),
(56, 'Diego', 'Luna', 'Alexander'),
(57, 'Dolores', 'Lopez', 'Negrete'),
(58, 'Eugenio', 'Gonzalez', 'Derbez'),
(59, 'Roberto', 'Gomez', 'Bolaños'),
(60, 'Luis Miguel', 'Gallego', 'Basteri'),
(61, 'Fernando', 'Colunga', 'Olivares'),
(62, 'Kate', 'del Castillo', 'Negrete'),
(63, 'Alfonso', 'Cuaron', 'Orozco'),
(64, 'Diego Andres', 'Gonzalez', ''),
(65, 'Elsa', 'Aguirre', 'Juarez'),
(66, 'Xavier', 'Lopez', 'Lopez'),
(67, 'Guillermo', 'del Toro', 'Gomez'),
(68, 'John', 'Christopher', 'Depp'),
(69, 'Thomas', 'Cruise', 'Mapother'),
(70, 'Willard', 'Carroll', 'Smith'),
(71, 'Thomas', 'Jeffrey', 'Hanks'),
(72, 'George', 'Timothy', 'Clooney'),
(73, 'Angelina', 'Jolie', 'Voight'),
(74, 'Arnold', 'Alois', 'Schwarzenegger'),
(75, 'Julia', 'Fiona', 'Roberts'),
(76, 'José Antonio', 'Domínguez', 'Bandera'),
(77, 'Michael', 'Kirk', 'Douglas'),
(78, 'Jennifer', 'Joanna', 'Aniston'),
(79, 'Michael', 'Sylvester', 'Stallone'),
(80, 'Morgan', 'Freeman', 'Freeman'),
(81, 'Hugh', 'Michael', 'Jackman'),
(82, 'Scarlett', 'Ingrid', 'Johansson'),
(83, 'Dwayne', 'Douglas', 'Johnson'),
(84, 'Mary', 'Louise', 'Streep'),
(85, 'Quentin', 'Jerome', 'Tarantino'),
(86, 'James', 'Eugene', 'Carrey'),
(87, 'John', 'Joseph', 'Travolta'),
(88, 'Walter', 'Bruce', 'Willis'),
(89, 'Christopher', 'Hemsworth', 'Hemsworth'),
(90, 'Keanu', 'Charles', 'Reeves'),
(91, 'Nicole', 'Mary', 'Kidman'),
(92, 'Mark', 'Sinclair', 'Vincent'),
(93, 'Benjamin', 'Geza', 'Affleck'),
(94, 'Mel', 'Columcille', 'Gibson'),
(95, 'Richard', 'Tiffany', 'Gere'),
(96, 'Sean', 'Justin', 'Penn'),
(97, 'Jennifer', 'Shrader', 'Lawrence'),
(98, 'Nicolas', 'Kim', 'Coppola'),
(99, 'Charlize', 'Theron', 'Theron'),
(100, 'Ryan', 'Thomas', 'Gosling');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `copias`
--

CREATE TABLE `copias` (
  `id_copia` int(11) NOT NULL,
  `id_pelicula` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=REDUNDANT;

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
  `nombre_dire` varchar(50) DEFAULT NULL,
  `ap_paterno` varchar(50) DEFAULT NULL,
  `ap_materno` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `directores`
--

INSERT INTO `directores` (`id_director`, `nombre_dire`, `ap_paterno`, `ap_materno`) VALUES
(1, 'Martin', 'Walton', 'Lucas Jr.'),
(2, 'George', 'Walton', 'Lucas Jr.'),
(3, 'Steven', 'Allan', 'Spielberg'),
(4, 'James', 'Francis', 'Cameron'),
(5, 'Martin', 'Charles', 'Scorsese'),
(6, 'Quentin', 'Jerome', 'Tarantino'),
(7, 'Guillermo', 'del Toro', 'Gomez'),
(8, 'Alejandro', 'González', 'Iñarritu'),
(9, 'Alfonso', 'Cuarón', 'Orozco'),
(10, 'Timothy', 'Walter', 'Burton'),
(11, 'Clinton', 'Eastwood', 'Jr.'),
(12, 'Michael', 'Benjamin', 'Bay'),
(13, 'Peter', 'Robert', 'Jackson'),
(14, 'Samuel', 'Marshall', 'Raimi'),
(15, 'Rajmund Roman', 'Thierry', ''),
(16, 'Kevin', 'Feige', ''),
(17, 'George', 'Andrew', 'Romero'),
(18, 'Jeffrey', 'Jacob', 'Abrams'),
(19, 'Ridley', 'Scott', 'Kt'),
(20, 'Christopher', 'Edward', 'Nolan'),
(21, 'Matthew', 'George', 'Reeves'),
(22, 'Richard', 'Stuart', 'Linklater'),
(23, 'David', 'Kehit', 'Lynch'),
(24, 'Allan', 'Stewart', 'Konigsberg'),
(25, 'Richard', 'Stuart', 'Linklater'),
(26, 'Michael', 'Haneke', 'Linklater'),
(27, 'Francis', 'Ford', 'Coppola'),
(28, 'Paul', 'Thomas', 'Anderson'),
(29, 'Werner', 'Herzog', 'Stipetic'),
(30, 'Mike', 'Leigh', 'OBE'),
(31, 'Jafar', 'Panahi', ''),
(32, 'Alfred', 'Joseph', 'Hitchcock'),
(33, 'Paolo', 'Sorrentino', ''),
(34, 'David', 'Keith', 'Lynch'),
(35, 'Terrence', 'Vance', 'Gilliam'),
(36, 'Friedrich', 'Christian', 'Anton Lang'),
(37, 'Serguéi', 'Mijáilovich', 'Eizenshtéin'),
(38, 'Hayao', 'Miyazaki', ''),
(39, 'Isao', 'Takahata', ''),
(40, 'Allan', 'Stewart', 'Konigsberg'),
(41, 'Howard', 'Winchester', 'Hawks'),
(42, 'Joseph', 'Leo', 'Mankiewicz'),
(43, 'George', 'Dewey', 'Cukor'),
(44, 'George', 'Orson', 'Welles'),
(45, 'Henry', 'Chance', 'Aronofsky'),
(46, 'Wesley', 'Wales', 'Anderson'),
(47, 'Jan', 'Tomáš', 'Forman'),
(48, 'David', 'Samuel', 'Peckinpah'),
(49, 'Sergio', 'Leone', ''),
(50, 'William', 'Wyler', ''),
(51, 'Billy', 'Wilder', 'Chaplin'),
(52, 'Ingmar', 'Bergman', 'Cocteau'),
(53, 'Federico', 'Fellini', 'Malick'),
(54, 'Charles', 'Chaplin', 'Mankiewicz'),
(55, 'Terrence', 'Malick', 'Ford'),
(56, 'Andrei', 'Tarkovsky', 'Welles'),
(57, 'Vittorio', 'De', 'Aronofsky'),
(58, 'Buster', 'Keaton', 'Godard'),
(59, 'François', 'Truffaut', 'Forman'),
(60, 'John', 'Huston', 'Gibson'),
(61, 'Elia', 'Kazan', 'Peckinpah'),
(62, 'Fred', 'Zinnemann', 'Leone'),
(63, 'John', 'Lasseter', 'Wyler'),
(64, 'Frank', 'Capra', 'Chaplin'),
(65, 'Ridley', 'Scott', 'Cocteau'),
(66, 'David', 'Lean', 'Malick'),
(67, 'David', 'Fincher', 'Peckinpah'),
(68, 'Luis', 'García', 'Leone'),
(69, 'Peter', 'Jackson', 'Cocteau'),
(70, 'Victor', 'Fleming', 'Lynch'),
(71, 'Michael', 'Curtiz', 'Gilliam'),
(72, 'Giuseppe', 'Tornatore', 'Kubrick'),
(73, 'D.W.', 'Griffith', 'Lang'),
(74, 'Carl', 'Theodor', 'Murnau'),
(75, 'Masaki', 'Kobayashi', 'Wiene'),
(76, 'Paul', 'Verhoeven', 'Wilder'),
(77, 'Bela', 'Tarr', 'Bergman'),
(78, 'Oliver', 'Stone', 'Lang'),
(79, 'Robert', 'Zemeckis', 'Murnau'),
(80, 'David', 'Cronenberg', 'Wiene'),
(81, 'Kathryn', 'Bigelow', 'Scorsese'),
(82, 'Robert', 'Altman', 'Wilder'),
(83, 'Paul', 'Thomas', 'Bergman'),
(84, 'Jean', 'Jacques', 'Anaud'),
(85, 'Juan', 'José', 'Campanella'),
(86, 'Peter', 'Greenaway', 'Wiene'),
(87, 'Richard', 'Donner', 'Wilder'),
(88, 'Ang', 'Lee', 'Leone'),
(89, 'Jim', 'Sheridan', 'Wyler'),
(90, 'Sam', 'Mendes', 'Cocteau'),
(91, 'George', 'A.', 'Malick'),
(92, 'Brian', 'Russell', 'De Palma'),
(93, 'Lars', 'von', 'Trier'),
(94, 'Pedro', 'Almodóvar', 'Caballero'),
(95, 'Frank', 'Arpad', 'Darabont'),
(96, 'Béla', 'Tarr', ''),
(97, 'Thomas', 'Vinterberg', ''),
(98, 'Kathryn', 'Ann', 'Bigelow'),
(99, 'Peter', 'Greenaway', ''),
(100, 'Richard', 'Donald', 'Schwartzberg');

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
-- Volcado de datos para la tabla `generos`
--

INSERT INTO `generos` (`id_genero`, `des_gen`) VALUES
(5, 'Acción'),
(6, 'Aventura'),
(4, 'Ciencia Ficción'),
(3, 'Comedia'),
(11, 'Comedia Romantica'),
(1, 'Drama'),
(13, 'Drama Sangriento'),
(8, 'Fántastico'),
(9, 'Infantil'),
(10, 'Romance'),
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
(100, 'Jean', 'Jacques', 'Anaud', 'Filadelfia', '8956423456'),
(101, 'Antonio', 'Lujano', 'Bautista', 'Colorienes', '5555555555'),
(102, 'lujano', 'a', 'a', 'aa', '1'),
(103, 'Michel', 'Benjamin', 'Bay', 'Miami USA', '5522019715'),
(104, 'Jos', 'Zarate', 'Lopez', 'San lucas', '8446064742'),
(105, 'Salvador', 'Velazquez', 'De paz', 'Villa Victoria', '5522019715'),
(106, 'Ximena', 'Velazquez', 'De paz', 'Villa Victoria', '8446064142'),
(107, 'Carlos', 'Castro', 'Garcia', 'Saltillo', '8443433706'),
(108, 'Mariana', 'Cruz', 'Mendoza', 'Valle de Bravo', '7221564812'),
(109, 'Leo', 'Delgado', 'Castillo', 'Valle de Bravo', '7226547894');

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
  `id_persona` int(11) DEFAULT NULL,
  `ine` varchar(100) DEFAULT NULL,
  `domicilio` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `socios`
--

INSERT INTO `socios` (`id_socio`, `id_persona`, `ine`, `domicilio`) VALUES
(1, 1, NULL, NULL),
(2, 2, NULL, NULL),
(3, 3, NULL, NULL),
(4, 4, NULL, NULL),
(5, 5, NULL, NULL),
(6, 6, NULL, NULL),
(7, 7, NULL, NULL),
(8, 8, NULL, NULL),
(9, 9, NULL, NULL),
(10, 10, NULL, NULL),
(11, 11, NULL, NULL),
(12, 12, NULL, NULL),
(13, 13, NULL, NULL),
(14, 14, NULL, NULL),
(15, 15, NULL, NULL),
(16, 16, NULL, NULL),
(17, 17, NULL, NULL),
(18, 18, NULL, NULL),
(19, 19, NULL, NULL),
(20, 20, NULL, NULL),
(21, 21, NULL, NULL),
(22, 22, NULL, NULL),
(23, 23, NULL, NULL),
(24, 24, NULL, NULL),
(25, 25, NULL, NULL),
(26, 26, NULL, NULL),
(27, 27, NULL, NULL),
(28, 28, NULL, NULL),
(29, 29, NULL, NULL),
(30, 30, NULL, NULL),
(31, 31, NULL, NULL),
(32, 32, NULL, NULL),
(33, 33, NULL, NULL),
(34, 34, NULL, NULL),
(35, 35, NULL, NULL),
(36, 36, NULL, NULL),
(37, 37, NULL, NULL),
(38, 38, NULL, NULL),
(39, 39, NULL, NULL),
(40, 40, NULL, NULL),
(41, 41, NULL, NULL),
(42, 42, NULL, NULL),
(43, 43, NULL, NULL),
(44, 44, NULL, NULL),
(45, 45, NULL, NULL),
(46, 46, NULL, NULL),
(47, 47, NULL, NULL),
(48, 48, NULL, NULL),
(49, 49, NULL, NULL),
(50, 50, NULL, NULL),
(51, 51, NULL, NULL),
(52, 52, NULL, NULL),
(53, 53, NULL, NULL),
(54, 54, NULL, NULL),
(55, 55, NULL, NULL),
(56, 56, NULL, NULL),
(57, 57, NULL, NULL),
(58, 58, NULL, NULL),
(59, 59, NULL, NULL),
(60, 60, NULL, NULL),
(61, 61, NULL, NULL),
(62, 62, NULL, NULL),
(63, 63, NULL, NULL),
(64, 64, NULL, NULL),
(65, 65, NULL, NULL),
(66, 66, NULL, NULL),
(67, 67, NULL, NULL),
(68, 68, NULL, NULL),
(69, 69, NULL, NULL),
(70, 70, NULL, NULL),
(71, 71, NULL, NULL),
(72, 72, NULL, NULL),
(73, 73, NULL, NULL),
(74, 74, NULL, NULL),
(75, 75, NULL, NULL),
(76, 76, NULL, NULL),
(77, 77, NULL, NULL),
(78, 78, NULL, NULL),
(79, 79, NULL, NULL),
(80, 80, NULL, NULL),
(81, 81, NULL, NULL),
(82, 82, NULL, NULL),
(83, 83, NULL, NULL),
(84, 84, NULL, NULL),
(85, 85, NULL, NULL),
(86, 86, NULL, NULL),
(87, 87, NULL, NULL),
(88, 88, NULL, NULL),
(89, 89, NULL, NULL),
(90, 90, NULL, NULL),
(91, 91, NULL, NULL),
(92, 92, NULL, NULL),
(93, 93, NULL, NULL),
(94, 94, NULL, NULL),
(95, 95, NULL, NULL),
(96, 96, NULL, NULL),
(97, 97, NULL, NULL),
(98, 98, NULL, NULL),
(99, 99, NULL, NULL),
(100, 100, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `id_persona`) VALUES
(1, 108),
(2, 109);

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
  ADD PRIMARY KEY (`id_actor`);

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
  ADD PRIMARY KEY (`id_director`);

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
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
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
  MODIFY `id_director` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT de la tabla `dirfav`
--
ALTER TABLE `dirfav`
  MODIFY `id_dirfav` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `generos`
--
ALTER TABLE `generos`
  MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=327;

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

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actfav`
--
ALTER TABLE `actfav`
  ADD CONSTRAINT `actfav2_ibfk_1` FOREIGN KEY (`id_actor`) REFERENCES `actores` (`id_actor`),
  ADD CONSTRAINT `actfav_ibfk_1` FOREIGN KEY (`id_socio`) REFERENCES `socios` (`id_socio`);

--
-- Filtros para la tabla `copias`
--
ALTER TABLE `copias`
  ADD CONSTRAINT `copias_ibfk_1` FOREIGN KEY (`id_pelicula`) REFERENCES `peliculas` (`id_pelicula`);

--
-- Filtros para la tabla `devoluciones`
--
ALTER TABLE `devoluciones`
  ADD CONSTRAINT `devoluciones_ibfk_1` FOREIGN KEY (`id_prestamo`) REFERENCES `prestamos` (`id_prestamo`);

--
-- Filtros para la tabla `dirfav`
--
ALTER TABLE `dirfav`
  ADD CONSTRAINT `dirfav2_ibfk_1` FOREIGN KEY (`id_director`) REFERENCES `directores` (`id_director`),
  ADD CONSTRAINT `dirfav_ibfk_1` FOREIGN KEY (`id_socio`) REFERENCES `socios` (`id_socio`);

--
-- Filtros para la tabla `genfav`
--
ALTER TABLE `genfav`
  ADD CONSTRAINT `genfav2_ibfk_1` FOREIGN KEY (`id_genero`) REFERENCES `generos` (`id_genero`),
  ADD CONSTRAINT `genfav_ibfk_1` FOREIGN KEY (`id_socio`) REFERENCES `socios` (`id_socio`);

--
-- Filtros para la tabla `listaespera`
--
ALTER TABLE `listaespera`
  ADD CONSTRAINT `listaespera2_ibfk_1` FOREIGN KEY (`id_pelicula`) REFERENCES `peliculas` (`id_pelicula`),
  ADD CONSTRAINT `listaespera_ibfk_1` FOREIGN KEY (`id_socio`) REFERENCES `socios` (`id_socio`);

--
-- Filtros para la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD CONSTRAINT `peliculas2_ibfk_1` FOREIGN KEY (`id_genero`) REFERENCES `generos` (`id_genero`),
  ADD CONSTRAINT `peliculas_ibfk_1` FOREIGN KEY (`id_director`) REFERENCES `directores` (`id_director`);

--
-- Filtros para la tabla `peliprestada`
--
ALTER TABLE `peliprestada`
  ADD CONSTRAINT `peliprestada_ibfk_1` FOREIGN KEY (`id_prestamo`) REFERENCES `prestamos` (`id_prestamo`);

--
-- Filtros para la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD CONSTRAINT `prestamos_ibfk_1` FOREIGN KEY (`id_socio`) REFERENCES `socios` (`id_socio`);

--
-- Filtros para la tabla `socios`
--
ALTER TABLE `socios`
  ADD CONSTRAINT `socios_ibfk_1` FOREIGN KEY (`id_persona`) REFERENCES `personas` (`id_persona`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_persona`) REFERENCES `personas` (`id_persona`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
