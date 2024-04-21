-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июн 12 2023 г., 22:22
-- Версия сервера: 8.0.31
-- Версия PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `olo_store`
--

-- --------------------------------------------------------

--
-- Структура таблицы `game`
--

CREATE TABLE `game` (
  `game_id` int NOT NULL,
  `title` mediumtext COLLATE utf8mb4_general_ci NOT NULL,
  `youtube_link` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `price` float NOT NULL,
  `description` longtext COLLATE utf8mb4_general_ci,
  `platform` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `rate` float DEFAULT NULL,
  `release_date` date DEFAULT NULL,
  `game_developer_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `game`
--

INSERT INTO `game` (`game_id`, `title`, `youtube_link`, `price`, `description`, `platform`, `image`, `rate`, `release_date`, `game_developer_id`) VALUES
(1, 'Goat simulator 3', 'https://www.youtube.com/embed/-t0VIf0GAl8', 1500, 'Пилгор вернулась! Собирайте стадо и отправляйтесь в Goat Simulator 3 — новую реалистичную многопользовательскую «песочницу» на ферме.\r\n<br><br>\r\nСобирайте стадо и отправляйтесь в Goat Simulator 3 — новую, абсолютно реалистичную «песочницу» на ферме, где вам снова предстоит играть за всеми любимую козочку.\r\nДа-да, всё по новой. Только размах теперь шире — вместе с Пилгор бегают и другие козы. Вы можете пригласить до трёх друзей в совместную игру локально или по сети, чтобы сообща сеять хаос и соперничать в мини-играх. А потом можете рассориться с ними навеки.\r\nВпереди новый раунд безумия! Облизывайте, бодайте и уничтожайте всё, что захочется, в огромном новом мире. Убивайте время самым бесцельным способом со времён Goat Simulator! Мы не будем объяснять вам, как надо играть (разве что в обучении), а просто дадим возможность реализовать свои козьи фантазии.', 'windows', 'img_001', 4.9, '2020-04-02', '1'),
(2, 'Death Stranding', 'https://www.youtube.com/embed/41FRpY-JcN4', 1979, 'Легендарный разработчик Хидео Кодзима выпускает новую знаковую для жанра игру. Сэм Бриджес должен отважиться преодолеть мир, трансформированный Петлёй смерти. Держа в своих руках бессвязные остатки нашего будущего, он отправляется в дорогу, чтобы восстановить связь между осколкам.\nВ главных ролях: Норман Ридус, Мадс Миккельсен, Леа Сейду и Линдси Вагнер.', 'windows', 'img_002', 4.8, '2020-07-07', '2'),
(3, 'The Outlast : Trails', 'https://www.youtube.com/embed/DuKkethkMeo', 1049, 'Испытайте ошеломляющий ужас с Red Barrels, на этот раз вместе с друзьями. Если вы продержитесь достаточно долго и завершите терапию, проходя испытания в одиночку или в команде, корпорация Мёркоф (Murkoff) с радостью отпустит вас… Но останетесь ли вы прежними?<br><br>\r\nДействие игры разворачивается в эпоху Холодной войны. «Добрые» учёные из Murkoff Corporation тестируют передовые методики «промывания мозгов» и контроля сознания на группе ничего не подозревающих добровольцев. В мире, полном недоверия, страха и насилия, ваши моральные принципы будут подвергнуты сомнению, выносливость будет испытана на прочность, а рассудок — сломлен.<br><br>\r\nВЫЖИВАЙТЕ: В ОДИНОЧКУ ИЛИ В КООПЕРАТИВНОМ РЕЖИМЕ<br><br>\r\nВы все узники корпорации Murkoff, запертые на их объекте. Вы можете проходить испытания в одиночку или в команде из 2, 3 или 4 игроков.', 'windows', 'img_003', 4, '2021-12-12', '3'),
(4, 'GTA V', 'https://www.youtube.com/embed/QkkoHAzjnUs', 900, 'Насладитесь Grand Theft Auto V – популярнейшей игрой с открытым миром от Rockstar Games.\r\n<br><br>\r\nЧтобы провести серию дерзких ограблений и выжить в большом неприветливом городе, уличному ловчиле, вышедшему на пенсию грабителю банков и вселяющему ужас психопату приходится иметь дело с самыми опасными и безумными преступниками, а также шоуменами и госслужащими Западного побережья.\r\n<br><br>\r\nТаких пейзажей Лос-Сантоса и округа Блэйн вы еще никогда не видели!', 'windows', 'img_004', 3.9, '2019-05-04', '4'),
(5, 'Holow Knight', 'https://www.youtube.com/embed/UAO2urG23S4', 500, 'Бросьте вызов глубинам заброшенного Королевства\r\nГлубоко под угасающим городом Грязьмут лежат руины древнего Королевства. Многих влечет под землю тяга к богатству, славе или ответам на старинные загадки.\r\n<br><br>\r\nHollow Knight – классическое двухмерное приключение в огромном взаимосвязанном мире. Исследуйте извилистые пещеры, древние города и смертоносные пустоши, сражайтесь с порчеными тварями и заводите дружбу со странными жуками, раскрывайте древние тайны в самом сердце королевства.', 'windows', 'img_008', 5, '2017-07-02', '5'),
(6, 'Terraria', 'https://www.youtube.com/embed/H77Zfzy4LWw', 300, 'Копайте, сражайтесь, исследуйте, стройте! Нет ничего невозможного в этой насыщенной событиями приключенческой игре. Весь мир — ваше полотно, а вся земля — ваши краски!<br><br>\r\nХватайте инструменты и вперед! Создавайте оружие, чтобы сражаться с различными врагами в разных биомах. Копайте глубже, чтобы найти драгоценности, деньги и кучу других полезных вещей. Собирайте ресурсы, чтобы создать всё, что вам нужно, и сделать мир таким, каким вы хотите его видеть. Постройте свой дом, крепость или даже замок! Люди переедут к вам жить и может быть даже продадут вам вещи, которые помогут вам в ваших путешествиях.', 'windows', 'img_007', 4.2, '2018-02-09', '6');

-- --------------------------------------------------------

--
-- Структура таблицы `game_developer`
--

CREATE TABLE `game_developer` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `game_developer`
--

INSERT INTO `game_developer` (`id`, `name`, `description`) VALUES
(1, 'Coffee Stain North AB', 'Компания по разработке программного обеспечения в Стокгольме, Швеция'),
(2, 'Kojima Productions', 'Kojima Productions Co., Ltd. — японская видеоигровая и развлекательная компания, основанная 16 декабря 2015 года в городе Токио. Раньше Kojima Productions работала как внутренняя студия Konami.'),
(3, 'Red Barrels', 'Red Barrels — независимая компания по разработке игр. Была основана в 2011 году бывшими сотрудниками крупных корпораций, известных по работе над Prince of Persia, Assassin’s Creed, Splinter Cell и другими играми. Студия располагается в Монреале, Канада. Над проектами работают сорок человек'),
(4, 'Rockstar Games', 'Rockstar Games — американская видеоигровая дочерняя компания корпорации Take-Two Interactive. Бренд компании широко известен по сериям игр Grand Theft Auto, Red Dead, Midnight Club, Max Payne и Manhunt. Главный офис компании расположен в Нью-Йорке.'),
(5, 'Team Cherry', 'Rockstar Games — американская видеоигровая дочерняя компания корпорации Take-Two Interactive. Бренд компании широко известен по сериям игр Grand Theft Auto, Red Dead, Midnight Club, Max Payne и Manhunt. Главный офис компании расположен в Нью-Йорке.Team Cherry — австралийский разработчик инди-игр из Аделаиды. Их задача — создавать для игроков захватывающие и мозговыносящие миры, которые можно исследовать и преодолевать'),
(6, 'Re-Logic', 'Re-Logic — частная компания, независимая студия-разработчик и издатель компьютерных игр. Основана в 2011 году, по данным на июль 2020 года насчитывает 10 сотрудников. «Re-logic» выпустила такие игры, как «Terraria», «Pixel Piracy» и «Pixel Privateers».');

-- --------------------------------------------------------

--
-- Структура таблицы `shoping_cart`
--

CREATE TABLE `shoping_cart` (
  `users_id` int NOT NULL,
  `game_game_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `email`, `password`) VALUES
(1, 'Albert', 'Offrialbert@gmail.com', '123321'),
(2, '123123', '123123', '$2y$10$.sA0xLL6V5gZRKAAzPbP0udan3mkzKHOV6oj586Kl78r9rYITuv.2'),
(3, '321321', '321321', '$2y$10$a/pjLWjXSQMTrK7KHKPRXeZVME/ZCTrMPARVHQ/icM/XumgUYdm5a');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`game_id`) USING BTREE;

--
-- Индексы таблицы `game_developer`
--
ALTER TABLE `game_developer`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `shoping_cart`
--
ALTER TABLE `shoping_cart`
  ADD PRIMARY KEY (`users_id`,`game_game_id`),
  ADD KEY `fk_shopping_cart_game1_idx` (`game_game_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `game`
--
ALTER TABLE `game`
  MODIFY `game_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `game_developer`
--
ALTER TABLE `game_developer`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
