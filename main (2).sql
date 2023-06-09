-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 04 mai 2023 à 06:31
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `main`
--

-- --------------------------------------------------------

--
-- Structure de la table `assets`
--

DROP TABLE IF EXISTS `assets`;
CREATE TABLE IF NOT EXISTS `assets` (
  `assetID` varchar(20) NOT NULL,
  `assetName` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `assets`
--

INSERT INTO `assets` (`assetID`, `assetName`, `location`, `status`) VALUES
('ZZ', 'ZZ', 'ZZ', 'ZZ'),
('2', '2', '2', '2'),
('sda', 'dsa', 'dsa', 'dsa'),
('s', 's', 'ss', 's'),
('ewew', 'wewew', 'wewe', 'ewewew'),
('dsds', 'sdsdsdsd', 'sdsdsdsds', 'dsdsdsdsd'),
('sd', 'ds', 'ds', 'ds'),
('null', 'sadasd', 'adsaddffdffffffffffffffffff', 'ffffffffffff'),
('sdsd', 'dsdsd', 'sdsdsds', 'sdsdsdsd'),
('sds', 'dsd', 'dsd', 'sds'),
('555', '555', '555', '555'),
('sadasdasd', 'asdasdasdas', 'dasdadadas', 'dasdasdasdad'),
('sadasdasd', 'asdasdasdas', 'dasdadadas', 'dasdasdasdad'),
('sadasdasd', 'asdasdasdas', 'dasdadadas', 'dasdasdasdad'),
('sadasdasd', 'asdasdasdas', 'dasdadadas', 'dasdasdasdad'),
('sadasdasd', 'asdasdasdas', 'dasdadadas', 'dasdasdasdad'),
('sadasdasd', 'asdasdasdas', 'dasdadadas', 'dasdasdasdad'),
('sadasdasd', 'asdasdasdas', 'dasdadadas', 'dasdasdasdad'),
('ghiath', 'ghiath', 'ghiath', 'ghiath'),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('aaa', '111', 'bbb', '222'),
('777', '777', '777', '777'),
('', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `complains`
--

DROP TABLE IF EXISTS `complains`;
CREATE TABLE IF NOT EXISTS `complains` (
  `id` int NOT NULL AUTO_INCREMENT,
  `TechRadioName` varchar(255) DEFAULT NULL,
  `Intitulé` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_notified` tinyint(1) NOT NULL DEFAULT '0',
  `service` varchar(255) DEFAULT NULL,
  `marque` varchar(255) DEFAULT NULL,
  `entreprise` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `complains`
--

INSERT INTO `complains` (`id`, `TechRadioName`, `Intitulé`, `message`, `status`, `created_at`, `is_notified`, `service`, `marque`, `entreprise`, `email`) VALUES
(2, 'staff3', 'I fed up', '1234567890', 'rejected', '2023-04-26 10:34:51', 0, 'radiology', '54544', 'ddd', 'userghiathbrai46@gmail.com'),
(21, 'staff4', 'BLALALAALALAL', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'pending', '2023-04-28 17:22:14', 0, 'radiology', 'aa', 'ddd', 'userghiathbrai46@gmail.tn'),
(5, 'staff3', 'I fed up', 'hhhhhhhhhhhhhhhhhhh', 'approved', '2023-04-27 16:00:15', 0, 'dsdsdsd', '54544', 'ddd', 'info@hologic.com'),
(6, 'staff3', 'I fed up', 'hhhhhhhhhhhhhhhhhhh', 'approved', '2023-04-27 16:00:24', 0, 'dsdsdsd', '54544', 'ddd', 'info@hologic.com'),
(7, 'staff3', 'I fed up', 'hhhhhhhhhhhhhhhhhhh', 'approved', '2023-04-27 16:00:30', 0, 'dsdsdsd', '54544', 'ddd', 'info@hologic.com'),
(8, 'staff3', 'I fed up', 'aertuopfgk', 'pending', '2023-04-27 16:09:19', 0, 'radiology', 'cv ', 'ddd', 'userghiathbrai46@gmail.tn'),
(9, 'staff3', 'I fed up', 'xxxxxxxxxxxxxxxxxxxxx', 'rejected', '2023-04-28 06:09:26', 0, 'radiology', '22', 'ddd', 'userghiathbrai46@gmail.com'),
(10, 'staff3', 'I fed up', 'xxxxxxxxxxxxxxxxxxxxx', 'pending', '2023-04-28 06:17:57', 0, 'radiology', '22', 'ddd', 'userghiathbrai46@gmail.com'),
(11, 'staff3', 'I fed up', 'xxxxxxxxxxxxxxxxxxxxx', 'pending', '2023-04-28 06:18:12', 0, 'radiology', '22', 'ddd', 'userghiathbrai46@gmail.com'),
(12, 'staff3', 'I fed up', 'xxxxxxxxxxxxxxxxxxxxx', 'pending', '2023-04-28 06:19:21', 0, 'radiology', '22', 'ddd', 'userghiathbrai46@gmail.com'),
(13, 'staff3', 'I fed up', 'xxxxxxxxxxxxxxxxxxxxx', 'pending', '2023-04-28 06:20:13', 0, 'radiology', '22', 'ddd', 'userghiathbrai46@gmail.com'),
(14, 'staff3', 'I fed up', 'xxxxxxxxxxxxxxxxxxxxx', 'pending', '2023-04-28 06:20:47', 0, 'radiology', '22', 'ddd', 'userghiathbrai46@gmail.com'),
(15, 'staff3', 'I fed up', 'xxxxxxxxxxxxxxxxxxxxx', 'pending', '2023-04-28 06:21:04', 0, 'radiology', '22', 'ddd', 'userghiathbrai46@gmail.com'),
(16, 'staff3', 'I fed up', 'xxxxxxxxxxxxxxxxxxxxx', 'pending', '2023-04-28 06:22:51', 0, 'radiology', '22', 'ddd', 'userghiathbrai46@gmail.com'),
(17, 'staff3', 'I fed up', 'xxxxxxxxxxxxxxxxxxxxx', 'pending', '2023-04-28 06:23:06', 0, 'radiology', '22', 'ddd', 'userghiathbrai46@gmail.com'),
(18, 'staff3', 'I fed up', 'xxxxxxxxxxxxxxxxxxxxx', 'pending', '2023-04-28 06:24:11', 0, 'radiology', '22', 'ddd', 'userghiathbrai46@gmail.com'),
(19, 'staff3', 'I fed up', 'xxxxxxxxxxxxxxxxxxxxx1', 'pending', '2023-04-28 06:24:18', 0, 'radiology', '22', 'ddd', 'userghiathbrai46@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `formulair`
--

DROP TABLE IF EXISTS `formulair`;
CREATE TABLE IF NOT EXISTS `formulair` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Service` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Marque` varchar(50) NOT NULL,
  `Company` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Description` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `formulair`
--

INSERT INTO `formulair` (`id`, `Service`, `Type`, `Marque`, `Company`, `Email`, `Description`) VALUES
(1, 'sqdqs', 'X-ray', 'dqsdq', 'sdqsd', 'qsdqsd', NULL),
(2, 'sqdqs', 'X-ray', 'dqsdq', 'sdqsd', 'qsdqsd', NULL),
(3, 'f', 'X-ray', 'f', 'f', 'f', NULL),
(4, '', '', '', '', '', NULL),
(5, '', '', '', '', '', NULL),
(6, 'Radiologie', 'WS80A with Elite+', 'Échographie', 'Samsung Medison', 'contact@samsungmedison.com', NULL),
(7, 'Radiologie', 'WS80A with Elite+', 'Échographie', 'Samsung Medison', 'contact@samsungmedison.com', NULL),
(8, 'Radiologie', 'Vantage', 'IRM', 'Samsung Medison', 'contact@samsungmedison.com', NULL),
(9, 'Radiologie', 'UGEO MRI', 'IRM', 'Samsung Medison', 'contact@samsungmedison.com', NULL),
(10, 'aaa1111', 'RS85A', 'TDM', 'Samsung Medison', 'contact@samsungmedison.com', ''),
(11, 'aaa1111', 'Vantage', 'IRM', 'Samsung Medison', 'contact@samsungmedison.com', ''),
(12, 'Radiologie', 'UGEO MRI', 'IRM', 'Samsung Medison', 'contact@samsungmedison.com', 'aaa1111'),
(13, 'Radiologie', 'RS85A', 'TDM', 'Samsung Medison', 'contact@samsungmedison.com', ''),
(14, 'Radiologie', 'Vantage', 'IRM', 'Samsung Medison', 'contact@samsungmedison.com', ''),
(15, 'Radiologie', 'Vantage', 'IRM', 'Samsung Medison', 'contact@samsungmedison.com', ''),
(16, 'Radiologie', 'UGEO MRI', 'IRM', 'Samsung Medison', 'contact@samsungmedison.com', ''),
(17, 'Radiologie', 'RS85A', 'TDM', 'Samsung Medison', 'contact@samsungmedison.com', ''),
(18, 'Radiologie', 'UGEO CT', 'TDM', 'Samsung Medison', 'contact@samsungmedison.com', ''),
(19, 'Radiologie', 'UGEO CT', 'TDM', 'Samsung Medison', 'contact@samsungmedison.com', '');

-- --------------------------------------------------------

--
-- Structure de la table `fournisseurs`
--

DROP TABLE IF EXISTS `fournisseurs`;
CREATE TABLE IF NOT EXISTS `fournisseurs` (
  `Id` int NOT NULL,
  `fournisseurName` varchar(255) NOT NULL,
  `entrepriseName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `fournisseurs`
--

INSERT INTO `fournisseurs` (`Id`, `fournisseurName`, `entrepriseName`, `Email`) VALUES
(1, 'fournisseur1', 'Siemens', 'Siemen@gmail.com'),
(2, 'fournisseur2', 'GEhealthcare', 'GEhealthcare@gmail.com'),
(3, 'fournisseur3', 'Philips', 'Philips@gmail.com'),
(4, 'fournisseur4', 'Hologic', 'Hologic@gmail.com'),
(5, 'fournisseur5', 'Samsung Medison', 'SumsungMedison@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `history`
--

DROP TABLE IF EXISTS `history`;
CREATE TABLE IF NOT EXISTS `history` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `complaint_id` int NOT NULL,
  `status` enum('pending','approved','rejected') NOT NULL,
  `timestamp` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `history`
--

INSERT INTO `history` (`id`, `complaint_id`, `status`, `timestamp`) VALUES
(1, 3, 'rejected', '2023-04-28 08:24:45'),
(2, 3, 'rejected', '2023-04-28 08:24:59'),
(3, 1, 'approved', '2023-04-28 16:28:49'),
(4, 1, 'rejected', '2023-04-28 16:28:53'),
(5, 1, 'rejected', '2023-04-28 16:29:02'),
(6, 20, 'approved', '2023-04-28 16:30:14'),
(7, 20, 'approved', '2023-04-28 16:30:19'),
(8, 20, 'rejected', '2023-04-28 16:30:28'),
(9, 20, 'rejected', '2023-04-28 16:30:33'),
(10, 4, 'rejected', '2023-04-28 16:30:47'),
(11, 4, 'rejected', '2023-04-28 16:30:51'),
(12, 2, 'rejected', '2023-04-28 16:31:49'),
(13, 2, 'rejected', '2023-04-28 16:31:56'),
(14, 5, 'approved', '2023-04-28 16:43:37'),
(15, 6, 'approved', '2023-04-28 18:29:40'),
(16, 7, 'approved', '2023-04-28 18:29:48'),
(17, 9, 'approved', '2023-04-28 19:29:54'),
(18, 9, 'approved', '2023-04-28 19:29:59'),
(19, 9, 'rejected', '2023-04-28 19:30:11'),
(20, 9, 'rejected', '2023-04-28 19:30:15');

-- --------------------------------------------------------

--
-- Structure de la table `intervention`
--

DROP TABLE IF EXISTS `intervention`;
CREATE TABLE IF NOT EXISTS `intervention` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `heure` time DEFAULT NULL,
  `client` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `equipement` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `marque` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `defauts` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `acheve_oui` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `cle_reference` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `cle_quantite` int DEFAULT NULL,
  `technicien_radioyuji` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `intervention`
--

INSERT INTO `intervention` (`id`, `date`, `heure`, `client`, `equipement`, `marque`, `defauts`, `acheve_oui`, `cle_reference`, `cle_quantite`, `technicien_radioyuji`) VALUES
(1, '1111-11-11', '11:11:00', '111', '1111', '1111', '1111', 'oui', '1111', 111, '1111'),
(2, '2023-04-28', '14:58:00', ';lkjhgfd', 'lkjhgfds', 'kjhgfds', 'kjhgfds', 'oui', 'bvcxz', 545, 'kjhgfd'),
(3, '2023-04-28', '14:58:00', ';lkjhgfd', 'lkjhgfds', 'kjhgfds', 'kjhgfds', 'oui', 'bvcxz', 545, 'kjhgfd'),
(4, '2023-04-28', '14:58:00', ';lkjhgfd', 'lkjhgfds', 'kjhgfds', 'kjhgfds', 'oui', 'bvcxz', 545, 'kjhgfd'),
(5, '2023-04-28', '14:58:00', ';lkjhgfd', 'lkjhgfds', 'kjhgfds', 'kjhgfds', 'oui', 'bvcxz', 545, 'kjhgfd'),
(6, '2023-04-28', '14:58:00', ';lkjhgfd', 'lkjhgfds', 'kjhgfds', 'kjhgfds', 'oui', 'bvcxz', 545, 'kjhgfd'),
(7, '2023-04-28', '14:58:00', ';lkjhgfd', 'lkjhgfds', 'kjhgfds', 'kjhgfds', 'oui', 'bvcxz', 545, 'kjhgfd'),
(8, '2023-04-28', '14:58:00', ';lkjhgfd', 'lkjhgfds', 'kjhgfds', 'kjhgfds', 'oui', 'bvcxz', 545, 'kjhgfd'),
(9, '2023-04-28', '14:58:00', 'ghiath', 'tttt', 'TRTX', 'off', 'oui', 'ndrich', 545, 'kjhgfd'),
(10, '2023-04-28', '14:58:00', 'ghiath', 'tttt', 'TRTX', 'off', 'oui', 'ndrich', 545, 'jest'),
(11, '2023-04-28', '14:58:00', 'ghiath', 'tttt', 'TRTX', 'off', 'oui', 'ndrich', 545, 'jest'),
(12, '2023-04-12', '19:22:00', 'gdyt', 'dqv', 'aa', 'ddddddddddd', 'non', '777', 5, '777'),
(13, '2023-04-12', '19:22:00', 'gdyt', 'dqv', 'aa', 'ddddddddddd', 'non', '777', 5, '777');

-- --------------------------------------------------------

--
-- Structure de la table `inventory`
--

DROP TABLE IF EXISTS `inventory`;
CREATE TABLE IF NOT EXISTS `inventory` (
  `ProductID` int NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `StockLevel` int NOT NULL,
  `ReorderLevel` int NOT NULL,
  PRIMARY KEY (`ProductID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `machines`
--

DROP TABLE IF EXISTS `machines`;
CREATE TABLE IF NOT EXISTS `machines` (
  `id` int NOT NULL AUTO_INCREMENT,
  `service_radio` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `type1` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `machine` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `date_achat` date DEFAULT NULL,
  `garantie` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `machines`
--

INSERT INTO `machines` (`id`, `service_radio`, `type1`, `machine`, `company`, `email`, `date_achat`, `garantie`) VALUES
(1, 'médecine nucléaire', 'Syntigraphie', 'Symbia', 'Siemens', 'Siemens@gmail.com', '1999-12-12', '5'),
(2, 'médecine nucléaire', 'Scanner combiné', 'Biograph Vision', 'Siemens', 'Siemens@gmail.com', '1999-12-12', '5'),
(3, 'médecine nucléaire', 'Scanner TDM', 'SOMATOM go.', 'Siemens', 'Siemens@gmail.com', '1999-12-12', '5'),
(4, 'médecine nucléaire', 'Syntigraphie', 'Discovery', 'GEhealthcare', 'GEhealthcare@gmail.com', '1999-12-12', '5'),
(5, 'médecine nucléaire', 'Scanner combiné', 'Discovery MI', 'GEhealthcare', 'GEhealthcare@gmail.com', '1999-12-12', '5'),
(6, 'médecine nucléaire', 'Scanner TDM', 'Optima CT540', 'GEhealthcare', 'GEhealthcare@gmail.com', '1999-12-12', '5'),
(7, 'médecine nucléaire', 'Syntigraphie', 'BrightView', 'Philips', 'Philips@gmail.com', '1999-12-12', '5'),
(8, 'médecine nucléaire', 'Scanner combiné', 'Vereos Digital PET/CT', 'Philips', 'Philips@gmail.com', '1999-12-12', '5'),
(9, 'médecine nucléaire', 'Scanner TDM', 'Brilliance CT Big Bore', 'Philips', 'Philips@gmail.com', '1999-12-12', '5'),
(10, 'Radiologie Diagnostique', 'Radio conventionnelle( thorax)', 'Ysio Max', 'Siemens', 'Siemens@gmail.com', '2005-03-17', '5'),
(11, 'Radiologie Diagnostique', 'Radio conventionnelle(panoramique)', 'Orthophos XG', 'Siemens', 'Siemens@gmail.com', '2005-03-17', '5'),
(12, 'Radiologie Diagnostique', 'Radio conventionnelle(abdomen)', 'SOMATOM Edge Plus', 'Siemens', 'Siemens@gmail.com', '2005-03-17', '5'),
(13, 'Radiologie Diagnostique', 'Echographie', 'Acuson S3000', 'GEhealthcare', 'GEhealthcare@.gmail.com', '2001-09-20', '5'),
(14, 'Radiologie Diagnostique', 'IRM', 'MAGNETOM Lumina', 'GEhealthcare', 'GEhealthcare@.gmail.com', '2001-09-20', '5'),
(15, 'Radiologie Diagnostique', 'Radio numérique', 'Ysio Max', 'GEhealthcare', 'GEhealthcare@.gmail.com', '2001-09-20', '5'),
(16, 'Radiologie Diagnostique', 'Radio conventionnelle(thorax)', 'Discovery XR656 Plus', 'Philips', 'Philips@.gmail.com', '2016-05-01', '5'),
(17, 'Radiologie Diagnostique', 'Radio conventionnelle(panoramique)', 'Optima XR220amx', 'Philips', 'Philips@.gmail.com', '2016-05-01', '5'),
(18, 'Radiologie Diagnostique', 'Radio conventionnelle(abdomen)', 'Optima CT660', 'Philips', 'Philips@.gmail.com', '2016-05-01', '5'),
(19, 'Radiologie Diagnostique', 'Echographie', 'LOGIQ E10', 'Siemens', 'Siemens@gmail.com', '2005-03-17', '5'),
(20, 'Radiologie Diagnostique', 'IRM', 'SIGNA Pioneer', 'GEhealthcare', 'Siemens@gmail.com', '2005-03-17', '5'),
(21, 'Radiologie Diagnostique', 'Radio numérique', 'Discovery XR656 Plus', 'Philips', 'Siemens@gmail.com', '2003-08-11', '5'),
(22, 'Radiologie Diagnostique', 'Radio conventionnelle(thorax)', 'DigitalDiagnost', 'GEhealthcare', 'GEhealthcare@.gmail.com', '2003-08-11', '5'),
(23, 'Radiologie Diagnostique', 'Radio conventionnelle(panoramique)', 'DigitalDiagnost Ceph', 'GEhealthcare', 'GEhealthcare@.gmail.com', '2003-08-11', '5'),
(24, 'Radiologie Diagnostique', 'Radio conventionnelle', 'Ingenia 3.0T', 'GEhealthcare', 'GEhealthcare@.gmail.com', '2003-08-11', '5'),
(25, 'Radiologie Diagnostique', 'Echographie', 'Epiq 7', 'Philips', 'Philips@.gmail.com', '2016-05-01', '5'),
(26, 'Radiologie Diagnostique', 'IRM', 'Ingenia Ambition X', 'Philips', 'Philips@.gmail.com', '2016-05-01', '5'),
(27, 'Radiologie Diagnostique', 'Radio numérique', '	DigitalDiagnost', 'Philips', 'Philips@.gmail.com', '2016-05-01', '5'),
(28, 'Radiothérapie', 'Stéréataxique', 'Artiste', 'Siemens', 'Siemens@gmail.com', '2003-08-11', '5'),
(29, 'Radiothérapie', 'Stéréataxique', 'TrueBeam STx', 'Siemens', 'Siemens@gmail.com', '2005-03-17', '5'),
(30, 'Radiothérapie', 'Stéréataxique', 'Pinnacle³ TPS', 'Siemens', 'Siemens@gmail.com', '2005-03-17', '5'),
(31, 'Radiologie Diagnostique', 'mammographie', 'MAMMOMAT Revelation', 'GEhealthcare', 'GEhealthcare@.gmail.com', '2003-08-11', '5'),
(32, 'Radiologie Diagnostique', 'mammographie', 'Senographe Pristina', 'GEhealthcare', 'GEhealthcare@.gmail.com', '2001-09-20', '5'),
(33, 'Radiologie Diagnostique', 'mammographie', 'MicroDose SI', 'GEhealthcare', 'GEhealthcare@.gmail.com', '2001-09-20', '5');

-- --------------------------------------------------------

--
-- Structure de la table `maintenance_records`
--

DROP TABLE IF EXISTS `maintenance_records`;
CREATE TABLE IF NOT EXISTS `maintenance_records` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `machine_name` varchar(255) NOT NULL,
  `machine_type` varchar(255) NOT NULL,
  `panne_type` varchar(255) NOT NULL,
  `maintenance_type` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `maintenance_records`
--

INSERT INTO `maintenance_records` (`id`, `machine_name`, `machine_type`, `panne_type`, `maintenance_type`, `created_at`) VALUES
(1, 'test', 'X-ray', 'test', 'Curative', '2023-02-26 08:25:11');

-- --------------------------------------------------------

--
-- Structure de la table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','staff','user') DEFAULT 'user',
  `email` varchar(255) DEFAULT NULL,
  `image` mediumblob,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `email`, `image`) VALUES
(1, 'oumaima', '12345678', 'admin', 'oumaymasaidi255@gmail.com', NULL),
(2, 'fournisseur1', 'f0001', 'admin', 'fournisseur1@gmail.com', NULL),
(3, 'Islam', '12345', 'user', 'oumayma.saidi@etudiant-istmt.utm.tn', NULL),
(4, 'oumayma', '12345', 'admin', 'oumayma@gmail.com', NULL),
(5, 'staff1', '1111', 'staff', 'staff1@gmail.com', NULL),
(6, 'staff2', '2222', 'staff', 'staff2@gmail.com', NULL),
(7, 'staff3', '3333', 'staff', 'staff3@gmail.com', NULL),
(8, 'staff4', '4444', 'staff', 'staff4@gmail.com', NULL),
(9, 'fournisseur1', '11111', 'admin', 'fournisseur1@gmail.com', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
