-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-10-2019 a las 18:54:37
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fastbuy`
--
CREATE DATABASE IF NOT EXISTS `fastbuy` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `fastbuy`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idCate` int(10) NOT NULL,
  `nomCate` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idCate`, `nomCate`) VALUES
(1, 'Televisores'),
(2, 'Audio'),
(3, 'Informática'),
(4, 'Electrodomésticos'),
(5, 'Juguetes'),
(6, 'Hogar y muebles');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `idCli` int(10) NOT NULL,
  `nomCli` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apelCli` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telCli` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passwCli` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idCli`, `nomCli`, `apelCli`, `telCli`, `correo`, `passwCli`) VALUES
(1, 'Jose', 'Reyes', '8374650', 'joselorey2@gmail.com', '$2y$10$/LFUmcNDITH8ZL2YlJomBeM'),
(3, 'Francisco', 'Alcacer', '7928303', 'pacoalcacelcer@gmail.com', '$2y$10$4D.2bn3wVSZt6WUNFJISwuw'),
(4, 'Maria', 'Hernandez', '2989732', 'maruchan5@gmail.com', '$2y$10$zGqB4pDWW50SULn0QpNAxOY'),
(5, 'Orlando', 'Duque', '4234298', 'ordun4@gmail.com', '$2y$10$PySDLeozg3sXaCjvjlVF9Op'),
(6, 'Paolo', 'Montoya', '7544543', 'paolontoya@gmail.com', '$2y$10$h7o8sEr4150nGR6BG6LMwus'),
(7, 'Diomedez', 'Duarte', '7623810', 'diecacique4@gmail.com', '$2y$10$btO0Ei822w6bR.tNfZLWOuS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallefactu`
--

CREATE TABLE `detallefactu` (
  `idPro` int(10) NOT NULL,
  `idFac` int(10) NOT NULL,
  `cantiCom` int(10) NOT NULL,
  `subtotal` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `idEmp` int(10) NOT NULL,
  `nomEmp` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apelEmp` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telEmp` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Edad` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passwEmp` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idRol` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`idEmp`, `nomEmp`, `apelEmp`, `telEmp`, `Edad`, `passwEmp`, `idRol`) VALUES
(1, 'Marcos', 'Lopez', '7853425', '25', '$2y$10$3yjj0rzTFf3tJ75FofNV7O1', 1),
(2, 'Jesus', 'Marquez', '7874293', '18', '$2y$10$CjTCh9QYWiq2C8gSQG8xHut', 2),
(4, 'Arturo', 'Vidal', '7893412', '22', '$2y$10$2ilVdWEpe9Uy0lJeLu6G1eC', 2),
(5, 'Antonio', 'Solis', '7935662', '32', '$2y$10$t33e1xksS4Vn7LUEof/.pOv', 1),
(6, 'James', 'Bacsther', '3492384', '23', '$2y$10$iON.SoolBYT.ipW1HCiZleV', 2),
(7, 'Andres', 'Camargo', '4363465', '30', '$2y$10$KUpsE.pFqdak.RlsRg6.COh', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `idFac` int(10) NOT NULL,
  `valTotal` int(10) NOT NULL,
  `fecha` date NOT NULL,
  `estado` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idEmp` int(10) DEFAULT NULL,
  `idCli` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idPro` int(10) NOT NULL,
  `nomPro` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad` int(10) NOT NULL,
  `precioPro` int(10) NOT NULL,
  `link_img` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_cate` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idPro`, `nomPro`, `cantidad`, `precioPro`, `link_img`, `descripcion`, `id_cate`) VALUES
(1, 'Tv led samsung', 22, 1240000, 'assets/img/tvsam.jpg', 'Televisor marca Samsung con tecnología led, soporta HDMI y maneja la resolución 4K', 1),
(3, 'Tv lcd LG', 12, 1120000, 'assets/img/tvlg.png', 'Tv lcd marca LG con resolución Full HD, smart tv, y soporta puertos HDMI', 1),
(5, 'Audífonos', 38, 32000, 'assets/img/audi.jpg', 'Audífonos genéricos con cable de 1.5m, entrada jack 3.5mm\r\ncon bajos profundos y modo estereo', 2),
(6, 'Computador portátil', 25, 1030000, 'assets/img/inport.jpg', 'Computador portátil o Laptop, con disco duro de 500GB, 4GB de memoria ram, procesador intel core i3 a 2.8GHz, gráficos intel HD, panel táctíl como mouse, cámara y micrófono incluidos.', 3),
(7, 'Tv lcd Panasonic', 14, 900000, 'assets/img/tvpan.png', 'Televisor Panasonic lcd, delgado y compacto para espacios pequeños, resolución HD y 1 año de garantía', 1),
(8, 'Parlantes', 38, 56000, 'assets/img/aupar.png', 'Parlantes marca Sony, sonido estéreo surround, parlantes left y right con Jack de 3.5mm', 2),
(9, 'Micrófono', 41, 45000, 'assets/img/aumicro.jpg', 'Micrófono genérico con entrada compatible para cualquier altavoz o parlante', 2),
(10, 'Mac Book', 24, 2300000, 'assets/img/inmac.jpg', 'Mac Book con MacOS 10.1, procesador A30, 8GB de ram y 1TB de almacenamiento', 3),
(11, 'Mouse', 45, 36000, 'assets/img/inmaus.jpg', 'Accesorios para computadores: Mouse marca Genius con led rojo, que detecta movimiento, sensibilidad perzonalizable', 3),
(12, 'Teclado', 35, 30000, 'assets/img/intec.png', 'Teclado genérico USB compatible con cualquier ordenador y smartphone usando OTG', 3),
(13, 'Lavadora', 10, 1150000, 'assets/img/ellava.png', 'Lavadora marca Wirldpool con 6 niveles lavado inteligente y quitamotas eléctrico', 4),
(14, 'Auto de carreras', 36, 28000, 'assets/img/jucar.png', 'Auto de carreras manual, color rojo, modelo contemporáneo', 5),
(15, 'Sofá', 20, 540000, 'assets/img/hosofa.jpg', 'Sofá de cuero de 3m X 1.8m X 1m (ancho x alto x profundidad)', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `idRol` int(10) NOT NULL,
  `nomRol` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`idRol`, `nomRol`) VALUES
(1, 'Administrador'),
(2, 'Vendedor');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCate`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idCli`);

--
-- Indices de la tabla `detallefactu`
--
ALTER TABLE `detallefactu`
  ADD KEY `idPro` (`idPro`,`idFac`),
  ADD KEY `idFac` (`idFac`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`idEmp`),
  ADD KEY `idRol` (`idRol`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`idFac`),
  ADD KEY `idEmp` (`idEmp`,`idCli`),
  ADD KEY `idCli` (`idCli`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idPro`),
  ADD KEY `id_cate` (`id_cate`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idRol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idCate` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idCli` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `idEmp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `idFac` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idPro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `idRol` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detallefactu`
--
ALTER TABLE `detallefactu`
  ADD CONSTRAINT `detallefactu_ibfk_1` FOREIGN KEY (`idPro`) REFERENCES `productos` (`idPro`),
  ADD CONSTRAINT `detallefactu_ibfk_2` FOREIGN KEY (`idFac`) REFERENCES `factura` (`idFac`);

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_ibfk_1` FOREIGN KEY (`idRol`) REFERENCES `roles` (`idRol`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`idEmp`) REFERENCES `empleados` (`idEmp`),
  ADD CONSTRAINT `factura_ibfk_2` FOREIGN KEY (`idCli`) REFERENCES `clientes` (`idCli`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_cate`) REFERENCES `categoria` (`idCate`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
