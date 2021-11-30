-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mar. 30 nov. 2021 à 12:10
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
  `resumer` text NOT NULL,
  `chapitre-text` text NOT NULL,
  `images` text NOT NULL,
  `brouillon` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `chapitre`
--

INSERT INTO `chapitre` (`ID`, `chapitre-number`, `chapitre-titre`, `resumer`, `chapitre-text`, `images`, `brouillon`) VALUES
(1, 1, 'La neige', 'Ca devient ridicule, ce brol ! Fête de l\'Argenterie, fête des chapeaux... Chaque année, y a une nouvelle guindaille dans le calendrier. D\'mon temps, on ne gâtait pas les objets comme aujourd\'hui, et après on s\'étonne qu\'ils nous fassent des caprices.', ' Ca devient ridicule, ce brol ! Fête de l\'Argenterie, fête des chapeaux... Chaque année, y a une nouvelle guindaille dans le calendrier. D\'mon temps, on ne gâtait pas les objets comme aujourd\'hui, et après on s\'étonne qu\'ils nous fassent des caprices.', 'images/neige-illustration.jpg', 0),
(2, 2, 'L’illusion', 'Je vais bientôt détruire cette planète...\r\n\r\nMais en attendant, je suis votre professeur.\r\n\r\nEt m\'occuper de vous avec le plus grand sérieux...\r\n', 'Je vais bientôt détruire cette planète...\r\n\r\nMais en attendant, je suis votre professeur.\r\n\r\nEt m\'occuper de vous avec le plus grand sérieux...\r\n\r\nEst plus important que la fin du monde.', 'images/illusion-illustration.jpg', 0),
(3, 3, 'L\'igloo', ' J’ai quelque peu précipité mon voyage en conséquence.\r\n— Tu as bien fait.\r\nOphélie se crispa sur sa chaise. Comment donc, c’était tout ?\r\n« Tu es un assassin, parfait, passe-moi le sel… »', ' — J’ai tué un homme.\r\n\r\nIl avait jeté cela d’un ton nonchalant, comme une banalité, entre deux lampées de soupe. Les lunettes d’Ophélie blêmirent. A côté d’elle, la tante Roseline s’étrangla, au bord de la syncope. Berenilde reposa sa coupe de vin d’un geste calme sur la nappe de dentelle.\r\n\r\n— Où ? Quand ?\r\n\r\nOphélie, elle, aurait demandé : « Qui ? Pourquoi ? »\r\n\r\n— A l’aérogare, avant que je n’embarque pour Anima, répondit Thorn d’une voix posée. Un disgracié qu’un individu mal intentionné m’a dépêché aux trousses. J’ai quelque peu précipité mon voyage en conséquence.\r\n\r\n— Tu as bien fait.\r\n\r\nOphélie se crispa sur sa chaise. Comment donc, c’était tout ?\r\n\r\n« Tu es un assassin, parfait, passe-moi le sel… »', 'images/igloo-illustration.jpg', 0),
(4, 4, 'Les ourses', 'Il y eu un grand fracas lorsque les crochets du Basilic tombèrent en cascade des bras d\'Hermionne. Se ruant sur Ron, elle lui passa les bras autour du cou et l\'embrassa en plein sur la bouche. ', 'Il y eu un grand fracas lorsque les crochets du Basilic tombèrent en cascade des bras d\'Hermionne. Se ruant sur Ron, elle lui passa les bras autour du cou et l\'embrassa en plein sur la bouche. ', 'images/ourses-illustration.jpg', 0),
(5, 5, 'L\'oublie', ' ça date du premier jour d\'école. Nous avions cinq ans. Tu portais une petite robe rouge à carreau, et tes cheveux... tu avais deux nattes au lieu d\'une seule.', ' Peeta, dis-je d\'un ton léger. Lors de l\'interview, tu as prétendu être amoureux de moi depuis toujours. Ca remonte à quand exactement?\r\n\r\n- Oh, laisse-moi réfléchir. Je crois que ça date du premier jour d\'école. Nous avions cinq ans. Tu portais une petite robe rouge à carreau, et tes cheveux... tu avais deux nattes au lieu d\'une seule. Mon père t\'a montrée du doigt pendant que nous attendions de nous mettre en rang.\r\n\r\n- Ton père? Pourquoi?\r\n\r\n- Il m\'a dit: \" Tu vois cette jeune fille? Je voulais épouser sa mère, mais elle a préféré partir avec un mineur.\"\r\n\r\n- Quoi? Tu es en train d\'inventer! je m\'exclame.\r\n\r\n- Non, je t\'assure, insiste Peeta. Et moi, j\'ai dit: \"Un mineur? Pourquoi elle serait partie avec un mineur alors qu\'elle pouvait t\'épouser, toi?\" Et il m\'a répondu: \"Parce que quand il chante...même les oiseaux se taisent pour l\'écouter.\"\r\n\r\n- Ca, c\'est vrai. Ils le font. Enfin, ils le faisaient.\r\n\r\nJe suis stupéfaite et étonnamment émue en imaginant le boulanger en train d\'avouer à son fils. L\'idée me traverse l\'esprit que si j\'ai du mal à chanter, si je rejette la musique, ce n\'est peut-être pas parce que j\'ai l\'impression de perdre mon temps. Peut-être est-ce plutôt parce que ça me fait trop penser à mon père.\r\n\r\n- Alors, ce jour-là, en cours de musique, la maîtresse nous a demandé qui connaissait la chanson de la vallée. Tu as levé la main tout de suite. Elle t\'a fait monter sur l\'estrade, et tu l\'as chanté pour nous. Et je te jure que tous les oiseaux de l\'autre côté de la fenêtre se sont arrêtés de siffler.\r\n\r\n- Oh, arrête! dis-je en riant.\r\n\r\n- Non, c\'est vraiment arrivé. Et, à la fin de la chanson, j\'ai su que - comme ta mère - j\'étais amoureux pour de bon, raconte Peeta. Ensuite, pendant onze ans, j\'ai essayé de trouver le courage de te parler.\r\n\r\n- Sans succès.\r\n\r\n- Sans succès. D\'une certaine manière, on peut dire que j\'ai eu de la chance que mon nom soit tiré au sort lors de la Moisson, conclut Peeta.\r\n\r\nJe me sens d\'abord ridiculement heureuse, puis confuse. Parce que nous somme censés jouer la comédie de l\'amour, et non être vraiment amoureux. Mais le récit de Peeta à des accent de vérité. Cette histoire à propos de mon père et des oiseaux. Et c\'est vrai que j\'ai chanté à mon premier jour d\'école, même si je ne me rappelais pas la chanson. Et cette robe rouge à carreau... j\'en avais une, que j\'ai donné à Prim avant qu\'elle finisse en chiffon après la mort de mo père.\r\n\r\nCa explique aussi une chose. Pourquoi Peeta m\'a offert ces pains, ce fameux jour. Alors, si tous ces détails sont vrais... se pourait-il qu\'il soit sincère?\r\n\r\n- Tu as... une mémoire remarquable, dis-je en bredouillant.\r\n\r\n- Je me souviens de pleins de chose à propos de toi, continue Peeta en ramenant une mèche de cheveux derrière moi oreille. C\'est toi qui ne faisais pas attention.\r\n\r\n- Je t\'écoute, maintenant.\r\n\r\n- Oh, je n\'ai pas beaucoup de concurrence, par ici.\r\n\r\nJe voudrais battre en retraite, refermer les volets de nouveau, mais je sais qu\'il ne faut pas. J\'ai l\'impression d\'entrendre Haymitch me murmurer à l\'oreille: \" Dis-le! Dis-le!\"\r\n\r\nJe respire un bon coup et me jette à l\'eau.\r\n\r\n- Tu n\'as aucune concurrence nulle part.\r\n\r\nEt, cette fois-ci, c\'est moi qui me penche vers lui.\r\n\r\nNos lèvres se sont à peine touchées quand un bruit sourd à l\'extérieur me fait sursauter. Je saisis mon arc, la flèche prête à partir, mais on entend plus rien. Peeta jette un coup d\'oeil entre les rochers et pousse un cri de joie. Avant que je puisse l\'arrêter, il sort sous la pluie et me tend quelque chose par le trou. Un parachute argenté fixé à un panier. J\'ouvre celui-ci sans attendre et je découvre un véritable festin: des petits pains, du fromage de chèvre, des pommes et... une soupière de cet incroyable ragoût d\'agneau au riz sauvage! Ce plat à propos duquel j\'ai dit à Caesar Flickerman qu\'il représentait pour moi ce qu\'on trouvait de mieux au Capitole.\r\n\r\nQuand Peeta me rejoint à l\'intérieur, son visage s\'illumine.\r\n\r\n- On dirait qu\' Haymitch en a eu assez de nous voir mourir de faim.\r\n\r\n- J\'imagine, dis-je.\r\n\r\nMais, dans ma tête, je peux presque entendre notre mentor, pas mécontent de lui, déclarer avec une pointe d\'exaspération: \" Voila, chérie, c\'est ça que j\'attends de vous.\"', 'images/oulie-illustration.jpg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `ID` int(11) NOT NULL,
  `nameuser` text NOT NULL,
  `comment` text NOT NULL,
  `signaler` tinyint(1) DEFAULT NULL,
  `valider` tinyint(1) NOT NULL,
  `idchapitre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`ID`, `nameuser`, `comment`, `signaler`, `valider`, `idchapitre`) VALUES
(1, 'Rembourser', 'nope c\'est pas de jean forteroche sa', 0, 0, 1),
(8, 'Jean Forteroche', 'ok c\'est un extraits de la passe miroire.', 0, 0, 1),
(9, 'Paul Forteroche', 'lui c\'est assasinclassroom', 0, 0, 2),
(10, 'iygkjblnkmdhzi', 'ihjknzedok', 0, 0, 1),
(11, 'hbkjn', 'vgjhb', 0, 0, 2),
(12, 'vgbhjkn', 'gyhj', 0, 0, 2),
(13, 'n', 'jn,;', 0, 0, 2);

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
(11, 'Petersen', 'todd@mail.com', 'Todd A. ', 'Je vous écris suite à l’envoi de mon email ci-dessous. Je n’ai eu à ce jour aucun retour de la part de votre équipe. Si cela vous intéresse toujours d’échanger avec moi, n’hésitez pas à me communiquer vos disponibilités.\r\nSi non, savez-vous à quelle personne je pourrais m’adresser pour échanger ?\r\nMerci pour votre aide,\r\nTodd'),
(12, 'Chun', 'chun@mail.com', 'Carla R. ', 'Merci pour votre email. Je viens de clore votre dossier et aurais juste une petite question à vous poser. Pourquoi n’êtes-vous pas intéressé ? Est-ce à cause de quelque chose que j’ai (mal) fait ?\r\nSi vous avez en tête un point sur lequel je pourrais m’améliorer, faites-le moi savoir. Je suis toujours à la recherche de feedbacks.\r\nMerci pour votre aide,\r\nCarla ');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
