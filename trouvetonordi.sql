-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 25, 2020 at 12:35 PM
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
-- Table structure for table `achats`
--

DROP TABLE IF EXISTS `achats`;
CREATE TABLE IF NOT EXISTS `achats` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_ordinateur` int(11) NOT NULL,
  `id_vendeur` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `url` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `achats`
--

INSERT INTO `achats` (`id`, `id_ordinateur`, `id_vendeur`, `prix`, `url`) VALUES
(1, 3, 1, 549, 'https://consumer.huawei.com/fr/laptops/matebook-d-15-amd/buy/?gclid=CjwKCAjwtqj2BRBYEiwAqfzurzNnQIMb_cOyGHFMJ-TX8V5ERei9FsnJb4lxQk12GZHPc0oqc_hrAhoCyPYQAvD_BwE'),
(2, 3, 2, 699, 'http://tiny.cc/p5aopz'),
(5, 3, 3, 599, 'https://www.boulanger.com/ref/1141332?xtor=SEC-4487-GOO-[]&gclsrc=aw.ds&gclid=CjwKCAjw2a32BRBXEiwAUcugiNHFjemSlQFH7TrNtp7qGsObHCQOBwOadvRQvTQti5JFpytU827GshoC_SoQAvD_BwE'),
(15, 5, 5, 1749, 'https://www.microsoft.com/fr-fr/p/surface-laptop-3-pour-entreprises/93N7B0KDZNCC/JF3R?activetab=techspecs&source=googleshopping&ef_id=CjwKCAjw2a32BRBXEiwAUcugiMr9wOBhHC44icssv59Uh-FKc1JvNrHNK2yJb1MCDoSKyCfZoXCMvRoCHBIQAvD_BwE:G:s&s_kwcid=AL!4249!3!259921102263!!!g!890853742450!&ef_id=CjwKCAjw2a32BRBXEiwAUcugiMr9wOBhHC44icssv59Uh-FKc1JvNrHNK2yJb1MCDoSKyCfZoXCMvRoCHBIQAvD_BwE:G:s&OCID=AID2000007_SEM_CjwKCAjw2a32BRBXEiwAUcugiMr9wOBhHC44icssv59Uh-FKc1JvNrHNK2yJb1MCDoSKyCfZoXCMvRoCHBIQAvD_BwE:G:s');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `marque`
--

DROP TABLE IF EXISTS `marque`;
CREATE TABLE IF NOT EXISTS `marque` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `marque`
--

INSERT INTO `marque` (`id`, `name`, `url`) VALUES
(1, 'Huawei', 'https://www.huawei.com/fr/'),
(2, 'Dell', 'https://www.dell.com/fr-fr'),
(3, 'Apple', 'https://www.apple.com/fr/'),
(4, 'Microsoft', 'https://www.microsoft.com/fr-fr/store/collections/laptopsfr-fr'),
(5, 'Asus', 'https://www.asus.com/fr/');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_05_20_194143_ordinateur', 1),
(5, '2020_05_21_062424_vendeurs', 1),
(6, '2020_05_21_062528_achats', 1),
(7, '2020_05_21_062651_utilisation', 1),
(8, '2020_05_21_062721_utilisation_ordinateur', 1),
(9, '2020_05_21_075612_marque', 1);

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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ordinateur`
--

INSERT INTO `ordinateur` (`id`, `photo`, `name`, `processeur`, `taille`, `poids`, `disque`, `ssd`, `graphique`, `autonomie`, `ram`, `systeme`, `dalle`, `tactile`, `resolution`, `idMarque`, `usba`, `usbc`, `jack`, `hdmi`, `sd`, `microsd`) VALUES
(3, 'https://c0.lestechnophiles.com/images.frandroid.com/wp-content/uploads/2020/02/huawei-matebook-14-2020-frandroid.png?resize=580,580', 'Huawei Matebook D 2020', 'AMD Ryzen 5 3500U', '14.00', 1, NULL, 512, 'AMD Radeon Vega 8', 18, 8, 'Windows 10 family', 'écran brillant', NULL, '1920 x 1080', 1, 2, 1, 1, 1, NULL, NULL),
(4, 'https://c1.lestechnophiles.com/images.frandroid.com/wp-content/uploads/2020/01/dell-xps-13-2020.png?resize=580,580', 'Dell XPS 13', 'Core i5-10210U Intel', '13.40', 1230, NULL, 256, 'Intel UHD', NULL, 16, 'windows', 'LCD', 1, '1920 x 1200', 2, 2, 1, 1, 1, NULL, 1),
(5, 'https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE3oT8Y?ver=1a35&q=90&m=6&h=270&w=270&b=%23FFFFFFFF&f=jpg&o=f&aim=true', 'Surface Laptop 3', 'Intel Core i5', '13.00', 1, NULL, 256, 'Carte graphique Intel® Iris™ Plus', 11, 16, 'Windows 10 Pro', 'brillant', 1, '2256 x 1504', 4, 1, 1, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`(250))
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`) USING HASH
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'admin@admin.fr', NULL, '$2y$10$rzNq.NX72cfLtQr1RUoBOuwEH0Tqx6fpY2GA1jl/E.pdFpXhSZAPG', NULL, '2020-05-21 08:10:36', '2020-05-21 08:10:36');

-- --------------------------------------------------------

--
-- Table structure for table `utilisation`
--

DROP TABLE IF EXISTS `utilisation`;
CREATE TABLE IF NOT EXISTS `utilisation` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `utilisation_ordinateur`
--

DROP TABLE IF EXISTS `utilisation_ordinateur`;
CREATE TABLE IF NOT EXISTS `utilisation_ordinateur` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_ordinateur` int(11) NOT NULL,
  `id_utilisation` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendeurs`
--

DROP TABLE IF EXISTS `vendeurs`;
CREATE TABLE IF NOT EXISTS `vendeurs` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendeurs`
--

INSERT INTO `vendeurs` (`id`, `name`) VALUES
(1, 'Huawei sotre'),
(2, 'Darty'),
(3, 'Boulanger'),
(4, 'Apple store'),
(5, 'Microsoft store');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
