-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-10-2022 a las 03:57:52
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capacitacion`
--

CREATE TABLE `capacitacion` (
  `capa_id` int(11) NOT NULL,
  `capa_nombre` varchar(30) NOT NULL,
  `capa_descripcion` varchar(60) NOT NULL,
  `capa_cupo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `capacitacion`
--

INSERT INTO `capacitacion` (`capa_id`, `capa_nombre`, `capa_descripcion`, `capa_cupo`) VALUES
(1, 'tecnico2134123', '2341243', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cupo`
--

CREATE TABLE `cupo` (
  `id_cupo` int(11) NOT NULL,
  `capa_id` int(11) NOT NULL,
  `usu_id` int(10) NOT NULL,
  `capa_cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cupo`
--

INSERT INTO `cupo` (`id_cupo`, `capa_id`, `usu_id`, `capa_cantidad`) VALUES
(1, 1, 1, 1),
(2, 1, 1, 1),
(3, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_rol`
--

CREATE TABLE `tbl_rol` (
  `rol_id` int(100) NOT NULL,
  `rol_nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_rol`
--

INSERT INTO `tbl_rol` (`rol_id`, `rol_nombre`) VALUES
(1, 'administrador'),
(2, 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario`
--

CREATE TABLE `tbl_usuario` (
  `usu_id` int(100) NOT NULL,
  `usu_nombre` varchar(50) NOT NULL,
  `usu_apellido` varchar(50) NOT NULL,
  `usu_correo` varchar(50) NOT NULL,
  `usu_telefono` varchar(50) NOT NULL,
  `usu_pais_residencia` varchar(10) DEFAULT NULL,
  `usu_residencia` varchar(256) NOT NULL,
  `usu_direccion` varchar(255) NOT NULL,
  `usu_tipo_documento` varchar(50) NOT NULL,
  `usu_documento` varchar(50) NOT NULL,
  `usu_contraseña` varchar(255) NOT NULL,
  `usu_termino` int(10) NOT NULL,
  `rol_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`usu_id`, `usu_nombre`, `usu_apellido`, `usu_correo`, `usu_telefono`, `usu_pais_residencia`, `usu_residencia`, `usu_direccion`, `usu_tipo_documento`, `usu_documento`, `usu_contraseña`, `usu_termino`, `rol_id`) VALUES
(1, 'nombre ', 'apellido ', 'ivan@gmail.com ', '2134123 ', 'werqw', 'waer', 'a', 'Cédula ciudadania ', '2341234 ', '$2y$10$C8zSxoG/5NwKg17ilutP2.mi8KjKNL1wyfbtr21P7TD9XASu7MYpi', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `capacitacion`
--
ALTER TABLE `capacitacion`
  ADD PRIMARY KEY (`capa_id`);

--
-- Indices de la tabla `cupo`
--
ALTER TABLE `cupo`
  ADD PRIMARY KEY (`id_cupo`),
  ADD KEY `capa_id` (`capa_id`),
  ADD KEY `usu_id` (`usu_id`);

--
-- Indices de la tabla `tbl_rol`
--
ALTER TABLE `tbl_rol`
  ADD PRIMARY KEY (`rol_id`);

--
-- Indices de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD PRIMARY KEY (`usu_id`),
  ADD KEY `rol_id` (`rol_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `capacitacion`
--
ALTER TABLE `capacitacion`
  MODIFY `capa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cupo`
--
ALTER TABLE `cupo`
  MODIFY `id_cupo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  MODIFY `usu_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cupo`
--
ALTER TABLE `cupo`
  ADD CONSTRAINT `cupo_ibfk_1` FOREIGN KEY (`capa_id`) REFERENCES `capacitacion` (`capa_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cupo_ibfk_2` FOREIGN KEY (`usu_id`) REFERENCES `tbl_usuario` (`usu_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD CONSTRAINT `tbl_usuario_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `tbl_rol` (`rol_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
