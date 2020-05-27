-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  mer. 27 mai 2020 à 08:38
-- Version du serveur :  5.7.25
-- Version de PHP :  7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `newLaravel`
--

-- --------------------------------------------------------

--
-- Structure de la table `achats`
--

CREATE TABLE `achats` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_ordinateur` int(11) NOT NULL,
  `id_vendeur` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `url` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `achats`
--

INSERT INTO `achats` (`id`, `id_ordinateur`, `id_vendeur`, `prix`, `url`) VALUES
(1, 3, 1, 549, 'https://consumer.huawei.com/fr/laptops/matebook-d-15-amd/buy/?gclid=CjwKCAjwtqj2BRBYEiwAqfzurzNnQIMb_cOyGHFMJ-TX8V5ERei9FsnJb4lxQk12GZHPc0oqc_hrAhoCyPYQAvD_BwE'),
(2, 3, 2, 699, 'http://tiny.cc/p5aopz'),
(5, 3, 3, 599, 'https://www.boulanger.com/ref/1141332?xtor=SEC-4487-GOO-[]&gclsrc=aw.ds&gclid=CjwKCAjw2a32BRBXEiwAUcugiNHFjemSlQFH7TrNtp7qGsObHCQOBwOadvRQvTQti5JFpytU827GshoC_SoQAvD_BwE'),
(15, 5, 5, 1749, 'https://www.microsoft.com/fr-fr/p/surface-laptop-3-pour-entreprises/93N7B0KDZNCC/JF3R?activetab=techspecs&source=googleshopping&ef_id=CjwKCAjw2a32BRBXEiwAUcugiMr9wOBhHC44icssv59Uh-FKc1JvNrHNK2yJb1MCDoSKyCfZoXCMvRoCHBIQAvD_BwE:G:s&s_kwcid=AL!4249!3!259921102263!!!g!890853742450!&ef_id=CjwKCAjw2a32BRBXEiwAUcugiMr9wOBhHC44icssv59Uh-FKc1JvNrHNK2yJb1MCDoSKyCfZoXCMvRoCHBIQAvD_BwE:G:s&OCID=AID2000007_SEM_CjwKCAjw2a32BRBXEiwAUcugiMr9wOBhHC44icssv59Uh-FKc1JvNrHNK2yJb1MCDoSKyCfZoXCMvRoCHBIQAvD_BwE:G:s'),
(16, 7, 3, 249, 'https://www.boulanger.com/ref/1145181'),
(17, 8, 3, 269, 'https://www.boulanger.com/ref/1129677'),
(18, 9, 5, 449, 'https://www.boulanger.com/ref/1143111'),
(19, 10, 2, 5000, 'https://www.darty.com/nav/achat/informatique/ordinateur_portable/portable/asus_asus_asus_zenbook_pro_duo_ux581gv_h2002r_39_62_cm_15_6_zoll_celest_noir__MK15028236681.html'),
(20, 11, 2, 3540, 'https://www.darty.com/nav/achat/informatique/ordinateur_portable-portable/portable/asus_griffin-gz75_1.html'),
(21, 12, 4, 1499, 'https://www.apple.com/fr/shop/buy-mac/macbook-pro/13-pouces-gris-sid%C3%A9ral-processeur-quadric%C5%93ur-%C3%A0-1,4-ghz-(turbo-boost-jusqu%E2%80%99%C3%A0-3,9-ghz)-256go#');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

CREATE TABLE `marque` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `marque`
--

INSERT INTO `marque` (`id`, `name`, `url`) VALUES
(1, 'Huawei', 'https://www.huawei.com/fr/'),
(2, 'Dell', 'https://www.dell.com/fr-fr'),
(3, 'Apple', 'https://www.apple.com/fr/'),
(4, 'Microsoft', 'https://www.microsoft.com/fr-fr/store/collections/laptopsfr-fr'),
(5, 'Asus', 'https://www.asus.com/fr/'),
(6, 'Lenovo', 'https://www.lenovo.com/fr/fr/pc/'),
(7, 'Chromebook', 'https://www.google.fr/chromebook/'),
(8, 'Acer', 'https://www.acer.com/ac/fr/FR/content/home');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
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
-- Structure de la table `ordinateur`
--

CREATE TABLE `ordinateur` (
  `id` int(10) UNSIGNED NOT NULL,
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
  `microsd` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `ordinateur`
--

INSERT INTO `ordinateur` (`id`, `photo`, `name`, `processeur`, `taille`, `poids`, `disque`, `ssd`, `graphique`, `autonomie`, `ram`, `systeme`, `dalle`, `tactile`, `resolution`, `idMarque`, `usba`, `usbc`, `jack`, `hdmi`, `sd`, `microsd`) VALUES
(3, 'https://c0.lestechnophiles.com/images.frandroid.com/wp-content/uploads/2020/02/huawei-matebook-14-2020-frandroid.png?resize=580,580', 'Huawei Matebook D 2020', 'AMD Ryzen 5 3500U', '14.00', 1, NULL, 512, 'AMD Radeon Vega 8', 18, 8, 'Windows 10 family', 'écran brillant', NULL, '1920 x 1080', 1, 2, 1, 1, 1, NULL, NULL),
(4, 'https://c1.lestechnophiles.com/images.frandroid.com/wp-content/uploads/2020/01/dell-xps-13-2020.png?resize=580,580', 'Dell XPS 13', 'Core i5-10210U Intel', '13.40', 1230, NULL, 256, 'Intel UHD', NULL, 16, 'windows', 'LCD', 1, '1920 x 1200', 2, 2, 1, 1, 1, NULL, 1),
(5, 'https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE3oT8Y?ver=1a35&q=90&m=6&h=270&w=270&b=%23FFFFFFFF&f=jpg&o=f&aim=true', 'Surface Laptop 3', 'Intel Core i5', '13.00', 1, NULL, 256, 'Carte graphique Intel® Iris™ Plus', 11, 16, 'Windows 10 Pro', 'brillant', 1, '2256 x 1504', 4, 1, 1, 1, NULL, NULL, NULL),
(6, 'https://boulanger.scene7.com/is/image/Boulanger/bfr_overlay?layer=comp&$t1=&$product_id=Boulanger/0194632283815_h_f_l_0&wid=350&hei=350', 'Ideapad Slim 1-14A ST05 815', 'AMD A4-9120', '14.00', 1, 0, 0, '0', 8, 4, 'Windows 10S', 'Antireflet', 0, '1366 x 768', 1, 2, 0, 0, 1, 0, 1),
(7, 'https://boulanger.scene7.com/is/image/Boulanger/bfr_overlay?layer=comp&$t1=&$product_id=Boulanger/0194632283815_h_f_l_0&wid=350&hei=350', 'Ideapad Slim 1-14A ST05 815', 'AMD A4-9120', '14.00', 1, NULL, NULL, '0', 8, 4, 'Windows 10S', 'Antireflet', NULL, '1366 x 768', 6, 2, NULL, NULL, 1, NULL, 1),
(8, 'https://cdn.comparez-malin.fr/img/packard-bell/2020/20259/acer-chromebook-314-cb314-1.jpg', 'Chromebook Packard Bell CB314-001', 'Intel Celeron N4000 : 1,1 Ghz / Turboboost jusqu\'à 2,6 Ghz / 2 coeurs 4 mo de cache', '14.00', 2, NULL, NULL, 'Intel HD Graphics (contrôleur)', 13, 4, 'Chrome OS (Google)', 'mat', NULL, '1366 x 768 ', 7, 2, 4, 1, NULL, 1, 1),
(9, 'https://boulanger.scene7.com/is/image/Boulanger/bfr_overlay?layer=comp&$t1=&$product_id=Boulanger/4710180549751_h_f_l_0&wid=350&hei=350', 'Ordinateur portable Acer Aspire A315-34-P4Q6 Noir', 'Intel Pentium N5000 : 1,1 GHz ; 2,7 GHz en rafale / 4 coeurs / 4 Mo de mémoire cache', '15.60', 2, NULL, 225, 'Intel UHD Graphics 605 (contrôleur)', 10, 4, 'Windows 10 Famille', 'mat', 0, '1366 x 768 ', 8, 2, 1, 1, 1, NULL, NULL),
(10, 'https://image.darty.com/darty?type=image&source=/market/2019/09/21/mkp_ynuXnwi1Xim2Fg.jpeg&width=400&height=300&quality=70', 'ZENBOOK PRO DUO UX581GV-H2002R, 39,62 CM (15,6 ZOLL) CELEST NOIR', 'Intel® Core™ i7 de 9e génération', '15.60', 2, 1000, NULL, 'NVIDIA RTX 2060', NULL, 16, 'Windows 10', '', 1, '3840 x 2160', 5, 2, 1, 1, 1, NULL, NULL),
(11, 'https://image.darty.com/informatique/ordinateur_portable-portable/portable/asus_griffin-gz75_1_s1901214644476A_123734189.jpg', 'ASUS GRIFFIN-GZ755GX-E507', 'Intel® Core™ i7-8750H', '17.30', 5, 1000, 512, 'NVIDIA GeForce RTX 2080', NULL, 16, 'Windows 10', '', NULL, '1920 x 1080', 5, 2, 1, 1, 1, 1, NULL),
(12, 'https://www.iphon.fr/app/uploads/2020/05/macbook-pro-2020-13-pouces-apple-1.jpg', 'MacBook Pro 13\"', 'Intel Core i5 quadricœur de 8e génération', '13.30', 1, NULL, 256, 'Intel Iris Plus Graphics 645', 10, 8, 'macOs', 'Retina', NULL, '2 560 x 1 600', 3, NULL, 4, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.fr', NULL, '$2y$10$LXyYEIYZmOXd13MFjEoBNOVipoW2ElOCrSAFFQK8e8u9nTG40S0KC', 'LO2bWhdDID6BLgTMqWqb2yrybLV2LHQZz3dLbO5FDOFS3kPoKo5ecwN5637a', '2020-05-25 10:50:34', '2020-05-25 10:50:34');

-- --------------------------------------------------------

--
-- Structure de la table `utilisation`
--

CREATE TABLE `utilisation` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `utilisation`
--

INSERT INTO `utilisation` (`id`, `description`) VALUES
(1, 'J\'utilise mon ordinateur pour lire et écrire mes mails, je surfe sur internet et je me sers d\'un traitement de texte (Word par exemple).'),
(2, 'Mon pc c\'est ma console. Fortnite, Fifa, Call Of Duty, les Sims, toutes ses franchises sont pour moi des amis fidèles.'),
(3, 'Mon ordinateur me sert à éditer mes vidéos pour devenir une star sur Youtube. Je fais aussi des petites créations pour Instagram, j\'ai 50 followers. La Suite Adobe et ces alliés sont ma vocation.'),
(4, 'Je me sers de mon ordinateur pour programmer, ma vie c\'est de voir défiler des lignes de code toute la journée.'),
(5, 'Un micro, une guitare, un piano, ma voix, mon pc. Voilà ce qui me porte. Je fais de la musique du matin au soir et du soir au matin (mes voisins m\'aiment pour cela d\'ailleurs). Mon ordinateur enregistre ma voix et je compose grâce à une carte son externe.');

-- --------------------------------------------------------

--
-- Structure de la table `utilisation_ordinateur`
--

CREATE TABLE `utilisation_ordinateur` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_ordinateur` int(11) NOT NULL,
  `id_utilisation` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `vendeurs`
--

CREATE TABLE `vendeurs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `vendeurs`
--

INSERT INTO `vendeurs` (`id`, `name`) VALUES
(1, 'Huawei store'),
(2, 'Darty'),
(3, 'Boulanger'),
(4, 'Apple store'),
(5, 'Microsoft store');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `achats`
--
ALTER TABLE `achats`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `marque`
--
ALTER TABLE `marque`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ordinateur`
--
ALTER TABLE `ordinateur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(250));

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisation`
--
ALTER TABLE `utilisation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisation_ordinateur`
--
ALTER TABLE `utilisation_ordinateur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vendeurs`
--
ALTER TABLE `vendeurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `achats`
--
ALTER TABLE `achats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `marque`
--
ALTER TABLE `marque`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `ordinateur`
--
ALTER TABLE `ordinateur`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `utilisation`
--
ALTER TABLE `utilisation`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `utilisation_ordinateur`
--
ALTER TABLE `utilisation_ordinateur`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `vendeurs`
--
ALTER TABLE `vendeurs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
