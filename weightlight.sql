-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 03 avr. 2022 à 12:08
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
-- Structure de la table `demo`
--

CREATE TABLE `demo` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `demo`
--

INSERT INTO `demo` (`id`, `name`, `gender`) VALUES
(0, '', ''),
(0, '', 'Male'),
(0, 'testchaima', 'Female');

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

--
-- Déchargement des données de la table `repas`
--

INSERT INTO `repas` (`idRepas`, `intitule`, `imgRepas`, `calories`) VALUES
(1, 'sdhfgdsf', NULL, '323234'),
(2, 'test', NULL, '123 kcal'),
(3, 'poulet', NULL, '12 kcal'),
(4, 'sdhf', NULL, '2346'),
(5, 'nbfvhsd', NULL, '4532'),
(6, 'gdhf', NULL, '34');

-- --------------------------------------------------------

--
-- Structure de la table `sport`
--

CREATE TABLE `sport` (
  `idSport` int(11) NOT NULL,
  `nomSport` varchar(50) DEFAULT NULL,
  `isActif` tinyint(1) DEFAULT NULL,
  `duree` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `sport`
--

INSERT INTO `sport` (`idSport`, `nomSport`, `isActif`, `duree`) VALUES
(1, 'Football', NULL, NULL),
(2, 'Natation', NULL, NULL),
(3, 'Basket-ball', NULL, NULL),
(4, 'Cyclisme', NULL, NULL),
(5, 'Course à pied', NULL, NULL),
(6, 'Pêche', NULL, NULL),
(12, 'Natation', NULL, NULL),
(13, 'gfg', NULL, '34');

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
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`idUser`, `nomUt`, `prenomUt`, `avatar`, `email`, `password`, `poids`, `taille`, `dateNaiss`) VALUES
(3, 'Chaimaa', 'Lougsari', NULL, 'chaima.lougsari@gmail.com', '464769b881b0cd17cae450c9ceb81f30', '48', '162', '2000-12-06'),
(4, 'test1', 'test1', NULL, 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6', '123', '123', '2022-03-18'),
(5, 'test2', 'test2', NULL, 'test2@gmail.com', 'ad0234829205b9033196ba818f7a872b', '122', '213', '2022-03-01'),
(6, 'sdvsdkhfsd', 'snbdfvhsdfsk', NULL, 'test3@gmail.com', '098f6bcd4621d373cade4e832627b4f6', '23', '23', '2022-04-01'),
(7, 'dvfhdsf', 'dsghfsd', NULL, 'test4@gmail.com', '098f6bcd4621d373cade4e832627b4f6', '213', '23', '2022-03-19'),
(8, '', '', NULL, 'test7@gmail.com', 'b04083e53e242626595e2b8ea327e525', '23', '213', '2022-03-09');

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
  MODIFY `idRepas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `sport`
--
ALTER TABLE `sport`
  MODIFY `idSport` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `idType` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
