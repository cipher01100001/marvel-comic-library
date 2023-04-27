-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-04-2023 a las 04:21:58
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_marvel_library`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comic`
--

CREATE TABLE `comic` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `data_comic` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`data_comic`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `comic`
--

INSERT INTO `comic` (`id`, `id_user`, `data_comic`) VALUES
(1, 1, '{\"id\":49010,\"digitalId\":34127,\"title\":\"100th Anniversary Special (2014) #1\",\"issueNumber\":1,\"variantDescription\":\"\",\"description\":\"CELEBRATE 100 YEARS OF EARTH&#39;S MIGHTIEST HEROES &ndash; THE AVENGERS! Following the failed Badoon invasion of Earth and America&#39;s disappearance into the Negative Zone, how will the Avengers of 2061 cope?!\",\"modified\":\"2014-07-16T13:13:34-0400\",\"isbn\":\"\",\"upc\":\"75960608000700411\",\"diamondCode\":\"\",\"ean\":\"\",\"issn\":\"\",\"format\":\"Comic\",\"pageCount\":32,\"textObjects\":[{\"type\":\"issue_solicit_text\",\"language\":\"en-us\",\"text\":\"CELEBRATE 100 YEARS OF EARTH&#39;S MIGHTIEST HEROES &ndash; THE AVENGERS! Following the failed Badoon invasion of Earth and America&#39;s disappearance into the Negative Zone, how will the Avengers of 2061 cope?!\"}],\"resourceURI\":\"http:\\/\\/gateway.marvel.com\\/v1\\/public\\/comics\\/49010\",\"urls\":[{\"type\":\"detail\",\"url\":\"http:\\/\\/marvel.com\\/comics\\/issue\\/49010\\/100th_anniversary_special_2014_1?utm_campaign=apiRef&utm_source=fc853aafea66be8a96b7ba778b4019c9\"},{\"type\":\"purchase\",\"url\":\"http:\\/\\/comicstore.marvel.com\\/100th-Anniversary-Special-1\\/digital-comic\\/34127?utm_campaign=apiRef&utm_source=fc853aafea66be8a96b7ba778b4019c9\"},{\"type\":\"reader\",\"url\":\"http:\\/\\/marvel.com\\/digitalcomics\\/view.htm?iid=34127&utm_campaign=apiRef&utm_source=fc853aafea66be8a96b7ba778b4019c9\"},{\"type\":\"inAppLink\",\"url\":\"https:\\/\\/applink.marvel.com\\/issue\\/34127?utm_campaign=apiRef&utm_source=fc853aafea66be8a96b7ba778b4019c9\"}],\"series\":{\"resourceURI\":\"http:\\/\\/gateway.marvel.com\\/v1\\/public\\/series\\/18454\",\"name\":\"100th Anniversary Special (2014)\"},\"variants\":[{\"resourceURI\":\"http:\\/\\/gateway.marvel.com\\/v1\\/public\\/comics\\/49011\",\"name\":\"100th Anniversary Special (2014) #1\"},{\"resourceURI\":\"http:\\/\\/gateway.marvel.com\\/v1\\/public\\/comics\\/49009\",\"name\":\"100th Anniversary Special (2014) #1\"},{\"resourceURI\":\"http:\\/\\/gateway.marvel.com\\/v1\\/public\\/comics\\/49008\",\"name\":\"100th Anniversary Special (2014) #1\"},{\"resourceURI\":\"http:\\/\\/gateway.marvel.com\\/v1\\/public\\/comics\\/49007\",\"name\":\"100th Anniversary Special (2014) #1\"}],\"collections\":[],\"collectedIssues\":[],\"dates\":[{\"type\":\"onsaleDate\",\"date\":\"2014-07-23T00:00:00-0400\"},{\"type\":\"focDate\",\"date\":\"2014-07-09T00:00:00-0400\"},{\"type\":\"unlimitedDate\",\"date\":\"2015-01-19T00:00:00-0500\"},{\"type\":\"digitalPurchaseDate\",\"date\":\"2014-07-23T00:00:00-0400\"}],\"prices\":[{\"type\":\"printPrice\",\"price\":3.99},{\"type\":\"digitalPurchasePrice\",\"price\":3.99}],\"thumbnail\":{\"path\":\"http:\\/\\/i.annihil.us\\/u\\/prod\\/marvel\\/i\\/mg\\/3\\/a0\\/53c406e09649c\",\"extension\":\"jpg\"},\"images\":[{\"path\":\"http:\\/\\/i.annihil.us\\/u\\/prod\\/marvel\\/i\\/mg\\/3\\/a0\\/53c406e09649c\",\"extension\":\"jpg\"},{\"path\":\"http:\\/\\/i.annihil.us\\/u\\/prod\\/marvel\\/i\\/mg\\/c\\/40\\/536cffe2a8b13\",\"extension\":\"jpg\"}],\"creators\":{\"available\":0,\"collectionURI\":\"http:\\/\\/gateway.marvel.com\\/v1\\/public\\/comics\\/49010\\/creators\",\"items\":[],\"returned\":0},\"characters\":{\"available\":0,\"collectionURI\":\"http:\\/\\/gateway.marvel.com\\/v1\\/public\\/comics\\/49010\\/characters\",\"items\":[],\"returned\":0},\"stories\":{\"available\":2,\"collectionURI\":\"http:\\/\\/gateway.marvel.com\\/v1\\/public\\/comics\\/49010\\/stories\",\"items\":[{\"resourceURI\":\"http:\\/\\/gateway.marvel.com\\/v1\\/public\\/stories\\/110107\",\"name\":\"cover from 100th Anniversary Special (2014) #4\",\"type\":\"cover\"},{\"resourceURI\":\"http:\\/\\/gateway.marvel.com\\/v1\\/public\\/stories\\/110108\",\"name\":\"story from 100th Anniversary Special (2014) #4\",\"type\":\"interiorStory\"}],\"returned\":2},\"events\":{\"available\":0,\"collectionURI\":\"http:\\/\\/gateway.marvel.com\\/v1\\/public\\/comics\\/49010\\/events\",\"items\":[],\"returned\":0}}');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comic`
--
ALTER TABLE `comic`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comic`
--
ALTER TABLE `comic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
