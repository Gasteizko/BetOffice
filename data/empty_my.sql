-- phpMyAdmin SQL Dump
-- version 3.5.0
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июн 07 2012 г., 16:41
-- Версия сервера: 5.1.61-0+squeeze1
-- Версия PHP: 5.3.3-7+squeeze9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- База данных: `bet`
--

-- --------------------------------------------------------

--
-- Структура таблицы `bets`
--

DROP TABLE IF EXISTS `bets`;
CREATE TABLE `bets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '',
  `subtitle` varchar(255) DEFAULT NULL,
  `categories_id` int(11) NOT NULL DEFAULT '0',
  `image` smallint(6) NOT NULL DEFAULT '0',
  `start` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `end` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `autor_id` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `categories_id` (`categories_id`,`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position` int(11) NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL DEFAULT '',
  `description` varchar(255) DEFAULT NULL,
  `image` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `log`
--

DROP TABLE IF EXISTS `log`;
CREATE TABLE `log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rem_addr` varchar(14) NOT NULL DEFAULT '',
  `rem_host` varchar(50) NOT NULL DEFAULT '',
  `user` varchar(20) NOT NULL DEFAULT '',
  `event` text NOT NULL,
  `rem_agt` varchar(50) NOT NULL DEFAULT '',
  `time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `possibilities`
--

DROP TABLE IF EXISTS `possibilities`;
CREATE TABLE `possibilities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bets_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(100) NOT NULL DEFAULT '',
  `win` char(3) NOT NULL DEFAULT 'no',
  PRIMARY KEY (`id`),
  KEY `bets_id` (`bets_id`,`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `sites`
--

DROP TABLE IF EXISTS `sites`;
CREATE TABLE `sites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  `text` text NOT NULL,
  `author` varchar(20) NOT NULL DEFAULT '',
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE `transactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `possibilities_id` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `credits` smallint(6) NOT NULL DEFAULT '0',
  `time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `possibilities_id` (`possibilities_id`,`user_id`,`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `firstname` varchar(100) NOT NULL DEFAULT '',
  `lastname` varchar(100) NOT NULL DEFAULT '',
  `balance` int(6) NOT NULL DEFAULT '0',
  `status` varchar(100) NOT NULL DEFAULT '',
  `conf_num` varchar(5) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `firstname`, `lastname`, `balance`, `status`, `conf_num`) VALUES
(1, 'admin', 'd9d1b168eac8f197e0576b56cfc23ece', 'cheva@ipnet.kiev.ua', 'Foo', 'Bar', 20, 'administrator', '34791'),
(8, 'dcheva', 'd9d1b168eac8f197e0576b56cfc23ece', 'dmitriy.cheva@gmail.com', 'Dmitry', 'Cheva', 20, 'active', '87456'),
(7, 'dcheva1', 'd9d1b168eac8f197e0576b56cfc23ece', 'dmitry.cheva@gmail.com', 'Dmitry', 'Cheva', 20, 'active', '52751'),
(9, 'dcheva2', 'd9d1b168eac8f197e0576b56cfc23ece', 'cheva@ua.fm', 'Dmitry', 'Cheva', 20, 'active', '65438'),
(10, 'dcheva3', 'd9d1b168eac8f197e0576b56cfc23ece', 'cheva@rambler.ru', 'Dmitry', 'Cheva', 20, 'active', '43526'),
(11, 'dcheva4', 'd9d1b168eac8f197e0576b56cfc23ece', 'root@cheva.kiev.ua', 'Dmitry', 'Cheva', 20, 'active', '55626'),
(12, 'dcheva5', 'd9d1b168eac8f197e0576b56cfc23ece', 'cheva@cheva.kiev.ua', 'Dmitry', 'Cheva', 20, 'active', '19683'),
(17, 'dcheva6', 'd9d1b168eac8f197e0576b56cfc23ece', 'dcheva@cheva.kiev.ua', 'Dmitry', 'Cheva', 20, 'active', '19683'),
(14, 'denys', '4a09b174f31c8cd4b2c99d51883ceb79', 'denysenko@inbox.ru', 'Olesia', 'Denysenko', 20, 'active', '42627'),
(15, 'Koss', '96e79218965eb72c92a549dd5a330112', 'karakurtkoss@gmail.com', '<script>alert(''test'')</script>', 'Shtukert', 20, 'active', '90103'),
(16, 'Lina', '8aa65920b23640418f971ba248ed024c', 'lin_za@ua.fm', 'Lina', 'Zagurskaya', 20, 'active', '81210'),
(18, 'dcheva7', 'd9d1b168eac8f197e0576b56cfc23ece', 'dmitry.cheva@cheva.kiev.ua', 'Dmitry', 'Cheva', 20, 'active', '19683'),
(19, 'dcheva8', 'd9d1b168eac8f197e0576b56cfc23ece', 'dmitriy.cheva@cheva.kiev.ua', 'Dmitry', 'Cheva', 20, 'active', '19683');

-- --------------------------------------------------------

--
-- Структура таблицы `userwins`
--

DROP TABLE IF EXISTS `userwins`;
CREATE TABLE `userwins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `possibilities_id` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `won_credits` int(11) NOT NULL DEFAULT '0',
  `quote` varchar(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `possibilities_id` (`possibilities_id`,`user_id`),
  KEY `user_id` (`user_id`,`possibilities_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

