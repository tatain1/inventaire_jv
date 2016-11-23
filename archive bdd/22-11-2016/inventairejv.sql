-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 22 Novembre 2016 à 20:53
-- Version du serveur :  10.1.16-MariaDB
-- Version de PHP :  5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `inventairejv`
--

-- --------------------------------------------------------

--
-- Structure de la table `general`
--

CREATE TABLE `general` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `console` varchar(255) NOT NULL,
  `boite` varchar(255) NOT NULL,
  `jaquette` varchar(255) NOT NULL,
  `cale` varchar(255) NOT NULL,
  `fourreau` varchar(255) NOT NULL,
  `notice` varchar(255) NOT NULL,
  `note` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `general`
--

INSERT INTO `general` (`id`, `nom`, `console`, `boite`, `jaquette`, `cale`, `fourreau`, `notice`, `note`, `status`, `created_at`, `modified_at`) VALUES
(1, 'Metroid', 'NES', 'Absent', '', 'Absent', 'Absent', 'Absent', '', 1, '0000-00-00 00:00:00', '2016-11-20 19:23:26'),
(2, 'Maniac  Mansion', 'NES', 'Absent', '', 'Absent', 'Absent', 'Absent', 'Etiquette abimée', 1, '0000-00-00 00:00:00', '2016-11-20 20:42:57'),
(3, 'Days of Thunder', 'NES', 'Absent', '', 'Absent', 'Absent', 'Absent', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Top Gun The Second Mission', 'NES', 'Absent', '', 'Absent', 'Absent', 'Absent', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'The Adventures of Bayou Billy', 'NES', 'Absent', '', 'Absent', 'Absent', 'Absent', 'Etiquette abimée', 1, '2016-11-20 15:09:39', '2016-11-20 20:43:21'),
(6, 'Gun Smoke', 'NES', 'Absent', '', 'Absent', 'Absent', 'Absent', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Duck Tales', 'NES', 'Absent', '', 'Absent', 'Absent', 'Absent', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Le Roi Lion', 'NES', 'Absent', '', 'Absent', 'Absent', 'Absent', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Burai Fighter', 'NES', 'Absent', '', 'Absent', 'Absent', 'Absent', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Totally Rad', 'NES', 'Absent', '', 'Absent', 'Absent', 'Absent', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Wild Gunman', 'NES', 'Absent', '', 'Absent', 'Absent', 'Absent', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Mission Impossible', 'NES', 'Absent', '', 'Absent', 'Absent', 'Absent', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Blades Of Steel', 'NES', 'Absent', '', 'Absent', 'Absent', 'Absent', '', 1, '0000-00-00 00:00:00', '2016-11-20 18:13:13'),
(14, 'Gumshoe', 'NES', 'Absent', '', 'Absent', 'Absent', 'Absent', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Jurassic Park', 'NES', 'Absent', '', 'Absent', 'Absent', 'Absent', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Soccer', 'NES', 'Absent', '', 'Absent', 'Black', 'Absent', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Lemmings', 'NES', 'Absent', '', 'Absent', 'Black', 'Absent', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Gauntlet II', 'NES', 'Absent', '', 'Absent', 'Black', 'Absent', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'Super Mario Bros. 2', 'NES', 'Absent', '', 'Absent', 'Black', 'Absent', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'The Legend of Prince Valiant', 'NES', 'Absent', '', 'Absent', 'Nintendo', 'Absent', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'Tetris', 'NES', 'Absent', '', 'Absent', 'Nintendo', 'Absent', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'Super Mario Bros. / Duck Hunt', 'NES', 'Absent', '', 'Absent', 'Nintendo', 'Absent', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'Dragonball', 'NES', 'Absent', '', 'Absent', 'Nintendo', 'Absent', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'Turtles Teenage Mutant Hero', 'NES', 'Absent', '', 'Absent', 'Nintendo', 'Absent', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'Castle Vania', 'NES', 'Absent', '', 'Absent', 'Nintendo', 'Absent', 'Etiquette et fourreau abimés', 1, '0000-00-00 00:00:00', '2016-11-20 20:38:22'),
(27, 'Double Dragon', 'NES', 'Absent', '', 'Absent', 'Nintendo', 'Absent', 'Etiquette et fourreau abimés', 1, '0000-00-00 00:00:00', '2016-11-20 20:38:56'),
(28, 'Corvette ZR-1 Challenge', 'NES', 'Absent', '', 'Absent', 'Nintendo', 'Absent', 'Etiquette abimée', 1, '0000-00-00 00:00:00', '2016-11-20 20:39:19'),
(29, 'Nes Open Tournament Golf', 'NES', 'Absent', '', 'Absent', 'Absent', 'Absent', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'Godzilla Monster of monster', 'NES', 'Absent', '', 'Absent', 'Absent', 'Absent', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'Excitebike', 'NES', 'Absent', '', 'Absent', 'Absent', 'Absent', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'Bubble Bobble', 'NES', 'Absent', '', 'Absent', 'Nintendo', 'Absent', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'Blue Shadow', 'NES', 'Absent', '', 'Absent', 'Black', 'Absent', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'Mario & Yoshi', 'NES', 'Absent', '', 'Absent', 'Nintendo', 'Absent', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 'Captain Planet and the Planeteers', 'NES', 'Absent', '', 'Absent', 'Nintendo', 'Absent', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 'High Speed', 'NES', 'Absent', '', 'Absent', 'Black', 'Absent', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 'Power Blade', 'NES', 'Absent', '', 'Absent', 'Black', 'Absent', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 'The Legend of Zelda', 'NES', 'Present', '', 'Present', 'Nintendo', 'Present', 'Carte non presente', 1, '0000-00-00 00:00:00', '2016-11-20 20:40:54'),
(39, 'Super Mario Bros. 3', 'NES', 'Present', '', 'Present', 'Black', 'Present', '', 1, '0000-00-00 00:00:00', '2016-11-20 20:42:21'),
(40, 'The Adventures of Link Zelda 2', 'NES', 'Present', '', 'Present', 'Black', 'Present', 'Carte non presente', 1, '0000-00-00 00:00:00', '2016-11-20 20:41:34'),
(51, 'Animal Crossing', 'gamecube', 'Present', '', 'Non Concerné', 'Non Concerné', 'Present', 'Carte memoire absente', 1, '2016-11-20 21:00:08', '0000-00-00 00:00:00'),
(52, 'Baten Kaitos Les ailes eternelles et l''ocean perdu', 'gamecube', 'Present', '', 'Non Concerné', 'Non Concerné', 'Present', '', 1, '2016-11-20 21:00:56', '0000-00-00 00:00:00'),
(53, 'Blood Omen 2', 'gamecube', 'Present', '', 'Non Concerné', 'Non Concerné', 'Absent', 'Boite abimée (interieur)', 1, '2016-11-20 21:01:16', '2016-11-20 21:02:20'),
(54, 'Braquage à l''Italienne', 'gamecube', 'Present', '', 'Non Concerné', 'Non Concerné', 'Absent', '', 1, '2016-11-20 21:01:42', '0000-00-00 00:00:00');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `general`
--
ALTER TABLE `general`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `general`
--
ALTER TABLE `general`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
