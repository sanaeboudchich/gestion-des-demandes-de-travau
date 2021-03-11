-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 24 juin 2020 à 16:51
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bd_traveau`
--

-- --------------------------------------------------------

--
-- Structure de la table `devis`
--

CREATE TABLE `devis` (
  `id_devis` int(11) NOT NULL,
  `nometp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tele` int(11) NOT NULL,
  `pays` varchar(100) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `codep` int(11) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `prestation` varchar(100) NOT NULL,
  `dateS` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `devis`
--

INSERT INTO `devis` (`id_devis`, `nometp`, `email`, `tele`, `pays`, `ville`, `codep`, `adress`, `prestation`, `dateS`) VALUES
(1, 'karima mahi', 'karima@gmail.com', 63000000, 'Maroc', 'Berkane', 63300, 'Berkane', '5', '2020-06-15'),
(3, 'Sanae BOUDCHICH', 'bsanaae@gmail.com', 636481316, 'maroc', 'AHFIR', 63050, '147 ,AHFIR', 'Plomberie', '2021-10-12'),
(12, 'kaouthar', 'koki@gmail.com', 6000000, 'maroc', 'OUJDA', 63050, '147 ,OUJDA', 'Décoration', '2021-10-30');

-- --------------------------------------------------------

--
-- Structure de la table `dispo`
--

CREATE TABLE `dispo` (
  `Num` int(11) NOT NULL,
  `id_devis` int(11) NOT NULL,
  `datef` date NOT NULL,
  `typep` varchar(255) NOT NULL,
  `prixh` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `dispo`
--

INSERT INTO `dispo` (`Num`, `id_devis`, `datef`, `typep`, `prixh`) VALUES
(8, 12, '2020-08-20', 'jardinage', 100),
(6, 2, '2020-06-30', 'plombierie', 100),
(7, 3, '2020-06-30', 'plombierie', 100),
(9, 12, '2020-08-20', 'jardinage', 100);

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

CREATE TABLE `facture` (
  `id_facture` int(11) NOT NULL,
  `id_devis` int(11) NOT NULL,
  `heureurt` int(200) NOT NULL,
  `tarifh` int(200) NOT NULL,
  `typep` varchar(100) NOT NULL,
  `montant` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `facture`
--

INSERT INTO `facture` (`id_facture`, `id_devis`, `heureurt`, `tarifh`, `typep`, `montant`) VALUES
(2, 1, 12, 12, 'plomberie', 12),
(3, 1, 12, 12, 'plomberie', 12),
(4, 1, 12, 12, 'plomberie', 12),
(5, 1, 1222, 122, 'plomberie', 222),
(6, 1, 1222, 122, 'plomberie', 222),
(7, 1, 10, 10, 'plomberie', 4000),
(8, 1, 10, 10, 'plomberie', 4000),
(9, 3, 20, 70, 'plombierie', 100),
(10, 3, 24, 70, 'plombierie', 0);

-- --------------------------------------------------------

--
-- Structure de la table `ouvrier`
--

CREATE TABLE `ouvrier` (
  `id_utilisateur` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tele` varchar(255) NOT NULL,
  `codep` varchar(255) NOT NULL,
  `prestation` varchar(100) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `pays` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ouvrier`
--

INSERT INTO `ouvrier` (`id_utilisateur`, `nom`, `email`, `tele`, `codep`, `prestation`, `ville`, `prenom`, `adresse`, `pays`) VALUES
(1, 'boudchich', 'insta@gmail.com', '6000000', '1123', '1', 'ahfir', 'sanae', 'ahfir', 'Maroc'),
(2, 'Bouabid', 'mouad@gmail.com', '630104885', '1122', '2', 'Oujda', 'Mouad', 'Oujda', 'Maroc'),
(3, 'test', 'test@gmail.com', '600228800', '1111', '3', 'Oujda', 'test', 'Oujda', 'Maroc'),
(4, 'test2', 'test2@gmail.com', '622228811', '1111', '4', 'oujda', 'test2', 'oujda', 'Maroc'),
(5, 'barnoussi', 'insta.i@gmail.com', '+21266000000', '63320', '5', 'Berkane', 'kaouthar', 'berkan', 'Maroc'),
(6, 'bernoussi', 'ins@gmail.com', '+212630464885', '63330', '6', 'Berkane', 'kaouthar', 'Berkane ', 'Maroc'),
(10, 'BOUDCHICH', 'bsanaae@gmail.com', '0636481316', '63050', 'Jardinage', 'AHFIR', 'Sanae', '147,AHFIR', 'maroc'),
(12, 'mahi', 'insh@gmail.com', '+212630464885', '63330', 'Eléctricité', 'oujda', 'karima', 'oujda', 'Maroc'),
(25, 'mahi', 'karima@gmail.com', '066666666', '63050', 'Maçonerie', 'OUJDA', 'karima', '147 ', 'maroc'),
(30, 'hilmi', 'hilmi@gmail.com', '06333333', '63050', 'Jardinage', 'AHFIR', 'mohamed', '147 ,AHFIR', 'maroc'),
(50, 'Barnoussi', 'koki@gmail.com', '0636481316', '63050', 'Jardinage', 'oujda', 'kaoutharr', '147 ,,oujda', 'maroc');

-- --------------------------------------------------------

--
-- Structure de la table `prestation`
--

CREATE TABLE `prestation` (
  `id_utilisateur` int(11) NOT NULL,
  `id_devis` int(11) NOT NULL,
  `id_prestation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `prestation`
--

INSERT INTO `prestation` (`id_utilisateur`, `id_devis`, `id_prestation`) VALUES
(1, 1, 1),
(3, 3, 4);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `Num` int(11) NOT NULL,
  `role` varchar(100) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `mdp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`Num`, `role`, `id_utilisateur`, `mdp`) VALUES
(1, 'administrateur', 1, 'admin'),
(2, 'espace comptable', 4, 'admin'),
(3, 'espace technique', 2, 'admin'),
(4, 'ouvrier', 3, 'admin'),
(5, 'ouvrier', 5, 'admin'),
(6, 'ouvrier', 12, 'admin'),
(9, 'ouvrier', 10, 'sanae');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `devis`
--
ALTER TABLE `devis`
  ADD PRIMARY KEY (`id_devis`);

--
-- Index pour la table `dispo`
--
ALTER TABLE `dispo`
  ADD PRIMARY KEY (`Num`),
  ADD KEY `d` (`id_devis`);

--
-- Index pour la table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`id_facture`),
  ADD KEY `f` (`id_devis`);

--
-- Index pour la table `ouvrier`
--
ALTER TABLE `ouvrier`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- Index pour la table `prestation`
--
ALTER TABLE `prestation`
  ADD PRIMARY KEY (`id_prestation`),
  ADD KEY `p` (`id_utilisateur`),
  ADD KEY `r` (`id_devis`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`Num`),
  ADD KEY `u` (`id_utilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `dispo`
--
ALTER TABLE `dispo`
  MODIFY `Num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `facture`
--
ALTER TABLE `facture`
  MODIFY `id_facture` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `Num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `facture`


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
