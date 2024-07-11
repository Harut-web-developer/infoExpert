-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 11, 2024 at 11:12 AM
-- Server version: 10.8.4-MariaDB
-- PHP Version: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infoexpert`
--

-- --------------------------------------------------------

--
-- Table structure for table `ac_answers`
--

CREATE TABLE `ac_answers` (
  `id` int(11) NOT NULL,
  `question_am` varchar(255) DEFAULT NULL,
  `question_ru` varchar(255) DEFAULT NULL,
  `question_en` varchar(255) DEFAULT NULL,
  `answer_am` text DEFAULT NULL,
  `answer_ru` text DEFAULT NULL,
  `answer_en` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `order_num` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `ac_answers`
--

INSERT INTO `ac_answers` (`id`, `question_am`, `question_ru`, `question_en`, `answer_am`, `answer_ru`, `answer_en`, `status`, `order_num`) VALUES
(1, 'fdfdsf', 'fadsfdsa', 'dsfdsf', 'dsfsdafas', 'fdsafsa', 'dsfdsfas', NULL, NULL),
(2, 'dffsadv', 'asdvsadvs', 'dvsdvsagfhjmkhjmh', 'sdsdvasdvsadv', 'sdvsdvsdvsdvsdv', 'jhmhjmhjmhjmhjmhjmhjmhjmhjmhjmhmj', NULL, NULL),
(3, 'qwef', 'fgvdfbg', 'sdfgadfg', 'dfasds', 'dfbgfgnfgnfgnfgn', 'fghnmghmg', NULL, NULL),
(4, 'wefsa', 'erthrt', 'tuity', 'wewerwerew', 'rthrethrthrthrthrth', 'uiyuiyui', NULL, NULL),
(5, 'nvbnm', 'xcvbxcvb', 'zxcvzxc', 'vbnmbvnmbvnm', 'xcvbcxvb', 'zxczxczxczxczxczxc', NULL, NULL),
(6, 'eg', 'ergergergerg', 'gergergergerge', 'erger', 'ergergergergergergerg', 'rgergergegregregr', 1, NULL),
(7, 'ololol', 'iuiuitul', 'tuiluiltu', 'lolgltulotlotlo', 'tuiluilutiltui', 'tuiltuiltuiltuiltuiltuilt', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ac_blog`
--

CREATE TABLE `ac_blog` (
  `id` int(11) NOT NULL,
  `page_name_am` varchar(255) DEFAULT NULL,
  `page_name_ru` varchar(255) DEFAULT NULL,
  `page_name_en` varchar(255) DEFAULT NULL,
  `page_title_am` varchar(255) DEFAULT NULL,
  `page_title_ru` varchar(255) DEFAULT NULL,
  `page_title_en` varchar(255) DEFAULT NULL,
  `page_keywords_am` text DEFAULT NULL,
  `page_keywords_ru` text DEFAULT NULL,
  `page_keywords_en` text DEFAULT NULL,
  `page_content_am` longtext DEFAULT NULL,
  `page_content_ru` longtext DEFAULT NULL,
  `page_content_en` longtext DEFAULT NULL,
  `order_num` int(11) DEFAULT 0,
  `create_date` timestamp NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT 1,
  `url` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `ac_blog`
--

INSERT INTO `ac_blog` (`id`, `page_name_am`, `page_name_ru`, `page_name_en`, `page_title_am`, `page_title_ru`, `page_title_en`, `page_keywords_am`, `page_keywords_ru`, `page_keywords_en`, `page_content_am`, `page_content_ru`, `page_content_en`, `order_num`, `create_date`, `status`, `url`, `img`) VALUES
(5, 'Grid of different categories of accounting lessons', 'Grid of different categories of accounting lessons', 'Grid of different categories of accounting lessons', 'Grid of different categories of accounting lessons', 'Grid of different categories of accounting lessons', 'Grid of different categories of accounting lessons', 'Grid of different categories of accounting lessons', 'Grid of different categories of accounting lessons', 'Grid of different categories of accounting lessons', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras facilisis faucibus odio arcu duis dui, adipiscing facilisis. Urna, donec turpis egestas volutpat. Quisque nec non amet quis. Varius tellus justo odio parturient mauris curabitur lorem in. Pulvinar sit ultrices mi ut eleifend luctus ut. Id sed faucibus bibendum augue id cras purus. At eget euismod cursus non. Molestie dignissim sed volutpat feugiat vel enim eu turpis imperdiet.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras facilisis faucibus odio arcu duis dui, adipiscing facilisis. Urna, donec turpis egestas volutpat. Quisque nec non amet quis. Varius tellus justo odio parturient mauris curabitur lorem in. Pulvinar sit ultrices mi ut eleifend luctus ut. Id sed faucibus bibendum augue id cras purus</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras facilisis faucibus odio arcu duis dui, adipiscing facilisis. Urna, donec turpis egestas volutpat. Quisque nec non amet quis. Varius tellus justo odio parturient mauris curabitur lorem in. Pulvinar sit ultrices mi ut eleifend luctus ut. Id sed faucibus bibendum augue id cras purus. At eget euismod cursus non. Molestie dignissim sed volutpat feugiat vel enim eu turpis imperdiet.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras facilisis faucibus odio arcu duis dui, adipiscing facilisis. Urna, donec turpis egestas volutpat. Quisque nec non amet quis. Varius tellus justo odio parturient mauris curabitur lorem in. Pulvinar sit ultrices mi ut eleifend luctus ut. Id sed faucibus bibendum augue id cras purus</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras facilisis faucibus odio arcu duis dui, adipiscing facilisis. Urna, donec turpis egestas volutpat. Quisque nec non amet quis. Varius tellus justo odio parturient mauris curabitur lorem in. Pulvinar sit ultrices mi ut eleifend luctus ut. Id sed faucibus bibendum augue id cras purus. At eget euismod cursus non. Molestie dignissim sed volutpat feugiat vel enim eu turpis imperdiet.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras facilisis faucibus odio arcu duis dui, adipiscing facilisis. Urna, donec turpis egestas volutpat. Quisque nec non amet quis. Varius tellus justo odio parturient mauris curabitur lorem in. Pulvinar sit ultrices mi ut eleifend luctus ut. Id sed faucibus bibendum augue id cras purus</p>\r\n', 0, '2024-06-05 06:40:05', 1, 'grid_of_different_categories_of_accounting_lessons', 'web/uploads/1719301032blogimg.png'),
(6, 'adfva', 'nrturyu,yu,', 'werewrtew', 'erhrwthnrwtnrwt', 'tyui,.uio.uilury', 'ewrtewrtewrtw', 'rtnrtnrtnrtnrw', ',uio,ryu,y', 'trewrtewtrew', '<p>tnrwtnrwtnrwtnrwtnrwtnrtnr</p>\r\n', '<p>uryuryu,ryu,ry</p>\r\n', '<p>rtewrtewtrewt</p>\r\n', 0, '2024-06-07 07:47:57', 1, 'erhrwthnrwtnrwt', 'web/uploads/1719301677blogimg.png'),
(7, 'asdcv', 'zxcvzxcvzcv', 'nghnmdgnhmdgm', 'ZXcZXczxc', 'zxvczxcvzxcvzx', 'ghmghmg', 'ZXczxczxczxv', 'vzxcvzxcvzxcvz', 'hmdghmdghmdg', '<p>zzvxcvzxcvzxcv</p>\r\n', '<p>vzxvczxcvzxcv</p>\r\n', '<p>hmdghmdgmh</p>\r\n', 0, '2024-06-07 21:00:00', 1, 'zxczxczxc', 'web/uploads/1719301733blogimg.png'),
(8, 'gnfnfgn', 'ngfgnfsgnfsgnsgn', 'k,jrkryukryuk', 'fgnsfgnfs', 'fsgnfgnfsgnfsgn', 'yukyuktyuk', 'gnsfgnfsgnfs', 'fgnfgnfgnfgnfgnfs', 'ktyuktyukytuk', '<p>gnsfgnfsgnfsgn</p>\r\n', '<p>gnfsgnfsgnfsgnfsgnfsgn</p>\r\n', '<p>yuktyukykyk</p>\r\n', 0, '2024-06-09 11:29:22', 1, 'fgnsfgnfs', 'web/uploads/1719301780blogimg.png'),
(9, 'Grid of different categories of accounting lessons', 'Grid of different categories of accounting lessons', 'Grid of different categories of accounting lessons', 'Grid of different categories of accounting lessons', 'Grid of different categories of accounting lessons', 'Grid of different categories of accounting lessons', 'Grid of different categories of accounting lessons', 'Grid of different categories of accounting lessons', 'Grid of different categories of accounting lessons', '<p>Grid of different categories of accounting lessonsGrid of different categories of accounting lessonsGrid of different categories of accounting lessons</p>\r\n', '<p>Grid of different categories of accounting lessonsGrid of different categories of accounting lessonsGrid of different categories of accounting lessonsGrid of different categories of accounting lessons</p>\r\n', '<p>Grid of different categories of accounting lessonsGrid of different categories of accounting lessonsGrid of different categories of accounting lessons</p>\r\n', 0, '2024-06-09 21:00:00', 1, 'grid_of_different_categories_of_accounting_lessons', 'web/uploads/1719325656blogimg.png'),
(10, 'Grid of different categories of accounting lessons', 'Grid of different categories of accounting lessons', 'Grid of different categories of accounting lessons', 'Grid of different categories of accounting lessons', 'Grid of different categories of accounting lessons', 'Grid of different categories of accounting lessons', 'Grid of different categories of accounting lessons', 'Grid of different categories of accounting lessons', 'Grid of different categories of accounting lessons', '<p>Grid of different categories of accounting lessonsGrid of different categories of accounting lessonsGrid of different categories of accounting lessons</p>\r\n', '<p>Grid of different categories of accounting lessonsGrid of different categories of accounting lessonsGrid of different categories of accounting lessons</p>\r\n', '<p>Grid of different categories of accounting lessonsGrid of different categories of accounting lessonsGrid of different categories of accounting lessons</p>\r\n', 0, '2024-06-11 11:29:46', 1, 'grid_of_different_categories_of_accounting_lessons', 'web/uploads/1719325680blogimg.png'),
(11, 'Grid of different categories of accounting lessons', 'Grid of different categories of accounting lessons', 'Grid of different categories of accounting lessons', 'Grid of different categories of accounting lessons', 'Grid of different categories of accounting lessons', 'Grid of different categories of accounting lessons', 'Grid of different categories of accounting lessons', 'Grid of different categories of accounting lessons', 'Grid of different categories of accounting lessons', '<p>Grid of different categories of accounting lessonsGrid of different categories of accounting lessonsGrid of different categories of accounting lessons</p>\r\n', '<p>Grid of different categories of accounting lessonsGrid of different categories of accounting lessonsGrid of different categories of accounting lessons</p>\r\n', '<p>Grid of different categories of accounting lessonsGrid of different categories of accounting lessonsGrid of different categories of accounting lessons</p>\r\n', 0, '2024-06-11 21:00:00', 1, 'grid_of_different_categories_of_accounting_lessons', 'web/uploads/1719325703blogimg.png'),
(12, 'Grid of different categories of accounting lessons', 'Grid of different categories of accounting lessons', 'Grid of different categories of accounting lessons', 'Grid of different categories of accounting lessons', 'Grid of different categories of accounting lessons', 'Grid of different categories of accounting lessons', 'Grid of different categories of accounting lessons', 'Grid of different categories of accounting lessons', 'Grid of different categories of accounting lessons', '<p>Grid of different categories of accounting lessonsGrid of different categories of accounting lessonsGrid of different categories of accounting lessons</p>\r\n', '<p>Grid of different categories of accounting lessonsGrid of different categories of accounting lessonsGrid of different categories of accounting lessons</p>\r\n', '<p>Grid of different categories of accounting lessonsGrid of different categories of accounting lessonsGrid of different categories of accounting lessons</p>\r\n', 0, '2024-06-13 11:31:16', 1, 'grid_of_different_categories_of_accounting_lessons', 'web/uploads/1719325728blogimg.png'),
(13, 'Grid of different categories of accounting lessons', 'Grid of different categories of accounting lessons', 'Grid of different categories of accounting lessons', 'Grid of different categories of accounting lessons', 'Grid of different categories of accounting lessons', 'Grid of different categories of accounting lessons', 'Grid of different categories of accounting lessons', 'Grid of different categories of accounting lessons', 'Grid of different categories of accounting lessons', '<p>Grid of different categories of accounting lessonsGrid of different categories of accounting lessonsGrid of different categories of accounting lessons</p>\r\n', '<p>Grid of different categories of accounting lessonsGrid of different categories of accounting lessonsGrid of different categories of accounting lessons</p>\r\n', '<p>Grid of different categories of accounting lessonsGrid of different categories of accounting lessonsGrid of different categories of accounting lessons</p>\r\n', 0, '2024-06-14 14:29:23', 1, 'grid_of_different_categories_of_accounting_lessons', 'web/uploads/1719325763blogimg.png');

-- --------------------------------------------------------

--
-- Table structure for table `ac_callback`
--

CREATE TABLE `ac_callback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `course` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT '1',
  `create_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ac_callback`
--

INSERT INTO `ac_callback` (`id`, `name`, `email`, `phone`, `course`, `status`, `create_date`) VALUES
(1, 'Harut', 'ds@mail.ru', '94808454', 2, '1', '2024-07-04 11:59:26');

-- --------------------------------------------------------

--
-- Table structure for table `ac_langs`
--

CREATE TABLE `ac_langs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `url` varchar(5) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `ac_lessons`
--

CREATE TABLE `ac_lessons` (
  `id` int(11) NOT NULL,
  `lesson_name_am` varchar(255) DEFAULT NULL,
  `lesson_name_ru` varchar(255) DEFAULT NULL,
  `lesson_name_en` varchar(255) DEFAULT NULL,
  `lesson_title_am` varchar(255) DEFAULT NULL,
  `lesson_title_ru` varchar(255) DEFAULT NULL,
  `lesson_title_en` varchar(255) DEFAULT NULL,
  `lesson_keywords_am` text DEFAULT NULL,
  `lesson_keywords_ru` text DEFAULT NULL,
  `lesson_keywords_en` text DEFAULT NULL,
  `lesson_content_am` longtext DEFAULT NULL,
  `lesson_content_ru` longtext DEFAULT NULL,
  `lesson_content_en` longtext DEFAULT NULL,
  `order_num` int(11) DEFAULT 0,
  `create_date` timestamp NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT 1,
  `url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `ac_lessons`
--

INSERT INTO `ac_lessons` (`id`, `lesson_name_am`, `lesson_name_ru`, `lesson_name_en`, `lesson_title_am`, `lesson_title_ru`, `lesson_title_en`, `lesson_keywords_am`, `lesson_keywords_ru`, `lesson_keywords_en`, `lesson_content_am`, `lesson_content_ru`, `lesson_content_en`, `order_num`, `create_date`, `status`, `url`) VALUES
(1, 'ԱՇԽԱՏԱՎԱՐՁ ԵՎ ԿԱԴՐԵՐԻ ԿԱՌԱՎԱՐՈՒՄ', 'Kadreri karavarum', 'Kadreri karavarum', 'ԱՇԽԱՏԱՎԱՐՁ ԵՎ ԿԱԴՐԵՐԻ ԿԱՌԱՎԱՐՈՒՄ', 'Kadreri karavarum', 'Kadreri karavarum', 'ԱՇԽԱՏԱՎԱՐՁ ԵՎ ԿԱԴՐԵՐԻ ԿԱՌԱՎԱՐՈՒՄ', 'Kadreri karavarum', 'Kadreri karavarum', 'The \"1C։ Payroll and personnel management\" course, offered by iNFOEXPERT Academy, will teach you the following in the\r\n. Personnel management and payroll,\r\n. Control of personnel policy,\r\n. Calculation of wages and other equivalent payments,\r\n. Planning, organization, and control of personnel work,\r\n. Performance statistics\r\n\r\nNumber of courses: 9 + 1 exam /2 days a week/․\r\nA Certificate is given at the end in both Armenian and English.\r\n\r\nParticipating in the course at the iNFOEXPERT Academy has the following benefits:\r\n. Free access to 1C base for the duration of studies and for one more month after graduation (access from any point and computer),\r\n. Job offers to the best by the iNFOEXPERT company,\r\n. 50% discount for course participation for students who choose accounting and/or finance,\r\n. 20% discount on the price of the program if you buy it.', '<p>Kadreri karavarumKadreri karavarumKadreri karavarumKadreri karavarumKadreri karavarumKadreri karavarumKadreri karavarumKadreri karavarumKadreri karavarumKadreri karavarumKadreri karavarumKadreri karavarumKadreri karavarumKadreri karavarum</p>\r\n', '<p>Kadreri karavarumKadreri karavarumKadreri karavarumKadreri karavarumKadreri karavarumKadreri karavarumKadreri karavarumKadreri karavarumKadreri karavarumKadreri karavarumKadreri karavarumKadreri karavarum</p>\r\n', 0, '2024-06-26 12:30:56', 1, NULL),
(2, 'ԵՎ ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ ՍԿՍՆԱԿՆԵՐԻ ՀԱՄԱՐ', 'ԵՎ ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ ՍԿՍՆԱԿՆԵՐԻ ՀԱՄԱՐ', 'ԵՎ ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ ՍԿՍՆԱԿՆԵՐԻ ՀԱՄԱՐ', 'ԵՎ ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ ՍԿՍՆԱԿՆԵՐԻ ՀԱՄԱՐ', 'ԵՎ ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ ՍԿՍՆԱԿՆԵՐԻ ՀԱՄԱՐ', 'ԵՎ ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ ՍԿՍՆԱԿՆԵՐԻ ՀԱՄԱՐ', 'ԵՎ ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ ՍԿՍՆԱԿՆԵՐԻ ՀԱՄԱՐ', 'ԵՎ ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ ՍԿՍՆԱԿՆԵՐԻ ՀԱՄԱՐ', 'ԵՎ ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ ՍԿՍՆԱԿՆԵՐԻ ՀԱՄԱՐ', '<p>ԵՎ ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ ՍԿՍՆԱԿՆԵՐԻ ՀԱՄԱՐԵՎ ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ ՍԿՍՆԱԿՆԵՐԻ ՀԱՄԱՐԵՎ ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ ՍԿՍՆԱԿՆԵՐԻ ՀԱՄԱՐԵՎ ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ ՍԿՍՆԱԿՆԵՐԻ ՀԱՄԱՐԵՎ ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ ՍԿՍՆԱԿՆԵՐԻ ՀԱՄԱՐ</p>\r\n', '<p>ԵՎ ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ ՍԿՍՆԱԿՆԵՐԻ ՀԱՄԱՐԵՎ ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ ՍԿՍՆԱԿՆԵՐԻ ՀԱՄԱՐԵՎ ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ ՍԿՍՆԱԿՆԵՐԻ ՀԱՄԱՐԵՎ ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ ՍԿՍՆԱԿՆԵՐԻ ՀԱՄԱՐԵՎ ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ ՍԿՍՆԱԿՆԵՐԻ ՀԱՄԱՐ ԱՇԽԱՏԱՎԱՐՁ ԵՎ ԿԱԴՐԵՐԻ ԿԱՌԱՎԱՐՈՒՄ</p>\r\n', '<p>ԵՎ ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ ՍԿՍՆԱԿՆԵՐԻ ՀԱՄԱՐԵՎ ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ ՍԿՍՆԱԿՆԵՐԻ ՀԱՄԱՐԵՎ ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ ՍԿՍՆԱԿՆԵՐԻ ՀԱՄԱՐԵՎ ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ ՍԿՍՆԱԿՆԵՐԻ ՀԱՄԱՐԵՎ ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ ՍԿՍՆԱԿՆԵՐԻ ՀԱՄԱՐԵՎ ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ ՍԿՍՆԱԿՆԵՐԻ ՀԱՄԱՐԵՎ ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ ՍԿՍՆԱԿՆԵՐԻ ՀԱՄԱՐ</p>\r\n', 0, '2024-06-26 12:40:00', 1, NULL),
(3, 'ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ 8.3', 'ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ 8.3', 'ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ 8.3', 'ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ 8.3', 'ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ 8.3', 'ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ 8.3', 'ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ 8.3', 'ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ 8.3', 'ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ 8.3', '<p>ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ 8.3ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ 8.3ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ 8.3ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ 8.3ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ 8.3ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ 8.3ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ 8.3ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ 8.3ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ 8.3</p>\r\n', '<p>ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ 8.3ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ 8.3ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ 8.3ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ 8.3ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ 8.3ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ 8.3ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ 8.3ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ 8.3ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ 8.3ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ 8.3</p>\r\n', '<p>ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ 8.3ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ 8.3ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ 8.3ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ 8.3ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ 8.3ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ 8.3ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ 8.3ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ 8.3ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ 8.3ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ 8.3</p>\r\n', 0, '2024-06-26 12:41:26', 1, NULL),
(4, 'ԱՌԵՎՏՐԻ ԿԱՌԱՎԱՐՈՒՄ. ՄԱՐՔԵԹԻՆԳ, ՎԱՃԱՌՔ, BITRIX / CRM', 'ԱՌԵՎՏՐԻ ԿԱՌԱՎԱՐՈՒՄ. ՄԱՐՔԵԹԻՆԳ, ՎԱՃԱՌՔ, BITRIX / CRM', 'ԱՌԵՎՏՐԻ ԿԱՌԱՎԱՐՈՒՄ. ՄԱՐՔԵԹԻՆԳ, ՎԱՃԱՌՔ, BITRIX / CRM', 'ԱՌԵՎՏՐԻ ԿԱՌԱՎԱՐՈՒՄ. ՄԱՐՔԵԹԻՆԳ, ՎԱՃԱՌՔ, BITRIX / CRM', 'ԱՌԵՎՏՐԻ ԿԱՌԱՎԱՐՈՒՄ. ՄԱՐՔԵԹԻՆԳ, ՎԱՃԱՌՔ, BITRIX / CRM', 'ԱՌԵՎՏՐԻ ԿԱՌԱՎԱՐՈՒՄ. ՄԱՐՔԵԹԻՆԳ, ՎԱՃԱՌՔ, BITRIX / CRM', 'ԱՌԵՎՏՐԻ ԿԱՌԱՎԱՐՈՒՄ. ՄԱՐՔԵԹԻՆԳ, ՎԱՃԱՌՔ, BITRIX / CRM', 'ԱՌԵՎՏՐԻ ԿԱՌԱՎԱՐՈՒՄ. ՄԱՐՔԵԹԻՆԳ, ՎԱՃԱՌՔ, BITRIX / CRM', 'ԱՌԵՎՏՐԻ ԿԱՌԱՎԱՐՈՒՄ. ՄԱՐՔԵԹԻՆԳ, ՎԱՃԱՌՔ, BITRIX / CRM', '<p>ԱՌԵՎՏՐԻ ԿԱՌԱՎԱՐՈՒՄ. ՄԱՐՔԵԹԻՆԳ, ՎԱՃԱՌՔ, BITRIX / CRMԱՌԵՎՏՐԻ ԿԱՌԱՎԱՐՈՒՄ. ՄԱՐՔԵԹԻՆԳ, ՎԱՃԱՌՔ, BITRIX / CRMԱՌԵՎՏՐԻ ԿԱՌԱՎԱՐՈՒՄ. ՄԱՐՔԵԹԻՆԳ, ՎԱՃԱՌՔ, BITRIX / CRMԱՌԵՎՏՐԻ ԿԱՌԱՎԱՐՈՒՄ. ՄԱՐՔԵԹԻՆԳ, ՎԱՃԱՌՔ, BITRIX / CRMԱՌԵՎՏՐԻ ԿԱՌԱՎԱՐՈՒՄ. ՄԱՐՔԵԹԻՆԳ, ՎԱՃԱՌՔ, BITRIX / CRMԱՌԵՎՏՐԻ ԿԱՌԱՎԱՐՈՒՄ. ՄԱՐՔԵԹԻՆԳ, ՎԱՃԱՌՔ, BITRIX / CRM</p>\r\n', '<p>ԱՌԵՎՏՐԻ ԿԱՌԱՎԱՐՈՒՄ. ՄԱՐՔԵԹԻՆԳ, ՎԱՃԱՌՔ, BITRIX / CRMԱՌԵՎՏՐԻ ԿԱՌԱՎԱՐՈՒՄ. ՄԱՐՔԵԹԻՆԳ, ՎԱՃԱՌՔ, BITRIX / CRMԱՌԵՎՏՐԻ ԿԱՌԱՎԱՐՈՒՄ. ՄԱՐՔԵԹԻՆԳ, ՎԱՃԱՌՔ, BITRIX / CRMԱՌԵՎՏՐԻ ԿԱՌԱՎԱՐՈՒՄ. ՄԱՐՔԵԹԻՆԳ, ՎԱՃԱՌՔ, BITRIX / CRMԱՌԵՎՏՐԻ ԿԱՌԱՎԱՐՈՒՄ. ՄԱՐՔԵԹԻՆԳ, ՎԱՃԱՌՔ, BITRIX / CRMԱՌԵՎՏՐԻ ԿԱՌԱՎԱՐՈՒՄ. ՄԱՐՔԵԹԻՆԳ, ՎԱՃԱՌՔ, BITRIX / CRM</p>\r\n', '<p>ԱՌԵՎՏՐԻ ԿԱՌԱՎԱՐՈՒՄ. ՄԱՐՔԵԹԻՆԳ, ՎԱՃԱՌՔ, BITRIX / CRMԱՌԵՎՏՐԻ ԿԱՌԱՎԱՐՈՒՄ. ՄԱՐՔԵԹԻՆԳ, ՎԱՃԱՌՔ, BITRIX / CRMԱՌԵՎՏՐԻ ԿԱՌԱՎԱՐՈՒՄ. ՄԱՐՔԵԹԻՆԳ, ՎԱՃԱՌՔ, BITRIX / CRMԱՌԵՎՏՐԻ ԿԱՌԱՎԱՐՈՒՄ. ՄԱՐՔԵԹԻՆԳ, ՎԱՃԱՌՔ, BITRIX / CRMԱՌԵՎՏՐԻ ԿԱՌԱՎԱՐՈՒՄ. ՄԱՐՔԵԹԻՆԳ, ՎԱՃԱՌՔ, BITRIX / CRM</p>\r\n', 0, '2024-06-26 12:42:41', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ac_my_card`
--

CREATE TABLE `ac_my_card` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `lessons_id` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT '1',
  `create_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ac_my_lessons`
--

CREATE TABLE `ac_my_lessons` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `lessons_id` int(11) DEFAULT NULL,
  `complete_percent` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT '1',
  `create_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ac_my_lessons`
--

INSERT INTO `ac_my_lessons` (`id`, `user_id`, `lessons_id`, `complete_percent`, `status`, `create_date`) VALUES
(1, 93, 1, 56, '1', '2024-07-09 08:03:35'),
(2, 93, 2, 34, '1', '2024-07-09 08:03:35'),
(3, 93, 3, 64, '1', '2024-07-09 15:48:45');

-- --------------------------------------------------------

--
-- Table structure for table `ac_notifications`
--

CREATE TABLE `ac_notifications` (
  `id` int(11) NOT NULL,
  `message` varchar(255) CHARACTER SET utf8mb3 DEFAULT NULL,
  `message_en` varchar(255) DEFAULT NULL,
  `message_ru` varchar(255) DEFAULT NULL,
  `sender_id` int(11) NOT NULL,
  `recipient_id` int(11) NOT NULL,
  `type` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ac_partners`
--

CREATE TABLE `ac_partners` (
  `id` int(11) NOT NULL,
  `img_black` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `name_am` varchar(255) DEFAULT NULL,
  `name_ru` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `order_num` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `ac_partners`
--

INSERT INTO `ac_partners` (`id`, `img_black`, `img`, `name_am`, `name_ru`, `name_en`, `status`, `order_num`) VALUES
(1, 'web/uploads/1719217097partner3.png', 'web/uploads/1719217097partner3_hov.png', 'Arev construction', 'Arev construction', 'Arev construction', NULL, NULL),
(2, 'web/uploads/1719217293partner1.png', 'web/uploads/1719217293partner1_hov.png', 'art lar', 'art lar', 'art lar', NULL, NULL),
(3, 'web/uploads/1719217344partner2.png', 'web/uploads/1719217344partner2_hov.png', 'bookinist', 'bookinist', 'bookinist', NULL, NULL),
(4, 'web/uploads/1719217375partner4.png', 'web/uploads/1719217375partner4_hov.png', 'Noy', 'Noy', 'Noy', NULL, NULL),
(5, 'web/uploads/1719217524partner5.png', 'web/uploads/1719217524partner5_hov.png', 'Arbran', 'Arbran', 'Arbran', NULL, NULL),
(6, 'web/uploads/1719217571partner6.png', 'web/uploads/1719217571partner6_hov.png', 'Artsakhenergo', 'Artsakhenergo', 'Artsakhenergo', NULL, NULL),
(7, 'web/uploads/1719217634partner7.png', 'web/uploads/1719217634partner7_hov.png', 'Ararat inkassatsia', 'Ararat inkassatsia', 'Ararat inkassatsia', NULL, NULL),
(8, 'web/uploads/1719217684partner8.png', 'web/uploads/1719217684partner8_hov.png', 'Aramyanc mc', 'Aramyanc mc', 'Aramyanc mc', NULL, NULL),
(9, 'web/uploads/1719217767partner9.png', 'web/uploads/1719217767partner9_hov.png', 'The Alexander', 'The Alexander', 'The Alexander', NULL, NULL),
(10, 'web/uploads/1719217794partner10.png', 'web/uploads/1719217794partner10_hov.png', 'Derjava', 'Derjava', 'Derjava', NULL, NULL),
(11, 'web/uploads/1719217834partner11.png', 'web/uploads/1719217834partner11_hov.png', 'Gigafarm', 'Gigafarm', 'Gigafarm', NULL, NULL),
(12, 'web/uploads/1719217868partner12.png', 'web/uploads/1719217868partner12_hov.png', 'Hapak', 'Hapak', 'Hapak', NULL, NULL),
(13, 'web/uploads/1719217893partner13.png', 'web/uploads/1719217893partner13_hov.png', 'HEC', 'HEC', 'HEC', NULL, NULL),
(14, 'web/uploads/1719217941partner14.png', 'web/uploads/1719217941partner14_hov.png', 'HKE', 'HKE', 'HKE', NULL, NULL),
(15, 'web/uploads/1719217999partner15.png', 'web/uploads/1719217999partner15_hov.png', 'logo', 'logo', 'logo', NULL, NULL),
(16, 'web/uploads/1719218027partner16.png', 'web/uploads/1719218027partner16_hov.png', 'Karas', 'Karas', 'Karas', NULL, NULL),
(17, 'web/uploads/1719218083partner17.png', 'web/uploads/1719218083partner17_hov.png', 'KSC', 'KSC', 'KSC', NULL, NULL),
(18, 'web/uploads/1719218129partner18.png', 'web/uploads/1719218129partner18_hov.png', 'LIA-K GROUP', 'LIA-K GROUP', 'LIA-K GROUP', NULL, NULL),
(19, 'web/uploads/1719218216partner19.png', 'web/uploads/1719218216partner19_hov.png', 'Little bridge NGO', 'Little bridge NGO', 'Little bridge NGO', NULL, NULL),
(20, 'web/uploads/1719218253partner20.png', 'web/uploads/1719218253partner20_hov.png', 'AVERS', 'AVERS', 'AVERS', NULL, NULL),
(21, 'web/uploads/1719218307partner21.png', 'web/uploads/1719218307partner21_hov.png', 'Marianna', 'Marianna', 'Marianna', NULL, NULL),
(22, 'web/uploads/1719218349partner22.png', 'web/uploads/1719218349partner22_hov.png', 'Norq mc', 'Norq mc', 'Norq mc', NULL, NULL),
(23, 'web/uploads/1719218390partner23.png', 'web/uploads/1719218390partner23_hov.png', 'PHP partners', 'PHP partners', 'PHP partners', NULL, NULL),
(24, 'web/uploads/1719218468partner24.png', 'web/uploads/1719218468partner24_hov.png', 'Sinopsys', 'Sinopsys', 'Sinopsys', NULL, NULL),
(25, 'web/uploads/1719218496partner25.png', 'web/uploads/1719218496partner25_hov.png', 'Tashir', 'Tashir', 'Tashir', NULL, NULL),
(26, 'web/uploads/1719218520partner26.png', 'web/uploads/1719218520partner26_hov.png', 'Narsan', 'Narsan', 'Narsan', NULL, NULL),
(27, 'web/uploads/1719218558partner27.png', 'web/uploads/1719218558partner27_hov.png', 'MIX paints', 'MIX paints', 'MIX paints', NULL, NULL),
(28, 'web/uploads/1719218628partner28.png', 'web/uploads/1719218628partner28_hov.png', 'MULTI GROUP', 'MULTI GROUP', 'MULTI GROUP', NULL, NULL),
(29, 'web/uploads/1719218661partner29.png', 'web/uploads/1719218661partner29_hov.png', 'sportmaster', 'sportmaster', 'sportmaster', NULL, NULL),
(30, 'web/uploads/1719218722partner30.png', 'web/uploads/1719218722partner30_hov.png', 'Sevani haci gorcaran', 'Sevani haci gorcaran', 'Sevani haci gorcaran', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ac_question_answers`
--

CREATE TABLE `ac_question_answers` (
  `id` int(11) NOT NULL,
  `name_ru` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `name_am` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `order_num` int(11) NOT NULL DEFAULT 0,
  `is_true` int(11) NOT NULL DEFAULT 0,
  `quest_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `ac_question_answers`
--

INSERT INTO `ac_question_answers` (`id`, `name_ru`, `name_en`, `name_am`, `status`, `order_num`, `is_true`, `quest_id`) VALUES
(1, '22 %', '22 %', '22 %', 1, 0, 0, 1),
(2, '21 %', '21 %', '21 %', 1, 0, 0, 1),
(3, '20 %', '20 %', '20 % ', 1, 0, 1, 1),
(4, 'Не взимается', 'No charge', 'Չի գանձվում', 1, 0, 0, 1),
(5, '20 рабочих дней', '20 working days', '20 աշխատանքային օր', 1, 0, 0, 2),
(6, '21 рабочий день', '21 working days', '21 աշխատանքային օր', 1, 0, 0, 2),
(7, '24 рабочих дня ', ' 24 working days ', '24 աշխատանքային օր ', 1, 0, 1, 2),
(8, '25 рабочих дней', '25 working days', '25 աշխատանքային օր ', 1, 0, 0, 2),
(9, 'Не выплачивается', 'Not paid', 'Չի վճարվում', 1, 0, 0, 3),
(10, 'За 3 дня до начала отпуска, а если это невозможно по причинам, не зависящим от работодателя, то в течение 3 рабочих дней после срока, указанного в заявлении работника', '3 days before the start of the vacation, and if this is not possible for reasons beyond the control of the employer, then within 3 working days after the period specified in the employee\'s application', 'Արձակուրդը սկսելու օրվանից 3 օր առաջ, իսկ եթե դա հնարավոր չէ գործատուից անկախ պատճառներով, ապա՝ աշխատողի դիմումում նշված ժամկետից հետո՝ 3 աշխատանքային օրվա ընթացքում ', 1, 0, 1, 3),
(11, '3 дня со дня начала отпуска, а если это невозможно по причинам, не зависящим от работодателя, то по истечении срока, указанного в заявлении работника, в течение 3 рабочих дней', '3 days after the date of starting the vacation, and if this is not possible for reasons beyond the control of the employer, then after the period specified in the employee\'s application, within 3 working days', 'Արձակուրդը սկսելու օրվանից 3 օր հետո, իսկ եթե դա հնարավոր չէ գործատուից անկախ պատճառներով, ապա՝ աշխատողի դիմումում նշված ժամկետից հետո՝ 3 աշխատանքային օրվա ընթացքում', 1, 0, 0, 3),
(12, 'За 30 дней до даты начала отпуска, а если это невозможно по причинам, не зависящим от работодателя, то в течение 3 рабочих дней со дня, указанного в заявлении работника', '30 days before the date of starting the vacation, and if this is not possible for reasons beyond the control of the employer, then within 3 working days after the date specified in the employee\'s application', 'Արձակուրդը սկսելու օրվանից 30 օր առաջ, իսկ եթե դա հնարավոր չէ գործատուից անկախ պատճառներով, ապա՝ աշխատողի դիմումում նշված ժամկետից հետո՝ 3 աշխատանքային օրվա ընթացքում', 1, 0, 0, 3),
(13, 'Для сотрудников, работающих неполный рабочий день', 'For part-time employees', 'Ոչ լրիվ աշխատաժամանակով աշխատող աշխատակիցների դեպքում', 1, 0, 0, 4),
(14, 'В случае сотрудников, работающих неполный рабочий день', 'In the case of part-time employees', 'Կրճատ աշխատաժամանակով աշխատող աշխատակիցների դեպքում', 1, 0, 0, 4),
(15, 'Всегда сокращенно', 'Always abbreviated', 'Միշտ կրճատվում է', 1, 0, 0, 4),
(16, 'В случае совместителей и совместителей ', 'In the case of part-time and part-time employees ', 'Ոչ լրիվ և կրճատ աշխատաժամանակով աշխատող աշխատակիցների դեպքում', 1, 0, 1, 4),
(17, 'Не менее 15 процентов от почасовой ставки', 'Not less than 15 percent of the hourly rate', 'Ոչ պակաս, քան ժամային դրույքաչափի 15 տոկոսի չափով', 1, 0, 0, 5),
(18, 'Ставка удваивается', 'The rate doubles', 'Դրույքաչափը կրկնապատկվում է', 1, 0, 0, 5),
(19, 'Ставка не оплачена', 'The rate is not paid', 'Դրույքաչափը չի վարձատրվում', 1, 0, 0, 5),
(20, 'Не менее 30 процентов почасовой ставки ', 'Not less than 30 percent of the hourly rate ', 'Ոչ պակաս, քան ժամային դրույքաչափի 30 տոկոսի չափով ', 1, 0, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `ac_question_list`
--

CREATE TABLE `ac_question_list` (
  `id` int(11) NOT NULL,
  `name_ru` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `name_am` varchar(255) DEFAULT NULL,
  `date_create` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1,
  `order_num` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `ac_question_list`
--

INSERT INTO `ac_question_list` (`id`, `name_ru`, `name_en`, `name_am`, `date_create`, `status`, `order_num`) VALUES
(1, '1С։ ЗАРПЛАТА И УПРАВЛЕНИЕ ПЕРСОНАЛОМ', '1C: PAYROLL AND PERSONNEL MANAGEMENT', '1С: ԱՇԽԱՏԱՎԱՐՁ ԵՎ ԿԱԴՐԵՐԻ ԿԱՌԱՎԱՐՈւՄ', '2024-06-24 16:21:07', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ac_question_quests`
--

CREATE TABLE `ac_question_quests` (
  `id` int(11) NOT NULL,
  `name_ru` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `name_am` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `order_num` int(11) NOT NULL DEFAULT 0,
  `question_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `ac_question_quests`
--

INSERT INTO `ac_question_quests` (`id`, `name_ru`, `name_en`, `name_am`, `status`, `order_num`, `question_id`) VALUES
(1, 'Какова ставка подоходного налога?', 'What is the rate of income tax?', 'Ի՞նչ տոկոսադրույքով է հարկվում եկամտային հարկը', 1, 0, 1),
(2, 'Каков минимальный ежегодный отпуск при шестидневной рабочей неделе?', 'What is the minimum annual leave for a six-day work week?', 'Որքա՞ն է ամենամյա նվազագույն արձակուրդի տևողությունը վեցօրյա աշխատանքային շաբաթվա դեպքում', 1, 0, 1),
(3, 'Когда выплачиваются отпускные?', 'When is vacation pay paid?', 'Ի՞նչ ժամկետներում է վճարվում արձակուրդայինը', 1, 0, 1),
(4, 'В каком случае рабочее время в день, предшествующий празднику, не сокращается?', 'In which case are the working hours of the day preceding the holiday not reduced?', 'Ո՞ր դեպքում տոնական օրվան նախորդող օրվա աշխատաժամանակի տևողությունը չի կրճատվում', 1, 0, 1),
(5, 'Каков минимальный процент повышения заработной платы работника за работу в ночное время?', 'What is the minimum percentage of an employee\'s salary increase for nighttime work?', 'Նվազագույնը քանի՞ տոկոսով է ավելանում աշխատակցի աշխատավարձը գիշերային ժամանակի ընթացքում կատարված աշխատանքի համար', 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ac_reviews`
--

CREATE TABLE `ac_reviews` (
  `id` int(11) NOT NULL,
  `text_am` text DEFAULT NULL,
  `text_ru` text DEFAULT NULL,
  `text_en` text DEFAULT NULL,
  `from_am` varchar(200) DEFAULT NULL,
  `from_ru` varchar(200) DEFAULT NULL,
  `from_en` varchar(200) DEFAULT NULL,
  `platform` int(11) DEFAULT NULL COMMENT 'fb/in',
  `stars` int(11) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1,
  `order_num` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `ac_reviews`
--

INSERT INTO `ac_reviews` (`id`, `text_am`, `text_ru`, `text_en`, `from_am`, `from_ru`, `from_en`, `platform`, `stars`, `url`, `create_date`, `status`, `order_num`) VALUES
(1, 'Երբ իմացա iNFOEXPERT ACADEMY-ի և այն դասընթացների մասին, որոնք կազմակերպվում են այնտեղ, մեկ վայրկյան անգամ չվարանեցի գրանցվելու հարցում։ Մասնակցել եմ  «1C։Հաշվապահություն 8․3» դասընթացին և վստահաբար կարող եմ ասել, որ ճիշտ ընտրություն էր։ Դասընթացն ավարտելուց հետո ունեցել եմ առաջխաղացում իմ աշխատավայրում: Շնորհակալ եմ iNFOEXPERT ACADEMY-ին և պրոֆեսիոնալ անձնակազմին և իհարկե թրեյներին, ով շատ բարեհամբույր և պատրաստակամ պատասխանում էր բոլոր հարցերին, ինչն ընձեռել է նյութն առավել խորությամբ յուրացնելու հնարավորրություն։', 'Когда я узнал об iNFOEXPERT ACADEMY и курсах, которые там проводятся, я ни секунды не раздумывал, чтобы зарегистрироваться. Я участвовал в курсе “1С: Бухгалтерия 8:3” и могу с уверенностью сказать, что это был правильный выбор. После окончания курса у меня было повышение по службе. Я благодарен iNFOEXPERT ACADEMY и профессиональному персоналу, и конечно тренеру, который был очень любезен и готов ответить на все вопросы, что дало возможность глубже усвоить материал.', 'When I learned about iNFOEXPERT ACADEMY and the courses that are organized there, I did not hesitate for a second to register. I participated in the ', 'Անահիտ Սարգսյան', 'Анаит Саргсян', 'Anahit Sargsyan', 1, 5, 'https://google.com', '2024-06-24 10:15:38', 1, NULL),
(2, 'Ակադեմիայի ընտրության հարցում շատ գոհ եմ։ Ես դասընթացի ընթացքում աշխատել եմ լրիվ դրույքով և դասընթացների ճկուն գրաֆիկի, ինչպես նաև անցկացվող տարբեր ձևաչափերի առկայության շնորհիվ կարողացել եմ ակտիվորեն մասնակցել և յուրացնել նյութն ամբողջությամբ։ Միջավայրը շատ ջերմ է, ինչն ավելի է մոտիվացնում և նույնիսկ աշխատանքից հետո կարողանում ես թոթափել օրվա ծանրաբեռնվածությունը և նոր էներգիայով լի մասնակցում դասընթացին։ Շնորհակալ եմ Ձեզ iNFOEXPERT ACADEMY-ի թիմ, Դուք լավագույնն եք:', 'Я очень довольна выбором академии. Во время курса я работала полный рабочий день, и благодаря гибкому графику курсов, а также наличию разных форматов, мне удался активно участвовать и полностью усвоить материал. Обстановка очень теплая, что мотивирует еще больше, и даже после работы вы можете сбросить с себя дневную нагрузку и принять участие в курсе, полном новой энергии. Спасибо, команда iNFOEXPERT ACADEMY; вы самые лучшие!', 'I am very satisfied with the choice of the academy. During the course, I worked full-time, and thanks to the flexible schedule of the courses as well as the availability of different formats, I was able to actively participate and master the material completely. The environment is very warm, which motivates even more, and even after work, you can shake off the day\'s workload and participate in a course full of new energy. Thank you, iNFOEXPERT ACADEMY team; you are the best!', 'Արմեն Արամյան', 'Армен Арамян', 'Armen Aramyan', 1, 5, NULL, '2024-06-24 10:17:11', 1, NULL),
(3, 'Մասնագիտությամբ հաշվապահ եմ, ունեմ որոշակի փորձառություն 1C ծրագրով աշխատելու, սակայն զգում էի, որ ժամանակն էր մասնագիտական գիտելիքների թարմացման և գործըկերուհուս խորհրդով ընտրեցի iNFOEXPERT ACADEMY-ի կողմից իրականացվող դասընթացը։  Ինձ համար միշտ կարևոր է նոր գիտելիքների ստացումը և ոլորտի զարգացումներին համահունչ քայլելը, ինչն ապահովված է ակադեմիայում։ Ինձ հատկապես դուր է եկել այն հանգամանքը, որ նույն խնդրին անդրադառնում էինք տարբեր ոլորտների տեսանկյուններից, ինչն օգնում էր դիտարկել այլ տեսակետեր ևս և հարցերին ու խնդիրներին տալ համապարփակ լուծումներ։ Շատ շնորհակալ եմ նման մոտեցման համար։ ', 'По профессии я бухгалтер. Имею некоторый опыт работы с программой 1С, но почувствовал, что пришло время обновить свои профессиональные знания, и по совету коллеги выбрал курс iNFOEXPERT ACADEMY. Для меня всегда важно получать новые знания и быть в курсе событий в области, что и обеспечивается в академии. Особенно мне понравилось то, что мы подошли к одной и той же проблеме с точки зрения разных областей, что помогло рассмотреть другие точки зрения и дать комплексные решения вопросов и проблем. Спасибо большое за такой подход.', 'I am an accountant by profession. I have some experience working with the 1C program, but I felt that it was time to update my professional knowledge, and on the advice of my colleague, I chose the course conducted by iNFOEXPERT ACADEMY. It is always important for me to get new knowledge and keep up with the developments in the field, which is ensured in the academy. I especially liked the fact that we approached the same problem from the perspectives of different fields, which helped to consider other points of view and provide comprehensive solutions to questions and problems. Thank you very much for such an approach.', 'Լիլիթ Հովհաննիսյան', 'Лилит Ованнисян', 'Lilit Hovhannisyan', 1, 5, NULL, '2024-06-24 10:20:06', 1, NULL),
(4, 'Մասնակցել եմ «1C: Առևտրի կառավարում» դասընթացին: Դասընթացի մեթոդաբանությունն այնպիսին է, որ յուրաքնչուր նոր գործիքներ և գործառույթներ էինք ուսումնասիրում, իսկ հարց ու պատասխանները օգնում էին նյութի դյուրին ընկալմանը։ Շնորհակալ եմ նման խորությամբ սովորեցնելու և ծրագիրը հմուտ օգտագործելու հնարավորություն ստեղծելու համար։ ', 'Я прошла курс “1С: Управление торговлей”. Мы изучали новые инструменты и функции каждый день благодаря методологии курса, которая также облегчила нам понимание темы через вопросы и ответы. Я ценю ваши подробные инструкции и возможность эффективно использовать программу.', 'I took part in the course \"1C: Trade Management\". We learned new tools and functions every day thanks to the course\'s methodology, which also made it easy for us to understand the topic through the questions and answers. I appreciate your in-depth instruction and the chance you gave me to use the program effectively.', 'Կարինե Մելքոնյան', 'Карине Мелконян', 'Karine Melqonyan', 1, 5, NULL, '2024-06-24 10:23:26', 1, NULL),
(5, 'iNFOEXPERT-ի համբավի և փորձառության մասին վաղուց էի տեղյակ, բացի այդ նաև ընկերներիցս խորհուրդ էին տվել հենց iNFOEXPERT ACADEMY-ում մասնակցել դասընթացի, եթե իսկապես ցանականում եմ սովորել որակյալ և փորձառու մասնագետներից։ Ինձ համար կարևոր է եղել նաև տեսական և գործնական գիտելիքներ ստանալու հնարավորությունը, ինչն այստեղ իրականանալի է։ Շնորհակալություն իմ թրեյներին և ակադեմիայյի ողջ անձնակազմին։', 'О репутации и опыте iNFOEXPERT я знаю давно. Кроме того, мои друзья также посоветовали мне пройти курс в iNFOEXPERT ACADEMY, если я действительно хочу учиться у квалифицированных и опытных специалистов. Для меня также была важна возможность получить теоретические и практические знания, что здесь возможно. Спасибо моему тренеру и всему персоналу академии.', 'I have known about the reputation and experience of iNFOEXPERT for a long time. Besides, my friends also advised me to take part in a course at iNFOEXPERT ACADEMY if I really wanted to learn from qualified and experienced professionals. The opportunity to get theoretical and practical knowledge was also important for me, which is possible here. Thanks to my trainer and all the staff of the academy.', 'Աշոտ Ադամյան', 'Ашот Адамян', 'Ashot Adamyan', 1, 5, NULL, '2024-06-24 10:25:18', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ac_settings`
--

CREATE TABLE `ac_settings` (
  `id` int(11) NOT NULL,
  `delivery_price_yerevan` int(11) DEFAULT NULL,
  `delivery_price_regions` int(11) DEFAULT NULL,
  `delivery_fast_price_yerevan` int(11) DEFAULT NULL,
  `delivery_fast_price_regions` int(11) DEFAULT NULL,
  `delivery_free_start_price_yerevan` int(11) DEFAULT NULL,
  `delivery_free_start_price_regions` int(11) DEFAULT NULL,
  `is_free_delivery` int(11) NOT NULL DEFAULT 1,
  `admin_email` varchar(255) DEFAULT NULL,
  `site_logo` varchar(255) DEFAULT NULL,
  `sitemap` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `is_brand` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `ac_texts`
--

CREATE TABLE `ac_texts` (
  `id` int(11) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `text_am` varchar(255) DEFAULT NULL,
  `text_ru` varchar(255) DEFAULT NULL,
  `text_en` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `ac_view_history`
--

CREATE TABLE `ac_view_history` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `ac_wishlist`
--

CREATE TABLE `ac_wishlist` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL COMMENT '1_lessons, 2_blogs',
  `active` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT '1',
  `create_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ac_wishlist`
--

INSERT INTO `ac_wishlist` (`id`, `user_id`, `product_id`, `type`, `active`, `status`, `create_date`) VALUES
(9, 93, 1, 1, 1, '1', '2024-07-10 10:21:24'),
(10, 93, 2, 1, 1, '1', '2024-07-10 10:21:26');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1714992306),
('m240506_104430_add_page_id_column_to_texts_table', 1714992307),
('m240606_063320_added_info_to_textsTable', 1717685299),
('m240611_065139_quizetranslate', 1718089627),
('m240611_065437_translate_security_page', 1718112275),
('m240611_072414_quize_page_id', 1718090683),
('m240611_073415_quize', 1718091497),
('m240611_073934_trade_management', 1718094247),
('m240611_085036_result', 1718100353),
('m240611_133228_edite_quize_name', 1718112950),
('m240613_103440_courseTitleEdit', 1718275248),
('m240613_120429_create_news_table_for_translate', 1718282905),
('m240613_125134_create_news_translate_for_errors_page', 1718284008),
('m240618_073247_change_translate_welcome', 1718699940),
('m240618_083527_change_translate_about', 1718699941),
('m240619_104505_change_translate_about', 1718793996),
('m240702_121246_add_translate_blog', 1719929624),
('m240702_133341_add_columns_for_user', 1719929790),
('m240703_124001_change_translate_security', 1720017981),
('m240703_135250_sign_up_translate', 1720020085),
('m240703_152022_change_translate_row', 1720020085),
('m240704_102002_create_table_ac_callback', 1720089588),
('m240704_143237_create_table_ac_wishlist', 1720427042),
('m240708_072136_security_translate', 1720507499),
('m240709_064401_create_table_my_courses', 1720508322),
('m240709_083948_create_table_my_card', 1720514494);

-- --------------------------------------------------------

--
-- Table structure for table `texts`
--

CREATE TABLE `texts` (
  `id` int(11) NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_am` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_ru` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `texts`
--

INSERT INTO `texts` (`id`, `slug`, `text_am`, `text_ru`, `text_en`, `page_id`) VALUES
(1, '__about__', 'IEA-Ի ՄԱՍԻՆ', 'О IEA', 'ABOUT IEA', NULL),
(2, '__courses__', 'ԴԱՍԸՆԹԱՑՆԵՐ', 'КУРСЫ', 'COURSES', NULL),
(3, '__faq__', 'ՀՏՀ', 'ЧЗВ', 'FAQ', NULL),
(4, '__testimonials__', 'ԿԱՐԾԻՔՆԵՐ', 'ОТЗЫВЫ', 'TESTIMONIALS', NULL),
(5, '__blog__', 'ԲԼՈԳ', 'БЛОГ', 'BLOG', NULL),
(6, '__contact__', 'ԿԱՊ', 'КОНТАКТЫ', 'CONTACT US', NULL),
(7, '__applynow__', 'ԴԻՄԵԼ ՀԻՄԱ', 'ПОДАТЬ ЗАЯВКУ', 'APPLY NOW', NULL),
(8, '__callback__', 'ՀԵՏԱԴԱՐՁ ԶԱՆԳ', 'ПЕРЕЗВОНИТЬ', 'GET A CALL BACK', NULL),
(9, 'footerAbout', 'IEA -ի մասին', 'О IEA', 'About IEA', NULL),
(10, 'footerMethodOur', 'Մեթոդաբանություն', 'Методология', 'Methodology', NULL),
(11, 'footerContact', 'Կապ', 'Контакты', 'Contact Us', NULL),
(12, 'footerTestimonials', 'Կարծիքներ', 'Отзывы', 'Testimonials', NULL),
(13, 'footerFaq', 'ՀՏՀ', 'ЧЗВ', 'FAQ', NULL),
(14, 'footerCourses', 'Դասընթացներ', 'Курсы', 'Courses', NULL),
(15, 'footerBlog', 'Բլոգ', 'Блог', 'Blog', NULL),
(16, 'footerRecQuize', 'Առաջարկությունների վիկտորինա', 'Рекомендательная Викторина', 'Recommendative Quize', NULL),
(17, 'footerTextConn', 'ՄՆԱԼ ԿԱՊԻ ՄԵՋ', 'ОСТАВАТЬСЯ НА СВЯЗИ', 'LET`S STAY CONNECTED', NULL),
(18, 'footerEmailCon', 'Ձեր էլ. հասցեն', 'Ваш эл. почта', 'Your Email', NULL),
(19, 'footerEmailBtn', 'Միացնել', 'Соединять', 'Connect', NULL),
(20, 'footerQuize', 'QUIZE', 'ВИКТОРИНА', 'QUIZE', NULL),
(21, 'footerInputName', 'Անուն/Ազգանուն', 'Имя/Фамилия', 'Name/Surname', NULL),
(22, 'footerInputPhone', 'Հեռախոսահամար', 'Номер телефона', 'Phone number', NULL),
(23, 'footerInputEmail', 'Էլ. հասցե', 'Эл. почта', 'Email', NULL),
(24, 'footerInputBtn', 'Շարունակել', 'Продолжать', 'Continue', NULL),
(25, 'footerCopy', 'Բոլոր իրավունքները պաշտպանված են', 'Все права защищены', 'Copyright', NULL),
(26, 'footerPolicy', 'Գաղտնիության քաղաքականություն', 'Политика конфиденциальности', 'Privacy policy', NULL),
(27, 'headerProfile', 'Իմ էջը', 'Мой профиль', 'My profile', NULL),
(28, 'headerSecurity', 'Անվտանգություն', 'Безопасность', 'Account security', NULL),
(29, 'headerLogout', 'Դուրս գալ', 'Выход', 'Sign out', NULL),
(30, 'whoWe', 'Ով ենք մենք', 'Кто мы', 'Who we are', NULL),
(31, 'headerAlumni', 'Շրջանավարտներ', 'Выпускники', 'Alumni', NULL),
(32, 'headerCourseAccounting', '1C և  հաշվապահություն սկսնակների համար', '1С и бухгалтерия для начинающих.', '1C and Accounting for begginers', NULL),
(33, 'headerCoursePayrol', '1С: Աշխատավարձ և կադրերի կառավարում', '1С: Зарплата и управление персоналом', '1C: Payroll and personel management', NULL),
(34, 'headerAccounting', '1C: Հաշվապահություն 8.3', '1С:Бухгалтерия 8.3', '1C: Accounting 8.3', NULL),
(35, 'headerMarketing', 'Առևտրի կառավարում. մարքեթինգ, վաճառք, BITRIX / CRM', 'Управление торговлей: маркетинг, продажи, BITRIX/CRM', 'Trade management: marketing, sales, BITRIX / CRM', NULL),
(36, 'search', 'Որոնել...', 'Поиск...', 'Type to Search...', NULL),
(37, 'tabletMethodology', 'Մեթոդաբանություն', 'Методология', 'Methodology', NULL),
(38, 'tabletRecQuize', 'Առաջարկությունների վիկտորինա', 'Рекомендательная викторина', 'Recommendative quize', NULL),
(39, 'tabletContact', 'Կապ', 'Контакты', 'Contact us', NULL),
(40, 'tabletMyCourse', 'Դասընթացներ', 'Курсы', 'My courses', NULL),
(41, 'tabletAllCourses', 'Բոլոր դասընթացներ', 'Все курсы', 'All courses', NULL),
(42, 'tabletProfile', 'Պրոֆիլ', 'Профиль', 'Profile', NULL),
(43, 'tabletWishlist', 'Հավանածներ', 'Список желаний', 'Wishlist', NULL),
(44, 'tabletachievement', 'Ձեռքբերումներ', 'Достижения', 'Achievements', NULL),
(45, 'tabletCard', 'Զամբյուղ', 'Моя карта', 'My card', NULL),
(46, 'tabletEdit', 'Խմբագրել պրոֆիլը', 'Редактировать профиль', 'Edit profile', NULL),
(47, 'tabletPayment', 'Վճարման մեթոդներ', 'Способы оплаты', 'Payment methods', NULL),
(48, 'tabletMenu', 'Մենյու', 'Меню', 'Menu', NULL),
(49, 'tabletWelcome', 'Բարի վերադարձ', 'Добро пожаловать', 'Welcome back', NULL),
(50, 'tabletHello', 'Ողջույն', 'Привет', 'Hi', NULL),
(51, 'sectionOneMarket', '27 ՏԱՐԻ ՇՈՒԿԱՅՈՒՄ', '27 ЛЕТ НА РЫНКЕ', '27 YEARS IN MARKET', 1),
(52, 'sectionOneBoundaries', 'ԿՐԹՈՒԹՅՈՒՆ ԱՌԱՆՑ ՍԱՀՄԱՆՆԵՐԻ', 'ОБРАЗОВАНИЕ БЕЗ ГРАНИЦ', 'EDUCATION WITHOUT BOUNDARIES', 1),
(53, 'sectionTwoPartner', 'գործընկեր', 'партнер', 'partner', 1),
(54, 'sectionTwoProduct', 'ապրանքներ', 'продукты', 'products', 1),
(55, 'sectionTwoProgram', 'ծրագրեր', 'программы', 'programms', 1),
(56, 'sectionThreeCourses', 'ԴԱՍԸՆԹԱՑՆԵՐ', 'КУРСЫ', 'COURSES', 1),
(57, 'sectionThreeLearn', 'Սովորեք մեզ հետ', 'Учитесь с нами', 'Learn with us', 1),
(58, 'sectionThreePerson', 'ԿԱԴՐԵՐԻ', 'КАДРОВЫЙ', 'PERSONNEL', 1),
(59, 'sectionThreeManag', 'ԿԱՌԱՎԱՐՈՒՄ', 'МЕНЕДЖМЕНТ', 'MANAGEMENT', 1),
(60, 'sectionThreeBtn', 'ԲՈԼՈՐ ԴԱՍԵՐԸ', 'ВСЕ УРОКИ', 'SEE ALL LESSONS', 1),
(61, 'sectionFourTitle', 'ՀԱՃԱԽ ՏՐՎՈՂ ՀԱՐՑԵՐ', 'ЧАСТО ЗАДАВАЕМЫЙ ВОПРОС', 'FREQUENTLY ASKED QUESTION', 1),
(62, 'sectionFourLooking', 'Փնտրու՞մ եք պատասխաններ', 'Ищете ответы?', 'Looking for an answers?', 1),
(63, 'sectionFiveTitle', 'ԳՈՐԾԸՆԿԵՐՆԵՐ', 'ПАРТНЕРЫ', 'PARTNERS', 1),
(64, 'sectionSixTitle', 'ԿԱՐԾԻՔՆԵՐ', 'ОТЗЫВЫ', 'TESTIMONIALS', NULL),
(65, 'sectionSixText', 'Մեր հաճախորդները սիրում են այն, ինչ մենք անում ենք', 'Наши клиенты любят то, что мы делаем', 'Our customers love what we do', 1),
(66, 'sectionSevenTitle', 'ԲԼՈԳ', 'БЛОГ', 'BLOG', 1),
(67, 'sectionSevenText', 'Բացահայտիր ավելին', 'Открывать  интересное', 'Let\'s discover something interesting', 1),
(68, 'sectionSevenBtn', 'Բոլոր հոդվածները', 'Все Статьи', 'All Articles', 1),
(69, 'sectionEightStill', 'ԴԵՌ ՈՒՆԵ՞Ք ՀԱՐՑԵՐ։', 'ЕЩЕ ЕСТЬ ВОПРОСЫ?', 'STILL HAVE QUESTIONS?', 1),
(70, 'sectionEightName', 'Անուն', 'Имя', 'Name', 1),
(71, 'sectionEightEmail', 'Էլ. հասցե', 'Адрес эл. почты', 'Email Adress', 1),
(72, 'sectionEightMessage', 'Ձեր հարցը', 'Ваше сообщение', 'Your Message', 1),
(73, 'sectionEightBtn', 'Ուղարկել', 'Отправить', 'Send message', 1),
(74, 'aboutTitle', 'Ո՞վ ենք մենք', 'Кто мы?', 'Who are we?', 2),
(75, 'aboutFirstText', 'iNFOEXPERT ACADEMY-ին ստեղծվել է iNFOEXPERT ընկերության կողմից, որը բիզնես ավտոմատացման ոլորտում առաջամարտիկ է և ունի  27 տարվա փորձ։<br>\niNFOEXPERT ընկերությունը հանդիսանում է «1C» և «Bitrix24» ընկերությունների պաշտոնական ներկայացուցիչը և գործընկերը ՀՀ-ում։<br>\nՀաշվի առնելով շուկայի պահանջարկը, մշտապես կադրային խնդիրները, կուտակված ահռելի փորձը և գիտելիքների բազան, որոշում կայացվեց ստեղծել iNFOEXPERT ACADEMY-ին, որտեղ կանցկացվեն հատուկ մասնագիտացված դասընթացներ՝ «1C»  և «Bitrix24» ծրագրերի հենքով։<br>\nԱկադեմիայում ստեղծված է այնպիսի կրթական միջավայր, որտեղ Դուք հնարավորություն ունեք ոլորտի պրոֆեսիոնալներից սովորել, փորձի փոխանակում կատարել և դառնալ լավագույններից մեկը, ով կլինի պահանջարկված։<br>\nԱկադեմիայի լավագույն սաներին տրվում է բացառիկ հնարավորություն դառնալու iNFOEXPERT ընկերության աշխատակիցը։', 'iNFOEXPERT ACADEMY основана компанией iNFOEXPERT, пионером в области автоматизации бизнеса с 27-летним опытом.<br>\nКомпания iNFOEXPERT является официальным представителем и партнером компаний «1С» и «Bitrix24» в РА.<br>\nУчитывая спрос рынка, текущие кадровые проблемы, а также наработанную огромную базу знаний и опыта, было принято решение о создании iNFOEXPERT ACADEMY, где будут проводиться специализированные курсы на базе программ «1С» и «Bitrix24».<br>\nВ Академии создана такая образовательная среда, где у тебя есть возможность учиться у профессионалов своего дела, обмениваться опытом и стать одним из лучших, кто будет востребован.<br>\nЛучшим студентам академии предоставляется эксклюзивная возможность работать с компанией iNFOEXPERT.', 'iNFOEXPERT ACADEMY was founded by iNFOEXPERT, a pioneer in the field of business automation with 27 years of experience.<br>\niNFOEXPERT company is the official representative and partner of \"1C\" and \"Bitrix24\" companies in RA.<br>\nIt was decided to establish the iNFOEXPERT ACADEMY, where specialized courses based on the \"1C\" and \"Bitrix24\" programs will be held, in response to market demand, ongoing staffing issues, and the huge expertise and knowledge base that have been acquired.<br>\nThe Academy has created such an educational environment where you have the opportunity to learn from professionals in the field, exchange experience, and become one of the best who will be in demand.<br>\nAn exclusive opportunity to work with the iNFOEXPERT company is provided to the academy top students.', 2),
(76, 'aboutSecondText', 'iNFOEXPERT ACADEMY-ն նորարարական և առաջատար կրթական համալիր է, որը միտված է կրթությունը հասցնելու նոր մակարդակի:<br>\nԱկադեմիայում ուսումնական գործընթացի կազմակերպումը հիմնված է անհատական մոտեցման սկզբունքի վրա։<br>\nԱկադեմիայում ուսանելու <b>առավելություններն են՝</b><br>\n<b>• դասընթացներ՝</b> արդի կրթության որակի պահանջներին համահունչ,<br>\n<b>• դասընթացավարներ՝</b> բացառապես ոլորտի բարձրակարգ մասնագետներ,<br>\n<b>• գիտելիք՝</b> այստեղ Դուք ձեռք կբերեք կիրառական գիտելիքներ, պրակտիկ գործիքներ/լուծումներ և հմտություններ,<br>\n<b>• կապեր՝</b> նոր կապեր ձեռք բերելու և ոլորտի լավագույնների հետ շփվելու հնարավորություններ,<br>\n<b>• հավաստագիր՝</b> դասընթացների ավարտին տրվում է երկլեզու (հայերեն և անգլերեն) հավաստագիր։<br>\nԱկադեմիայում  ուսանելու <b>արդյունքում՝</b><br>\n<b>•</b> կձևավորվի վերլուծական մտածողություն,<br>\n<b>•</b> ձեռք կբերեք ժամանակի պահանջներին համահունչ գիտելիքներ և հմտություններ,<br>\n<b>•</b> կդառնաք ոլորտի առաջատարը և նորարարը։\niNFOEXPERT ACADEMY-ի <b>արժեքներն են՝</b><br>\n<b>•</b> պրոֆեսիոնալիզմ, <br>\n<b>•</b> պատասխանատվություն,<br>\n<b>•</b> նորարարություն,<br>\n<b>•</b> ճկունություն,<br> \n<b>•</b> շարունակական զարգացում,<br>\n<b>•</b> հոգատարություն։', 'iNFOEXPERT ACADEMY - инновационный и ведущий образовательный комплекс, нацеленный на вывод образования на новый уровень.<br>\nКонцепция индивидуального подхода лежит в основе построения образовательной программы академии.<br>\nОбучение в Академии дает следующие <b>преимущества:</b><br>\n<b>• курсы,</b> соответствующие современным стандартам качества образования,<br>\n<b>• тренеры,</b> которые являются только высококвалифицированными специалистами в своей области,<br>\n<b>• знание,</b> здесь вы приобретете прикладные знания, практические инструменты/решения и навыки,<br>\n<b>• нетворкинг,</b> возможности построить отношения и пообщаться с лидерами отрасли,<br>\n<b>• сертификат,</b> по окончании курсов выдается двуязычный (английский и армянский) сертификат.\nПо <b>результатам</b> обучения в Академии:<br>\n<b>•</b> вы разовьете свое аналитическое мышление,<br>\n<b>•</b> вы получите знания и навыки, необходимые для современного рабочего места, и<br>\n<b>•</b> вы станете лидером отрасли и новатором.\n<b>Ценности</b> iNFOEXPERT ACADEMY:<br>\n<b>•</b> профессионализм,<br>\n<b>•</b> ответственность,<br>\n<b>•</b> инновации,<br>\n<b>•</b> гибкость,<br>\n<b>•</b> постоянное развитие,<br>\n<b>•</b> забота.<br>', 'iNFOEXPERT ACADEMY is an innovative and leading educational complex aimed at bringing education to a new level.<br>\nThe individual approach concept serves as the foundation for how the academy structures its educational program.<br>\nStudying at the Academy provides the following <b>advantages:</b><br>\n<b>• courses</b> that meet current standards for educational quality,<br>\n<b>• trainers</b> who are only highly skilled experts in the field,<br>\n<b>• knowledge</b> here you will acquire applied knowledge, practical tools/solutions and skills,<br>\n<b>• networking</b> chances to build relationships and communicate with industry leaders,\n<b>certificate</b> at the conclusion of the courses, a bilingual (English and Armenian) certificate is awarded.<br>\nAs <b>a result</b> of studying at the Academy:<br>\n\n<b>•</b> you will develop your analytical thinking,<br>\n<b>•</b> you will gain the knowledge and skills necessary for the modern workplace, and<br>\n<b>•</b> you will become an industry leader and innovator.<br>\n\nThe <b>values</b> of iNFOEXPERT ACADEMY are:<br>\n<b>•</b> professionalism,<br>\n<b>•</b> responsibility,<br>\n<b>•</b> innovation,<br>\n<b>•</b> flexibility,<br>\n<b>•</b> continuous development,<br>\n<b>•</b> care.', 2),
(77, 'aboutUnrestricted', 'Անսահմանափակ', 'Неограниченный', 'Unrestricted', 2),
(78, 'aboutSolution', 'Ավտոմատացված լուծումներ', 'Автоматизированные решения', 'Automated solutions', 2),
(79, 'aboutTeam', 'Պրոֆեսիոնալ թիմ', 'Профессиональная команда', 'Professional Team', 2),
(80, 'aboutMarket', '27 տարի շուկայում', '27 лет на рынке', '27 years on the market', 2),
(81, 'aboutLong', 'Երկարաժամկետ', 'Долгосрочный', 'Long-term', 2),
(82, 'aboutCollaboration', 'համագործակցություն', 'сотрудничество', 'collaboration', 2),
(83, 'aboutIndividual', 'Անհատական ​​մոտեցում', 'Индивидуальный подход', 'Individual approach', 2),
(84, 'aboutEach', 'յուրաքանչյուր գործընկերոջը', 'каждому партнеру', 'to each partner', 2),
(85, 'alumniTitle', 'Շրջանավարտներ', 'Выпускники', 'Alumni', 3),
(86, 'alumniText', 'ցԴՍՈՎԳԱՍԴ ԳՖԵԵԳՌՅՕՔԵ ԻՕՔԵՅԳԻՕԵՅՌԳՕԵՌՅ', 'АДЖСДГ ЕЕРГЕРГфегр рхртхтрхд рхртгрт рхйртхр вйртхйрфхрйу ртхе хв', 'Lorem ipsum dolor sit amet consectetur. Pellentesque enim risus mauris tellus vitae amet. Venenatis massa netus viverra turpis tortor arcu.', 3),
(87, 'profileTitle', 'Իմ էջը', 'Мой профиль', 'My Profile', 4),
(88, 'userMoreInfo', 'Տեղեկացրեք մեզ ավելին ձեր մասին', 'Дайте нам знать о вас больше', 'Let us know more about you', 4),
(89, 'profileTitle', 'Իմ էջը', 'Мой профиль', 'My Profile', 5),
(90, 'usercreateName', 'Անուն/Ազգանուն', 'Имя/Фамилия', 'Name/Surname', 5),
(91, 'usercreatePhone', 'Հեռախոս', 'Телефон', 'Phone', 5),
(92, 'usercreateMail', 'Փոստ', 'Почта', 'Mail', 5),
(93, 'usercreateLinkdin', 'Linkedin պրոֆիլի հղում', 'Ссылка на профиль в LinkedIn', 'Linkedin profile link', 5),
(94, 'usercreateCv', 'CV', 'резюме', 'CV', 5),
(95, 'usercreateAttach', 'Կցել ֆայլը', 'Прикрепить файл', 'Attach file', 5),
(96, 'usercreatePhoto', 'Ավելացնել լուսանկար', 'Добавить фото', 'Add photo', 5),
(97, 'usercreateSave', 'ՊԱՀՊԱՆԵԼ', 'СОХРАНИТЬ', 'SAVE', 5),
(98, 'achievementsTitle', 'Իմ էջը', 'Мой профиль', 'My Profile', 6),
(99, 'editProfileTitle', 'Իմ էջը', 'Мой профиль', 'My Profile', 7),
(100, 'editUserName', 'Անուն/Ազգանուն', 'Имя/Фамилия', 'Name/Surname', 7),
(101, 'editUserPhone', 'Հեռախոս', 'Телефон', 'Phone', 7),
(102, 'editUserMail', 'Փոստ', 'Почта', 'Mail', 7),
(103, 'editUserLinkdin', 'Linkedin պրոֆիլի հղում', 'Ссылка на профиль в LinkedIn', 'Linkedin profile link', 7),
(104, 'editUserCv', 'CV', 'резюме', 'CV', 7),
(105, 'editUserAttach', 'Կցել ֆայլը', 'Прикрепить файл', 'Attach file', 7),
(106, 'editUserEditPhoto', 'խմբագրել լուսանկարը', 'редактировать фотографию', 'Edit photo', 7),
(107, 'editUserBtn', 'ՊԱՀՊԱՆԵԼ', 'СОХРАНИТЬ', 'SAVE', 7),
(108, 'mycoursesTitle', 'Իմ էջը', 'Мой профиль', 'My Profile', 8),
(109, 'mainCourseTitleFirst', 'Լավագույն', 'Наши', 'Our', 9),
(110, 'mainCourseTitleSecond', 'դասընթացները', 'лучшие курсы', 'Best Courses', 9),
(111, 'mainCourseTitleThird', 'լավագույնների', 'от', 'by', 9),
(112, 'mainCourseTitleFour', 'կողմից', 'лучших', 'the best', 9),
(113, 'mainCourseTutors', 'Ծանոթացեք մեր ուսուցիչներին', 'Познакомьтесь с нашими преподавателями', 'Meet Our Tutors', 9),
(114, 'wishlistTitle', 'Իմ էջը', 'Мой профиль', 'My Profile', 10),
(115, 'myCardTitle', 'Իմ էջը', 'Мой профиль', 'My Profile', 11),
(116, 'myCardBtn', 'Գնել հիմա', 'Купить', 'Buy now', 11),
(117, 'myCardRemove', 'Ջնջել', 'Удалить', 'Remove', 11),
(118, 'myCardMove', 'Տեղափոխել ցուցակներ', 'Переместить в списке', 'move to wishlist', 11),
(119, 'myCardTotal', 'Ընդամենը', 'Общий', 'Total', 11),
(120, 'myCardCheckout', 'Վճարում', 'Оплата', 'Checkout', 11),
(121, 'checkoutTitle', 'Վճարում', 'Оплата', 'Checkout', 12),
(122, 'checkoutCancel', 'Չեղարկել', 'Отмена', 'Cancel', 12),
(123, 'checkoutPaymentMethod', 'Վճարման եղանակ', 'Способ оплаты', 'Payment method', 12),
(124, 'checkoutCredit', 'Վարկային/դեբետային քարտ', 'Кредитная / дебетовая карта', 'Credit/Debit Card', 12),
(125, 'checkoutInputName', 'Քարտի անուն', 'Имя на карте', 'Name on card', 12),
(126, 'checkoutInputNumber', 'Քարտի համար', 'Номер карты', 'Card number', 12),
(127, 'checkoutInputExpire', 'Ժամկետի ավարտ', 'Срока действия', 'Expiry date', 12),
(128, 'checkoutCheckbox', 'Ապահով պահեք այս քարտը իմ հետագա գնումների համար', 'Надежно сохраните эту карту для моей последующей покупки.', 'Securely save this card for my later purchase', 12),
(129, 'checkoutOther', 'Այլ', 'Другой', 'Other', 12),
(130, 'checkoutOrderDetalis', 'Պատվերի տվյալներ', 'Информация для заказа', 'Order Details', 12),
(131, 'checkoutSummary', 'Գումար', 'Оплата', 'Summary', 12),
(132, 'checkoutTermsText', 'Ավարտելով ձեր գնումը՝ դուք համաձայնում եք', 'Совершая покупку, вы соглашаетесь с этими', 'By completing your purchase you agree to these ', 12),
(133, 'checkoutTerms', 'ծառայության այս պայմաններին', 'условиями обслуживания.', 'terms of service', 12),
(134, 'checkoutCompleteBtn', 'Ավարտել վճարումը', 'Завершить заказа', 'Complete Checkout', 12),
(135, 'congratulationTitle', 'Շնորհավորում եմ', 'Поздравляем!', 'Congratulation!', 13),
(136, 'congratulationText', 'Դասընթացն արդեն ձերն է', 'Курс уже ваш', 'The course is already yours', 13),
(137, 'congratulationBtn', 'ՍԿՍԵԼ ՍՈՎՈՐԵԼ', 'НАЧАТЬ ОБУЧАТЬСЯ', 'START LEARNING', 13),
(138, 'applyNowTitle', 'Դասընթացի նախագրանցման հայտ', 'Заявка регистрацию на курс', 'Course pre-registration application', 14),
(139, 'applyNowText', 'Խնդրում ենք լրացնել հայտը, որը ձեզ հնարավորություն կտա առաջինը տեղեկանալ և մասնակցել Ակադեմիայի կողմից առաջարկվող դաընթացներին:', 'Пожалуйста, заполните заявку, которая позволит вам первыми получать информацию и участвовать в курсах, предлагаемых Академией.', 'Please fill out the application, which will enable you to be the first to be informed and participate in the courses offered by the Academy.', 14),
(140, 'applyNowInputName', 'Անուն/Ազգանուն', 'Имя/Фамилия', 'Name/Surname', 14),
(141, 'applyNowInputEmail', 'Էլ.հասցե', 'Эл. почта', 'Email', 14),
(142, 'applyNowCourses', 'Դասընթացներ', 'Курсы', 'Courses', 14),
(143, 'applyNowCourseOne', '1C: Հաշվապահություն 8.3', '1С: Бухгалтерский учет 8.3', '1C: Accounting 8.3', 14),
(144, 'applyNowCourseTwo', '1C: Աշխատավարձ և կադրերի կառավարում', '1С: Плата и управление персоналом', '1C: Payroll and personnel management', 14),
(145, 'applyNowCourseThree', '1C: Առևտրի կառավարում', '1С: Управление торговлей', '1C: Trade management', 14),
(146, 'applyNowCourseFour', 'Մարքեթինգ, վաճառք և CRM/Bitrix24', 'Маркетинг, Продажи и CRM/Битрикс24', 'Marketing, Sales and CRM/Bitrix24', 14),
(147, 'applyNowTypeCourse', 'Դասընթացի տեսակ', 'Тип курса', 'Course Type', 14),
(148, 'applyNowIndividual', 'Անհատական', 'Индивидуальный', 'Individual', 14),
(149, 'applyNowGroup', 'Խմբային', 'Группа', 'Group', 14),
(150, 'applyNowCorporate', 'Կորպորատիվ', 'Корпоративный', 'Corporate', 14),
(151, 'applyNowOnline', 'Օնլայն', 'В сети', 'Online', 14),
(152, 'applyNowOffline', 'Օֆֆլայն', 'Не в сети', 'Offline', 14),
(153, 'applyNowPhone', 'Հեռախոսահամար', 'Номер телефона', 'Phone number', 14),
(154, 'applyNowBtn', 'Ուղարկել հայտ', 'Отправить запрос', 'Submit', 14),
(155, 'applicationTitle', 'Դասընթացի նախագրանցման հայտ', 'Заявка регистрацию на курс', 'Course pre-registration application', 15),
(156, 'applicationText', 'Շնորհակալություն, Ձեր հայտն ընդունված է:', 'Спасибо, ваше сообщение принято.', 'Thank you, your message is accepted.', 15),
(157, 'applicationBtn', 'Գլխավոր էջ', 'Главная страница', 'main page', 15),
(158, 'blogTitle', 'ԲԼՈԳ', 'БЛОГ', 'BLOG', 16),
(159, 'contactTitle', 'Զանգեք կամ գրեք մեզ', 'Нужна прямая линия?', 'Need A Direct Line?', 17),
(160, 'contactText', 'ֆդֆդցֆհւ եհեւիհվւի եհգւիե ւիեռգհւի եհգւի', 'йжейгжиу еуигриуерхй егой оигйеио йгиоерйгио есжд', 'Cras massa et odio donec faucibus in. Vitae pretium massa dolor ullamcorper lectus elit quam.', 17),
(161, 'contactPhone', 'Հեռախոս', 'Телефон', 'Phone', 17),
(162, 'contactEmail', 'Էլ. փոստ', 'Эл. почта', 'Email', 17),
(163, 'contactUs', 'Կապ մեզ հետ', 'Связаться с нами', 'Contact Us', 17),
(164, 'contactInputText', 'Ձեր էլփոստի հասցեն չի հրապարակվի: Պարտադիր լրացման դաշտերը նշված են *', 'Ваш электронный адрес не будет опубликован. Необходимые поля отмечены *', 'Your email address will not be published. Required fields are marked *', 17),
(165, 'contactInputName', 'Անուն*', 'Имя*', 'Name*', 17),
(166, 'contactInputEmail', 'Էլ. փոստ*', 'Эл. почта*', 'Email*', 17),
(167, 'contactComment', 'Մեկնաբանություն', 'Комментарий', 'Comment', 17),
(168, 'contactBtn', 'ՈՒՂԱՐԿԵԼ', 'ОТПРАВИТЬ', 'POST COMMENT', 17),
(169, 'signupTextOne', 'Բարձրացրեք ձեր', 'Повышайте', 'Up Your', 18),
(170, 'signupTextTwo', 'հմտությունները', 'квалификацию,', 'Skills', 18),
(171, 'signupTextThree', 'ձեր', 'Продвинуте', 'To', 18),
(172, 'signupTextFour', 'կարիերայի', 'по', 'Advance', 18),
(173, 'signupTextFive', 'ուղին', 'карьерной', 'Your', 18),
(174, 'signupTextSix', 'առաջ', 'лестнице', 'Career', 18),
(175, 'signupTextSeven', 'մղելու համար', NULL, 'Path', 18),
(176, 'signupTextCouple', 'Ընդամենը մի քանի կլիկ և մենք սկսում ենք', 'Всего пара кликов и мы начинаем', 'Just a couple of clicks and we start', 18),
(177, 'signupFormTitle', 'ՍԿՍԵԼ ՀԻՄԱ', 'НАЧАТЬ СЕЙЧАС', 'GET STARTED NOW', 18),
(178, 'signupFormName', 'Անուն/ազգանուն', 'Имя/Фамилия', 'Name/Surname', 18),
(179, 'signupFormEmail', 'Էլ. հասցե', 'Адрес эл. почты', 'Email Address', 18),
(180, 'signupFormPassword', 'Գաղտնաբառ', 'Пароль', 'Password', 18),
(181, 'signupFormAgree', 'Ես համաձայն եմ', 'Я согласен с', 'I agree to the', 18),
(182, 'signupFormTerms', 'դրույթներին և պայմաններին', 'правилами и условиями', 'terms and conditions', 18),
(183, 'signupBtn', 'ԳՐԱՆՑՎԵԼ', 'РЕГИСТРАЦИЯ', 'SIGN UP', 18),
(184, 'signupAccount', 'Ունե՞ք հաշիվ:', 'У вас есть аккаунт?', 'Have an account?', 18),
(185, 'signupAccountSignin', 'Մուտք գործել', 'Войти', 'Sign In', 18),
(186, 'signinTextOne', 'Բարձրացրեք ձեր', 'Повышайте', 'Up Your', 19),
(187, 'signinTextTwo', 'հմտությունները', 'квалификацию,', 'Skills', 19),
(202, 'signinTextThree', 'ձեր', 'Продвинуте', 'To', 19),
(203, 'signinTextFour', 'կարիերայի', 'по', 'Advance', 19),
(204, 'signinTextFive', 'ուղին', 'карьерной', 'Your', 19),
(205, 'signinTextSix', 'առաջ', 'лестнице', 'Career', 19),
(206, 'signinTextSeven', 'մղելու համար', NULL, 'Path', 19),
(207, 'signinTextCouple', 'Ընդամենը մի քանի կլիկ և մենք սկսում ենք', 'Всего пара кликов и мы начинаем', 'Just a couple of clicks and we start', 19),
(208, 'signinFormTitle', 'ԲԱՐԻ ԳԱԼՈՒՍՏ', 'ДОБРО ПОЖАЛОВАТЬ', 'WELCOME BACK', 19),
(209, 'signinFormEmail', 'Էլ. հասցե', 'Адрес эл. почты', 'Email Address', 19),
(210, 'signinFormPassword', 'Գաղտնաբառ', 'Пароль', 'Password', 19),
(211, 'signinRemember', 'Հիշել', 'Помнить', 'Remember', 19),
(212, 'signinLost', 'Մոռացել եք գաղտնաբառը?', 'Забыли пароль?', 'Lost your password?', 19),
(213, 'signinBtn', 'ՄՈՒՏՔ ԳՈՐԾԵԼ', 'ВОЙТИ', 'SIGN IN', 19),
(214, 'signinMember', 'Գրանցված չե՞ք։', 'Не участник?', 'Not a member?', 19),
(215, 'signinFormSignup', 'Գրանցվել հիմա', 'Регистрация сейчас', 'Sign Up now', 19),
(216, 'aboutFirstBottomText', 'Ակադեմիայում դասընթացները կազմակերպվում են օնլայն, օֆֆլայն և հիբրիդ եղանակներով։ Այստեղ ստեղծված է հնարավորություն սվորելու ինչպես խմբային, այնպես էլ՝ անհատական։ Ակադեմիայում իրականացվում են նաև կորպորատիվ դասընթացներ։<br>\nՈւսանո՞ղ եք, մասնագե՞տ, թե՞ որոշել  եք փոխել Ձեր մասնագիտությունը, հոգ չէ, INFOEXPERT ACADEMY-ում արդի պահանջներին համապատասխան մշակված կրթական ծրագրերը Ձեզ կօգնեն մասնագիտանալ և բարելավել Ձեր գիտելիքները:<br>\nԱկադեմիայի կրթական ծրագրերի որակի և արդյունավետության լավագույն ապացույցն են գործընկերների վստահությունը և մեր շրջանավարտների հաջողությունները։<br>\niNFOEXPERT ACADEMY–ում  իրենց վերապատրաստումներն են անցել «ՀԷՑ» ՓԲԸ-ի, «Իզմիրլյան ԲԿ»-ի, «Հարավկովկասյան երկաթուղի» ՓԲԸ-ի և շատ այլ խոշոր կազմակերպությունների աշխատակիցներ և անհատներ։<br>\niNFOEXPERT ACADEMY<br><br>\nԿրթություն առանց սահմանների', 'Курсы в академии организованы онлайн, оффлайн и гибридным способом. Есть возможность как группового, так и индивидуального обучения. В академии также проводятся корпоративные курсы.<br> Вы специалист, студент или решили сменить карьеру? Это не имеет значения; Образовательные программы iNFOEXPERT ACADEMY, разработанные с учетом современных требований, позволят вам специализироваться и повысить свою квалификацию.<br>\nУспех наших выпускников и доверие наших партнеров служат сильнейшим показателем качества и эффективности образовательных программ Академии.<br>\niNFOEXPERT ACADEMY провела обучение персонала и сотрудников многих значимых предприятий, в том числе ЗАО «ЭСА», «Измирлян МЦ», ЗАО «Южно-Кавказская Железная Дорога» и многих других.<br>\niNFOEXPERT ACADEMY<br><br>\nОбразование без границ!', 'The academy offers courses in three different formats: hybrid, online, and offline. Learning can occur in both group and individual settings. Corporate courses are also offered by the academy.<br>\nAre you a specialist, a student, or have you chosen to change careers? It makes no difference; iNFOEXPERT ACADEMY\'s educational programs, designed to meet contemporary demands, will enable you to specialize and advance your expertise.<br>\nThe success of our graduates and the confidence of our partners serve as the strongest indicators of the quality and efficacy of the Academy\'s educational programs.<br>\niNFOEXPERT ACADEMY has provided training to personnel and staff of numerous significant enterprises, including \"ENA\" CJSC, \"Izmirlian MC,\" \"South Caucasian Railway\" CJSC, and many more.<br>\n\niNFOEXPERT ACADEMY<br><br>\nEducation without boundaries!', 2),
(217, 'aboutOurHistory', 'ՄԵՐ ՊԱՏՄՈՒԹՅՈՒՆԸ', 'НАША ИСТОРИЯ', 'OUR HISTORY', NULL),
(218, 'mycoursesBtn', 'Գնել հիմա', 'Купить', 'Buy now', 9),
(219, 'aboutFirstBottomTextTitle', 'ՄԵՐ ԴԱՍԸՆԹԱՑՆԵՐԸ', 'НАШИ КУРСЫ', 'OUR COURSES', 2),
(220, 'aboutWhyChoose', 'ԻՆՉՈՒ ԸՆՏՐԵԼ IEA', 'ПОЧЕМУ ВЫБРАТЬ IEA', 'WHY CHOOSE IEA', NULL),
(221, 'footerTerms', 'Դրույթներ և պայմաններ', 'Правила и условия', 'Terms & Conditions', NULL),
(222, 'sectionSixBtnMobile', 'Տեսնել ավելին', 'Видеть больше', 'See more', NULL),
(223, 'userCreateMoreInfo', 'Տեղեկացրեք մեզ ավելին ձեր մասին', 'Дайте нам знать о вас больше', 'Let us know more about you', 5),
(224, 'userCreateEditProfile', 'Խմբագրել պրոֆիլը', 'Редактировать профиль', 'Edit profile', 5),
(225, 'editUserProfileTitle', 'Իմ էջը', 'Мой профиль', 'My Profile', 7),
(226, 'editAchievementsBtn', 'ԽՄԲԱԳՐԵԼ', 'РЕДАКТИРОВАТЬ', 'EDIT', 7),
(227, 'userCreateMoreInfo', 'Տեղեկացրեք մեզ ավելին ձեր մասին', 'Дайте нам знать о вас больше', 'Let us know more about you', 7),
(228, 'usercreatePhoto', 'Ավելացնել լուսանկար', 'Добавить фото', 'Add photo', 7),
(229, 'editProfileTitle', 'Խմբագրել պրոֆիլը', 'Редактировать профиль', 'Edit profile', 20),
(230, 'editProfileMoreInfo', 'Տեղեկացրեք մեզ ավելին ձեր մասին', 'Дайте нам знать о вас больше', 'Let us know more about you', 20),
(231, 'editProfilePhoto', 'Ավելացնել լուսանկար', 'Добавить фото', 'Add photo', 20),
(232, 'editProfileName', 'Անուն/Ազգանուն', 'Имя/Фамилия', 'Name/Surname', NULL),
(233, 'editProfilePhone', 'Հեռախոս', 'Телефон', 'Phone', 20),
(234, 'editProfileMail', 'Փոստ', 'Почта', 'Mail', 20),
(235, 'editProfileLinkdin', 'Linkedin պրոֆիլի հղում', 'Ссылка на профиль в LinkedIn', 'Linkedin profile link', 20),
(236, 'editProfileCv', 'CV', 'резюме', 'CV', 20),
(237, 'editProfileAttach', 'Կցել ֆայլը', 'Прикрепить файл', 'Attach file', 20),
(238, 'editProfileSave', 'ՊԱՀՊԱՆԵԼ', 'СОХРАНИТЬ', 'SAVE', 20),
(239, 'mainReadMore', 'ԱՎԵԼԻՆ', 'ЧИТАТЬ ДАЛЕЕ', 'READ MORE', NULL),
(240, 'seeAllCoursesBtn', 'ԲՈԼՈՐ ԴԱՍԵՐԸ', 'Все уроки', 'See all courses', 21),
(241, 'buyNowBtn', 'Գնել հիմա', 'Купить сейчас', 'Buy now', 21),
(242, 'btnQuize', 'ՍԿՍԵԼ', 'НАЧИНАТЬ', 'START', NULL),
(243, 'btnQuizeGo', 'ԱՌԱՋ', 'ВПЕРЕД', 'FORWARD', NULL),
(244, 'lessonBeYour', 'ԴԱ ԿԱՐՈՂ Է ՔՈՆԸ ԼԻՆԵԼ', 'ЭТО МОЖЕТ БЫТЬ ВАШИМ', 'IT CAN BE YOURS', 21),
(245, 'lessonsTutors', 'ՀԱՆԴԻՊԵՔ ՁԵՐ ՀԵՐՈՍԻՆ', 'ВСТРЕЧАЙТЕ СВОЕГО ГЕРОЯ', 'TUTORS - MEET YOUR HERO', 21),
(248, 'quizePlayAndTest', 'ԽԱՂԱ ԵՎ ՍՏՈՒԳԻՐ ԳԻՏԵԼԻՔՆԵՐԴ', 'ИГРАЙТЕ И ПРОВЕРЬТЕ СВОИ ЗНАНИЯ!', 'PLAY AND TEST YOUR KNOWLEDGE!', 25),
(249, 'lessonAdministration', '1С: ԱՌԵՎՏՐԻ ԿԱՌԱՎԱՐՈւՄ', '1С: ТОРГОВОЕ УПРАВЛЕНИЕ', '1С: TRADE ADMINISTRATION', NULL),
(250, 'lessonAccounting', '1С: ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ 8.3', '1С: УЧЕТ 8.3', '1С: ACCOUNTING 8.3', NULL),
(251, 'lessonAccountingForBeginners', '1C: ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ ՍԿՍՆԱԿՆԵՐԻ ՀԱՄԱՐ', '1С: УЧЕТ ДЛЯ НАЧИНАЮЩИХ', '1C: ACCOUNTING FOR BEGINNERS', NULL),
(252, 'lessonPersonnelManagment', '1С: ԱՇԽԱՏԱՎԱՐՁ ԵՒ ԿԱԴՐԵՐԻ ԿԱՌԱՎԱՐՈՒՄ', '1С: ЗАРПЛАТА И УПРАВЛЕНИЕ ПЕРСОНАЛОМ', '1С: SALARY AND PERSONNEL MANAGEMENT', NULL),
(278, 'resultBlackboardResult', 'ՁԵՐ ԱՐԴՅՈՒՆՔՆԵՐԸ', 'ВАШИ РЕЗУЛЬТАТЫ', 'YOUR RESULTS', 25),
(279, 'btnResult1', 'ԱՅԼ QUIZE', 'ДРУГАЯ ВИКТОРИНА', 'ANOTHER QUIZ', 25),
(280, 'btnResult2', 'ԳԼԽԱՎՈՐ ԷՋ', 'ГЛАВНАЯ СТРАНИЦА', 'MAIN PAGE', 25),
(282, 'inputEmail', 'Էլ. հասցե', 'Эл. почта', 'Email Address', NULL),
(284, 'inputCurrentPassword', 'Մուտքագրեք ընթացիկ գաղտնաբառը', 'Введите текущий пароль', 'Enter current password', 26),
(285, 'inputNewPassword', 'Մուտքագրեք նոր գաղտնաբառ', 'Введите новый пароль', 'Enter new password', 26),
(286, 'inputConfirmPassword', 'Հաստատել գաղտնաբառը', 'Подтвердите пароль', 'Re-type new password', 26),
(287, 'btnChangePassword', 'ՓՈԽԵԼ ԳԱՂՏՆԱԲԱՌԸ', 'ИЗМЕНИТЬ ПАРОЛЬ', 'CHANGE PASSWORD', 26),
(289, 'seeMoreBtn', 'Գնել հիմա', 'Купить', 'Buy now', 10),
(290, 'notFound', 'էջը չի գտնվել', 'страница не найдена', 'page not found', NULL),
(291, 'notFoundBtn', 'ԳԼԽԱՎՈՐ ԷՋ', 'ГЛАВНАЯ СТРАНИЦА', 'GO BACK HOME', NULL),
(293, 'recentNews', 'ՎԵՐՋԻՆ ԼՈՒՐԵՐ', 'СВЕЖИЕ НОВОСТИ', 'RECENT NEWS', NULL),
(294, 'modalTitleCallBack', 'ՀԵՏԱԴԱՐՁ ԶԱՆԳ', 'ПЕРЕЗВОНИТЬ', 'GET A CALL BACK', NULL),
(295, 'modalTextCallBack', 'Լրացրեք ստորև ներկայացվածը, և մենք հնարավորինս շուտ կկապվենք ձեզ հետ:', 'Заполните форму ниже, и мы свяжемся с вами как можно скорее.', 'Complete the form below and we will contact you as soon as possible.', NULL),
(296, 'modalCallBackName', 'Անուն', 'Имя', 'Name', NULL),
(297, 'modalCallBackPhone', 'Հեռախոսահամար', 'Номер телефона', 'Phone number', NULL),
(298, 'modalCallBackCourses', 'Հետաքրքրվա՞ծ եք դասընթացով', 'Курс интересует?', 'Course Interested In', NULL),
(299, 'modalCallBackSubmit', 'ՀԱՍՏԱՏԵԼ', 'ОТПРАВИТЬ', 'SUBMIT', NULL),
(300, 'passwordInclude', 'Գաղտնաբառը պետք է ներառի.', 'Пароль должен включать:', 'Password must include:', 18),
(301, 'uppercaseLetters', 'Մեծատառեր', 'Заглавные буквы', 'Uppercase letters', 18),
(302, 'lowercaseLetters', 'Փոքրատառեր', 'Строчные буквы', 'Lowercase letters', 18),
(303, 'numbers', 'Թվեր', 'Числа', 'Numbers', 18),
(304, 'symbols', 'Սիմվոլներ', 'Символы', 'Symbols', 18),
(305, 'characters', 'Առնվազն 8 նիշ', 'Минимум 8 символов', 'Minimum 8 characters', 18),
(306, 'passwordIncludeSecurity', 'Գաղտնաբառը պետք է ներառի.', 'Пароль должен включать:', 'Password must include:', 26),
(307, 'uppercaseLettersSecurity', 'Մեծատառեր', 'Заглавные буквы', 'Uppercase letters', 26),
(308, 'lowercaseLettersSecurity', 'Փոքրատառեր', 'Строчные буквы', 'Lowercase letters', 26),
(309, 'numbersSecurity', 'Թվեր', 'Числа', 'Numbers', 26),
(310, 'symbolsSecurity', 'Սիմվոլներ', 'Символы', 'Symbols', 26),
(311, 'charactersSecurity', 'Առնվազն 8 նիշ', 'Минимум 8 символов', 'Minimum 8 characters', 26);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `linkdin_url` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `cv` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `auth_key` varchar(32) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `password_reset_token` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_login` timestamp NULL DEFAULT current_timestamp(),
  `role` int(10) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT 0 COMMENT '\r\n'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `phone`, `linkdin_url`, `image`, `cv`, `auth_key`, `password`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `last_login`, `role`, `company_id`, `type`) VALUES
(83, 'admin', NULL, NULL, NULL, NULL, 'W-ok0XUWjPdEtilBf96gB2X5UkOcedeO', '$2y$10$ODDGxEPigtF9XHEj8MxkieRSvb1vnxt485JK6IET1WXLaaObqSKnq', NULL, 'gor.abrahamyan1993@gmail.com', 1, '2023-05-08 16:25:36', '2023-05-08 16:25:36', '2023-05-08 12:25:36', 10, 6, 1),
(93, 'Harut Hovsepyan', NULL, 'https://www.linkedin.com/in/harut-hovsepyan-7b3089277/', 'web/uploads/1719993373partner4_hov.png', 'web/uploads/1719993373img_categorie2.png', '$2y$13$/Q/wzFkI95siiSVrtcFi0OP', '$2y$13$jEqc/e/7zTxwrOifjhqWxe06/KxFcpjJoWnq9dlJWKipLToY68vx.', '61595', 'haruthhh@mail.ru', 1, '2024-02-08 08:11:55', '2024-07-09 06:23:18', '2024-02-08 08:11:55', 10, NULL, 3),
(95, '', NULL, NULL, NULL, NULL, NULL, '$2y$13$UW8pTGlbs1jf7Zi2RfjK8uGOqQ8EYMLtKRy0nxua/ktwAEni40Hdy', NULL, 'aasdf@mail.ru', 1, '2024-05-02 08:27:55', '2024-05-02 08:27:55', '2024-05-02 08:27:55', NULL, NULL, 0),
(96, '', NULL, NULL, NULL, NULL, NULL, '$2y$13$W/D2ElGw5OLSP/UZToW4zO1Ntv91heTqRjVm9No591DgRDNbc2kM6', NULL, 'aaasdf@mail.ru', 1, '2024-05-02 08:28:25', '2024-05-02 08:28:25', '2024-05-02 08:28:25', NULL, NULL, 0),
(97, '', NULL, NULL, NULL, NULL, NULL, '$2y$13$nTskwDB4iSRIBThJ.xvoJOnZNqmBjH9V0lu0ybp/xO7C3NXtsF0x6', NULL, 'aaaasdf@mail.ru', 1, '2024-05-02 08:31:07', '2024-05-02 08:31:07', '2024-05-02 08:31:07', NULL, NULL, 0),
(98, '', NULL, NULL, NULL, NULL, NULL, '$2y$13$sQ0T8CInYNpR84C1RZbTl.zbJaSjcXekENu3mLLm/G19ClDGetn16', NULL, 'aaaaasdf@mail.ru', 1, '2024-05-02 08:31:29', '2024-05-02 08:31:29', '2024-05-02 08:31:29', NULL, NULL, 0),
(99, '', NULL, NULL, NULL, NULL, NULL, '$2y$13$sT5bgKd35MBZBbKD2FOpMuzWfoSoEyGrrMovTyJigBgaVynlx0fIC', NULL, 'aaaaaasdf@mail.ru', 1, '2024-05-02 08:32:47', '2024-05-02 08:32:47', '2024-05-02 08:32:47', NULL, NULL, 0),
(100, '', NULL, NULL, NULL, NULL, NULL, '$2y$13$TogavmaEth0bYvA9SqTW2uETcs1Ctsli/zNIlCbIRCKhM31a89mtG', NULL, 'abb@mail.ru', 1, '2024-05-02 08:33:41', '2024-05-02 08:33:41', '2024-05-02 08:33:41', NULL, NULL, 0),
(101, '', NULL, NULL, NULL, NULL, 'AMfs9K8Ofb', '$2y$13$74.jlWDeNiEKs6QJ8EEI6u2FAsldqSYuR.p9flIucNqai8gqeaXEW', NULL, 'aasvdssdf@mail.ru', 1, '2024-05-02 08:51:52', '2024-05-02 08:51:52', '2024-05-02 08:51:52', NULL, NULL, 0),
(102, '', NULL, NULL, NULL, NULL, 'fj6V1aSVAP', '$2y$13$Hh5RaKWtyeuqabi2gcs3HeaOAbIJMFi/IsqphFIxysragk7PGjP8S', NULL, 'df@mail.ru', 1, '2024-05-02 10:24:03', '2024-05-02 10:24:03', '2024-05-02 10:24:03', NULL, NULL, 0),
(103, 'aaaaa', NULL, NULL, NULL, NULL, 'CQbDu6zrBK', '$2y$13$yLT3P8IcHdFUrTqVPmWgBOIEuD5pZGxywuyT/QcElwFn9iskqB2d2', NULL, 'aasdvssdf@mail.ru', 1, '2024-05-02 13:33:45', '2024-05-02 13:33:45', '2024-05-02 13:33:45', NULL, NULL, 0),
(104, 'vsdfvs', NULL, NULL, NULL, NULL, 'EfuLQc8jfK', '$2y$13$dPO7nqxSgfniCkwaTQYnb.NAjQV43/pZNsMGNNOEk/QYu9Fix4Eju', NULL, 'sf@mail.ru', 1, '2024-05-02 14:32:08', '2024-05-02 14:32:08', '2024-05-02 14:32:08', NULL, NULL, 0),
(105, 'sdgv', NULL, NULL, NULL, NULL, 'yQrH8niOce', '$2y$13$a5fY1pDXlPuTgYUvxg0EyORrSYMGTUhYRgGl0a83NXIIuS/ANaiOC', NULL, 'fs@mail.ru', 1, '2024-05-02 14:34:44', '2024-05-02 14:34:44', '2024-05-02 14:34:44', NULL, NULL, 0),
(106, 'Mariam', NULL, NULL, NULL, NULL, '5LVl8BM4p9', '$2y$13$wEAhwg3IkLOQKexsCvN9POPcSznIogZk9hhrTSqrWQfbzvVgqKS9q', NULL, 'a@mail.com', 0, '2024-06-17 13:47:12', '2024-06-17 13:47:12', '2024-06-17 13:47:12', NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ac_answers`
--
ALTER TABLE `ac_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ac_blog`
--
ALTER TABLE `ac_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ac_callback`
--
ALTER TABLE `ac_callback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ac_langs`
--
ALTER TABLE `ac_langs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ac_lessons`
--
ALTER TABLE `ac_lessons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ac_my_card`
--
ALTER TABLE `ac_my_card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ac_my_lessons`
--
ALTER TABLE `ac_my_lessons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ac_notifications`
--
ALTER TABLE `ac_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ac_partners`
--
ALTER TABLE `ac_partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ac_question_answers`
--
ALTER TABLE `ac_question_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ac_question_list`
--
ALTER TABLE `ac_question_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ac_question_quests`
--
ALTER TABLE `ac_question_quests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ac_reviews`
--
ALTER TABLE `ac_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ac_settings`
--
ALTER TABLE `ac_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ac_texts`
--
ALTER TABLE `ac_texts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ac_view_history`
--
ALTER TABLE `ac_view_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ac_wishlist`
--
ALTER TABLE `ac_wishlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `texts`
--
ALTER TABLE `texts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `passwordResetToken` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ac_answers`
--
ALTER TABLE `ac_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ac_blog`
--
ALTER TABLE `ac_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ac_callback`
--
ALTER TABLE `ac_callback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ac_langs`
--
ALTER TABLE `ac_langs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ac_lessons`
--
ALTER TABLE `ac_lessons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ac_my_card`
--
ALTER TABLE `ac_my_card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `ac_my_lessons`
--
ALTER TABLE `ac_my_lessons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ac_notifications`
--
ALTER TABLE `ac_notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ac_partners`
--
ALTER TABLE `ac_partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `ac_question_answers`
--
ALTER TABLE `ac_question_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `ac_question_list`
--
ALTER TABLE `ac_question_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ac_question_quests`
--
ALTER TABLE `ac_question_quests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ac_reviews`
--
ALTER TABLE `ac_reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ac_settings`
--
ALTER TABLE `ac_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ac_texts`
--
ALTER TABLE `ac_texts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ac_view_history`
--
ALTER TABLE `ac_view_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ac_wishlist`
--
ALTER TABLE `ac_wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `texts`
--
ALTER TABLE `texts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=312;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
