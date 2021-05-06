-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 06 mai 2021 à 16:18
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
  `category_image_url` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id_category`, `label`, `category_image_url`) VALUES
(1, 'Rock', 'https://www.webstickersmuraux.com/fr/img/asmu272-jpg/folder/products-listado-merchant/autocollants-rock-and-roll-homer-.jpg'),
(2, 'Rap', 'https://image.shutterstock.com/image-vector/vector-logo-rap-music-hand-260nw-1365427319.jpg'),
(3, 'Soundtrack', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/https://thumbs.dreamstime.com/b/soundtrack-linear-icon-modern-outline-logo-concept-o-white-background-cinema-collection-suitable-use-web-apps-mobile-'),
(4, 'K-pop', 'https://i.pinimg.com/originals/64/f8/0b/64f80b950a27cd1bcc0c05fcf824a9d5.jpg');

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `item`
--

INSERT INTO `item` (`id_item`, `name`, `price`, `id_category`, `amount`, `description`, `artist`, `release_date`, `image_url`) VALUES
(1, 'Moral Panic', 9, 1, 15, '\"Moral Panic\" by \"Nothing But Thieves\"', 'Nothing But Thieves', '2020-10-23', 'https://m.media-amazon.com/images/I/61eBzRf0RlL._SS500_.jpg'),
(4, 'Nausicaä of the Valley of the Wind Soundtrack', 15, 3, 3, '\"Nausicaä of the Valley of the Wind Soundtrack\" by \"Joe Hisaishi\"', 'Joe Hisaishi', '2006-08-23', 'https://lh3.googleusercontent.com/proxy/0odNku4YiiSZK6M-Mc8BhL_Kc27WbZLscSR5C6daniAb8-fkr3r0YdqePJi-qxQWl4v14muQgqsAzYjoaiB1Q55HCErlb5U4CHlxn4bEWzMPF8w43Bz9ej5FpA'),
(5, 'BE (Deluxe Edition)', 50, 4, 20, '\"BE (Deluxe Edition)\" by \"방탄소년단 (BTS)\"', 'BTS', '2020-11-20', 'https://pbs.twimg.com/media/En1jxdNWEAAm1-j.jpg'),
(6, 'Hades: Original Soundtrack', 10, 3, 26, '\"Hades: Original Soundtrack\" by \"Darren Korb\"', 'Darren Korb', '2020-09-20', 'https://f4.bcbits.com/img/a2368914893_10.jpg'),
(7, 'La fête est finie - EPILOGUE', 21, 2, 23, '\"La fête est finie - EPILOGUE\" by \"Orelsan\"', 'Orelsan', '2018-11-15', 'https://static.fnac-static.com/multimedia/Images/FD/Comete/110926/CCP_IMG_ORIGINAL/1434387.jpg');

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
  `address` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `user_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `mail`, `password`, `credit_card`, `role`, `first_name`, `last_name`, `address`, `user_name`) VALUES
(1, 'ex@mple.com', '123ex', '1212', 'client', 'Emple', 'Ex', 'dqzdzq', 'oui');

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
