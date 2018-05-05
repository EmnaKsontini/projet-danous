-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 05 mai 2018 à 13:55
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `danousdatabase`
--

-- --------------------------------------------------------

--
-- Structure de la table `achat`
--

DROP TABLE IF EXISTS `achat`;
CREATE TABLE IF NOT EXISTS `achat` (
  `reference` text,
  `price` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `Client` text,
  `date` varchar(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `achat`
--

INSERT INTO `achat` (`reference`, `price`, `quantity`, `Client`, `date`) VALUES
('80WK00ATFG', 1969, 2, 'emna', '2018/05/04'),
('X550VX I7-7700HQ', 2149, 2, 'emna', '2018/05/04'),
('3RM82EA', 2229, 1, 'emna', '2018/05/04'),
('Samsung Galaxy J5', 500, 1, 'emna', '2018/05/04'),
('80WK00ATFG', 1969, 2, 'emna', '2018/05/04'),
('X550VX I7-7700HQ', 2149, 2, 'emna', '2018/05/04'),
('3RM82EA', 2229, 1, 'emna', '2018/05/04'),
('Samsung Galaxy J5', 500, 1, 'emna', '2018/05/04');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
