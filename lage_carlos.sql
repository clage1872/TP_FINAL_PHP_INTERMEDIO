-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-08-2022 a las 19:01:43
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lage_carlos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id` int(11) NOT NULL,
  `usuario` varchar(10) NOT NULL,
  `clave` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id`, `usuario`, `clave`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pasajes`
--

CREATE TABLE `pasajes` (
  `id` int(11) NOT NULL,
  `documento` varchar(11) NOT NULL,
  `destino` varchar(200) NOT NULL,
  `clase` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `descripcion` text NOT NULL,
  `imagen` blob NOT NULL,
  `estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pasajes`
--

INSERT INTO `pasajes` (`id`, `documento`, `destino`, `clase`, `fecha`, `descripcion`, `imagen`, `estado`) VALUES
(22, '7777777', 'brani, singapur', 'ejecutiva', '2022-08-17 21:28:53', 'Prueba completa con descripcion.', '', 'finalizado'),
(23, '8888888', 'tokio, japon', 'ejecutiva', '2022-08-17 21:32:27', 'Con descripcion tokio.', '', 'proceso'),
(24, '5555555', 'italia, roma', 'ejecutiva', '2022-08-17 21:48:01', '', '', 'finalizado'),
(25, '5555555', 'brani, singapur', 'prueba.jpg', '0000-00-00 00:00:00', '2022-08-18 12:40:30', 0x556c74696d6f20636f6d656e746172696f, 'proceso'),
(26, '9999999', 'brazil, rio de janeiro', 'grafico.jpg', '0000-00-00 00:00:00', '2022-08-18 12:43:56', 0x4d6520766f7920612072696f212121, 'proceso'),
(27, '1111111', 'italia, roma', 'escudo_nacional.png', '0000-00-00 00:00:00', '2022-08-18 12:58:56', 0x707275656261, 'proceso'),
(28, '1111111', 'brazil, rio de janeiro', 'prueba.jpg', '0000-00-00 00:00:00', '2022-08-18 13:08:06', 0x6866686668, 'proceso'),
(29, '1111111', 'brazil, rio de janeiro', 'grafico.jpg', '0000-00-00 00:00:00', '2022-08-18 13:16:39', '', 'proceso'),
(30, '3333333', 'brazil, rio de janeiro', 'escudo_nacional.png', '0000-00-00 00:00:00', '2022-08-18 13:20:19', 0x67666466676466, 'proceso');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pasajes`
--
ALTER TABLE `pasajes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pasajes`
--
ALTER TABLE `pasajes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
