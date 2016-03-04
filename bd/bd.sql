-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Мар 04 2016 г., 14:15
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `store`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `price` int(6) NOT NULL,
  `category` varchar(20) NOT NULL,
  `images` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `images`, `description`) VALUES
(1, 'Manga-book', 300, 'category', 'images/1.png', 'vaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(2, 'Темний дворецький', 1000, 'category', '/images/2.png', 'vvvvvvvvvvvffffffffffffffffggggggggggggggggggg'),
(3, 'Клеймор', 2000, 'category', '/images/3.png', 'sdffvbdsdfgfg'),
(4, 'Наруто', 1000, 'category', '/images/4.png', 'dfgbfnhdfhdg'),
(5, 'Neko', 50, 'category', '/images/12.png', 'fdfdfgfd'),
(6, 'Кланад', 180, 'category', '/images/123.png', 'fsdgdfgdf'),
(7, 'VA', 380, 'category', '/images/13.png', 'fsdfcfgdfgdf'),
(8, 'VgA', 80, 'category', '/images/134.png', 'fsdfcfgdfgdf'),
(9, 'nn', 30, 'category', '/images/1ff.png', 'fsdfcfggfgdfgdf');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
