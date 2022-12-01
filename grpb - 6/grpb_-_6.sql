-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 01 Décembre 2022 à 19:01
-- Version du serveur :  5.7.11
-- Version de PHP :  7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `grpb - 6`
--
CREATE DATABASE IF NOT EXISTS `grpb - 6` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `grpb - 6`;

-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

CREATE TABLE `projets` (
  `id` int(11) NOT NULL,
  `prenom` varchar(80) NOT NULL,
  `titre` varchar(80) NOT NULL,
  `img1` varchar(500) NOT NULL,
  `img2` varchar(500) NOT NULL,
  `img3` varchar(500) NOT NULL,
  `img4` varchar(500) NOT NULL,
  `HTML` int(100) NOT NULL,
  `CSS` int(100) NOT NULL,
  `JS` int(100) NOT NULL,
  `PHP` int(100) NOT NULL,
  `SQL` int(100) NOT NULL,
  `P1` varchar(500) NOT NULL,
  `P2` varchar(500) NOT NULL,
  `P3` varchar(500) NOT NULL,
  `H2` varchar(500) NOT NULL,
  `H3` varchar(500) NOT NULL,
  `H4` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `projets`
--

INSERT INTO `projets` (`id`, `prenom`, `titre`, `img1`, `img2`, `img3`, `img4`, `HTML`, `CSS`, `JS`, `PHP`, `SQL`, `P1`, `P2`, `P3`, `H2`, `H3`, `H4`) VALUES
(1, 'Dylan', 'Squadhost', 'img/Dylan.jpg', 'img/Kyhudji_background.jpg', 'img/Kyhudji_background.jpg', 'img/Kyhudji_background.jpg', 60, 50, 35, 10, 10, 'bfxdfkjsdfmoksfljhbpdfbnh', 'df,;jhdf;hfdhkfh,dfs;:khjfsd;kfdhfh', 'hfshsfhfhffklnhdfhfdhgdfjwsjekfghzefzfdzdf', 'zcfzcdezsexszcdz', 'sdzcdzscdcd', 'zcfzfz'),
(2, 'william', 'Kyhudji.gg', 'img/william.jpg', 'img/rocket-league-x-monstercat-hr.jpg', 'img/Valorant_img.jpg.png', 'img/Trackmania.jpg', 55, 60, 25, 15, 15, 'Mon expérience en esports Rocket league', 'Mon espérience en esports VALORANT', 'Mon espérience en esports TrackMania', 'Esport Rocket League', 'Esport Valorant', 'Esport TrackMania');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `username` varchar(80) NOT NULL,
  `admin` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `username`, `admin`) VALUES
(4, 'legamerdu8971@gmail.com', '379b0d0ee970124ecfcc0758a568e42d9d0977ac', '1234', 1),
(5, 'beney7189@gmail.com', '379b0d0ee970124ecfcc0758a568e42d9d0977ac', 'sdjbvfgduwivjkfv', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `projets`
--
ALTER TABLE `projets`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `projets`
--
ALTER TABLE `projets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
