-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 19 2016 г., 17:41
-- Версия сервера: 5.5.41-log
-- Версия PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `123`
--

-- --------------------------------------------------------

--
-- Структура таблицы `bible`
--
-- используется(#1146 - Table '123.bible' doesn't exist)
-- Ошибка считывания данных: (#1146 - Table '123.bible' doesn't exist)
--
-- База данных: `rss`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Hardware`
--

CREATE TABLE IF NOT EXISTS `Hardware` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(2000) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `href_news` varchar(999) NOT NULL,
  `href_imeg` varchar(999) NOT NULL,
  `time_news` varchar(999) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Дамп данных таблицы `Hardware`
--

INSERT INTO `Hardware` (`id`, `title`, `description`, `href_news`, `href_imeg`, `time_news`) VALUES
(3, 'NVIDIA Pascal GP104 GPU Pictures Leaked – Built To Power 8 GB GeForce Cards, GP106 Also Shot Up Close', 'A few hours ago, we reported that NVIDIA is expected to launch their consumer grade GeForce graphics cards at Computex. …', 'http://wccftech.com/nvidia-pascal-gp104-gpu-leaked/', 'http://cdn.wccftech.com/wp-content/uploads/2014/09/NVIDIA-GeForce-Maxwell-GM204-Die-Shot-125x125.jpg', 'April 8, 2016 6:44 pm'),
(4, 'NVIDIA GeForce GTX 1080 and GeForce GTX 1070 With Pascal GPUs Under Full Production – Rumors Point to Computex Reveal', 'Reports from APAC based sources suggest that NVIDIA already has production of their Pascal based gaming GPUs in full sw…', 'http://wccftech.com/nvidia-geforce-gtx-1080-1070-computex/', 'http://cdn.wccftech.com/wp-content/uploads/2016/04/5124c8b218f88-125x125.jpg', 'April 8, 2016 7:58 am'),
(5, 'AMD Radeon R9 380 vs Nvidia GeForce GTX 960 – Finding The 1080p Bang For Buck Champ', 'With us being on the cusp of the Pascal and Polaris launch it may be hard to understand why we would be looking at how t…	', 'http://wccftech.com/nvidia-evga-gtx-960-ssc-amd-xfx-r9-380-oc/', 'http://cdn.wccftech.com/wp-content/uploads/2016/04/IMG_3150-125x125.jpg', 'April 9, 2016 3:35 pm'),
(6, 'Nvidia Pascal GTX 1080 Features 8GB GDDR5X & 384-320GB/s Of Bandwidth, GTX 1070 Fea…', 'According to the latest whispers Nvidia has allegedly designed two reference PCBs with GDDR5X and GDDR5 compatibility f…', 'http://wccftech.com/rumor-nvidia-pascal-gtx-1080-gddr5x-gtx-1070-f-gddr5/', 'http://cdn.wccftech.com/wp-content/uploads/2016/03/NVIDIA-GeForce-GTX-1080-8-Pin-Connector-125x125.jpg', 'April 11, 2016 2:27 pm'),
(10, 'ASRock Officially Confirms Broadwell-E Processor Lineup – X99 Supports Core i7-695…', 'While Intel confirmed their flagship Core i7-6950X processor on their own webpage last week, ASRock has confirmed the re…', 'http://wccftech.com/intel-broadwell-e-processor-asrock-bios-x99-boards/', 'http://cdn.wccftech.com/wp-content/uploads/2016/04/ASUS-X99-HEDT-Build-125x125.jpg', 'April 12, 2016 2:57 pm'),
(11, 'NVIDIA Readies Three Pascal GP104 GPUs To Replace GeForce GTX 980 Ti, GTX 980 and GTX 970 in June – GP104 SKUs Leaked', 'The rumors regarding NVIDIA’s next generation Pascal GPUs are getting hotter by the minute as launch closes in. Th…', 'http://wccftech.com/nvidia-pascal-gp104-gpu-skus-june/', 'http://cdn.wccftech.com/wp-content/uploads/2016/04/NVIDIA-Pascal-GP104-GPU-125x125.png', 'April 12, 2016 7:38 am');

-- --------------------------------------------------------

--
-- Структура таблицы `mail`
--

CREATE TABLE IF NOT EXISTS `mail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mail_domain` varchar(999) NOT NULL,
  `href_image_mail` varchar(999) NOT NULL,
  `href_mail` varchar(999) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Дамп данных таблицы `mail`
--

INSERT INTO `mail` (`id`, `mail_domain`, `href_image_mail`, `href_mail`) VALUES
(1, 'mail.ru', '', 'https://e.mail.ru/'),
(2, 'gmail.com', '', 'https://mail.google.com/'),
(3, 'live.com', '', 'https://mail.live.com/'),
(4, 'bk.ru', '', 'https://e.mail.ru/'),
(5, 'list.ru', '', 'https://e.mail.ru/'),
(6, 'inbox.ru', '', 'https://e.mail.ru/'),
(7, 'yandex.ru', '', 'https://mail.yandex.ru/'),
(8, 'ya.ru', '', 'https://mail.yandex.ru/'),
(9, 'yandex.ua', '', 'https://mail.yandex.ua/'),
(10, 'yandex.by', '', 'https://mail.yandex.by/'),
(11, 'yandex.kz', '', 'https://mail.yandex.kz/'),
(12, 'yandex.com', '', 'https://mail.yandex.com/'),
(13, 'googlemail.com', '', 'https://mail.google.com/'),
(14, 'outlook.com', '', 'https://mail.live.com/'),
(15, 'hotmail.com', '', 'https://mail.live.com/'),
(16, 'live.ru', '', 'https://mail.live.com/'),
(17, 'me.com', '', 'https://www.icloud.com/'),
(18, 'icloud.com', '', 'https://www.icloud.com/'),
(19, 'rambler.ru', '', 'https://mail.rambler.ru/'),
(20, 'yahoo.com', '', 'https://mail.yahoo.com/'),
(21, 'ukr.net', '', 'https://mail.ukr.net/'),
(22, 'i.ua', '', 'http://mail.i.ua/'),
(23, 'bigmir.net', '', 'http://mail.bigmir.net/'),
(24, 'tut.by', '', 'https://mail.tut.by/'),
(25, 'inbox.lv', '', 'https://www.inbox.lv/'),
(26, 'mail.kz', '', 'http://mail.kz/');

-- --------------------------------------------------------

--
-- Структура таблицы `password_test`
--

CREATE TABLE IF NOT EXISTS `password_test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number_test` varchar(999) NOT NULL,
  `password` varchar(999) NOT NULL,
  `time_life` varchar(999) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `password_test`
--

INSERT INTO `password_test` (`id`, `number_test`, `password`, `time_life`) VALUES
(1, '1', '5348', '24'),
(2, '2', '1243', '24');

-- --------------------------------------------------------

--
-- Структура таблицы `presentation`
--

CREATE TABLE IF NOT EXISTS `presentation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(999) NOT NULL,
  `href_image` varchar(999) NOT NULL,
  `href_downloand` varchar(999) NOT NULL,
  `href_document` varchar(999) NOT NULL,
  `href_knowlenge` varchar(999) NOT NULL,
  `href_presentation` varchar(999) NOT NULL,
  `number` varchar(999) NOT NULL,
  `href_ondrive_presentation` varchar(999) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Дамп данных таблицы `presentation`
--

INSERT INTO `presentation` (`id`, `name`, `href_image`, `href_downloand`, `href_document`, `href_knowlenge`, `href_presentation`, `number`, `href_ondrive_presentation`) VALUES
(1, '', 'document/presentations/1/img/1.png', 'document/presentations/1/02_RAM.ppt', '#', '#', 'read_presentation_page.php?presentation=', '1', 'https://onedrive.live.com/embed?cid=970EC56FE5EBEAC5&resid=970EC56FE5EBEAC5%21107702&authkey=AFn2JS_JQdwgJ0U&em=2'),
(2, '', 'document/presentations/2/img/2.png', 'document/presentations/2/Арифм_Логич_команды.ppt', '#', '#', 'read_presentation_page.php?presentation=', '2', 'https://onedrive.live.com/embed?cid=970EC56FE5EBEAC5&resid=970EC56FE5EBEAC5%21107706&authkey=AMEEmTYuBq0FLOk&em=2'),
(3, '', 'document/presentations/3/img/3.png', 'document/presentations/3/Арифметические_команды.ppt', '#', '#', 'read_presentation_page.php?presentation=', '3', 'https://onedrive.live.com/embed?cid=970EC56FE5EBEAC5&resid=970EC56FE5EBEAC5%21107701&authkey=ANlPf3Ib6bv8JAU&em=2'),
(4, '', 'document/presentations/4/img/4.png', 'document/presentations/4/Ввод_с_клавиатуры.ppt', '#', '#', 'read_presentation_page.php?presentation=', '4', 'https://onedrive.live.com/embed?cid=970EC56FE5EBEAC5&resid=970EC56FE5EBEAC5%21107703&authkey=AOW80uG0Jws1qkU&em=2'),
(5, '', 'document/presentations/5/img/5.png', 'document/presentations/5/Вывод_на_экран_в_текстовом_режиме.ppt', '#', '#', 'read_presentation_page.php?presentation=', '5', 'https://onedrive.live.com/embed?cid=970EC56FE5EBEAC5&resid=970EC56FE5EBEAC5%21107704&authkey=AJ6RXp-LSsqKWoE&em=2'),
(6, '', 'document/presentations/6/img/6.png', 'document/presentations/6/Для_ПР№3.ppt', '#', '#', 'read_presentation_page.php?presentation=', '6', 'https://onedrive.live.com/embed?cid=970EC56FE5EBEAC5&resid=970EC56FE5EBEAC5%21107709&authkey=ACJB5ctTBR9QjmA&em=2'),
(7, '', 'document/presentations/7/img/7.png', 'document/presentations/7/Команды_обработки_цепочек.ppt', '#', '#', 'read_presentation_page.php?presentation=', '7', 'https://onedrive.live.com/embed?cid=970EC56FE5EBEAC5&resid=970EC56FE5EBEAC5%21107705&authkey=AJDdm_n5OMLWp24&em=2'),
(8, '', 'document/presentations/8/img/8.png', 'document/presentations/8/Магистрально-модульный_принцип_ШИНЫ!!!.ppt', '#', '#', 'read_presentation_page.php?presentation=', '8', 'https://onedrive.live.com/embed?cid=970EC56FE5EBEAC5&resid=970EC56FE5EBEAC5%21107707&authkey=AAB97HJ06KqAdRA&em=2'),
(9, '', 'document/presentations/9/img/9.png', 'document/presentations/9/Основные_команды_ассемблера.ppt', '#', '#', 'read_presentation_page.php?presentation=', '9', 'https://onedrive.live.com/embed?cid=970EC56FE5EBEAC5&resid=970EC56FE5EBEAC5%21107708&authkey=AFjp0lC3tjQHuKM&em=2'),
(10, '', 'document/presentations/10/img/10.png', 'document/presentations/10/Принципы_фон_Неймана.ppt', '#', '#', 'read_presentation_page.php?presentation=', '10', 'https://onedrive.live.com/embed?cid=970EC56FE5EBEAC5&resid=970EC56FE5EBEAC5%21107716&authkey=ADJIldByFCYlezc&em=2'),
(11, '', 'document/presentations/11/img/11.png', 'document/presentations/11/Производство микропроцессоров.pptx', '#', '#', 'read_presentation_page.php?presentation=', '11', 'https://onedrive.live.com/embed?cid=970EC56FE5EBEAC5&resid=970EC56FE5EBEAC5%21107712&authkey=ALCW7GjN6F4SBXM&em=2'),
(12, '', 'document/presentations/12/img/12.png', 'document/presentations/12/Процессор.pptx', '#', '#', 'read_presentation_page.php?presentation=', '12', 'https://onedrive.live.com/embed?cid=970EC56FE5EBEAC5&resid=970EC56FE5EBEAC5%21107710&authkey=ANLB4gHRKPZv8Ow&em=2'),
(13, '', 'document/presentations/13/img/13.png', 'document/presentations/13/РежАдресации_опис-сегментов.ppt', '#', '#', 'read_presentation_page.php?presentation=', '13', 'https://onedrive.live.com/embed?cid=970EC56FE5EBEAC5&resid=970EC56FE5EBEAC5%21107711&authkey=AIipFcRerfcUZkE&em=2'),
(14, '', 'document/presentations/14/img/14.png', 'document/presentations/14/Системная_плата_Шины.ppt', '#', '#', 'read_presentation_page.php?presentation=', '14', 'https://onedrive.live.com/embed?cid=970EC56FE5EBEAC5&resid=970EC56FE5EBEAC5%21107713&authkey=AJ_5ZkP9CJ9y_7s&em=2'),
(15, '', 'document/presentations/15/img/15.png', 'document/presentations/15/Устройство.ppt', '#', '#', 'read_presentation_page.php?presentation=', '15', 'https://onedrive.live.com/embed?cid=970EC56FE5EBEAC5&resid=970EC56FE5EBEAC5%21107715&authkey=AFtErVO52cP0-Kc&em=2'),
(16, '', 'document/presentations/16/img/16.png', 'document/presentations/16/ФизАдрес_реальный_режим.ppt', '#', '#', 'read_presentation_page.php?presentation=', '16', 'https://onedrive.live.com/embed?cid=970EC56FE5EBEAC5&resid=970EC56FE5EBEAC5%21107714&authkey=ABL6mjO7flLc_V8&em=2');

-- --------------------------------------------------------

--
-- Структура таблицы `read_doc`
--

CREATE TABLE IF NOT EXISTS `read_doc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `practical_work` varchar(999) NOT NULL,
  `theme` varchar(999) NOT NULL,
  `target` varchar(999) NOT NULL,
  `progress` varchar(999) NOT NULL,
  `text` varchar(999) NOT NULL,
  `path_to_file` varchar(999) NOT NULL,
  `href_doc_file` varchar(999) NOT NULL,
  `download_file` varchar(999) NOT NULL,
  `name` varchar(999) NOT NULL,
  `href_theme` varchar(999) NOT NULL,
  `sections` varchar(999) NOT NULL,
  `practice` varchar(999) NOT NULL,
  `laboratory` varchar(999) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Дамп данных таблицы `read_doc`
--

INSERT INTO `read_doc` (`id`, `practical_work`, `theme`, `target`, `progress`, `text`, `path_to_file`, `href_doc_file`, `download_file`, `name`, `href_theme`, `sections`, `practice`, `laboratory`) VALUES
(1, 'Практическая работа № 5', 'Тема: "Разработка программ линейной структуры с использованием арифметических команд CPU i8086".', 'Цель:<br>\n1.    Закрепить понятие "обмен информацией между CPU и RAM".<br>\n2.    Научиться:\n-        использовать арифметические команды при составлении программ линейной структуры на языке ассемблера;<br>\n-        особенностям использования арифметических команд в ассемблерных программах;<br>\n3.     закрепить особенности выполнения арифметических команд;<br>\n4.     научиться устанавливать флаги состояния регистра флагов по результату выполнения указанных команд;<br>\n5.     закрепить навыки по кодированию и декодированию этих команд.', 'Ход работы.<br>\n1.Познакомиться с необходимой теоретической информацией.<br>\n2.Ответить на контрольные вопросы.<br>\n4.Выполнить предложенные задания на программирование.<br>\n5.Оформить отчет.<br>\n6.Защитить работу.', 'Команда MOV замещает операнд-приемник операндом-источником. При этом исходное значение операнда-приемника теряется. Операнд-источник не изменяется. В зависимости от описания операндов, пересылается...', 'document/section/section_2/5/htm/practice_work_5.htm', 'read_document.php', 'document/section/section_2/5/doc/practice/Практическая работа №5.docx', '5', 'read_document.php?section=2&page=5&practice=5', '2', '5', ''),
(2, 'Практическая работа № 4', 'ТЕМА: "Изучение особенностей выполнения команды пересылки кодов (MOV), особенностей выполнения команды сравнения кодов (CMP) и ее влияния на флаги состояния регистра флагов".', 'ЦЕЛЬ:<br> \r\n1. Закрепить понятие "обмен информацией между CPU и RAM".<br>\r\n2. Научиться:<br>\r\n-	кодированию и декодированию машинного представления  команд  пересылки и сравнения кодов;<br>\r\n-	особенностям использования команд пересылки и сравнения кодов в ассемблерных программах;<br>\r\n-	устанавливать флаги состояния регистра флагов по результату выполнения команды сравнения кодов.\r\n', 'Ход работы:<br>\r\n1.	повторить приведенный ниже теоретический материал;<br>\r\n2.	вычислить значения операндов для своего варианта;<br>\r\n3.	выполнить указанные задания;<br>\r\n4.	ответить на контрольные вопросы.\r\n', 'Команда MOV замещает операнд-приемник операндом-источником. При этом исходное значение операнда-приемника теряется. Операнд-источник не...', 'document/section/section_2/5/htm/practice_work_4.htm', 'read_document.php', 'document/section/section_2/5/doc/practice/Практическая работа №4.docx', '4', 'read_document.php?section=2&page=4&practice=4', '2', '4', ''),
(3, 'Практическая работа № 3', 'Тема: «СОСТАВЛЕНИЕ И ТРАССИРОВКА ЛИНЕЙНЫХ ПРОГРАММ НА УЧЕБНОЙ ЭВМ «УК НЕЙМАН».', 'Цель:<br>\r\n-	повторить структуру команд, назначение полей команды;<br>\r\n-	повторить назначение основных блоков процессора;<br>\r\n-	научиться читать и писать линейные программы на машинном языке;<br>\r\n-	протестировать программу для всех целых a [-2;2] , причем b и c – любые целые числа.<br>\r\n-	проследить за изменением состояния регистров процессора (РОНов, регистра команд и регистра счетчика команд), а также ячеек памяти при выполнении команд программы.\r\n', '', '', 'document/section/section_2/4/htm/practice_work_3.htm', 'read_document.php', 'document/section/section_2/4/doc/practice/Практическая работа №3.docx', '3', 'read_document.php?section=2&page=3&practice=3', '2', '3', ''),
(4, 'Практическая работа № 7', 'Тема: «РАЗРАБОТКА ПРОГРАММ РАЗВЕТВЛЯЮЩЕЙСЯ СТРУКТУРЫ С ИСПОЛЬЗОВАНИЕМ КОМАНД УСЛОВНЫХ И БЕЗУСЛОВНЫХ ПЕРЕХОДОВ. ВЫЧИСЛЕНИЕ ВЕЛИЧИНЫ СМЕЩЕНИЯ ПРИ ВЫПОЛНЕНИИ ПРЯМЫХ ОТНОСИТЕЛЬНЫХ ПЕРЕХОДОВ».', 'Цель:<br>\r\n-	научиться использовать команды условного и безусловного перехода при составлении  программ разветвляющейся структуры на языке ассемблера; <br>\r\n-	развить умения по использованию прямого относительного режима адресации памяти;<br>\r\n-	научиться вычислять смещение при выполнении прямых относительных переходов;<br>\r\n-	научиться кодировать и декодировать команды передачи управления.\r\n', 'ХОД РАБОТЫ:<br>\r\n1.	Повторить приведенный ниже теоретический материал;<br>\r\n2.	вычислить значения операндов для своего варианта;<br>\r\n3.	выполнить указанные задания;<br>\r\n4.	ответить на контрольные вопросы;<br>\r\n5.	подготовить отчет о проделанной работе.', 'Ассемблер, являясь языком низкого уровня, не содержит операторов ветвления, циклов, не поддерживает автоматического формирования адресов для структур данных, не обеспечивает автоматического выполнения преобразований при вводе-выводе данных...', 'document/section/section_2/5/htm/practice_work_7.htm', 'read_document.php', 'document/section/section_2/5/doc/practice/Практическая работа №7.docx', '7', 'read_document.php?section=2&page=7&practice=7', '2', '7', ''),
(7, 'Практическая работа № 2', 'Тема: «РАЗРАБОТКА ПРОГРАММ РАЗВЕТВЛЯЮЩЕЙСЯ И ЦИКЛИЧЕСКОЙ СТРУКТУРЫ ДЛЯ УК НЕЙМАН».', 'Цель:<br>\r\n-	повторить структуру команд, назначение полей команды;<br>\r\n-	повторить назначение основных блоков процессора;<br>\r\n-	научиться читать и писать программы с разветвляющейся и циклической структурой на машинном языке;<br>\r\n-	проанализировать работу процессора с основной памятью;<br>\r\n	протестировать программу для всех целых a- [-2;2] , причем b и c – любые целые числа.<br>\r\n-	проследить за изменением состояния регистров процессора (РОНов, регистра команд и регистра счетчика команд), а также ячеек памяти при выполнении команд программы.', 'Ход работы:<br>\r\n1.	Изучить примеры программ с разветвляющейся и циклической структурой для УК НЕЙМАН.<br>\r\n2.	Разработать программы для задачи 1 и задачи 2 своего варианта. <br>\r\n3.	Протестировать полученные программы.<br>\r\n4.	Оформить отчет по лабораторной работе: <br>\r\n-	номер варианта, условие задачи1 и задачи2;<br>\r\n-	машинные коды программ задачи1 и задачи2;<br>\r\n-	результаты тестирования обеих программ (значения исходных данных и полученные результаты в шестнадцатеричной и десятичной системе счисления.\r\n', 'Рассмотрим ПРИМЕР ВЫПОЛНЕНИЯ ЦИКЛИЧЕСКОЙ ПРОГРАММЫ  НА «УК НЕЙМАН»', 'document/section/section_2/3/htm/practice_work_2.htm', 'read_document.php', 'document/section/section_2/3/doc/practice/Практическая работа №2.docx', '2', 'read_document.php?section=2&page=2&practice=2', '2', '2', ''),
(8, 'Практическая работа № 1', 'Тема: «СОСТАВЛЕНИЕ И ТРАССИРОВКА ЛИНЕЙНЫХ ПРОГРАММ НА УЧЕБНОЙ ЭВМ «УК НЕЙМАН».', 'Цель:<br>\r\n-	повторить структуру команд, назначение полей команды;<br>\r\n-	повторить назначение основных блоков процессора;<br>\r\n-	научиться читать и писать линейные программы на машинном языке;<br>\r\n-	протестировать программу для всех целых a- [-2;2] , причем b и c – любые целые числа.<br>\r\n-	проследить за изменением состояния регистров процессора (РОНов, регистра команд и регистра счетчика команд), а также ячеек памяти при выполнении команд программы.<br>\r\nвыполнении команд программы.', '\r\n', '', 'document/section/section_2/3/htm/practice_work_1.htm', 'read_document.php', 'document/section/section_2/3/doc/practice/Практическая работа №1.docx', '1', 'read_document.php?section=2&page=1&practice=1', '2', '1', ''),
(9, 'Практическая работа № 6', 'Тема: «РАЗРАБОТКА ПРОГРАММ ЛИНЕЙНОЙ СТРУКТУРЫ С ИСПОЛЬЗОВАНИЕМ ЛОГИЧЕСКИХ КОМАНД И КОМАНД, ОСУЩЕСТВЛЯЮЩИХ АРИФМЕТИЧЕСКИЕ, ЛОГИЧЕСКИЕ И ЦИКЛИЧЕСКИЕ СДВИГИ».', 'Цель:<br>\r\n―	опробовать типичные ситуации применения логических команд<br>\r\n―	закрепить особенности выполнения логических команд, а также команд арифметических, логических и циклических сдвигов;<br>\r\n―	научиться устанавливать флаги состояния регистра флагов по результату выполнения указанных команд;<br>\r\n―	научиться использовать логические команды и команды сдвигов при составлении программ линейной структуры на языке ассемблера; <br>\r\n―	закрепить навыки по кодированию и декодированию этих команд.\r\n', '\r\nХОД РАБОТЫ.<br>\r\n1.	Познакомиться с необходимой теоретической информацией.<br>\r\n2.	Ответить на контрольные вопросы.<br>\r\n3.	Выполнить предложенные задания на программирование.<br>\r\n4.	Оформить отчет.<br>\r\n5.	Защитить работу.', 'Минимально  адресуемая единица данных в микропроцессоре – байт. Логические команды позволяют манипулировать отдельными битами. Это единственные команды в системе команд микропроцессора, которые позволяют работать на битов...', 'document/section/section_2/5/htm/practice_work_6.htm', 'read_document.php', 'document/section/section_2/5/doc/practice/Практическая работа №6.docx', '6', 'read_document.php?section=2&page=6&practice=6', '2', '6', ''),
(10, 'Практическая работа № 8', 'Тема: «РАЗРАБОТКА ПРОГРАММ ЦИКЛИЧЕСКОЙ СТРУКТУРЫ C ИСПОЛЬЗОВАНИЕМ ОДНОМЕРНЫХ И ДВУМЕРНЫХ МАССИВОВ».', 'Цель:<br>\r\n―	Изучить особенности выполнения команд, организующих циклы (LOOPx), и команд загрузки исполнительного адреса (LEA).<br>\r\n―	Научиться использовать указанные команды при составлении программ циклической структуры на языке ассемблера.', 'ХОД РАБОТЫ:<br>\r\n1.	Повторить приведенный ниже теоретический материал.<br>\r\n2.	Разобрать примеры приведенных программ, реализующих обработку массивов.<br>\r\n3.	Внимательно изучить задание своего варианта на обработку элементов массива.<br>\r\n4.	Разработать блок-схему программы обработки элементов массива.<br>\r\n5.	Задать одномерный массив целочисленных данных MAS в одном из заданных форматов (DB, DW, DD) и реализовать обработку массива в соответствии с заданием. Длина массива N. Исходные данные задать самостоятельно, учитывая формат элементов массива MAS. Тип результата определяется из контекста задачи.<br>\r\n6.	Произвести тестовые проверки, отметить нормальные и аномальные результаты, сделать анализ результатов.<br>\r\n7.	Сравнить результаты, полученные в результате работы программы, с рассчитанными вручную. \r\n8.	Ответить на контрольные вопросы.<br>\r\n9.	Оформить отчет по практической работе, включающий тему и цель работы, листинги программ, тестовые примеры, ответы на контрольные вопросы.\r', 'Для того чтобы обрабатывать массив в ассемблере, нужно знать, где он хранится (его начальный адрес), и длину его элемента. Как и в языке C/C++, имя массива в ассемблере является и его начальным адресом.', 'document/section/section_2/5/htm/practice_work_8.htm', 'read_document.php', 'document/section/section_2/5/doc/practice/Практическая работа №8.docx', '8', 'read_document.php?section=2&page=8&practice=8', '2', '8', ''),
(11, 'Практическая работа № 9', 'Тема: «РАЗРАБОТКА ПРОГРАММ С ИСПОЛЬЗОВАНИЕМ КОМАНД СТРОКОВЫХ ПРИМИТИВОВ».', 'Цель:<br>\r\n―	изучение особенностей выполнения команд обработки строк;<br>\r\n―	оценка преимущества цепочечных команд над командами, работающими с отдельными элементами.\r\n', 'ХОД РАБОТЫ:<br>\r\n1.	Повторить приведенный ниже теоретический материал.<br>\r\n2.	Разобрать примеры приведенных программ, реализующих обработку строк.<br>\r\n3.	Внимательно изучить задание своего варианта на обработку цепочек элементов.<br>\r\n4.	Разработать блок-схему программы, обрабатывающей цепочки элементов в памяти.<br>\r\n5.	Задать цепочку элементов (строку) в формате DB и реализовать ее обработку в соответствии с заданием. Длина строки N. Исходные данные задать самостоятельно (либо получить у преподавателя).<br>\r\n6.	Произвести тестовые проверки, отметить нормальные и аномальные результаты, сделать анализ результатов.<br>\r\n7.	Сравнить результаты, полученные в результате работы программы, с рассчитанными вручную. <br>\r\n8.	Ответить на контрольные вопросы.<br>\r\n9.	Оформить отчет по практической работе, включающий тему и цель работы, листинги программ, тестовые примеры, ответы на контрольные вопросы.', '', 'document/section/section_2/7/htm/practice_work_9.htm', 'read_document.php', 'document/section/section_2/7/doc/practice/Практическая работа №9.docx', '9', 'read_document.php?section=2&page=9&practice=9', '2', '9', ''),
(12, 'Лабораторная работа № 1', 'Тема: НАЗНАЧЕНИЕ МП. ОСНОВНОЙ ЦИКЛ РАБОТЫ МП ФОН-НЕЙМАНОВСКОЙ АРХИТЕКТУРЫ.', 'Цель работы: Получить представление о процессах происходящих в ЭВМ с фон-Неймановской архитектурой во время выполнения программы. Познакомиться с понятием «машинный цикл».', '', 'Архитектура типичной небольшой вычислительной системы на основе микроЭВМ содержит все 5 основных блоков цифровой машины: устройство ввода информации, управляющее устройство...', 'document/section/section_2/1/htm/laboratory_work_1.htm', 'read_document.php', 'document/section/section_2/1/doc/laboratory/Лабораторная работа №1.docx', '1', 'read_document.php?section=2&page=1&laboratory=1', '2', '', '1'),
(13, 'Лабораторная работа № 2', 'Тема: «РЕЖИМЫ АДРЕСАЦИИ ОПЕРАНДОВ МП ФОН-НЕЙМАНОВСКОЙ АРХИТЕКТУРЫ»', 'Цель:<br>\n-	повторить структуру команды – основные поля и их назначение;<br>\n-	определить формат команды – структуру ее полей\n', '', 'Для того чтобы обрабатывать массив в ассемблере, нужно знать, где он хранится (его начальный адрес), и длину его элемента. Как и в языке C/C++, имя массива в ассемблере является и его начальным адресом.', 'document/section/section_2/2/htm/laboratory_work_2.htm', 'read_document.php', 'document/section/section_2/2/doc/laboratory/Лабораторная работа №2.docx', '2', 'read_document.php?section=2&page=2&laboratory=2', '2', '', '2'),
(14, 'Лабораторная работа № 3', 'Тема: «СТРУКТУРА УЧЕБНОЙ ЭВМ. СОСТОЯНИЯ И РЕЖИМЫ РАБОТЫ УЧЕБНОЙ ЭВМ. ИНТЕРФЕЙС ПОЛЬЗОВАТЕЛЯ.»', 'Цель работы:<br>\n-	закрепить знания логической структуры процессора фон-Неймановской архитектуры, логической структуры и функций основной памяти;<br>\n-	закрепить знания принципов фон-Неймановской архитектуры;<br>\n-	закрепить знания по кодированию информации в ЭВМ;<br>\n-	научиться работать с учебной ЭВМ «УК НЕЙМАН».', 'Ход работы:<br>\n-	загрузить Интернет-приложение «УК НЕЙМАН»;<br>\n-	используя указанные ссылки, познакомиться с описанием машины, системой команд, инструкцией по использованию;<br>\n-	загрузить в «УК НЕЙМАН» программу из предложенных примеров и осуществить ее пошаговое выполнение.<br>\n-	ответить на контрольные вопросы.', '', 'document/section/section_2/3/htm/laboratory_work_3.htm', 'read_document.php', 'document/section/section_2/3/doc/laboratory/Лабораторная работа №3.docx', '3', 'read_document.php?section=2&page=3&laboratory=3', '2', '', '3'),
(15, 'Лабораторная работа № 4', 'Тема: «ИЗУЧЕНИЕ МЕХАНИЗМА ОПРЕДЕЛЕНИЯ ФИЗИЧЕСКОГО АДРЕСА ПРИ СЕГМЕНТНОЙ АДРЕСАЦИИ ПАМЯТИ В РЕАЛЬНОМ РЕЖИМЕ РАБОТЫ ПРОЦЕССОРА»', 'Цель работы:<br>\n-	закрепить знания назначения, логической структуры и функций основной памяти;<br>\n-	повторить структуру адресного пространства 1 Мб;<br>\n-	закрепить знания по сегментной адресации памяти в реальном режиме работы процессора;<br>\n-	научиться определять физические адреса ячеек памяти на основе известных логических.', 'ХОД РАБОТЫ<br>\n-	Просмотреть презентации «Организация памяти ПЭВМ», «Режимы адресации памяти»;<br>\n-	повторить приведенный ниже теоретический материал (просмотреть презентацию);<br>\n-	выполнить приведенные задания;<br>\n-	ответить на контрольные вопросы.', 'Чтобы CPU мог передать адрес какой-либо ячейки RAM, нужно записать ее адрес в один из регистр...', 'document/section/section_2/4/htm/laboratory_work_4.htm', 'read_document.php', 'document/section/section_2/4/doc/laboratory/Лабораторная работа№4.docx', '4', 'read_document.php?section=2&page=4&laboratory=4', '2', '', '4'),
(16, 'Лабораторная работа № 5', 'Тема: «СОСТАВЛЕНИЕ УПРОЩЕННОЙ СХЕМЫ ВЫПОЛНЕНИЯ ПРОЦЕССОРОМ I8086 МАШИННЫХ КОМАНД ПРОГРАММЫ».', 'Цель:<br>\r\n―	научиться читать состояния функциональных регистров процессора и распределять память под нужды программы;<br>\r\n―	научиться анализировать этапы выполнения машинных команд программы;<br>\r\n―	понять назначение префикса программного сегмента (PSP).\r\n', 'ХОД РАБОТЫ:<br>\r\n1.	Повторить приведенный ниже теоретический материал.<br>\r\n2.	Выделить основные этапы рабо¬ты процессора при выполнении машинной команды.<br>\r\n3.	Аналогично приведенному примеру, проанализировать этапы работы процессора по выполнению команд своего варианта.<br>\r\n4.	В качестве отчета по работе подготовить презентацию, содержащую отдельные слайды по каждому этапу выполнения команд. Слайды, помимо текста, должны содержать аналогичные рисунки.<br> \r\n5.	Ответить на контрольные вопросы.\r\n', 'Рассмотрим упрощенную схему выполнения процессором машинных команд программы. Эта схема на логическ...', 'document/section/section_2/5/htm/laboratory_work_5.htm', 'read_document.php', 'document/section/section_2/5/doc/laboratory/Лабораторная работа №5.docx', '5', 'read_document.php?section=2&page=5&laboratory=5', '2', '', '5'),
(17, 'Лабораторная работа № 6', 'Тема: «РАЗРАБОТКА ПРОГРАММ ЛИНЕЙНОЙ СТРУКТУРЫ С ИСПОЛЬЗОВАНИЕМ ЛОГИЧЕСКИХ КОМАНД И КОМАНД, ОСУЩЕСТВЛЯЮЩИХ АРИФМЕТИЧЕСКИЕ, ЛОГИЧЕСКИЕ И ЦИКЛИЧЕСКИЕ СДВИГИ».', 'Цель:<br>\r\n―	опробовать типичные ситуации применения логических команд<br>\r\n―	закрепить особенности выполнения логических команд, а также команд арифметических, логических и циклических сдвигов;<br>\r\n―	научиться устанавливать флаги состояния регистра флагов по результату выполнения указанных команд;<br>\r\n―	научиться использовать логические команды и команды сдвигов при составлении программ линейной структуры на языке ассемблера; <br>\r\n―	закрепить навыки по кодированию и декодированию этих команд.', 'ХОД РАБОТЫ.<br>\r\n1.	Познакомиться с необходимой теоретической информацией.<br>\r\n2.	Ответить на контрольные вопросы.<br>\r\n3.	Выполнить предложенные задания на программирование.<br>\r\n4.	Оформить отчет.<br>\r\n5.	Защитить работу.', 'Минимально  адресуемая единица данных в микропроцессоре – байт. Логические команды позволяю...', 'document/section/section_2/6/htm/laboratory_work_6.htm', 'read_document.php', 'document/section/section_2/6/doc/laboratory/Лабораторная работа №6.docx', '6', 'read_document.php?section=2&page=6&laboratory=6', '2', '', '6'),
(18, 'Лабораторная работа № 7', 'Тема: «РАЗРАБОТКА ПРОГРАММЫ, ОСУЩЕСТВЛЯЮЩЕЙ БИНАРНЫЙ ПОИСК ЭЛЕМЕНТА В  МАССИВЕ».', 'Цель:<br>\n―	Изучение приемов поиска элементов в массивах данных в программах на языке ASSEMBLER\n', 'ХОД РАБОТЫ:<br>\n1.	Ознакомиться с методами поиска информации в массивах данных.<br>\n2.	Закрепить теоретические сведения по использованию методов сортировки массивов и метода бинарного поиска заданного элемента выполнением указанного ниже задания.<br>\n3.	Написать модуль сортировки (одним или несколькими приведенными способами) элементов массива на языке ассемблера.<br>\n4.	Составить и зарисовать в отчет блок-схему алгоритма бинарного поиска элементов.<br>\n5.	Написать модуль, реализующий бинарный поиск заданного элемента в массиве на языке ассемблера.<br>\n6.	Произвести тестовые проверки, отметить нормальные и аномальные результаты, сделать анализ результатов.<br>\n7.	Выполнить оценку скорости работы исследуемых алгоритмов поиска.', 'Одна из распространенных задач при программировании задач обработки данных, работы с матричным представлением число...', 'document/section/section_2/7/htm/laboratory_work_7.htm', 'read_document.php', 'document/section/section_2/7/doc/laboratory/Лабораторная работа №7.docx', '7', 'read_document.php?section=2&page=7&laboratory=7', '2', '', '7'),
(19, 'Лабораторная работа № 1', 'Тема: "Разработка простейших программ на машинном языке гипотетического компьютера".', 'Цель работы:<br>\r\n\r\nНа примере гипотетической ЭВМ разобрать и закрепить основные принципы фон Неймановской архитектуры компьютера. Уяснить назначение основных блоков процессора: АЛУ, устройства управления, регистров. Усвоить понятия: "машинная команда", "код операции", "операнд", "система команд", "тракт данных", "машинный цикл".', 'Порядок работы:<br>\r\n1.	Ознакомиться с основными архитектурными характеристиками гипотетического компьютера.<br>\r\n2.	Детально разобрать структуру каждой команды, входящей в систему команд гипотетического компьютера.<br>\r\n3.	Для каждой команды из системы команд детально описать действия процессора по ее выполнению.<br>\r\n4.	Объяснить действия процессора по выполнению команд, приведенных в качестве примеров.<br>\r\n5.	Ответить на контрольные вопросы.<br>\r\n6.	Оформить отчет по лабораторной работе № 1.\r\n', 'Рассматриваемая машина имеет 16 регистров общего назначения, пронумерованных от 0 до F. Разрядность каждого р...', 'document/section/section_1/1/htm/laboratory_work_1.htm', 'read_document.php', 'document/section/section_1/1/doc/laboratory/Лабораторная работа№1.doc', '1', 'read_document.php?section=1&page=1&laboratory=1', '1', '', '1'),
(20, 'Лабораторная работа № 2', 'Тема: "Изучение этапов выполнения машинного цикла. Работа процессора с оперативной памятью".\n', 'Цель работы:<br>\nДетальное изучение этапов машинного цикла по выполнению команд программы.\n', 'Порядок работы:<br>\r\n1.	Изучите приведенный ниже теоретический материал, включающий описание этапов функционирования машинного цикла.<br>\r\n2.	Дан текст программы на машинном языке гипотетической машины (см. ЛР №1).<br>\r\nПриведено полное описание работы процессора по выполнению указанной программы (поэтапное описание машинных циклов). Внимательно изучите его.<br>\r\n3.	Дайте ответы на контрольные вопросы.<br>\r\n4.	Выполните приведенные ниже задания.<br>\r\n5.	Оформите отчет по лабораторной работе № 2.', 'Компьютер выполняет хранимую в его памяти программу посредством копирования команд из основной... ', 'document/section/section_1/2/htm/laboratory_work_2.htm', 'read_document.php', 'document/section/section_1/2/doc/laboratory/Лабораторная работа№2.doc', '2', 'read_document.php?section=1&page=2&laboratory=2', '1', '', '2'),
(21, 'Лабораторная работа № 3', 'Тема: "Создание программ на машинном языке в системе команд учебной вычислительной машины".', 'Цель работы:<br>\r\nИзучение системы команд процессора гипотетической ЭВМ.\r\n', 'Порядок работы:<br>\r\n1.	Повторите теоретический материал из лабораторных работ №1 и №2.<br>\r\n2.	Выполните приведенные ниже задания.<br>\r\n3.	Оформите отчет по лабораторной работе № 3.\r\n', 'Предположим, что ячейки памяти с адресами от 00 до 09 содержат следующие битовые комбинации... ', 'document/section/section_1/3/htm/laboratory_work_3.htm', 'read_document.php', 'document/section/section_1/3/doc/laboratory/Лабораторная работа№3.doc', '3', 'read_document.php?section=1&page=3&laboratory=3', '1', '', '3'),
(22, 'Лабораторная работа № 4', 'Тема: "Создание программ на машинном языке в системе команд учебной вычислительной машины. Размещение кода программы и операндов в ОП."', 'Цель работы:<br>\r\nИзучение системы команд процессора гипотетической ЭВМ.\r\n', 'Порядок работы:<br>\r\n1.	Повторите теоретический материал из лабораторных работ №1, №2 и №3.<br>\r\n2.	Выполните приведенные ниже задания.<br>\r\n3.	Оформите отчет по практической работе № 1.', 'Предположим, что в памяти гипотетической машины в ячейках с адресами от A4h до B1h содержатся битовые ко... ', 'document/section/section_1/4/htm/laboratory_work_4.htm', 'read_document.php', 'document/section/section_1/4/doc/laboratory/Лабораторная работа№4.doc', '4', 'read_document.php?section=1&page=4&laboratory=4', '1', '', '4');

-- --------------------------------------------------------

--
-- Структура таблицы `read_result_users_test`
--

CREATE TABLE IF NOT EXISTS `read_result_users_test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number_test` varchar(999) NOT NULL,
  `fio_users` varchar(999) NOT NULL,
  `queryes` varchar(999) NOT NULL,
  `correct` varchar(999) NOT NULL,
  `not_correct` varchar(999) NOT NULL,
  `time` varchar(999) NOT NULL,
  `value` varchar(999) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=56 ;

--
-- Дамп данных таблицы `read_result_users_test`
--

INSERT INTO `read_result_users_test` (`id`, `number_test`, `fio_users`, `queryes`, `correct`, `not_correct`, `time`, `value`) VALUES
(1, '1', 'Ковалевич Артём Юрьевич', '20', '15', '5', '15:1', '7'),
(53, '1', 'Ковалевич Артём Юрьевич', '21', '9', '12', '30:18', '6'),
(54, '1', 'Ковалевич Артём Юрьевич', '21', '9', '12', '30:18', '6'),
(55, '1', 'Ковалевич Артём Юрьевич', '21', '13', '8', '4:00', '6');

-- --------------------------------------------------------

--
-- Структура таблицы `read_tests`
--

CREATE TABLE IF NOT EXISTS `read_tests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `test_number` varchar(999) NOT NULL,
  `test_image` varchar(999) NOT NULL,
  `test_text` varchar(999) NOT NULL,
  `circs_test` varchar(999) NOT NULL,
  `href_test` varchar(999) NOT NULL,
  `passage_of_time_minutes` varchar(999) NOT NULL,
  `passage_of_time_hours` varchar(999) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `read_tests`
--

INSERT INTO `read_tests` (`id`, `test_number`, `test_image`, `test_text`, `circs_test`, `href_test`, `passage_of_time_minutes`, `passage_of_time_hours`) VALUES
(1, '1', '/Image/know.png', '-  Лабораторная работа №1;<br />\n-  Лабораторная работа №2;<br />\n-  Лабораторная работа №3;<br />\n-  Практическая работа №1.<br />\n-  Практическая работа №2.<br />', '20', 'know_page.php?test=1&task=1', '30', '0'),
(2, '2', '/Image/know_2.png', '-  Лабораторная работа №5;<br />\n-  Практическая работа №3.<br />\n-  Практическая работа №4.<br />', '20', 'know_page.php?test=2&task=1', '30', '0');

-- --------------------------------------------------------

--
-- Структура таблицы `search`
--

CREATE TABLE IF NOT EXISTS `search` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sections` varchar(999) NOT NULL,
  `subsections` varchar(999) NOT NULL,
  `word` varchar(3000) NOT NULL,
  `href_subsections` varchar(999) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Дамп данных таблицы `search`
--

INSERT INTO `search` (`id`, `sections`, `subsections`, `word`, `href_subsections`) VALUES
(1, '1', 'Лабораторная работа № 1', 'Лабораторная работа № 1, Архитектура, гипотетического, компьютера, 16, регистров, общего, назначения, 0F, Разрядность, каждого, регистра, равна, одному, байту, 0000b, 1111b, память, состоит, 256, ячеек, 00h, FFh, Мантисса, порядок, Структура, команд, двум, байтам, КОП, поле, R, S, T, X, Y,', 'read_document.php?section=1&page=1&laboratory=1'),
(2, '1', 'Лабораторная работа № 2', 'Лабораторная работа № 2, копирования, декодируется, счетчик, адреса, регистр, команд, Регистр, машинным, циклом, выборки, декодирования, выполнения, сигналом, синхронизации, тактовая, Программа, данные, A0h, A1h, регистр, команд, счетчике, адреса,', 'read_document.php?section=1&page=2&laboratory=2'),
(21, '1', 'Лабораторная работа № 3', 'Лабораторная работа № 3, ', 'read_document.php?section=1&page=3&laboratory=3'),
(22, '1', 'Лабораторная работа № 4', 'Лабораторная работа № 4, счетчик адреса, A4h, напишите небольшую программу, ', 'read_document.php?section=1&page=4&laboratory=4'),
(23, '2', 'Лабораторная работа № 1', 'Лабораторная работа № 1, Теоретические сведения и пример, иллюстрирующий работу микроЭВМ, 5 основных блоков цифровой машины, Микропроцессор, шины управления, адресная шина, шине данных, Основные характеристики микропроцессора, тактовой частотой, разрядностью, Разрядность МП, архитектурой, Микроархитектура микропроцессора, Макроархитектура, архитектурой ЭВМ, аккумулятор, регистр команд, микропроцессор - это, выборки-декодирования- исполнения, центральным блоком ЭВМ является микропроцессор, АЛУ, УУ, регистров, Работа микропроцессора представляет последовательную реализацию микропроцедур выборки-дешифрации-исполнения, микропроцессор выполняет следующие функции, Логическая структура микропроцессора, вентильных схем, микрокомандами, процесс выполнения программы в ЭВМ представляет собой последовательность командных циклов, Командный цикл, Командный цикл, машинного такта, Количество тактов, выборка команды, чтение памяти, запись в память, чтение стека, запись в стек, прерывание, Устройство управления, ', 'read_document.php?section=2&page=1&laboratory=1'),
(24, '2', 'Лабораторная работа № 2', 'Лабораторная работа № 2, Прямая адресация, Относительная адресация, Косвенная адресация, Непосредственная адресация, Стековая адресация, микрооперациями, микрокомандой, Ассоциативный поиск, Адресный поиск, Адресный код, Исполнительный адрес, СПОСОБ АДРЕСАЦИИИ, КЛАССИФИКАЦИЯ СПОСОБОВ АДРЕСАЦИИ, явной адресации, неявной адресации, КЛАССИФИКАЦИЯ ПО СПОСОБУ ФОРМИРОВАНИЯ ИСПОЛНИТЕЛЬНЫХ АДРЕСОВ ЯЧЕЕК ПАМЯТИ, Абсолютные способы формирования, Относительные способы формирования, КЛАССИФИКАЦИЯ СПОСОБОВ АДРЕСАЦИИ ПО КРАТНОСТИ ОБРАЩЕНИЯ В ПАМЯТЬ, Непосредственная адресация операнда, Прямая адресация операндов, Регистровая адресация, Косвенная адресация операндов, Регистровая косвенная адресация, Автоинкрементный метод адресации, Косвенный-автоинкрементный метод адресации, Автодекрементный метод адресации, Косвенный-автодекрементный метод адресации, Косвенная адресация со смещением, Базирование способом суммирования, Базирование способом совмещения составляющих, Индексная адресация, косвенная адресация со смещением, Относительный метод адресации, Стековая адресация, ', 'read_document.php?section=2&page=2&laboratory=2'),
(25, '2', 'Лабораторная работа № 4', 'Лабораторная работа № 4, CPU, RAM, i8086, сегментная адресация памяти, Сегмент, Сегмент – это, эффективный адрес, Параграфом, ', 'read_document.php?section=2&page=4&laboratory=4'),
(26, '2', 'Лабораторная работа № 5', 'Лабораторная работа № 5, Схема работы процессора при выполнении машинной команды, префиксом программного сегмента, PSP, Первый этап, втором этапе, префикса  замены сегмента, третьем этапе, Четвертый этап, шестом этапе, ', 'read_document.php?section=2&page=5&laboratory=5'),
(27, '2', 'Лабораторная работа № 6', 'Лабораторная работа № 6, Массив, сортировкой, внутренней, внешней сортировки, Сортировка прямым включением, Сортировка прямым выбором, Сортировка прямым обменом, метод пузырька, ', 'read_document.php?section=2&page=6&laboratory=6'),
(28, '2', 'Лабораторная работа № 7', 'Лабораторная работа № 7, сортировка массивов данных, ЛИНЕЙНЫЙ ПОИСК, Неупорядоченный поиск, ПОИСК В УПОРЯДОЧЕННОЙ ПОСЛЕДОВАТЕЛЬНОСТИ, ', 'read_document.php?section=2&page=7&laboratory=7'),
(29, '2', 'Лабораторная работа № 3', 'Лабораторная работа № 3, ', 'read_document.php?section=2&page=3&laboratory=3');

-- --------------------------------------------------------

--
-- Структура таблицы `sections`
--

CREATE TABLE IF NOT EXISTS `sections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(1000) NOT NULL,
  `href_sections` varchar(999) NOT NULL,
  `sections` varchar(999) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `sections`
--

INSERT INTO `sections` (`id`, `name`, `href_sections`, `sections`) VALUES
(1, 'Гипотетическая машина', 'active_tema_page_1.php?section=', '1'),
(2, 'Методическое обеспечение ЛПР', 'active_tema_page_1.php?section=', '2');

-- --------------------------------------------------------

--
-- Структура таблицы `subsictions`
--

CREATE TABLE IF NOT EXISTS `subsictions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sictions` varchar(999) NOT NULL,
  `subsections` varchar(999) CHARACTER SET utf8mb4 NOT NULL,
  `href_subsections` varchar(999) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Дамп данных таблицы `subsictions`
--

INSERT INTO `subsictions` (`id`, `sictions`, `subsections`, `href_subsections`) VALUES
(1, '1', 'Лабораторная работа №1', 'read_document.php?section=1&page=1&laboratory=1'),
(2, '1', 'Лабораторная работа №2', 'read_document.php?section=1&page=2&laboratory=2'),
(3, '1', 'Лабораторная работа №3', 'read_document.php?section=1&page=3&laboratory=3'),
(4, '1', 'Лабораторная работа №4', 'read_document.php?section=1&page=4&laboratory=4'),
(5, '2', 'Лабораторная работа №1', 'read_document.php?section=2&page=1&laboratory=1'),
(6, '2', 'Лабораторная работа №2', 'read_document.php?section=2&page=2&laboratory=2'),
(7, '2', 'Лабораторная работа №3', 'read_document.php?section=2&page=3&laboratory=3'),
(8, '2', 'Лабораторная работа №4', 'read_document.php?section=2&page=4&laboratory=4'),
(9, '2', 'Лабораторная работа №5', 'read_document.php?section=2&page=5&laboratory=5'),
(10, '2', 'Лабораторная работа №6', 'read_document.php?section=2&page=6&laboratory=6'),
(11, '2', 'Лабораторная работа №7', 'read_document.php?section=2&page=7&laboratory=7'),
(12, '2', 'Практическая работа №1', 'read_document.php?section=2&page=1&practice=1'),
(13, '2', 'Практическая работа №2', 'read_document.php?section=2&page=2&practice=2'),
(14, '2', 'Практическая работа №3', 'read_document.php?section=2&page=3&practice=3'),
(15, '2', 'Практическая работа №4', 'read_document.php?section=2&page=4&practice=4'),
(16, '2', 'Практическая работа №5', 'read_document.php?section=2&page=5&practice=5'),
(17, '2', 'Практическая работа №6', 'read_document.php?section=2&page=6&practice=6'),
(18, '2', 'Практическая работа №7', 'read_document.php?section=2&page=7&practice=7'),
(19, '2', 'Практическая работа №8', 'read_document.php?section=2&page=8&practice=8'),
(20, '2', 'Практическая работа №9', 'read_document.php?section=2&page=9&practice=9');

-- --------------------------------------------------------

--
-- Структура таблицы `test_options`
--

CREATE TABLE IF NOT EXISTS `test_options` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number_test` varchar(999) NOT NULL,
  `number_task` varchar(999) NOT NULL,
  `response_options` varchar(999) NOT NULL,
  `number_options` varchar(999) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=240 ;

--
-- Дамп данных таблицы `test_options`
--

INSERT INTO `test_options` (`id`, `number_test`, `number_task`, `response_options`, `number_options`) VALUES
(1, '1', '1', 'Машинный такт состоит из нескольких машинных циклов, в течение каждого из которых выполняется элементарное действие в микропроцессоре.', '1'),
(2, '1', '1', 'Машинный цикл состоит из нескольких машинных тактов, в течение каждого из которых выполняется элементарное действие в микропроцессоре.', '2'),
(3, '1', '1', 'Машинный цикл  - это последовательность микроопераций.', '3'),
(4, '1', '1', 'Машинный цикл состоит из нескольких командных циклов, в течение каждого из которых выполняется элементарное действие в микропроцессоре.', '4'),
(5, '1', '1', 'Одно обращение процессора к памяти или к внешнему устройству, называется командой.', '5'),
(6, '1', '2', 'Выборка команды', '1'),
(7, '1', '2', 'Чтение памяти', '2'),
(8, '1', '2', 'Запись в стек', '3'),
(9, '1', '2', 'Ввод данных из внешнего устройства', '4'),
(10, '1', '2', 'Останов', '5'),
(11, '1', '2', 'Сложение операндов', '6'),
(12, '1', '3', 'машинным циклом', '1'),
(13, '1', '3', 'машинным тактом', '2'),
(14, '1', '3', 'циклом команды', '3'),
(15, '1', '4', 'декодирование операнда', '1'),
(16, '1', '4', 'декодирование команды', '2'),
(17, '1', '4', 'выборка операнда из памяти', '3'),
(18, '1', '4', 'выборка команды из памяти', '4'),
(19, '1', '4', 'выполнение команды', '5'),
(20, '1', '4', 'запись результата', '6'),
(21, '1', '5', 'запись результата', '0'),
(22, '1', '5', 'выборка операндов из памяти', '0'),
(23, '1', '5', 'выборка операндов из памяти', '0'),
(24, '1', '5', 'выборка операндов из памяти', '0'),
(25, '1', '5', 'выполнение команды', '0'),
(26, '1', '7', 'машинный цикл', '1'),
(27, '1', '7', 'машинный такт', '2'),
(28, '1', '7', 'командный цикл', '3'),
(29, '1', '7', 'программный цикл', '4'),
(30, '1', '8', 'десятичных', '1'),
(31, '1', '8', 'двоичных', '2'),
(32, '1', '8', 'шестнадцатеричных', '3'),
(33, '1', '8', 'восьмеричных', '4'),
(34, '1', '8', 'троичных', '5'),
(35, '1', '9', 'память вычислительной машины имеет неограниченное количество ячеек', '0'),
(36, '1', '9', 'устройство управления отвечает за автоматическое выполнение программы', '0'),
(37, '1', '10', 'на диске', '1'),
(38, '1', '10', 'в устройствах ввода', '2'),
(39, '1', '10', 'в ячейках основной памяти', '3'),
(40, '1', '10', 'в регистрах', '4'),
(41, '1', '10', 'в кэш-памяти', '5'),
(42, '1', '11', 'матрицу ячеек', '1'),
(43, '1', '11', 'линейку адресов', '2'),
(44, '1', '11', 'совокупность блоков памяти', '3'),
(45, '1', '11', 'страницы', '4'),
(46, '1', '11', 'фрэймы', '5'),
(47, '1', '12', 'секторам', '1'),
(48, '1', '12', 'секторам', '2'),
(49, '1', '12', 'адресам', '3'),
(50, '1', '12', 'блокам', '4'),
(51, '1', '12', 'страницам', '5'),
(52, '1', '13', 'адрес команды - это ее номер в программе', '0'),
(53, '1', '13', 'команды программы размещаются в памяти вычислительной машины в произвольном порядке', '0'),
(54, '1', '14', 'в ЭВМ с архитектурой фон-Неймана\nкоманды и данные хранятся в общей памяти', '0'),
(55, '1', '14', 'принцип последовательной передачи управления базируется на регистре команд', '0'),
(56, '1', '15', 'трехадресные', '1'),
(57, '1', '15', 'двухадресные', '2'),
(58, '1', '15', 'одноадресные', '3'),
(59, '1', '15', 'пятиадресные', '4'),
(60, '1', '15', 'безадресные', '5'),
(61, '1', '15', 'четырехадресные', '6'),
(62, '1', '15', 'многоадресные', '7'),
(63, '1', '17', 'микропроцессор', '1'),
(64, '1', '17', 'кэш-память', '2'),
(65, '1', '17', 'арифметико-логическое устройство', '3'),
(66, '1', '17', 'устройство управления', '4'),
(67, '1', '17', 'устройства ввода-вывода', '5'),
(68, '1', '18', 'обязательное наличие кэш-памяти в компьютере', '1'),
(69, '1', '18', 'общую память для размещения команд и данных программы', '2'),
(70, '1', '18', 'хранение команд и данных программы в отдельных файлах', '3'),
(71, '1', '18', 'раздельную память для размещения команд и данных программы', '4'),
(72, '1', '18', 'хранение команд и данных программы в одном файле', '5'),
(73, '1', '19', 'обязательное наличие кэш-памяти в компьютере', '1'),
(74, '1', '19', 'общую память для размещения команд и данных программы', '2'),
(75, '1', '19', 'хранение команд и данных программы в отдельных файлах', '3'),
(76, '1', '19', 'раздельную память для размещения команд и данных программы', '4'),
(77, '1', '19', 'наличие ПЗУ', '5'),
(78, '1', '20', 'обязательное наличие кэш-памяти в компьютере', '1'),
(79, '1', '20', 'общую память для размещения команд и данных программы', '2'),
(80, '1', '20', 'общую память для размещения команд и данных программы', '3'),
(81, '1', '20', 'раздельную память для размещения команд и данных программы', '4'),
(82, '1', '20', 'наличие ПЗУ', '5'),
(83, '1', '21', 'Принстонская архитектура компьютера предполагает размещение команд и данных в общей', '0'),
(84, '1', '21', '"Адресное пространство" и "Оперативная память" - равнозначные понятия', '0'),
(85, '1', '21', 'Программа перед выполнением должна быть размещена в регистрах процессора', '0'),
(86, '2', '1', 'базовый', '1'),
(87, '2', '1', 'индексный', '2'),
(88, '2', '1', 'непосредственный', '3'),
(89, '2', '1', 'прямой абсолютный', '4'),
(90, '2', '1', 'прямой абсолютный', '5'),
(91, '2', '2', 'базовый', '1'),
(92, '2', '2', 'регистровый косвенный', '2'),
(93, '2', '2', 'непосредственный', '3'),
(94, '2', '2', 'прямой абсолютный', '4'),
(95, '2', '2', 'базово-индексный', '5'),
(96, '2', '3', 'базовый', '1'),
(97, '2', '3', 'индексный', '2'),
(98, '2', '3', 'базово-индексный', '3'),
(99, '2', '3', 'базово-индексный со смещением', '4'),
(100, '2', '3', 'прямой абсолютный', '5'),
(101, '2', '4', 'базовый', '1'),
(102, '2', '4', 'индексный', '2'),
(103, '2', '4', 'базово-индексный', '3'),
(104, '2', '4', 'базово-индексный со смещением', '4'),
(105, '2', '4', 'прямой абсолютный\n', '5'),
(106, '2', '5', 'базовый', '1'),
(107, '2', '5', 'базовый', '2'),
(108, '2', '5', 'регистровый косвенный', '3'),
(109, '2', '5', 'базово-индексный', '4'),
(110, '2', '5', 'регистровый', '5'),
(111, '2', '5', 'непосредственный', '6'),
(112, '2', '5', 'базово-индексный со смещением', '7'),
(113, '2', '6', 'базовый', '1'),
(114, '2', '6', 'индексный', '2'),
(115, '2', '6', 'регистровый косвенный', '3'),
(116, '2', '6', 'базово-индексный', '4'),
(117, '2', '6', 'регистровый', '5'),
(118, '2', '6', 'непосредственный', '6'),
(119, '2', '6', 'базово-индексный со смещением', '7'),
(120, '2', '7', 'регистровый', '1'),
(121, '2', '7', 'базово-индексный', '2'),
(122, '2', '7', 'базово-индексный со смещением', '3'),
(123, '2', '7', 'непосредственный', '4'),
(124, '2', '7', 'базовый', '5'),
(125, '2', '7', 'индексный', '6'),
(126, '2', '8', '1) базово-индексный со смещением', '1'),
(127, '2', '8', '2)базово-индексный', '2'),
(128, '2', '8', '3) регистровый косвенный', '3'),
(129, '2', '8', '4) индексный', '4'),
(130, '2', '8', '5) регистровый', '5'),
(131, '2', '8', 'AND SI, DS:[SI]', '0'),
(132, '2', '8', 'ADD AH, CL', '0'),
(133, '2', '8', 'MOV DL, DS:[SI+44h]', '0'),
(134, '2', '8', 'XOR DH, DS:[BX+SI]', '0'),
(135, '2', '8', 'XOR DL,DS:[BX+DI+518h]', '0'),
(136, '2', '9', '1) базово-индексный со смещением', '1'),
(137, '2', '9', '2) базово-индексный', '2'),
(138, '2', '9', '3) регистровый косвенный', '3'),
(139, '2', '9', '4) базовый', '4'),
(140, '2', '9', '5) регистровый', '5'),
(141, '2', '9', 'XOR AL, DS:[BX]', '0'),
(142, '2', '9', 'ADD CX, AX', '0'),
(143, '2', '9', 'SUB BL, DS:[BX+44h]', '0'),
(144, '2', '9', 'MOV DH, SS:[BP+DI]', '0'),
(145, '2', '9', 'OR CL,DS:[BX+SI+16h]', '0'),
(146, '2', '10', 'индексный', '1'),
(147, '2', '10', 'базовый', '2'),
(148, '2', '10', 'прямой абсолютный', '3'),
(149, '2', '10', 'непосредственный', '4'),
(150, '2', '10', 'регистровый косвенный', '5'),
(151, '2', '10', 'базово-индексный', '6'),
(152, '2', '10', 'базово-индексный со смещением', '7'),
(153, '2', '11', 'индексный', '1'),
(154, '2', '11', 'базовый', '2'),
(155, '2', '11', 'прямой абсолютный', '3'),
(156, '2', '11', 'прямой абсолютный', '4'),
(157, '2', '11', 'регистровый косвенный', '5'),
(158, '2', '11', 'базово-индексный', '6'),
(159, '2', '11', 'базово-индексный со смещением', '7'),
(160, '2', '12', 'индексный', '1'),
(161, '2', '12', 'базовый', '2'),
(162, '2', '12', 'прямой абсолютный', '3'),
(163, '2', '12', 'непосредственный', '4'),
(164, '2', '12', 'регистровый косвенный', '5'),
(165, '2', '12', 'базово-индексный', '6'),
(166, '2', '12', 'базово-индексный со смещением', '7'),
(167, '2', '13', 'индексный', '1'),
(168, '2', '13', 'базовый', '2'),
(169, '2', '13', 'прямой абсолютный', '3'),
(170, '2', '13', 'прямой абсолютный', '4'),
(171, '2', '13', 'регистровый косвенный', '5'),
(172, '2', '13', 'регистровый косвенный', '6'),
(173, '2', '13', 'регистровый', '7'),
(174, '2', '14', 'индексный', '1'),
(175, '2', '14', 'базовый', '2'),
(176, '2', '14', 'прямой абсолютный', '3'),
(177, '2', '14', 'непосредственный', '4'),
(178, '2', '14', 'регистровый косвенный', '5'),
(179, '2', '14', 'базово-индексный', '6'),
(180, '2', '14', 'базово-индексный со смещением', '7'),
(181, '2', '15', 'индексный', '1'),
(182, '2', '15', 'базовый', '2'),
(183, '2', '15', 'прямой абсолютный', '3'),
(184, '2', '15', 'непосредственный', '4'),
(185, '2', '15', 'регистровый косвенный', '5'),
(186, '2', '15', 'базово-индексный', '6'),
(187, '2', '15', 'базово-индексный со смещением', '7'),
(188, '', '', '', ''),
(189, '', '', '', ''),
(190, '', '', '', ''),
(191, '', '', '', ''),
(192, '', '', '', ''),
(193, '', '', '', ''),
(194, '', '', '', ''),
(195, '', '', '', ''),
(196, '', '', '', ''),
(197, '', '', '', ''),
(198, '', '', '', ''),
(199, '', '', '', ''),
(200, '', '', '', ''),
(201, '', '', '', ''),
(202, '', '', '', ''),
(203, '', '', '', ''),
(204, '', '', '', ''),
(205, '', '', '', ''),
(206, '', '', '', ''),
(207, '', '', '', ''),
(208, '', '', '', ''),
(209, '', '', '', ''),
(210, '', '', '', ''),
(211, '', '', '', ''),
(212, '', '', '', ''),
(213, '', '', '', ''),
(214, '', '', '', ''),
(215, '', '', '', ''),
(216, '', '', '', ''),
(217, '', '', '', ''),
(218, '', '', '', ''),
(219, '', '', '', ''),
(220, '', '', '', ''),
(221, '', '', '', ''),
(222, '', '', '', ''),
(223, '', '', '', ''),
(224, '', '', '', ''),
(225, '', '', '', ''),
(226, '', '', '', ''),
(227, '', '', '', ''),
(228, '', '', '', ''),
(229, '', '', '', ''),
(230, '', '', '', ''),
(231, '', '', '', ''),
(232, '', '', '', ''),
(233, '', '', '', ''),
(234, '', '', '', ''),
(235, '', '', '', ''),
(236, '', '', '', ''),
(237, '', '', '', ''),
(238, '', '', '', ''),
(239, '', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `test_query`
--

CREATE TABLE IF NOT EXISTS `test_query` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number_test` varchar(999) NOT NULL,
  `query` varchar(999) NOT NULL,
  `href_image` varchar(999) NOT NULL,
  `response_options` varchar(999) NOT NULL,
  `href_query` varchar(999) NOT NULL,
  `number_task` varchar(999) NOT NULL,
  `know_response` varchar(999) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Дамп данных таблицы `test_query`
--

INSERT INTO `test_query` (`id`, `number_test`, `query`, `href_image`, `response_options`, `href_query`, `number_task`, `know_response`) VALUES
(1, '1', 'Укажите  верное утверждение', '', '', 'http://lessons.by/know_page.php?test=1&task=1', '1', 'Выберите один из 5 вариантов ответа:'),
(2, '1', 'Какой из вариантов не является типом машинного цикла?', '', '', 'http://lessons.by/know_page.php?test=1&task=2', '2', 'Выберите один из 6 вариантов ответа:'),
(3, '1', 'Общее число тактовых импульсов, требуемых для выполнения команды,\nопределяет время её выполнения и называется ...?', '', '', 'http://lessons.by/know_page.php?test=1&task=3', '3', 'Выберите один из 3 вариантов ответа:'),
(4, '1', 'Круговая диаграмма рабочего цикла процессора включает следующие этапы', '', '', 'http://lessons.by/know_page.php?test=1&task=4', '4', 'Выберите несколько из 6 вариантов ответа:'),
(5, '1', 'Расположите в порядке возрастания этапы рабочего цикла процессора', '', '', 'http://lessons.by/know_page.php?test=1&task=5', '5', 'Укажите порядок следования всех 5 вариантов ответа:'),
(6, '1', 'Минимальное количество этапов в командном цикле процессора  - ... .\n\n(Введите число)', '', '', 'http://lessons.by/know_page.php?test=1&task=6', '6', 'Запишите число:'),
(7, '1', 'Одно обращение процессора к памяти или к внешнему  устройству, называется ...?', '', '', 'http://lessons.by/know_page.php?test=1&task=7', '7', 'Выберите один из 4 вариантов ответа:'),
(8, '1', 'Дополните принцип фон-Неймана:<br>\n\n"Вся информация в ВМ представляется в ... кодах"', '', '', 'http://lessons.by/know_page.php?test=1&task=8', '8', 'Выберите один из 5 вариантов ответа:'),
(9, '1', 'Определите истинность высказываний', '', '', 'http://lessons.by/know_page.php?test=1&task=9', '9', '\nУкажите истинность или ложность вариантов ответа:'),
(10, '1', 'Укажите верное окончание предложения<br>\n\n"Все команды и данные выполняющейся программы обязательно должны быть размещены ..."', '', '', 'http://lessons.by/know_page.php?test=1&task=10', '10', 'Выберите один из 5 вариантов ответа:'),
(11, '1', 'Для программиста память представляет собой ...', '', '', 'http://lessons.by/know_page.php?test=1&task=11', '11', 'Выберите один из 5 вариантов ответа:'),
(12, '1', 'Укажите верное окончание предложения<br>\n"Вся информация в ячейках памяти ВМ размещается строго по ..."', '', '', 'http://lessons.by/know_page.php?test=1&task=12', '12', 'Выберите один из 5 вариантов ответа:'),
(13, '1', 'Определите истинность высказываний', '', '', 'http://lessons.by/know_page.php?test=1&task=13', '13', 'Укажите истинность или ложность вариантов ответа:'),
(14, '1', 'Определите истинность высказываний', '', '', 'http://lessons.by/know_page.php?test=1&task=14', '14', 'Укажите истинность или ложность вариантов ответа:'),
(15, '1', 'Команды процессора в общем случае могут быть ...', '', '', 'http://lessons.by/know_page.php?test=1&task=15', '15', 'Выберите несколько из 7 вариантов ответа:'),
(16, '1', 'Дополните высказывание (с учетом падежа):', '', '', 'http://lessons.by/know_page.php?test=1&task=16', '16', 'Запишите ответ:'),
(17, '1', 'Какие устройства (из перечисленных ниже) выделил фон-Неман<br>\n\nв составе вычислительной машины с программным управлением ?', '', '', 'http://lessons.by/know_page.php?test=1&task=17', '17', 'Выберите несколько из 5 вариантов ответа:'),
(18, '1', 'Принстонская архитектура компьютера предполагает', '', '', 'http://lessons.by/know_page.php?test=1&task=18', '18', 'Выберите один из 5 вариантов ответа:'),
(19, '1', 'Гарвардская архитектура компьютера предполагает', '', '', 'http://lessons.by/know_page.php?test=1&task=19', '19', 'Выберите один из 5 вариантов ответа:'),
(20, '1', 'Гарвардская архитектура компьютера предполагает', '', '', 'http://lessons.by/know_page.php?test=1&task=20', '20', 'Выберите один из 5 вариантов ответа:'),
(21, '1', '\r\nОпределите истинность высказываний', '', '', 'http://lessons.by/know_page.php?test=1&task=21', '21', 'Укажите истинность или ложность вариантов ответа:'),
(22, '', '', '', '', '', '', ''),
(23, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `test_return`
--

CREATE TABLE IF NOT EXISTS `test_return` (
  `number_test` varchar(999) NOT NULL,
  `test_return` varchar(999) NOT NULL,
  `number_task` varchar(999) NOT NULL,
  `block_read` varchar(999) NOT NULL,
  `test_bal` varchar(999) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=102 ;

--
-- Дамп данных таблицы `test_return`
--

INSERT INTO `test_return` (`number_test`, `test_return`, `number_task`, `block_read`, `test_bal`, `id`) VALUES
('1', '2', '1', '1', '2', 1),
('1', '6', '2', '1', '2', 2),
('1', '3', '3', '1', '2', 3),
('1', '245', '4', '2', '1', 4),
('1', '53214', '5', '3', '1', 5),
('1', '3', '6', '0', '4', 6),
('1', '1', '7', '1', '2', 7),
('1', '2', '8', '1', '1', 8),
('1', 'нетда', '9', '3', '2', 9),
('1', '3', '10', '1', '1', 10),
('1', '2', '11', '1', '1', 11),
('1', '3', '12', '1', '1', 12),
('1', 'НетНет', '13', '3', '2', 13),
('1', 'ДаНет', '14', '3', '2', 14),
('1', '12356', '15', '2', '1', 15),
('1', 'команд', '16', '0', '1', 16),
('1', '345', '17', '2', '2', 17),
('1', '2', '18', '1', '2', 18),
('1', '4', '19', '1', '2', 19),
('1', '4', '20', '1', '2', 20),
('1', 'ДаНетНет', '21', '3', '3', 21),
('2', '1', '1', '1', '2', 22),
('2', '5', '2', '1', '2', 23),
('2', '4', '3', '1', '2', 24),
('2', '3', '4', '1', '2', 25),
('2', '1', '5', '1', '2', 26),
('2', '4', '6', '1', '2', 27),
('2', '256', '7', '2', '4', 28),
('2', '35421', '8', '3', '3', 29),
('2', '35421', '9', '3', '3', 30),
('2', '6', '10', '1', '2', 31),
('2', '1', '11', '1', '2', 32),
('2', '4', '12', '1', '2', 33),
('2', '7', '13', '1', '2', 34),
('2', '2', '14', '1', '2', 35),
('2', '1', '15', '1', '2', 36),
('', '', '', '', '', 37),
('', '', '', '', '', 38),
('', '', '', '', '', 39),
('', '', '', '', '', 40),
('', '', '', '', '', 41),
('', '', '', '', '', 42),
('', '', '', '', '', 43),
('', '', '', '', '', 44),
('', '', '', '', '', 45),
('', '', '', '', '', 46),
('', '', '', '', '', 47),
('', '', '', '', '', 48),
('', '', '', '', '', 49),
('', '', '', '', '', 50),
('', '', '', '', '', 51),
('', '', '', '', '', 52),
('', '', '', '', '', 53),
('', '', '', '', '', 54),
('', '', '', '', '', 55),
('', '', '', '', '', 56),
('', '', '', '', '', 57),
('', '', '', '', '', 58),
('', '', '', '', '', 59),
('', '', '', '', '', 60),
('', '', '', '', '', 61),
('', '', '', '', '', 62),
('', '', '', '', '', 63),
('', '', '', '', '', 64),
('', '', '', '', '', 65),
('', '', '', '', '', 66),
('', '', '', '', '', 67),
('', '', '', '', '', 68),
('', '', '', '', '', 69),
('', '', '', '', '', 70),
('', '', '', '', '', 71),
('', '', '', '', '', 72),
('', '', '', '', '', 73),
('', '', '', '', '', 74),
('', '', '', '', '', 75),
('', '', '', '', '', 76),
('', '', '', '', '', 77),
('', '', '', '', '', 78),
('', '', '', '', '', 79),
('', '', '', '', '', 80),
('', '', '', '', '', 81),
('', '', '', '', '', 82),
('', '', '', '', '', 83),
('', '', '', '', '', 84),
('', '', '', '', '', 85),
('', '', '', '', '', 86),
('', '', '', '', '', 87),
('', '', '', '', '', 88),
('', '', '', '', '', 89),
('', '', '', '', '', 90),
('', '', '', '', '', 91),
('', '', '', '', '', 92),
('', '', '', '', '', 93),
('', '', '', '', '', 94),
('', '', '', '', '', 95),
('', '', '', '', '', 96),
('', '', '', '', '', 97),
('', '', '', '', '', 98),
('', '', '', '', '', 99),
('', '', '', '', '', 100),
('', '', '', '', '', 101);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `surname` varchar(999) NOT NULL,
  `name` varchar(999) NOT NULL,
  `middle_name` varchar(999) NOT NULL,
  `email` varchar(999) NOT NULL,
  `password` varchar(999) NOT NULL,
  `login` varchar(999) NOT NULL,
  `hash` varchar(999) NOT NULL,
  `time_live` varchar(999) NOT NULL,
  `time_run` varchar(999) NOT NULL,
  `time_delete` varchar(999) NOT NULL,
  `active` varchar(999) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `surname`, `name`, `middle_name`, `email`, `password`, `login`, `hash`, `time_live`, `time_run`, `time_delete`, `active`) VALUES
(2, 'Admin', 'Admin', 'Admin', 'Admin', 'Admin', 'Admin', '', '', '', '', '1'),
(12, 'Ковалевич', 'Артём', 'Юрьевич', 'kowalevichartem@mail.ru', 'artem_GOLD_1996', 'ksmkirpich', 'hash=6f67a6e8ka78e9e4sd4343629he8z69nyd7nndf3', '86400', '1466156738', '1466243138', '1'),
(22, 'Поух', 'Денис ', 'Иванович ', 'den2006@mail.ru', '123', 'den2006', 'hash=b57bhn6n6s5zn5af9ztehtt0h6621i8zsat4k701', '86400', '1466278967', '1466365367', '1');
--
-- База данных: `sto.by`
--

-- --------------------------------------------------------

--
-- Структура таблицы `User_1`
--

CREATE TABLE IF NOT EXISTS `User_1` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Имя` varchar(20) NOT NULL,
  `Категории` varchar(50) NOT NULL,
  `Количество` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `User_1`
--

INSERT INTO `User_1` (`id`, `Имя`, `Категории`, `Количество`) VALUES
(2, 'Артём', 'Продукты', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Name` (`Name`,`Email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Дамп данных таблицы `Users`
--

INSERT INTO `Users` (`id`, `Name`, `Email`, `Password`) VALUES
(1, 'Admin', 'Admin@mail.ru', '1234'),
(3, 'Artem', 'kowalevichartem@mail.ru', 'artem1996'),
(6, 'Александр', 'Sawa@gmail.com', '1234'),
(11, 'Test_3', 'Test_3@gmail.ru', '123'),
(12, 'Оля', 'Оля@mail.ru', '1234'),
(13, 'set', 'set', '4321'),
(14, 'fghfgh', 'fghfgh', 'fghfgh'),
(15, 'sdfsdf', 'sdfsdf', 'sdfsdf');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
