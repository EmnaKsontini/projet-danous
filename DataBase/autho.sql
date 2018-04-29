-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 29 avr. 2018 à 15:14
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
-- Structure de la table `autho`
--

DROP TABLE IF EXISTS `autho`;
CREATE TABLE IF NOT EXISTS `autho` (
  `login` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `passwd` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `pays` varchar(50) NOT NULL,
  `age` int(50) NOT NULL,
  `pointdanous` int(11) DEFAULT '0',
  PRIMARY KEY (`login`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `autho`
--

INSERT INTO `autho` (`login`, `nom`, `prenom`, `passwd`, `mail`, `pays`, `age`, `pointdanous`) VALUES
('MERIEM', 'Meriem', 'Ben', '555555', 'meriembenchaaben97@gmail.com', 'Tunisia', 50, NULL),
('ADMIN', 'ADMIN', 'ADMIN', '00000000', '', '', 18, NULL),
('Rymouch', 'rym', 'jamila', 'beautiful', 'rymksontini03@mail.com', 'allemand', 19, NULL),
('sousou', 'kk', 'lll', '1234', '', '', 18, NULL),
('emna', 'emna', 'ksontini', '12345', '', '', 18, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
