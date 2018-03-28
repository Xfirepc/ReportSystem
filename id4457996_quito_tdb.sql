-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 28-03-2018 a las 04:58:08
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id4457996_quito_tdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` longtext NOT NULL,
  `url_image` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `mentions` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `blog`
--

INSERT INTO `blog` (`id`, `title`, `description`, `url_image`, `date`, `mentions`) VALUES
(1, 'asdasd', 'asdasd', 'asdasdasd', '2018-03-15', 'asdasd, asdasd,as,asdasd,asdaas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradas`
--

CREATE TABLE `entradas` (
  `post_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `desc_short` varchar(300) NOT NULL,
  `desc_small` longtext NOT NULL,
  `etiqueta` varchar(150) NOT NULL,
  `comentarios` varchar(200) NOT NULL,
  `img` varchar(100) NOT NULL,
  `posted_by` varchar(100) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `type` int(2) NOT NULL DEFAULT '0',
  `fecha` date NOT NULL,
  `seo_desc` varchar(1000) NOT NULL,
  `seo_subj` varchar(1000) NOT NULL,
  `seo_key` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` longtext NOT NULL,
  `category` varchar(20) NOT NULL,
  `url_image` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `link` varchar(200) NOT NULL,
  `client` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `portfolio`
--

INSERT INTO `portfolio` (`id`, `name`, `title`, `description`, `category`, `url_image`, `date`, `link`, `client`) VALUES
(2, 'asdasdads', 'bhj', 'bkj,', 'bkjikjbn', 'kbvuknkm', '0000-00-00', '', 'kbjknub,nm'),
(3, 'asdasdadsaaaas', 'asdasdasfasdafgfAFAD', 'bkjAAAAAAA,', 'bkjikjbn', 'kbvuknkm', '2018-03-24', 'asdasdfasdas', 'kbjknub,nm');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes`
--

CREATE TABLE `solicitudes` (
  `id` int(11) NOT NULL,
  `user_ci` varchar(50) NOT NULL,
  `username` varchar(80) NOT NULL,
  `content` text NOT NULL,
  `status` int(2) NOT NULL,
  `fecha` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `solicitudes`
--

INSERT INTO `solicitudes` (`id`, `user_ci`, `username`, `content`, `status`, `fecha`) VALUES
(4, '1718429184', 'Jose Vinicio Flores Arias', 'Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como por ejemplo \"Contenido aquí, contenido aquí\". Estos textos hacen parecerlo un español que se puede leer. Muchos paquetes de autoedición y editores de páginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una búsqueda de \"Lorem Ipsum\" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a través de los años, algunas veces por accidente, otras veces a propósito (por ejemplo insertándole humor y cosas por el estilo).', 0, '2018-03-10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `ci` int(10) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `estado_civ` varchar(15) NOT NULL,
  `nacimiento` varchar(40) NOT NULL,
  `fingreso` varchar(40) NOT NULL,
  `fnacimiento` varchar(40) NOT NULL,
  `direccion` varchar(70) NOT NULL,
  `telefono` int(10) NOT NULL,
  `telefono_e` int(10) NOT NULL,
  `email` varchar(70) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `observaciones` varchar(70) NOT NULL,
  `role` int(3) NOT NULL,
  `img` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `nombres`, `apellidos`, `ci`, `cargo`, `estado_civ`, `nacimiento`, `fingreso`, `fnacimiento`, `direccion`, `telefono`, `telefono_e`, `email`, `pass`, `observaciones`, `role`, `img`) VALUES
(11, 'Jose Vinicio', 'Flores Arias', 1718429184, 'Developer', 'Soltero/a', 'Quito', '2018-03-20', '2018-03-08', 'La Merceds', 2147483647, 2147483647, 'vinygfx@gmail.com', 'f74c58e4e42b42b1a798162cecac8dc7', '', 0, 'xf-1519956087.jpg'),
(13, 'bryan', 'saigua', 1725176430, 'admin', 'Soltero/a', 'riobamba', '2000-02-20', '1997-10-06', 'caupicho', 979353137, 3084591, 'bryan-alexander2013@hotmail.com', 'fdef38960248561b16d205d3c1eb2490', '', 0, 'xf-1519953055.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `entradas`
--
ALTER TABLE `entradas`
  ADD PRIMARY KEY (`post_id`);

--
-- Indices de la tabla `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `entradas`
--
ALTER TABLE `entradas`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
