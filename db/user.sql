-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 28 2023 г., 09:23
-- Версия сервера: 10.4.27-MariaDB
-- Версия PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `olga`
--

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` text NOT NULL,
  `password` text NOT NULL,
  `fio` text NOT NULL,
  `born` date NOT NULL,
  `country` text NOT NULL,
  `gender` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `fio`, `born`, `country`, `gender`) VALUES
(1, 'Olga', '123', 'A B V', '2004-04-13', 'Таганрог ', 0),
(4, 'edgvdv', '11235r45', 'Ольга Дмитриевна Усатова', '3004-04-13', 'Таганрог ', 0),
(5, 'edgvdv', '11235r45', 'Ольга Дмитриевна Усатова', '0000-00-00', 'asfasf', 0),
(6, 'edgvdv', '11235r45', 'Ольга Дмитриевна Усатова', '0000-00-00', 'ысыфсаыявс', 0),
(7, 'edgvdv', '11235r45', 'Ольга Дмитриевна Усатова', '0000-00-00', '3535', 0),
(8, 'superUser', '123', 'FIO', '1993-03-13', 'City', 0),
(11, 'asd', '1', '', '0000-00-00', '', 1),
(12, 'qwe', '1', '', '0000-00-00', '', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
