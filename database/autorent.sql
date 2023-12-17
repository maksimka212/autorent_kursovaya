-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 17 2023 г., 21:30
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `autorent`
--

-- --------------------------------------------------------

--
-- Структура таблицы `all_class`
--

CREATE TABLE `all_class` (
  `id_class` int NOT NULL,
  `class` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `all_class`
--

INSERT INTO `all_class` (`id_class`, `class`) VALUES
(1, 'Эконом'),
(2, 'Комфорт'),
(3, 'Бизнес');

-- --------------------------------------------------------

--
-- Структура таблицы `autopark`
--

CREATE TABLE `autopark` (
  `id_auto` int NOT NULL,
  `id_brend` int NOT NULL,
  `id_model` int NOT NULL,
  `id_class` int NOT NULL,
  `id_kuzov` int NOT NULL,
  `id_fuel` int NOT NULL,
  `id_trans` int NOT NULL,
  `engine` varchar(100) NOT NULL,
  `numb_engine` varchar(17) NOT NULL,
  `cena` varchar(100) NOT NULL,
  `id_color` int NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `autopark`
--

INSERT INTO `autopark` (`id_auto`, `id_brend`, `id_model`, `id_class`, `id_kuzov`, `id_fuel`, `id_trans`, `engine`, `numb_engine`, `cena`, `id_color`, `image`) VALUES
(1, 1, 1, 2, 1, 2, 1, '120', '1d454d78rt45d124d', '3000', 3, 'images/auto1.png'),
(2, 2, 2, 1, 1, 2, 3, '98', 'ffqwr4548544ee333', '1200', 6, 'images/auto1.png'),
(3, 3, 3, 3, 3, 4, 3, '250', 'safasf4654as6a5s4', '4500', 4, 'images/auto1.png');

-- --------------------------------------------------------

--
-- Структура таблицы `brends`
--

CREATE TABLE `brends` (
  `id_brend` int NOT NULL,
  `brend` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `brends`
--

INSERT INTO `brends` (`id_brend`, `brend`) VALUES
(1, 'Audi'),
(2, 'Reno'),
(3, 'BMW'),
(4, 'Mersedes-Benz'),
(5, 'Honda'),
(6, 'Subaru'),
(7, 'Porshe'),
(8, 'Volvo'),
(9, 'Ford'),
(10, 'Nissan'),
(11, 'Toyota');

-- --------------------------------------------------------

--
-- Структура таблицы `colors`
--

CREATE TABLE `colors` (
  `id_color` int NOT NULL,
  `color` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `colors`
--

INSERT INTO `colors` (`id_color`, `color`) VALUES
(1, 'Черный'),
(2, 'Белый'),
(3, 'Красный'),
(4, 'Синий'),
(5, 'Фиолетовый'),
(6, 'Серый'),
(7, 'Розовый'),
(8, 'Орнажевый'),
(9, 'Зеленый');

-- --------------------------------------------------------

--
-- Структура таблицы `contract`
--

CREATE TABLE `contract` (
  `id_contract` int NOT NULL,
  `date_from` date NOT NULL,
  `date_before` date NOT NULL,
  `id_auto` int NOT NULL,
  `id_user` int NOT NULL,
  `summa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `fuels`
--

CREATE TABLE `fuels` (
  `id_fuel` int NOT NULL,
  `fuel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `fuels`
--

INSERT INTO `fuels` (`id_fuel`, `fuel`) VALUES
(1, 'ДТ'),
(2, '95'),
(3, '92'),
(4, '100');

-- --------------------------------------------------------

--
-- Структура таблицы `kuzovs`
--

CREATE TABLE `kuzovs` (
  `id_kuzov` int NOT NULL,
  `kuzov` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `kuzovs`
--

INSERT INTO `kuzovs` (`id_kuzov`, `kuzov`) VALUES
(1, 'Седан'),
(2, 'Универсал'),
(3, 'Хэтч-бэк'),
(4, 'Купе'),
(5, 'Кабриолет'),
(6, 'Пикап'),
(7, 'Минивэн');

-- --------------------------------------------------------

--
-- Структура таблицы `models`
--

CREATE TABLE `models` (
  `id_models` int NOT NULL,
  `model` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `models`
--

INSERT INTO `models` (`id_models`, `model`) VALUES
(1, 'A6'),
(2, 'Logan'),
(3, 'M5');

-- --------------------------------------------------------

--
-- Структура таблицы `transmissions`
--

CREATE TABLE `transmissions` (
  `id_trans` int NOT NULL,
  `transmission` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `transmissions`
--

INSERT INTO `transmissions` (`id_trans`, `transmission`) VALUES
(1, 'Механика'),
(2, 'Робот'),
(3, 'Автомат');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `otchestvo` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `passport` varchar(11) NOT NULL,
  `vodudost` varchar(12) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `alogin` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `name`, `surname`, `otchestvo`, `email`, `passport`, `vodudost`, `password`, `alogin`) VALUES
(1, 'Андрей', 'Арефьев', 'Владимирович', 'arefev@gmail.com', '1234 567890', '12 45 7814', '$2y$10$2T03jIMlbTv29FGnr9VTb.WhI4d2s/89eE5jdS26fSryddHcbDHX.', NULL),
(2, 'Admin', 'Admin', 'Admin', 'admin@gmail.com', '1', '1', '$2y$10$uVqI4Ihu3ez1IVEaGPPrtu/wnCEcinnoGbxaxTv5FD09KCsy0IAzq', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `all_class`
--
ALTER TABLE `all_class`
  ADD PRIMARY KEY (`id_class`);

--
-- Индексы таблицы `autopark`
--
ALTER TABLE `autopark`
  ADD PRIMARY KEY (`id_auto`),
  ADD UNIQUE KEY `numb_engine` (`numb_engine`),
  ADD KEY `id_brend` (`id_brend`),
  ADD KEY `id_class` (`id_class`),
  ADD KEY `id_color` (`id_color`),
  ADD KEY `id_fuel` (`id_fuel`),
  ADD KEY `id_kuzov` (`id_kuzov`),
  ADD KEY `id_model` (`id_model`),
  ADD KEY `id_trans` (`id_trans`);

--
-- Индексы таблицы `brends`
--
ALTER TABLE `brends`
  ADD PRIMARY KEY (`id_brend`);

--
-- Индексы таблицы `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id_color`);

--
-- Индексы таблицы `contract`
--
ALTER TABLE `contract`
  ADD PRIMARY KEY (`id_contract`),
  ADD KEY `id_auto` (`id_auto`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `fuels`
--
ALTER TABLE `fuels`
  ADD PRIMARY KEY (`id_fuel`);

--
-- Индексы таблицы `kuzovs`
--
ALTER TABLE `kuzovs`
  ADD PRIMARY KEY (`id_kuzov`);

--
-- Индексы таблицы `models`
--
ALTER TABLE `models`
  ADD PRIMARY KEY (`id_models`);

--
-- Индексы таблицы `transmissions`
--
ALTER TABLE `transmissions`
  ADD PRIMARY KEY (`id_trans`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `all_class`
--
ALTER TABLE `all_class`
  MODIFY `id_class` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `autopark`
--
ALTER TABLE `autopark`
  MODIFY `id_auto` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `brends`
--
ALTER TABLE `brends`
  MODIFY `id_brend` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `colors`
--
ALTER TABLE `colors`
  MODIFY `id_color` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `contract`
--
ALTER TABLE `contract`
  MODIFY `id_contract` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `fuels`
--
ALTER TABLE `fuels`
  MODIFY `id_fuel` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `kuzovs`
--
ALTER TABLE `kuzovs`
  MODIFY `id_kuzov` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `models`
--
ALTER TABLE `models`
  MODIFY `id_models` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `transmissions`
--
ALTER TABLE `transmissions`
  MODIFY `id_trans` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `autopark`
--
ALTER TABLE `autopark`
  ADD CONSTRAINT `autopark_ibfk_1` FOREIGN KEY (`id_brend`) REFERENCES `brends` (`id_brend`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `autopark_ibfk_2` FOREIGN KEY (`id_class`) REFERENCES `all_class` (`id_class`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `autopark_ibfk_3` FOREIGN KEY (`id_color`) REFERENCES `colors` (`id_color`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `autopark_ibfk_4` FOREIGN KEY (`id_fuel`) REFERENCES `fuels` (`id_fuel`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `autopark_ibfk_5` FOREIGN KEY (`id_kuzov`) REFERENCES `kuzovs` (`id_kuzov`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `autopark_ibfk_6` FOREIGN KEY (`id_model`) REFERENCES `models` (`id_models`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `autopark_ibfk_7` FOREIGN KEY (`id_trans`) REFERENCES `transmissions` (`id_trans`) ON DELETE RESTRICT ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
