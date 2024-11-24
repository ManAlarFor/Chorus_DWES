--
-- Estructura de tabla para la tabla `Funcion`
--

CREATE TABLE `Funcion` (
    `IdFuncion` int(11) NOT NULL,
    `NombreFuncion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Funcion`
--
ALTER TABLE `Funcion`
    ADD PRIMARY KEY (`IdFuncion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Funcion`
--
ALTER TABLE `Funcion`
    MODIFY `IdFuncion` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
