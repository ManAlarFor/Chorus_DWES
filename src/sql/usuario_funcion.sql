--
-- Base de datos: `chorus_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_funcion`
--

CREATE TABLE `usuario_funcion` (
  `IdUsu` int(11) NOT NULL,
  `IdFun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Volcado de datos para la tabla `usuario_funcion`
--

INSERT INTO `usuario_funcion` (`IdUsu`, `IdFun`) VALUES
(1, 1),
(4, 1),
(10, 1),
(3, 2),
(3, 4),
(9, 5),
(2, 6),
(5, 9),
(7, 10),
(8, 11),
(6, 12),
(9, 12),
(10, 16);

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