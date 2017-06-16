-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 16 Juin 2017 à 12:18
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
-- Structure de la table `apprenants`
--

CREATE TABLE IF NOT EXISTS `apprenants` (
`idApprenant` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `motDePasse` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `codePostal` varchar(255) NOT NULL,
  `centreDeFormation` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `apprenants`
--

INSERT INTO `apprenants` (`idApprenant`, `nom`, `prenom`, `email`, `login`, `motDePasse`, `adresse`, `ville`, `codePostal`, `centreDeFormation`) VALUES
(1, 'testemi', 'test', '', '', '', '', '', '', 'narbonne'),
(2, 'test2', 'testencore', '', '', '', '', '', '', 'carca'),
(3, 'coucou', 'emi', '', '', '', '', '', '', 'mtp'),
(4, 'kevin', 'test', '', '', '', '', '', '', 'lille');

-- --------------------------------------------------------

--
-- Structure de la table `formateurs`
--

CREATE TABLE IF NOT EXISTS `formateurs` (
`id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `centreDeFormation` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `formateurs`
--

INSERT INTO `formateurs` (`id`, `nom`, `prenom`, `email`, `login`, `password`, `centreDeFormation`) VALUES
(1, 'teste', 'teste', 'test@mail.co', 'test', '$2y$10$ypxwgKXPCm9ldPHnwCCGgOMCGfr.0o59oiC1q4mAPXFY.YiZXUt.S', ''),
(2, 'Test4', 'test4', 'hacke@yahoo.fr', 'test4', '$2y$10$7F2m1fqxzZIJ3nb1cup7be7y9/OToKYY3g7gLzzJNsWnvja4.00CO', '');

-- --------------------------------------------------------

--
-- Structure de la table `formulaires`
--

CREATE TABLE IF NOT EXISTS `formulaires` (
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `formulaires`
--

INSERT INTO `formulaires` (`idFormulaire`, `idApprenant`, `heros`, `xpProgrammation`, `hack`, `diplome`, `parcours`, `levelAnglais`, `motivation`, `faireDansLaVie`, `profilMOOC`) VALUES
(1, 1, '', '', '', '', '', '', '', '', 'coucou');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `apprenants`
--
ALTER TABLE `apprenants`
 ADD PRIMARY KEY (`idApprenant`);

--
-- Index pour la table `formateurs`
--
ALTER TABLE `formateurs`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `formulaires`
--
ALTER TABLE `formulaires`
 ADD PRIMARY KEY (`idFormulaire`), ADD KEY `Formulaires_ibfk_1` (`idApprenant`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `apprenants`
--
ALTER TABLE `apprenants`
MODIFY `idApprenant` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `formateurs`
--
ALTER TABLE `formateurs`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `formulaires`
--
ALTER TABLE `formulaires`
MODIFY `idFormulaire` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `formulaires`
--
ALTER TABLE `formulaires`
ADD CONSTRAINT `Formulaires_ibfk_1` FOREIGN KEY (`idApprenant`) REFERENCES `apprenants` (`idApprenant`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
