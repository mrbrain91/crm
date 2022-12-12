-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Время создания: Дек 12 2022 г., 04:21
-- Версия сервера: 5.7.34
-- Версия PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `orto_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `counterparties_tbl`
--

CREATE TABLE `counterparties_tbl` (
  `id` int(255) NOT NULL,
  `name` varchar(250) NOT NULL,
  `alternative_name` varchar(250) NOT NULL,
  `inn` varchar(255) NOT NULL,
  `nds` varchar(255) NOT NULL,
  `raschetny_schet` varchar(255) NOT NULL,
  `mfo` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `contact` varchar(250) NOT NULL,
  `director` varchar(250) NOT NULL,
  `accountant` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `counterparties_tbl`
--

INSERT INTO `counterparties_tbl` (`id`, `name`, `alternative_name`, `inn`, `nds`, `raschetny_schet`, `mfo`, `address`, `contact`, `director`, `accountant`) VALUES
(1, 'OOO ORTO PHARM', 'OOO ORTO PHARM', '3076666789', '2132647862378476', '202023647862864', '09890', 'Toshkent', '+998953411000', 'Sharipov J.E.', 'Sharipov J.E.'),
(2, 'OOO GRAND PHARM', 'OOO GRAND PHARM', '3235478', '987234987238947', '202072389472389', '09878', 'Toshkent sh', '+998996665544', 'Gulamov A.', 'Gulamov A.'),
(3, 'OOO \"ZENTA PHARM\"', 'OOO \"ZENTA PHARM\"', '303169768', '326030023493', '20214000500424985001', '00491', 'SHARAFOBOD', '+998712025698', 'Gaipov R.A.', 'Gaipov R.A.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `counterparties_tbl`
--
ALTER TABLE `counterparties_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `counterparties_tbl`
--
ALTER TABLE `counterparties_tbl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
