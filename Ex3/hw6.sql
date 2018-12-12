-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 12 2018 г., 11:35
-- Версия сервера: 5.6.41
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `hw6`
--

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id` tinyint(3) NOT NULL,
  `name` varchar(10) NOT NULL,
  `review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `review`) VALUES
(1, 'John', 'Enim harum modi nemo nobis odio reprehenderit sunt totam ullam velit voluptates! Dolorem, doloremque\r\n            eveniet excepturi fugit officiis quo ratione rerum sequi? Cumque debitis modi officia quod quos rem vero?'),
(2, 'Michael', 'Accusamus aut corporis ea enim est laborum recusandae saepe sequi similique vero? Alias autem cumque\r\n            dolorem dolorum fuga illo magni nisi perspiciatis sed ut. Esse eveniet iusto laborum velit voluptate!'),
(3, 'John', 'Enim harum modi nemo nobis odio reprehenderit sunt totam ullam velit voluptates! Dolorem, doloremque\r\n            eveniet excepturi fugit officiis quo ratione rerum sequi? Cumque debitis modi officia quod quos rem vero?'),
(4, 'Michael', 'Accusamus aut corporis ea enim est laborum recusandae saepe sequi similique vero? Alias autem cumque\r\n            dolorem dolorum fuga illo magni nisi perspiciatis sed ut. Esse eveniet iusto laborum velit voluptate!'),
(13, '', ''),
(14, '', ''),
(15, '', ''),
(16, '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
