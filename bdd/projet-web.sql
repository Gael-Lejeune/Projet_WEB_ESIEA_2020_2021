-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 05 mai 2021 à 12:13
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet-web`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id_category` int NOT NULL AUTO_INCREMENT,
  `label` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id_category`, `label`) VALUES
(1, 'Rock'),
(2, 'Rap'),
(3, 'Soundtrack'),
(4, 'K-pop');

-- --------------------------------------------------------

--
-- Structure de la table `item`
--

DROP TABLE IF EXISTS `item`;
CREATE TABLE IF NOT EXISTS `item` (
  `id_item` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `price` int NOT NULL,
  `id_category` int NOT NULL,
  `amount` int NOT NULL,
  `description` varchar(500) NOT NULL,
  `artist` varchar(50) NOT NULL,
  `release_date` date NOT NULL,
  `image_url` varchar(500) NOT NULL,
  PRIMARY KEY (`id_item`),
  KEY `id_category` (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `item`
--

INSERT INTO `item` (`id_item`, `name`, `price`, `id_category`, `amount`, `description`, `artist`, `release_date`, `image_url`) VALUES
(1, 'Moral Panic', 9, 1, 15, '\"Moral Panic\" by \"Nothing But Thieves\"', 'Nothing But Thieves', '2020-10-23', 'https://m.media-amazon.com/images/I/61eBzRf0RlL._SS500_.jpg'),
(4, 'Nausicaä of the Valley of the Wind Soundtrack', 15, 3, 3, '\"Nausicaä of the Valley of the Wind Soundtrack\" by \"Joe Hisaishi\"', 'Joe Hisaishi', '2006-08-23', 'https://static.wikia.nocookie.net/ghibli/images/9/9c/%E9%A2%A8%E3%81%AE%E8%B0%B7%E3%81%AE%E3%83%8A%E3%82%A6%E3%82%B7%E3%82%AB_%E3%82%B5%E3%82%A6%E3%83%B3%E3%83%89%E3%83%88%E3%83%A9%E3%83%83%E3%82%AF_~%E3%81%AF%E3%82%8B%E3%81%8B%E3%81%AA%E5%9C%B0%E3%81%B8%E3%83%BB%E3%83%BB%E3%83%BB_%28pochette_avant%29.jpg/revision/latest/scale-to-width-down/250?cb=20200314194540&path-prefix=fr'),
(5, 'BE (Deluxe Edition)', 50, 4, 20, '\"BE (Deluxe Edition)\" by \"방탄소년단 (BTS)\"', 'BTS', '2020-11-20', 'https://pbs.twimg.com/media/En1jxdNWEAAm1-j.jpg'),
(6, 'Hades: Original Soundtrack', 10, 3, 26, '\"Hades: Original Soundtrack\" by \"Darren Korb\"', 'Darren Korb', '2020-09-20', 'https://f4.bcbits.com/img/a2368914893_10.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `item_list`
--

DROP TABLE IF EXISTS `item_list`;
CREATE TABLE IF NOT EXISTS `item_list` (
  `id_item_list` int NOT NULL,
  `user_id` int NOT NULL,
  `item_id` int NOT NULL,
  `amount` int NOT NULL,
  PRIMARY KEY (`id_item_list`),
  KEY `user_id` (`user_id`),
  KEY `item_id` (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `shipment`
--

DROP TABLE IF EXISTS `shipment`;
CREATE TABLE IF NOT EXISTS `shipment` (
  `id_shipment` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `order_date` date NOT NULL,
  `estimated_date` date DEFAULT NULL,
  `item_list_id` int NOT NULL,
  PRIMARY KEY (`id_shipment`),
  KEY `client_id` (`user_id`),
  KEY `item_list_id` (`item_list_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `mail` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `credit_card` varchar(50) DEFAULT NULL,
  `role` enum('admin','client') NOT NULL DEFAULT 'client',
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `adress` varchar(200) DEFAULT NULL,
  `user_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `mail`, `password`, `credit_card`, `role`, `first_name`, `last_name`, `adress`, `user_name`) VALUES
(1, 'ex@mple.com', '123ex', NULL, 'client', 'Emple', 'Ex', NULL, 'new');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `item_list`
--
ALTER TABLE `item_list`
  ADD CONSTRAINT `item_list_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `item_list_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `item` (`id_item`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `shipment`
--
ALTER TABLE `shipment`
  ADD CONSTRAINT `shipment_ibfk_2` FOREIGN KEY (`item_list_id`) REFERENCES `item_list` (`id_item_list`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `shipment_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
