-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Окт 06 2019 г., 11:44
-- Версия сервера: 5.7.17-log
-- Версия PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `register_bd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `login` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES
(2, 'sdfvxvsd', 'Footboll777', 'Ярослав'),
(4, 'jojonf', '359f0b08fba4ab7d85181b76027a7e5f', 'popik'),
(6, 'Joker', '359f0b08fba4ab7d85181b76027a7e5f', 'DFSDCSEDDFZ'),
(8, 'Jojor', '359f0b08fba4ab7d85181b76027a7e5f', 'Ярослав'),
(10, 'fffffff', '359f0b08fba4ab7d85181b76027a7e5f', 'Ярослав'),
(11, 'sdgsdf', '359f0b08fba4ab7d85181b76027a7e5f', 'popik'),
(13, 'ewfwrwedfew', '9f02dfb96d50d6854f4bf090d3817d6f', 'sdfewfew'),
(15, 'jojojo', '39f29ff4a8675d15e1d049ff9b220106', 'jojojo'),
(16, 'superman', '8efff4f0581565c81781c517712fe892', 'superman'),
(17, 'popik', '8b0afaf4da3c1066182bcff97d76d8ca', 'popik'),
(18, 'rudich', '300f0321e480f527ee2ab03ba1abb6ea', 'rudich');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
