-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 30 jan. 2020 à 15:39
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `alcyba`
--

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(50) NOT NULL,
  `product_type` varchar(50) NOT NULL,
  `club` varchar(50) DEFAULT NULL,
  `nation` varchar(50) DEFAULT NULL,
  `price` float NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`ID`, `product_name`, `product_type`, `club`, `nation`, `price`, `image`) VALUES
(1, 'MAILLOT PSG DOMICILE', 'maillot', 'psg', NULL, 99.9, 'images/maillots/psg.jpg'),
(2, 'MAILLOT ARSENAL DOMICILE', 'maillot', 'arsenal', NULL, 69.9, 'images/maillots/arsenal.jpg'),
(3, 'MAILLOT BRESIL DOMICILE', 'maillot', NULL, 'bresil', 99.9, 'images/maillots/bresil.jpg'),
(4, 'MAILLOT BAYERN DOMICILE', 'maillot', 'bayern', NULL, 79.9, 'images/maillots/bayern.jpg'),
(5, 'MAILLOT CITY DOMICILE', 'maillot', 'city', NULL, 79.9, 'images/maillots/city.jpg'),
(6, 'MAILLOT JUVENTUS DOMICILE', 'maillot', 'juventus', NULL, 99.9, 'images/maillots/juv.jpg'),
(7, 'MAILLOT PSG EXTERIEUR', 'maillot', 'psg', NULL, 89.9, 'images/maillots/psg_2.jpg'),
(8, 'MAILLOT BARCA DOMICILE', 'maillot', 'barca', NULL, 79.9, 'images/maillots/fcb.jpg'),
(9, 'MAILLOT LIVERPOOL DOMICILE', 'maillot', 'liverpool', NULL, 69.9, 'images/maillots/liverpool.jpg'),
(10, 'MAILLOT TOTTENHAM DOMICILE', 'maillot', 'tottenham', NULL, 59.9, 'images/maillots/tottenham.jpg'),
(11, 'MAILLOT ITALIE DOMICILE', 'maillot', NULL, 'italie', 79.9, 'images/maillots/italie.jpg'),
(12, 'MAILLOT MAN UNITED DOMICILE', 'maillot', 'man_united', NULL, 69.9, 'images/maillots/united.jpg'),
(13, 'MAILLOT PSG JORDAN', 'maillot', 'psg', NULL, 99.9, 'images/maillots/psg_3.jpg'),
(14, 'MAILLOT FRANCE DOMICILE', 'maillot', NULL, 'france', 79.9, 'images/maillots/france.jpg'),
(15, 'MAILLOT REAL DOMICILE', 'maillot', 'real', NULL, 89.9, 'images/maillots/real.jpg'),
(16, 'MAILLOT BELGIQUE DOMICILE', 'maillot', NULL, 'belgique', 69.9, 'images/maillots/belgique.jpg'),
(17, 'MAILLOT AC MILAN DOMICILE', 'maillot', 'milan', NULL, 89.9, 'images/maillots/ac.jpg'),
(18, 'MAILLOT BRESIL EXTERIEUR', 'maillot', NULL, 'bresil', 99.9, 'images/maillots/bresil_2.jpg'),
(19, 'MAILLOT BARCA EXTERIEUR', 'maillot', 'barca', NULL, 69.9, 'images/maillots/fcb_2.jpg'),
(20, 'MAILLOT OL DOMICILE', 'maillot', 'ol', NULL, 59.9, 'images/maillots/ol.jpg'),
(21, 'SHORT FRANCE DOMICILE', 'short', NULL, 'france', 39.9, 'images/shorts/france.jpg'),
(22, 'SHORT INTER MILAN DOMICILE', 'short', 'inter', NULL, 44.9, 'images/shorts/inter.jpg'),
(23, 'SHORT JUVENTUS DOMICILE', 'short', 'juventus', NULL, 59.9, 'images/shorts/juv.jpg'),
(24, 'SHORT MANCHESTER UNITED', 'short', 'man_united', NULL, 44.9, 'images/shorts/man_united.jpg'),
(25, 'SHORT ANGLETERRE DOMICILE', 'short', NULL, 'angleterre', 49.9, 'images/shorts/angleterre.jpg'),
(26, 'SHORT ARSENAL DOMICILE', 'short', 'arsenal', NULL, 59.9, 'images/shorts/arsenal.jpg'),
(27, 'SHORT BAYERN DOMICILE', 'short', 'bayern', NULL, 39.9, 'images/shorts/bayern.jpg'),
(28, 'SHORT CHELSEA DOMICILE', 'short', 'chelsea', NULL, 44.9, 'images/shorts/chelsea.jpg'),
(29, 'SHORT PORTUGAL DOMICILE', 'short', NULL, 'portugal', 59.9, 'images/shorts/portugal.jpg'),
(30, 'SHORT ITALIE DOMICILE', 'short', NULL, 'italie', 54.9, 'images/shorts/italie.jpg'),
(31, 'SHORT AS ROMA DOMICILE', 'short', 'roma', NULL, 39.9, 'images/shorts/roma.jpg'),
(32, 'SHORT REAL DOMICILE', 'short', 'real', NULL, 39.9, 'images/shorts/real.jpg'),
(33, 'SHORT TOTTENHAM DOMICILE', 'short', 'tottenham', NULL, 49.9, 'images/shorts/tottenham.jpg'),
(34, 'SHORT DORTMUND DOMICILE', 'short', 'dortmund', NULL, 59.9, 'images/shorts/dortmund.jpg'),
(35, 'SHORT BELGIQUE DOMICILE', 'short', NULL, 'belgique', 49.9, 'images/shorts/belgique.jpg'),
(36, 'SHORT MAN CITY DOMICILE', 'short', 'city', NULL, 39.9, 'images/shorts/city.jpg'),
(37, 'ADIDAS COPA GRISES', 'chaussure', 'adidas', NULL, 79.9, 'images/chaussures/adidas_copa.jpg'),
(38, 'ADIDAS NEMEZIS TANGO', 'chaussure', 'adidas', NULL, 89.9, 'images/chaussures/adidas_nemeziz_tango.jpg'),
(39, 'ADIDAS NEMESIS GRISES', 'chaussure', 'adidas', NULL, 119.9, 'images/chaussures/adidas_nemesis.jpg'),
(40, 'ADIDAS PREDATOR ROUGES ET NOIRES', 'chaussure', 'adidas', NULL, 69.9, 'images/chaussures/adidas_predator.jpg'),
(41, 'NIKE MERCURIAL SUPERFLY', 'chaussure', 'nike', NULL, 89.9, 'images/chaussures/nike_mercurial_superfly.jpg'),
(42, 'NIKE MERCURIAL VAPOR', 'chaussure', 'nike', NULL, 99.9, 'images/chaussures/nike_mercurial_vapor.jpg'),
(43, 'NIKE PHANTOM VENOM', 'chaussure', 'nike', NULL, 59.9, 'images/chaussures/nike_phantom_venom.jpg'),
(44, 'NIKE PHANTOM VISION', 'chaussure', 'nike', NULL, 79.9, 'images/chaussures/nike_phantom_vision.jpg'),
(45, 'NIKE TIEMPO BLANCHES', 'chaussure', 'nike', NULL, 79.9, 'images/chaussures/nike_tiempo.jpg'),
(46, 'PUMA FUTURE BLEUES', 'chaussure', 'puma', NULL, 89.9, 'images/chaussures/puma_future.jpg'),
(47, 'PUMA KING PRO NOIRES', 'chaussure', 'puma', NULL, 169.9, 'images/chaussures/puma_king_pro.jpg'),
(48, 'PUMA ONE JAUNES ET NOIRES', 'chaussure', 'puma', NULL, 139.9, 'images/chaussures/puma_one.jpg'),
(49, 'UNDER ARMOUR MAGNETICO', 'chaussure', 'under_armour', NULL, 99.9, 'images/chaussures/under_amour_magnetico.jpg'),
(50, 'NIKE PREMIERE BLANCHES ET NOIRES', 'chaussure', 'nike', NULL, 69.9, 'images/chaussures/nike_premiere_II.jpg'),
(51, 'NEW BALANCE VISAROO', 'chaussure', 'new_balance', NULL, 79.9, 'images/chaussures/new_balance_visaro.jpg'),
(52, 'ADIDAS X ROUGES ET GRISES', 'chaussure', 'adidas', NULL, 99.9, 'images/chaussures/adidas_x_19.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`ID`, `username`, `first_name`, `last_name`, `email_address`, `password`) VALUES
(1, 'Stabien', 'Piedallu', 'Bastien', 'b.piedallu@ecole-ipssi.net', 'Bastien'),
(2, 'Stab', 'Piedallu', 'Bastien', 'bastien.piedallu@sfr.fr', 'Stabien');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
