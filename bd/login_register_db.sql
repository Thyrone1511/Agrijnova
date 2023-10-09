-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-10-2023 a las 05:32:57
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login_register_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `celular` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(150) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `celular`, `correo`, `clave`) VALUES
(13, 'Franco', 'Malpartida ', '984417485', '71090644@contiental.edu.pe', '301dede28fdd32304c688bca00ec6f9f426e98e147bf55a2995ddbf8ddd443b80b01c19d53b7f22161b58f19b2b5841ad09f824f788993b7ceccd3138ddda8e8'),
(14, 'Jose', 'Vargas', '915478521', 'jose@gmail.com', 'fb131bc57a477c8c9d068f1ee5622ac304195a77164ccc2d75d82dfe1a727ba8d674ed87f96143b2b416aacefb555e3045c356faa23e6d21de72b85822e39fdd'),
(15, 'Pedro', 'Cortez', '914253478', 'pedro@gmail.com', '5f28f24f5520230fd1e66ea6ac649e9f9637515f516b2ef74fc90622b60f165eafca8f34db8471b85b9b4a2cdf72f75099ae0eb8860c4f339252261778d406eb'),
(16, 'Ana', 'Lopez', '985236478', 'ana@gmail.com', '5e3155774d39d97c5f9e17c108c2b3e0485a43ae34ebd196f61a6f8bf732ef71a49e5710594cfc7391db114edf99f5da3ed96ef1d6ca5e598e85f91bd41e7eeb'),
(17, 'Diana', 'Guzman', '945213654', 'diana@gmail.com', 'a5e4209e841321ae706ee84b94b38088a18acc7643250e4bb0af543c9d7599a0854c8e08c2283ec0ee338806cca171206340a510c5c406beb6ec3b6f18150c4b'),
(18, 'Cielo', 'Flores', '995412563', 'cielo@gmail.com', '4e2589ee5a155a86ac912a5d34755f0e3a7d1f595914373da638c20fecd7256ea1647069a2bb48ac421111a875d7f4294c7236292590302497f84f19e7227d80'),
(19, 'Jayro', 'Huayamares', '910184418', 'jayro@gmail.com', '2acdcd7a6497cc2702c9f3cf87d4ac93562676841bc518ccd7f0a0061b4a58c4928b9115e2fdc32dfe3e3bdf80a2119a6d39c3125b16e0e7085a65c3777585bc'),
(20, 'Pepe', 'Vargas', '999999999', 'pepe@gmail.com', '4fcfd9010619e20c3f94a00d90503ea807bc0cb95c590fdfc6386af60531d16f7ce7473a5d06aff5ec0998895c66d53ce2d570479f94286c90f15d318b9cd992');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
