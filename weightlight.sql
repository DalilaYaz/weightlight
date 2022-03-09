-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 09 mars 2022 à 10:48
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `weightlight`
--

-- --------------------------------------------------------

--
-- Structure de la table `consommer`
--

CREATE TABLE `consommer` (
  `idUser` int(11) NOT NULL,
  `idRepas` int(11) NOT NULL,
  `idType` int(11) NOT NULL,
  `dateCons` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `pratiquer`
--

CREATE TABLE `pratiquer` (
  `idUser` int(11) NOT NULL,
  `idSport` int(11) NOT NULL,
  `duree` varchar(50) DEFAULT NULL,
  `dateSport` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `repas`
--

CREATE TABLE `repas` (
  `idRepas` int(11) NOT NULL,
  `intitule` varchar(100) DEFAULT NULL,
  `imgRepas` varchar(150) DEFAULT NULL,
  `calories` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `sport`
--

CREATE TABLE `sport` (
  `idSport` int(11) NOT NULL,
  `nomSport` varchar(50) DEFAULT NULL,
  `isActif` tinyint(1) DEFAULT NULL,
  `imgSport` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `sport`
--

INSERT INTO `sport` (`idSport`, `nomSport`, `isActif`, `imgSport`) VALUES
(1, 'Football', NULL, NULL),
(2, 'Natation', NULL, NULL),
(3, 'Basket-ball', NULL, NULL),
(4, 'Cyclisme', NULL, NULL),
(5, 'Course à pied', NULL, NULL),
(6, 'Pêche', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `idType` int(11) NOT NULL,
  `nomType` varchar(50) DEFAULT NULL,
  `imgType` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`idType`, `nomType`, `imgType`) VALUES
(1, 'Petit Déjeuner', NULL),
(2, 'Déjeuner', NULL),
(3, 'Collation', NULL),
(4, 'Dîner', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `idUser` int(11) NOT NULL,
  `nomUt` varchar(50) DEFAULT NULL,
  `prenomUt` varchar(50) DEFAULT NULL,
  `avatar` varchar(150) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `poids` varchar(50) DEFAULT NULL,
  `taille` varchar(50) DEFAULT NULL,
  `dateNaiss` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `consommer`
--
ALTER TABLE `consommer`
  ADD PRIMARY KEY (`idUser`,`idRepas`,`idType`),
  ADD KEY `idRepas` (`idRepas`),
  ADD KEY `idType` (`idType`);

--
-- Index pour la table `pratiquer`
--
ALTER TABLE `pratiquer`
  ADD PRIMARY KEY (`idUser`,`idSport`),
  ADD KEY `idSport` (`idSport`);

--
-- Index pour la table `repas`
--
ALTER TABLE `repas`
  ADD PRIMARY KEY (`idRepas`);

--
-- Index pour la table `sport`
--
ALTER TABLE `sport`
  ADD PRIMARY KEY (`idSport`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`idType`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `repas`
--
ALTER TABLE `repas`
  MODIFY `idRepas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `sport`
--
ALTER TABLE `sport`
  MODIFY `idSport` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `idType` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `consommer`
--
ALTER TABLE `consommer`
  ADD CONSTRAINT `consommer_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `utilisateur` (`idUser`),
  ADD CONSTRAINT `consommer_ibfk_2` FOREIGN KEY (`idRepas`) REFERENCES `repas` (`idRepas`),
  ADD CONSTRAINT `consommer_ibfk_3` FOREIGN KEY (`idType`) REFERENCES `type` (`idType`);

--
-- Contraintes pour la table `pratiquer`
--
ALTER TABLE `pratiquer`
  ADD CONSTRAINT `pratiquer_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `utilisateur` (`idUser`),
  ADD CONSTRAINT `pratiquer_ibfk_2` FOREIGN KEY (`idSport`) REFERENCES `sport` (`idSport`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
