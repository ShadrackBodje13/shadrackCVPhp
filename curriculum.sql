-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 18 mai 2020 à 16:27
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `curriculum`
--

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `compte` (
  `id_compte` int(3) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `mot_de_passe` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`id_compte`, `username`, `mot_de_passe`) VALUES
(1, 'shad', 'shadis13');

-- --------------------------------------------------------

--
-- Structure de la table `education`
--

CREATE TABLE `education` (
  `id_education` int(3) NOT NULL,
  `titre` varchar(70) DEFAULT NULL,
  `sous_titre` varchar(35) DEFAULT NULL,
  `date_experience` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `experience`
--

CREATE TABLE `experience` (
  `id_experience` int(3) NOT NULL,
  `titre` varchar(20) DEFAULT NULL,
  `sous_titre` varchar(20) DEFAULT NULL,
  `date_experience` date DEFAULT NULL,
  `experience_descritpion` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `experience`
--

INSERT INTO `experience` (`id_experience`, `titre`, `sous_titre`, `date_experience`, `experience_descritpion`) VALUES
(1, 'Benevolat', 'ONG APEMAR', '2018-12-09', 'Chargé des informations de la logistique et des partages de cadeaux pour enfants demunis et malades'),
(2, 'Equipier polyvalent', 'Patisserie Les choux', '2018-12-09', 'Chargé de la logistique des relations clients aussi des transports de marchandises et comptage des elements du service traiteur');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`id_compte`);

--
-- Index pour la table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id_education`);

--
-- Index pour la table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id_experience`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `compte`
--
ALTER TABLE `compte`
  MODIFY `id_compte` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `education`
--
ALTER TABLE `education`
  MODIFY `id_education` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `experience`
--
ALTER TABLE `experience`
  MODIFY `id_experience` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
