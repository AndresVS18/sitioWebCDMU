-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-08-2017 a las 22:04:47
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `pagina_web`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE IF NOT EXISTS `administrador` (
`Id_administrador` int(11) NOT NULL,
  `Nombre_usu` varchar(50) NOT NULL,
  `Contraseña` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`Id_administrador`, `Nombre_usu`, `Contraseña`) VALUES
(1, 'Juan', '123'),
(2, 'Jose', '456'),
(3, 'Pepe', '789');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `afiliados`
--

CREATE TABLE IF NOT EXISTS `afiliados` (
`Id_afiliado` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Apellidos` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Direccion` varchar(30) NOT NULL,
  `Telefono` double NOT NULL,
  `Nombre_usuario` varchar(50) NOT NULL,
  `Contraseña` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `afiliados`
--

INSERT INTO `afiliados` (`Id_afiliado`, `Nombre`, `Apellidos`, `Email`, `Direccion`, `Telefono`, `Nombre_usuario`, `Contraseña`) VALUES
(1, 'Juan', 'lopez', 'ejemplo@gmail.com', '1 NORTE 234', 2381231232, 'jual', 'jual'),
(2, 'Jose ', 'Ochoa', 'example@gmail.com', '4 ORIENTE 234', 5512345678, 'jooch', 'jooch'),
(3, 'Pepe', 'Vargas', 'ejemplo@outlook.com', 'AV. LAS PALMAS 12', 9912345678, 'peva', 'peva');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aspirantes`
--

CREATE TABLE IF NOT EXISTS `aspirantes` (
`Id_aspi` int(11) NOT NULL,
  `Id_curs` int(11) NOT NULL,
  `Nombre_aspi` varchar(30) NOT NULL,
  `Apellidos` varchar(30) NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Direccion` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `aspirantes`
--

INSERT INTO `aspirantes` (`Id_aspi`, `Id_curs`, `Nombre_aspi`, `Apellidos`, `Telefono`, `Direccion`, `Email`) VALUES
(1, 1, 'Juan ', 'Lopez', 1234567891, '1 NORTE 34 ', 'XXXXXX@ejemplo'),
(2, 2, 'Jose ', 'Ochoa', 987654321, '4 ORIENTE 123', 'ejempo@gmail.com'),
(3, 3, 'Pepe', 'Lopez', 1234567890, 'AV JUVENTUD  123', 'example@xxxxxx.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bolsa_trabajo`
--

CREATE TABLE IF NOT EXISTS `bolsa_trabajo` (
`Id_bolsa` int(11) NOT NULL,
  `Id_afiliado` int(11) NOT NULL,
  `Nombre_vacante` varchar(100) NOT NULL,
  `Contenido` varchar(100) NOT NULL,
  `Telefono` double NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `Fecha_limite` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bolsa_trabajo`
--

INSERT INTO `bolsa_trabajo` (`Id_bolsa`, `Id_afiliado`, `Nombre_vacante`, `Contenido`, `Telefono`, `Direccion`, `Fecha_limite`) VALUES
(1, 1, 'Diseñador', 'Se solicita empleado', 9898877676, 'AV LOS 4 CAMINOS', '2017-08-08'),
(2, 2, 'Programador', 'se solicita programador urgente', 5587623456, 'AV INDEPENDENCIA 123', '2017-08-08'),
(3, 1, 'Diseñador', 'Se solicita empleado', 9898877676, 'AV LOS 4 CAMINOS', '2017-08-08'),
(4, 2, 'Programador', 'se solicita programador urgente', 5587623456, 'AV INDEPENDENCIA 123', '2017-08-08'),
(5, 3, 'Curador de Datos ', 'Se busca Un cura', 9812345875, '1 ORIENTE 456', '2017-08-08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE IF NOT EXISTS `cursos` (
`Id_curs` int(11) NOT NULL,
  `Id_admin` int(11) NOT NULL,
  `Nombre_curs` varchar(30) NOT NULL,
  `Tipo_curso` text NOT NULL,
  `Fecha_curso` date NOT NULL,
  `imagen` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`Id_curs`, `Id_admin`, `Nombre_curs`, `Tipo_curso`, `Fecha_curso`, `imagen`) VALUES
(1, 1, 'Servidores', 'Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como por ejemplo "Contenido aquí, contenido aquí". Estos textos hacen parecerlo un español que se puede leer. Muchos paquetes de autoedición y editores de páginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una búsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a través de los años, algunas veces por accidente, otras veces a propósito (por ejemplo insertándole humor y cosas por el estilo).', '2017-08-01', 'slide-2.jpg'),
(2, 2, 'Desarrollo Web', 'Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como por ejemplo "Contenido aquí, contenido aquí". Estos textos hacen parecerlo un español que se puede leer. Muchos paquetes de autoedición y editores de páginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una búsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a través de los años, algunas veces por accidente, otras veces a propósito (por ejemplo insertándole humor y cosas por el estilo).', '2017-08-07', 'slide-3.jpg'),
(5, 3, 'Base de Datos', 'Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como por ejemplo "Contenido aquí, contenido aquí". Estos textos hacen parecerlo un español que se puede leer. Muchos paquetes de autoedición y editores de páginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una búsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a través de los años, algunas veces por accidente, otras veces a propósito (por ejemplo insertándole humor y cosas por el estilo).', '2017-07-12', 'intro-pic.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maquila`
--

CREATE TABLE IF NOT EXISTS `maquila` (
`Id_maqui` int(11) NOT NULL,
  `Id_afiliado` int(11) NOT NULL,
  `Nombre_maqui` varchar(30) NOT NULL,
  `Direccion` varchar(30) NOT NULL,
  `Telefono` double NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Descripcion` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `maquila`
--

INSERT INTO `maquila` (`Id_maqui`, `Id_afiliado`, `Nombre_maqui`, `Direccion`, `Telefono`, `Email`, `Descripcion`) VALUES
(1, 1, 'Textiles SA de SV', '1 NORTE 234', 1234567876, 'ejemplo@gmail.com', 'La empresa de dedica a laropa'),
(2, 2, 'Telas', 'AV PRINCIPAL', 2381231232, 'ejemplo@gmail.com', 'las mejores telas'),
(3, 3, 'Costuras org', 'AV INDEPENDENCIA 234', 987654325, 'xxxxx@xxxxxx.com', 'Ropa de buena calidad'),
(4, 2, 'Telas', 'AV PRINCIPAL', 2381231232, 'ejemplo@gmail.com', 'las mejores telas'),
(5, 3, 'Costuras org', 'AV INDEPENDENCIA 234', 987654325, 'xxxxx@xxxxxx.com', 'Ropa de buena calidad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
`Id_not` int(11) NOT NULL,
  `Id_admin` int(11) NOT NULL,
  `Titulo` varchar(100) NOT NULL,
  `Fecha` date NOT NULL,
  `Contenido` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`Id_not`, `Id_admin`, `Titulo`, `Fecha`, `Contenido`) VALUES
(1, 1, 'Nueva moda', '2017-08-01', 'Se registra nueva moda internacionalmente que ha llegado al Pais!'),
(2, 2, 'Tendencias', '2017-07-31', 'LA nueva tendencia de moda en la vestimenta de hombres'),
(3, 3, 'Ropa', '2017-08-02', 'Los mejores diseñadores mundiales han creado un nuevo estilo de ropa que ,arcara tendencia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE IF NOT EXISTS `servicios` (
`Id_serv` int(11) NOT NULL,
  `Id_admin` int(11) NOT NULL,
  `Tipo_serv` varchar(30) NOT NULL,
  `Contenido` varchar(30) NOT NULL,
  `imagen` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`Id_serv`, `Id_admin`, `Tipo_serv`, `Contenido`, `imagen`) VALUES
(1, 1, 'mecanica', 'no dice nada', 'bgR.jpg'),
(2, 2, 'Asistente', 'menejo eficiiente de maquinas', 'bg.jpg'),
(3, 3, 'mantenimiento', 'mentenimiento de maquinas', 'bg.jpg');

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
 ADD PRIMARY KEY (`Id_afiliado`);

--
-- Indices de la tabla `aspirantes`
--
ALTER TABLE `aspirantes`
 ADD PRIMARY KEY (`Id_aspi`), ADD KEY `Id_curs` (`Id_curs`);

--
-- Indices de la tabla `bolsa_trabajo`
--
ALTER TABLE `bolsa_trabajo`
 ADD PRIMARY KEY (`Id_bolsa`), ADD KEY `Id_afiliado` (`Id_afiliado`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
 ADD PRIMARY KEY (`Id_curs`), ADD KEY `Id_admin` (`Id_admin`);

--
-- Indices de la tabla `maquila`
--
ALTER TABLE `maquila`
 ADD PRIMARY KEY (`Id_maqui`), ADD KEY `Id_afiliado` (`Id_afiliado`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
 ADD PRIMARY KEY (`Id_not`), ADD KEY `Id_admin` (`Id_admin`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
 ADD PRIMARY KEY (`Id_serv`), ADD KEY `Id_admin` (`Id_admin`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
MODIFY `Id_administrador` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `afiliados`
--
ALTER TABLE `afiliados`
MODIFY `Id_afiliado` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `aspirantes`
--
ALTER TABLE `aspirantes`
MODIFY `Id_aspi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `bolsa_trabajo`
--
ALTER TABLE `bolsa_trabajo`
MODIFY `Id_bolsa` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
MODIFY `Id_curs` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `maquila`
--
ALTER TABLE `maquila`
MODIFY `Id_maqui` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
MODIFY `Id_not` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
MODIFY `Id_serv` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `bolsa_trabajo`
--
ALTER TABLE `bolsa_trabajo`
ADD CONSTRAINT `bolsa_trabajo_ibfk_1` FOREIGN KEY (`Id_afiliado`) REFERENCES `afiliados` (`Id_afiliado`);

--
-- Filtros para la tabla `cursos`
--
ALTER TABLE `cursos`
ADD CONSTRAINT `cursos_ibfk_1` FOREIGN KEY (`Id_admin`) REFERENCES `administrador` (`Id_administrador`);

--
-- Filtros para la tabla `maquila`
--
ALTER TABLE `maquila`
ADD CONSTRAINT `maquila_ibfk_1` FOREIGN KEY (`Id_afiliado`) REFERENCES `afiliados` (`Id_afiliado`);

--
-- Filtros para la tabla `noticias`
--
ALTER TABLE `noticias`
ADD CONSTRAINT `noticias_ibfk_1` FOREIGN KEY (`Id_admin`) REFERENCES `administrador` (`Id_administrador`);

--
-- Filtros para la tabla `servicios`
--
ALTER TABLE `servicios`
ADD CONSTRAINT `servicios_ibfk_1` FOREIGN KEY (`Id_admin`) REFERENCES `administrador` (`Id_administrador`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
