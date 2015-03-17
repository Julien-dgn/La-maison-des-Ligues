-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
-- 
-- Client: localhost
-- Généré le: Mer 11 Mars 2015 à 13:17
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;
-- 
-- Contenu de la table `article`
-- 
INSERT INTO `article` (`id`, `titre_article`, `categorie_article`, `message`, `pseudo`, `nombre_message`) VALUES
(1, 'titre', 'FOOTBALL', 'message', 'makabay', 0),
(2, 'foot 2', 'FOOTBALL', 'message', 'makabay', 0),
(3, 'Mathieu virer', 'FOOTBALL', 'Mathieu CLIO ven d''etre virer de l''equipe', 'Sl4Sh', 0);
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
`status` varchar(30) NOT NULL,
`avatar` varchar(500) DEFAULT NULL,
`nomavatar` varchar(50) DEFAULT NULL,
`compte_actif` varchar(9) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;
-- 
-- Contenu de la table `compte`
-- 
INSERT INTO `compte` (`id`, `pseudo`, `password`, `email`, `age`, `hobbie`, `en_ligne`, `status`, `avatar`, `nomavatar`, `compte_actif`) VALUES
(1, 'makabay', '123', 'lebigboss@gmail.com', 19, 'yoyo', 'non', 'admin', '802781LogoSl4ash.png', '', 'actif'),
(2, 'Sl4Sh', 'yoloswag', 'yoloswag@gmail.com', 20, 'foot', 'non', 'admin', '', '', 'desactif');
-- --------------------------------------------------------
-- 
-- Structure de la table `messagerie`
-- 
CREATE TABLE IF NOT EXISTS `messagerie` (
`expediteur` varchar(50) NOT NULL,
`destinataire` varchar(50) NOT NULL,
`contenue` text NOT NULL,
`visionner` varchar(3) NOT NULL,
`id` int(11) NOT NULL AUTO_INCREMENT,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;
-- 
-- Contenu de la table `messagerie`
-- 
INSERT INTO `messagerie` (`expediteur`, `destinataire`, `contenue`, `visionner`, `id`) VALUES
('makabay', 'Sl4Sh', 'bonjour', 'non', 1),
('makabay', 'makabay', 'il Ã©tait une fois la vie mdr vraiment ma blague c''est de la merde', 'non', 2),
('makabay', 'makabay', 'bonjour', 'non', 3);
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;
-- 
-- Contenu de la table `reponse_article`
-- 
INSERT INTO `reponse_article` (`id`, `id_article`, `categorie_aticle_reponse`, `pseudo`, `message`) VALUES
(1, 1, 'FOOTBALL', 'makabay', 'hh'),
(2, 1, 'FOOTBALL', 'makabay', 'aller montre moi le chemin'),
(3, 2, 'FOOTBALL', 'makabay', 'ok'),
(4, 2, 'FOOTBALL', 'makabay', 'message\r\nmessagemessage\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nmessage'),
(5, 1, 'FOOTBALL', 'Sl4Sh', 'le chemin c''est vers la droite ^^'),
(6, 3, 'FOOTBALL', 'Sl4Sh', 'tant mieu il Ã©tais nul');
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
