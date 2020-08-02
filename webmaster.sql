-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 01-08-2020 a las 13:55:37
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `webmaster`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id_admin` int(10) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` varchar(150) NOT NULL,
  `nom_empresa` varchar(150) NOT NULL,
  `celular` int(15) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `logo` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id_admin`, `user`, `pass`, `nom_empresa`, `celular`, `correo`, `logo`) VALUES
(5, 'admin', 'admin123', 'guti entregas', 7751000, 'guti@gmail.com', 0x6c6f676f5f656d70726573612e6a706567);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_cat` int(10) NOT NULL,
  `nom_cat` varchar(200) DEFAULT NULL,
  `titulo` varchar(200) NOT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `estado` tinyint(1) NOT NULL,
  `foto_categoria` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_cat`, `nom_cat`, `titulo`, `descripcion`, `estado`, `foto_categoria`) VALUES
(1, 'Restaurantes', 'Comidas Rapidas, Pollos, Pizzas', 'podemos entregar a domicilio cualquier alimento', 1, 0x72657374617572616e74652e6a7067),
(2, 'Farmacias', 'Medicamentos en Gral ', 'Se entrega medicamentos validados a nivel departamental delivery', 1, 0x6661726d616369612e6a7067),
(3, 'Tiendas de Barrio', 'ENTREGA A  DOMICILIO', 'Se Ofrece Todo tipo de variedad de productos de tiendas de barrio', 1, 0x61626172726f74652e6a7067);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id_empresa` int(10) NOT NULL,
  `nom_empresa` varchar(250) DEFAULT NULL,
  `cel_empresa` int(20) DEFAULT NULL,
  `dir_empresa` varchar(250) DEFAULT NULL,
  `logo_empresa` longblob DEFAULT NULL,
  `estado` tinyint(1) NOT NULL,
  `cat_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `nom_empresa`, `cel_empresa`, `dir_empresa`, `logo_empresa`, `estado`, `cat_id`) VALUES
(36, 'TosTiTos', 78484848, 'av. franco valle entre calle 1 y 2', 0x696d67312e706e67, 1, 1),
(37, 'Farmacia Health', 777455122, 'Calle los pinos zona 3 de octubre', 0x696d67322e6a7067, 1, 2),
(38, 'Ferreteria Longavi', 70000555, 'av. illimani zona 16 de julio', 0x696d67332e706e67, 1, 3),
(39, 'abarrotes don COCO', 7855566, 'av. don pedro salazar entre pinilla', 0x636f636f2e706e67, 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicidad`
--

CREATE TABLE `publicidad` (
  `id_public` int(10) NOT NULL,
  `nom_servicio` varchar(500) DEFAULT NULL,
  `desp_servicio` varchar(500) DEFAULT NULL,
  `precio` int(10) DEFAULT NULL,
  `foto` longblob DEFAULT NULL,
  `estado_public` tinyint(1) NOT NULL,
  `empresa_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `publicidad`
--

INSERT INTO `publicidad` (`id_public`, `nom_servicio`, `desp_servicio`, `precio`, `foto`, `estado_public`, `empresa_id`) VALUES
(8, 'productos de gel ', 'Tratamiento para la piel de mujer suavisante', 50, 0x70726f647563746f6661726d616369612e6a7067, 1, 37),
(9, 'Alicates americanos', 'Alicates Originales importados y diraderos ', 35, 0x416c6963617465732e6a7067, 1, 38),
(10, 'amburguesas doble hupper', 'LLevamos amburguesas a domicilio con todo la carne y queso en relleno', 50, 0x616d6275726775657361732e6a7067, 1, 36),
(11, 'pizzas mosalera', 'Pizza Americana, queso mozzarella, jamón y pimiento', 45, 0x70697a7a61732e6a7067, 1, 36),
(12, 'Frappes', 'Frappes de diferentes sabores, LLevamos a Domicilio', 36, 0x667261707065732d64652d636166652e6a7067, 1, 36),
(13, 'Paquete de CocaCola', 'Paquetes de Coca-Cola llevamos a Domicilio Delivery', 50, 0x636f6361636f6c612e6a7067, 1, 39);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_empresa`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indices de la tabla `publicidad`
--
ALTER TABLE `publicidad`
  ADD PRIMARY KEY (`id_public`),
  ADD KEY `fk_empresa` (`empresa_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_cat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id_empresa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `publicidad`
--
ALTER TABLE `publicidad`
  MODIFY `id_public` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD CONSTRAINT `empresa_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categoria` (`id_cat`);

--
-- Filtros para la tabla `publicidad`
--
ALTER TABLE `publicidad`
  ADD CONSTRAINT `fk_empresa` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id_empresa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
