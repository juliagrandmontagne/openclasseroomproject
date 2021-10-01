-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : ven. 01 oct. 2021 à 19:21
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
(4, 4, 'Les ourses', ' Passer les miroirs, ça demande de s\'affronter soi-même, avait dit le grand-oncle. Ceux qui se voilent la face, ceux qui se mentent à eux-mêmes, ceux qui se voient mieux qu\'ils sont, ils pourront jamais. ', 'images/ourses-illustration.jpg', 0),
(5, 5, 'L\'oublie', 'Un mort, ce n\'était pas seulement la perte d\'un être cher. C\'est une part entière de soi qui disparaissait dans le néant.[...] Oublier les morts, c\'était comme les tuer une seconde fois.', 'images/oulie-illustration.jpg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `ID` int(11) NOT NULL,
  `name-user` text NOT NULL,
  `comment` text NOT NULL,
  `signaler` tinyint(1) NOT NULL,
  `id-chapitre` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`ID`, `name-user`, `comment`, `signaler`, `id-chapitre`) VALUES
(1, 'Jean Forteroche', 'ok c\'est un extraits de la passe miroire.', 0, 1),
(2, 'paul Forteroche', 'lui c\'est assasinclassroom', 0, 2),
(8, 'Jean Forteroche', 'ok c\'est un extraits de la passe miroire.', 0, 1),
(9, 'paul Forteroche', 'lui c\'est assasinclassroom', 0, 2);

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
  ADD KEY `commantaire-chapitre` (`id-chapitre`);

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
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `commantaire-chapitre` FOREIGN KEY (`id-chapitre`) REFERENCES `chapitre` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
