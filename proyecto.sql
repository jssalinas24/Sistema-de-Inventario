create database proyecto;
use proyecto;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-06-2022 a las 04:21:45
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
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(10) NOT NULL,
  `categoria` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `categoria`) VALUES
(1, 'Confitería'),
(2, 'Licores y aperitivos'),
(3, 'Canasta familiar'),
(4, 'Cigarrería'),
(5, 'Bebidas gaseosas y otros'),
(6, 'Limpieza y aseo hogar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasificacion`
--

CREATE TABLE `clasificacion` (
  `id_clasificacion` int(10) NOT NULL,
  `clasificacion` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clasificacion`
--

INSERT INTO `clasificacion` (`id_clasificacion`, `clasificacion`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(10) NOT NULL,
  `id_tipo_documento` int(10) NOT NULL,
  `numero_documento` varchar(30) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `id_tipo_documento`, `numero_documento`, `nombre`, `direccion`, `telefono`) VALUES
(1, 1, '2947852', 'Carlos Herrera', 'Carrera 51A', '3138348592'),
(2, 2, '100796442246357', 'Andrés Mora', 'Calle 55C', '3154789560'),
(3, 3, 'ZAB000254', 'Jhon Briceño', 'Diagonal 85B', '3148962120'),
(4, 4, '2974136', 'Dustin Morris', 'Transversal 65', '3204568792'),
(5, 5, '1024354789', 'Ángela Martínez', 'Carrera 57Z', '3115237896'),
(6, 6, '1000564798', 'Estiben Morales', 'Diagonal 95A', '3102214569');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle`
--

CREATE TABLE `detalle` (
  `id_detalle` int(30) NOT NULL,
  `id_factura` int(30) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `precio_unidad_producto` decimal(30,0) NOT NULL,
  `cantidad_venta_producto` decimal(30,0) NOT NULL,
  `monto_total_producto` decimal(30,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detalle`
--

INSERT INTO `detalle` (`id_detalle`, `id_factura`, `id_producto`, `precio_unidad_producto`, `cantidad_venta_producto`, `monto_total_producto`) VALUES
(1, 1, 1, '10000', '2', '20000'),
(2, 2, 2, '37000', '1', '37000'),
(3, 3, 3, '9000', '2', '18000'),
(4, 4, 4, '72000', '1', '72000'),
(5, 5, 5, '2000', '3', '6000'),
(6, 6, 6, '13000', '2', '26000'),
(7, 6, 4, '4000', '50', '300000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `id_factura` int(10) NOT NULL,
  `id_cliente` int(10) NOT NULL,
  `descuento` varchar(20) DEFAULT NULL,
  `fecha` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`id_factura`, `id_cliente`, `descuento`, `fecha`) VALUES
(1, 1, '10%', '2021-10-26 02:11:25'),
(2, 2, '15%', '2021-10-26 02:11:25'),
(3, 3, '20%', '2021-10-26 02:11:57'),
(4, 4, '30%', '2021-10-26 02:11:57'),
(5, 5, '5%', '2021-10-26 02:12:31'),
(6, 6, '5%', '2021-10-26 02:12:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel`
--

CREATE TABLE `nivel` (
  `id_nivel` int(10) NOT NULL,
  `nombre_nivel` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `nivel`
--

INSERT INTO `nivel` (`id_nivel`, `nombre_nivel`) VALUES
(1, 'Administrador'),
(2, 'Empleado'),
(3, 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(10) NOT NULL,
  `id_proveedor` int(30) NOT NULL,
  `id_clasificacion` int(30) NOT NULL,
  `id_categoria` int(10) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `precio` decimal(50,0) NOT NULL,
  `stock` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `id_proveedor`, `id_clasificacion`, `id_categoria`, `nombre`, `precio`, `stock`) VALUES
(1, 1, 1, 1, 'Galleta Festival 12 Unidades', '10000', 60),
(2, 2, 2, 2, 'Aguardiente Nectar 1lt', '37000', 30),
(3, 3, 3, 3, 'Sardina Van Camps 425g', '9000', 50),
(4, 4, 1, 4, 'Cigarrillo Rothmans Cartón 20 Paquetes', '72000', 100),
(5, 5, 1, 5, 'Coca Cola 1.5lt', '2000', 50),
(6, 6, 2, 6, 'Paca Papel Higienico 12 Rollos', '13000', 40);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_proveedor` int(30) NOT NULL,
  `nombre` varchar(70) DEFAULT NULL,
  `NIT` varchar(20) DEFAULT NULL,
  `ciudad` varchar(75) DEFAULT NULL,
  `direccion` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_proveedor`, `nombre`, `NIT`, `ciudad`, `direccion`) VALUES
(1, 'Grupo Nutresa', '890.900.050-1', 'Medellín', 'Carrera 43A #1A Sur '),
(2, 'Empresa De Licores D', '899.999.084-8', 'Cota', 'Autopista Medellin K'),
(3, 'Vanida S.A.S', '901.394.547-5', 'Bogotá', 'Calle 79B #8-10'),
(4, 'British American Tobacco Colombia S.A.S', '900.462.511-9', 'Bogotá', 'Carrera 72 #80-94'),
(5, 'Coca Coca Bebidas de Colombia S.A', '830.047.819-9', 'Bogotá', 'Carrera 45 #103-60'),
(6, 'Productos Familia S.A', '890.900.161-9', 'Medellín', 'Carrera 50 #8 Sur 11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

CREATE TABLE `tipo_documento` (
  `id_tipo_documento` int(10) NOT NULL,
  `descripcion` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_documento`
--

INSERT INTO `tipo_documento` (`id_tipo_documento`, `descripcion`) VALUES
(1, 'Cédula de Ciudadanía'),
(2, 'P.E.P'),
(3, 'Pasaporte'),
(4, 'Cédula de Extranjería'),
(5, 'NUIP'),
(6, 'NIP');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(10) NOT NULL,
  `id_nivel` int(10) NOT NULL,
  `nombre_usuario` varchar(300) NOT NULL,
  `clave` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `id_nivel`, `nombre_usuario`, `clave`) VALUES
(1, 1, 'jssalinas24', '$2y$10$UJ8ffigUCt/BiZHIcaJxee.AV83wEDIon8Uvw5c3gqPef08XmS37m'),
(2, 1, 'adbriceño20', '$2y$10$yBTcJy.kBFFYevVgVnIvF.zYqpUX4uUjvQ0zkp7gvnPT4SSWq4eSe'),
(7, 3, 'estandar1', '$2y$10$DXh2wWyQINxSXJQKmOjg8uFRWz/sQrK2wh/nYDuATu9o1PN5vmhNS'),
(10, 2, 'Hello Kitty', '$2y$10$qWtQ0Z8A8GLezquIlVcS4.EMn9k/Lber4CIyivWNjSShsEfokrAuC'),
(11, 1, 'Angela101', '$2y$10$tJ.c8n9LwxNn2APWMq1DG.9vygQMQbAvF//3W4lItqVe86zIq/eLC');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `clasificacion`
--
ALTER TABLE `clasificacion`
  ADD PRIMARY KEY (`id_clasificacion`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`),
  ADD UNIQUE KEY `numero_documento` (`numero_documento`),
  ADD KEY `fk_tipo_documento_cliente` (`id_tipo_documento`);

--
-- Indices de la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD PRIMARY KEY (`id_detalle`),
  ADD KEY `fk_factura_detalle` (`id_factura`),
  ADD KEY `fk_producto_detalle` (`id_producto`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`id_factura`),
  ADD KEY `fk_cliente_factura` (`id_cliente`);

--
-- Indices de la tabla `nivel`
--
ALTER TABLE `nivel`
  ADD PRIMARY KEY (`id_nivel`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `fk_proveedor_producto` (`id_proveedor`),
  ADD KEY `fk_clasificacion_producto` (`id_clasificacion`),
  ADD KEY `fk_categoria_producto` (`id_categoria`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_proveedor`),
  ADD UNIQUE KEY `NIT` (`NIT`);

--
-- Indices de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  ADD PRIMARY KEY (`id_tipo_documento`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `fk_nivel_usuario` (`id_nivel`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `clasificacion`
--
ALTER TABLE `clasificacion`
  MODIFY `id_clasificacion` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `detalle`
--
ALTER TABLE `detalle`
  MODIFY `id_detalle` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `id_factura` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `nivel`
--
ALTER TABLE `nivel`
  MODIFY `id_nivel` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_proveedor` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  MODIFY `id_tipo_documento` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `fk_tipo_documento_cliente` FOREIGN KEY (`id_tipo_documento`) REFERENCES `tipo_documento` (`id_tipo_documento`);

--
-- Filtros para la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD CONSTRAINT `fk_factura_detalle` FOREIGN KEY (`id_factura`) REFERENCES `factura` (`id_factura`),
  ADD CONSTRAINT `fk_producto_detalle` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `fk_cliente_factura` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `fk_categoria_producto` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`),
  ADD CONSTRAINT `fk_clasificacion_producto` FOREIGN KEY (`id_clasificacion`) REFERENCES `clasificacion` (`id_clasificacion`),
  ADD CONSTRAINT `fk_proveedor_producto` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`id_proveedor`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_nivel_usuario` FOREIGN KEY (`id_nivel`) REFERENCES `nivel` (`id_nivel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
