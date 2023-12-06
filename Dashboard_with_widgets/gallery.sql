-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 05 2023 г., 11:18
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
-- База данных: `gallery`
--

-- --------------------------------------------------------

--
-- Структура таблицы `authors`
--

CREATE TABLE `authors` (
  `author_id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `count_of_paintings` int(11) NOT NULL,
  `income` int(11) NOT NULL,
  `register_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `authors`
--

INSERT INTO `authors` (`author_id`, `fullname`, `count_of_paintings`, `income`, `register_date`) VALUES
(1, 'John Smith', 5, 5000, '2023-02-15'),
(2, 'Anna Johnson', 3, 3500, '2023-06-27'),
(3, 'Michael Brown', 10, 8000, '2023-03-10'),
(4, 'Emily Davis', 7, 6000, '2023-07-18'),
(5, 'David Wilson', 4, 4000, '2023-05-06'),
(6, 'Sophia Taylor', 2, 2500, '2023-01-29'),
(7, 'Daniel Anderson', 8, 7000, '2023-08-12'),
(8, 'Olivia Martinez', 6, 5500, '2023-04-21'),
(9, 'Robert Clark', 9, 7500, '2023-09-05'),
(10, 'Emma Rodriguez', 5, 4500, '2023-11-01');

-- --------------------------------------------------------

--
-- Структура таблицы `paintings`
--

CREATE TABLE `paintings` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `author_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `cost` int(11) NOT NULL,
  `sale_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `paintings`
--

INSERT INTO `paintings` (`id`, `name`, `author_id`, `type_id`, `cost`, `sale_date`) VALUES
(1, 'Picture 1', 1, 1, 100, '2023-01-15'),
(2, 'Picture 2', 2, 3, 150, '2023-02-27'),
(3, 'Picture 3', 3, 2, 200, '2023-04-08'),
(4, 'Picture 4', 4, 5, 120, '2023-05-19'),
(5, 'Picture 5', 5, 4, 180, '2023-03-11'),
(6, 'Picture 6', 6, 1, 90, '2023-07-25'),
(7, 'Picture 7', 7, 2, 170, '2023-09-06'),
(8, 'Picture 8', 8, 4, 130, '2023-11-17'),
(9, 'Picture 9', 9, 3, 220, '2023-10-28'),
(10, 'Picture 10', 10, 5, 140, '2023-08-09'),
(11, 'Picture 11', 1, 3, 180, '2023-06-21'),
(12, 'Picture 12', 2, 2, 160, '2023-04-03'),
(13, 'Picture 13', 3, 5, 110, '2023-02-15'),
(14, 'Picture 14', 4, 4, 190, '2023-09-27'),
(15, 'Picture 15', 5, 1, 120, '2023-11-07'),
(16, 'Picture 16', 6, 2, 140, '2023-07-19'),
(17, 'Picture 17', 7, 4, 200, '2023-05-31'),
(18, 'Picture 18', 8, 3, 100, '2023-03-12'),
(19, 'Picture 19', 9, 5, 170, '2023-06-04'),
(20, 'Picture 20', 10, 1, 150, '2023-08-16');

-- --------------------------------------------------------

--
-- Структура таблицы `type`
--

CREATE TABLE `type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `type`
--

INSERT INTO `type` (`type_id`, `type_name`) VALUES
(1, 'Пейзаж'),
(2, 'Портрет'),
(3, 'Абстракция'),
(4, 'Натюрморт'),
(5, 'Животные');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`author_id`);

--
-- Индексы таблицы `paintings`
--
ALTER TABLE `paintings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_id` (`author_id`),
  ADD KEY `type_id` (`type_id`);

--
-- Индексы таблицы `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `authors`
--
ALTER TABLE `authors`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `paintings`
--
ALTER TABLE `paintings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `type`
--
ALTER TABLE `type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `paintings`
--
ALTER TABLE `paintings`
  ADD CONSTRAINT `paintings_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `authors` (`author_id`),
  ADD CONSTRAINT `paintings_ibfk_2` FOREIGN KEY (`type_id`) REFERENCES `type` (`type_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
