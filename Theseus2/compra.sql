-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-11-2016 a las 08:07:53
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `comprado`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `id` int(11) NOT NULL,
  `user` varchar(250) NOT NULL,
  `pass` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `nart` varchar(250) NOT NULL,
  `direccion` varchar(250) NOT NULL,
  `pasadmin` varchar(250) NOT NULL,
  `rol` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`id`, `user`, `pass`, `email`,`nart`,`direccion`, `pasadmin`, `rol`) VALUES
(1, 'Administrador', '000000', 'admin@gmail.com','000000','000000', '123456', 1),
(2, 'Joseph', '12345', 'josephg059@gmail.com','000000','000000', '', 2),
(4, 'joseph', '12345', 'joseph@gmail.com', '000000','000000','', 2),
(5, 'paul', '1234', 'paul@gmail.com','000000','000000', '', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
