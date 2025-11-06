-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 04 sep. 2025 à 15:39
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
-- Base de données : `valve_electronique`
--

-- --------------------------------------------------------

--
-- Structure de la table `communiques`
--

CREATE TABLE `communiques` (
  `id` int(11) NOT NULL,
  `titre` varchar(200) NOT NULL,
  `auteur` varchar(100) NOT NULL,
  `datte` date NOT NULL,
  `details` text NOT NULL,
  `fichier_nom` text NOT NULL,
  `fichier_chemin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `communiques`
--

INSERT INTO `communiques` (`id`, `titre`, `auteur`, `datte`, `details`, `fichier_nom`, `fichier_chemin`) VALUES
(54, 'Projet tutores', 'recteur', '0055-03-31', 'bonjour les etudiants', 'Notes electroniques part 2.pdf', 'mesFichiers/Notes electroniques part 2.pdf'),
(55, 'suspension des activites academiques', 'recteur', '2025-09-13', 'Suspension des activites academiques', 'Prog_Grap_I Module 1_Présentation de JAVA et Installation des outils nécessaires.pdf', 'mesFichiers/Prog_Grap_I Module 1_Présentation de JAVA et Installation des outils nécessaires.pdf'),
(56, 'FICHIERS', 'recteur', '2025-09-21', 'uhajkdfd', 'Prog_Grap_I Module 1_Présentation de JAVA et Installation des outils nécessaires.pdf', 'mesFichiers/Prog_Grap_I Module 1_Présentation de JAVA et Installation des outils nécessaires.pdf'),
(57, 'fridi', 'secretaire', '2025-09-13', 'annonce', 'TRAVAIL PRATIQUE ANGLAIS.pdf', 'mesFichiers/TRAVAIL PRATIQUE ANGLAIS.pdf'),
(58, 'decanat labo', 'promesse', '2025-09-11', 'jhgggfgf', 'TRAVAIL PRATIQUE ANGLAIS.pdf', 'mesFichiers/TRAVAIL PRATIQUE ANGLAIS.pdf'),
(59, 'fridi', 'secretaire', '2025-09-10', 'hytyft', 'TRAVAIL PRATIQUE ANGLAIS.pdf', 'mesFichiers/TRAVAIL PRATIQUE ANGLAIS.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `horaires`
--

CREATE TABLE `horaires` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `datte` date NOT NULL,
  `fichier_nom` varchar(255) NOT NULL,
  `fichier_chemin` varchar(255) NOT NULL,
  `faculte` varchar(255) NOT NULL,
  `semaine` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `horaires`
--

INSERT INTO `horaires` (`id`, `titre`, `details`, `datte`, `fichier_nom`, `fichier_chemin`, `faculte`, `semaine`) VALUES
(10, 'Horaire du 28 septembre', 'Horaire disponible', '2025-09-03', 'expose.pdf', 'horaires/expose.pdf', 'theologie', '2025-W37'),
(11, 'decanat labo', 'cette horaire va prendre 2 semaine', '2025-09-04', 'TRAVAIL PRATIQUE ANGLAIS.pdf', 'horaires/TRAVAIL PRATIQUE ANGLAIS.pdf', 'labo', '2025-W39'),
(12, 'decanat agronomie', 'horaire pour une semaine', '2025-09-05', 'TRAVAIL PRATIQUE ANGLAIS.pdf', 'horaires/TRAVAIL PRATIQUE ANGLAIS.pdf', 'agro', '2025-W38'),
(13, 'decanat theologie', 'disponible', '2025-09-05', 'TRAVAIL PRATIQUE ANGLAIS.pdf', 'horaires/TRAVAIL PRATIQUE ANGLAIS.pdf', 'theologie', '2025-W40'),
(14, 'decanat imagerie', 'disponible', '2025-09-11', 'TRAVAIL PRATIQUE ANGLAIS.pdf', 'horaires/TRAVAIL PRATIQUE ANGLAIS.pdf', 'imgMedicale', '2025-W37'),
(15, 'decanat soin', 'disponible', '2025-09-17', 'TRAVAIL PRATIQUE ANGLAIS.pdf', 'horaires/TRAVAIL PRATIQUE ANGLAIS.pdf', 'soins', '2025-W38');

-- --------------------------------------------------------

--
-- Structure de la table `resultats`
--

CREATE TABLE `resultats` (
  `id` int(11) NOT NULL,
  `faculte` varchar(200) NOT NULL,
  `promotion` varchar(10) NOT NULL,
  `datte` date NOT NULL,
  `details` text NOT NULL,
  `annee` int(11) NOT NULL,
  `fichier_nom` text NOT NULL,
  `fichier_chemin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `resultats`
--

INSERT INTO `resultats` (`id`, `faculte`, `promotion`, `datte`, `details`, `annee`, `fichier_nom`, `fichier_chemin`) VALUES
(46, 'gestion', 'l1', '2025-09-11', 'S\'il y a encore quelqu\'un qui n\'est pas en ordre par exemple du cote frais académique qu\'il règle d\'abord tout cela pour que on lui affiche aussi, si tu remarque l\'absence de ton nom sur la liste ca veut dire que tu as encore des affaires a réglés avec la finance .\r\n\r\nvalidation de tout les cours \r\nISABEL\r\nKAZIMOTO\r\nBIENVENUE\r\n', 2025, 'Info generale version 2.pdf', 'resultats/Info generale version 2.pdf'),
(47, 'theologie', 'l4', '2025-09-11', ' valide\r\n*KAAPO LA VIE  KISANDO\r\n*KAMBALE SIPRIER LUVUNO\r\n*NDAMBA SUZA LIZBI \r\n*MBAKWIRAVYO FURAHA KAHINDO\r\n\r\n', 2025, 'cours electronique part1.pdf', 'resultats/cours electronique part1.pdf'),
(48, 'theologie', 'master2', '2025-09-03', 'Tout le monde a reussi', 2025, 'Info generale version 2.pdf', 'resultats/Info generale version 2.pdf');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `communiques`
--
ALTER TABLE `communiques`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `horaires`
--
ALTER TABLE `horaires`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `resultats`
--
ALTER TABLE `resultats`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `communiques`
--
ALTER TABLE `communiques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT pour la table `horaires`
--
ALTER TABLE `horaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `resultats`
--
ALTER TABLE `resultats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
