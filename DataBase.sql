-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2023 at 03:30 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `omar`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(100) NOT NULL,
  `start1` varchar(255) NOT NULL,
  `top_p` varchar(255) NOT NULL,
  `green` varchar(255) NOT NULL,
  `data1` varchar(255) NOT NULL,
  `data2` varchar(255) NOT NULL,
  `data3` varchar(255) NOT NULL,
  `data4` varchar(255) NOT NULL,
  `data5` varchar(255) NOT NULL,
  `data6` varchar(255) NOT NULL,
  `data7` varchar(255) NOT NULL,
  `data8` varchar(255) NOT NULL,
  `data9` varchar(255) NOT NULL,
  `data10` varchar(255) NOT NULL,
  `data11` varchar(255) NOT NULL,
  `data12` varchar(255) NOT NULL,
  `data13` varchar(255) NOT NULL,
  `data14` varchar(255) NOT NULL,
  `data15` varchar(255) NOT NULL,
  `data16` varchar(255) NOT NULL,
  `data17` varchar(255) NOT NULL,
  `data18` varchar(255) NOT NULL,
  `data19` varchar(255) NOT NULL,
  `data20` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `author_f` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `facebook`
--

CREATE TABLE `facebook` (
  `id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `author` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `facebook`
--

INSERT INTO `facebook` (`id`, `link`, `author`, `created_at`) VALUES
(21, 'https://www.facebook.com/gdw20', 'admin', '2023-03-27 23:35:42');

-- --------------------------------------------------------

--
-- Table structure for table `idusers`
--

CREATE TABLE `idusers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ar_name` varchar(255) NOT NULL,
  `useremail` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `linkedin_profile` varchar(255) NOT NULL,
  `bio` longtext NOT NULL,
  `profileimg` varchar(255) DEFAULT NULL,
  `role` varchar(25) NOT NULL,
  `created_at` date DEFAULT current_timestamp(),
  `last_login` datetime DEFAULT NULL,
  `last_ip` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `idusers`
--

INSERT INTO `idusers` (`id`, `name`, `ar_name`, `useremail`, `username`, `password`, `token`, `linkedin_profile`, `bio`, `profileimg`, `role`, `created_at`, `last_login`, `last_ip`) VALUES
(1, 'Youssef Ahmed', 'يوسف احمد', 'mail@yelnaggar.com', 'admin', '$2y$10$ppZsPqBANnHrWhfwPjvN4Ozd5MGUmSM.UfOaK6SnDZvFAaGSWrq22', '35cce84889230c8313d411c3c47dfb935e0e68d6cd25396da6aeab71d37f989647bd60063758350abdb0d13854e89cf33faa', 'test', '', '49333_(7).png', 'admin', '2022-08-31', '2023-04-18 22:36:37', '::1'),
;

-- --------------------------------------------------------

--
-- Table structure for table `instagram`
--

CREATE TABLE `instagram` (
  `id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `author` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `instagram`
--

INSERT INTO `instagram` (`id`, `link`, `author`, `created_at`) VALUES
(2, 'https://www.instagram.com/gdw_20/', 'admin', '2023-03-28 21:27:15');

-- --------------------------------------------------------

--
-- Table structure for table `linkedin`
--

CREATE TABLE `linkedin` (
  `id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `author` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `linkedin`
--

INSERT INTO `linkedin` (`id`, `link`, `author`, `created_at`) VALUES
(5, 'https://www.linkedin.com/company/green-design-workshop/', 'admin', '2023-03-29 13:36:16');

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE `mail` (
  `id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `author` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`id`, `link`, `author`, `created_at`) VALUES
(12, 'info@greendesigns20.com', 'admin', '2023-03-25 23:31:36');

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE `phone` (
  `id` int(11) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `author` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`id`, `phonenumber`, `author`, `created_at`) VALUES
(136, '05346090531', 'admin', '2023-03-25 23:08:44');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `projectname` text NOT NULL,
  `service` text NOT NULL,
  `location` text NOT NULL,
  `engtype` text NOT NULL,
  `engtype1` text NOT NULL,
  `distance` text NOT NULL,
  `type` text NOT NULL,
  `date` text NOT NULL,
  `top_p1` text NOT NULL,
  `top_p2` text NOT NULL,
  `top_p3` text NOT NULL,
  `top_p4` text NOT NULL,
  `top_p5` text NOT NULL,
  `table1` text NOT NULL,
  `table1_p` text NOT NULL,
  `table1_li1` text NOT NULL,
  `table1_li2` text NOT NULL,
  `table1_li3` text NOT NULL,
  `table1_li4` text NOT NULL,
  `table2` text NOT NULL,
  `table2_p` text NOT NULL,
  `table2_li1` text NOT NULL,
  `table2_li2` text NOT NULL,
  `table2_li3` text NOT NULL,
  `table2_li4` text NOT NULL,
  `end_p` text NOT NULL,
  `photo1` text NOT NULL,
  `photo2` text NOT NULL,
  `photo3` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `author` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `projectname`, `service`, `location`, `engtype`, `engtype1`, `distance`, `type`, `date`, `top_p1`, `top_p2`, `top_p3`, `top_p4`, `top_p5`, `table1`, `table1_p`, `table1_li1`, `table1_li2`, `table1_li3`, `table1_li4`, `table2`, `table2_p`, `table2_li1`, `table2_li2`, `table2_li3`, `table2_li4`, `end_p`, `photo1`, `photo2`, `photo3`, `created_at`, `author`) VALUES
(2, 'ÙÙŠÙ„Ø§ Ø§Ù„ØªÙ…ÙŠÙ…ÙŠ', 'all architect', 'Ù…Ø¯ÙŠÙ†Ø© Ø§Ù„Ø±ÙŠØ§Ø¶', 'ÙƒÙ„Ø§Ø³ÙŠÙƒ', 'Ù…Ø®Ø·Ø·Ø§Øª Ù‡Ù†Ø¯Ø³ÙŠØ©', '500', 'Ø³ÙƒÙ†ÙŠ', '', 'ØªÙ… ØªØµÙ…ÙŠÙ… Ø§Ù„ÙÙŠÙ„Ø§ Ø¹Ù„Ù‰ Ø§Ù„Ù†Ø¸Ø§Ù… Ø§Ù„ÙƒÙ„Ø§Ø³ÙŠÙƒÙŠ Ø§Ù„Ø°ÙŠ ÙŠØ¬Ù…Ø¹ Ù…Ø§ Ø¨ÙŠÙ† Ø§Ù„Ø¹Ø±Ø§Ù‚Ø© ÙˆØ§Ù„ÙØ®Ø§ÙØ© Ù…Ù† Ø®Ù„Ø§Ù„ Ø§Ø³ØªØ®Ø¯Ø§Ù… Ø§Ù„Ø£Ø¹Ù…Ø¯Ø© Ø§Ù„Ø·ÙˆÙŠÙ„Ø© Ø§Ù„Ù…Ø²Ø®Ø±ÙØ© ÙˆØ§Ù„Ù†ÙˆØ§ÙØ° Ø§Ù„ÙƒØ¨ÙŠØ±Ø© ÙˆØ§Ù„Ø²Ø®Ø§Ø±Ù Ø§Ù„ØªÙŠ ÙŠØªÙ…ÙŠØ² Ø¨Ù‡Ø§ Ù‡Ø°Ø§ Ø§Ù„Ø·Ø±Ø§Ø² Ø¹Ù† ØºÙŠØ±Ù‡ Ù…Ù† Ø§Ù„Ø£Ù†Ù…Ø§Ø· Ø§Ù„Ù…Ø¹Ù…Ø§Ø±ÙŠØ© Ø§Ù„Ø£Ø®Ø±Ù‰.', 'Ù…ÙˆÙ‚Ø¹ Ø§Ù„ÙÙŠÙ„Ø§ Ù„Ø¹Ø¨ Ø¯ÙˆØ±Ø§ Ù…Ù‡Ù…Ø§ ÙÙŠ Ø§Ø®ØªÙŠØ§Ø± Ø§Ù„Ø·Ø±Ø§Ø² Ø§Ù„Ù…Ø¹Ù…Ø§Ø±ÙŠ Ø¥Ø° Ø£Ù† Ø§Ù„Ù…Ø´Ø±ÙˆØ¹ ÙŠÙ‚Ø¹ Ø¹Ù„Ù‰ Ø«Ù„Ø§Ø«Ø© Ø´ÙˆØ§Ø±Ø¹ ÙÙŠ Ø£Ø­Ø¯ Ø£ÙØ®Ù… Ø£Ø­ÙŠØ§Ø¡ Ø§Ù„Ø±ÙŠØ§Ø¶ Ù„Ø°Ù„Ùƒ ÙƒØ§Ù† Ù„Ø§Ø¨Ø¯ Ù…Ù† Ø§Ø®ØªÙŠØ§Ø± Ù†Ø¸Ø§Ù… Ù…Ø¹Ù…Ø§Ø±ÙŠ ÙŠØ¶ÙÙŠ Ø¹Ù„Ù‰ Ø§Ù„Ù…Ø´Ø±ÙˆØ¹ Ø±ÙˆÙ†Ù‚Ø§ ÙˆØªÙ…ÙŠØ²Ø§ Ø®Ø§ØµØ§.', 'ÙˆÙ‚Ø¯ ØªÙ… Ù…Ø±Ø§Ø¹Ø§Ø© Ø§Ù„Ù†Ø§Ø­ÙŠØ© Ø§Ù„Ø§Ù‚ØªØµØ§Ø¯ÙŠØ© ÙÙŠ Ø§Ù„Ù…Ø´Ø±ÙˆØ¹ Ù…Ù† Ø®Ù„Ø§Ù„ Ø§Ø³ØªØ®Ø¯Ø§Ù… Ù…ÙˆØ§Ø¯ Ø§Ù‚ØªØµØ§Ø¯ÙŠØ© ØªØ­Ù‚Ù‚ ØºØ§ÙŠØ© Ø§Ù„Ù…Ø§Ù„Ùƒ ÙˆÙ‡Ø¯ÙÙ‡ ÙˆÙƒØ°Ù„Ùƒ ØªÙƒÙˆÙ† Ù…ÙŠØ²Ø§ØªÙ†ÙŠØªÙ‡Ø§ Ù…Ø¹Ù‚ÙˆÙ„Ø©ØŒ Ù…Ø¹ ØªÙˆØ²ÙŠØ¹ Ø¯Ù‚ÙŠÙ‚ ÙˆÙ…Ø­ÙƒÙ… Ù„Ø§Ù†Ø¸Ù…Ø© Ø§Ù„Ø§Ù†Ø§Ø±Ø© Ù„Ø¥Ø¨Ø±Ø§Ø² Ø¬Ù…Ø§Ù„ Ù‡Ø°Ø§ Ø§Ù„Ø·Ø±Ø§Ø² Ø§Ù„Ù…Ø¹Ù…Ø§Ø±ÙŠ Ù„Ù„Ù…Ø¨Ù†Ù‰.', 'ÙˆÙ‚Ø¯ ØªÙ… ØªØµÙ…ÙŠÙ… Ø§Ù„Ù…Ø´Ø±ÙˆØ¹ ÙƒØ§Ù…Ù„Ø§ Ù…Ù† Ù‚Ø¨Ù„ Ù…ÙƒØªØ¨ Ø§Ù„ØªØµÙ…ÙŠÙ… Ø§Ù„Ø§Ø®Ø¶Ø±', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '96326_04_3 - Photo.jpg', '52899_04_10 - Photo.jpg', '62704_04_2 - Photo.jpg', '2023-03-24 00:23:55', 'admin'),
(3, 'مطعم دانكن', 'all architect', 'القصيم', 'نظام هيكلي', 'التصميم المعماري', '200 m2', 'تجاري', '', 'هو أحد المشاريع الإنشائية التجارية التي تم تصميمها من قبل مكتب التصميم الأخضر. المشروع كان عبارة عن مبنى مستقل مكون من دورين لمطعم دانكن. أبعاد المبنى كانت 20 متر طولا في 10 متر عرضا وارتفاع السقف 4.2 متر.', '. الدور الثاني من المطعم هو مصمم بنظام تراس عليه مظلات كبيرة الحجم لحجب أشعة الشمس والمطر عن عملاء المطعم. وبالتالي كان لابد من اخذ وزن هذه المظلات بعين الاعتبار.', 'الفلسفة المعماري كانت تقتضي عدم وجود أعمدة في وسط وبالتالي كانت بحور السقف كبيرة تصل إلى ما يقرب من 7 متر', 'وهنا كان التحدي في اختيار نظام انشائي يجمع ما بين الامان الوظيفي للسقف والاقتصادية في المواد وتحقيق رغبات العميل في عدم رغبته في وجود في وسط المطعم، لذلك كان اختيار النظام الانشائي للمطعم مهم ومؤثر جدا.', 'لذلك كان أمام مهندسي مكتب التصميم الأخضر خيارين لتغطية البحور الكبيرة بشكل امن وعند الرجوع لكود البناء والمراجع العلمية تم تحديد خيارين مناسبين للسقفوهما نظام الفلات السلاب Flat Slab ونظام الأعصاب ذات الاتجاهين Two Way Ribbed Slab .', '', '', '', '', '', '', '', '', '', '', '', '', '', '90722_1.png', '38959_2.png', '9648_20230114_200420.jpg', '2023-03-24 00:34:52', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `number_of_category` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `data1` varchar(255) NOT NULL,
  `data2` varchar(255) NOT NULL,
  `data3` varchar(255) NOT NULL,
  `data4` varchar(255) NOT NULL,
  `data5` varchar(255) NOT NULL,
  `data6` varchar(255) NOT NULL,
  `data7` varchar(255) NOT NULL,
  `data8` varchar(255) NOT NULL,
  `data9` varchar(255) NOT NULL,
  `data10` varchar(255) NOT NULL,
  `author` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`id`, `category`, `number_of_category`, `price`, `data1`, `data2`, `data3`, `data4`, `data5`, `data6`, `data7`, `data8`, `data9`, `data10`, `author`, `created_at`) VALUES
(13, 'باقات المراجعة الانشائية', 'الباقة الاولي\n', 'SR.1200\r\n', 'المرجع هو كود البناء السعودي', 'تسليم الملاحاظات في تقرير PDF', 'اجراء التعديلات الازمة علي المخطط', 'اكمال اي نقص في المخططات', 'gregregerger', 'regerger', 'regregergerger', 'grgerrgregre', 'ergergergerger', 'gregregerger', NULL, '2023-03-24 16:22:32'),
(14, 'تقييد المشاكل الانشائية', 'توضيح اماكن الهدر في الحديد', 'طرح الحلول المناسبة', 'المرجع هو كود البناء السعودي', 'تسليم الملاحاظات في تقرير PDF', 'اجراء التعديلات الازمة علي المخطط', 'اكمال اي نقص في المخططات', 'gregregerger', 'regerger', 'regregergerger', 'grgerrgregre', 'ergergergerger', 'gregregerger', NULL, '2023-03-24 16:22:32'),
(15, 'اختبار', 'الاول', '1200sr', 'المرجع هو كود البناء السعودي', 'ffffffffff', 'اجراء التعديلات الازمة علي المخطط', 'اكمال اي نقص في المخططات', 'gregregerger', 'regerger', 'regregergerger', 'grgerrgregre', 'ergergergerger', 'gregregerger', NULL, '2023-03-24 16:22:32'),
(16, 'تقييد المشاكل الانشائية', 'الباقة الاولي\n', 'طرح الحلول المناسبة', 'المرجع هو كود البناء السعودي', 'تسليم الملاحاظات في تقرير PDF', 'اجراء التعديلات الازمة علي المخطط', 'اكمال اي نقص في المخططات', 'gregregerger', 'regerger', 'regregergerger', 'grgerrgregre', 'ergergergerger', 'gregregerger', 'admin', '2023-03-24 16:22:32');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `text1` varchar(255) NOT NULL,
  `text2` varchar(255) NOT NULL,
  `text3` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `text1`, `text2`, `text3`, `photo`) VALUES
(31, 'Ø®ÙŠØ§Ù„ÙƒÙ… ÙˆØ£Ø­Ù„Ø§Ù…ÙƒÙ…', 'Ù…ØµØ¯Ø± Ø¥Ù„Ù‡Ø§Ù…Ù†Ø§', 'Ø£Ø­Ø¯ Ù…Ø´Ø§Ø±ÙŠØ¹ Ù…ÙƒØªØ¨ Ø§Ù„ØªØµÙ…ÙŠÙ… Ø§Ù„Ø£Ø®Ø¶Ø± Ø§Ù„ØªÙŠ ØªÙ… ØªÙ†ÙÙŠÙ‡Ø§ ÙÙŠ Ù…Ø¯ÙŠÙ†Ø© Ø§Ù„Ø±ÙŠØ§Ø¶ - Ø§Ù„Ù…Ù…Ù„ÙƒØ© Ø§Ù„Ø¹Ø±Ø¨ÙŠØ© Ø§Ù„Ø³Ø¹ÙˆØ¯ÙŠØ©', '60897_7670293535347_1.png'),
(32, 'Ø«Ù‚ØªÙƒÙ…', 'Ø£Ø³Ø§Ø³ Ø¥Ø¨Ø¯Ø§Ø¹Ù†Ø§', 'ÙÙŠÙ„Ø§ Ø§Ù„ØªÙ…ÙŠÙ…ÙŠ Ù…Ù† Ø£Ø­Ø¯ Ù…Ø´Ø§Ø±ÙŠØ¹Ù†Ø§ Ø§Ù„Ù…Ù…ÙŠØ²Ø©', '24817_2.png'),
(33, 'Ø§Ù„Ø¬ÙˆØ¯Ø© Ø§Ù„Ø¬ÙŠØ¯Ø© ÙˆØ§Ù„ØªØµÙ…ÙŠÙ… Ø§Ù„ÙØ¹Ø§Ù„', 'Ù‡Ùˆ Ø¬ÙˆÙ‡Ø± Ù…Ø§ Ù†Ù‚ÙˆÙ… Ø¨Ù‡', 'Ø­Ø¶Ø§Ù†Ø© Ù‚Ù„Ø¹Ø© Ø§Ù„ØµØºØ§Ø± Ù…Ù† Ù…Ø´Ø§Ø±ÙŠØ¹Ù†Ø§ Ø§Ù„ØªØ¬Ø§Ø±ÙŠØ©', '22927_3.png');

-- --------------------------------------------------------

--
-- Table structure for table `twitter`
--

CREATE TABLE `twitter` (
  `id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `author` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `twitter`
--

INSERT INTO `twitter` (`id`, `link`, `author`, `created_at`) VALUES
(5, 'https://twitter.com/gdw_20', 'admin', '2023-03-29 13:33:52');

-- --------------------------------------------------------

--
-- Table structure for table `youtube`
--

CREATE TABLE `youtube` (
  `id` int(11) NOT NULL,
  `link` varchar(255) CHARACTER SET utf32 NOT NULL,
  `author` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `youtube`
--

INSERT INTO `youtube` (`id`, `link`, `author`, `created_at`) VALUES
(2, 'https://www.youtube.com/channel/UCC20WDqrPhkxI4-amAU-pMA', 'admin', '2023-03-29 13:41:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facebook`
--
ALTER TABLE `facebook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `idusers`
--
ALTER TABLE `idusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instagram`
--
ALTER TABLE `instagram`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `linkedin`
--
ALTER TABLE `linkedin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `twitter`
--
ALTER TABLE `twitter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `youtube`
--
ALTER TABLE `youtube`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `facebook`
--
ALTER TABLE `facebook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `idusers`
--
ALTER TABLE `idusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `instagram`
--
ALTER TABLE `instagram`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `linkedin`
--
ALTER TABLE `linkedin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `phone`
--
ALTER TABLE `phone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `twitter`
--
ALTER TABLE `twitter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `youtube`
--
ALTER TABLE `youtube`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
