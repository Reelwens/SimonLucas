-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Lun 17 Avril 2017 à 14:58
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `simonlucas`
--

-- --------------------------------------------------------

--
-- Structure de la table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `picture` varchar(255) CHARACTER SET utf8 NOT NULL,
  `preference` int(11) NOT NULL,
  `time` varchar(255) CHARACTER SET utf8 NOT NULL,
  `creation_date` varchar(255) CHARACTER SET utf8 NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `skills` varchar(255) CHARACTER SET utf8 NOT NULL,
  `github` varchar(255) CHARACTER SET utf8 NOT NULL,
  `link` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `projects`
--

INSERT INTO `projects` (`id`, `name`, `description`, `picture`, `preference`, `time`, `creation_date`, `date`, `skills`, `github`, `link`) VALUES
(1, 'Affiche LaLaLand', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo ducimus, voluptatum quia suscipit. Beatae quibusdam consequuntur, veritatis expedita, necessitatibus provident perspiciatis eligendi odit quia eius tenetur, quis voluptatum, sunt iste.<br/><br/>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam dolor recusandae cumque cum rerum quisquam id quas suscipit!', 'project1.png', 1, '1 semaine', '10 janvier 2017', '2017-01-09 23:11:40', 'PHP, CSS, After Effect, Photoshop', '#', '#'),
(2, 'Bonjour', 'Ceci est un texte très intéressant blablablabla ! Oui.', 'project1.png', 2, '1 an', '5 mars 2017', '2017-03-05 21:46:46', 'De la patience', '#', '#'),
(3, 'Un projet', 'Regardez donc ce projet merveilleux !', 'project1.png', 3, '1 an', '15 décembre 2016', '2016-12-15 21:46:46', 'De la patience', 'lien', 'lien');

-- --------------------------------------------------------

--
-- Structure de la table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 NOT NULL,
  `picture` varchar(255) CHARACTER SET utf8 NOT NULL,
  `preference` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `skills`
--

INSERT INTO `skills` (`id`, `name`, `description`, `picture`, `preference`, `date`) VALUES
(2, 'PHP', 'J’ai réalisé le PHP de différents sites internet, allant de la gestion de base de donnée à la manipulation d’APIs', 'php.png', 1, '2017-04-14 22:03:29'),
(3, 'CSS', 'Je suis bon en CSS', 'php.png', 2, '2017-04-14 22:03:29'),
(4, 'Photoshop', 'J\'aime manger des chocapics', 'php.png', 3, '2017-04-14 22:03:29'),
(5, 'Javascript', 'Vaoooo', 'php.png', 4, '2017-04-14 22:03:29'),
(6, 'After Effect', 'AH !', 'php.png', 5, '2017-04-14 22:03:29');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
