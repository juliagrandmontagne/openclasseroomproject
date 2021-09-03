-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : ven. 03 sep. 2021 à 14:07
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
(1, 1, 'La neige', ' Ouai, ouai, bonne fête, tic tac et compagnie, marmonna-t-il en passant directement de l\'autre côté du comptoir et en se servant lui-même une gaufre chaude. Ca devient ridicule, ce brol ! Fête de l\'Argenterie, fête des chapeaux... Chaque année, y a une nouvelle guindaille dans le calendrier. D\'mon temps, on ne gâtait pas les objets comme aujourd\'hui, et après on s\'étonne qu\'ils nous fassent des caprices.', 'images/neige-illustration.jpg', 0),
(2, 2, 'L’illusion', 'Je vais bientôt détruire cette planète...\r\n\r\nMais en attendant, je suis votre professeur.\r\n\r\nEt m\'occuper de vous avec le plus grand sérieux...\r\n\r\nEst plus important que la fin du monde.', 'images/illusion-illustration.jpg', 0),
(3, 3, 'L\'igloo', '— J’ai tué un homme.\r\n\r\nIl avait jeté cela d’un ton nonchalant, comme une banalité, entre deux lampées de soupe. Les lunettes d’Ophélie blêmirent. A côté d’elle, la tante Roseline s’étrangla, au bord de la syncope. Berenilde reposa sa coupe de vin d’un geste calme sur la nappe de dentelle.\r\n\r\n— Où ? Quand ?\r\n\r\nOphélie, elle, aurait demandé : « Qui ? Pourquoi ? »\r\n\r\n— A l’aérogare, avant que je n’embarque pour Anima, répondit Thorn d’une voix posée. Un disgracié qu’un individu mal intentionné m’a dépêché aux trousses. J’ai quelque peu précipité mon voyage en conséquence.\r\n\r\n— Tu as bien fait.\r\n\r\nOphélie se crispa sur sa chaise. Comment donc, c’était tout ?\r\n\r\n« Tu es un assassin, parfait, passe-moi le sel… »', 'images/igloo-illustration.jpg', 0),
(4, 4, 'Les ourses', 'Et alors ? J\'ai un corps et je n\'en ai pas honte. En soi, il n\'est ni bon, ni mauvais. Ce n\'est pas lui le problème : c\'est ton regard qui est sale !\r\n\r\n(...)\r\n\r\nSi tu étais aussi saint que tu le prétends, tu ne craindrais pas la vue d\'un corps, même celui d\'une femme nue ! C\'est ta concupiscence qui te fait voir les femmes comme des tentatrices lubriques. C\'est parce que tu es obnubilé par ton propre désir que tu les veux couvertes de la tête aux pieds.', 'images/ourses-illustration.jpg', 0),
(5, 5, 'L\'oublie', 'Un mort, ce n\'était pas seulement la perte d\'un être cher. C\'est une part entière de soi qui disparaissait dans le néant.[...] Oublier les morts, c\'était comme les tuer une seconde fois.', 'images/oulie-illustration.jpg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `ID` int(11) NOT NULL,
  `name-admin` text NOT NULL,
  `comment` text NOT NULL,
  `signaler` tinyint(1) NOT NULL,
  `valider/suprimer` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  ADD PRIMARY KEY (`ID`);

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
