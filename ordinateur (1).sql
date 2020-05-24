-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 24, 2020 at 10:57 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trouvetonordi`
--

-- --------------------------------------------------------

--
-- Table structure for table `ordinateur`
--

DROP TABLE IF EXISTS `ordinateur`;
CREATE TABLE IF NOT EXISTS `ordinateur` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `processeur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `taille` decimal(8,2) DEFAULT NULL,
  `poids` int(11) DEFAULT NULL,
  `disque` int(11) DEFAULT NULL,
  `ssd` int(11) DEFAULT NULL,
  `graphique` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `autonomie` int(11) DEFAULT NULL,
  `ram` int(11) DEFAULT NULL,
  `systeme` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dalle` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tactile` tinyint(1) DEFAULT NULL,
  `resolution` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idMarque` int(11) NOT NULL,
  `usba` int(11) DEFAULT NULL,
  `usbc` int(11) DEFAULT NULL,
  `jack` int(11) DEFAULT NULL,
  `hdmi` int(11) DEFAULT NULL,
  `sd` int(11) DEFAULT NULL,
  `microsd` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ordinateur`
--

INSERT INTO `ordinateur` (`id`, `photo`, `name`, `processeur`, `taille`, `poids`, `disque`, `ssd`, `graphique`, `autonomie`, `ram`, `systeme`, `dalle`, `tactile`, `resolution`, `idMarque`, `usba`, `usbc`, `jack`, `hdmi`, `sd`, `microsd`) VALUES
(3, 'https://c0.lestechnophiles.com/images.frandroid.com/wp-content/uploads/2020/02/huawei-matebook-14-2020-frandroid.png?resize=580,580', 'Huawei Matebook D 2020', 'AMD Ryzen 5 3500U', '14.00', 1, NULL, 512, 'AMD Radeon Vega 8', 18, 8, 'Windows 10 family', 'écran brillant', NULL, '1920 x 1080', 1, 2, 1, 1, 1, NULL, NULL),
(4, 'https://c1.lestechnophiles.com/images.frandroid.com/wp-content/uploads/2020/01/dell-xps-13-2020.png?resize=580,580', 'Dell XPS 13', 'Core i5-10210U Intel', '13.40', 1230, NULL, 256, 'Intel UHD', NULL, 16, 'windows', 'LCD', 1, '1920 x 1200', 2, 2, 1, 1, 1, NULL, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
