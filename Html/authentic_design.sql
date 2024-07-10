-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 10 juil. 2024 à 12:41
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `authentic design`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `nom`, `prenom`, `email`, `password`) VALUES
(1, 'BIGDEV', 'Felly', 'fellybinene142@gmail.com', '123456789'),
(2, 'binene', 'Felly', 'fellybinene@gmail.com', '9048ead9080d9b27d6b2b6ed363cbf8cce795f7f'),
(3, 'Kaj', 'Ira', 'Ira@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441'),
(4, 'binene', 'Felly', 'fellybin@gmail.com', 'bfe54caa6d483cc3887dce9d1b8eb91408f1ea7a'),
(5, 'Kabole', 'David', 'David@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441'),
(6, 'Mufinda', 'Kevin', 'Kevin@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441'),
(7, 'Kabengele', 'Jhon', 'John@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441'),
(11, 'Ngoy', 'Elite', 'elite@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441'),
(12, 'Trump', 'Jhon', 'TrumpJhon123_Dev$@gmail.com', 'bfe54caa6d483cc3887dce9d1b8eb91408f1ea7a'),
(13, 'Kena', 'Arsène ', 'ArseneKena@gmail.com', 'bfe54caa6d483cc3887dce9d1b8eb91408f1ea7a'),
(14, 'MUKUNA', 'DAVEED', 'daveedmukuna01@gmail.com', '58ad983135fe15c5a8e2e15fb5b501aedcf70dc2'),
(16, 'Arsene', 'Felly', 'arsene@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
