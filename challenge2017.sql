-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 15 Juin 2017 à 12:12
-- Version du serveur :  5.5.55-0+deb8u1
-- Version de PHP :  5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `challenge2017`
--

-- --------------------------------------------------------

--
-- Structure de la table `Apprenants`
--

CREATE TABLE IF NOT EXISTS `Apprenants` (
`idApprenant` int(11) NOT NULL,
  `idFormulaire` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `motDePasse` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `codePostal` varchar(255) NOT NULL,
  `centreDeFormation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Formateurs`
--

CREATE TABLE IF NOT EXISTS `Formateurs` (
`id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `centreDeFormation` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Formateurs`
--

INSERT INTO `Formateurs` (`id`, `nom`, `prenom`, `email`, `login`, `password`, `centreDeFormation`) VALUES
(1, 'test', 'test', 'hack@yahoo.fr', 'test', '$2y$10$4ARqhhd7UdzLCx13p93/fegaewgkQQAWvPuBsXdAFhpeOwt3PrILO', ''),
(3, 'teste', 'teste', 'hacke@yahoo.fr', 'teste', '$2y$10$Rnwh4fQMWhtiunXDz1Ia.Ojs/Sp8WhHjKDCrLO/1mUlqX5KOTvTjS', '');

-- --------------------------------------------------------

--
-- Structure de la table `Formulaires`
--

CREATE TABLE IF NOT EXISTS `Formulaires` (
`idFormulaire` int(11) NOT NULL,
  `idApprenant` int(11) NOT NULL,
  `heros` text NOT NULL,
  `xpProgrammation` text NOT NULL,
  `hack` text NOT NULL,
  `diplome` text NOT NULL,
  `parcours` text NOT NULL,
  `levelAnglais` text NOT NULL,
  `motivation` text NOT NULL,
  `faireDansLaVie` text NOT NULL,
  `profilMOOC` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Apprenants`
--
ALTER TABLE `Apprenants`
 ADD PRIMARY KEY (`idApprenant`), ADD KEY `idFormulaire` (`idFormulaire`);

--
-- Index pour la table `Formateurs`
--
ALTER TABLE `Formateurs`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `Formulaires`
--
ALTER TABLE `Formulaires`
 ADD PRIMARY KEY (`idFormulaire`), ADD KEY `idApprenant` (`idApprenant`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Apprenants`
--
ALTER TABLE `Apprenants`
MODIFY `idApprenant` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Formateurs`
--
ALTER TABLE `Formateurs`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `Formulaires`
--
ALTER TABLE `Formulaires`
MODIFY `idFormulaire` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `Apprenants`
--
ALTER TABLE `Apprenants`
ADD CONSTRAINT `Apprenants_ibfk_1` FOREIGN KEY (`idFormulaire`) REFERENCES `Formulaires` (`idFormulaire`);

--
-- Contraintes pour la table `Formulaires`
--
ALTER TABLE `Formulaires`
ADD CONSTRAINT `Formulaires_ibfk_1` FOREIGN KEY (`idApprenant`) REFERENCES `Apprenants` (`idApprenant`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
