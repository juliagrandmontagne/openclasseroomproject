-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : sam. 06 nov. 2021 à 07:10
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
-- Structure de la table `chapitre`
--

CREATE TABLE `chapitre` (
  `ID` int(255) NOT NULL,
  `chapitre-number` int(11) NOT NULL,
  `chapitre-titre` text NOT NULL,
  `chapitre-text` text NOT NULL,
  `images` text NOT NULL,
  `brouillon` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `chapitre`
--

INSERT INTO `chapitre` (`ID`, `chapitre-number`, `chapitre-titre`, `chapitre-text`, `images`, `brouillon`) VALUES
(1, 1, 'La neige', ' Ca devient ridicule, ce brol ! Fête de l\'Argenterie, fête des chapeaux... Chaque année, y a une nouvelle guindaille dans le calendrier. D\'mon temps, on ne gâtait pas les objets comme aujourd\'hui, et après on s\'étonne qu\'ils nous fassent des caprices.', 'images/neige-illustration.jpg', 0),
(2, 2, 'L’illusion', 'Je vais bientôt détruire cette planète...\r\n\r\nMais en attendant, je suis votre professeur.\r\n\r\nEt m\'occuper de vous avec le plus grand sérieux...\r\n\r\nEst plus important que la fin du monde.', 'images/illusion-illustration.jpg', 0),
(3, 3, 'L\'igloo', ' J’ai quelque peu précipité mon voyage en conséquence.\r\n— Tu as bien fait.\r\nOphélie se crispa sur sa chaise. Comment donc, c’était tout ?\r\n« Tu es un assassin, parfait, passe-moi le sel… »', 'images/igloo-illustration.jpg', 0),
(4, 4, 'Les ourses', 'Il y eu un grand fracas lorsque les crochets du Basilic tombèrent en cascade des bras d\'Hermionne. Se ruant sur Ron, elle lui passa les bras autour du cou et l\'embrassa en plein sur la bouche. ', 'images/ourses-illustration.jpg', 0),
(5, 5, 'L\'oublie', 'Un mort, ce n\'était pas seulement la perte d\'un être cher. C\'est une part entière de soi qui disparaissait dans le néant.[...] Oublier les morts, c\'était comme les tuer une seconde fois.', 'images/oulie-illustration.jpg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `ID` int(11) NOT NULL,
  `nameuser` text NOT NULL,
  `comment` text NOT NULL,
  `signaler` tinyint(1) DEFAULT NULL,
  `idchapitre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`ID`, `nameuser`, `comment`, `signaler`, `idchapitre`) VALUES
(1, 'Rembourser', 'nope c\'est pas de jean forteroche sa', 0, 1),
(8, 'Jean Forteroche', 'ok c\'est un extraits de la passe miroire.', 0, 1),
(9, 'Paul Forteroche', 'lui c\'est assasinclassroom', 0, 2);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `user_mail` text NOT NULL,
  `user_firstname` text NOT NULL,
  `user_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`ID`, `user_name`, `user_mail`, `user_firstname`, `user_message`) VALUES
(1, 'gvjb', 'jvhb', 'n;', 'fcygvjhbkn,'),
(2, 'k,ljn', ',klnjh', ',knljk,ùlko', 'ihbjnkm,lkpoj'),
(3, 'lnjk', 'jnlk,', 'hbjkn', 'bhjkn,'),
(4, 'jvjbhnj', ' jbkn', 'hgkbjn;', 'cfgvhjhbjn'),
(11, 'tu preche', 'une convertue e', 'en ', 'fait mais c\'est compliquer');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `mp` int(11) NOT NULL,
  `login` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `chapitre`
--
ALTER TABLE `chapitre`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `commantaire-chapitre` (`idchapitre`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `chapitre`
--
ALTER TABLE `chapitre`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `commantaire-chapitre` FOREIGN KEY (`idchapitre`) REFERENCES `chapitre` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
