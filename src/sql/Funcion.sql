--
-- Base de datos: `chorus_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Funcion`
--

CREATE TABLE `Funcion` (
  `IdFuncion` int(11) NOT NULL,
  `NombreFuncion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Funcion`
--

INSERT INTO `Funcion` (`IdFuncion`, `NombreFuncion`) VALUES
(1, 'Cantante'),
(2, 'Bajista'),
(3, 'Guitarrista'),
(4, 'Baterista'),
(5, 'Pianista'),
(6, 'Trompetista'),
(7, 'Saxofonista'),
(8, 'Violinista'),
(9, 'Productor Musical'),
(10, 'Ingeniero de Sonido'),
(11, 'DJ'),
(12, 'Compositor'),
(13, 'Letrista'),
(14, 'Arreglista'),
(15, 'Director de Orquesta'),
(16, 'Percusionista'),
(17, 'Flautista'),
(18, 'Clarinettista'),
(19, 'Contrabajista'),
(20, 'Trombonista'),
(21, 'Oboísta'),
(22, 'Corista'),
(23, 'Maestro de Canto'),
(24, 'Músico de Estudio'),
(25, 'Técnico de Grabación'),
(26, 'Violonchelista'),
(27, 'Bandoneonista'),
(28, 'Arpista'),
(29, 'Instrumentista de Viento-Madera'),
(30, 'Instrumentista de Viento-Metal');

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
  MODIFY `IdFuncion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;