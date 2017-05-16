-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 16 2017 г., 10:55
-- Версия сервера: 5.6.31
-- Версия PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `task1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `homepage` varchar(255) NOT NULL,
  `userip` varchar(100) NOT NULL,
  `browser` varchar(100) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `text`, `homepage`, `userip`, `browser`, `date`) VALUES
(1, 'sdfgsd', 'ssfg@gmail.com', '', 'adfas', '', '', '0000-00-00 00:00:00'),
(2, 'gsdfg', 'hello@gmail.com', '', '', '', '', '0000-00-00 00:00:00'),
(3, 'sdfgsdfsd', 'sadfasd@gmail.com', '', '', '', '', '0000-00-00 00:00:00'),
(4, 'sdfgsdf', 'sdfgs@gmail.com', '', 'asdfas', 'asdfas', '127.0.0.1', '0000-00-00 00:00:00'),
(5, 'asdafas', 'aasdfasdfasdfas@gmail.com', '', 'asdfasdf', 'asdfasdfas', '127.0.0.1', '0000-00-00 00:00:00'),
(6, 'sdfgsdf', 'sdfgsdfg@gmail.com', 'asdfasdfasf', 'asdfasdf', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.106 Safari/537.', '0000-00-00 00:00:00'),
(7, 'asdfasdf', 'asdfasdfasdfasd@rambler.ru', 'asdfasdfasdf', '', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.106 Safari/537.', '0000-00-00 00:00:00'),
(8, 'asdfasdf', 'adfasdfasdfa@gmail.com', 'asdfasfasdf', 'asdfasdfasdfas', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.106 Safari/537.', '0000-00-00 00:00:00'),
(9, 'afsfasdf', 'afa@gamail.xom', 'asdfasdfa', 'asdfasd', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.106 Safari/537.', '0000-00-00 00:00:00'),
(10, 'sdfgsdg', 'sdfgsdg@rambler.ru', 'sdfgsdf', 'sfgsdg', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.106 Safari/537.', '0000-00-00 00:00:00'),
(11, 'cxbxcvbxc', 'xcb@gmail.com', 'asdfasdfas', 'asdfas', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.106 Safari/537.', '0000-00-00 00:00:00'),
(12, 'zcvzxv', 'zxcvzxvzx@gmail.com', 'asdfasdfas', 'asfasdfas', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.106 Safari/537.', '0000-00-00 00:00:00'),
(13, 'sdgdfgdf', 'sdfgsdgsd@gmail.com', 'sdfgsdgsdfgsd', 'sdfgsdfgsdgs', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.106 Safari/537.', '0000-00-00 00:00:00');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
