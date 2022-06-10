-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 10 2022 г., 12:55
-- Версия сервера: 8.0.29
-- Версия PHP: 7.1.33

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
-- Структура таблицы `info`
--

CREATE TABLE `info` (
  `id` int NOT NULL,
  `h1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `text` varchar(1500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `info`
--

INSERT INTO `info` (`id`, `h1`, `text`, `img`) VALUES
(1, 'Gravity Falls', 'Добро пожаловать на “Книгу о Гравити фолз”, Здесь вы\r\nможете узнать все, что относится к Гравити Фолз. \r\nГравити Фолз — это мультсериал канала «Дисней». \r\nДвое близняшек Диппер и Мэйбл Пайнс влетают в жизнь \r\nсвоего дяди в таинственный городок Гравити Фолз, \r\nштат Орегон. Когда они приезжают на каникулы в город, \r\nДядя Стэн набирает их в персонал «Хижины Чудес», весёлой \r\nтуристической ловушки, которой он владеет. Хотя Диппер \r\nи Мэйбл быстро обнаружили, в чём тайна Хижины, они \r\nчувствуют, что в их новом городе есть что-то странное, \r\nи вместе начинают раскрывать тайны Гравити Фолз. \r\n', 'img\\img1.png'),
(2, 'Dipper', 'Джейсон «Диппер» Пайнс— умный, \r\nдоброжелательный, любопытный,  любознательный и \r\nпредприимчивый двенадцатилетний (тринадцатилетний в \r\nконце сериала) мальчик, проводящий лето с дядей Стэном \r\nв Гравити Фолз,  штат Орегон. \r\nгде он и его <br> сестра Мэйбл \r\nпостоянно <br> сталкиваются с \r\nпаранормальной <br>стороной \r\nгорода. Вооружён <br> дневником. \r\nЯвляется одним из <br> главных \r\nгероев Гравити Фолз,<br> \r\nисследующим тайны \r\nХижины <br> Чудес в течении лета.', 'img\\img4.png'),
(3, 'Wendy', 'Вэнди Блёрбл Кордрой — девушка-подросток, живущая в \r\nГравити Фолз, подрабатывающая в неполный рабочий \r\nдень в Хижине Чудес. <br> Диппер влюблён в неё, \r\nи она это знает. <br> В эпизоде «В бункер» \r\nон признаётся в <br> любви. В эпизоде \r\n«Свинья <br> путешественника во времени», \r\nона <br> начинает встречаться с Робби \r\nво всех <br> вариантах времени. Но в \r\nконечном <br> варианте Пухля \r\nопрокидывает чашу с <br>\r\nводой на Робби, после чего он <br>\r\nуходит. Робби, в эпизоде <br>\r\n«Парнепокалипсис»,<br> \r\nзагипнотизировал её. В <br> конечном \r\nсчёте, она <br> расстаётся с ним в \r\nэтом же <br> эпизоде. В колесе Билла \r\nеё <br> знак — пакет со льдом', 'img\\img5.png'),
(4, 'SOOS', 'Хесус Альзамирано «Сус» Рамирез —  мастер и \r\nпостоянный сотрудник Хижины Чудес, как и Вэнди. Друг \r\nДиппера и Мэйбл. Сус — очень добрый и милый человек, \r\nкоторый хочет всегда быть в курсе событий.  Увлекается  \r\n                                  аниме и репом. В настоящий момент\r\n                                является владельцем Хижины Чудес.\r\n                              Ему соответствует вопросительный знак \r\n                                 на колесе Билла. Сус - милый и немного \r\n                                    глупый человек, который, помимо \r\n                                      близнецов, является одним из \r\n                                         немногих людей во всем Гравити \r\n                                               Фолз, что видят и замечают \r\n                                                  странности в городе. \r\n                           ', 'img\\img6.png'),
(5, 'MABEL', 'Мэйбл Пайнс  — жизнерадостная, энергичная, полна \r\nэнтузиазма и свободно-настроена 12-летняя девочка \r\n(в конце сериала ей исполняется 13 лет), проводящая лето \r\nс дядей Стэном в Гравити Фолз, штат Орегон, где ей и \r\nДипперу приходится постоянно сталкиваться с \r\nпаранормальными явлениями\r\n<br> города. \r\nОна относится к своей <br>\r\nжизни намного проще, когда <br>\r\nнаходится в новой обстановке,<br>\r\nчем ее брат-близнец. Обожает<br>\r\nсвою свинку Пухлю. Является<br>\r\nодним из главных героев этого<br>\r\nсериала.', 'img\\img7.png'),
(6, 'STANLY', 'Стэнли Филбрик «Стэн» Пайнс. ранее известный как Стэнфорд \r\nПайнс — двоюродный дедушка Диппера и Мэйбл Пайнс, \r\nпостоянный житель городка Гравити Фолз. После многих \r\nлет мошенничества и преступлений он поселился в \r\nотдаленном городке Гравити Фолз, штат Орегон, где \r\nруководит ловушкой для туристов, Хижиной Чудес. Несмотря на изначальный <br>\r\nскептицизм по отношению к <br>\r\nсверхъестественному, позже <br>\r\nвыясняется, что он сам тесно связан <br>\r\nс паранормальными явлениями <br>\r\nв Гравити Фолз.', 'img\\img8.png'),
(7, 'STANFORD', 'Стэнфорд «Форд» Филбрик Пайнс — является автором \r\nдневников, старшим сыном Филбрика Пайнса и братом-\r\nблизнецом Стэна Пайнса. Точно так же, как и Стэн, он \r\nявляется двоюродным дедушкой Диппера и Мэйбл. Его знак \r\nна колесе Билла - шестипалая рука.', 'img\\img9.png');

-- --------------------------------------------------------

--
-- Структура таблицы `video`
--

CREATE TABLE `video` (
  `id` int NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `video` varchar(300) DEFAULT NULL,
  `text` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `video`
--

INSERT INTO `video` (`id`, `name`, `video`, `text`) VALUES
(1, 'Сезон 1 серия 1', 'videos/video1.mp4', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam vitae iste aut quam. Natus eligendi, minus error, inventore veniam sed temporibus ullam.'),
(2, 'Сезон 1 серия 2', 'videos/video1.mp4', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia laborum minus quam dicta, deserunt maxime deleniti repudiandae odio blanditiis aut impedit sed voluptatem quisquam rem! Perferendis vero vitae excepturi aspernatur?');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `info`
--
ALTER TABLE `info`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `video`
--
ALTER TABLE `video`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
