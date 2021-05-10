-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 10 mai 2021 à 11:49
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id_category`, `label`, `category_image_url`) VALUES
(1, 'Rock', 'https://www.webstickersmuraux.com/fr/img/asmu272-jpg/folder/products-listado-merchant/autocollants-rock-and-roll-homer-.jpg'),
(2, 'Rap', 'https://image.shutterstock.com/image-vector/vector-logo-rap-music-hand-260nw-1365427319.jpg'),
(3, 'Soundtrack', 'https://blog.musicteachershelper.com/wp-content/images/soundtrack.jpg'),
(4, 'K-pop', 'https://i.pinimg.com/originals/64/f8/0b/64f80b950a27cd1bcc0c05fcf824a9d5.jpg'),
(7, 'Jazz', 'https://media.istockphoto.com/vectors/jazz-logo-vector-template-design-illustration-vector-id990687212');

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
(1, 'Marol Panic', 9, 1, 15, '\"Moral Panic\" by \"Nothing But Thieves\"', 'Nothing But Thieves', '2020-10-23', 'https://m.media-amazon.com/images/I/61eBzRf0RlL._SS500_.jpg'),
(4, 'Nausicaä of the Valley of the Wind Soundtrack', 15, 3, 3, '\"Nausicaä of the Valley of the Wind Soundtrack\" by \"Joe Hisaishi\"', 'Joe Hisaishi', '2006-08-23', 'https://m.media-amazon.com/images/I/71l3NPXJdXL._SS500_.jpg'),
(5, 'BE (Deluxe Edition)', 50, 4, 20, '\"BE (Deluxe Edition)\" by \"방탄소년단 (BTS)\"', 'BTS', '2020-11-20', 'https://images-na.ssl-images-amazon.com/images/I/412nrLhOuCL._SX522_.jpg'),
(6, 'Hades: Original Soundtrack', 10, 3, 26, '\"Hades: Original Soundtrack\" by \"Darren Korb\"', 'Darren Korb', '2020-09-20', 'https://f4.bcbits.com/img/a2368914893_10.jpg'),
(7, 'La fête est finie - EPILOGUE', 21, 2, 23, '\"La fête est finie - EPILOGUE\" by \"Orelsan\"', 'Orelsan', '2018-11-15', 'https://static.fnac-static.com/multimedia/Images/FD/Comete/110926/CCP_IMG_ORIGINAL/1434387.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `item_list`
--

DROP TABLE IF EXISTS `item_list`;
CREATE TABLE IF NOT EXISTS `item_list` (
  `shipment_id` int NOT NULL,
  `item_id` int NOT NULL,
  `amount` int NOT NULL,
  KEY `item_id` (`item_id`),
  KEY `shipment_id` (`shipment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `item_list`
--

INSERT INTO `item_list` (`shipment_id`, `item_id`, `amount`) VALUES
(23, 1, 1),
(23, 6, 1),
(24, 1, 1),
(24, 6, 1),
(25, 4, 2),
(25, 1, 2),
(26, 4, 1),
(26, 6, 1),
(27, 4, 3);

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
  `address` varchar(200) NOT NULL,
  PRIMARY KEY (`id_shipment`),
  KEY `client_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `shipment`
--

INSERT INTO `shipment` (`id_shipment`, `user_id`, `order_date`, `estimated_date`, `address`) VALUES
(23, 5, '2021-05-09', '2021-05-12', 'dqzdzq'),
(24, 5, '2021-05-09', '2021-05-12', 'dqzdzq'),
(25, 5, '2021-05-09', '2021-05-12', 'qfzfqz'),
(26, 5, '2021-05-09', '2021-05-12', 'qfzfqz'),
(27, 5, '2021-05-10', '2021-05-13', 'dqdzq');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `mail` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `credit_card` int DEFAULT NULL,
  `role` enum('admin','client') NOT NULL DEFAULT 'client',
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `user_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `mail`, `password`, `credit_card`, `role`, `first_name`, `last_name`, `address`, `user_name`) VALUES
(3, 'kmaeleon@laposte.net', 'oui', 0, 'client', 'Leon', 'Kmae', 'dqzqdz', 'kmaeleon'),
(4, 'kmaeleon@laposte.net', '098f6bcd4621d373cade4e832627b4f6', 0, 'client', 'Leon', 'Kmae', '', 'kmae'),
(5, 'fqfzq@fr.fr', '098f6bcd4621d373cade4e832627b4f6', 0, 'client', 'd', 'q', 'dqdzq', 'test'),
(6, 'qdzd', '65267df333b9d203b899765eef32fda6', 0, 'client', 'qdqz', 'dqdqz', 'dqdq', 'dqdzq'),
(7, 'admin@admin.admin', '21232f297a57a5a743894a0e4a801fc3', 0, 'admin', 'admin', 'admin', 'admin', 'admin');

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
  ADD CONSTRAINT `item_list_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `item` (`id_item`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `item_list_ibfk_3` FOREIGN KEY (`shipment_id`) REFERENCES `shipment` (`id_shipment`);

--
-- Contraintes pour la table `shipment`
--
ALTER TABLE `shipment`
  ADD CONSTRAINT `shipment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
