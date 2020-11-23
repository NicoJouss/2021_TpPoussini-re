-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Lun 23 Novembre 2020 à 10:39
-- Version du serveur :  5.7.32-0ubuntu0.18.04.1
-- Version de PHP :  7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `poussiniere`
--

-- --------------------------------------------------------

--
-- Structure de la table `Capteur`
--

CREATE TABLE `Capteur` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Nom` varchar(30) NOT NULL,
  `Relever` int(11) NOT NULL,
  `date_relever` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Capteur`
--

INSERT INTO `Capteur` (`ID`, `Nom`, `Relever`, `date_relever`) VALUES
(1, 'Capteur température air', 34, '2020-11-18 00:00:00'),
(2, 'Capteur température eau', 29, '2020-11-18 00:00:00'),
(3, 'Capteur température air', 34, '2020-11-18 00:00:00'),
(4, 'Capteur température eau', 29, '2020-11-18 00:00:00'),
(5, 'Capteur niveau d\'eau', 94, '2020-11-18 00:00:00'),
(6, 'Capteur niveau d\'eau', 94, '2020-11-18 00:00:00'),
(7, 'Capteur niveau de nourriture', 87, '2020-11-18 00:00:00'),
(8, 'Capteur détecteur de présence', 0, '2020-11-18 00:00:00'),
(9, 'Capteur niveau de nourriture', 87, '2020-11-18 00:00:00'),
(10, 'Capteur détecteur de présence', 0, '2020-11-18 00:00:00');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Capteur`
--
ALTER TABLE `Capteur`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Capteur`
--
ALTER TABLE `Capteur`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
