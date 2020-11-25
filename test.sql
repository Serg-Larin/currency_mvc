-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Ноя 25 2020 г., 17:07
-- Версия сервера: 5.7.32-0ubuntu0.18.04.1
-- Версия PHP: 7.2.34-8+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `available_currencies`
--

CREATE TABLE `available_currencies` (
  `id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `available` tinyint(1) NOT NULL,
  `created_at` varchar(40) NOT NULL,
  `updated_at` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `available_currencies`
--

INSERT INTO `available_currencies` (`id`, `name`, `available`, `created_at`, `updated_at`) VALUES
(1, 'UAH', 0, '2020-11-25 11:24:34', '2020-11-25 16:46:33'),
(2, 'RUB', 1, '2020-11-25 11:24:53', '2020-11-25 16:46:33'),
(3, 'USD', 1, '2020-11-25 11:24:53', '2020-11-25 16:46:33'),
(4, 'BTC', 1, '2020-11-25 11:24:53', '2020-11-25 16:46:33');

-- --------------------------------------------------------

--
-- Структура таблицы `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `from_currency` varchar(30) NOT NULL,
  `to_currency` varchar(30) NOT NULL,
  `exchange_sum` double NOT NULL,
  `final_sum` double NOT NULL,
  `created_at` varchar(40) NOT NULL,
  `updated_at` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `available_currencies`
--
ALTER TABLE `available_currencies`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `available_currencies`
--
ALTER TABLE `available_currencies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
