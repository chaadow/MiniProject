-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Dim 03 Mars 2013 à 23:34
-- Version du serveur: 5.5.25
-- Version de PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données: `140179suplink`
--

-- --------------------------------------------------------

--
-- Structure de la table `urls`
--

CREATE TABLE `urls` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `shortUrl` varchar(255) NOT NULL,
  `click` int(11) NOT NULL DEFAULT '0',
  `dateUrl` date NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `userId` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`,`url`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=81 ;

--
-- Contenu de la table `urls`
--

INSERT INTO `urls` (`id`, `name`, `url`, `shortUrl`, `click`, `dateUrl`, `active`, `userId`) VALUES
(3, 'facebook', 'http://facebook.com', '1g788', 17, '2013-03-03', 1, 1),
(5, 'google', 'http://google.fr', '1dsis', 1, '2013-03-03', 1, 3),
(6, 'guigui', 'http://facebook.com', '5cchi', 1, '2013-03-03', 1, 14),
(7, 'Github', 'http://github.com', '4stw6', 1, '2013-03-03', 1, 1),
(23, 'hello', 'http://chaadow.com', '1s34r', 0, '2013-03-03', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'chaadow@msn.com', '55c681171c3274c49c8c48149dd44339d3028ec2'),
(2, 'chedli@siu-soon.com', '64faf5d0b1dc311fd0f94af64f6c296a03045571'),
(3, 'plop', '64faf5d0b1dc311fd0f94af64f6c296a03045571'),
(4, 'hello', 'aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d'),
(5, 'Hello@sqd', 'e0c9035898dd52fc65c41454cec9c4d2611bfb37'),
(6, 'BLABLA@slk.com', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8'),
(7, 'chedlia@siu-soon.com', 'ffa6706ff2127a749973072756f83c532e43ed02'),
(9, 'qsd@sqd', 'a0f1490a20d0211c997b44bc357e1972deab8ae3'),
(10, 'chedli@siu.com', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8'),
(11, 'test@test.com', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8'),
(12, 'hello@hi.com', '7e240de74fb1ed08fa08d38063f6a6a91462a815'),
(13, 'test@tes.com', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8'),
(14, 'guigui@guigui.guigui', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8');
