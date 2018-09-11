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
(1348, 'ipvbip', 'cpovbpo', 'bcjvblkjl', 'vbjlckjblkc', 'poicvpob', 6, 'kj45h4k3j5', 'vbopcvbp '),
(1349, 'jslkdjfl', 'lksjdfl', 'sdjfl', 'lsjldkfj', 'lkjsdlf', 3, 'sdf', 'sdfsdf'),
(1350, 'h56h5h', '5h5h56h', 'sdjfl', 'lsjldkfj', 'lkjsdlf', 3, 'sdf', 'sdfsdf'),
(1351, 'lkjxclvkj', 'ljxlkcvjlk', 'xjcvlkjxcvl', 'ljlckvjl', 'jlkxjvclkj', 4, 'xcvxklcj', 'cxkvjl'),
(1352, 'ljslkdfj', 'lkjsdlfj', 'jlkj', 'ljlkjfl', 'lsjdlfkj', 8, 'sldjfl', 'sldjf'),
(1353, 'oisudfoiuoisdfu', 'sidoufosiu', 'dsfsdfsidou', 'sudoifu', 'soidufoi', 8, 'oisudfoi', 'oisudfoi'),
(1354, 'xcivuoyxiuc', 'erbmntb', 'asdasdad', 'fbnmbermn', 'kjshdfkjh', 19, 'hskjdfhk', 'skdjhf'),
(1355, 'lkjcvlkbjlk', 'lkjclkbj', 'cvbjlk', 'ljlkcjvblk', 'cjlbkj', 14, 'jclkvbj', 'jlkcvb'),
(1356, 'kjxhcvkj', 'kjhxkcjvh', 'cxjvkhxkjvh', 'khxkjcvhkj', 'kjhxkjchvkj', 1, 'xkjchvkj', 'jkhxkv'),
(1357, 'kjahskj', 'shkjhfk', 'asjkdhkj', 'askjhdkj', 'skjdhfk', 15, 'skjhf', 'ksjahd'),
(1358, 'klajsdlk', 'klajsdkl', 'jadlksjdl', 'lkasjdlkf', 'lkjalksd', 17, 'jsalkdj', 'lkasjd '),
(1359, 'asd', 'asd', 'asd', 'asd', 'asd', 3, 'asd', 'asd'),
(1360, 'zxc', 'zxc', 'zxc', 'zxc', 'zxc', 1, 'zxc', 'zxc'),
(1361, 'hkjashdkj', 'hkjahsdkjh', 'sahakjsd', 'jhakjsdhk', 'kjhaksjdh', 5, 'jasdhk', 'kjahskd'),
(1362, 'KJHZXSKJC', 'KJHKJXZHCK', 'zkjxchk', 'KZKJXHCKJ', 'xckjhvkj', 1, 'xhcjkvh', 'kxjhv'),
(1363, 'kjahdskjh', 'kjhaskdjh', 'asdasda', 'akjhsdkj', 'kjh', 5, 'akjsdh', 'khkasd'),
(1364, 'kjherktjhq', 'xcvoiu', 'cxkjvhk', 'qkhxckvjhk', 'xcjvhk', 5, 'kjxhc', 'xjkchv'),
(1365, 'kjhxkjh', 'khckjh', 'hvxkcjh', 'kjdchvkjq', 'khkjcxhvkj', 1, 'xhckjv', 'kjhxcvk'),
(1366, 'kjhxkjvh', 'kjhvkj', 'cxjhvkjhkj', 'jkhxcvkjh', 'hvkjh', 5, 'jhjk', 'kjh'),
(1367, 'jjlkjcvlkj', 'lkjlkxj', 'zxjclkj', 'jxlzkvcjl', 'lkjlk', 14, 'lkjxcvl', 'jxv'),
(1368, 'kjhakdj', 'kjhakjdhk', 'djakhsd', 'kjahsdkj', 'jhkjahdkj', 36, 'ashdk', 'kjahskd'),
(1369, 'jlkajsdlk', 'jlkajsdlk', 'jdalkjd', 'ljalksjdlk', 'jlkajsdlk', 1, 'kjasld', 'lkjlasd'),
(1370, 'kjhkjhdfkjh', 'kjhkjh', 'shjdkfkj', 'kjshkfjh', 'kjhkj', 1, 'kjhkj', 'kjh'),
(1371, 'oicuobi', 'oiucoibuo', 'ivxcuoi', 'oiucxoibuo', 'ijhkj', 1, 'xcoivu', 'iouxoicv'),
(1372, 'kjhakjsdhkj', 'hkjahdkj', 'ajksdhk', 'kjahskdjh', 'hkjahdkjh', 5, 'kjahskjd', 'kjhakjsd'),
(1373, 'kjlksdjflk', 'jlksdjflk', 'asjdlk', 'jlkjslkfdjl', 'jlksjlk', 1, 'lkjlksjlkj', 'lk'),
(1374, 'jlkdsjglkq', 'jlkdfjglkj', 'jdlfkgj', 'lkjsdlkfgjl', 'lkjdlkfgjl', 1, 'jlkdjfl', 'lkjl'),
(1375, 'test4', '123', 'test', 'redirection details', 'skjdfhk', 21, 'fhkshkh', 'hkjsdhfk');

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
(1, 8, 'test', 'ceci est un test', 'test.co', 2, 0, '234 test', 7, '2018-05-23', '2018-05-24'),
(2, 8, 'test3', 'ceci est un test pour le id du compte', 'test.co', 2, 0, '234 test', 6, '2018-05-23', '2018-05-24'),
(3, 8, 'test4', 'test apres avoir reload', 'test.co', 3, 0, '123 sdf', 10, '2018-05-23', '2018-05-24'),
(4, 8, 'sdf', 'test apres avoir reload 2', 'asda', 2, 0, '345 fgdd', 34, '2018-05-23', '2018-05-24'),
(5, 8, 'testdate', 'Test pour voir un emploi encore actif', 'test', 2, 0, '234 test', 3, '2018-08-01', '2018-08-06'),
(6, 1338, 'testTriage', 'un element a trier', 'test', 5, 5, '234 test', 11, '2018-08-14', '2018-08-23'),
(7, 1338, 'test triage 2', '2element a trier', 'test', 14, 13, '345 test', 17, '2018-08-14', '2018-08-22'),
(8, 1338, 'test Triage', '3eme partie a trier', 'test', 13, 12, '345 test', 29, '2018-08-14', '2018-08-21'),
(9, 1338, 'test triage 4', '4eme partie', 'test', 14, 14, '234', 38, '2018-08-14', '2018-08-22'),
(10, 1338, 'testPrioritee', 'prioritee normale', 'test', 15, 15, '345 test', 5, '2018-08-14', '2018-08-21'),
(11, 1338, 'testPrioritee2', 'prioritee plus', 'test', 15, 3, '345 test', 5, '2018-08-01', '2018-08-14'),
(12, 8, 'test detail', 'afficher dans details mon emploi', 'test', 5, 5, 'aslkdj', 24, '2018-09-01', '2018-09-02'),
(13, 8, 'test detail2', 'Test pour voir un emploi encore actif2', 'test', 4, 4, 'dasdasd', 33, '2018-09-01', '2018-09-02');

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
