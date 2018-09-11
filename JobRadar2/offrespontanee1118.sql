-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 06 Août 2018 à 14:05
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `offrespontanee`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `numAdmin` varchar(20) NOT NULL,
  `nomAdmin` varchar(20) NOT NULL,
  `passwordAdmin` varchar(50) NOT NULL,
  `emailAdmin` varchar(50) NOT NULL,
  `telephoneAdmin` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `emetteur` int(11) NOT NULL,
  `destinataire` int(11) NOT NULL,
  `contenu` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `niveauAcceptation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `compte` (
  `numeroCompte` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nomCompte` varchar(30) NOT NULL,
  `prenomCompte` varchar(30) NOT NULL,
  `adresseCompte` varchar(50) NOT NULL,
  `idQuartierCompte` int(11) NOT NULL,
  `telephoneCompte` varchar(15) NOT NULL,
  `emailCompte` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `compte`
--

INSERT INTO `compte` (`numeroCompte`, `username`, `password`, `nomCompte`, `prenomCompte`, `adresseCompte`, `idQuartierCompte`, `telephoneCompte`, `emailCompte`) VALUES
(8, 'srod', '123', 'Rodriguez', 'Steve', '123 test', 16, '5143472803', 'asd@asd.asd'),
(1337, 'noAccount', 'h5k34jh5kj3vhkj43h5', 'TempAccount', 'PourVisiteurs', '123 noAdresse', 31, '5142222222', 'none@nothing.com'),
(1338, 'mSai', '123', 'Saidou', 'Mamadou', '234 Test', 8, '5142329000', 'mSai@test.com'),
(1339, 'mTog', '123', 'Togola', 'Mamadou', '234 Test', 8, '5142329000', 'mTog@test.com'),
(1340, 'testpostul', '123', 'testsanscompte', 'postulation', '123 test', 6, '5143472803', 'test@test.test'),
(1341, 'test1', '123', 'testsanscompte', 'asd', '123 test', 3, '5144582389', 'test@test.test'),
(1342, 'jkl4j5l6k5', '0fg9h0-', 'jsklfjsl', 'sdjflks', 'dfjglk', 5, '5143458569', 'dajklds@asdkjlas.com'),
(1343, 'asdas', '123', 'dasdas', 'asdadsa', 'asdad', 8, 'asda', 'asd@asdasd.asd'),
(1344, 'dffgfg', 'fgffg', 'asdasddffd', 'dfdgd', 'dffd', 4, 'dfgfg', 'sfsdfs'),
(1345, 'kjshdfkj', 'jshdfkj', 'jkdhfkjsdh', 'skdjhfkjdsh', 'sjdkhfksj', 4, '3423h4kj', 'h34kj5h'),
(1346, 'kldjfkgljq', 'lkjdflkgj', 'dfgjdlfkg', 'qdljglkdfjg', 'jldkfjglkd', 9, 'dlkfgjlk', 'ddjflk'),
(1347, 'ksjdlfkj', 'lkjsdlkfj', 'sdjflskj', 'jlksdjflk', 'sjdlkfj', 8, 'sdlkfj', 'lksjdf'),
(1348, 'ipvbip', 'cpovbpo', 'bcjvblkjl', 'vbjlckjblkc', 'poicvpob', 6, 'kj45h4k3j5', 'vbopcvbp ');


-- --------------------------------------------------------

--
-- Structure de la table `emploi`
--

CREATE TABLE `emploi` (
  `idEmploi` int(11) NOT NULL,
  `idCompteEmployeur` int(11) NOT NULL,
  `titreEmploi` varchar(50) NOT NULL,
  `descriptionEmploi` varchar(200) NOT NULL,
  `compagnieEmploi` varchar(30) NOT NULL,
  `nombrePosteEmploi` int(11) NOT NULL,
  `emploiACombler` int(11) NOT NULL,
  `lieuEmploi` varchar(50) NOT NULL,
  `idQuartierEmploi` int(11) NOT NULL,
  `dateHeureDebutEmploi` date NOT NULL,
  `dateHeureFinEmploi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `emploi`
--

INSERT INTO `emploi` (`idEmploi`, `idCompteEmployeur`, `titreEmploi`, `descriptionEmploi`, `compagnieEmploi`, `nombrePosteEmploi`, `emploiACombler`, `lieuEmploi`, `idQuartierEmploi`, `dateHeureDebutEmploi`, `dateHeureFinEmploi`) VALUES
(1, 121, 'Commis d entrepot', 'Etre Disponible tous les jours. Salaire: 14$/H', 'Dollorama', 2, 2, 'Montreal-Nord', 37, '2018-08-23', '2018-09-29'),
(2, 122, 'Travail general', 'Avoir l esprit d equipe.Salaire: 12$/H', 'Bonanza', 5, 3, 'Pierrefonds', 4, '2018-08-22', '2018-10-22'),
(3, 123, 'Livraison', 'Avoir une voiture, etre disponible matin et soir. Salaire:13$/H', 'Dominos Pizza', 3, 3, 'Lasalle', 16, '2018-09-03', '2018-10-04'),
(4, 124, 'Preparateur de Commande', 'Botte de travail obligatoire. Salaire: 15$/H', 'Sami Fruit', 7, 7, 'Lachine', 14, '2018-08-25', '2018-12-24'),
(5, 125, 'Travail general', 'Etre disponible et motiver. Salaire : 17$/H', 'Super C', 1, 1, 'Centre-Ville', 31, '2018-08-30', '2018-11-30'),
(6, 126, 'Tri', 'Trier les produits. Salaire: 15$/H', 'Maxi', 10, 10, 'Saint-Michel', 33, '2018-08-18', '2018-08-30'),
(7, 127, 'Emballage', 'Emballer les produits avec motivation. Salaire: 15$/H', 'Walmart', 3, 3, 'Hochelaga', 35, '2018-08-28', '2019-02-22');

-- --------------------------------------------------------

--
-- Structure de la table `listenoire`
--

CREATE TABLE `listenoire` (
  `numCompte` int(11) NOT NULL,
  `utilisateurBloquee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `postulation`
--

CREATE TABLE `postulation` (
  `idEmploi` int(11) NOT NULL,
  `idCompte` int(11) NOT NULL,
  `dateInscrit` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `postulation`
--

INSERT INTO `postulation` (`idEmploi`, `idCompte`, `dateInscrit`) VALUES
(7, 8, '2018-08-05'),
(8, 8, '2018-08-06');

-- --------------------------------------------------------

--
-- Structure de la table `quartier`
--

CREATE TABLE `quartier` (
  `idQuartier` int(11) NOT NULL,
  `nomQuartier` varchar(50) NOT NULL,
  `coordonneeQuartier` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `quartier`
--

INSERT INTO `quartier` (`idQuartier`, `nomQuartier`, `coordonneeQuartier`) VALUES
(1, 'Senneville', '45.438415,-73.953388'),
(2, 'Baie-D\'Urfe', '45.415870,-73.916359'),
(3, 'Beaconsfield', '45.430810,-73.870869'),
(4, 'Pierrefonds', '45.461106,-73.890392'),
(5, 'Kirkland', '45.456200,-73861638'),
(6, 'Pointe-Claire', '45.472087,-73.801458'),
(7, 'Roxboro', '45.504824,-73.805406'),
(8, 'Saint-Laurent', '45.498564,-73.75878'),
(9, 'Dorval', '45.450415,-73.751848'),
(10, 'Bois-Franc', '45.514324,-73.709362'),
(11, 'CartierVille', '45.529358,-73.714168'),
(12, 'Cote Saint-Luc', '45.468235,-73.670566'),
(13, 'Hampstead', '45.481230,-73.648312'),
(14, 'Lachine', '45.441503,-73.689621'),
(15, 'Montreal-West', '45.452216,-73.648484'),
(16, 'Lasalle', '45.430536,-73.634751'),
(17, 'Verdun', '45.454866,-73.569632'),
(18, 'Cote-Saint-Paul', '45.458238,-73.589373'),
(19, 'Monkland Village', '45.472685,-73.622332'),
(20, 'Saint-Henri', '45.476778,-73.586455'),
(21, 'The Triangle', '45.497718,-73.650485'),
(22, 'Mont-Royal', '45.513358,-73.646537'),
(23, 'Westmount', '45.485444,-73.596583'),
(24, 'Outremont', '45.514080,-73.611174'),
(25, 'Little Burgundy', '45.485925,-73.574954'),
(26, 'Parc Extension', '45.528031,-73.635035'),
(27, 'Ahuntsic', '45.553711,-73.662440'),
(28, 'Villeray', '45.548362,-73.625275'),
(29, 'Griffintown', '45.491305,-73.561857'),
(30, 'La petite-Patrie', '45.535091,-73.608549'),
(31, 'Centre-Ville', '45.503398,-73.568723'),
(32, 'Le plateau Mont-Royal', '45.523847,-73.585804'),
(33, 'Saint-Michel', '45.554237,-73.607047'),
(34, 'Rosemont', '45.551712,-73.585246'),
(35, 'Hochelaga', '45.542696,-73.545935'),
(36, 'St-Leonard', '45.587643,-73.599150'),
(37, 'Montreal-Nord', '45.607462,-73.633998'),
(38, 'Anjou', '45.616347,-73.570140'),
(39, 'Pointe-aux-trembles', '45.641707,-73.501904'),
(40, 'Riviere-Des-Prairies', '45.673502,-73.516414');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`numAdmin`);

--
-- Index pour la table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`numeroCompte`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Index pour la table `emploi`
--
ALTER TABLE `emploi`
  ADD PRIMARY KEY (`idEmploi`);

--
-- Index pour la table `postulation`
--
ALTER TABLE `postulation`
  ADD PRIMARY KEY (`idEmploi`,`idCompte`);

--
-- Index pour la table `quartier`
--
ALTER TABLE `quartier`
  ADD PRIMARY KEY (`idQuartier`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `compte`
--
ALTER TABLE `compte`
  MODIFY `numeroCompte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1376;
--
-- AUTO_INCREMENT pour la table `emploi`
--
ALTER TABLE `emploi`
  MODIFY `idEmploi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `quartier`
--
ALTER TABLE `quartier`
  MODIFY `idQuartier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
