-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-02-2023 a las 22:19:54
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pruebabd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doc_documento`
--

CREATE TABLE `doc_documento` (
  `DOC_ID` int(11) NOT NULL,
  `DOC_NOMBRE` varchar(60) NOT NULL,
  `DOC_CODIGO` int(11) NOT NULL,
  `DOC_CONTENIDO` varchar(4000) NOT NULL,
  `DOC_ID_TIPO` int(11) NOT NULL,
  `DOC_ID_PROCESO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pro_proceso`
--

CREATE TABLE `pro_proceso` (
  `PRO_ID` int(11) NOT NULL,
  `PRO_PREFIJO` varchar(20) NOT NULL,
  `PRO_NOMBRE` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tip_tipo_doc`
--

CREATE TABLE `tip_tipo_doc` (
  `TIP_ID` int(11) NOT NULL,
  `TIP_NOMBRE` varchar(60) NOT NULL,
  `TIP_PREFIJO` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `doc_documento`
--
ALTER TABLE `doc_documento`
  ADD PRIMARY KEY (`DOC_ID`),
  ADD KEY `DOC_ID_TIPO` (`DOC_ID_TIPO`,`DOC_ID_PROCESO`),
  ADD KEY `DOC_ID_PROCESO` (`DOC_ID_PROCESO`);

--
-- Indices de la tabla `pro_proceso`
--
ALTER TABLE `pro_proceso`
  ADD PRIMARY KEY (`PRO_ID`);

--
-- Indices de la tabla `tip_tipo_doc`
--
ALTER TABLE `tip_tipo_doc`
  ADD PRIMARY KEY (`TIP_ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `doc_documento`
--
ALTER TABLE `doc_documento`
  MODIFY `DOC_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pro_proceso`
--
ALTER TABLE `pro_proceso`
  MODIFY `PRO_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tip_tipo_doc`
--
ALTER TABLE `tip_tipo_doc`
  MODIFY `TIP_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `doc_documento`
--
ALTER TABLE `doc_documento`
  ADD CONSTRAINT `doc_documento_ibfk_1` FOREIGN KEY (`DOC_ID_PROCESO`) REFERENCES `pro_proceso` (`PRO_ID`),
  ADD CONSTRAINT `doc_documento_ibfk_2` FOREIGN KEY (`DOC_ID_TIPO`) REFERENCES `tip_tipo_doc` (`TIP_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
