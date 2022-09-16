-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-09-2022 a las 06:00:20
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
-- Base de datos: `proyectoBascula`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codigo_miembros`
--

CREATE TABLE `codigo_miembros` (
  `id` int(11) NOT NULL,
  `codigo_miembro` varchar(5) NOT NULL,
  `rol_miembro` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `codigo_miembros`
--

INSERT INTO `codigo_miembros` (`id`, `codigo_miembro`, `rol_miembro`) VALUES
(1, '1a2b3', 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosarduino`
--

CREATE TABLE `datosarduino` (
  `id` int(11) NOT NULL,
  `medida` varchar(20) NOT NULL,
  `valor` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datosarduino`
--

INSERT INTO `datosarduino` (`id`, `medida`, `valor`) VALUES
(1, 'gramo', '1000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_usuarios`
--

CREATE TABLE `login_usuarios` (
  `id_usuario` int(11) NOT NULL,
  `username_usuario` varchar(16) NOT NULL,
  `nombre_usuario` varchar(20) NOT NULL,
  `apellido_usuario` varchar(20) NOT NULL,
  `codigo_miembro` varchar(10) NOT NULL,
  `correo_usuario` varchar(50) NOT NULL,
  `password_usuario` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `login_usuarios`
--

INSERT INTO `login_usuarios` (`id_usuario`, `username_usuario`, `nombre_usuario`, `apellido_usuario`, `codigo_miembro`, `correo_usuario`, `password_usuario`) VALUES
(1, 'admin', 'Jefferson', 'Rios', '1a2b3', 'jeffrios@gmail.com', 'b2tZUm9rVXFvcVpmbUI0azdYV0dxQT09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `precio_materiales`
--

CREATE TABLE `precio_materiales` (
  `id` int(11) NOT NULL,
  `material` varchar(30) NOT NULL,
  `precio` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `precio_materiales`
--

INSERT INTO `precio_materiales` (`id`, `material`, `precio`) VALUES
(1, 'PET (botellas plásticas)', '0.75'),
(2, 'Cartón', '0.11'),
(3, 'Vidrio', '0.08'),
(4, 'Chatarra electrónica', '0.09'),
(5, 'Plástico', '0.17'),
(6, 'Aluminio', '0.53'),
(7, 'Papel blanco', '0.18'),
(8, 'Papel mixto', '0.10'),
(9, 'Chatarra', '0.14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `cedula` varchar(10) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `direccion` varchar(150) DEFAULT NULL,
  `material` varchar(30) NOT NULL,
  `peso` varchar(10) NOT NULL,
  `precio` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `codigo_miembros`
--
ALTER TABLE `codigo_miembros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datosarduino`
--
ALTER TABLE `datosarduino`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `login_usuarios`
--
ALTER TABLE `login_usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `precio_materiales`
--
ALTER TABLE `precio_materiales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `codigo_miembros`
--
ALTER TABLE `codigo_miembros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `datosarduino`
--
ALTER TABLE `datosarduino`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT de la tabla `login_usuarios`
--
ALTER TABLE `login_usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `precio_materiales`
--
ALTER TABLE `precio_materiales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
