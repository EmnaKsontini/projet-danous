-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 16, 2018 at 05:39 PM
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
('Galaxy S8 plus', 'Smartphone', 'Samsung', 2500, 10, 1, '159.5 x 73.4 x 8.1 mm', '64 Go', '4 Go', '12MP', '8MP', '1440 x 2960 pixels', '3500mAh', '2.3 GHz');
('Galaxy S8', 'Smartphone', 'Samsung', 2200, 8, 1, '148.9 x 68.1 x 8 mm', '64 Go', '4 Go', '12MP', '8MP', '1440 x 2960 pixels', '3000mAh', '2.3 GHz');
('Samsung Galaxy J5', 'Smartphone', 'Samsung', 500, 50, 1, '145.8 x 72.3 x 8.1 mm', '16 Go', '2 Go', '13MP', '5MP avec flash LED', '720 x 1280 pixels', '3100mAh', '1.2 GHz');
('Mate 9', 'Smartphone', 'Huawei', 1800, 4, 1, '156.9 x 78.9 x 7.9 mm', '64 Go', '4 Go', 'Dual 20 MP +12 MP', '8MP', '1080 x 1920 pixels', '4000mAh', '2.3 GHz');
('P9 Lite', 'Smartphone', 'Huawei', 600, 2, 1, '146.80 x 72.60 x 7.50 mm', '16 Go', '3 Go', '13MP', '8MP', '1080 x 1920 pixels', '3000mAh', '1.2 GHz');
('Iphone 8 PLUS', 'Smartphone', 'Apple', 2800, 2, 1, '158,4 x 78,1 x 7,5 mm', '64/256 Go', '3 Go', '12MP', '7MP', '1920 x 1080 pixels', '2691 mAh', '2.4 GHz');
('Iphone 7 128 GB', 'Smartphone', 'Apple', 2500, 4, 1, '138.3 x 67.1 x 7.1 mm', '128 Go', '2 Go', '12MP', '7MP', '750 X 1334 pixels', '1960mAh', '2.34 GHz');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
