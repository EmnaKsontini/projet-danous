-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 19, 2018 at 02:35 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `danousdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `ecran`
--

DROP TABLE IF EXISTS `ecran`;
CREATE TABLE IF NOT EXISTS `ecran` (
  `Reference` varchar(255) NOT NULL,
  `Categorie` varchar(255) NOT NULL,
  `Marque` varchar(255) NOT NULL,
  `Prix` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `Garantie` int(11) NOT NULL,
  `Taille` varchar(255) NOT NULL,
  `Resolution` varchar(255) NOT NULL,
  `Contraste` varchar(255) NOT NULL,
  `TempsRep` varchar(255) NOT NULL,
  `interface` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ecran`
--

INSERT INTO `ecran` (`Reference`, `Categorie`, `Marque`, `Prix`, `stock`, `Garantie`, `Taille`, `Resolution`, `Contraste`, `TempsRep`, `interface`) VALUES
('LI2054', 'Ecran', 'Lenovo', 245, 5, 1, '19.5\" LED', '1600 x 900 dpi', '1000:1', '5 ms', 'VGA, DVI'),
('E2016H', 'Ecran', 'Dell', 262, 3, 1, '19.5\" HD LED ', '1600 x 900 à 60 Hz', '1000:1', '5 ms', 'VGA-DP'),
('LS22F350FH', 'Ecran', 'Samsung', 275, 6, 1, '21.5\" LED Full HD', '1920 x 1080 à 60Hz', '1000:1', '5 ms', 'HDMI,VGA'),
('E2014H', 'Ecran', 'Dell', 300, 2, 1, '20\" LED', '1600 x 900', '1000: 1', '5 ms', 'VGA, DVI-D (HDCP)'),
('2412', 'Ecran', 'Versus', 329, 3, 1, 'LED 23.6', 'FullHD (1920 x 1080)', '(DCR) 1000000:1', '2 ms', 'DVI'),
('E2283HS-B1', 'Ecran', 'iiyama', 379, 5, 1, 'LED 21.5\" Full HD', '1920x1080 pixels', '5000000:1', '1 ms', 'DVI,VGA');

-- --------------------------------------------------------

--
-- Table structure for table `pc`
--

DROP TABLE IF EXISTS `pc`;
CREATE TABLE IF NOT EXISTS `pc` (
  `Reference` varchar(255) NOT NULL,
  `Categorie` varchar(255) NOT NULL,
  `Marque` varchar(255) NOT NULL,
  `Prix` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `Grantie` int(11) NOT NULL,
  `Processeur` varchar(255) NOT NULL,
  `Memoire Cache` varchar(255) NOT NULL,
  `Memoire Ram` varchar(255) NOT NULL,
  `Connecteurs` varchar(255) NOT NULL,
  `Carte graphique` varchar(255) NOT NULL,
  `Ecran` varchar(255) NOT NULL,
  `Systeme d'exploitation` varchar(255) NOT NULL,
  `Disque Dur` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pc`
--

INSERT INTO `pc` (`Reference`, `Categorie`, `Marque`, `Prix`, `stock`, `Grantie`, `Processeur`, `Memoire Cache`, `Memoire Ram`, `Connecteurs`, `Carte graphique`, `Ecran`, `Systeme d'exploitation`, `Disque Dur`) VALUES
('80WK00ATFG', 'PC Gamer', 'Lenovo', 1969, 5, 3, 'Intel Core i5', '6 Mo', '8 Go', '2xUSB 3.0 / 1xUSB 2.0 / 1xHDMI / 1xUSB Type C (3.1)', 'NVIDIA GeForce', '15.6', 'Free Dos', '1To'),
('X550VX I7-7700HQ', 'PC Gamer', 'Asus', 2149, 3, 1, 'Intel Core i7', '6 Mo', '4 Go', '1 x COMBO audio jack 1 x VGA port/Mini D-sub 15-pin for externalmonitor 2 x USB 3.0 port(s) 1 x USB 2.0 port(s) 1 x RJ45 LAN Jack for LAN insert 1 x HDMI', 'Graphique Integree', '15.6\"', 'Free Dos', '1 To'),
('GL553VD', 'PC Gamer', 'Asus', 2779, 2, 1, 'Intel Core i7', '6 Mo', '8 Go', '1x sortie casque et audio-in Combo Jack -USB 3.1 Type C - 1 x USB 2.0, 2 x USB 3.0- HDMI - RJ45', 'NVIDIA GeForce', '15.6\"', 'Windows', '1 To'),
('3RM82EA', 'PC Gamer', 'Hp', 2229, 6, 1, 'Intel Core i7', '6 Mo', '12 Go', '	1 port HDMI; 1 prise combo casque/microphone; 1 port USB 2.0; 2 ports USB 3.1 1e generation, 1 port RJ-45', 'NVIDIA GeForce', '15.6\"', 'Free Dos', '1 To'),
('GL62M-7RDX-2036XFR', 'PC Gamer', 'Msi', 2099, 6, 1, 'Intel Core i5', '6 Mo', '8 Go', ' -1xUSB3.1+ 2xUSB3.0 - HDMI', 'NVIDIA GeForce', '15.6\"', 'Free Dos', '1 To'),
('CN577044G-10606G', 'PC Gamer', 'Dell', 3399, 2, 1, 'Intel Core i7', '6 Mo', '16 Go', '1 x HDMI 2.0 - 3 x ports USB 3.1 Gen. 1 Type-A - 1 x port Thunderbolt™ 3 (USB 3.1 Gen. 2 Type-C™ avec prise en charge des technologies DisplayPort et Thunderbolt à 40 Gbit/s)', 'NVIDIA GeForce', '15.6\"', 'Linux', '1 To + 256 Go SSD'),
('X541NA-GO017', 'PC Portable', 'Asus', 639, 12, 1, 'Intel Dual Core', '2Mo', '4 Go', '1xHDMI, 1xUSB 3.0', 'Graphique Integree', '15.6\" ', 'Free Dos', '500 Go');

-- --------------------------------------------------------

--
-- Table structure for table `telephone`
--

DROP TABLE IF EXISTS `telephone`;
CREATE TABLE IF NOT EXISTS `telephone` (
  `Reference` varchar(255) NOT NULL,
  `Categorie` varchar(255) NOT NULL,
  `Marque` varchar(255) NOT NULL,
  `Prix` int(11) NOT NULL,
  `Stock` int(11) NOT NULL,
  `Garantie` int(11) NOT NULL,
  `Dimension` varchar(255) NOT NULL,
  `Capacite de stockage` varchar(255) NOT NULL,
  `RAM` varchar(255) NOT NULL,
  `Appareil Photo Arriere` varchar(255) NOT NULL,
  `Appareil photo fronatle` varchar(255) NOT NULL,
  `Resolution` varchar(255) NOT NULL,
  `Batterie` varchar(255) NOT NULL,
  `Frequence du processeur` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `telephone`
--

INSERT INTO `telephone` (`Reference`, `Categorie`, `Marque`, `Prix`, `Stock`, `Garantie`, `Dimension`, `Capacite de stockage`, `RAM`, `Appareil Photo Arriere`, `Appareil photo fronatle`, `Resolution`, `Batterie`, `Frequence du processeur`) VALUES
('Galaxy S8 plus', 'Smartphone', 'Samsung', 2500, 10, 1, '159.5 x 73.4 x 8.1 mm', '64 Go', '4 Go', '12MP', '8MP', '1440 x 2960 pixels', '3500mAh', '2.3 GHz'),
('Galaxy S8', 'Smartphone', 'Samsung', 2200, 8, 1, '148.9 x 68.1 x 8 mm', '64 Go', '4 Go', '12MP', '8MP', '1440 x 2960 pixels', '3000mAh', '2.3 GHz'),
('Samsung Galaxy J5', 'Smartphone', 'Samsung', 500, 50, 1, '145.8 x 72.3 x 8.1 mm', '16 Go', '2 Go', '13MP', '5MP', '720 x 1280 pixels', '3100mAh', '1.2 GHz'),
('Mate 9', 'Smartphone', 'Huawei', 1800, 4, 1, '156.9 x 78.9 x 7.9 mm', '64 Go', '4 Go', 'Dual 20 MP +12 MP', '8MP', '1080 x 1920 pixels', '4000mAh', '2.3 GHz'),
('P9 Lite', 'Smartphone', 'Huawei', 600, 2, 1, '146.80 x 72.60 x 7.50 mm', '16 Go', '3 Go', '13MP', '8MP', '1080 x 1920 pixels', '3000mAh', '1.2 GHz'),
('Iphone 8 PLUS', 'Smartphone', 'Apple', 2800, 2, 1, '158,4 x 78,1 x 7,5 mm', '64/256 Go', '3 Go', '12MP', '7MP', '1920 x 1080 pixels', '2691 mAh', '2.4 GHz'),
('Iphone 7', 'Smartphone', 'Apple', 2500, 4, 1, '138.3 x 67.1 x 7.1 mm', '128 Go', '2 Go', '12MP', '7MP', '750 X 1334 pixels', '1960mAh', '2.34 GHz');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
