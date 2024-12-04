--
-- Base de datos: `chorus_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuario`
--

CREATE TABLE `Usuario` (
  `IdUsu` int(11) NOT NULL,
  `NombreUsu` varchar(45) DEFAULT NULL,
  `ApellidoUsu` varchar(90) DEFAULT NULL,
  `EdadUsu` int(3) DEFAULT NULL,
  `CorreoUsu` text DEFAULT NULL,
  `ContrasenaUsu` text DEFAULT NULL,
  `PerfilUsu` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Usuario`
--

INSERT INTO `Usuario` (`IdUsu`, `NombreUsu`, `ApellidoUsu`, `EdadUsu`, `CorreoUsu`, `ContrasenaUsu`, `PerfilUsu`) VALUES
(1, 'Juan', 'Pérez', 25, 'juan.perez@example.com', 'password123', 'https://images.unsplash.com/photo-1544723795-3fb6469f5b39?w=200&h=200&fit=crop'),
(2, 'María', 'Gómez', 30, 'maria.gomez@example.com', 'securePass456', 'https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?w=200&h=200&fit=crop'),
(3, 'Carlos', 'Ramírez', 35, 'carlos.ramirez@example.com', 'qwerty789', 'https://images.unsplash.com/photo-1527980965255-d3b416303d12?w=200&h=200&fit=crop'),
(4, 'Lucía', 'Martínez', 28, 'lucia.martinez@example.com', 'passw0rd!', 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=200&h=200&fit=crop'),
(5, 'Andrés', 'Sánchez', 40, 'andres.sanchez@example.com', '12345678', 'https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?w=200&h=200&fit=crop'),
(6, 'Sofía', 'Fernández', 22, 'sofia.fernandez@example.com', 'abcd1234', 'https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?w=200&h=200&fit=crop'),
(7, 'Pedro', 'López', 33, 'pedro.lopez@example.com', 'lopezPedro33', 'https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?w=200&h=200&fit=crop'),
(8, 'Ana', 'Hernández', 27, 'ana.hernandez@example.com', 'anaHdez!27', 'https://images.unsplash.com/photo-1517841905240-472988babdf9?w=200&h=200&fit=crop'),
(9, 'Miguel', 'Torres', 45, 'miguel.torres@example.com', 'torresMiguel45', 'https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?w=200&h=200&fit=crop'),
(10, 'Laura', 'Morales', 19, 'laura.morales@example.com', 'laura19pass', 'https://images.unsplash.com/photo-1524503033411-c9566986fc8f?w=200&h=200&fit=crop'),
(11, 'Liam', 'Smith', 29, 'liam.smith@example.com', 'password123', NULL),
(12, 'Sophia', 'Johnson', 32, 'sophia.johnson@example.com', 'mypassword456', 'https://images.unsplash.com/photo-1529636441648-a32fd3f1645d?w=200&h=200&fit=crop'),
(13, 'Noah', 'Williams', 25, 'noah.williams@example.com', 'securepass789', 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=200&h=200&fit=crop'),
(14, 'Isabella', 'Brown', 28, 'isabella.brown@example.com', 'pass12345', NULL),
(15, 'Mason', 'Jones', 30, 'mason.jones@example.com', 'masonsafe22', 'https://images.unsplash.com/photo-1517423440428-a5a00ad493e8?w=200&h=200&fit=crop'),
(16, 'Olivia', 'Garcia', 34, 'olivia.garcia@example.com', 'oliviasecret', 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=200&h=200&fit=crop'),
(17, 'Clive', 'Rosfield', 26, 'clive.rosfield@example.com', 'torgal', NULL),
(18, 'Emma', 'Hernandez', 31, 'emma.hernandez@example.com', 'emmapassword', 'https://images.unsplash.com/photo-1502767089025-6572583495d4?w=200&h=200&fit=crop'),
(19, 'James', 'Lopez', 35, 'james.lopez@example.com', 'jamessecure99', 'https://images.unsplash.com/photo-1488426862026-3ee34a7d66df?w=200&h=200&fit=crop'),
(20, 'Wax', 'Ladrian', 45, 'wax.ladrian@example.com', 'steris22', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Usuario`
--
ALTER TABLE `Usuario`
  ADD PRIMARY KEY (`IdUsu`);

ALTER TABLE `Usuario`
  MODIFY `IdUsu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

UPDATE Usuario
SET ContrasenaUsu = MD5(ContrasenaUsu)
WHERE ContrasenaUsu IS NOT NULL;
