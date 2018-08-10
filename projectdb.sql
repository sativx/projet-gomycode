-- phpMyAdmin SQL Dump
-- version 2.6.1
-- http://www.phpmyadmin.net
-- 
-- Serveur: localhost
-- Généré le : Jeudi 09 Août 2018 à 08:49
-- Version du serveur: 4.1.9
-- Version de PHP: 4.3.10
-- 
-- Base de données: `projectdb`
-- 

-- --------------------------------------------------------

-- 
-- Structure de la table `client`
-- 

CREATE TABLE `client` (
  `ncin` int(8) NOT NULL default '0',
  `nom` varchar(30) NOT NULL default '',
  `prenom` varchar(30) NOT NULL default '',
  `tel` varchar(8) NOT NULL default '',
  `adr` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`ncin`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Contenu de la table `client`
-- 

INSERT INTO `client` VALUES (2, 'khalil', 'chebil', '24975962', 'sousse');

-- --------------------------------------------------------

-- 
-- Structure de la table `location`
-- 

CREATE TABLE `location` (
  `mat` int(11) NOT NULL default '0',
  `ncin` int(11) NOT NULL default '0',
  `dateloc` date NOT NULL default '0000-00-00',
  `nbj` int(11) NOT NULL default '0',
  `pj` int(11) NOT NULL default '0',
  PRIMARY KEY  (`mat`,`ncin`,`dateloc`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Contenu de la table `location`
-- 


-- --------------------------------------------------------

-- 
-- Structure de la table `voiture`
-- 

CREATE TABLE `voiture` (
  `mat` int(10) NOT NULL default '0',
  `mar` varchar(30) NOT NULL default '',
  PRIMARY KEY  (`mat`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Contenu de la table `voiture`
-- 

INSERT INTO `voiture` VALUES (100, 'golf');
INSERT INTO `voiture` VALUES (120, 'mercedes');
INSERT INTO `voiture` VALUES (130, 'porche');
