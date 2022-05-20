-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- Hôte : db5006311013.hosting-data.io
-- Généré le : ven. 20 mai 2022 à 10:39
-- Version du serveur : 5.7.38-log
-- Version de PHP : 7.0.33-0+deb9u12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dbs5268898`
--

-- --------------------------------------------------------

--
-- Structure de la table `chapitre`
--

CREATE TABLE `chapitre` (
  `ID` int(255) NOT NULL,
  `chapitrenumber` int(11) NOT NULL,
  `chapitretitre` text NOT NULL,
  `resumer` text NOT NULL,
  `chapitretext` text NOT NULL,
  `images` text NOT NULL,
  `brouillon` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `chapitre`
--

INSERT INTO `chapitre` (`ID`, `chapitrenumber`, `chapitretitre`, `resumer`, `chapitretext`, `images`, `brouillon`) VALUES
(1, 1, 'La neige', 'Ca devient ridicule, ce brol ! Fête de l\'Argenterie, fête des chapeaux... Chaque année, y a une nouvelle guindaille dans le calendrier. D\'mon temps, on ne gâtait pas les objets comme aujourd\'hui, et après on s\'étonne qu\'ils nous fassent des caprices.', ' Ca devient ridicule, ce brol ! Fête de l\'Argenterie, fête des chapeaux... Chaque année, y a une nouvelle guindaille dans le calendrier. D\'mon temps, on ne gâtait pas les objets comme aujourd\'hui, et après on s\'étonne qu\'ils nous fassent des caprices.', 'images/neige-illustration.jpg', 0),
(2, 2, 'L’illusion', 'Je vais bientôt détruire cette planète...\r\n\r\nMais en attendant, je suis votre professeur.\r\n\r\nEt m\'occuper de vous avec le plus grand sérieux...\r\n', 'Je vais bientôt détruire cette planète...\r\n\r\nMais en attendant, je suis votre professeur.\r\n\r\nEt m\'occuper de vous avec le plus grand sérieux...\r\n\r\nEst plus important que la fin du monde.', 'images/illusion-illustration.jpg', 0),
(3, 3, 'L\'igloo', ' J’ai quelque peu précipité mon voyage en conséquence.\r\n— Tu as bien fait.\r\nOphélie se crispa sur sa chaise. Comment donc, c’était tout ?\r\n« Tu es un assassin, parfait, passe-moi le sel… »', ' — J’ai tué un homme.\r\n\r\nIl avait jeté cela d’un ton nonchalant, comme une banalité, entre deux lampées de soupe. Les lunettes d’Ophélie blêmirent. A côté d’elle, la tante Roseline s’étrangla, au bord de la syncope. Berenilde reposa sa coupe de vin d’un geste calme sur la nappe de dentelle.\r\n\r\n— Où ? Quand ?\r\n\r\nOphélie, elle, aurait demandé : « Qui ? Pourquoi ? »\r\n\r\n— A l’aérogare, avant que je n’embarque pour Anima, répondit Thorn d’une voix posée. Un disgracié qu’un individu mal intentionné m’a dépêché aux trousses. J’ai quelque peu précipité mon voyage en conséquence.\r\n\r\n— Tu as bien fait.\r\n\r\nOphélie se crispa sur sa chaise. Comment donc, c’était tout ?\r\n\r\n« Tu es un assassin, parfait, passe-moi le sel… »', 'images/igloo-illustration.jpg', 0),
(5, 5, 'L\'oubli', '&lt;p&gt;&amp;ccedil;a date du premier jour d\'&amp;eacute;cole. Nous avions cinq ans. Tu portais une petite robe rouge &amp;agrave; carreau, et tes cheveux... tu avais deux nattes au lieu d\'une seule. ou pas&lt;/p&gt;', '&lt;p&gt;Peeta, dis-je d\'un ton l&amp;eacute;ger. Lors de l\'interview, tu as pr&amp;eacute;tendu &amp;ecirc;tre amoureux de moi depuis toujours. Ca remonte &amp;agrave; quand exactement? - Oh, laisse-moi r&amp;eacute;fl&amp;eacute;chir. Je crois que &amp;ccedil;a date du premier jour d\'&amp;eacute;cole. Nous avions cinq ans. Tu portais une petite robe rouge &amp;agrave; carreau, et tes cheveux... tu avais deux nattes au lieu d\'une seule. Mon p&amp;egrave;re t\'a montr&amp;eacute;e du doigt pendant que nous attendions de nous mettre en rang. - Ton p&amp;egrave;re? Pourquoi? - Il m\'a dit: &quot; Tu vois cette jeune fille? Je voulais &amp;eacute;pouser sa m&amp;egrave;re, mais elle a pr&amp;eacute;f&amp;eacute;r&amp;eacute; partir avec un mineur.&quot; - Quoi? Tu es en train d\'inventer! je m\'exclame. - Non, je t\'assure, insiste Peeta. Et moi, j\'ai dit: &quot;Un mineur? Pourquoi elle serait partie avec un mineur alors qu\'elle pouvait t\'&amp;eacute;pouser, toi?&quot; Et il m\'a r&amp;eacute;pondu: &quot;Parce que quand il chante...m&amp;ecirc;me les oiseaux se taisent pour l\'&amp;eacute;couter.&quot; - Ca, c\'est vrai. Ils le font. Enfin, ils le faisaient. Je suis stup&amp;eacute;faite et &amp;eacute;tonnamment &amp;eacute;mue en imaginant le boulanger en train d\'avouer &amp;agrave; son fils. L\'id&amp;eacute;e me traverse l\'esprit que si j\'ai du mal &amp;agrave; chanter, si je rejette la musique, ce n\'est peut-&amp;ecirc;tre pas parce que j\'ai l\'impression de perdre mon temps. Peut-&amp;ecirc;tre est-ce plut&amp;ocirc;t parce que &amp;ccedil;a me fait trop penser &amp;agrave; mon p&amp;egrave;re. - Alors, ce jour-l&amp;agrave;, en cours de musique, la ma&amp;icirc;tresse nous a demand&amp;eacute; qui connaissait la chanson de la vall&amp;eacute;e. Tu as lev&amp;eacute; la main tout de suite. Elle t\'a fait monter sur l\'estrade, et tu l\'as chant&amp;eacute; pour nous. Et je te jure que tous les oiseaux de l\'autre c&amp;ocirc;t&amp;eacute; de la fen&amp;ecirc;tre se sont arr&amp;ecirc;t&amp;eacute;s de siffler. - Oh, arr&amp;ecirc;te! dis-je en riant. - Non, c\'est vraiment arriv&amp;eacute;. Et, &amp;agrave; la fin de la chanson, j\'ai su que - comme ta m&amp;egrave;re - j\'&amp;eacute;tais amoureux pour de bon, raconte Peeta. Ensuite, pendant onze ans, j\'ai essay&amp;eacute; de trouver le courage de te parler. - Sans succ&amp;egrave;s. - Sans succ&amp;egrave;s. D\'une certaine mani&amp;egrave;re, on peut dire que j\'ai eu de la chance que mon nom soit tir&amp;eacute; au sort lors de la Moisson, conclut Peeta. Je me sens d\'abord ridiculement heureuse, puis confuse. Parce que nous somme cens&amp;eacute;s jouer la com&amp;eacute;die de l\'amour, et non &amp;ecirc;tre vraiment amoureux. Mais le r&amp;eacute;cit de Peeta &amp;agrave; des accent de v&amp;eacute;rit&amp;eacute;. Cette histoire &amp;agrave; propos de mon p&amp;egrave;re et des oiseaux. Et c\'est vrai que j\'ai chant&amp;eacute; &amp;agrave; mon premier jour d\'&amp;eacute;cole, m&amp;ecirc;me si je ne me rappelais pas la chanson. Et cette robe rouge &amp;agrave; carreau... j\'en avais une, que j\'ai donn&amp;eacute; &amp;agrave; Prim avant qu\'elle finisse en chiffon apr&amp;egrave;s la mort de mo p&amp;egrave;re. Ca explique aussi une chose. Pourquoi Peeta m\'a offert ces pains, ce fameux jour. Alors, si tous ces d&amp;eacute;tails sont vrais... se pourait-il qu\'il soit sinc&amp;egrave;re? - Tu as... une m&amp;eacute;moire remarquable, dis-je en bredouillant. - Je me souviens de pleins de chose &amp;agrave; propos de toi, continue Peeta en ramenant une m&amp;egrave;che de cheveux derri&amp;egrave;re moi oreille. C\'est toi qui ne faisais pas attention. - Je t\'&amp;eacute;coute, maintenant. - Oh, je n\'ai pas beaucoup de concurrence, par ici. Je voudrais battre en retraite, refermer les volets de nouveau, mais je sais qu\'il ne faut pas. J\'ai l\'impression d\'entrendre Haymitch me murmurer &amp;agrave; l\'oreille: &quot; Dis-le! Dis-le!&quot; Je respire un bon coup et me jette &amp;agrave; l\'eau. - Tu n\'as aucune concurrence nulle part. Et, cette fois-ci, c\'est moi qui me penche vers lui. Nos l&amp;egrave;vres se sont &amp;agrave; peine touch&amp;eacute;es quand un bruit sourd &amp;agrave; l\'ext&amp;eacute;rieur me fait sursauter. Je saisis mon arc, la fl&amp;egrave;che pr&amp;ecirc;te &amp;agrave; partir, mais on entend plus rien. Peeta jette un coup d\'oeil entre les rochers et pousse un cri de joie. Avant que je puisse l\'arr&amp;ecirc;ter, il sort sous la pluie et me tend quelque chose par le trou. Un parachute argent&amp;eacute; fix&amp;eacute; &amp;agrave; un panier. J\'ouvre celui-ci sans attendre et je d&amp;eacute;couvre un v&amp;eacute;ritable festin: des petits pains, du fromage de ch&amp;egrave;vre, des pommes et... une soupi&amp;egrave;re de cet incroyable rago&amp;ucirc;t d\'agneau au riz sauvage! Ce plat &amp;agrave; propos duquel j\'ai dit &amp;agrave; Caesar Flickerman qu\'il repr&amp;eacute;sentait pour moi ce qu\'on trouvait de mieux au Capitole. Quand Peeta me rejoint &amp;agrave; l\'int&amp;eacute;rieur, son visage s\'illumine. - On dirait qu\' Haymitch en a eu assez de nous voir mourir de faim. - J\'imagine, dis-je. Mais, dans ma t&amp;ecirc;te, je peux presque entendre notre mentor, pas m&amp;eacute;content de lui, d&amp;eacute;clarer avec une pointe d\'exasp&amp;eacute;ration: &quot; Voila, ch&amp;eacute;rie, c\'est &amp;ccedil;a que j\'attends de vous.&quot;&lt;/p&gt;', 'images/oulie-illustration.jpg', 1),
(56, 4, 'Les ourses', ' J’ai quelque peu précipité mon voyage en conséquence.\r\n— Tu as bien fait.\r\nOphélie se crispa sur sa chaise. Comment donc, c’était tout ?\r\n« Tu es un assassin, parfait, passe-moi le sel… »', ' — J’ai tué un homme.\r\n\r\nIl avait jeté cela d’un ton nonchalant, comme une banalité, entre deux lampées de soupe. Les lunettes d’Ophélie blêmirent. A côté d’elle, la tante Roseline s’étrangla, au bord de la syncope. Berenilde reposa sa coupe de vin d’un geste calme sur la nappe de dentelle.\r\n\r\n— Où ? Quand ?\r\n\r\nOphélie, elle, aurait demandé : « Qui ? Pourquoi ? »\r\n\r\n— A l’aérogare, avant que je n’embarque pour Anima, répondit Thorn d’une voix posée. Un disgracié qu’un individu mal intentionné m’a dépêché aux trousses. J’ai quelque peu précipité mon voyage en conséquence.\r\n\r\n— Tu as bien fait.\r\n\r\nOphélie se crispa sur sa chaise. Comment donc, c’était tout ?\r\n\r\n« Tu es un assassin, parfait, passe-moi le sel… »', 'images/ourses-illustration.jpg', 0);

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id` int(11) NOT NULL,
  `nameuser` text NOT NULL,
  `comment` text NOT NULL,
  `signaler` tinyint(1) DEFAULT NULL,
  `valider` tinyint(1) DEFAULT NULL,
  `idchapitre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `nameuser`, `comment`, `signaler`, `valider`, `idchapitre`) VALUES
(8, 'Jean Forteroche', 'ok c\'est un extrait de la passe Miroir.', 1, 0, 1),
(9, 'Paul Forteroche', 'Lui c\'est assasinclassroom', 0, 1, 2),
(12, 'William Courtois', 'Vraiment très nul', 1, 0, 2),
(57, 'Colleen R. Skelton', 'Super histoire !', 0, 1, 1),
(58, 'Mary R. Brooks', 'Hors de question pas d\'accord', 0, 1, 3),
(59, 'ceciestunpseudo', 'non ce n\'est pas de jean forteroche sa', 0, 1, 56),
(60, 'ftugy', 'b ,', 0, 0, 1);

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
  `mp` text NOT NULL,
  `login` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`ID`, `mp`, `login`) VALUES
(1, '$2y$10$ztFmtvCPCi4QQiGLMu54kej3LrkBQdjZ3VpLQJgTp6YGwqoTTX7My', '$2y$10$CXKsRtj3KvhzhtR/KrXvkeZss5DcHB/nlcDOFmpRjxbaMLh/rzHu.');

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
  ADD PRIMARY KEY (`id`),
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
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
