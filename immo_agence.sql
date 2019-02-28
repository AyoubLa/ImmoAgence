-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 28 fév. 2019 à 16:40
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `immo_agence`
--

-- --------------------------------------------------------

--
-- Structure de la table `migration_versions`
--

DROP TABLE IF EXISTS `migration_versions`;
CREATE TABLE IF NOT EXISTS `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migration_versions`
--

INSERT INTO `migration_versions` (`version`, `executed_at`) VALUES
('20190227155410', '2019-02-27 15:54:35'),
('20190227155714', '2019-02-27 15:58:28'),
('20190227162114', '2019-02-27 16:21:39');

-- --------------------------------------------------------

--
-- Structure de la table `property`
--

DROP TABLE IF EXISTS `property`;
CREATE TABLE IF NOT EXISTS `property` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `property_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_description` longtext COLLATE utf8mb4_unicode_ci,
  `property_created_at` datetime NOT NULL,
  `property_sold` tinyint(1) NOT NULL DEFAULT '0',
  `property_area` int(11) NOT NULL,
  `property_rooms` int(11) NOT NULL,
  `property_badrooms` int(11) NOT NULL,
  `property_floor` int(11) NOT NULL,
  `property_price` int(11) NOT NULL,
  `property_heat` int(11) NOT NULL,
  `property_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_postal_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `property`
--

INSERT INTO `property` (`id`, `property_title`, `property_description`, `property_created_at`, `property_sold`, `property_area`, `property_rooms`, `property_badrooms`, `property_floor`, `property_price`, `property_heat`, `property_city`, `property_address`, `property_postal_code`) VALUES
(1, 'Mon premier bien', 'Une petite description', '2019-02-27 16:39:57', 0, 60, 4, 3, 4, 200000, 1, 'Montpellier', '15 Boulevard Gambetta', '34000'),
(2, 'Maison', 'Maison agréable', '2019-02-27 00:00:00', 0, 100, 5, 2, 1, 200000, 1, 'London', '12 new road', '42000'),
(3, 'Villa', 'Villa de lux en face à la mer', '2019-02-28 00:00:00', 0, 700, 18, 5, 0, 24000000, 0, 'California', 'bla bla bla bla', '54000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
