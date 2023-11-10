-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-11-2023 a las 16:28:16
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `whiskers`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pet_user`
--

CREATE TABLE `pet_user` (
  `id_pet` int(11) NOT NULL,
  `id_person` varchar(20) NOT NULL,
  `type_pet` int(11) NOT NULL,
  `name_pet` varchar(100) NOT NULL,
  `age_pet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pet_user`
--

INSERT INTO `pet_user` (`id_pet`, `id_person`, `type_pet`, `name_pet`, `age_pet`) VALUES
(1, '21111', 1, 'kotri', 3),
(2, '12222', 0, 'Camila', 12),
(3, '21111', 0, 'Canela', 5),
(4, '21111', 0, 'Danka', 1),
(5, '13333', 2, 'Canela', 7),
(6, '21111', 1, 'Anubis Herrera', 3),
(7, '14444', 1, 'Patines', 3),
(8, '14444', 1, 'Feita', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(25) NOT NULL,
  `id_person` varchar(20) NOT NULL,
  `names` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `birth` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `id_person`, `names`, `lastname`, `birth`, `email`, `pass`) VALUES
(1, '12222', 'Luisa ', 'Herrera', '2023-11-01', 'luisa@gmail.com', 'MTExMTEx'),
(0, '13333', 'Kamila', 'Herrera', '2023-11-03', 'kamila@gmail.com', 'MTExMTEx'),
(0, '14444', 'Manuel', 'Herrera', '2023-01-07', 'manuel@gmail.com', 'MTExMTEx'),
(2, '21111', 'lulu', 'Herrera', '2023-11-02', 'lulu@gmail.com', 'MTExMTEx');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pet_user`
--
ALTER TABLE `pet_user`
  ADD PRIMARY KEY (`id_pet`),
  ADD KEY `id_person` (`id_person`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_person`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pet_user`
--
ALTER TABLE `pet_user`
  MODIFY `id_pet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pet_user`
--
ALTER TABLE `pet_user`
  ADD CONSTRAINT `pet_user_ibfk_1` FOREIGN KEY (`id_person`) REFERENCES `users` (`id_person`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
