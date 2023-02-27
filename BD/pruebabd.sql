-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-02-2023 a las 04:48:23
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
  `DOC_CODIGO` varchar(11) NOT NULL,
  `DOC_CONTENIDO` varchar(4000) NOT NULL,
  `DOC_ID_TIPO` int(11) NOT NULL,
  `DOC_ID_PROCESO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `doc_documento`
--

INSERT INTO `doc_documento` (`DOC_ID`, `DOC_NOMBRE`, `DOC_CODIGO`, `DOC_CONTENIDO`, `DOC_ID_TIPO`, `DOC_ID_PROCESO`) VALUES
(1, 'documento 1', 'POL-LENG-1', 'asdfas', 5, 4),
(2, 'documento 2', 'REG-LENG-2', 'texto libro 2', 3, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pro_proceso`
--

CREATE TABLE `pro_proceso` (
  `PRO_ID` int(11) NOT NULL,
  `PRO_NOMBRE` varchar(60) NOT NULL,
  `PRO_PREFIJO` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pro_proceso`
--

INSERT INTO `pro_proceso` (`PRO_ID`, `PRO_NOMBRE`, `PRO_PREFIJO`) VALUES
(1, 'INGENIERIA', 'ING'),
(2, 'MEDICINA', 'MED'),
(3, 'ARTES', 'ART'),
(4, 'LENGUAS EXTRANJERAS', 'LENG'),
(5, 'DERECHO', 'DER');

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
  `usu_termino` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`usu_id`, `usu_nombre`, `usu_apellido`, `usu_correo`, `usu_telefono`, `usu_pais_residencia`, `usu_residencia`, `usu_direccion`, `usu_tipo_documento`, `usu_documento`, `usu_contraseña`, `usu_termino`) VALUES
(1, 'IVAN ALEXIS ', 'URBINA MELO', 'iaurbina04@misena.edu.co', '3007264043', 'colombia', 'cali', 'a', 'Cédula ciudadania ', '11111', '$2y$10$C8zSxoG/5NwKg17ilutP2.mi8KjKNL1wyfbtr21P7TD9XASu7MYpi', 1);

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
-- Volcado de datos para la tabla `tip_tipo_doc`
--

INSERT INTO `tip_tipo_doc` (`TIP_ID`, `TIP_NOMBRE`, `TIP_PREFIJO`) VALUES
(1, 'INSTRUCTIVO', 'INST'),
(2, 'MANUAL', 'MAN'),
(3, 'REGLAMENTO', 'REG'),
(4, 'PROGRAMAS', 'PRO'),
(5, 'POLITICAS', 'POL');

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
  MODIFY `DOC_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `pro_proceso`
--
ALTER TABLE `pro_proceso`
  MODIFY `PRO_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tip_tipo_doc`
--
ALTER TABLE `tip_tipo_doc`
  MODIFY `TIP_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
