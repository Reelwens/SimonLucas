-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Dim 30 Avril 2017 à 00:48
-- Version du serveur :  5.5.54-0+deb8u1
-- Version de PHP :  5.6.29-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `simonlucas`
--

-- --------------------------------------------------------

--
-- Structure de la table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `picture` varchar(255) NOT NULL,
  `preference` int(11) NOT NULL,
  `time` varchar(255) NOT NULL,
  `creation_date` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `skills` varchar(255) NOT NULL,
  `github` varchar(255) NOT NULL DEFAULT '#',
  `link` varchar(255) NOT NULL DEFAULT '#'
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `projects`
--

INSERT INTO `projects` (`id`, `name`, `description`, `picture`, `preference`, `time`, `creation_date`, `date`, `skills`, `github`, `link`) VALUES
(1, 'Affiche LaLaLand', 'Cette affiche a été réalisée dans le cadre de mes cours de design. L''exercice consistait à créer l''affiche d''un film dans le style de Olly Moss. La difficulté de l''exercice était de créer une double lecture tout en respectant le style de l''artiste.</br></br>La majeure partie de mon temps a été concentrée sur la réflexion : la lune représente un spot de spectacle, et les bâtiments un piano. Ces éléments sont intégrés dans un univers aux couleurs festives du film.', 'lalaland.jpg', 10, '2 semaines', 'Mars 2017', '2017-03-13 23:00:00', 'Photoshop', '#', 'http://bit.ly/2pRjoke'),
(2, 'Discover Mars', 'Discover Mars est un site internet proposant à l''utilisateur de récupérer instantanément les données de n''importe quel jour fourni par le robot Curiosity sur Mars. Cela inclut la température, la météo, le lever du soleil... mais surtout de nombreuses photographies !</br></br>Discover Mars a été réalisé en compagnie de 2 développeurs. Ceux-ci se sont occupés de l''ensemble du font-end pendant que je travaillais sur le back-end.', 'discovermars.png', 20, '4 jours', 'Mars 2017', '2017-03-30 22:00:00', 'PHP, APIs, SQL, Ajax', 'http://bit.ly/2pRiRP5', 'http://bit.ly/2pg4rMn'),
(3, 'Jeu : Barber shop', 'Barber Shop est un jeu de type « Click Game ». Le joueur incarne Teddy Abernathy et a pour but de faire prospérer sa boutique de barberie. Système d''incrémentation, améliorations, scénario et originalité sont présents.</br></br>Ce projet web a été réalisé dans le cadre de HETIC en 4 jours initiaux et amélioré sur le temps.', 'barbershop.png', 40, '4 jours initiaux', 'Décembre 2016', '2016-12-15 23:00:00', 'Javascript, game design, CSS', 'http://bit.ly/2oV9GQC', 'http://bit.ly/2oLnPiN'),
(4, 'SamaGames', 'Je suis créateur de ce serveur Minecraft et j''y travaille bénévolement durant mon temps libre depuis près de 3 ans. J''y assure le management à distance d''une équipe de 50 membres passionnés et je développe la stratégie de communication du projet.</br></br>SamaGames enregistre plus de 400 000 joueurs uniques et est très connu au sein de la communauté Minecraft francophone.', 'samagames.png', 30, 'Environ 3 ans', 'De 2014 à aujourd''hui', '2014-07-30 22:00:00', 'Gestion de projet, CM, design...', '#', 'http://bit.ly/2oLiVlV'),
(5, 'simonlucas.fr', 'Ce projet est le site sur lequel vous vous tenez. Il me permet de renseigner mes différents projets réalisés et de lister mes différentes compétences sur un site internet sobre et simple.</br></br>Des mises à jour futures sont prévues afin de l''améliorer autant que possible.', 'simonlucas.png', 50, '1 semaine', 'Avril 2017', '2017-04-18 19:49:39', 'Photoshop, CSS, PHP', 'http://bit.ly/2omXFA4', '#'),
(6, 'Refonte page wikipédia', 'L''objectif de ce projet était de proposer une refonte graphique du site internet Wikipédia. Le travail prédominant était de respecter une structure très ordonnée via la création d''une grille, d''une type scale, d''une baseline grid...</br></br>Ce projet m''a permis de m''entraîner à travailler avec une grille et à prendre l''habitude de concevoir des maquettes structurées.', 'wikipedia.png', 85, '2 jours', 'Avril 2017', '2017-04-12 22:00:00', 'Photoshop', '#', 'http://bit.ly/2pRADBR'),
(7, 'Motion design "Plagiat"', 'À l''occasion de la sortie d''un nouveau jeu sur le serveur Minecraft SamaGames, j''ai réalisé une vidéo en Motion Design ayant pour rôle d''annoncer cette sortie et de présenter le jeu.</br></br>Cette vidéo a été réalisée en collaboration avec un ami. Je me suis ainsi chargé de tous les éléments en motion design tandis qu''il s''est occupé des prises du jeu et du montage Première Pro.', 'plagiat.png', 70, '2 semaines', 'Mars 2017', '2017-03-31 18:00:00', 'After Effect, Photoshop', '#', 'http://bit.ly/2pBpU20'),
(8, 'Mandala « Harry Potter »', 'Cette réalisation est un Mandala sur le thème de Harry Potter.</br></br>Etant un très grand fan de cet univers, j''ai pris un énorme plaisir à réaliser de nombreux éléments y faisant référence et à les mettre en forme dans ce Mandala.', 'mandala.png', 80, '2 semaines', 'Janvier 2017', '2017-01-13 23:00:00', 'Illustrator', '#', 'http://bit.ly/2oLhzY4'),
(9, 'Minecraft items manager', 'Minecraft items manager est un site internet permettant à ses utilisateurs de gérer les différents items du jeu et d''y ajouter les leurs.</br></br>L''ajout et la suppression d''items a été bloqué du fait de la mise en publique du site. Ce projet a été mon premier réalisé en PHP !', 'itemsmanager.png', 90, '2 semaines', 'Mars 2017', '2017-03-12 22:21:19', 'PHP, SQL, CSS, Javascript', 'http://bit.ly/2pBvUaS', 'http://bit.ly/2maq8Yb'),
(11, 'Photographies', 'Je passe une partie de mon temps libre à m''exercer dans l''art de la photographie. Je réalise ponctuellement des sorties photo afin de m''exercer et de graver des moments de vie.</br></br>Je dispose d''un Canon 700D ainsi que plusieurs objectifs. Naviguez sur mon Flickr pour consulter mes photos favorites !', 'photography.jpg', 100, 'Environ 1 an', 'Depuis 2016', '2015-12-31 23:00:00', 'Photographie', '#', 'https://www.flickr.com/photos/147037282@N05/'),
(12, 'Maquette "Tales F. The Loop"', 'Maquette web du jeu "Tales From The Loop", un jeu de rôle constitué de visuels particulièrement créatifs. Cette maquette répond à des contraintes client particulières : le site internet a été conçu de sorte à ce que le visiteur soit immergé dans l''univers rétro-futuriste du dessinateur.</br></br>La maquette a d''abord été dessinée sur papier, puis à travers des wireframes, pour enfin être créée. Consultez l''animation After Effect à travers le lien.', 'talesfrom.png', 25, '2 jours', 'Février 2017', '2017-02-02 23:00:00', 'Photoshop, After Effect', '#', 'https://www.youtube.com/watch?v=P6Cy7r_N-1M&feature=youtu.be');

-- --------------------------------------------------------

--
-- Structure de la table `skills`
--

CREATE TABLE IF NOT EXISTS `skills` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `preference` int(11) NOT NULL,
  `theme` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `skills`
--

INSERT INTO `skills` (`id`, `name`, `rating`, `picture`, `preference`, `theme`, `date`) VALUES
(1, 'Photoshop', '◆◆◆◆◆', 'photoshop.jpg', 10, '2_design', '2017-04-18 17:48:21'),
(5, 'HTML/CSS', '◆◆◆◆◆', 'html_css.jpg', 20, '1_dev', '2017-04-18 23:00:57'),
(6, 'SASS', '◆◆◆◆◇', 'sass.png', 30, '1_dev', '2017-04-18 23:02:14'),
(8, 'Illustrator', '◆◆◆◆◇', 'illustrator.jpg', 50, '2_design', '2017-04-18 23:03:36'),
(9, 'InDesign', '◆◆◆◆◇', 'indesign.jpg', 60, '2_design', '2017-04-18 23:11:47'),
(10, 'Photographie', '◆◆◆◆◇', 'photographie.png', 80, '4_autre', '2017-04-18 23:11:47'),
(11, 'Community M.', '◆◆◆◆◇', 'cm.jpg', 70, '3_com', '2017-04-18 23:11:47'),
(12, 'PHP', '◆◆◆◇◇', 'php.png', 90, '1_dev', '2017-04-18 23:11:47'),
(13, 'Première Pro', '◆◆◆◇◇', 'premiere.jpg', 100, '2_design', '2017-04-18 23:11:47'),
(14, 'Dir. de projet', '◆◆◆◇◇', 'direction.jpg', 85, '3_com', '2017-04-18 23:11:47'),
(15, 'After Effect', '◆◆◆◇◇', 'after.jpg', 87, '2_design', '2017-04-18 23:11:47'),
(16, 'SEO', '◆◆◇◇◇', 'seo.jpg', 110, '3_com', '2017-04-18 23:11:47'),
(17, 'Javascript', '◆◆◇◇◇', 'js.png', 120, '1_dev', '2017-04-18 23:11:47'),
(18, 'Linux', '◆◆◇◇◇', 'linux.png', 200, '4_autre', '2017-04-18 22:59:59');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `projects`
--
ALTER TABLE `projects`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `skills`
--
ALTER TABLE `skills`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `projects`
--
ALTER TABLE `projects`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `skills`
--
ALTER TABLE `skills`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
