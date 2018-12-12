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
-- База данных: `catalog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` tinyint(3) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `info` text NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `name`, `photo`, `info`, `description`, `price`) VALUES
(1, 'Шелтер', 'Shelter.png', 'Аппаратно-программный комплекс «Шелтер» предназначен для автоматизированного определения когнитивных функций (обучаемость и память) лабораторных животных на основе реакции избегания электрокожного раздражителя. АПК позволяет проводить тестирование для мышей или крыс.', '<p>В результате тестирования определяются следующие параметры:</p>\r\n<ol>\r\n<li>Время пребывания животного на площадке (в секундах), до спуска животного на пол</li>\r\n<li>Время нахождения животного на полу камеры</li>\r\n<li>Перемещение (путь) грызуна по отдельным зонам и за весь эксперимент</li>\r\n<li>Задержка реакции</li>\r\n<li>Комплексные статистические показатели для выборки грызунов (общее, среднее, M, D, СКО от времени пребывания, пути и скорости перемещения)</li>\r\n</ol>', 27000),
(2, 'Систола', 'Systola.jpg', 'Система неинвазивного измерения кровяного давления грызунов «Систола»', '<p>«Систола» предназначена для неинвазивного измерения систолического и диастолического давления с хвоста грызунов мелких и средних размеров: крыс и мышей.</p>\r\n<p>Встpoeнная пoмпа aвтoмaтически нaгнетaeт дaвлeниe в xвoстoвoй мaнжетe дo прeкpaщeния пульсaций кpoвoтoкa, a зaтeм, мeдлeннo снижaя дaвлениe, измepяeт систoличeскoe и диaстoлическoe дaвлeниe нa oснoвe пoкaзaний инфpaкpaснoгo дaтчикa пyльсa, надeвaeмого нa xвoст живoтнoгo пoслe мaнжeты.</p>\r\n<p><strong>ВНИМАНИЕ!</strong><span>&nbsp;Для неинвазивного измерения кровяного давления у крыс и мышей обязателен подогрев животного. Это позволяет обеспечить циркуляцию крови в хвосте в нужном объеме и стабилизировать кровоток. Необходимо предварительно подогреть животное до температуры 28-32 ˚С в течение 10-15 минут. Такой режим подогрева должен поддерживаться в течение всей процедуры измерения давления. Для подогрева предлагается использовать нагревательную платформу&nbsp;</span>Флогистон<span>&nbsp;или другую подходящую систему подогрева мелких животных.</span></p>', 56734),
(3, 'Шелтер', '', 'Аппаратно-программный комплекс «Шелтер» предназначен для автоматизированного определения когнитивных функций (обучаемость и память) лабораторных животных на основе реакции избегания электрокожного раздражителя. АПК позволяет проводить тестирование для мышей или крыс.', '<p>В результате тестирования определяются следующие параметры:</p>\r\n<ol>\r\n<li>Время пребывания животного на площадке (в секундах), до спуска животного на пол</li>\r\n<li>Время нахождения животного на полу камеры</li>\r\n<li>Перемещение (путь) грызуна по отдельным зонам и за весь эксперимент</li>\r\n<li>Задержка реакции</li>\r\n<li>Комплексные статистические показатели для выборки грызунов (общее, среднее, M, D, СКО от времени пребывания, пути и скорости перемещения)</li>\r\n</ol>', 14000),
(4, 'Систола', 'Systola.jpg', 'Система неинвазивного измерения кровяного давления грызунов «Систола»', '<p>Встpoeнная пoмпа aвтoмaтически нaгнетaeт дaвлeниe в xвoстoвoй мaнжетe дo прeкpaщeния пульсaций кpoвoтoкa, a зaтeм, мeдлeннo снижaя дaвлениe, измepяeт систoличeскoe и диaстoлическoe дaвлeниe нa oснoвe пoкaзaний инфpaкpaснoгo дaтчикa пyльсa, надeвaeмого нa xвoст живoтнoгo пoслe мaнжeты.</p>\r\n<p><strong>ВНИМАНИЕ!</strong><span>&nbsp;Для неинвазивного измерения кровяного давления у крыс и мышей обязателен подогрев животного. Это позволяет обеспечить циркуляцию крови в хвосте в нужном объеме и стабилизировать кровоток. Необходимо предварительно подогреть животное до температуры 28-32 ˚С в течение 10-15 минут. Такой режим подогрева должен поддерживаться в течение всей процедуры измерения давления. Для подогрева предлагается использовать нагревательную платформу&nbsp;</span><a href=\"http://rat-house.ru/flogiston\">Флогистон</a><span>&nbsp;или другую подходящую систему подогрева мелких животных.</span></p>', 56734),
(5, 'Шелтер', 'Shelter.png', 'Аппаратно-программный комплекс «Шелтер» предназначен для автоматизированного определения когнитивных функций (обучаемость и память) лабораторных животных на основе реакции избегания электрокожного раздражителя. АПК позволяет проводить тестирование для мышей или крыс.', '<p>В результате тестирования определяются следующие параметры:</p>\r\n<ol>\r\n<li>Время пребывания животного на площадке (в секундах), до спуска животного на пол</li>\r\n<li>Время нахождения животного на полу камеры</li>\r\n<li>Перемещение (путь) грызуна по отдельным зонам и за весь эксперимент</li>\r\n<li>Задержка реакции</li>\r\n<li>Комплексные статистические показатели для выборки грызунов (общее, среднее, M, D, СКО от времени пребывания, пути и скорости перемещения)</li>\r\n</ol>', 27000),
(6, 'Систола', 'Systola.jpg', 'Система неинвазивного измерения кровяного давления грызунов «Систола»', '<p>Встpoeнная пoмпа aвтoмaтически нaгнетaeт дaвлeниe в xвoстoвoй мaнжетe дo прeкpaщeния пульсaций кpoвoтoкa, a зaтeм, мeдлeннo снижaя дaвлениe, измepяeт систoличeскoe и диaстoлическoe дaвлeниe нa oснoвe пoкaзaний инфpaкpaснoгo дaтчикa пyльсa, надeвaeмого нa xвoст живoтнoгo пoслe мaнжeты.</p>\r\n<p><strong>ВНИМАНИЕ!</strong><span>&nbsp;Для неинвазивного измерения кровяного давления у крыс и мышей обязателен подогрев животного. Это позволяет обеспечить циркуляцию крови в хвосте в нужном объеме и стабилизировать кровоток. Необходимо предварительно подогреть животное до температуры 28-32 ˚С в течение 10-15 минут. Такой режим подогрева должен поддерживаться в течение всей процедуры измерения давления. Для подогрева предлагается использовать нагревательную платформу&nbsp;</span><a href=\"http://rat-house.ru/flogiston\">Флогистон</a><span>&nbsp;или другую подходящую систему подогрева мелких животных.</span></p>', 56734),
(11, 'Робот Алиса', '1_3.jpg', 'Робот-андроид с человеческим лицом', 'Робот-андроид с человеческим лицом и полным функционалом, приятный собеседник!', 250000);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
