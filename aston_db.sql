-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Сен 28 2016 г., 17:42
-- Версия сервера: 10.1.13-MariaDB
-- Версия PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `aston_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` int(5) UNSIGNED NOT NULL,
  `address` varchar(250) DEFAULT NULL,
  `telephone` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `address`, `telephone`) VALUES
(1, '03150, г Киев, ул. Казимира Малевича,86П, оф. 407', '+38 (044) 338 32 00');

-- --------------------------------------------------------

--
-- Структура таблицы `main`
--

CREATE TABLE `main` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `section1` text NOT NULL,
  `section2` text NOT NULL,
  `section3` text NOT NULL,
  `section4` text NOT NULL,
  `section5` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `main`
--

INSERT INTO `main` (`id`, `title`, `description`, `keywords`, `section1`, `section2`, `section3`, `section4`, `section5`) VALUES
(1, 'Главная', 'aston', 'aston', '<h2>СТРАХОВОЕ СОПРОВОЖДЕНИЕ БИЗНЕСА &laquo;ПОД КЛЮЧ&raquo;</h2>\r\n<p><strong>&laquo;Астон Украина&raquo; работает на рынке страховых услуг с 2009 года и за это время стала одним из лидеров своей отрасли. Нашими Клиентами стали десятки ведущих компаний Украины.</strong></p>\r\n<p><strong>Наши специалисты, благодаря своему богатому опыту и профессионализму, обеспечат каждому Клиенту качественную аналитику страхового портфеля, предложат индивидуальные программы по необходимому в его случае виду страхования, обеспечат правильное размещение рисков на страховом рынке, а также предоставят комплексное администрирование страхового портфеля.</strong></p>\r\n<p><strong>Сотрудники&nbsp;</strong><strong>&laquo;</strong><strong>Астон Украина</strong><strong>&raquo;</strong><strong>&nbsp;имеют большой опыт работы в страховом бизнесе, они регулярно проходят проф-обучение и переаттестацию знаний оказываемых услуг. Наш коллектив молод, коммуникабелен и всегда внимателен к требованиям клиентов. Мы настоящие профессионалы своего дела, отдавшие страхованию не один год, что обеспечивает возможность оказывать качественные услуги практически по любому направлению страхования.</strong></p>', '<h2>Результатом ведения нашей системы комплексного управления страховым портфелем является:</h2>\r\n<div>&nbsp;</div>', '', '<ul class="bxslider">\r\n<li><img src="../web/images/next_slider.png" />\r\n<div class="info">\r\n<h2 class="wow slideInLeft">&nbsp;</h2>\r\n</div>\r\n</li>\r\n</ul>', '');

-- --------------------------------------------------------

--
-- Структура таблицы `partners`
--

CREATE TABLE `partners` (
  `id` int(10) UNSIGNED NOT NULL,
  `src` varchar(250) NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `partners`
--

INSERT INTO `partners` (`id`, `src`, `description`) VALUES
(1, 'partner1.png', 'http://universalna.com'),
(2, 'partner2.png', 'http://axa-ukraine.com/'),
(3, 'partner3.png', 'http://ukringroup.com.ua/ukr/'),
(4, 'partner4.png', 'http://www.pzu.com.ua/'),
(5, 'partner5.png', 'https://www.arsenal-strahovanie.com/'),
(10, 'partner6.png', 'https://allianz.ua/o-kompanii'),
(12, 'partner8.png', 'https://uniqa.ua/'),
(13, 'partner9.png', 'http://www.upsk.com.ua/'),
(14, 'partner10.png', 'http://kniazha.com.ua/ua/main/'),
(15, 'partner11.png', 'http://ingo.ua'),
(16, 'partner12.png', 'http://www.providna.ua/'),
(17, 'partner13.png', 'https://alfaic.ua/'),
(18, 'partner14.png', 'http://www.tas-insurance.com.ua');

-- --------------------------------------------------------

--
-- Структура таблицы `results`
--

CREATE TABLE `results` (
  `id` int(11) UNSIGNED NOT NULL,
  `section` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `results`
--

INSERT INTO `results` (`id`, `section`) VALUES
(1, '<p>Высокие международные корпоративные стандарты и безупречная организация процессов страхования, перестрахования, урегулирования убытков и отчётности.</p>'),
(2, '<p>Полная и всесторонняя защита интересов Клиента нашими специалистами в любых ситуациях, включая и наиболее сложные, строгий независимый контроль и исключение появления &laquo;личных интересов&raquo;.</p>'),
(3, '<p>Минимизация количества привлеченного персонала и бережное отношение к времени Клиента.</p>'),
(4, '<p>Экономия расходов Клиента на страхование.</p>'),
(5, '<p>Наиболее эффективное сопровождение процесса урегулирования убытков и решения вопросов о страховой выплате в случае проблематичных и &laquo;нестандартных&raquo; ситуаций.</p>');

-- --------------------------------------------------------

--
-- Структура таблицы `service`
--

CREATE TABLE `service` (
  `id` int(11) UNSIGNED NOT NULL,
  `img` varchar(250) NOT NULL,
  `article_head` varchar(250) NOT NULL,
  `article_text` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `service`
--

INSERT INTO `service` (`id`, `img`, `article_head`, `article_text`) VALUES
(1, 'service1.png', 'Страхование транспортных рисков:', '<p>- страхование КАСКО;</p>\r\n<p>- страхование добровольной и обязательной гражданско-правовой ответственности владельцев (ДГО и ОСАГО);</p>\r\n<p>- страхование водного транспорта (морское КАСКО);</p>\r\n<p>- страхование железнодорожного транспорта (ж/д КАСКО).</p>'),
(6, 'service2.png', 'Имущественное страхование:', '<p>- страхование имущества юридических лиц;</p>\r\n<p>- страхование рисков перерыва в деятельности;</p>\r\n<p>- страхование строительно-монтажных рисков, страхование рисков поломки оборудования и машин.</p>'),
(7, 'service3.png', 'Страхование грузоперевозок: ', '<p>- страхование грузов;</p>\r\n<p>- страхование ответственности экспедиторов, грузоперевозчиков.</p>'),
(8, 'service4.png', 'Сельскохозяйственное страхование:', '<p>- страхование сельскохозяйственных культур;</p>\r\n<p>- страхование животных.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>'),
(9, 'service5.png', 'Страхование ответственности: ', '<p>- страхование гражданской ответственности перед третьими лицами;</p>\r\n<p>- страхование ответственности товаропроизводителя;</p>\r\n<p>- страхование ответственности работодателя;</p>\r\n<p>- страхование профессиональной ответственности.</p>'),
(10, 'service6.png', 'Личное страхование: ', '<p>- страхование от несчастных случаев;</p>\r\n<p>- страхование выезжающих за рубеж;</p>\r\n<p>- добровольное медицинское страхование.</p>');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `main`
--
ALTER TABLE `main`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `main`
--
ALTER TABLE `main`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT для таблицы `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
