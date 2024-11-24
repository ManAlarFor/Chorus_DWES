INSERT INTO `Usuario` (`IdUsu`, `NombreUsu`, `ApellidoUsu`, `EdadUsu`, `CorreoUsu`, `ContrasenaUsu`, `PerfilUsu`)
VALUES
    (1, 'Juan', 'Pérez', 25, 'juan.perez@example.com', 'password123', 'https://images.unsplash.com/photo-1544723795-3fb6469f5b39?w=200&h=200&fit=crop'),
    (2, 'María', 'Gómez', 30, 'maria.gomez@example.com', 'securePass456', 'https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?w=200&h=200&fit=crop'),
    (3, 'Carlos', 'Ramírez', 35, 'carlos.ramirez@example.com', 'qwerty789', 'https://images.unsplash.com/photo-1527980965255-d3b416303d12?w=200&h=200&fit=crop'),
    (4, 'Lucía', 'Martínez', 28, 'lucia.martinez@example.com', 'passw0rd!', 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=200&h=200&fit=crop'),
    (5, 'Andrés', 'Sánchez', 40, 'andres.sanchez@example.com', '12345678', 'https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?w=200&h=200&fit=crop'),
    (6, 'Sofía', 'Fernández', 22, 'sofia.fernandez@example.com', 'abcd1234', 'https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?w=200&h=200&fit=crop'),
    (7, 'Pedro', 'López', 33, 'pedro.lopez@example.com', 'lopezPedro33', 'https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?w=200&h=200&fit=crop'),
    (8, 'Ana', 'Hernández', 27, 'ana.hernandez@example.com', 'anaHdez!27', 'https://images.unsplash.com/photo-1517841905240-472988babdf9?w=200&h=200&fit=crop'),
    (9, 'Miguel', 'Torres', 45, 'miguel.torres@example.com', 'torresMiguel45', 'https://images.unsplash.com/photo-1506898666134-87c90d07a50d?w=200&h=200&fit=crop'),
    (10, 'Laura', 'Morales', 19, 'laura.morales@example.com', 'laura19pass', 'https://images.unsplash.com/photo-1524503033411-c9566986fc8f?w=200&h=200&fit=crop');


INSERT INTO `Funcion` (`IdFuncion`, `NombreFuncion`)
VALUES
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


INSERT INTO `usuario_funcion` (`IdUsu`, `IdFun`) VALUES
    (1, 1), 
    (2, 6),  
    (3, 2),  
    (3, 4),  
    (4, 1),  
    (5, 9),  
    (6, 12), 
    (7, 10), 
    (8, 11), 
    (9, 5),  
    (9, 12), 
    (10, 1), 
    (10, 16); 

