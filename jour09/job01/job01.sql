-- Job 01 : Créer une base de données et des tables
-- Ce fichier SQL peut être importé dans phpMyAdmin ou exécuté directement

-- Je crée la base de données jour09
CREATE DATABASE IF NOT EXISTS `jour09` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

-- J'utilise la base de données jour09
USE `jour09`;

-- Je crée la table etudiants
CREATE TABLE IF NOT EXISTS `etudiants` (
  -- id est un entier, clé primaire, et s'incrémente automatiquement
  `id` int(11) NOT NULL AUTO_INCREMENT,
  -- prenom est une chaîne de caractères de 255 caractères maximum
  `prenom` varchar(255) NOT NULL,
  -- nom est une chaîne de caractères de 255 caractères maximum
  `nom` varchar(255) NOT NULL,
  -- naissance est une date
  `naissance` date NOT NULL,
  -- sexe est une chaîne de caractères de 25 caractères maximum
  `sexe` varchar(25) NOT NULL,
  -- email est une chaîne de caractères de 255 caractères maximum
  `email` varchar(255) NOT NULL,
  -- Je définis id comme clé primaire
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Je crée la table etage
CREATE TABLE IF NOT EXISTS `etage` (
  -- id est un entier, clé primaire, et s'incrémente automatiquement
  `id` int(11) NOT NULL AUTO_INCREMENT,
  -- nom est une chaîne de caractères de 255 caractères maximum
  `nom` varchar(255) NOT NULL,
  -- numero est un entier
  `numero` int(11) NOT NULL,
  -- superficie est un entier
  `superficie` int(11) NOT NULL,
  -- Je définis id comme clé primaire
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Je crée la table salles
CREATE TABLE IF NOT EXISTS `salles` (
  -- id est un entier, clé primaire, et s'incrémente automatiquement
  `id` int(11) NOT NULL AUTO_INCREMENT,
  -- nom est une chaîne de caractères de 255 caractères maximum
  `nom` varchar(255) NOT NULL,
  -- id_etage est un entier (pour faire référence à la table etage)
  `id_etage` int(11) NOT NULL,
  -- capacite est un entier
  `capacite` int(11) NOT NULL,
  -- Je définis id comme clé primaire
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

