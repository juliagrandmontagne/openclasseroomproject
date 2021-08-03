-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mar. 03 août 2021 à 10:14
-- Version du serveur :  5.7.32
-- Version de PHP : 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `project4`
--

-- --------------------------------------------------------

--
-- Structure de la table `Chapitre`
--

CREATE TABLE `Chapitre` (
  `ID` int(11) NOT NULL,
  `chaptirenumber` int(11) NOT NULL,
  `chapitre-titre` text NOT NULL,
  `chapitre-text` text NOT NULL,
  `images` json NOT NULL,
  `brouillon` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Chapitre`
--

INSERT INTO `Chapitre` (`ID`, `chaptirenumber`, `chapitre-titre`, `chapitre-text`, `images`, `brouillon`) VALUES
(1, 1, 'la neige', 'icestuntexticestuntexticestuntexticestuntexticestuntexticestuntexticestuntexticestuntexticestuntexticestuntexticestuntexticestuntexticestuntext', '0', 0),
(1, 1, 'la neige', 'icestuntexticestuntexticestuntexticestuntexticestuntexticestuntexticestuntexticestuntexticestuntexticestuntexticestuntexticestuntexticestuntext', '0', 0),
(2, 2, 'l\'illusion', 'unautretextunautretextunautretextunautretextunautretextunautretextunautretextunautretextunautretextunautretextunautretextunautretextunautretextunautretextunautretext', '0', 0),
(3, 3, 'l\'igloo', 'cenestpasuntextecenestpasuntextecenestpasuntextecenestpasuntextecenestpasuntextecenestpasuntextecenestpasuntextecenestpasuntextecenestpasuntextecenestpasuntextecenestpasuntexte', '0', 0),
(4, 4, 'les ourses', 'blibloublablibloublablibloublablibloublablibloublablibloublablibloublablibloublablibloublablibloublablibloublablibloublablibloublablibloublablibloublablibloubla', '0', 0),
(4, 4, 'les ourses', 'blibloublablibloublablibloublablibloublablibloublablibloublablibloublablibloublablibloublablibloublablibloublablibloublablibloublablibloublablibloublablibloubla', '0', 0),
(5, 5, 'l\'oublie', 'texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttext', '0', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
