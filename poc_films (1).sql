-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 02 avr. 2024 à 11:27
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `poc_films`
--

-- --------------------------------------------------------

--
-- Structure de la table `films`
--

CREATE TABLE `films` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `films`
--

INSERT INTO `films` (`id`, `titre`, `description`, `image`) VALUES
(26, 'Petit Ours', 'Ce film parle d\'un petit ours qui dort.', NULL),
(27, 'Faible Ours', 'Ce film parle d\'un faible ours qui court.', NULL),
(28, 'Fort Lion', 'Ce film parle d\'un fort lion qui nage.', NULL),
(29, 'Lent Ours', 'Ce film parle d\'un lent ours qui saute.', NULL),
(30, 'Fort Chat', 'Ce film parle d\'un fort chat qui saute.', NULL),
(31, 'Petit Chien', 'Ce film parle d\'un petit chien qui nage.', NULL),
(32, 'Fort Ours', 'Ce film parle d\'un fort ours qui saute.', NULL),
(33, 'Faible Tigre', 'Ce film parle d\'un faible tigre qui dort.', NULL),
(34, 'Lent Chien', 'Ce film parle d\'un lent chien qui nage.', NULL),
(35, 'Petit Chat', 'Ce film parle d\'un petit chat qui crie.', NULL),
(36, 'Rapide Cheval', 'Ce film parle d\'un rapide cheval qui crie.', NULL),
(37, 'Rapide Tigre', 'Ce film parle d\'un rapide tigre qui nage.', NULL),
(38, 'Lent Chat', 'Ce film parle d\'un lent chat qui crie.', NULL),
(39, 'Petit Chien', 'Ce film parle d\'un petit chien qui vole.', NULL),
(40, 'Rapide Lion', 'Ce film parle d\'un rapide lion qui vole.', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `films`
--
ALTER TABLE `films`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
