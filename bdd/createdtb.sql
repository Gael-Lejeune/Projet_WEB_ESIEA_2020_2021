
DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id_category` int NOT NULL AUTO_INCREMENT,
  `label` varchar(50) NOT NULL,
  `category_image_url` varchar(200) NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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















  INSERT INTO `category` (`id_category`, `label`, `category_image_url`) VALUES
  (1, 'Soundtrack', 'https://blog.musicteachershelper.com/wp-content/images/soundtrack.jpg'),
  (2, 'Pop', 'https://www.europavox.com/wp-content/uploads/2019/01/david-byrne-pop.jpeg'),
  (3, 'Rock', 'https://www.webstickersmuraux.com/fr/img/asmu272-jpg/folder/products-listado-merchant/autocollants-rock-and-roll-homer-.jpg'),
  (4, 'K-Pop', 'https://media.istockphoto.com/vectors/handdrawn-orangepink-kpop-lettering-sticker-vector-id1176672144?k=6&m=1176672144&s=612x612&w=0&h=SzqQYOaonu2FdbAuTvryw3CsiCW0De8Y2GGAVXMLgvw='),
  (5, 'Rap', 'https://blogs.chillingfrogs.com/blogb024/wp-content/uploads/sites/478/2019/04/mot-neon-rap-microphone-dans-contour-flamme_1262-11901.jpg'),
  (6, 'J-Pop', 'http://pm1.narvii.com/6626/423ccbb355bd8398fc497753ea85650ef028cab2_00.jpg');


COMMIT;
