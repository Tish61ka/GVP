-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 16 2022 г., 11:49
-- Версия сервера: 8.0.24
-- Версия PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gvp`
--

-- --------------------------------------------------------

--
-- Структура таблицы `video`
--

CREATE TABLE `video` (
  `id` int NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `video` varchar(300) DEFAULT NULL,
  `text` varchar(800) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `video`
--

INSERT INTO `video` (`id`, `name`, `video`, `text`) VALUES
(1, 'Гравити Фолз - Секреты Гравити Фолз', 'videos/video1.mp4', 'Родители Диппера и Мейбл отправляют своих детишек на лето в гости к их двоюродному дедушке, Стэну, в городок Гравити Фолз. Тот сразу назначает их уборщиками в своей Хижине Чудес, и лето обещает пройти очень скучно. Но Диппер в лесу находит Дневник №3, и узнаёт о разных аномалиях городка...'),
(2, 'Гравити Фолз - Легенда о Живогрызе', 'videos/video1.mp4', 'Родители Диппера и Мейбл отправляют своих детишек на лето в гости к их двоюродному дедушке, Стэну, в городок Гравити Фолз. Тот сразу назначает их уборщиками в своей Хижине Чудес, и лето обещает пройти очень скучно. Но Диппер в лесу находит Дневник №3, и узнаёт о разных аномалиях городка. Когда Мейбл влюбляется в Нормана, странного парня, Диппер понимает, что тот внешне и по своему поведению схож с зомби,которые описываются в дневнике. Пока Диппер ищет доказательства и пытается параллельно защитить сестру, Мейбл проводит с новым другом все больше времени, и вдруг выясняется, что Норман - кучка гномов, ищащих себе королеву. Мейбл должна выйти замуж за всех их сразу, но брат все еще может помочь ей..'),
(5, 'VKSL', 'videos/video3.mkv', 'kioion');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `video`
--
ALTER TABLE `video`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
