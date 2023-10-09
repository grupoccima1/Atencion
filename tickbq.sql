-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-04-2023 a las 16:52:32
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tickbq`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `desarrollo` varchar(255) NOT NULL,
  `rol_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `username`, `password`, `apellido`, `correo`, `telefono`, `desarrollo`, `rol_id`) VALUES
(1, 'alan', '$2y$10$GZ6iBAD0g8Ggb9vPLR7Ek.eGvy2MJzKAVJ.vDQV.DUTXq74xmDGq6', '', '0', '', '', 1),
(5, 'alejandro', '$2y$10$5xcMHmNnOXoJxXnSNZV3AO.9cZJrgUVOqkKYsLZP9tIahqT8/3h12', 'leal', 'leal@gccima.com', '4461202318', 'navetec', 1),
(6, 'Jose ', '$2y$10$E5UI9bmoM3of1/MpF3kJzelGFC5oGWhAUbT0e14JGVSFFv8tO5cBm', 'Renovato', 'n_01_047@outlook.com', '7224736817', 'Hola', 1),
(7, 'Jose', '$2y$10$J/7.frwA7ATkz00Jab5gHeMfTMhI6.0NuSifvignkraPNtFcxP4eq', 'Renovato', 'n_01_047@outlook.com', '7224736817', 'Adios', 1),
(8, 'Antonio ', '$2y$10$cNcWijXLo9UDuQA9yNNRIO1PMW.6kFLoCYEfKTSJjYD9KAztl5I9O', 'Hiedra', 'antuan.reno047@gmail.com', '7224736817', 'AdiÃ³s ', 1),
(9, 'diego', '$2y$10$UeZXwIbdTl3QbmTlNwcOZuTB0ePDAaXkMiyrEsx2lxNjfKsppN4wy', 'dominguez', 'diego.dguezz@gmail.com', '46612502318', 'navetec', 1),
(10, 'Adrian', '$2y$10$9nJoMTcNCnZXi96Rwqoax.v/PsL.LByvTk/1h1l8OSyRD5jj1iff.', 'Fernandez', 'joedoe@example.com', '1452367895', 'navetec', 0),
(11, 'diego', '$2y$10$qeZj6LpN1rbcFUAvHS1gu.PMcrjR3HKU/i8pZ7sbOBFMODwMMuX7m', 'Zacapala', 'adcdefg@abcdefg', '5588965478', 'navetec', 0),
(12, 'Norma', '$2y$10$9ln55lFWjfLq9OPfSdivfu8S0Thgo1apzWJ.5jt3r1nQCpGmOte9S', 'Dominguez ', 'normis@gmail.com', '4561230258', 'navetec', 0),
(13, 'Carmen ', '$2y$10$UzD7Qn3z2zv3dCmj6ut6nuQ7d4ajtIRhzMi9bD318pYMWx9SqH2qm', 'Valencia', 'valencia@gmail.com', '7412365489', 'navetec', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `td_ticketdetalle`
--

CREATE TABLE `td_ticketdetalle` (
  `tickd_id` int(11) NOT NULL,
  `tick_id` int(11) NOT NULL,
  `usu_id` int(11) NOT NULL,
  `tickd_descrip` mediumtext NOT NULL,
  `fech_crea` datetime NOT NULL,
  `est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `td_ticketdetalle`
--

INSERT INTO `td_ticketdetalle` (`tickd_id`, `tick_id`, `usu_id`, `tickd_descrip`, `fech_crea`, `est`) VALUES
(1, 1, 3, 'Te respondo', '2023-01-11 18:11:41', 1),
(2, 1, 1, 'Usuario respondiendo', '2023-01-11 11:12:17', 1),
(3, 1, 3, 'Resolución', '2023-01-11 18:12:44', 1),
(4, 1, 1, 'Gracias', '2023-01-11 18:13:11', 1),
(5, 1, 3, 'Favor de cerrar ticket', '2023-01-11 18:13:57', 1),
(6, 1, 3, 'Duplicado', '2023-01-11 18:13:57', 1),
(7, 1, 1, 'Duplicado', '2023-01-11 18:13:11', 1),
(8, 1, 1, 'Duplicado 2', '2023-01-11 18:13:11', 1),
(9, 2, 3, 'Hola', '2023-01-11 18:11:41', 1),
(10, 2, 1, 'Adios', '2023-01-11 18:13:11', 1),
(11, 1, 1, 'Test', '2023-03-01 18:51:17', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_categoria`
--

CREATE TABLE `tm_categoria` (
  `cat_id` int(11) NOT NULL,
  `cat_nom` varchar(150) NOT NULL,
  `est` int(11) NOT NULL,
  `resolutor` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tm_categoria`
--

INSERT INTO `tm_categoria` (`cat_id`, `cat_nom`, `est`, `resolutor`) VALUES
(1, 'Contrato', 1, 'Dulce Mendoza'),
(2, 'Dudas y Aclaraciones', 1, 'Katia Aguilar'),
(3, 'Cancelaciones', 1, 'Katia Aguilar'),
(4, 'Convenios', 0, 'Katia Aguilar'),
(5, 'Recesion ', 0, 'Katia Aguilar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_subcategoria`
--

CREATE TABLE `tm_subcategoria` (
  `subcat_id` int(11) NOT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `subcat_nom` varchar(150) NOT NULL,
  `est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tm_subcategoria`
--

INSERT INTO `tm_subcategoria` (`subcat_id`, `cat_id`, `subcat_nom`, `est`) VALUES
(1, 1, 'Entregado al cliente', 1),
(2, 1, 'Firmado por RL', 1),
(3, 1, 'Entregado por Medio de Paquetería', 1),
(4, 2, 'Estado de cuenta', 1),
(5, 2, 'Recibos de pago', 1),
(6, 2, 'Facturas', 1),
(7, 2, 'Avances de Obra', 1),
(8, 2, 'Entregas', 1),
(9, 2, 'Otras', 1),
(10, 3, 'Sin contrato', 1),
(11, 3, 'Con contrato', 1),
(12, 4, 'Modificatorios (Error Nombre, Numero, sin cobro)', 0),
(13, 4, 'Traspasos', 0),
(14, 4, 'Cesión de Derechos – Restructuracion', 0),
(15, 4, 'Saldo Insolutos o Vencidos', 0),
(16, 4, 'restructuración de contrato', 0),
(17, 5, 'Dejar de Pagar Mensualidades', 0),
(18, 2, 'Recision de Contrato (Convenio de Terminación Anticipada)', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_ticket`
--

CREATE TABLE `tm_ticket` (
  `tick_id` int(11) NOT NULL,
  `usu_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `subcat_id` int(11) NOT NULL,
  `tick_titulo` varchar(250) NOT NULL,
  `email` varchar(150) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `area` varchar(50) DEFAULT NULL,
  `tick_descrip` varchar(9000) NOT NULL,
  `mesa` varchar(150) DEFAULT NULL,
  `tick_estado` varchar(15) DEFAULT NULL,
  `fech_crea` datetime DEFAULT NULL,
  `resolutor` varchar(50) DEFAULT NULL,
  `est` int(11) NOT NULL,
  `fecha_final` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tm_ticket`
--

INSERT INTO `tm_ticket` (`tick_id`, `usu_id`, `cat_id`, `subcat_id`, `tick_titulo`, `email`, `telefono`, `area`, `tick_descrip`, `mesa`, `tick_estado`, `fech_crea`, `resolutor`, `est`, `fecha_final`) VALUES
(1, 4, 2, 4, 'Necesito mi Estado de cuenta', NULL, NULL, '', 'Hola mi Numero de Lote es 12Desierto3 y 13Desierto3', NULL, 'Abierto', '2023-04-08 17:33:42', 'Katia Aguilar', 0, '2023-04-19'),
(2, 4, 0, 3, 'Elemento 101sdasdas', NULL, NULL, '', 'Haciendo Prubas por 2 vez&nbsp; Terminadodasdada', NULL, 'Cerrado', '2023-04-08 17:34:47', 'Katia Aguilar', 0, '2023-04-19'),
(3, 1, 3, 2, 'Elemento 101', NULL, NULL, '', '<p>Hola Mundo Procederemos con una Cancelacion modificado diego</p><p></p><p></p><p></p><p></p>', NULL, 'Abierto', '2023-04-08 18:01:56', 'Dulce', 0, '2023-04-19'),
(4, 1, 3, 3, 'Elemento 1', NULL, NULL, '', 'hola Mundo', NULL, 'Cerrado', '2023-04-10 12:34:47', 'Katia Aguilar', 1, '2023-04-20'),
(5, 1, 1, 2, 'Test area 3', NULL, NULL, '', 'Hola Mundo', NULL, 'Abierto', '2023-04-10 12:35:24', 'Dulce Mendoza', 1, '2023-04-13'),
(6, 1, 3, 4, 'Elemento 1', NULL, NULL, '', 'hola Mundo', NULL, 'Cerrado', '2023-04-10 13:15:43', 'Katia Aguilar', 1, '2023-04-20'),
(7, 9, 1, 1, 'Elemento 1', NULL, NULL, '', '<u>hola mundo</u>', NULL, 'Abierto', '2023-04-10 16:22:32', 'Dulce Mendoza', 1, '2023-04-14'),
(8, 9, 1, 4, 'Test area 3', NULL, NULL, '', 'diego estuvo aqui', NULL, 'Cerrado', '2023-04-10 16:23:12', 'Dulce Mendoza', 1, '2023-04-14'),
(9, 9, 1, 1, 'Test area', NULL, NULL, '', '', NULL, 'Abierto', '2023-04-10 16:26:25', 'Dulce Mendoza', 1, '2023-04-14'),
(10, 9, 3, 3, 'Elemento 101', NULL, NULL, '', 'haciendo Pruebas de Usuarios', NULL, 'Cerrado', '2023-04-10 16:28:52', 'Dulce Mendoza', 1, '2023-04-14'),
(11, 9, 3, 1, 'Elemento 1', NULL, NULL, '', 'daddasdasdas', NULL, 'Abierto', '2023-04-10 16:45:57', 'Dulce Mendoza', 1, '2023-04-14'),
(12, 4, 1, 2, 'Elemento 1', NULL, NULL, '', '<p>diego +10 diego +10 dsadasdas</p><p></p>', NULL, 'Abierto', '2023-04-10 16:48:31', 'Katia Aguilar', 0, '2023-04-14'),
(13, 4, 3, 1, 'Elemento 1', NULL, NULL, '', 'diego Domignuez Zacapala dominguez', NULL, 'Abierto', '2023-04-10 19:37:00', 'Katia Aguilar', 0, '2023-04-14'),
(14, 4, 2, 3, 'Elemento 101', NULL, NULL, NULL, 'diego +10', NULL, 'Abierto', '2023-04-11 08:25:16', 'Katia Aguilar', 0, '2023-04-21'),
(15, 4, 3, 10, 'Pruebas de Categoria', NULL, NULL, NULL, 'Hola Mundo&nbsp;', NULL, 'Abierto', '2023-04-18 08:57:04', 'Katia Aguilar', 0, '2023-04-28'),
(16, 4, 1, 1, 'Elemento 1 Subcategorias', NULL, NULL, NULL, 'Hola haciendo Pruebas de&nbsp;', NULL, 'Abierto', '2023-04-18 11:05:58', 'Katia Aguilar', 0, '2023-04-21'),
(17, 4, 2, 2, 'Elemento 1', NULL, NULL, NULL, 'sdasdsadsadsa&nbsp;', NULL, 'Cerrado', '2023-04-18 15:15:25', 'Katia Aguilar', 0, '2023-04-28'),
(18, 1, 1, 1, '', NULL, NULL, NULL, '', NULL, 'Abierto', '2023-04-19 10:40:59', 'Dulce Mendoza', 0, '2023-04-22'),
(19, 4, 1, 1, 'Elemento 101', NULL, NULL, NULL, 'Hola Mundo', NULL, 'Abierto', '2023-04-19 10:52:17', 'Dulce Mendoza', 0, '2023-04-22'),
(20, 12, 1, 1, 'Test area', NULL, NULL, NULL, 'adsadasdasd', NULL, 'Abierto', '2023-04-19 15:44:53', 'Dulce Mendoza', 1, '2023-04-22'),
(21, 12, 1, 1, 'Necesito mi Estado de cuenta', NULL, NULL, NULL, 'dasdasdasdasdasdasdasas', NULL, 'Abierto', '2023-04-19 15:45:48', 'Dulce Mendoza', 1, '2023-04-22'),
(22, 12, 2, 9, 'Necesito mi Estado de cuenta', NULL, NULL, NULL, 'xczxczxczxczxczxcz&lt;z&lt;xz&lt;x&lt;xz&lt;xz&lt;xz&lt;', NULL, 'Abierto', '2023-04-19 15:49:32', 'Katia Aguilar', 1, '2023-04-29'),
(23, 13, 3, 2, 'Elemento 101', NULL, NULL, NULL, 'dasdasdasdassa', NULL, 'Abierto', '2023-04-19 17:02:57', 'Katia Aguilar', 1, '2023-04-30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_usuario`
--

CREATE TABLE `tm_usuario` (
  `usu_id` int(11) NOT NULL,
  `usu_nom` varchar(150) DEFAULT NULL,
  `usu_ape` varchar(150) DEFAULT NULL,
  `usu_correo` varchar(150) NOT NULL,
  `usu_pass` varchar(29) NOT NULL,
  `rol_id` int(11) DEFAULT NULL,
  `fecha_crea` datetime DEFAULT NULL,
  `fecha_modi` datetime DEFAULT NULL,
  `fecha_eli` datetime DEFAULT NULL,
  `est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Tabla Mantenedor de Usuarios';

--
-- Volcado de datos para la tabla `tm_usuario`
--

INSERT INTO `tm_usuario` (`usu_id`, `usu_nom`, `usu_ape`, `usu_correo`, `usu_pass`, `rol_id`, `fecha_crea`, `fecha_modi`, `fecha_eli`, `est`) VALUES
(1, 'Katia ', 'Aguilar', 'customer@gccima.com', '123456', 2, '2022-12-20 14:08:44', NULL, NULL, 1),
(2, 'root2', 'super', 'admi2@clientes.com', '123456', 2, '2022-12-20 14:08:44', NULL, NULL, 1),
(4, 'Diego', 'Dominguez', 'diego@gmail.com', '12345678', 1, '2023-03-22 08:44:39', NULL, NULL, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `td_ticketdetalle`
--
ALTER TABLE `td_ticketdetalle`
  ADD PRIMARY KEY (`tickd_id`);

--
-- Indices de la tabla `tm_categoria`
--
ALTER TABLE `tm_categoria`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indices de la tabla `tm_subcategoria`
--
ALTER TABLE `tm_subcategoria`
  ADD PRIMARY KEY (`subcat_id`);

--
-- Indices de la tabla `tm_ticket`
--
ALTER TABLE `tm_ticket`
  ADD PRIMARY KEY (`tick_id`);

--
-- Indices de la tabla `tm_usuario`
--
ALTER TABLE `tm_usuario`
  ADD PRIMARY KEY (`usu_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `td_ticketdetalle`
--
ALTER TABLE `td_ticketdetalle`
  MODIFY `tickd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `tm_categoria`
--
ALTER TABLE `tm_categoria`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tm_subcategoria`
--
ALTER TABLE `tm_subcategoria`
  MODIFY `subcat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `tm_ticket`
--
ALTER TABLE `tm_ticket`
  MODIFY `tick_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `tm_usuario`
--
ALTER TABLE `tm_usuario`
  MODIFY `usu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
