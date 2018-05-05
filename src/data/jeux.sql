-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  ven. 04 mai 2018 à 17:22
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
  `description_fr` text NOT NULL,
  `description_en` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `genre`
--

INSERT INTO `genre` (`ID`, `Nom`, `description_fr`, `description_en`) VALUES
(1, 'MMO', 'Massive multiplayer online', 'Massive multiplayer online'),
(2, 'FPS', 'First person shooter', 'First person shooter'),
(3, 'MOBA', 'Multiplayer online battle arena', 'Multiplayer online battle arena'),
(4, 'RPG', 'Role playing game', 'Role playing game');

-- --------------------------------------------------------

--
-- Structure de la table `jeuxvideo`
--

CREATE TABLE `jeuxvideo` (
  `ID` int(100) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `description_fr` varchar(1000) NOT NULL,
  `description_en` text,
  `idGenre` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `jeuxvideo`
--

INSERT INTO `jeuxvideo` (`ID`, `Nom`, `description_fr`, `description_en`, `idGenre`, `image`) VALUES
(1, 'Eve online', 'eve est un mmo rpg baser dans le futur et dans lespace ', 'eve is a mmo rpg based in the future and in space', 1, '../illustration/blue.png'),
(2, 'world of warcraft ', 'word of warcraft est un mmo rpg', 'world of warcraft is a mmo rpg', 1, ''),
(3, 'Battlefield 1', 'battlefield 1 est un fps de la ww1', 'battlefield 1 is a fps with a ww1 theme', 2, ''),
(4, 'the elder scrolls online', 'TESO est une mmo rpg dans l\'univer de elder scrolls', 'TESE is a mmo rpg based in the universe of elderscrolls', 1, ''),
(5, 'call of duty', 'cod est un fps', 'cod is a fps', 2, ''),
(7, 'counter strike', 'un jeu fps competitif multijoueur', 'a fps competive multiplayer game', 2, ''),
(8, 'half life 2', 'un fps dont la trilogie ne ce conclura jamais', 'a trillogy that will never be completed', 2, '../illustration/miniaturebase.png'),
(9, 'world of tanks', 'un jeu mmo / moba de tank', 'a mmo / moba with tanks', 1, '	\r\n../illustration/miniaturealecto.png'),
(10, 'warthunder', 'une simulation mmo / moba de vehicule de guerre', 'a simulation mmo/ moba vehicular combat', 1, ''),
(15, 'League of Legends', 'un moba', 'a moba', 3, ''),
(16, 'Skyrim', 'un RPG', 'a rpg', 4, ''),
(17, 'Fallout 4', 'un rpg', 'a rpg', 4, ''),
(18, 'Dota', 'un moba', 'a moba', 3, '');

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `prenom` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `couriel` varchar(100) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `motDePasse` varchar(200) NOT NULL,
  `sexe` text NOT NULL,
  `id` int(11) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`prenom`, `nom`, `couriel`, `telephone`, `adresse`, `motDePasse`, `sexe`, `id`, `admin`) VALUES
('guillaume', 'desjardins marceau', 'guillaume.d.marceau@gmail.com', '418-556', 'une addresse', 'admin1', 'homme', 1, 1),
('nadine', 'nadine', 'nadine@nadine.com', 'nadine', 'nadine', 'nadine', 'femme', 2, 1),
('test', 'test', 'test@test.com', '444', 'test', 'test', 'test', 3, 0);

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
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `genre`
--
ALTER TABLE `genre`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `jeuxvideo`
--
ALTER TABLE `jeuxvideo`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
