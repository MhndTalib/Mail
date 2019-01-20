-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- المزود: sql108.byetcluster.com
-- أنشئ في: 29 سبتمبر 2018 الساعة 09:50
-- إصدارة المزود: 5.6.41-84.1
-- PHP إصدارة: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+03:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- قاعدة البيانات: `epiz_22701628_Mail`
--

-- --------------------------------------------------------

--
-- بنية الجدول `attachments`
--

CREATE TABLE IF NOT EXISTS `attachments` (
  `id` int(11) NOT NULL COMMENT 'ت',
  `M_ID` int(11) NOT NULL COMMENT 'تسلسل البريد',
  `Attach` varchar(200) NOT NULL COMMENT 'اسم المرفق',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `mail`
--

CREATE TABLE IF NOT EXISTS `mail` (
  `id` int(11) NOT NULL COMMENT 'ت',
  `Sender` varchar(60) NOT NULL COMMENT 'المرسل',
  `Recipient` varchar(60) NOT NULL COMMENT 'المستلمة',
  `Subject` varchar(150) NOT NULL COMMENT 'الموضوع',
  `Details` text COMMENT 'تفاصيل',
  `Reply` int(11) NOT NULL COMMENT 'تسلسل البريد الوارد المرتبط',
  `Readable` enum('نعم','لا') NOT NULL DEFAULT 'لا' COMMENT 'تم قراءته',
  `Draft` enum('نعم','لا') NOT NULL DEFAULT 'لا' COMMENT 'مسودة',
  `Deleted_S` enum('غير محذوف','مؤقت','نهائي') NOT NULL DEFAULT 'غير محذوف' COMMENT 'حذف المرسل',
  `Deleted_R` enum('غير محذوف','مؤقت','نهائي') NOT NULL DEFAULT 'غير محذوف' COMMENT 'حذف المستلم',
  `Archives_S` enum('نعم','لا') NOT NULL DEFAULT 'لا' COMMENT 'أرشيف المرسل',
  `Archives_R` enum('نعم','لا') NOT NULL DEFAULT 'لا' COMMENT 'أرشيف المستلم',
  `Date_Sene` datetime DEFAULT CURRENT_TIMESTAMP COMMENT 'وقت الإرسال',
  `Date_Delete_S` date DEFAULT NULL COMMENT 'ناريخ الحذف من قبل المرسل',
  `Date_Delete_R` date DEFAULT NULL COMMENT 'تاريخ الحذف من قبل المستلم',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `mail`
--

INSERT INTO `mail` (`id`, `Sender`, `Recipient`, `Subject`, `Details`, `Reply`, `Readable`, `Draft`, `Deleted_S`, `Deleted_R`, `Archives_S`, `Archives_R`, `Date_Sene`, `Date_Delete_S`, `Date_Delete_R`) VALUES
(1, 'mhnd', 'ghalib', 'تصحيح البيانات', NULL, 0, 'لا', 'لا', 'غير محذوف', 'غير محذوف', 'لا', 'لا', '2018-09-11 00:00:00', NULL, NULL),
(2, 'galib', 'mhnd', '', NULL, 0, 'لا', 'نعم', 'مؤقت', 'غير محذوف', 'لا', 'لا', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `pass`
--

CREATE TABLE IF NOT EXISTS `pass` (
  `id` int(11) NOT NULL COMMENT 'ت',
  `Name1` varchar(150) NOT NULL COMMENT 'الاسم',
  `Mail` varchar(60) NOT NULL COMMENT 'البريد',
  `Depr` varchar(150) DEFAULT NULL COMMENT 'القسم',
  `Phone1` varchar(16) DEFAULT NULL COMMENT 'الهاتف',
  `Date_Sent` datetime DEFAULT NULL COMMENT 'تاريخ الطلب',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL COMMENT 'ت',
  `Name1` varchar(50) NOT NULL COMMENT 'الاسم الاول',
  `Name2` varchar(50) NOT NULL COMMENT 'الاسم الاخر',
  `FullName` varchar(150) DEFAULT NULL COMMENT 'الاسم الكامل',
  `Mail` varchar(60) NOT NULL COMMENT 'البريد',
  `Passowrd` varchar(20) NOT NULL COMMENT 'كلمة المرور',
  `Pass_Temporary` enum('نعم','لا') DEFAULT 'نعم' COMMENT 'كلمة المرور مؤقتة',
  `Depr` varchar(150) DEFAULT NULL COMMENT 'القسم',
  `Enable` enum('نعم','لا') NOT NULL DEFAULT 'نعم' COMMENT 'مفعل',
  `Phone1` varchar(16) DEFAULT NULL COMMENT 'الهاتف1',
  `Phone2` varchar(16) DEFAULT NULL COMMENT 'الهاتف2',
  `Admin` enum('نعم','لا') NOT NULL DEFAULT 'لا' COMMENT 'مسؤول البريد',
  `Date_ L_Seen` date DEFAULT NULL COMMENT 'اخر ظهور',
  PRIMARY KEY (`id`),
  UNIQUE KEY `Mail` (`Mail`),
  UNIQUE KEY `Passowrd` (`Passowrd`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `Name1`, `Name2`, `FullName`, `Mail`, `Passowrd`, `Pass_Temporary`, `Depr`, `Enable`, `Phone1`, `Phone2`, `Admin`, `Date_ L_Seen`) VALUES
(1, 'mhnd1', 'talb1', NULL, '11', '11', 'نعم', NULL, 'نعم', NULL, NULL, '', '0000-00-00'),
(2, 'mhnd2', 'talb2', NULL, '22', '22', 'نعم', NULL, 'نعم', NULL, NULL, '', '0000-00-00'),
(3, 'mhnd3', 'talb3', NULL, '33', '33', 'نعم', NULL, 'نعم', NULL, NULL, '', '0000-00-00'),
(4, 'mhnd4', 'talb4', NULL, '44', '44', 'نعم', NULL, 'نعم', NULL, NULL, '', '0000-00-00'),
(5, 'mhnd5', 'talb5', NULL, '55', '55', 'نعم', NULL, 'نعم', NULL, NULL, 'نعم', '0000-00-00'),
(6, 'mhnd6', 'talb6', NULL, '66', '66', 'نعم', NULL, 'نعم', NULL, NULL, 'نعم', '2018-09-16'),
(7, 'mhnd7', 'talb7', NULL, '77', '77', 'نعم', NULL, 'نعم', NULL, NULL, 'نعم', '2018-09-16'),
(8, 'mhnd8', 'talb8', NULL, '88', '88', 'نعم', NULL, 'نعم', NULL, NULL, 'نعم', '2018-09-16'),
(9, 'mhnd9', 'talb9', NULL, '99', '99', 'نعم', NULL, 'نعم', NULL, NULL, 'نعم', '2018-09-16'),
(10, 'mhnd10', 'talb10', NULL, '1010', '1010', 'نعم', NULL, 'نعم', NULL, NULL, 'نعم', '2018-09-16'),
(11, 'mhnd11', 'talb11', NULL, '1111', '1111', 'نعم', NULL, 'نعم', NULL, NULL, 'نعم', '2018-09-16');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
