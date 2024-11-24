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
    `PerfilUsu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Usuario`
--
ALTER TABLE `Usuario`
    ADD PRIMARY KEY (`IdUsu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Usuario`
--
ALTER TABLE `Usuario`
    MODIFY `IdUsu` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
