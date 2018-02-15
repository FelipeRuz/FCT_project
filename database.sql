/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  2DAW
 * Created: 15-feb-2018
 */

-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-02-2018 a las 16:42:12
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

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

INSERT INTO `alumno` (`dni`, `nombre`, `ape1`, `ape2`, `nick`, `cod_ciclo`, `direccion`, `poblacion`, `cp`, `provincia`, `tlfFijo`, `tlfMovil`, `email`, `foto`) VALUES
('12329572Y', 'Estefan', 'Bueno', 'Ole', 'estefan', 1, 'Isla Chica n23', 'Huelva', '21000', 'Huelva', '123937591', '123937591', 'estefan@gmail.com', ''),
('12941235Z', 'Rocio', 'Alves', 'Romero', 'gordirocio', 1, 'Falsa n22', 'Huelva', '21000', 'Gibraleon', '333121212', '333121212', 'rocio@gmail.com', ''),
('23973472X', 'Irene', 'Bueno', 'Alves', 'irenu', 1, 'Isla Chica n43', 'Huelva', '21000', 'Huelva', '456454545', '456454545', 'irene@gmail.com', ''),
('45617322Y', 'Rogelia', 'García', 'Tormes', 'rogelu', 2, 'Minero n23', 'Sevilla', '31000', 'Sevilla', '222326545', '222326545', 'rogelia@gmail.com', ''),
('48231243Z', 'Diego', 'Romero ', 'Fernandez', 'diego', 3, 'Doctor Rubio n1', 'Huelva', '21000', 'Huelva', '122331212', '122331212', 'diego@gmail.com', ''),
('48948735Z', 'Ana', 'Sanchez', 'Jimenez', 'nuka', 3, 'Falsa n123', 'Huelva', '21000', 'Huelva', '124121212', '124121212', 'ana@gmail.com', ''),
('48948743M', 'Felipe', 'Ruz ', 'Pérez', 'zan93', 4, 'Doctor Rubio n5', 'Huelva', '21000', 'Huelva', '123121212', '123121212', 'felipe@gmail.com', ''),
('48975672F', 'Manuel', 'García', 'Castaño', 'manolete', 5, 'Feria n23', 'Sevilla', '31000', 'Sevilla', '123454545', '123454545', 'manuel@gmail.com', '');

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
(1, 'ASYR', 'SUPERIOR', '220'),
(2, 'AYF', 'SUPERIOR', '220'),
(3, 'DAW', 'SUPERIOR', '220'),
(4, 'GYAE', 'MEDIO', '110'),
(5, 'SMR', 'MEDIO', '110');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
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

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`cif`, `nombre`, `nomtutor`, `direccion`, `poblacion`, `cp`, `provincia`, `tlfFijo`, `tlfMovil`, `email`) VALUES
('77777777Z', 'SUBLERIS', 'Alfonso', 'Pol.Polirosa n23', 'Huelva', '21000', 'Huelva', '777777777', '777777777', 'subleris@gmail.com'),
('88888888Z', 'MICROSOFT', 'Antonio', 'Amadeus Mozart n1', 'Madrid', '41000', 'Madrid', '888888888', '888888888', 'microsoft@gmail.com'),
('99999999Z', 'EVERIS', 'Alfonso', 'Americo Vespuccio n4', 'Sevilla', '31000', 'Sevilla', '999999999', '999999999', 'everis@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fct`
--

CREATE TABLE `fct` (
  `dni_prof` varchar(9) NOT NULL,
  `dni_alumno` varchar(9) NOT NULL,
  `cif_empresa` varchar(9) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fct`
--

INSERT INTO `fct` (`dni_prof`, `dni_alumno`, `cif_empresa`, `fecha`) VALUES
('11111111A', '12329572Y', '77777777Z', '2018-04-06'),
('33333333A', '12941235Z', '88888888Z', '2018-02-28'),
('44444444R', '23973472X', '99999999Z', '2018-02-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `dni` varchar(9) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `ape1` varchar(15) NOT NULL,
  `ape2` varchar(15) NOT NULL,
  `nick` varchar(15) NOT NULL,
  `tlf` varchar(9) NOT NULL,
  `email` varchar(30) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`dni`, `nombre`, `ape1`, `ape2`, `nick`, `tlf`, `email`, `foto`) VALUES
('11111111A', 'Alfonso', 'Rodriguez', 'Lopez', 'marc', '111111111', 'alf_prof@gmail.com', ''),
('33333333A', 'Antonio', 'García', 'Portillo', 'profagp', '333333333', 'ant_prof@gmail.com', ''),
('44444444R', 'Diego', 'Robles', 'Perez', 'diegoprof', '986542799', 'diego_prof@gmail.com', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `dni` varchar(9) NOT NULL,
  `tipo` varchar(15) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `ape1` varchar(15) NOT NULL,
  `ape2` varchar(15) NOT NULL,
  `nick` varchar(15) NOT NULL,
  `tlfFijo` varchar(9) NOT NULL,
  `tlfMovil` varchar(9) NOT NULL,
  `email` varchar(20) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`dni`, `tipo`, `nombre`, `ape1`, `ape2`, `nick`, `tlfFijo`, `tlfMovil`, `email`, `foto`) VALUES
('11111111A', 'PROFESOR', 'Alfonso', 'Rodriguez', 'Lopez', 'marc', '111111111', '111111111', 'alf_prof@gmail.com', ''),
('22222222B', 'DIRECTOR', 'Juan Antonio', 'García', 'Pereira', 'subdir', '222222222', '222222222', 'ja_subd@gmail.com', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`dni`),
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
  ADD PRIMARY KEY (`cif`);

--
-- Indices de la tabla `fct`
--
ALTER TABLE `fct`
  ADD KEY `f_keyAlumnos` (`dni_alumno`),
  ADD KEY `f_keyProf` (`dni_prof`),
  ADD KEY `f_keyEmp` (`cif_empresa`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`dni`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`dni`);

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
  ADD CONSTRAINT `f_keyAlumnos` FOREIGN KEY (`dni_alumno`) REFERENCES `alumno` (`dni`),
  ADD CONSTRAINT `f_keyEmp` FOREIGN KEY (`cif_empresa`) REFERENCES `empresa` (`cif`),
  ADD CONSTRAINT `f_keyProf` FOREIGN KEY (`dni_prof`) REFERENCES `profesor` (`dni`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
