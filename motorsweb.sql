-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-10-2023 a las 11:01:26
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `motorsweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `IdCita` int(11) NOT NULL,
  `Cliente` varchar(50) NOT NULL,
  `Taller` varchar(50) NOT NULL,
  `Fecha` date NOT NULL,
  `Hora` time NOT NULL,
  `Servicio` varchar(50) NOT NULL,
  `EstadoCita` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`IdCita`, `Cliente`, `Taller`, `Fecha`, `Hora`, `Servicio`, `EstadoCita`) VALUES
(6, '1004510351', '1004510353', '2023-10-12', '17:33:00', '12', 'Pendiente'),
(7, '1004510351', '1004510352', '2023-10-19', '20:50:00', '123', 'Pendiente'),
(8, '1004510351', '1004510352', '2023-10-31', '16:43:00', '124', 'Aceptada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `IdComentario` int(40) NOT NULL,
  `ProductoId` int(11) NOT NULL,
  `IdCliente` varchar(50) NOT NULL,
  `Comentario` varchar(200) NOT NULL,
  `Fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `IdFactura` int(30) NOT NULL,
  `Fecha` date DEFAULT NULL,
  `Producto` varchar(40) NOT NULL,
  `Cantidad` int(30) NOT NULL,
  `PrecioUnitario` int(30) NOT NULL,
  `Total_Factura` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `IdProducto` int(11) NOT NULL,
  `NomProducto` varchar(30) NOT NULL,
  `Proveedor` varchar(30) NOT NULL,
  `Cantidad` int(30) NOT NULL,
  `Precio` int(30) NOT NULL,
  `Categoria` varchar(30) NOT NULL,
  `Foto1` varchar(200) NOT NULL,
  `Foto2` varchar(200) NOT NULL,
  `Foto3` varchar(200) NOT NULL,
  `Foto4` varchar(200) NOT NULL,
  `InfoVendedor` varchar(50) NOT NULL,
  `Descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`IdProducto`, `NomProducto`, `Proveedor`, `Cantidad`, `Precio`, `Categoria`, `Foto1`, `Foto2`, `Foto3`, `Foto4`, `InfoVendedor`, `Descripcion`) VALUES
(12, 'pechera', 'chevrolet', 3, 9000, 'Repuesto interno', '../Uploads/Productos/CambiodeAceite.jpg', '../Uploads/Productos/Cambio de aceite1.jpg', '../Uploads/Productos/Revisar la suspencion.jpg', '../Uploads/Productos/CambiodeAceite.jpg', '1004510352', ''),
(122, 'Llanta', 'chevrolet', 3, 9000, 'Repuesto externo', '../Uploads/Productos/Cambio de aceite1.jpg', '../Uploads/Productos/Cambio de aceite1.jpg', '../Uploads/Productos/Revisar la suspencion.jpg', '../Uploads/Productos/CambiodeAceite.jpg', '1004510352', ''),
(1222, 'Llantas', 'chevrolet', 3, 9000, 'Repuesto externo', '../Uploads/Productos/Revisar la suspencion.jpg', '../Uploads/Productos/Cambio de aceite1.jpg', '../Uploads/Productos/Revisar la suspencion.jpg', '../Uploads/Productos/CambiodeAceite.jpg', '1004510352', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quejas`
--

CREATE TABLE `quejas` (
  `NumerQueja` int(30) NOT NULL,
  `Usuario` varchar(30) NOT NULL,
  `Descripcion` varchar(200) NOT NULL,
  `Fecha` datetime DEFAULT current_timestamp(),
  `Nombre` varchar(200) NOT NULL,
  `Asunto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `IdServicio` int(30) NOT NULL,
  `numeroServicio` varchar(50) NOT NULL,
  `NomServicio` varchar(30) NOT NULL,
  `Proveedor` varchar(30) NOT NULL,
  `Descripcion` varchar(200) NOT NULL,
  `Foto1` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`IdServicio`, `numeroServicio`, `NomServicio`, `Proveedor`, `Descripcion`, `Foto1`) VALUES
(26, '12', 'Cambio de aceite', '1004510353', 'Un cambio de aceite es simplemente el proceso de retirar el aceite usado y el filtro de aceite y de colocar aceite nuevo (y un nuevo filtro) en el auto.', '../Uploads/Productos/Cambio de aceite1.jpg'),
(27, '123', 'Cambio de aceite', '1004510352', 'Un cambio de aceite es simplemente el proceso de retirar el aceite usado y el filtro de aceite y de colocar aceite nuevo (y un nuevo filtro) en el auto.', '../Uploads/Productos/CambiodeAceite.jpg'),
(28, '124', 'Revisión de la suspensión', '1004510352', 'Inspeccionar posibles fugas, grietas u otros daños en sus amortiguadores; Verificar si tu vehículo rebota, se inclina hacia adelante, hacia atrás o se desvía hacia los lados', '../Uploads/Productos/Revisar la suspencion.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Identificacion` varchar(50) NOT NULL,
  `TipoDocumento` varchar(4) NOT NULL,
  `Nombres` varchar(30) NOT NULL,
  `Apellidos` varchar(30) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `Telefono` varchar(40) NOT NULL,
  `Clave` varchar(40) NOT NULL,
  `Rol` varchar(20) NOT NULL,
  `Estado` varchar(15) NOT NULL,
  `Foto` varchar(200) NOT NULL,
  `Descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Identificacion`, `TipoDocumento`, `Nombres`, `Apellidos`, `Email`, `Direccion`, `Telefono`, `Clave`, `Rol`, `Estado`, `Foto`, `Descripcion`) VALUES
('1004510351', 'Cc', 'Favian', 'Mancilla', 'favian@misena.edu.co', '', '3115662350', '202cb962ac59075b964b07152d234b70', 'Cliente', 'Activo', '../Uploads/Usuarios/perfil1.jpg', ''),
('1004510352', 'Cc', 'Melani ', 'Mancilla', 'Melani@gmail.com', '', '3115662340', '202cb962ac59075b964b07152d234b70', 'Vendedor', 'Activo', '', ''),
('1004510353', 'Cc', 'Andres', 'Angulo', 'Andres@gmail.com', '', '3115662360', '202cb962ac59075b964b07152d234b70', 'Vendedor', 'Activo', '', ''),
('1004510354', 'Cc', 'Alexis', 'Mancilla', 'fabianmancilla0708@gmail.com', '', '3115662359', '202cb962ac59075b964b07152d234b70', 'Administrador', 'Activo', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `IdFactura` int(50) NOT NULL,
  `IdVendedor` varchar(50) NOT NULL,
  `IdComprador` varchar(50) NOT NULL,
  `Fecha` date NOT NULL,
  `Producto` varchar(200) NOT NULL,
  `Unidades` int(50) NOT NULL,
  `Precio unitario` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`IdCita`),
  ADD KEY `Cliente` (`Cliente`),
  ADD KEY `Taller` (`Taller`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`IdComentario`),
  ADD KEY `IdCliente` (`IdCliente`),
  ADD KEY `ProductoId` (`ProductoId`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`IdFactura`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`IdProducto`),
  ADD KEY `InfoVendedor` (`InfoVendedor`);

--
-- Indices de la tabla `quejas`
--
ALTER TABLE `quejas`
  ADD PRIMARY KEY (`NumerQueja`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`IdServicio`),
  ADD KEY `Proveedor` (`Proveedor`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Identificacion`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD KEY `IdVendedor` (`IdVendedor`),
  ADD KEY `IdComprador` (`IdComprador`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `IdCita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `IdComentario` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `IdFactura` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `IdProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1223;

--
-- AUTO_INCREMENT de la tabla `quejas`
--
ALTER TABLE `quejas`
  MODIFY `NumerQueja` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `IdServicio` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `citas_ibfk_1` FOREIGN KEY (`Cliente`) REFERENCES `usuarios` (`Identificacion`),
  ADD CONSTRAINT `citas_ibfk_2` FOREIGN KEY (`Taller`) REFERENCES `usuarios` (`Identificacion`);

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`IdCliente`) REFERENCES `usuarios` (`Identificacion`),
  ADD CONSTRAINT `comentarios_ibfk_2` FOREIGN KEY (`ProductoId`) REFERENCES `productos` (`IdProducto`),
  ADD CONSTRAINT `comentarios_ibfk_3` FOREIGN KEY (`ProductoId`) REFERENCES `productos` (`IdProducto`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`InfoVendedor`) REFERENCES `usuarios` (`Identificacion`),
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`InfoVendedor`) REFERENCES `usuarios` (`Identificacion`);

--
-- Filtros para la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD CONSTRAINT `servicios_ibfk_1` FOREIGN KEY (`Proveedor`) REFERENCES `usuarios` (`Identificacion`);

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`IdVendedor`) REFERENCES `usuarios` (`Identificacion`),
  ADD CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`IdComprador`) REFERENCES `usuarios` (`Identificacion`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
