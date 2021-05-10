-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 10 mai 2021 à 21:10
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
  `label` varchar(50) NOT NULL,
  `category_image_url` varchar(200) NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id_category`, `label`, `category_image_url`) VALUES
(1, 'Soundtrack', 'https://blog.musicteachershelper.com/wp-content/images/soundtrack.jpg'),
(2, 'Pop', 'https://www.europavox.com/wp-content/uploads/2019/01/david-byrne-pop.jpeg'),
(3, 'Rock', 'https://www.webstickersmuraux.com/fr/img/asmu272-jpg/folder/products-listado-merchant/autocollants-rock-and-roll-homer-.jpg'),
(4, 'K-Pop', 'https://media.istockphoto.com/vectors/handdrawn-orangepink-kpop-lettering-sticker-vector-id1176672144?k=6&m=1176672144&s=612x612&w=0&h=SzqQYOaonu2FdbAuTvryw3CsiCW0De8Y2GGAVXMLgvw='),
(5, 'Rap', 'https://blogs.chillingfrogs.com/blogb024/wp-content/uploads/sites/478/2019/04/mot-neon-rap-microphone-dans-contour-flamme_1262-11901.jpg'),
(6, 'J-Pop', 'http://pm1.narvii.com/6626/423ccbb355bd8398fc497753ea85650ef028cab2_00.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `item`
--

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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `item`
--

INSERT INTO `item` (`id_item`, `id_category`, `name`, `price`, `amount`, `description`, `artist`, `release_date`, `image_url`) VALUES
(1, 1, 'The Witcher 3: Wild Hunt (Original Game Soundtrack)', 12, 25, 'Soundtrack du jeu éponyme, cet album vous fera voyager dans l\'univers sombre et fantastique de l\'univers du Sorceleur.', 'Marcin Przybytowiczz', '2015-05-11', 'https://m.media-amazon.com/images/I/712843reuwL._SS500_.jpg'),
(2, 1, 'Hades: Original Soundtrack', 15, 5, 'The Hades Original Soundtrack by award-winning composer Darren Korb features two and a half hours of blood-pumping music created exclusively for our god-like rogue-like dungeon crawler. ... Even if you know Darren and Ashley\'s music from Bastion, Transistor, and Pyre by heart, you\'ve never heard them like this before!', 'Darren Korb', '2020-12-16', 'https://f4.bcbits.com/img/a2368914893_10.jpg'),
(3, 3, 'Moral Panic', 6, 56, 'Moral panic, qui donne son titre à cet album, n\'est pas mauvais mais fait plutôt penser à un standard des Killers car Conor Mason imite presque Brandon Flowers. ... Le chant de Conor est encore inarticulé, masqué de plus comme s\'il vocalisait dans un caisson à oxygène.', 'Nothing But Thieves', '2020-10-23', 'https://m.media-amazon.com/images/I/61eBzRf0RlL._SS500_.jpg'),
(4, 2, 'WHEN WE ALL FALL ASLEEP WHERE DO WE GO', 22, 153, 'In an interview with Zane Lowe, Eilish explained that the album was largely inspired by lucid dreaming and night terrors, revealing that it \"is basically what happens when you fall asleep,\" hence its title, and stated at an earlier interview that it \"is basically supposed to be a bad dream, or a good dream\".', 'Billie Eilish', '2019-03-29', 'https://images-na.ssl-images-amazon.com/images/I/61e23dfEOBL._SL1400_.jpg'),
(5, 6, 'Moe Moe', 17, 0, ' Special Thanks: MYLK, Puniden, YUC\'e, maisou, TORIENA, MONICO, Pepper, moji8fresh, Antenna Girl, hype, My Family, Salomé, Lachlan, Lizzy, Colin, Fabian, Mike, Jack, Kotu, Siv, Chiko, Shep, Nicolas, 荒井天道 ♡', 'Moe Shop', '2018-03-15', 'https://images-na.ssl-images-amazon.com/images/I/91I%2BGsi56cL._SY355_.jpg'),
(6, 5, 'Cafeteria', 5, 96, 'Single \"Cafeteria\" de \"Jakey\".', 'Jakey', '2018-01-01', 'https://img.discogs.com/NXIJlr5sEj-9LrEo7rN72D1JO-g=/fit-in/600x600/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-14956151-1584706768-1282.jpeg.jpg'),
(7, 3, 'a modern tragedy vol.1', 15, 3, 'A Modern Tragedy Vol. 1 is the debut EP by Canadian-American musician Grandson.', 'Grandson', '2018-06-15', 'https://m.media-amazon.com/images/I/616lrKOd9QL._SS500_.jpg'),
(8, 5, 'EPILOGUE', 26, 82, 'Un an après son troisième album La fête est finie et ses 500 000 exemplaires vendus, Orelsan marque cette fin d\'année avec une réédition de son opus. Intitulé Épilogue, ce nouveau projet est composé de 11 titres inédits et marquent la fin du chapitre La fête est finie.', 'Orelsan', '2018-11-15', 'https://images.genius.com/dc3dfa6cb678eef61df192ecd1dca89e.959x959x1.jpg'),
(9, 2, 'Make Your Own Mistakes', 57, 28, 'Focus on describing the situation to prompt your problem-solving skills. Instead of saying “How stupid I am,” focus on describing the situation. For example, if you discover that you forgot your lunch at home, you can tell yourself “Oh, no! I left my lunch at home.', 'Caiti Baker', '2017-01-01', 'https://i1.sndcdn.com/artworks-000206884265-dnpemv-t500x500.jpg'),
(10, 1, 'Doom (Original Soundtrack)', 18, 26, 'Much of Doom\'s soundtrack is inspired by early \'90s heavy metal music, and fans have long noted similarities between tracks from Doom\'s soundtrack and popular heavy metal songs. A well-known page on Doomworld titled Bobby Prince is a Filthy Thief details some of the more obvious similarities.', 'Mick Gordon', '2016-09-28', 'https://light-in-the-attic.s3.amazonaws.com/uploads/release_image/22095/image/tmp_2F1524604500044-oabat6yqry-9535187aaab3123d9335c4514ac95e8d_2FDOOM%2B-%2BPackshot.jpg'),
(11, 4, 'Be (Deluxe Edition)', 50, 23, 'Be est le cinquième album studio en langue coréenne (neuvième au total) du boys band sud-coréen BTS. Il a été publié le 20 novembre 2020 par Big Hit Entertainment et Columbia Records, neuf mois après son prédécesseur, Map of the Soul : 7 (2020). Créé en réponse à la pandémie actuelle de COVID-19, Be s\'inspire des pensées et des sentiments éprouvés par le groupe lors de la conception du projet. Les membres du groupe ont contribué à divers aspects de l\'album, notamment l\'écriture des chansons, le ', 'BTS', '2020-11-20', 'https://ibighit.com/bts/images/bts/discography/be/rwXJxHlQ87gEiJJynB1pmScl.jpg'),
(12, 2, 'Rare', 21, 0, 'Rare est le troisième album studio solo de Selena Gomez. Enregistré entre 2016 et 2019, l\'album est publié le 10 janvier 2020 par Interscope Records. En tant que productrice exécutive, Selena Gomez travaille avec de nombreux producteurs tels que Ian Kirkpatrick, Mike Dean ou encore Jason Evigan. Selena Gomez déclare que cet album est son \"journal des quelques années passées\". L\'album est pop et dansant avec des influences du R&B, du pop latino et de la musique électronique. Les paroles traitent ', 'Selena Gomez', '2020-01-10', 'https://static.fnac-static.com/multimedia/Images/FR/NR/49/e5/a8/11068745/1540-1/tsp20191213150212/Rare-Edition-Deluxe.jpg'),
(13, 4, 'OOMM (Out Of My Mind)', 22, 12, '3YE (써드아이) est un groupe de 3 filles de GH Entertainment. Le groupe est composé de : Yuji, Yurim et Haeun. Elles ont fait leurs débuts le 21 mai 2019 avec \'DMT (Do Ma Thang)\'.', '3YE', '2019-09-17', 'https://images-na.ssl-images-amazon.com/images/I/71Q%2ByS5k0ZL._AC_SY450_.jpg'),
(14, 4, 'Happily Ever After', 23, 0, '[HAPPILY EVER AFTER] Après l\'aventure WANNA ONE, le retour de Minhyun marque surtout le comeback NU\'EST au grand complet. Trois ans après CANVAS, le groupe de la Pledis Entertainment présente leur 6ème mini album Happily Ever After qui raviront les fans impatients. Inclus le solo de Minhyun Universe.', 'NU\'EST', '2019-04-30', 'https://direct.rhapsody.com/imageserver/images/alb.371783104/500x500.jpg'),
(15, 6, 'NOTE-BOOK-US.-', 21, 15, '\'note-book -Me.-\' is the 3rd single album by Japanese singer and rapper CHANMINA (ちゃんみな). It was released on February 19, 2020 by Warner Music Japan. The title track called \'ボイスメモ No. 5 (Voice Memo No. 5)\' was pre-released on January 16, 2020 with the MV of it. On the same day the artist also released her 2nd single album \'note-book -u.-\'. The single album includes 4 tracks. The single album\'s languages are Japanese and English, and its total length is 11:13.', 'CHANMINA', '2020-02-19', 'https://m.media-amazon.com/images/I/81v4aG9OTTL._SS500_.jpg'),
(16, 2, 'MEMORIES', 5, 2, 'Memories est une chanson du groupe de pop rock américain Maroon 5. Il a été sorti par 222 Records et Interscope Records le 20 septembre 2019, en tant que single principal de leur septième album studio à venir. La chanson a été produite par le chanteur principal Adam Levine et l’équipe de production The Monsters and the Strangerz et écrit par Levine, Stefan Johnson, Jordan Johnson, Michael Pollack, Jacob Kasher Hindlin, Jon Bellion, et Vincent Ford. La chanson a atteint son point culminant au num', 'MAROON 5', '2019-10-20', 'https://static.qobuz.com/images/covers/va/am/m7f8nqy0zamva_600.jpg'),
(17, 5, 'First Mixtape', 18, 8, 'Agust D is the debut mixtape by South Korean rapper Agust D, better known as Suga of boy-band BTS. It was released on August 15, 2016, by Big Hit Entertainment on SoundCloud.', 'AGUST D', '2016-08-15', 'https://upload.wikimedia.org/wikipedia/en/thumb/f/f2/Agust_D_COVER.JPG/220px-Agust_D_COVER.JPG'),
(18, 4, 'EQUAL', 20, 3, '[EQUAL] Après la séparation d\'X1, Cho Seung Youn rebondit sous le nom de WOODZ et dévoile son premier mini album solo EQUAL. L\'artiste membre du groupe UNIQ nous montre ses talents d\'auteur et de compositeur avec 7 titres originaux aux fortes influences R&B.', 'Woodz', '2020-06-29', 'https://www.nautiljon.com/images/more/02/19/191491.jpg'),
(19, 6, 'ON\'O', 20, 4, 'Ce premier album comprend le premier single \"I\'M SWAG\" sorti en 2018 sous le nom de ONE N\'ONLY, et le single 2019 \"Dark Knight\" et \"Category / My Love\", qui ont atteint la première place du classement hebdomadaire des singles Oricon. ', 'ONE N\' ONLY', '2020-04-13', 'https://st.cdjapan.co.jp/pictures/l/03/11/ZXRC-2062.jpg?v=1'),
(20, 2, 'Reputation', 19, 1, 'Reputation est le sixième album de l\'auteure-compositrice-interprète américaine Taylor Swift, sorti le 10 novembre 2017 sous le label Big Machine Records', 'TAYLOR SWIFT', '2017-11-10', 'https://static.fnac-static.com/multimedia/Images/FR/NR/90/e0/8c/9232528/1540-1/tsp20171115080037/Reputation-Inclus-DVD.jpg');

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
(1, 2, 2),
(1, 3, 1),
(1, 5, 3),
(2, 7, 2),
(2, 1, 1),
(2, 6, 5);

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `shipment`
--

INSERT INTO `shipment` (`id_shipment`, `user_id`, `order_date`, `estimated_date`, `address`) VALUES
(1, 2, '2021-05-01', '2021-05-04', 'ici'),
(2, 2, '2021-05-10', '2021-05-13', 'ici');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `user_name`, `password`, `role`, `mail`, `first_name`, `last_name`, `credit_card`, `address`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin@admin.admin', 'admin', 'admin', '', 'admin'),
(2, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'client', 'user@user.user', 'user', 'user', '', 'user');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_category_fk` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `item_list`
--
ALTER TABLE `item_list`
  ADD CONSTRAINT `item_list_item_fk` FOREIGN KEY (`item_id`) REFERENCES `item` (`id_item`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `item_list_shipment_fk` FOREIGN KEY (`shipment_id`) REFERENCES `shipment` (`id_shipment`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `shipment`
--
ALTER TABLE `shipment`
  ADD CONSTRAINT `shipment_user_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
