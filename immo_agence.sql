-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 28 fév. 2019 à 00:34
-- Version du serveur :  5.7.21
-- Version de PHP :  7.1.16

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
('20190227230842', '2019-02-27 23:08:48');

-- --------------------------------------------------------

--
-- Structure de la table `property`
--

DROP TABLE IF EXISTS `property`;
CREATE TABLE IF NOT EXISTS `property` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `property_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_description` longtext COLLATE utf8mb4_unicode_ci,
  `property_area` int(11) NOT NULL,
  `property_rooms` int(11) NOT NULL,
  `property_badrooms` int(11) NOT NULL,
  `property_floor` int(11) NOT NULL,
  `property_price` int(11) NOT NULL,
  `property_heat` int(11) NOT NULL,
  `property_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_postal_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_created_at` datetime NOT NULL,
  `property_sold` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `property`
--

INSERT INTO `property` (`id`, `property_title`, `property_description`, `property_area`, `property_rooms`, `property_badrooms`, `property_floor`, `property_price`, `property_heat`, `property_city`, `property_address`, `property_postal_code`, `property_created_at`, `property_sold`) VALUES
(1, 'Mon premier bien', 'petite description', 80, 5, 4, 4, 230000, 1, 'Montpellier', '12 Boulevard Gambetta', '34000', '2019-02-27 23:55:55', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
