--
-- Estructura de tabla para la tabla `usuario_funcion`
--

CREATE TABLE `usuario_funcion` (
    `IdUsu` int(11) NOT NULL,
    `IdFun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario_funcion`
--
ALTER TABLE `usuario_funcion`
    ADD PRIMARY KEY (`IdUsu`,`IdFun`),
    ADD KEY `IdFun` (`IdFun`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuario_funcion`
--
ALTER TABLE `usuario_funcion`
    ADD CONSTRAINT `IdFun` FOREIGN KEY (`IdFun`) REFERENCES `Funcion` (`IdFuncion`),
    ADD CONSTRAINT `IdUsu` FOREIGN KEY (`IdUsu`) REFERENCES `Usuario` (`IdUsu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;