-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  mar. 13 mars 2018 à 18:02
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
  `Nom` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `genre`
--

INSERT INTO `genre` (`ID`, `Nom`, `description`) VALUES
(1, 'MMO', 'Massive multiplayer online'),
(2, 'FPS', 'First person shooter'),
(3, 'MOBA', 'Multiplayer online battle arena'),
(4, 'RPG', 'Role playing game');

-- --------------------------------------------------------

--
-- Structure de la table `jeuxvideo`
--

CREATE TABLE `jeuxvideo` (
  `ID` int(100) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `idGenre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `jeuxvideo`
--

INSERT INTO `jeuxvideo` (`ID`, `Nom`, `description`, `idGenre`) VALUES
(1, 'Eve online', 'eve est un mmo rpg baser dans le futur ', 1),
(2, 'world of warcraft ', 'word of warcraft est un mmo rpg', 1),
(3, 'Battlefield 1', 'battlefield 1 est un fps de la ww1', 2),
(4, 'the elder scrolls online', 'TESO est une mmo rpg dans l\'univer de elder scrolls', 1),
(5, 'call of duty', 'cod est un fps', 2),
(7, 'counter strike', 'un jeu fps competitif multijoueur', 2),
(8, 'half life 2', 'un fps dont la trilogie ne ce conclura jamais', 2),
(9, 'world of tanks', 'un jeu mmo / moba de tank', 1),
(10, 'warthunder', 'une simulation mmo / moba de vehicule de guerre', 1),
(15, 'League of Legends', 'un moba', 3),
(16, 'Skyrim', 'un RPG', 4),
(17, 'Fallout 4', 'un rpg', 4),
(18, 'Dota', 'un moba', 3);

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `jeuxvideo`
--
ALTER TABLE `jeuxvideo`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
