-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-01-2019 a las 22:40:50
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pprofesionistasdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(8) NOT NULL,
  `nombre` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `a_paterno` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `a_materno` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre`, `a_paterno`, `a_materno`) VALUES
(1, 'Leticia', 'Olivera', 'Ortiz'),
(2, 'Maria', 'Martinez', 'Vicente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesionistas`
--

CREATE TABLE `profesionistas` (
  `id_profesionista` int(8) NOT NULL,
  `nombre` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `a_paterno` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `a_materno` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `num_int` varchar(8) COLLATE utf8_spanish_ci NOT NULL,
  `num_ext` varchar(8) COLLATE utf8_spanish_ci NOT NULL,
  `calle` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `colonia` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `municipio` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `tel` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `cel` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `profesion` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `servicios` text COLLATE utf8_spanish_ci NOT NULL,
  `categoria` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `web` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `foto` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `profesionistas`
--

INSERT INTO `profesionistas` (`id_profesionista`, `nombre`, `a_paterno`, `a_materno`, `num_int`, `num_ext`, `calle`, `colonia`, `municipio`, `estado`, `tel`, `cel`, `profesion`, `servicios`, `categoria`, `web`, `foto`) VALUES
(1, 'Gregorio', 'Ramírez', 'Reyes', '', '', '', '', 'Minatitlán', 'Veracruz', '2417057', '9221273984', 'Técnico en dibujo', 'Diseño de planos para hogares e industria. Diseño  con digital con AutoCAD. Diseño industrial. Dibujo a mano alzada.', 'Hogar', 'www.gregoriorr.com', ''),
(2, 'Daniel Alejandro', 'Nieto', 'Rasgado', '', '', '', '', 'Coatzacoalcos', 'Veracruz', '', '4777867822', 'Desarrollo Audiovisual', 'Desarrollo de videoclips, animaciones, edición de video. Fotografía profesional para productos, servicios y eventos.', 'Tecnología', 'www.bunkerlab.info', ''),
(3, 'Mariana L.', 'Ortiz', 'García', '30', '', 'Tercer callejón', 'Reforma', 'Minatitlán', 'Veracruz', '2216057', '9223216547', 'Chef/Repostera', 'Mi enfoque es la elaboración de postres y mesas de dulces para eventos sociales, tenemos los mejores diseños y precios para cada presupuesto.', '', 'www.postresymas.com', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariosc`
--

CREATE TABLE `usuariosc` (
  `id_usuariosc` int(8) NOT NULL,
  `correo` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `contraseña` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuariosc`
--

INSERT INTO `usuariosc` (`id_usuariosc`, `correo`, `contraseña`) VALUES
(1, 'lety@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariosp`
--

CREATE TABLE `usuariosp` (
  `id_usuariop` int(8) NOT NULL,
  `correo` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `contraseña` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuariosp`
--

INSERT INTO `usuariosp` (`id_usuariop`, `correo`, `contraseña`) VALUES
(1, 'gramirezreyes@gmail.com', '12345'),
(2, 'infodaniel@gmail.com', '12345'),
(3, 'postresymas@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoracion`
--

CREATE TABLE `valoracion` (
  `id_valoracion` int(8) NOT NULL,
  `id_c` int(8) NOT NULL,
  `id_p` int(8) NOT NULL,
  `opinion` text COLLATE utf8_spanish_ci NOT NULL,
  `puntuacion` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `valoracion`
--

INSERT INTO `valoracion` (`id_valoracion`, `id_c`, `id_p`, `opinion`, `puntuacion`) VALUES
(1, 1, 1, 'Me hizo el plano de mi casa y fue muy responsable en la entrega, el trabajo muy bien hecho, lo recomiendo ampliamente.', 5),
(2, 2, 1, 'Me hizo un trabajo escolar de mi nieto y lo realizó muy bien hecho y de excelente calidad.', 5),
(3, 1, 2, 'Excelente servicio, me hizo una sesión de fotos familiar y la calidad me encantó, volvería contratarlo sin duda.', 5),
(4, 2, 2, 'Le encargué un video promocional de un producto que elaboro y me ofreció muchas ideas de como hacerlo, me gustó su creatividad y el resultado final.', 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `profesionistas`
--
ALTER TABLE `profesionistas`
  ADD PRIMARY KEY (`id_profesionista`);

--
-- Indices de la tabla `usuariosc`
--
ALTER TABLE `usuariosc`
  ADD PRIMARY KEY (`id_usuariosc`),
  ADD KEY `id_usuariosc` (`id_usuariosc`);

--
-- Indices de la tabla `usuariosp`
--
ALTER TABLE `usuariosp`
  ADD PRIMARY KEY (`id_usuariop`),
  ADD KEY `id_usuariop` (`id_usuariop`);

--
-- Indices de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD PRIMARY KEY (`id_valoracion`),
  ADD KEY `id_c` (`id_c`),
  ADD KEY `id_p` (`id_p`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `profesionistas`
--
ALTER TABLE `profesionistas`
  MODIFY `id_profesionista` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuariosc`
--
ALTER TABLE `usuariosc`
  MODIFY `id_usuariosc` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuariosp`
--
ALTER TABLE `usuariosp`
  MODIFY `id_usuariop` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  MODIFY `id_valoracion` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuariosc`
--
ALTER TABLE `usuariosc`
  ADD CONSTRAINT `usuariosc_ibfk_1` FOREIGN KEY (`id_usuariosc`) REFERENCES `clientes` (`id_cliente`);

--
-- Filtros para la tabla `usuariosp`
--
ALTER TABLE `usuariosp`
  ADD CONSTRAINT `usuariosp_ibfk_1` FOREIGN KEY (`id_usuariop`) REFERENCES `profesionistas` (`id_profesionista`);

--
-- Filtros para la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD CONSTRAINT `valoracion_ibfk_1` FOREIGN KEY (`id_p`) REFERENCES `profesionistas` (`id_profesionista`),
  ADD CONSTRAINT `valoracion_ibfk_2` FOREIGN KEY (`id_c`) REFERENCES `clientes` (`id_cliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
