-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Lun 24 Décembre 2018 à 11:17
-- Version du serveur :  5.7.14
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `petition`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `pseudo` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`pseudo`, `mail`, `message`) VALUES
('jjdjjdf', 'jdjjjd@gmail.com', 'kdkkdkkdkkd'),
('a', 'jj@gmail.com', 'salut'),
('jules', 'nd@gmail.com', 'Jules salut'),
('Nj', 'Nj@gmail.com', 'yes papa'),
('julesnjh', 'nj@gmail.com', 'test final'),
('nh', 'hhs@gmail.com', 'tee'),
('Kwabong', 'kwabong@gmail.com', 'dsagg'),
('salut', 'how@gmail.com', 'salut moi'),
('moi', 'hyh@gmail.com', 'salut toi');

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE `inscription` (
  `id` int(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `inscription`
--

INSERT INTO `inscription` (`id`, `pseudo`, `email`, `password`) VALUES
(7, 'admin', 'admin@gmail.com', '12345');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`pseudo`),
  ADD UNIQUE KEY `pseudo` (`pseudo`);

--
-- Index pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pseudo` (`pseudo`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `inscription`
--
ALTER TABLE `inscription`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
