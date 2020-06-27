-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-06-2020 a las 20:09:54
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vsarena`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `idComentario` int(11) NOT NULL,
  `contenidoComentario` varchar(255) DEFAULT NULL,
  `Usuarios_idUsuario` int(11) NOT NULL,
  `Noticias_idNoticia` int(11) NOT NULL,
  `Productos_idProducto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`idComentario`, `contenidoComentario`, `Usuarios_idUsuario`, `Noticias_idNoticia`, `Productos_idProducto`) VALUES
(7, 'Esperando con ansias este torneo, info de cuando empiezan las incripciones porfa', 11, 4, 2),
(9, 'Muy bonita taza, le regale a mi pareja y le encanto', 13, 1, 1),
(10, 'Compre 3 tazas para mis primos y a todos les encanto, son muy bonitas', 6, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cupones`
--

CREATE TABLE `cupones` (
  `idCupon` int(11) NOT NULL,
  `nombreCupon` varchar(255) DEFAULT NULL,
  `porcentajeDescuento` decimal(10,0) DEFAULT NULL,
  `estadoCupon` varchar(255) DEFAULT NULL,
  `inicioCupon` datetime DEFAULT NULL,
  `finCupon` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cupones`
--

INSERT INTO `cupones` (`idCupon`, `nombreCupon`, `porcentajeDescuento`, `estadoCupon`, `inicioCupon`, `finCupon`) VALUES
(1, 'Sin Cupon', '0', '1', '2020-01-01 00:00:00', '2025-01-01 23:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallesventas`
--

CREATE TABLE `detallesventas` (
  `Ventas_idVenta` int(11) NOT NULL,
  `Productos_idProducto` int(11) NOT NULL,
  `cantidadProducto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detallesventas`
--

INSERT INTO `detallesventas` (`Ventas_idVenta`, `Productos_idProducto`, `cantidadProducto`) VALUES
(1, 3, 2),
(1, 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enfrentamientos`
--

CREATE TABLE `enfrentamientos` (
  `idEnfrentamiento` int(11) NOT NULL,
  `NombreEnfrentamiento` varchar(255) DEFAULT NULL,
  `Ganador` varchar(255) DEFAULT NULL,
  `Rondas_idRondas` int(11) NOT NULL,
  `Grupos_idGrupos` int(11) NOT NULL,
  `FechaEnfrentamiento` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `enfrentamientos`
--

INSERT INTO `enfrentamientos` (`idEnfrentamiento`, `NombreEnfrentamiento`, `Ganador`, `Rondas_idRondas`, `Grupos_idGrupos`, `FechaEnfrentamiento`) VALUES
(1, 'A', NULL, 1, 1, NULL),
(2, 'B', NULL, 1, 1, NULL),
(3, 'C', NULL, 1, 1, NULL),
(4, 'D', NULL, 1, 1, NULL),
(5, 'E', NULL, 1, 1, NULL),
(6, 'F', NULL, 1, 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enfrentamientos_equipos`
--

CREATE TABLE `enfrentamientos_equipos` (
  `Enfrentamientos_idEnfrentamientos` int(11) NOT NULL,
  `Equipos_idEquipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `enfrentamientos_equipos`
--

INSERT INTO `enfrentamientos_equipos` (`Enfrentamientos_idEnfrentamientos`, `Equipos_idEquipo`) VALUES
(1, 2),
(1, 3),
(2, 2),
(2, 4),
(3, 2),
(3, 5),
(4, 3),
(4, 4),
(5, 3),
(5, 5),
(6, 4),
(6, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `idEquipo` int(11) NOT NULL,
  `equipo` varchar(255) DEFAULT NULL,
  `avatarEquipo` varchar(255) DEFAULT NULL,
  `lider_idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`idEquipo`, `equipo`, `avatarEquipo`, `lider_idUsuario`) VALUES
(1, 'Sin equipo', 'sin-equipo.jpg', 1),
(2, 'Manada Lobezna', 'ManadaLobezna.jpg', 14),
(3, 'LosAdams', 'adams.jpg', 11),
(4, 'NinjasDeLaHoja', 'aldeadelahoja.jpg', 8),
(5, 'TeenTitans', 'teentitans.jpg', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos_has_torneos`
--

CREATE TABLE `equipos_has_torneos` (
  `Equipos_idEquipo` int(11) NOT NULL,
  `Torneos_idTorneo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `equipos_has_torneos`
--

INSERT INTO `equipos_has_torneos` (`Equipos_idEquipo`, `Torneos_idTorneo`) VALUES
(1, 1),
(2, 2),
(3, 2),
(4, 2),
(5, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `idGrupo` int(11) NOT NULL,
  `nombreGrupo` varchar(255) DEFAULT NULL,
  `Torneos_idTorneos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`idGrupo`, `nombreGrupo`, `Torneos_idTorneos`) VALUES
(1, 'Final', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos`
--

CREATE TABLE `juegos` (
  `idJuego` int(11) NOT NULL,
  `juego` varchar(255) DEFAULT NULL,
  `descripcionJuego` varchar(255) DEFAULT NULL,
  `imgJuego` varchar(255) DEFAULT NULL,
  `plataforma` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `juegos`
--

INSERT INTO `juegos` (`idJuego`, `juego`, `descripcionJuego`, `imgJuego`, `plataforma`) VALUES
(1, 'SinJuego', 'NO BORRAR IMPORTANTE, NO ES UN JUEGO PERO NO BORRAR', 'default.png', 'Multi Plataforma'),
(2, 'League Of Legends', 'League of Legends es un videojuego del gÃ©nero multijugador de arena de batalla en lÃ­nea y deporte electrÃ³nico el cual fue desarrollado por Riot Games para Microsoft Windows y OS X. En un principio los servidores estaban alojados en la empresa GOA y fue', 'LeagueOfLegends.jpg', 'PC'),
(3, 'Teamfight Tactics', 'Teamfight Tactics es un auto-chess desarrollado y publicado por Riot Games. Inicialmente lanzado como modo de juego para League of Legends para Windows y macOS el 26 de junio 2019 y, se lanzÃ³ para Android y iOS el 19 de marzo 2020, excluyendo el sureste ', 'Team Fight Tactics.jpg', 'PC'),
(4, 'Fortnite', 'Fortnite es un videojuego del aÃ±o 2017 desarrollado por la empresa Epic Games, lanzado como diferentes paquetes de software que presentan diferentes modos de juego, pero que comparten el mismo motor general de juego y las mecÃ¡nicas. Fue anunciado en los', 'fortnite.jpg', 'Multi Plataforma'),
(5, 'Brawl Stars ', 'Brawl Stars es un videojuego multijugador online gratuito para mÃ³viles disponible en Android e IOS, desarrollado por Supercell y lanzado globalmente en 2018.', 'brawlStars.jpeg', 'MOBILE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `idNoticia` int(11) NOT NULL,
  `tituloNoticia` varchar(255) DEFAULT NULL,
  `imgNoticia` varchar(255) DEFAULT NULL,
  `contenidoNoticia` longtext,
  `fechaNoticia` date NOT NULL,
  `Usuarios_idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`idNoticia`, `tituloNoticia`, `imgNoticia`, `contenidoNoticia`, `fechaNoticia`, `Usuarios_idUsuario`) VALUES
(1, 'Sin Noticia', 'white.jpg', '<h1>NO ES UNA NOTICIA</h1><ol><li>Es para tener referencia en comentarios</li><li>Esta noticia no se mostrara</li></ol>', '2020-06-08', 1),
(4, 'Nuevo  Torneo', 'brawlStars.jpeg', '<p>Se aproxima un torneo de Brawl Stars GRATUITO!!!</p><p>A pesar de ser gratuito contiene premios de otro nivel</p><ol><li>Un mouse y un pad de Brawl Stars</li><li>Unos Auriculares de Brawl Stars</li><li>Una remera de Brawl Stars</li></ol>', '2020-06-08', 1),
(5, 'Prueba de lol', 'white.jpg', '<h1>Esta es una noticia de prueba</h1><ol><li>Elemento uno</li></ol>', '2020-06-09', 1),
(6, 'Futuro Torneo CS:GO', 'CSGO.jpg', '<h1>FUTURO TORNEO CS:GO</h1><ul><li>awp</li><li>deagle</li></ul>', '2020-06-09', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `premios`
--

CREATE TABLE `premios` (
  `idPremio` int(11) NOT NULL,
  `nombrePremio` varchar(255) DEFAULT NULL,
  `Premio` varchar(255) DEFAULT NULL,
  `Torneos_idTorneos` int(11) NOT NULL,
  `Equipos_idEquipo` int(11) NOT NULL,
  `Usuarios_idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `premios`
--

INSERT INTO `premios` (`idPremio`, `nombrePremio`, `Premio`, `Torneos_idTorneos`, `Equipos_idEquipo`, `Usuarios_idUsuario`) VALUES
(2, 'Primer Puesto', '5000 RP', 2, 1, 1),
(3, 'Primer Puesto', '2000 pavos', 3, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProducto` int(11) NOT NULL,
  `producto` varchar(255) DEFAULT NULL,
  `precioEfectivo` float DEFAULT NULL,
  `precioMonVirtual` float DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `imgProducto` varchar(255) DEFAULT NULL,
  `Cupones_idCupones` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `producto`, `precioEfectivo`, `precioMonVirtual`, `stock`, `descripcion`, `imgProducto`, `Cupones_idCupones`) VALUES
(1, 'Taza De LOL', 17.99, 2500, 20, 'Taza blanca del LOL  diseÃ±o unico', 'tazaDeLOL.jpg', 1),
(2, 'Sin Producto', 0, 0, 0, 'no se debe mostrar esta informacion', 'white.jpg', 1),
(3, 'Gorra Fornite', 9.99, 1000, 35, 'Remera Blanca Fortnite', 'gorrtaFortnite.jpg', 1),
(4, 'Remera Clash Royale', 18, 2600, 7, 'Remera talle unico', 'remeraClashRoyale.jpg', 1),
(5, 'Remera CS:GO', 24.99, 3500, 15, 'Remera negra CS:GO, 5 talles S, 5 talles XXL y 5 talles L ', 'remeraCsGo.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rondas`
--

CREATE TABLE `rondas` (
  `idRonda` int(11) NOT NULL,
  `nombreRonda` varchar(255) NOT NULL,
  `Torneos_idTorneos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rondas`
--

INSERT INTO `rondas` (`idRonda`, `nombreRonda`, `Torneos_idTorneos`) VALUES
(1, 'Sin Ronda', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tags`
--

CREATE TABLE `tags` (
  `idTag` int(11) NOT NULL,
  `tag` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tags`
--

INSERT INTO `tags` (`idTag`, `tag`) VALUES
(1, 'PVP'),
(2, 'TWITCH'),
(3, 'PVE'),
(4, '1 vs 5'),
(5, 'EARLY GAME'),
(6, 'LOL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tags_has_noticias`
--

CREATE TABLE `tags_has_noticias` (
  `Tags_idTag` int(11) NOT NULL,
  `Noticias_idNoticia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tags_has_noticias`
--

INSERT INTO `tags_has_noticias` (`Tags_idTag`, `Noticias_idNoticia`) VALUES
(1, 4),
(1, 5),
(1, 6),
(5, 5),
(6, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `torneos`
--

CREATE TABLE `torneos` (
  `idTorneo` int(11) NOT NULL,
  `torneo` varchar(255) DEFAULT NULL,
  `cantMaxEquipos` int(11) DEFAULT NULL,
  `modalidad` varchar(255) DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL,
  `fechaInicio` datetime DEFAULT NULL,
  `fechaFin` datetime DEFAULT NULL,
  `fasesDeGrupo` tinyint(4) DEFAULT NULL,
  `inscripcion` varchar(255) NOT NULL,
  `Juegos_idJuegos` int(11) NOT NULL,
  `EquipoIndividual` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `torneos`
--

INSERT INTO `torneos` (`idTorneo`, `torneo`, `cantMaxEquipos`, `modalidad`, `estado`, `fechaInicio`, `fechaFin`, `fasesDeGrupo`, `inscripcion`, `Juegos_idJuegos`, `EquipoIndividual`) VALUES
(1, 'Sin Torneo', 0, '5 vs 5', 'En Espera', '2020-06-10 00:00:00', '2020-06-30 23:00:00', 1, '', 1, 0),
(2, 'En Nombre De Demacia', 12, '3 vs 3', 'Activo', '2020-08-01 20:00:00', '2020-08-30 22:00:00', 1, '500', 2, 1),
(3, 'El chasquido', 20, 'Todos vs Todos', 'En Espera', '2020-06-27 20:00:00', '2020-06-27 22:00:00', 1, '150', 4, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `torneos_has_usuarios`
--

CREATE TABLE `torneos_has_usuarios` (
  `Torneos_idTorneo` int(11) NOT NULL,
  `Usuarios_idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `torneos_has_usuarios`
--

INSERT INTO `torneos_has_usuarios` (`Torneos_idTorneo`, `Usuarios_idUsuario`) VALUES
(3, 5),
(3, 6),
(3, 7),
(3, 8),
(3, 9),
(3, 10),
(3, 11),
(3, 12),
(3, 13),
(3, 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `usuario` varchar(255) DEFAULT NULL,
  `emailUsuario` varchar(255) DEFAULT NULL,
  `passUsuario` varchar(255) DEFAULT NULL,
  `avatarUsuario` varchar(255) DEFAULT NULL,
  `saldoEfectivo` float DEFAULT NULL,
  `saldoMonVir` double DEFAULT NULL,
  `isAdmin` tinyint(4) DEFAULT NULL,
  `Cupones_idCupon` int(11) NOT NULL,
  `Equipos_idEquipos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `usuario`, `emailUsuario`, `passUsuario`, `avatarUsuario`, `saldoEfectivo`, `saldoMonVir`, `isAdmin`, `Cupones_idCupon`, `Equipos_idEquipos`) VALUES
(1, 'adminvsarena', 'admin@email.com', '123456789', '1-vampiro-zombie.png', 0, 0, 1, 1, 1),
(2, 'olimpoDM', 'olimpodm@olimpodm.com', '123456789', '15-momia.png', 0, 0, 0, 1, 1),
(3, 'Nordico154', 'nordico@email.com', '123456789', '2-leñador-zombie.png', 0, 0, 0, 1, 5),
(4, 'CalabazaFire', 'calabaza@email.com', '123456789', '3-calabaza.png', 0, 0, 0, 1, 5),
(5, 'Fantasmita321', 'fantasma@email.com', 'fantasma654987', '4-fantasma.png', 0, 0, 1, 1, 5),
(6, 'HZ159', 'hipsterzz@email.com', 'hhzz123456', '5-hipster-zombie.png', 0, 0, 0, 1, 4),
(7, 'Zombie357', 'fachazz@email.com', 'fz321654', '6-facha-zombie.png', 0, 0, 0, 1, 4),
(8, 'MissZombie412', 'misszz@email.com', '123456789mz', '7-miss-zombie.png', 0, 0, 0, 1, 4),
(9, 'PunkPunk', 'punk@email.com', '123456789', '8-punk-zombie.png', 0, 0, 1, 1, 3),
(10, 'ZZBigBig', 'bigbigzombie@email.com', '123456789', '9-big-zombie.png', 0, 0, 1, 1, 3),
(11, 'dracula', 'draculatt@email.com', '123456789', '10-vampiro.png', 0, 0, 1, 1, 3),
(12, 'Brujagg', 'bruja@email.com', '123456789', '11-bruja.png', 0, 0, 0, 1, 2),
(13, 'PueroHueso123', 'purohuesos@email.com', '123456789', '12-esqueleto.png', 0, 0, 1, 1, 2),
(14, 'Demonio666', 'demonio666@email.com', '123456789', '13-demonio.png', 0, 0, 1, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `idVenta` int(11) NOT NULL,
  `cantidadProductos` int(11) DEFAULT NULL,
  `totalVenta` double DEFAULT NULL,
  `Usuarios_idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`idVenta`, `cantidadProductos`, `totalVenta`, `Usuarios_idUsuario`) VALUES
(1, 3, 44.97, 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`idComentario`,`Usuarios_idUsuario`,`Noticias_idNoticia`,`Productos_idProducto`),
  ADD KEY `fk_Comentarios_Noticias1_idx` (`Noticias_idNoticia`),
  ADD KEY `fk_Comentarios_Usuarios1_idx` (`Usuarios_idUsuario`),
  ADD KEY `fk_Comentarios_Productos1_idx` (`Productos_idProducto`);

--
-- Indices de la tabla `cupones`
--
ALTER TABLE `cupones`
  ADD PRIMARY KEY (`idCupon`);

--
-- Indices de la tabla `detallesventas`
--
ALTER TABLE `detallesventas`
  ADD PRIMARY KEY (`Ventas_idVenta`,`Productos_idProducto`),
  ADD KEY `fk_DetallesVenta_has_Productos_Productos1_idx` (`Productos_idProducto`),
  ADD KEY `fk_DetallesVenta_Productos_Ventas1_idx` (`Ventas_idVenta`);

--
-- Indices de la tabla `enfrentamientos`
--
ALTER TABLE `enfrentamientos`
  ADD PRIMARY KEY (`idEnfrentamiento`,`Rondas_idRondas`,`Grupos_idGrupos`),
  ADD KEY `fk_Enfrentamientos_Rondas1_idx` (`Rondas_idRondas`),
  ADD KEY `fk_Enfrentamientos_Grupos1_idx` (`Grupos_idGrupos`);

--
-- Indices de la tabla `enfrentamientos_equipos`
--
ALTER TABLE `enfrentamientos_equipos`
  ADD PRIMARY KEY (`Enfrentamientos_idEnfrentamientos`,`Equipos_idEquipo`),
  ADD KEY `fk_Enfrentamientos_has_Equipos_Equipos1_idx` (`Equipos_idEquipo`),
  ADD KEY `fk_Enfrentamientos_has_Equipos_Enfrentamientos1_idx` (`Enfrentamientos_idEnfrentamientos`);

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`idEquipo`,`lider_idUsuario`),
  ADD KEY `fk_Equipos_Usuarios1_idx` (`lider_idUsuario`);

--
-- Indices de la tabla `equipos_has_torneos`
--
ALTER TABLE `equipos_has_torneos`
  ADD PRIMARY KEY (`Equipos_idEquipo`,`Torneos_idTorneo`),
  ADD KEY `fk_Equipos_has_Torneos_Torneos1_idx` (`Torneos_idTorneo`),
  ADD KEY `fk_Equipos_has_Torneos_Equipos1_idx` (`Equipos_idEquipo`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`idGrupo`,`Torneos_idTorneos`),
  ADD KEY `fk_Grupos_Torneos1_idx` (`Torneos_idTorneos`);

--
-- Indices de la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD PRIMARY KEY (`idJuego`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`idNoticia`,`Usuarios_idUsuario`),
  ADD KEY `fk_Noticias_Usuarios1_idx` (`Usuarios_idUsuario`);

--
-- Indices de la tabla `premios`
--
ALTER TABLE `premios`
  ADD PRIMARY KEY (`idPremio`,`Torneos_idTorneos`,`Equipos_idEquipo`,`Usuarios_idUsuario`),
  ADD KEY `fk_Premios_Torneos1_idx` (`Torneos_idTorneos`),
  ADD KEY `fk_Premios_Equipos1_idx` (`Equipos_idEquipo`),
  ADD KEY `fk_Premios_Usuarios1_idx` (`Usuarios_idUsuario`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`,`Cupones_idCupones`),
  ADD KEY `fk_Productos_Cupones1_idx` (`Cupones_idCupones`);

--
-- Indices de la tabla `rondas`
--
ALTER TABLE `rondas`
  ADD PRIMARY KEY (`idRonda`,`Torneos_idTorneos`),
  ADD KEY `fk_Rondas_Torneos1_idx` (`Torneos_idTorneos`);

--
-- Indices de la tabla `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`idTag`);

--
-- Indices de la tabla `tags_has_noticias`
--
ALTER TABLE `tags_has_noticias`
  ADD PRIMARY KEY (`Tags_idTag`,`Noticias_idNoticia`),
  ADD KEY `fk_Tags_has_Noticias_Noticias1_idx` (`Noticias_idNoticia`),
  ADD KEY `fk_Tags_has_Noticias_Tags1_idx` (`Tags_idTag`);

--
-- Indices de la tabla `torneos`
--
ALTER TABLE `torneos`
  ADD PRIMARY KEY (`idTorneo`,`Juegos_idJuegos`),
  ADD KEY `fk_Torneos_Juegos1_idx` (`Juegos_idJuegos`);

--
-- Indices de la tabla `torneos_has_usuarios`
--
ALTER TABLE `torneos_has_usuarios`
  ADD PRIMARY KEY (`Torneos_idTorneo`,`Usuarios_idUsuario`),
  ADD KEY `fk_Torneos_has_Usuarios_Usuarios1_idx` (`Usuarios_idUsuario`),
  ADD KEY `fk_Torneos_has_Usuarios_Torneos1_idx` (`Torneos_idTorneo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`,`Cupones_idCupon`),
  ADD KEY `fk_Usuarios_Cupones1_idx` (`Cupones_idCupon`),
  ADD KEY `Equipos_idEquipo` (`Equipos_idEquipos`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`idVenta`,`Usuarios_idUsuario`),
  ADD KEY `fk_Ventas_Usuarios1_idx` (`Usuarios_idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `idComentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `cupones`
--
ALTER TABLE `cupones`
  MODIFY `idCupon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `enfrentamientos`
--
ALTER TABLE `enfrentamientos`
  MODIFY `idEnfrentamiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `idEquipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
  MODIFY `idGrupo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `juegos`
--
ALTER TABLE `juegos`
  MODIFY `idJuego` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `idNoticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `premios`
--
ALTER TABLE `premios`
  MODIFY `idPremio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `rondas`
--
ALTER TABLE `rondas`
  MODIFY `idRonda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tags`
--
ALTER TABLE `tags`
  MODIFY `idTag` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `torneos`
--
ALTER TABLE `torneos`
  MODIFY `idTorneo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `idVenta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `fk_Comentarios_Noticias1` FOREIGN KEY (`Noticias_idNoticia`) REFERENCES `noticias` (`idNoticia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Comentarios_Productos1` FOREIGN KEY (`Productos_idProducto`) REFERENCES `productos` (`idProducto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Comentarios_Usuarios1` FOREIGN KEY (`Usuarios_idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detallesventas`
--
ALTER TABLE `detallesventas`
  ADD CONSTRAINT `fk_DetallesVenta_Productos_Ventas1` FOREIGN KEY (`Ventas_idVenta`) REFERENCES `ventas` (`idVenta`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_DetallesVenta_has_Productos_Productos1` FOREIGN KEY (`Productos_idProducto`) REFERENCES `productos` (`idProducto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `enfrentamientos`
--
ALTER TABLE `enfrentamientos`
  ADD CONSTRAINT `fk_Enfrentamientos_Grupos1` FOREIGN KEY (`Grupos_idGrupos`) REFERENCES `grupos` (`idGrupo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Enfrentamientos_Rondas1` FOREIGN KEY (`Rondas_idRondas`) REFERENCES `rondas` (`idRonda`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `enfrentamientos_equipos`
--
ALTER TABLE `enfrentamientos_equipos`
  ADD CONSTRAINT `fk_Enfrentamientos_has_Equipos_Enfrentamientos1` FOREIGN KEY (`Enfrentamientos_idEnfrentamientos`) REFERENCES `enfrentamientos` (`idEnfrentamiento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Enfrentamientos_has_Equipos_Equipos1` FOREIGN KEY (`Equipos_idEquipo`) REFERENCES `equipos` (`idEquipo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD CONSTRAINT `fk_Equipos_Usuarios1` FOREIGN KEY (`lider_idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `equipos_has_torneos`
--
ALTER TABLE `equipos_has_torneos`
  ADD CONSTRAINT `fk_Equipos_has_Torneos_Equipos1` FOREIGN KEY (`Equipos_idEquipo`) REFERENCES `equipos` (`idEquipo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Equipos_has_Torneos_Torneos1` FOREIGN KEY (`Torneos_idTorneo`) REFERENCES `torneos` (`idTorneo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD CONSTRAINT `fk_Grupos_Torneos1` FOREIGN KEY (`Torneos_idTorneos`) REFERENCES `torneos` (`idTorneo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD CONSTRAINT `fk_Noticias_Usuarios1` FOREIGN KEY (`Usuarios_idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `premios`
--
ALTER TABLE `premios`
  ADD CONSTRAINT `fk_Premios_Equipos1` FOREIGN KEY (`Equipos_idEquipo`) REFERENCES `equipos` (`idEquipo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Premios_Torneos1` FOREIGN KEY (`Torneos_idTorneos`) REFERENCES `torneos` (`idTorneo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Premios_Usuarios1` FOREIGN KEY (`Usuarios_idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_Productos_Cupones1` FOREIGN KEY (`Cupones_idCupones`) REFERENCES `cupones` (`idCupon`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `rondas`
--
ALTER TABLE `rondas`
  ADD CONSTRAINT `fk_Rondas_Torneos1` FOREIGN KEY (`Torneos_idTorneos`) REFERENCES `torneos` (`idTorneo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tags_has_noticias`
--
ALTER TABLE `tags_has_noticias`
  ADD CONSTRAINT `fk_Tags_has_Noticias_Noticias1` FOREIGN KEY (`Noticias_idNoticia`) REFERENCES `noticias` (`idNoticia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Tags_has_Noticias_Tags1` FOREIGN KEY (`Tags_idTag`) REFERENCES `tags` (`idTag`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `torneos`
--
ALTER TABLE `torneos`
  ADD CONSTRAINT `fk_Torneos_Juegos1` FOREIGN KEY (`Juegos_idJuegos`) REFERENCES `juegos` (`idJuego`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `torneos_has_usuarios`
--
ALTER TABLE `torneos_has_usuarios`
  ADD CONSTRAINT `fk_Torneos_has_Usuarios_Torneos1` FOREIGN KEY (`Torneos_idTorneo`) REFERENCES `torneos` (`idTorneo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Torneos_has_Usuarios_Usuarios1` FOREIGN KEY (`Usuarios_idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_Usuarios_Cupones1` FOREIGN KEY (`Cupones_idCupon`) REFERENCES `cupones` (`idCupon`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `fk_Ventas_Usuarios1` FOREIGN KEY (`Usuarios_idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
