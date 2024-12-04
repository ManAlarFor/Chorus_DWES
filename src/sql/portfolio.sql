--
-- Base de datos: `chorus_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `portfolio`
--

CREATE TABLE `portfolio` (
  `IdPublic` int(11) NOT NULL,
  `TituloPubic` varchar(45) NOT NULL,
  `TextoPublic` text DEFAULT NULL,
  `ImagenPublic` varchar(250) DEFAULT NULL,
  `IdUsu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `portfolio`
--

INSERT INTO `portfolio` (`IdPublic`, `TituloPubic`, `TextoPublic`, `ImagenPublic`, `IdUsu`) VALUES
(33, 'Mi Primera Canción', 'Estoy emocionado de compartir mi primera composición con el mundo. Ha sido un viaje increíble desde que comencé a escribir música, y esta pieza es un reflejo de mis emociones. Espero que al escucharla puedan conectar con los sentimientos que intenté plasmar. Gracias por apoyar mi música.', NULL, 1),
(34, 'Concierto en Vivo', 'El concierto en el teatro principal fue una experiencia inolvidable. Interpreté algunas de mis piezas favoritas y tuve la oportunidad de conectar profundamente con el público. Estas imágenes capturan algunos de esos momentos mágicos. Espero volver pronto a este escenario.', 'https://images.unsplash.com/photo-1506784365847-bbad939e9335?w=500&h=300&fit=crop', 4),
(35, 'Clase de Canto Gratuita', 'La enseñanza siempre ha sido una pasión para mí, y estoy emocionado de ofrecer una clase abierta para principiantes que quieran aprender a cantar. La música puede cambiar vidas, y espero que esta iniciativa sea un primer paso para muchos en su camino musical. ¡Los espero para una sesión llena de aprendizaje y diversión!', 'https://images.unsplash.com/photo-1543269866-487350d6fa5e?w=400&h=400&fit=crop', 10),
(36, 'Práctica de Bajista', 'Dedicar tiempo a practicar es esencial para cualquier músico, y esta sesión fue especialmente enriquecedora. Estoy trabajando en incorporar técnicas avanzadas para enriquecer mi estilo y llevar mi música al siguiente nivel. Pronto podrán escuchar el resultado de estos ensayos en mis próximas presentaciones.', 'https://images.unsplash.com/photo-1543269866-487350d6fa5e?w=400&h=400&fit=crop', 3),
(37, 'Improvisación en la batería', 'Improvisar siempre me ha permitido expresarme de una manera única. En esta sesión, experimenté con ritmos no convencionales y patrones inusuales que creo que aportan un toque fresco a mi estilo. La música es un viaje constante de descubrimiento, y estoy emocionado de compartir estos momentos con ustedes.', 'https://images.unsplash.com/photo-1511376777868-611b54f68947?w=400&h=300&fit=crop', 3),
(38, 'Melodías al Piano', 'El piano siempre ha sido mi refugio, un lugar donde puedo perderme en melodías y armonías. En esta recopilación, he reunido algunas de mis mejores interpretaciones que van desde piezas clásicas hasta composiciones modernas. Espero que disfruten de esta ventana a mi mundo musical.', 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=450&h=300&fit=crop', 9),
(39, 'Producción de Álbum', 'La producción de \"Sueños Melódicos\" ha sido uno de los proyectos más desafiantes pero gratificantes de mi carrera. Cada canción es un reflejo de una historia o emoción, y he puesto todo mi esfuerzo en capturar esos momentos de la manera más auténtica posible. Pronto estará disponible para todos ustedes..', NULL, 5),
(40, 'Ingeniería de Sonido', 'El sonido es la base de toda buena música, y como ingeniero de sonido, mi objetivo es siempre sacar lo mejor de cada pieza. Este proyecto acústico fue un gran reto, pero al final logramos un resultado que estoy orgulloso de compartir. La música es un arte, pero también una ciencia, y aquí lo demostramos.', 'https://images.unsplash.com/photo-1593642532973-d31b6557fa68?w=800&h=600&fit=crop', 7),
(41, 'Noche Electrónica', 'El festival \"Beat Night\" fue una experiencia increíble. Como DJ, tuve la oportunidad de llevar a la audiencia a un viaje musical inolvidable con mezclas únicas y sonidos envolventes. Estas noches me recuerdan por qué amo lo que hago: crear conexiones a través de la música.', 'https://images.unsplash.com/photo-1497034825429-c343d7c6a68f?w=720&h=480&fit=crop', 8),
(42, 'Nueva Composición', 'La naturaleza siempre ha sido una fuente de inspiración para mí, y esta última composición no es la excepción. A través de esta obra, intenté capturar la serenidad y la fuerza de los paisajes que me rodean. Espero que al escucharla puedan sentir esa conexión con el mundo natural.', 'https://images.unsplash.com/photo-1516802273409-68526ee1bdd6?w=600&h=400&fit=crop', 6),
(43, 'Lecciones de Percusión', 'Como percusionista, siempre estoy buscando formas de compartir mi conocimiento con otros músicos. Estas lecciones incluyen técnicas avanzadas que pueden ayudar a cualquier persona a llevar su habilidad al siguiente nivel. La música se trata de comunidad, y esto es mi forma de contribuir a ella.', 'https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=500&h=300&fit=crop', 9),
(44, 'Exploración de sonidos', 'La experimentación es clave para evolucionar en cualquier campo, y en la música esto no es diferente. En esta sesión, trabajé con texturas musicales y nuevos equipos para crear algo fresco y único. Estoy emocionado de mostrarles cómo estas exploraciones se transforman en música.', 'https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=500&h=300&fit=crop', 10),
(45, 'Dueto Clásico', 'Interpretar un dueto clásico con un violinista fue un desafío y un placer. La combinación de ambos instrumentos creó una armonía que fue simplemente mágica. Este tipo de colaboraciones me inspira a explorar más posibilidades en la música clásica.', 'https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?w=400&h=300&fit=crop', 2),
(46, 'Nuevas Líricas', 'La poesía y la música siempre han estado conectadas para mí. Estas nuevas letras son un intento de explorar temas más profundos y personales. Espero que estas palabras encuentren eco en quienes las escuchen y creen nuevas experiencias para ustedes.', NULL, 6),
(47, 'Percusión Experimental', 'La percusión tiene un potencial infinito, y me encanta explorar los límites de lo que se puede hacer con ella. Esta pieza combina estilos tradicionales con elementos electrónicos, creando algo que creo que es realmente especial. Espero que les guste tanto como a mí.', 'https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?w=400&h=300&fit=crop', 9),
(48, 'Grabación de Estudio', 'Las sesiones de estudio son donde la magia realmente sucede. Trabajé en arreglos contemporáneos que combinan tradición y modernidad. Cada proyecto tiene su propio ritmo y alma, y este no es la excepción. Estoy emocionado de compartir el resultado final con ustedes pronto.', 'https://images.unsplash.com/photo-1519681393784-d120267933ba?w=500&h=400&fit=crop', 7);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`IdPublic`),
  ADD KEY `IdUsu` (`IdUsu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `IdPublic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `portfolio`
--
ALTER TABLE `portfolio`
  ADD CONSTRAINT `fk_IdUsu` FOREIGN KEY (`IdUsu`) REFERENCES `Usuario` (`IdUsu`);
COMMIT;
