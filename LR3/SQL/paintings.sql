-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Окт 27 2022 г., 00:09
-- Версия сервера: 10.4.25-MariaDB
-- Версия PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `exhibition`
--

-- --------------------------------------------------------

--
-- Структура таблицы `paintings`
--

CREATE TABLE `paintings` (
  `id` int(11) UNSIGNED NOT NULL,
  `img_path` varchar(45) NOT NULL DEFAULT '',
  `name` varchar(60) NOT NULL,
  `id_hall` int(11) UNSIGNED NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `Date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `paintings`
--

INSERT INTO `paintings` (`id`, `img_path`, `name`, `id_hall`, `description`, `Date`) VALUES
(1, 'caspar_netscher.img', 'Каспар Нетчер', 1, 'Автопортрет', 1710),
(2, 'portrait_temkina.jpg', 'Владимир Боровиковский', 2, 'Портрет Елизаветы Григорьевны Темкиной', 1801),
(3, 'christ_to_people.jpg', 'Александр Иванов', 2, 'Явление Христа народу — гигантская по размерам картина русского художника Александра Иванова, написанная в 1837—1857 годах.', 1857),
(4, 'swan_princess.jpg', 'Михаил Врубель', 3, 'Царевна-Лебедь — картина посвящёна персонажу оперы Н. А. Римского-Корсакова «Сказка о царе Салтане»', 1900),
(5, 'pan.img', 'Михаил Врубель', 3, 'Пан — картина относится к так называемому «Сказочному циклу» и считается его вершиной', 1899),
(6, 'demon_sitting.jpg', 'Михаил Врубель', 3, 'Демон сидящий — образ силы человеческого духа, внутренней борьбы, сомнений. Трагически сцепив руки, Демон сидит с печальными, направленными вдаль огромными глазами, в окружении невиданных цветов.', 1890),
(7, 'red_horse.img', 'Кузьма Петров-Водкин', 4, 'Купание красного коня — картина подарила художнику мировую известность', 1912),
(8, 'gulyane_v_albano.jpg', 'Карл Брюллов', 5, 'Гулянье в Альбано . Знавшие Брюллова утверждали, что ни в одном городе мира он “не чувствовал себя столько дома, как в Риме”', 1863),
(10, 'princess_tarakanova.jpg', 'Константин Флавицкий', 2, 'Неравный брак . Ходят слухи, что это полотно автобиографическое: несостоявшаяся невеста Пукирева была выдана замуж за богатого князя. Художник увековечил на картине и себя – на заднем плане, молодой человек со скрещенными на груди руками.', 1864),
(11, 'rainbow.jpg', 'Савин Истома', 2, 'Княжна Тараканова . На картине изображена легендарная самозванка, пытавшаяся выдать себя за дочь императрицы Елизаветы Петровны.', 1873),
(12, 'metropolitan_peter.jpg', 'Savin Istoma', 6, 'Митрополит Пётр . Из усыпальницы Великого князя Сергея Александровича в Чудовом монастыре.', 1600);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `paintings`
--
ALTER TABLE `paintings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_1` (`id_hall`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `paintings`
--
ALTER TABLE `paintings`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `paintings`
--
ALTER TABLE `paintings`
  ADD CONSTRAINT `foreign_key_1` FOREIGN KEY (`id_hall`) REFERENCES `hall` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
