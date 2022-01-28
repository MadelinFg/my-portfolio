-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 09-12-2021 a las 14:34:09
-- Versión del servidor: 10.5.12-MariaDB
-- Versión de PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id18039508_equipo7`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`id18039508_equipo7final`@`%` PROCEDURE `spAgregarPedido` (IN `clavePro` VARCHAR(16) CHARSET utf8, IN `cantidad` INT(5), IN `facT` INT(30), IN `facS` INT(30))  NO SQL
if exists(select * from TAB_PRODUCTOS where PRO_CLAVE = clavePro)then
         INSERT INTO TAB_PEDIDOS (PRO_CLAVE, PED_CANTIDAD, PED_FAC_TOTAL, PED_FAC_IVA, PED_FAC_SUBTOTAL, PED_ESTATUS) VALUES (clavePro, cantidad, facT, 16, facS, 1);
		 select "1" as "ALERT";
	else
		 select "0" as "ALERT";
	end if$$

CREATE DEFINER=`id18039508_equipo7final`@`%` PROCEDURE `spAgregarProducto` (IN `nombre` VARCHAR(100) CHARSET utf8, IN `descripcion` VARCHAR(250) CHARSET utf8, IN `precio` INT(10), IN `foto` VARCHAR(255) CHARSET utf32)  NO SQL
if not exists(select * from TAB_PRODUCTOS where PRO_NOMBRE = nombre)then
         INSERT INTO TAB_PRODUCTOS(PRO_NOMBRE, PRO_DESCRIPCION, PRO_PRECIO, PRO_FOTO, PRO_ESTATUS) VALUES (nombre, descripcion, precio, foto, 1);
		 select "1" as "ALERT";
	else
		 select "0" as "ALERT";
	end if$$

CREATE DEFINER=`id18039508_equipo7final`@`%` PROCEDURE `spBajaPedido` (IN `id` INT(11), IN `estatus` INT)  NO SQL
if exists(select * from TAB_PEDIDOS where PED_CLAVE = id)then
         UPDATE TAB_PEDIDOS SET PED_ESTATUS = estatus WHERE PED_CLAVE = id;
		 select "1" as "ALERT";
	else
		 select "0" as "ALERT";
	end if$$

CREATE DEFINER=`id18039508_equipo7final`@`%` PROCEDURE `spBajaProducto` (IN `id` INT(11))  NO SQL
if exists(select * from TAB_PRODUCTOS where PRO_CLAVE = id)then
         UPDATE TAB_PRODUCTOS SET PRO_ESTATUS = 0 WHERE PRO_CLAVE = id;
		 select "1" as "ALERT";
	else
		 select "0" as "ALERT";
	end if$$

CREATE DEFINER=`id18039508_equipo7final`@`%` PROCEDURE `spModificarProducto` (IN `clave` INT(11), IN `nombre` VARCHAR(100) CHARSET utf8, IN `descripcion` VARCHAR(250) CHARSET utf8, IN `precio` INT(10), IN `foto` VARCHAR(255) CHARSET utf8)  NO SQL
if exists(select * from TAB_PRODUCTOS where PRO_CLAVE = clave)then
		 UPDATE TAB_PRODUCTOS SET PRO_NOMBRE = nombre, PRO_DESCRIPCION = descripcion, PRO_PRECIO = precio, PRO_FOTO = foto WHERE PRO_CLAVE= clave;
		 select "1" as ALERT;
	else
		 select "0" as ALERT ;
	end if$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TAB_CLIENTE`
--

CREATE TABLE `TAB_CLIENTE` (
  `CLI_CLAVE` varchar(16) CHARACTER SET utf8 NOT NULL,
  `CLI_NOMBRE` varchar(50) CHARACTER SET utf8 NOT NULL,
  `CLI_CORREO` varchar(30) CHARACTER SET utf8 NOT NULL,
  `CLI_CONTRASENA` varchar(15) CHARACTER SET utf8 NOT NULL,
  `CLI_ESTATUS` varchar(10) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TAB_PEDIDOS`
--

CREATE TABLE `TAB_PEDIDOS` (
  `PED_CLAVE` int(11) NOT NULL,
  `PRO_CLAVE` varchar(16) CHARACTER SET utf8 NOT NULL,
  `PED_CANTIDAD` int(5) NOT NULL,
  `PED_FAC_TOTAL` int(30) NOT NULL,
  `PED_FAC_IVA` int(30) NOT NULL,
  `PED_FAC_SUBTOTAL` int(30) NOT NULL,
  `PED_ESTATUS` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `TAB_PEDIDOS`
--

INSERT INTO `TAB_PEDIDOS` (`PED_CLAVE`, `PRO_CLAVE`, `PED_CANTIDAD`, `PED_FAC_TOTAL`, `PED_FAC_IVA`, `PED_FAC_SUBTOTAL`, `PED_ESTATUS`) VALUES
(1, '1', 50, 40, 16, 30, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TAB_PRODUCTOS`
--

CREATE TABLE `TAB_PRODUCTOS` (
  `PRO_CLAVE` int(11) NOT NULL,
  `PRO_NOMBRE` varchar(100) CHARACTER SET utf8 NOT NULL,
  `PRO_DESCRIPCION` varchar(250) CHARACTER SET utf8 NOT NULL,
  `PRO_PRECIO` int(10) NOT NULL,
  `PRO_FOTO` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `PRO_ESTATUS` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `TAB_PRODUCTOS`
--

INSERT INTO `TAB_PRODUCTOS` (`PRO_CLAVE`, `PRO_NOMBRE`, `PRO_DESCRIPCION`, `PRO_PRECIO`, `PRO_FOTO`, `PRO_ESTATUS`) VALUES
(1, 'papitas', 'ricas', 1, 'aqui va la fotito', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `TAB_CLIENTE`
--
ALTER TABLE `TAB_CLIENTE`
  ADD PRIMARY KEY (`CLI_CLAVE`);

--
-- Indices de la tabla `TAB_PEDIDOS`
--
ALTER TABLE `TAB_PEDIDOS`
  ADD PRIMARY KEY (`PED_CLAVE`);

--
-- Indices de la tabla `TAB_PRODUCTOS`
--
ALTER TABLE `TAB_PRODUCTOS`
  ADD PRIMARY KEY (`PRO_CLAVE`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `TAB_PEDIDOS`
--
ALTER TABLE `TAB_PEDIDOS`
  MODIFY `PED_CLAVE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `TAB_PRODUCTOS`
--
ALTER TABLE `TAB_PRODUCTOS`
  MODIFY `PRO_CLAVE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
