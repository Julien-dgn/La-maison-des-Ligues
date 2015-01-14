-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 14 Janvier 2015 à 13:38
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `maison_des_ligues`
--
CREATE DATABASE IF NOT EXISTS `maison_des_ligues` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `maison_des_ligues`;

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre_article` varchar(30) NOT NULL,
  `categorie_article` varchar(30) NOT NULL,
  `message` longtext NOT NULL,
  `pseudo` varchar(30) NOT NULL,
  `nombre_message` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `titre_article`, `categorie_article`, `message`, `pseudo`, `nombre_message`) VALUES
(1, 'titre', 'FOOTBALL', 'message', 'makabay', 0),
(2, 'foot 2', 'FOOTBALL', 'message', 'makabay', 0);

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE IF NOT EXISTS `compte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `hobbie` varchar(30) NOT NULL,
  `en_ligne` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `compte`
--

INSERT INTO `compte` (`id`, `pseudo`, `password`, `email`, `age`, `hobbie`, `en_ligne`) VALUES
(1, 'makabay', '123', 'makabay@hotmail.fr', 19, 'tennis', 'non');

-- --------------------------------------------------------

--
-- Structure de la table `reponse_article`
--

CREATE TABLE IF NOT EXISTS `reponse_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_article` int(11) NOT NULL,
  `categorie_aticle_reponse` varchar(30) NOT NULL,
  `pseudo` varchar(30) NOT NULL,
  `message` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `reponse_article`
--

INSERT INTO `reponse_article` (`id`, `id_article`, `categorie_aticle_reponse`, `pseudo`, `message`) VALUES
(1, 1, 'FOOTBALL', 'makabay', 'hh'),
(2, 1, 'FOOTBALL', 'makabay', 'aller montre moi le chemin'),
(3, 2, 'FOOTBALL', 'makabay', 'ok'),
(4, 2, 'FOOTBALL', 'makabay', 'message\r\nmessagemessage\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nmessage');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
