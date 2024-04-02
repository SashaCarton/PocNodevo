-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 02 avr. 2024 à 10:12
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
(1, 'Film 1', 'Ceci est une description du Film 1.', 'chemin/vers/image1.jpg'),
(2, 'Film 2', 'Ceci est une description du Film 2.', 'chemin/vers/image2.jpg'),
(3, 'Film 3', 'Ceci est une description du Film 3.', 'chemin/vers/image3.jpg'),
(4, 'Film 4', 'Ceci est une description du Film 4.', 'chemin/vers/image4.jpg'),
(5, 'Film 5', 'Ceci est une description du Film 5.', 'chemin/vers/image1.jpg'),
(6, 'Film 6', 'Ceci est une description du Film 6.', 'chemin/vers/image2.jpg'),
(7, 'Film 7', 'Ceci est une description du Film 7.', 'chemin/vers/image3.jpg'),
(8, 'Film 8', 'Ceci est une description du Film 8.', 'chemin/vers/image4.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
