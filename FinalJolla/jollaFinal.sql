-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 05 mai 2019 à 15:01
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `jolla`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `Id` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`Id`, `Nom`) VALUES
(1, 'food'),
(15, 'clothes'),
(3, 'cosmetic'),
(6, 'decoration'),
(9, 'accessories');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `idCommande` int(11) NOT NULL AUTO_INCREMENT,
  `datee` date NOT NULL,
  `montantCommande` float NOT NULL,
  `idclient` int(11) NOT NULL,
  PRIMARY KEY (`idCommande`),
  KEY `ff` (`idclient`)
) ENGINE=MyISAM AUTO_INCREMENT=79 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`idCommande`, `datee`, `montantCommande`, `idclient`) VALUES
(1, '2019-04-09', 125.4, 0),
(2, '2019-04-16', 130.5, 0),
(3, '2019-04-17', 150, 0),
(4, '2019-04-17', 150, 0),
(5, '2019-04-17', 150, 0),
(6, '2019-04-17', 180, 0),
(7, '2019-04-17', 120, 4),
(8, '2019-04-17', 120, 4),
(9, '2019-04-17', 170, 4),
(10, '2019-04-17', 170, 4),
(11, '2019-04-17', 170, 4),
(12, '2019-04-17', 170, 4),
(13, '2019-04-17', 170, 4),
(14, '2019-04-17', 170, 4),
(15, '2019-04-17', 170, 4),
(16, '2019-04-17', 220, 4),
(17, '2019-04-17', 220, 4),
(18, '2019-04-17', 220, 4),
(19, '2019-04-17', 40, 5),
(20, '2019-04-17', 90, 1),
(21, '2019-04-17', 240, 1),
(22, '2019-04-17', 410, 8),
(23, '2019-04-17', 550, 1),
(24, '2019-04-17', 550, 1),
(25, '2019-04-17', 550, 1),
(26, '2019-04-17', 410, 9),
(27, '2019-04-17', 410, 9),
(28, '2019-04-17', 410, 9),
(29, '2019-04-17', 180, 9),
(30, '2019-04-17', 180, 9),
(31, '2019-04-17', 280, 9),
(32, '2019-04-18', 100, 4),
(33, '2019-04-18', 200, 4),
(34, '2019-04-18', 310, 11),
(35, '2019-04-18', 660, 11),
(36, '2019-04-18', 410, 10),
(37, '2019-04-18', 560, 13),
(38, '2019-04-18', 260, 4),
(39, '2019-04-18', 560, 10),
(40, '2019-04-19', 800, 14),
(41, '2019-04-19', 280, 9),
(42, '2019-04-24', 250, 4),
(43, '2019-04-24', 250, 4),
(44, '2019-04-24', 1364, 10),
(45, '2019-04-24', 710, 4),
(46, '2019-04-24', 1215, 4),
(47, '2019-04-24', 2530, 4),
(48, '2019-04-25', 526, 9),
(49, '2019-04-25', 50, 9),
(50, '2019-04-25', 506, 9),
(51, '2019-04-25', 506, 9),
(52, '2019-04-25', 58, 9),
(53, '2019-04-25', 50, 9),
(54, '2019-04-25', 50, 9),
(55, '2019-04-25', 50, 9),
(56, '2019-04-25', 506, 9),
(57, '2019-04-25', 50, 9),
(58, '2019-04-25', 50, 9),
(59, '2019-04-25', 50, 9),
(60, '2019-04-26', 50, 17),
(61, '2019-04-26', 250, 19),
(62, '2019-04-26', 50, 19),
(63, '2019-04-27', 15, 10),
(64, '2019-04-27', 15, 10),
(65, '2019-04-28', 138, 9),
(66, '2019-04-28', 15, 9),
(67, '2019-04-29', 50, 18),
(68, '2019-04-29', 8, 9),
(69, '2019-04-29', 15, 9),
(70, '2019-05-03', 340, 9),
(71, '2019-05-03', 15, 9),
(72, '2019-05-03', 8, 9),
(73, '2019-05-03', 68, 9),
(74, '2019-05-03', 15, 9),
(75, '2019-05-03', 65, 9),
(76, '2019-05-03', 8, 9),
(77, '2019-05-03', 15, 9),
(78, '2019-05-03', 68, 20);

-- --------------------------------------------------------

--
-- Structure de la table `compteadmin`
--

DROP TABLE IF EXISTS `compteadmin`;
CREATE TABLE IF NOT EXISTS `compteadmin` (
  `idadmin` int(11) NOT NULL AUTO_INCREMENT,
  `MailA` varchar(255) NOT NULL,
  `FirstNameA` varchar(255) NOT NULL,
  `LastNameA` varchar(255) NOT NULL,
  `PasswordA` varchar(255) NOT NULL,
  `RePasswordA` varchar(255) NOT NULL,
  PRIMARY KEY (`MailA`,`idadmin`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `compteadmin`
--

INSERT INTO `compteadmin` (`idadmin`, `MailA`, `FirstNameA`, `LastNameA`, `PasswordA`, `RePasswordA`) VALUES
(1, 'joujou@esprit.tn', 'joujou', 'jiji', '1234', '1234'),
(1, 'sami.bhh@esprit.tn', 'sami', 'bhh', 'hama', 'hama'),
(1, 'louay.yahyaoui@esprit.tn', 'louay', 'yahyaoui', '123456', '123456');

-- --------------------------------------------------------

--
-- Structure de la table `compter`
--

DROP TABLE IF EXISTS `compter`;
CREATE TABLE IF NOT EXISTS `compter` (
  `Mail` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `PassWord` varchar(255) NOT NULL,
  `RePassWord` varchar(255) NOT NULL,
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_client`)
) ENGINE=InnoDB AUTO_INCREMENT=201 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `compter`
--

INSERT INTO `compter` (`Mail`, `FirstName`, `LastName`, `PassWord`, `RePassWord`, `id_client`) VALUES
('maoubeya@mail.com', 'manoubeya', 'bala', '123', '123', 1),
('marrakchi@esprit.tn', 'maha', 'nasraoui', 'mimi', 'mimi', 4),
('jouni@esprit.tn', 'joujou', 'jiji', '123', '123', 5),
('jouini@esprit.tn', 'siwar', 'jouini', '1234', '1234', 6),
('mkkkk@esprit.tn', 'gg', 'dd', '123456', '123456', 7),
('lala@esprit.tn', 'la', 'la', 'la', 'la', 8),
('sisi@esprit.tn', 'sisi', 'joujou', '1234', '1234', 9),
('loulou@esprit.tn', 'h', 'h', '1', '1', 10),
('osos@esprit.tn', 'g', 'g', '7', '7', 11),
('manoubi@esprit.tn', 'r', 'r', '12', '12', 12),
('sami@esprit.tn', 'sami', 'ss', '123', '123', 13),
('ala.jouini@gmail.com', 'jouini', 'ala', '1234', '1234', 14),
('yassin.benattig@esprit.tn', 'yassin', 'ben attig', '1212', '1212', 200);

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `informations` varchar(255) NOT NULL,
  `DateDebut` date NOT NULL,
  `DateFin` date NOT NULL,
  `photo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=556987 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`id`, `name`, `phone`, `address`, `informations`, `DateDebut`, `DateFin`, `photo`) VALUES
(346, 'teswira1', 235434, 'oussema@yahoo.fr', 'sfedf', '2019-04-28', '2019-04-30', '1.1.jpg'),
(55698, 'teswira2', 2354346, 'oussema@yahoo.fr', 'retr', '2019-04-28', '2019-04-30', '1.2.jpg'),
(556986, 'teswira3', 2354346, 'oussema@yahoo.fr', 'dddd', '2019-04-28', '2019-04-30', '1.3.jpg'),
(99463, 'maysa', 365464, 'kjh@hg', 'yfgukj', '2019-04-27', '2019-04-30', 'b15.jpg'),
(147852, 'maysa', 183654, 'jkhn@gffvf', 'hghghghg', '2019-04-27', '2019-04-28', 'b16.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `item_rating`
--

DROP TABLE IF EXISTS `item_rating`;
CREATE TABLE IF NOT EXISTS `item_rating` (
  `ratingId` int(11) NOT NULL AUTO_INCREMENT,
  `itemId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `ratingNumber` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comments` text COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`ratingId`)
) ENGINE=InnoDB AUTO_INCREMENT=128 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `item_rating`
--

INSERT INTO `item_rating` (`ratingId`, `itemId`, `userId`, `ratingNumber`, `title`, `comments`, `created`) VALUES
(115, 2, 5, 5, 'smartU', 'aaaaaaaaaa', '2019-04-27 21:26:36'),
(116, 10, 6, 3, 'nice product', 'yes', '2019-04-27 22:53:18'),
(117, 10, 4, 2, 'azer', 'saze', '2019-04-27 22:56:50'),
(125, 65, 200, 2, 'nice pr@duct', 'azert', '2019-04-29 13:27:45'),
(126, 10, 200, 2, 'aaaa', 'aaaaaa', '2019-05-05 13:50:23'),
(127, 30, 6, 5, 'smartU', 'aaaaaaa', '2019-05-05 14:37:25');

-- --------------------------------------------------------

--
-- Structure de la table `lignecommande`
--

DROP TABLE IF EXISTS `lignecommande`;
CREATE TABLE IF NOT EXISTS `lignecommande` (
  `idLC` int(11) NOT NULL AUTO_INCREMENT,
  `idCommande` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `prix` float NOT NULL,
  `quantite` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `idclient` int(11) NOT NULL,
  PRIMARY KEY (`idLC`),
  KEY `fg` (`idCommande`),
  KEY `fh` (`idclient`)
) ENGINE=MyISAM AUTO_INCREMENT=141 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `lignecommande`
--

INSERT INTO `lignecommande` (`idLC`, `idCommande`, `id`, `prix`, `quantite`, `nom`, `idclient`) VALUES
(1, 6, 2, 40, 3, 'serwel', 0),
(2, 6, 3, 30, 2, 'cravate', 0),
(3, 8, 1, 50, 1, 'maryoul', 4),
(4, 8, 2, 40, 1, 'serwel', 4),
(5, 8, 3, 30, 1, 'cravate', 4),
(6, 9, 1, 50, 1, 'maryoul', 4),
(7, 9, 2, 40, 1, 'serwel', 4),
(8, 9, 3, 30, 1, 'cravate', 4),
(9, 9, 1, 50, 1, 'maryoul', 4),
(10, 10, 1, 50, 1, 'maryoul', 4),
(11, 10, 2, 40, 1, 'serwel', 4),
(12, 10, 3, 30, 1, 'cravate', 4),
(13, 10, 1, 50, 1, 'maryoul', 4),
(14, 11, 1, 50, 1, 'maryoul', 4),
(15, 11, 2, 40, 1, 'serwel', 4),
(16, 11, 3, 30, 1, 'cravate', 4),
(17, 11, 1, 50, 1, 'maryoul', 4),
(18, 12, 1, 50, 1, 'maryoul', 4),
(19, 12, 2, 40, 1, 'serwel', 4),
(20, 12, 3, 30, 1, 'cravate', 4),
(21, 12, 1, 50, 1, 'maryoul', 4),
(22, 13, 1, 50, 1, 'maryoul', 4),
(23, 13, 2, 40, 1, 'serwel', 4),
(24, 13, 3, 30, 1, 'cravate', 4),
(25, 13, 1, 50, 1, 'maryoul', 4),
(26, 14, 1, 50, 1, 'maryoul', 4),
(27, 14, 2, 40, 1, 'serwel', 4),
(28, 14, 3, 30, 1, 'cravate', 4),
(29, 14, 1, 50, 1, 'maryoul', 4),
(30, 15, 1, 50, 1, 'maryoul', 4),
(31, 15, 2, 40, 1, 'serwel', 4),
(32, 15, 3, 30, 1, 'cravate', 4),
(33, 15, 1, 50, 1, 'maryoul', 4),
(34, 16, 1, 50, 1, 'maryoul', 4),
(35, 16, 2, 40, 1, 'serwel', 4),
(36, 16, 3, 30, 1, 'cravate', 4),
(37, 16, 1, 50, 1, 'maryoul', 4),
(38, 16, 1, 50, 1, 'maryoul', 4),
(39, 17, 1, 50, 1, 'maryoul', 4),
(40, 17, 2, 40, 1, 'serwel', 4),
(41, 17, 3, 30, 1, 'cravate', 4),
(42, 17, 1, 50, 1, 'maryoul', 4),
(43, 17, 1, 50, 1, 'maryoul', 4),
(44, 18, 1, 50, 1, 'maryoul', 4),
(45, 18, 2, 40, 1, 'serwel', 4),
(46, 18, 3, 30, 1, 'cravate', 4),
(47, 18, 1, 50, 1, 'maryoul', 4),
(48, 18, 1, 50, 1, 'maryoul', 4),
(49, 19, 2, 40, 1, 'serwel', 5),
(50, 20, 1, 50, 1, 'maryoul', 1),
(51, 20, 2, 40, 1, 'serwel', 1),
(52, 21, 1, 50, 4, 'maryoul', 1),
(53, 21, 2, 40, 1, 'serwel', 1),
(54, 22, 1, 50, 5, 'maryoul', 8),
(55, 22, 2, 40, 4, 'serwel', 8),
(56, 23, 1, 50, 4, 'maryoul', 1),
(57, 23, 2, 40, 5, 'serwel', 1),
(58, 23, 3, 30, 5, 'cravate', 1),
(59, 24, 1, 50, 4, 'maryoul', 1),
(60, 24, 2, 40, 5, 'serwel', 1),
(61, 24, 3, 30, 5, 'cravate', 1),
(62, 25, 1, 50, 4, 'maryoul', 1),
(63, 25, 2, 40, 5, 'serwel', 1),
(64, 25, 3, 30, 5, 'cravate', 1),
(65, 26, 3, 30, 4, 'cravate', 9),
(66, 26, 1, 50, 1, 'maryoul', 9),
(67, 26, 2, 40, 1, 'serwel', 9),
(68, 26, 1, 50, 4, 'maryoul', 9),
(69, 27, 3, 30, 4, 'cravate', 9),
(70, 27, 1, 50, 1, 'maryoul', 9),
(71, 27, 2, 40, 1, 'serwel', 9),
(72, 27, 1, 50, 4, 'maryoul', 9),
(73, 28, 3, 30, 4, 'cravate', 9),
(74, 28, 1, 50, 1, 'maryoul', 9),
(75, 28, 2, 40, 1, 'serwel', 9),
(76, 28, 1, 50, 4, 'maryoul', 9),
(77, 29, 3, 30, 6, 'cravate', 9),
(78, 30, 3, 30, 6, 'cravate', 9),
(79, 31, 3, 30, 6, 'cravate', 9),
(80, 31, 1, 50, 1, 'maryoul', 9),
(81, 31, 1, 50, 1, 'maryoul', 9),
(82, 32, 1, 50, 1, 'maryoul', 4),
(83, 32, 1, 50, 1, 'maryoul', 4),
(84, 33, 10, 50, 4, 'sandeeeel', 4),
(85, 34, 10, 50, 5, 'sandeeeel', 11),
(86, 34, 3, 30, 2, 'cravate', 11),
(87, 35, 10, 50, 12, 'sandeeeel', 11),
(88, 35, 3, 30, 2, 'cravate', 11),
(89, 36, 10, 50, 5, 'sandeeeel', 10),
(90, 36, 3, 30, 4, 'cravate', 10),
(91, 36, 5, 10, 4, 'banana', 10),
(92, 37, 10, 50, 6, 'sandeeeel', 13),
(93, 37, 3, 30, 6, 'cravate', 13),
(94, 37, 5, 10, 8, 'banana', 13),
(95, 38, 3, 30, 2, 'cravate', 4),
(96, 38, 19, 150, 1, 'chleka', 4),
(97, 38, 10, 50, 1, 'sandeeeel', 4),
(98, 39, 10, 50, 5, 'sandeeeel', 10),
(99, 39, 3, 30, 4, 'cravate', 10),
(100, 39, 5, 10, 4, 'banana', 10),
(101, 39, 19, 150, 1, 'chleka', 10),
(102, 40, 19, 150, 5, 'chleka', 14),
(103, 40, 10, 50, 1, 'sandeeeel', 14),
(104, 41, 3, 30, 6, 'cravate', 9),
(105, 41, 1, 50, 1, 'maryoul', 9),
(106, 41, 1, 50, 1, 'maryoul', 9),
(107, 43, 12, 50, 5, 'pull6', 4),
(108, 44, 65, 5, 1, 'ytjgn', 10),
(109, 44, 963, 200, 1, 'louay', 10),
(110, 44, 456, 653, 1, 'aroma', 10),
(111, 44, 10, 506, 1, 'sandeeeel', 10),
(112, 45, 10, 506, 1, 'sandeeeel', 4),
(113, 45, 1236, 68, 3, 'oussema', 4),
(114, 46, 456, 653, 1, 'aroma', 4),
(115, 46, 60, 56, 1, 'pull2', 4),
(116, 46, 10, 506, 1, 'sandeeeel', 4),
(117, 47, 932, 506, 5, 'maaaysa', 4),
(118, 58, 12, 50, 1, 'pull6', 9),
(119, 59, 12, 50, 1, 'pull6', 9),
(120, 60, 10, 50, 1, 'sandeeeel', 17),
(121, 61, 12, 50, 4, 'pull6', 19),
(122, 61, 10, 50, 1, 'sandeeeel', 19),
(123, 62, 12, 50, 1, 'pull6', 19),
(124, 63, 45, 15, 1, 'souriya', 10),
(125, 64, 45, 15, 1, 'souriya', 10),
(126, 65, 45, 15, 4, 'souriya', 9),
(127, 65, 30, 26, 3, 'maryoul', 9),
(128, 66, 45, 15, 1, 'souriya', 9),
(129, 67, 12, 50, 1, 'pull6', 18),
(130, 68, 60, 8, 1, 'pull2', 9),
(131, 69, 45, 15, 1, 'souriya', 9),
(132, 70, 1236, 68, 5, 't-shirt', 9),
(133, 71, 45, 15, 1, 'souriya', 9),
(134, 72, 60, 8, 1, 'pull2', 9),
(135, 73, 1236, 68, 1, 't-shirt', 9),
(136, 74, 45, 15, 1, 'souriya', 9),
(137, 75, 967, 65, 1, 'trikou', 9),
(138, 76, 60, 8, 1, 'pull2', 9),
(139, 77, 45, 15, 1, 'souriya', 9),
(140, 78, 1236, 68, 1, 't-shirt', 20);

-- --------------------------------------------------------

--
-- Structure de la table `livraison`
--

DROP TABLE IF EXISTS `livraison`;
CREATE TABLE IF NOT EXISTS `livraison` (
  `IDlivraison` int(11) NOT NULL AUTO_INCREMENT,
  `DateDebut` date NOT NULL,
  `DateFin` date NOT NULL,
  `IDC` int(11) NOT NULL,
  `idclient` int(11) NOT NULL,
  PRIMARY KEY (`IDlivraison`),
  KEY `idc` (`IDC`),
  KEY `id` (`idclient`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `livraison`
--

INSERT INTO `livraison` (`IDlivraison`, `DateDebut`, `DateFin`, `IDC`, `idclient`) VALUES
(20, '2019-04-18', '2019-04-30', 39, 10),
(38, '2019-05-03', '2019-05-29', 71, 9),
(18, '2019-04-18', '2019-04-26', 35, 11),
(37, '2019-05-03', '2019-05-05', 70, 9),
(19, '2019-04-18', '2019-04-19', 37, 13),
(21, '2019-04-24', '2019-04-26', 46, 4),
(36, '2019-04-29', '2019-05-03', 69, 9),
(44, '2019-05-03', '2019-05-21', 76, 9),
(39, '2019-05-03', '2019-05-18', 72, 9),
(25, '2019-04-25', '2019-04-30', 57, 9),
(26, '2019-04-25', '2019-04-30', 59, 9),
(27, '2019-04-25', '2019-04-26', 59, 9),
(28, '2019-04-25', '2019-04-30', 59, 9),
(29, '2019-04-27', '2019-04-30', 63, 10),
(30, '2019-04-27', '2019-04-30', 64, 10),
(31, '2019-04-28', '2019-04-30', 65, 9),
(32, '2019-04-28', '2019-04-30', 66, 9),
(33, '2019-04-28', '2019-04-30', 66, 9),
(34, '2019-04-29', '2019-05-02', 67, 18),
(35, '2019-04-29', '2019-05-04', 68, 9),
(40, '2019-05-03', '2019-05-10', 15, 9),
(41, '2019-05-03', '2019-05-29', 73, 9),
(42, '2019-05-03', '2019-05-27', 74, 9),
(43, '2019-05-03', '2019-05-29', 75, 9),
(45, '2019-05-03', '2019-05-29', 77, 9),
(46, '2019-05-03', '2019-05-29', 78, 20);

-- --------------------------------------------------------

--
-- Structure de la table `livreur`
--

DROP TABLE IF EXISTS `livreur`;
CREATE TABLE IF NOT EXISTS `livreur` (
  `Cin` int(11) NOT NULL,
  `Nom` varchar(100) NOT NULL,
  `Prenom` varchar(100) NOT NULL,
  `Adresse` varchar(100) NOT NULL,
  `Ville` varchar(100) NOT NULL,
  `NomEntreprise` varchar(100) NOT NULL,
  `Telephone` int(11) NOT NULL,
  `Gouvernerat` varchar(100) NOT NULL,
  `Email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci NOT NULL,
  `Pays` varchar(100) NOT NULL,
  `CodePostal` int(11) NOT NULL,
  `idclient` int(11) NOT NULL,
  `idliv` int(11) NOT NULL,
  PRIMARY KEY (`Cin`),
  KEY `idd` (`idclient`),
  KEY `idds` (`idliv`),
  KEY `nom` (`Nom`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `livreur`
--

INSERT INTO `livreur` (`Cin`, `Nom`, `Prenom`, `Adresse`, `Ville`, `NomEntreprise`, `Telephone`, `Gouvernerat`, `Email`, `Pays`, `CodePostal`, `idclient`, `idliv`) VALUES
(15006958, 'sisi', 'joujou', 'efgh', 'dfg', 'dfbn', 582, 'dsfg', 'sisi@esprit.tn', 'Tunisie', 234, 9, 13),
(5, 'sisi', 'joujou', 'fghj', 'fghjk', 'fghjk', 572, 'fghjkl', 'sisi@esprit.tn', 'hgjk', 5, 9, 16),
(150098, 'osos', 'zribi', '29 rue hannibal carthage salambo ', 'chiheya', 'jjjjj', 52435675, 'mmmmmmmm', 'osos@esprit.tn', 'tunisie', 2025, 11, 17),
(15009999, 'g', 'g', '29 rue hannibal carthage salambo ', 'fgvhb', 'fcgvhj', 852, 'dfghbn,', 'osos@esprit.tn', 'dfgh', 2025, 11, 18),
(150, 'sami', 'ss', 'kram', 'kram', 'esprit', 25233424, 'tunis', 'sami@esprit.tn', 'tunisie', 2025, 13, 19),
(852, 'h', 'h', 'dfgh', 'dfghj', 'dfghj', 852, 'dfghj', 'loulou@esprit.tn', 'dfghj', 852, 10, 20),
(88, 'sisi', 'joujou', 'lll', 'lll', 'll', 55, 'jj', 'sisi@esprit.tn', 'jjj', 88, 9, 28),
(87, 'sisi', 'joujou', 'lll', 'kkk', 'hh', 44, 'kk', 'sisi@esprit.tn', 'kk', 4, 9, 28),
(90, 'sisi', 'joujou', 'kk', 'kk', 'kk', 77, 'll', 'sisi@esprit.tn', 'kk', 25, 9, 28),
(88888, 'sisi', 'joujou', 'mmmm', 'llll', 'kkkk', 55, 'kkk', 'sisi@esprit.tn', 'kkk', 55, 9, 28),
(888, 'sisi', 'joujou', 'mmm', 'mmmm', 'mmm', 555, 'lmlmp', 'sisi@esprit.tn', 'switzerland', 88888, 9, 28),
(3699999, 'jiji', 'jjjj', 'llll', 'llll', 'lll', 4555, 'lllll', 'jassemtalbi2@gmail.com', 'switzerland', 8888, 18, 28),
(741555, 'jiji', 'jjjj', 'jjjjj', 'jjjjj', 'jjjj', 89666, 'ojjihi', 'jassemtalbi2@gmail.com', 'switzerland', 5555, 18, 28),
(15006985, 'chrifa', 'maali', 'mmm', 'mmm', 'mmm', 21485242, 'lll', 'chrifa.maali@gmail.com', 'Algerie', 555, 19, 28),
(99666, 'chrifa', 'maali', 'mmm', 'mmmm', 'gh', 8555, ',,,', 'chrifa.maali@gmail.com', 'switzerland', 777, 19, 28),
(654, 'h', 'h', 'flkv', 'skdjn', 'sdf', 54, 'sgg', 'loulou@esprit.tn', 'switzerland', 1200, 10, 29),
(15006941, 'sisi', 'joujou', 'mllkk', 'kkkkk', 'kkkk', 21485242, 'mmmmm', 'sisi@esprit.tn', 'switzerland', 2025, 9, 31),
(2541, 'sisi', 'joujou', '29 rue hannibal carthage salambo ', 'carthage', 'rien', 21485242, 'tunis', 'sisi@esprit.tn', 'Tunisia', 2025, 9, 36),
(1500699, 'sisi', 'joujou', 'jjj', 'jjj', 'jjjj', 555, 'lk', 'sisi@esprit.tn', 'ljl', 656, 9, 39),
(658900001, 'mama', 'jouini', 'carthage', 'carthage', 'mmm', 896655, 'tunis', 'siwar.jouini@gmail.com', 'Tunis', 2025, 9, 40),
(8, 'sisi', 'joujou', 'm', 'm', 'm', 8, 'm', 'sisi@esprit.tn', 'Tunisia', 5, 9, 41),
(9, 'sisi', 'joujou', 'pp', 'pp', 'pp', 85, 'pp', 'sisi@esprit.tn', 'Tunisia', 65, 9, 42),
(9654, 'sisi', 'joujou', 'j', 'j', 'k', 78, 'j', 'sisi@esprit.tn', 'Tunisia', 85, 9, 45),
(6321, 'hh', 'hh', 'gg', 'gg', 'gg', 78, 'aa', 'siwar.jouini@esprit.tn', 'Tunisia', 25, 20, 46);

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
CREATE TABLE IF NOT EXISTS `newsletter` (
  `MailLetter` varchar(255) NOT NULL,
  PRIMARY KEY (`MailLetter`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `newsletter`
--

INSERT INTO `newsletter` (`MailLetter`) VALUES
('jassem.talbi@esprit.tn'),
('maha.marrakchi@esprit.tn'),
('siwar.jouini1@esprit.tn'),
('siwar.jouini@esprit.tn');

-- --------------------------------------------------------

--
-- Structure de la table `notification`
--

DROP TABLE IF EXISTS `notification`;
CREATE TABLE IF NOT EXISTS `notification` (
  `Id_Not` int(11) NOT NULL AUTO_INCREMENT,
  `Description` varchar(255) NOT NULL,
  PRIMARY KEY (`Id_Not`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `notification`
--

INSERT INTO `notification` (`Id_Not`, `Description`) VALUES
(5, 'Mr/Mme    sisi       joujou    a effectue une livraison '),
(14, 'Mr/Mme  le client    chrifa       maali    a ajoute un compte '),
(7, 'Mr/Mme  le client    kk       kk    a ajoute un compte '),
(8, 'Mr/Mme    sisi       joujou    a effectue une livraison '),
(9, 'Mr/Mme  le client    jiji       tutou    a ajoute un compte '),
(10, 'Mr/Mme    jiji       tutou    a effectue une livraison '),
(11, 'Mr/Mme  le client    jiji       jjjj    a ajoute un compte '),
(12, 'Mr/Mme    jiji       jjjj    a effectue une livraison '),
(13, 'Mr/Mme    jiji       jjjj    a effectue une livraison '),
(15, 'Mr/Mme    chrifa       maali    a effectue une livraison '),
(16, 'Mr/Mme    chrifa       maali    a effectue une livraison '),
(17, 'Mr/Mme    h       h    a effectue une commande '),
(18, 'Mr/Mme    h       h    a effectue une livraison '),
(19, 'Mr/Mme    h       h    a effectue une commande '),
(20, 'Mr/Mme    sisi       joujou    a effectue une commande '),
(21, 'Mr/Mme    sisi       joujou    a effectue une livraison '),
(22, 'Mr/Mme    sisi       joujou    a effectue une commande '),
(23, 'Mr/Mme    sisi       joujou    a effectue une livraison '),
(24, 'Mr/Mme    jiji       jjjj    a effectue une commande '),
(25, 'Mr/Mme    jiji       jjjj    a effectue une livraison '),
(26, 'Mr/Mme    sisi       joujou    a effectue une commande '),
(27, 'Mr/Mme    sisi       joujou    a effectue une livraison '),
(28, 'Mr/Mme    sisi       joujou    a effectue une commande '),
(29, 'Mr/Mme    sisi       joujou    a effectue une livraison '),
(30, 'Mr/Mme    sisi       joujou    a effectue une commande '),
(31, 'Mr/Mme    sisi       joujou    a effectue une livraison '),
(32, 'Mr/Mme    sisi       joujou    a effectue une commande '),
(33, 'Mr/Mme    sisi       joujou    a effectue une livraison '),
(34, 'Mr/Mme    sisi       joujou    a effectue une commande '),
(35, 'Mr/Mme    sisi       joujou    a effectue une livraison '),
(36, 'Mr/Mme    sisi       joujou    a effectue une commande '),
(37, 'Mr/Mme    sisi       joujou    a effectue une livraison '),
(38, 'Mr/Mme    sisi       joujou    a effectue une commande '),
(39, 'Mr/Mme    sisi       joujou    a effectue une livraison '),
(40, 'Mr/Mme    sisi       joujou    a effectue une commande '),
(41, 'Mr/Mme    sisi       joujou    a effectue une livraison '),
(42, 'Mr/Mme  le client    hh       hh    a ajoute un compte '),
(43, 'Mr/Mme    hh       hh    a effectue une commande '),
(44, 'Mr/Mme    hh       hh    a effectue une livraison ');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `idp` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prix` float NOT NULL,
  `quantite` int(11) NOT NULL,
  `idclient` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`idp`),
  KEY `fm` (`idclient`),
  KEY `fk` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=92 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`idp`, `id`, `nom`, `prix`, `quantite`, `idclient`, `image`) VALUES
(2, 2, 'serwel', 40, 3, 0, ''),
(3, 3, 'cravate', 30, 2, 0, ''),
(24, 10, 'sandeeeel', 50, 12, 11, ''),
(23, 3, 'cravate', 30, 2, 11, ''),
(10, 2, 'serwel', 40, 1, 5, ''),
(11, 1, 'maryoul', 50, 4, 1, ''),
(12, 2, 'serwel', 40, 5, 1, ''),
(13, 1, 'maryoul', 50, 5, 8, ''),
(14, 2, 'serwel', 40, 4, 8, ''),
(15, 3, 'cravate', 30, 5, 1, ''),
(28, 10, 'sandeeeel', 50, 6, 13, ''),
(29, 3, 'cravate', 30, 6, 13, ''),
(30, 5, 'banana', 10, 8, 13, ''),
(54, 30, 'maryoul', 26, 1, 4, 'c2.jpg'),
(76, 603, 'maryoul2', 15, 1, 10, 'c3.jpg'),
(91, 30, 'maryoul', 26, 2, 200, 'c2.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

DROP TABLE IF EXISTS `pays`;
CREATE TABLE IF NOT EXISTS `pays` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Id_Tele` int(11) NOT NULL,
  `Image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pays`
--

INSERT INTO `pays` (`id`, `Nom`, `Id_Tele`, `Image`) VALUES
(5, 'switzerland', 41, 'switzerland-flag-transparent-5a229063cd9b53.8947433915122146278422.jpg'),
(4, 'Tunisia', 216, '800px-Flag_of_Tunisia.svg.png'),
(6, 'Algeriee', 213, '');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Quantite` int(11) NOT NULL,
  `Prix` float NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=1321 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`Id`, `Nom`, `Quantite`, `Prix`, `Description`, `Image`, `Type`) VALUES
(30, 'maryoul', 5, 26, 'waaw', 'c2.jpg', 'food'),
(45, 'souriya', 11, 30, 'kljiuh', 'c1.jpg', 'clothes'),
(60, 'pull2', 0, 8, 'uygjhn', 'a1.png', 'food'),
(603, 'maryoul2', 44, 65, 'nice', 'c3.jpg', 'clothes'),
(963, 'louay', 0, 530, 'dfgdhr', 'mw3.png', 'food'),
(967, 'trikou', 9, 65, 'nice', 'c5.jpg', 'clothes'),
(1236, 't-shirt', 8, 68, 'nice', 'mw2.png', 'clothes'),
(1320, 'sabbat', 6, 109, 'nice', 'c6.jpg', 'clothes');

-- --------------------------------------------------------

--
-- Structure de la table `promo`
--

DROP TABLE IF EXISTS `promo`;
CREATE TABLE IF NOT EXISTS `promo` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `idProd` int(255) NOT NULL,
  `prix_nouveau` int(255) NOT NULL,
  `description` varchar(50) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `taux` int(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idPord` (`idProd`)
) ENGINE=InnoDB AUTO_INCREMENT=636 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `reclamation`
--

DROP TABLE IF EXISTS `reclamation`;
CREATE TABLE IF NOT EXISTS `reclamation` (
  `idReclamation` int(11) NOT NULL AUTO_INCREMENT,
  `IdClient` int(11) NOT NULL,
  `Objet` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Contenue` text NOT NULL,
  `Etat` int(11) NOT NULL,
  PRIMARY KEY (`idReclamation`),
  KEY `reclamation` (`IdClient`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reclamation`
--

INSERT INTO `reclamation` (`idReclamation`, `IdClient`, `Objet`, `Type`, `Contenue`, `Etat`) VALUES
(1, 4, 'aaaaaa', 'aaaaaaaa', 'aaaaaaaaaa', 0),
(2, 4, 'aaaaaa', 'aaaaaaaa', 'aaaaaaaaaa', 0),
(3, 4, 'aaaaaa', 'aaaaaaaa', 'aaaaaaaaaa', 0),
(4, 4, 'yassin', 'ben attig', 'aaaaaaaaa', 0),
(7, 200, 'object', 'aaaaaa', 'aaaaaaaaaa', 0),
(8, 200, 'object', 'type', 'Message...', 0),
(9, 200, 'object', 'type', 'Message...', 0),
(10, 200, 'object', 'type', 'Message...', 0);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `promo`
--
ALTER TABLE `promo`
  ADD CONSTRAINT `promo_ibfk_1` FOREIGN KEY (`idProd`) REFERENCES `produit` (`Id`);

--
-- Contraintes pour la table `reclamation`
--
ALTER TABLE `reclamation`
  ADD CONSTRAINT `reclamation` FOREIGN KEY (`IdClient`) REFERENCES `compter` (`id_client`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
