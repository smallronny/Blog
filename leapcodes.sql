-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-03-2019 a las 05:41:39
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `leapcodes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entries`
--

CREATE TABLE `entries` (
  `id` int(11) NOT NULL,
  `permalink` varchar(100) NOT NULL,
  `author` varchar(50) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL,
  `tags` text NOT NULL,
  `imagen` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `entries`
--

INSERT INTO `entries` (`id`, `permalink`, `author`, `title`, `content`, `date`, `tags`, `imagen`) VALUES
(12, 'coste-cero', 'Small Ronny', 'Coste cero', 'Hay algunos personas, pequeños emprendedores o incluso pymes que por el volumen de su negocio no tienen ese presupuesto inicial, por lo menos a muy corto plazo que requiere una inversión para otro blog.\r\n', '2019-03-29 00:00:00', 'Coste cero', NULL),
(13, 'facilidad-de-uso', 'Small Ronny', 'Facilidad de uso', 'Son sistemas y plataformas sencillas de usar, con configuraciones básicas e intuitivas que en ningún caso requieren de una curva de aprendizaje alta.', '2019-03-29 00:00:00', 'Facilidad de uso', NULL),
(14, 'adaptabilidad', 'Small Ronny', 'Adaptabilidad', 'Encuentra entre las muchas plataformas que te muestro más adelante la que más se adapte a tus necesidades y crea tu blog gratis desde cero.', '2019-03-29 00:00:00', 'Adaptabilidad', NULL),
(15, '-visibilidad-y-posicionamiento-gratis', 'Small Ronny', ' Visibilidad y posicionamiento gratis', 'De forma gratuita y sin invertir dinero (en publicidad por ejemplo) vas a poder obtener presencia en la red.\r\nSi no te puedes permitir poner en marcha una estrategia SEO, esta es una muy buena opción.', '2019-03-29 00:00:00', ' Visibilidad y posicionamiento gratis', NULL),
(17, 'el-blog-no-es-tuyo', 'Small Ronny', 'El blog no es tuyo', 'Si un día esas reglas o condiciones cambian y no estás conforme te podrás quedar sin nada. O peor aún, imagina que deciden cerrar sin previo aviso (esto es más habitual de lo que parece en internet).', '2019-03-29 00:00:00', 'El blog no es tuyo', NULL),
(18, 'limitaciones', 'Small Ronny', 'Limitaciones', 'Tampoco la mayoría permite utilizar plugins, código HTML o CSS y solo te dan acceso a un número limitado de plantillas (debiendo pagar un plus o contratar un servicio extra si quieres más prestaciones o personalización, es decir', '2019-03-29 00:00:00', 'Limitaciones', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `entries`
--
ALTER TABLE `entries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `entries`
--
ALTER TABLE `entries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
