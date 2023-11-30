

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Base de données : `etablissement`

CREATE DATABASE IF NOT EXISTS `etablissement` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `etablissement`;


-- Structure de la table `stagiaire`
--

CREATE TABLE `stagiaire2` (
  `id` int(20) NOT NULL ,
  `Forst_name` varchar(30) NOT NULL,
  `Last_name` varchar(30) NOT NULL,
  `Email` varchar(35) NOT NULL,
  `Password1` varchar(20) NOT NULL,
  `Password2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `stagiaire` ADD PRIMARY KEY (`id`);


INSERT INTO `stagiaire3` (`id`, `Forst_name`, `Last_name`, `Email`, `Password1`, `Password2`) VALUES
(1, 'mehdi', 'garib', 'tajriba5tajriba5@gmail.com', 'fdgdfgfdgfdg', 'dfe543rs465'),
(12, 'mehdite', 'gareeib', 'tee5taba5@gmail.com', 'fnnnnfdgfdg', 'dmmmmmmmm');




