-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-07-2017 a las 04:50:32
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `perurios_escuela`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombre`, `email`, `created_at`, `updated_at`) VALUES
(null, 'andre', 'andre_rivera@hotmail.com', '2017-07-10 04:16:25', '2017-07-10 04:16:25'),
(null, 'Jose', 'jose@hotmail.com', '2017-07-10 04:18:43', '2017-07-10 04:18:43'),
(null, 'eduardo', 'eduardo@hotmail.com', '2017-07-11 02:53:33', '2017-07-11 02:53:33'),
(null, 'karina', 'karina@hotmail.com', '2017-07-11 03:50:13', '2017-07-11 04:33:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE `notas` (
  `id` int(11) NOT NULL,
  `curso` varchar(45) DEFAULT NULL,
  `nota` int(11) DEFAULT NULL,
  `alumno_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `notas`
--

INSERT INTO `notas` (`id`, `curso`, `nota`, `alumno_id`, `created_at`, `updated_at`) VALUES
(null, 'Html', 20, 22, '2017-07-10 04:18:22', '2017-07-10 04:18:31'),
(null, 'Corel Draw', 18, 23, '2017-07-10 04:19:32', '2017-07-10 04:45:54'),
(null, 'Photoshop', 20, 23, '2017-07-10 04:19:48', '2017-07-10 04:19:48');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- Indices de la tabla `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_notas_alumnos_idx` (`alumno_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT de la tabla `notas`
--
ALTER TABLE `notas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `notas`
--
ALTER TABLE `notas`
  ADD CONSTRAINT `fk_notas_alumnos` FOREIGN KEY (`alumno_id`) REFERENCES `alumnos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
