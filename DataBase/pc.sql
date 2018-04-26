-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 26, 2018 at 02:22 PM
-- Server version: 5.7.20-log
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
-- Table structure for table `pc`
--

DROP TABLE IF EXISTS `pc`;
CREATE TABLE IF NOT EXISTS `pc` (
  `Reference` varchar(255) NOT NULL,
  `type` varchar(20) NOT NULL,
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

INSERT INTO `pc` (`Reference`, `type`, `Categorie`, `Marque`, `Prix`, `stock`, `Grantie`, `Processeur`, `Memoire Cache`, `Memoire Ram`, `Connecteurs`, `Carte graphique`, `Ecran`, `Systeme d'exploitation`, `Disque Dur`) VALUES
('80WK00ATFG', 'pc', 'PC Gamer', 'Lenovo', 1969, 5, 3, 'Intel Core i5\r\n', '6 Mo', '8 Go', '2xUSB 3.0 / 1xUSB 2.0 / 1xHDMI / 1xUSB Type C (3.1)\r\n', 'NVIDIA GeForce\r\n', '15.6', 'Free Dos\r\n', '1To'),
('X550VX I7-7700HQ', 'pc', 'PC Gamer', 'Asus', 2149, 3, 1, 'Intel Core i7\r\n', '6 Mo', '4 Go', '1 x COMBO audio jack 1 x VGA port/Mini D-sub 15-pin for externalmonitor 2 x USB 3.0 port(s) 1 x USB 2.0 port(s) 1 x RJ45 LAN Jack for LAN insert 1 x HDMI', 'Graphique Intégrée\r\n', '15.6\"', 'Free Dos\r\n', '1 To'),
('GL553VD', 'pc', 'PC Gamer', 'Asus', 2779, 2, 1, 'Intel Core i7\r\n', '6 Mo\r\n', '8 Go\r\n', '1x sortie casque et audio-in Combo Jack -USB 3.1 Type C - 1 x USB 2.0, 2 x USB 3.0- HDMI - RJ45\r\n', 'NVIDIA GeForce\r\n', '15.6\"\r\n', 'Windows', '1 To'),
('3RM82EA', 'pc', 'PC Gamer', 'Hp', 2229, 6, 1, 'Intel Core i7\r\n', '6 Mo\r\n', '12 Go', '	1 port HDMI; 1 prise combo casque/microphone; 1 port USB 2.0; 2 ports USB 3.1 1e génération, 1 port RJ-45', 'NVIDIA GeForce\r\n', '15.6\"\r\n', 'Free Dos\r\n', '1 To'),
('GL62M-7RDX-2036XFR', 'pc', 'PC Gamer', 'Msi', 2099, 6, 1, 'Intel Core i5', '6 Mo\r\n', '8 Go\r\n', ' -1xUSB3.1+ 2xUSB3.0 - HDMI\r\n', 'NVIDIA GeForce\r\n', '15.6\"\r\n', 'Free Dos\r\n', '1 To'),
('CN577044G-10606G', 'pc', 'PC Gamer', 'Dell', 3399, 2, 1, 'Intel Core i7\r\n', '6 Mo\r\n', '16 Go\r\n', '1 x HDMI 2.0 - 3 x ports USB 3.1 Gén. 1 Type-A - 1 x port Thunderbolt™ 3 (USB 3.1 Gén. 2 Type-C™ avec prise en charge des technologies DisplayPort et Thunderbolt à 40 Gbit/s)', 'NVIDIA GeForce\r\n', '15.6\"\r\n', 'Linux', '1 To + 256 Go SSD\r\n'),
('X541NA-GO017', 'pc', 'PC Portable', 'Asus\r\n', 639, 12, 1, 'Intel Dual Core\r\n', '2Mo', '4 Go\r\n', '1xHDMI, 1xUSB 3.0\r\n', 'Graphique Intégrée\r\n', '15.6\" ', 'Free Dos\r\n', '500 Go\r\n');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
