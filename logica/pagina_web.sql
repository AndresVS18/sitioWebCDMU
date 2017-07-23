-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-07-2017 a las 22:56:42
-- Versión del servidor: 10.1.24-MariaDB
-- Versión de PHP: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pagina_web`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `Id_administrador` int(11) NOT NULL,
  `Nombre_usu` varchar(50) NOT NULL,
  `Contraseña` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `afiliados`
--

CREATE TABLE `afiliados` (
  `Id_afiliado` int(11) NOT NULL,
  `Id_admin` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Apellidos` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Direccion` varchar(30) NOT NULL,
  `Telefono` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aspirantes`
--

CREATE TABLE `aspirantes` (
  `Id_aspi` int(11) NOT NULL,
  `Id_curs` int(11) NOT NULL,
  `Nombre_aspi` varchar(30) NOT NULL,
  `Apellidos` varchar(30) NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Direccion` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bolsa_trabajo`
--

CREATE TABLE `bolsa_trabajo` (
  `Id_bolsa` int(11) NOT NULL,
  `Id_afiliado` int(11) NOT NULL,
  `Nombre_vacante` varchar(100) NOT NULL,
  `Contenido` varchar(100) NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Direccion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `Id_curs` int(11) NOT NULL,
  `Id_admin` int(11) NOT NULL,
  `Nombre_curs` varchar(30) NOT NULL,
  `Tipo_curso` varchar(30) NOT NULL,
  `Fecha_curso` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maquila`
--

CREATE TABLE `maquila` (
  `Id_maqui` int(11) NOT NULL,
  `Id_afiliado` int(11) NOT NULL,
  `Nombre_maqui` varchar(30) NOT NULL,
  `Direccion` varchar(30) NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Descripcion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `Id_not` int(11) NOT NULL,
  `Id_admin` int(11) NOT NULL,
  `Titulo` varchar(100) NOT NULL,
  `Fecha` date NOT NULL,
  `Contenido` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `Id_serv` int(11) NOT NULL,
  `Id_admin` int(11) NOT NULL,
  `Tipo_serv` varchar(30) NOT NULL,
  `Contenido` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`Id_administrador`);

--
-- Indices de la tabla `afiliados`
--
ALTER TABLE `afiliados`
  ADD PRIMARY KEY (`Id_afiliado`),
  ADD KEY `Id_admin` (`Id_admin`);

--
-- Indices de la tabla `aspirantes`
--
ALTER TABLE `aspirantes`
  ADD PRIMARY KEY (`Id_aspi`),
  ADD KEY `Id_curs` (`Id_curs`);

--
-- Indices de la tabla `bolsa_trabajo`
--
ALTER TABLE `bolsa_trabajo`
  ADD PRIMARY KEY (`Id_bolsa`),
  ADD KEY `Id_afiliado` (`Id_afiliado`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`Id_curs`),
  ADD KEY `Id_admin` (`Id_admin`);

--
-- Indices de la tabla `maquila`
--
ALTER TABLE `maquila`
  ADD PRIMARY KEY (`Id_maqui`),
  ADD KEY `Id_afiliado` (`Id_afiliado`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`Id_not`),
  ADD KEY `Id_admin` (`Id_admin`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`Id_serv`),
  ADD KEY `Id_admin` (`Id_admin`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `afiliados`
--
ALTER TABLE `afiliados`
  MODIFY `Id_afiliado` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `aspirantes`
--
ALTER TABLE `aspirantes`
  MODIFY `Id_aspi` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `bolsa_trabajo`
--
ALTER TABLE `bolsa_trabajo`
  MODIFY `Id_bolsa` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `Id_curs` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `maquila`
--
ALTER TABLE `maquila`
  MODIFY `Id_maqui` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `Id_not` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `Id_serv` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
