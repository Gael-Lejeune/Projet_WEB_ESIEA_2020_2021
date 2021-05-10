
DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id_category` int NOT NULL AUTO_INCREMENT,
  `label` varchar(50) NOT NULL,
  `category_image_url` varchar(200) NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

DROP TABLE IF EXISTS `item`;
CREATE TABLE IF NOT EXISTS `item` (
  `id_item` int NOT NULL AUTO_INCREMENT,
  `id_category` int NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` int NOT NULL,
  `amount` int NOT NULL,
  `description` varchar(500) NOT NULL,
  `artist` varchar(50) NOT NULL,
  `release_date` date NOT NULL,
  `image_url` varchar(500) NOT NULL,
  PRIMARY KEY (`id_item`),
  KEY `id_category` (`id_category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS `item_list`;
CREATE TABLE IF NOT EXISTS `item_list` (
  `shipment_id` int NOT NULL,
  `item_id` int NOT NULL,
  `amount` int NOT NULL,
  KEY `item_id` (`item_id`),
  KEY `shipment_id` (`shipment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS `shipment`;
CREATE TABLE IF NOT EXISTS `shipment` (
  `id_shipment` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `order_date` date NOT NULL,
  `estimated_date` date DEFAULT NULL,
  `address` varchar(200) NOT NULL,
  PRIMARY KEY (`id_shipment`),
  KEY `client_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` enum('admin','client') NOT NULL DEFAULT 'client',
  `mail` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `credit_card` varchar(16) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

ALTER TABLE `item`
  ADD CONSTRAINT `item_category_fk` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`) ON DELETE CASCADE ON UPDATE CASCADE;


ALTER TABLE `item_list`
  ADD CONSTRAINT `item_list_item_fk` FOREIGN KEY (`item_id`) REFERENCES `item` (`id_item`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `item_list_shipment_fk` FOREIGN KEY (`shipment_id`) REFERENCES `shipment` (`id_shipment`) ON DELETE CASCADE ON UPDATE CASCADE;


ALTER TABLE `shipment`
  ADD CONSTRAINT `shipment_user_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;
