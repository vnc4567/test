-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Lun 10 Avril 2017 à 20:27
-- Version du serveur :  5.7.14
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet_tut`
--

-- --------------------------------------------------------

--
-- Structure de la table `activite`
--

CREATE TABLE `activite` (
  `id_activite` int(11) NOT NULL,
  `nom` varchar(400) NOT NULL,
  `id_sport` int(11) NOT NULL,
  `date` date NOT NULL,
  `max_inscrits` int(11) NOT NULL,
  `id_niveau` int(11) NOT NULL,
  `description` mediumtext NOT NULL,
  `id_ville` int(11) NOT NULL,
  `id_organisateur` int(11) NOT NULL,
  `id_commentaires` int(11) DEFAULT NULL,
  `adresse` varchar(400) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `activite`
--

INSERT INTO `activite` (`id_activite`, `nom`, `id_sport`, `date`, `max_inscrits`, `id_niveau`, `description`, `id_ville`, `id_organisateur`, `id_commentaires`, `adresse`) VALUES
(1, 'Foot entre amis', 1, '2017-03-17', 10, 1, 'hbwdhtrhtr', 1, 1, NULL, 'tttet'),
(2, 'Test', 1, '2017-03-17', 5, 1, 'descr', 1, 1, NULL, 'ville'),
(3, 'nomTest', 1, '2017-05-05', 7, 1, 'descrTest', 1, 1, NULL, 'adresseTest'),
(4, 'test', 1, '2012-06-14', 5, 1, '', 1, 1, NULL, 'ezfe'),


-- --------------------------------------------------------

--
-- Structure de la table `activite_utilisateur`
--

CREATE TABLE `activite_utilisateur` (
  `id_activite` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `activite_utilisateur`
--

INSERT INTO `activite_utilisateur` (`id_activite`, `id_utilisateur`) VALUES
(2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `id_administrateur` int(11) NOT NULL,
  `pseudo` varchar(400) NOT NULL,
  `mot_de_passe` varchar(400) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id_commentaires` int(11) NOT NULL,
  `commentaire` varchar(1000) NOT NULL,
  `id_utilisateur` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `niveau`
--

CREATE TABLE `niveau` (
  `id_niveau` int(11) NOT NULL,
  `intitule` varchar(400) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `niveau`
--

INSERT INTO `niveau` (`id_niveau`, `intitule`) VALUES
(1, 'Débutant'),
(2, 'Loisir'),
(3, 'Debutant'),
(4, 'Moyen'),
(5, 'Bon niveau'),
(6, 'Competition');

-- --------------------------------------------------------

--
-- Structure de la table `participant`
--

CREATE TABLE `participant` (
  `id_participant` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `sports`
--

CREATE TABLE `sports` (
  `id_sports` int(11) NOT NULL,
  `intitule` varchar(400) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `sports`
--

INSERT INTO `sports` (`id_sports`, `intitule`) VALUES
(1, 'Football'),
(2, 'Accrobranche'),
(3, 'Alpinisme'),
(4, 'Athletisme'),
(5, 'Aviron'),
(6, 'Baby foot'),
(7, 'Badminton'),
(8, 'Baseball'),
(9, 'Basket ball'),
(10, 'Beach volley'),
(11, 'Biathlon'),
(12, 'Billard'),
(13, 'BMX'),
(14, 'Bowling'),
(15, 'Boxe'),
(16, 'Canyoning'),
(17, 'Cerf volant'),
(18, 'Equitation'),
(19, 'Escalade'),
(20, 'Escrime'),
(21, 'Fitness'),
(22, 'Fléchettes'),
(23, 'Futsal'),
(24, 'Golf'),
(25, 'Gymnastique'),
(26, 'Haltérophilie'),
(27, 'Handball'),
(28, 'Handisport'),
(29, 'Hockey'),
(30, 'Jetski'),
(31, 'Jogging'),
(32, 'Kitesurf'),
(33, 'Musculation'),
(34, 'Padel'),
(35, 'Paintball'),
(36, 'Parachutisme'),
(37, 'Parapente'),
(38, 'Patinage'),
(39, 'Pêche'),
(40, 'Pétanque'),
(41, 'Planche à voile'),
(42, 'Plongée'),
(43, 'Quad'),
(44, 'Rafting'),
(45, 'Raid nature'),
(46, 'Rallye'),
(47, 'Randonnées'),
(48, 'Roller'),
(49, 'Rugby'),
(50, 'Salsa'),
(51, 'Samba'),
(52, 'Self défense'),
(53, 'Skateboard'),
(54, 'Ski de fond'),
(55, 'Ski nautique'),
(56, 'Snowboard'),
(57, 'Softball'),
(58, 'Squash'),
(59, 'Surf'),
(60, 'Taekwendo'),
(61, 'Taï chi chuan'),
(62, 'Tango'),
(63, 'Tennis'),
(64, 'Tennis de table'),
(65, 'Tir à l\'arc'),
(66, 'Trampoline'),
(67, 'Triathlon'),
(68, 'Ultimate fresbee'),
(69, 'Voile'),
(70, 'Volley Ball'),
(71, 'VTT'),
(72, 'Water polo');

-- --------------------------------------------------------

--
-- Structure de la table `sport_utilisateur`
--

CREATE TABLE `sport_utilisateur` (
  `id_sports` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_utilisateur` int(11) NOT NULL,
  `pseudo` varchar(400) NOT NULL,
  `mot_de_passe` varchar(400) DEFAULT NULL,
  `mail` varchar(400) NOT NULL,
  `date_inscription` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `pseudo`, `mot_de_passe`, `mail`, `date_inscription`) VALUES
(1, 'vincent', 'vincent91', 'benazet.vincent@gmail.com', '2017-03-26'),
(7, 'aline', 'aline', 'aline.o@orange.fr', '2017-04-02'),
(3, 'p', 'mdp2', 'mail2', '2017-07-07'),
(14, 'truc', 'truc', 'benazet.vincent@gmail.com', '2017-04-05');

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE `ville` (
  `id_ville` int(11) NOT NULL,
  `intitule` varchar(400) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `ville`
--

INSERT INTO `ville` (`id_ville`, `intitule`) VALUES
(1, 'Nice');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `activite`
--
ALTER TABLE `activite`
  ADD PRIMARY KEY (`id_activite`),
  ADD KEY `id_sport` (`id_sport`),
  ADD KEY `id_niveau` (`id_niveau`),
  ADD KEY `id_ville` (`id_ville`);

--
-- Index pour la table `activite_utilisateur`
--
ALTER TABLE `activite_utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`,`id_activite`),
  ADD KEY `id_activite` (`id_activite`);

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`id_administrateur`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id_commentaires`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `niveau`
--
ALTER TABLE `niveau`
  ADD PRIMARY KEY (`id_niveau`);

--
-- Index pour la table `participant`
--
ALTER TABLE `participant`
  ADD PRIMARY KEY (`id_participant`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`id_sports`);

--
-- Index pour la table `sport_utilisateur`
--
ALTER TABLE `sport_utilisateur`
  ADD PRIMARY KEY (`id_sports`,`id_utilisateur`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- Index pour la table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`id_ville`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `activite`
--
ALTER TABLE `activite`
  MODIFY `id_activite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `id_administrateur` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id_commentaires` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `niveau`
--
ALTER TABLE `niveau`
  MODIFY `id_niveau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `sports`
--
ALTER TABLE `sports`
  MODIFY `id_sports` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT pour la table `ville`
--
ALTER TABLE `ville`
  MODIFY `id_ville` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
