-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-02-2018 a las 15:54:16
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
-- Base de datos: `bdfct`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id_alumno` int(9) NOT NULL,
  `dni` varchar(9) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `ape1` varchar(15) NOT NULL,
  `ape2` varchar(15) NOT NULL,
  `nick` varchar(15) NOT NULL,
  `cod_ciclo` int(3) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `poblacion` varchar(20) NOT NULL,
  `cp` varchar(5) NOT NULL,
  `provincia` varchar(15) NOT NULL,
  `tlfFijo` varchar(9) NOT NULL,
  `tlfMovil` varchar(9) NOT NULL,
  `email` varchar(30) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id_alumno`, `dni`, `nombre`, `ape1`, `ape2`, `nick`, `cod_ciclo`, `direccion`, `poblacion`, `cp`, `provincia`, `tlfFijo`, `tlfMovil`, `email`, `foto`) VALUES
(1, '48948743M', 'Felix', 'Rodriguez', 'De la Fuente', 'lobo13', 2, 'Amadeus Mozart n1', 'Sevilla', '31000', 'Sevilla', '959000000', '600000000', 'naturaleza4ever@gmail.com', ''),
(2, '48948735Z', 'Luis Javier', 'Bueno', 'Noodle', 'sora12', 1, 'C Deallado 1º 3I', 'Huelva', '21000', 'Huelva', '959211111', '600100000', 'luisja96@gmail.com', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciclo`
--

CREATE TABLE `ciclo` (
  `cod_ciclo` int(3) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `grado` varchar(15) NOT NULL,
  `HorasFCT` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ciclo`
--

INSERT INTO `ciclo` (`cod_ciclo`, `nombre`, `grado`, `HorasFCT`) VALUES
(1, 'DAW', 'SUPERIOR', '220'),
(2, 'ASYR', 'SUPERIOR', '220');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id_empresa` int(9) NOT NULL,
  `cif` varchar(9) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `nomtutor` varchar(15) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `poblacion` varchar(15) NOT NULL,
  `cp` varchar(5) NOT NULL,
  `provincia` varchar(15) NOT NULL,
  `tlfFijo` varchar(9) NOT NULL,
  `tlfMovil` varchar(9) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fct`
--

CREATE TABLE `fct` (
  `cod_fct` int(9) NOT NULL,
  `id_profesor` int(9) NOT NULL,
  `id_alumno` int(9) NOT NULL,
  `id_empresa` int(9) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `id_profesor` int(9) NOT NULL,
  `dni` varchar(9) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `ape1` varchar(15) NOT NULL,
  `ape2` varchar(15) NOT NULL,
  `rol` varchar(15) NOT NULL,
  `nick` varchar(15) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `tlf` varchar(9) NOT NULL,
  `email` varchar(30) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`id_profesor`, `dni`, `nombre`, `ape1`, `ape2`, `rol`, `nick`, `pass`, `tlf`, `email`, `foto`) VALUES
(1, '11111111A', 'Alfonso', 'Romero', 'Caro', 'PROFESOR', 'marc', '$2a$04$tTxZ0vo5scZwxfpEe0TXM.2A9BNn1QIWIfkd0L92IJ8oywXQGB8ie', '958000000', 'alf_prof@gmail.com', ''),
(2, '11111111B', 'Juan Antonio', 'Alves', 'Noves', 'DIRECTOR', 'subdir', '$2a$04$tTxZ0vo5scZwxfpEe0TXM.2A9BNn1QIWIfkd0L92IJ8oywXQGB8ie', '958100000', 'ja_subd@gmail.com', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id_alumno`),
  ADD KEY `f_keyCiclo` (`cod_ciclo`);

--
-- Indices de la tabla `ciclo`
--
ALTER TABLE `ciclo`
  ADD PRIMARY KEY (`cod_ciclo`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Indices de la tabla `fct`
--
ALTER TABLE `fct`
  ADD PRIMARY KEY (`cod_fct`),
  ADD KEY `f_keyAlumnos` (`id_alumno`),
  ADD KEY `f_keyProf` (`id_profesor`),
  ADD KEY `f_keyEmp` (`id_empresa`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`id_profesor`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `f_keyCiclo` FOREIGN KEY (`cod_ciclo`) REFERENCES `ciclo` (`cod_ciclo`);

--
-- Filtros para la tabla `fct`
--
ALTER TABLE `fct`
  ADD CONSTRAINT `f_keyAlumnos` FOREIGN KEY (`id_alumno`) REFERENCES `alumno` (`id_alumno`),
  ADD CONSTRAINT `f_keyEmp` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id_empresa`),
  ADD CONSTRAINT `f_keyProf` FOREIGN KEY (`id_profesor`) REFERENCES `profesor` (`id_profesor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
