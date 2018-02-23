-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  jeu. 08 fév. 2018 à 20:23
-- Version du serveur :  5.7.21
-- Version de PHP :  7.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `jeux`
--

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

CREATE TABLE `genre` (
  `ID` int(11) NOT NULL,
  `Nom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `genre`
--

INSERT INTO `genre` (`ID`, `Nom`) VALUES
(1, 'MMO'),
(2, 'FPS'),
(3, 'MOBA'),
(4, 'RPG');

-- --------------------------------------------------------

--
-- Structure de la table `jeuxvideo`
--

CREATE TABLE `jeuxvideo` (
  `ID` int(100) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `jeuxvideo`
--

INSERT INTO `jeuxvideo` (`ID`, `Nom`, `description`) VALUES
(1, 'Eve online', 'eve est un mmo rpg baser dans le futur'),
(2, 'world of warcraft ', 'word of warcraft est un mmo rpg'),
(3, 'Battlefield 1', 'battlefield 1 est un fps'),
(4, 'the elder scrolls online', 'TESO est une mmo rpg dans l\'univer de elder scrolls'),
(5, 'call of duty', 'cod est un fps'),
(6, 'escape from tarkov', 'escape from tarkov est un fps'),
(7, 'counter strike', 'un jeu fps competitif multijoueur'),
(8, 'half life 2', 'un fps dont la trilogie ne ce conclura jamais'),
(9, 'world of tanks', 'un jeu mmo / moba de tank'),
(10, 'warthunder', 'une simulation mmo / moba de vehicule de guerre');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `jeuxvideo`
--
ALTER TABLE `jeuxvideo`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Nom` (`Nom`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `genre`
--
ALTER TABLE `genre`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `jeuxvideo`
--
ALTER TABLE `jeuxvideo`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
