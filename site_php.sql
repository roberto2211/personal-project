-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 25 mars 2020 à 16:13
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
-- Base de données :  `site_php`
--

-- --------------------------------------------------------

--
-- Structure de la table `forminfo`
--

DROP TABLE IF EXISTS `forminfo`;
CREATE TABLE IF NOT EXISTS `forminfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` text NOT NULL,
  `message` longtext NOT NULL,
  `ip` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `forminfo`
--

INSERT INTO `forminfo` (`id`, `firstname`, `lastname`, `email`, `message`, `ip`, `created`) VALUES
(9, 'TWAHIRWA', 'Jean Paul', 'twahirwa@outlook.fr', 'Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.', 0, '2020-03-22 13:08:21'),
(4, 'robert', 'test Robert', 'ushiy@ahoo.fr', 'ite personnel de promotion\r\n\r\nHello Bonjour Veillez nous laisser un message via ce Formulai', 0, '2020-03-16 20:03:50'),
(5, '', '', '', '', 0, '0000-00-00 00:00:00'),
(6, 'test', 'jay', 'test@yahoo.fr', 'eyesjhdhjdjhdjkdkldksdkdsjkfhjfhjf', 0, '2020-03-16 20:29:15'),
(7, 'test', 'hjhjhj', 'twahirwa@outlook.fr', 'ghhghgghhg', 0, '2020-03-20 19:55:08'),
(8, 'jhjhj', 'j,jjk', 'sio.twahirwa.jeanpaul@gmail.com', 'kkkkk', 0, '2020-03-20 20:07:43'),
(10, 'didsuid', 'jjhhj', 'test@yahoo.fr', 'rerere', 0, '2020-03-22 15:10:44'),
(11, 'hjhjh', 'jhjhhj', 'twahirwa@outlook.fr', 'yuyuyu', 0, '2020-03-22 15:18:12'),
(12, 'test', 'test', 'jay@outlook.fr', 'teests', 0, '2020-03-22 15:28:42'),
(13, 'ddsdssd', 'dsdsds', 'hirwa@gmail.com', 'sddsdsdsds', 0, '2020-03-22 15:30:36'),
(14, 'numa', 'dsdsds', 'twahirwa@outlook.fr', 'rrrerere', 0, '2020-03-22 19:35:57');

-- --------------------------------------------------------

--
-- Structure de la table `profile`
--

DROP TABLE IF EXISTS `profile`;
CREATE TABLE IF NOT EXISTS `profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `profile`
--

INSERT INTO `profile` (`id`, `firstname`, `lastname`, `email`, `password`, `phone`, `gender`, `created`) VALUES
(23, 'numa', 'jhhj', 'twahirwa@outlook.fr', '$2y$10$rKQB7uTFZjJGoiLfE6ZzvuD8SWC4HsT7dygdnzb0vf8SujdbNQSAK', '0781818325', 0, '2020-03-25 15:08:20'),
(24, 'numa', 'jhhj', 'twahirwa@outlook.fr', '$2y$10$PPMoGe13PGYE/7LnpJ75gu2dgYvl5EsswR9HCctHcqZfgI3zarZya', '0781818325', 0, '2020-03-25 15:08:34'),
(29, 'numa', 'ccccc', 'twahirwa@outlook.fr', '$2y$10$1iTX2JsoE7FFHGd2wVptfuhQmnqwXTygG2FvcaX4qNlnQIpyVYDsG', '0781818325', 0, '2020-03-25 15:45:04');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
