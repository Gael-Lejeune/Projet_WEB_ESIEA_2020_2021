DROP TABLE IF EXISTS 'category';
CREATE TABLE 'category' (
  'id_category' int NOT NULL AUTO_INCREMENT,
  'label' varchar(50) NOT NULL,
  'category_image_url' varchar(200) NOT NULL,
  PRIMARY KEY ('id_category')
);


-- INSERT INTO 'category' ('id_category', 'label', 'category_image_url') VALUES
-- (1, 'Rock', 'https://www.webstickersmuraux.com/fr/img/asmu272-jpg/folder/products-listado-merchant/autocollants-rock-and-roll-homer-.jpg'),
-- (2, 'Rap', 'https://image.shutterstock.com/image-vector/vector-logo-rap-music-hand-260nw-1365427319.jpg'),
-- (3, 'Soundtrack', 'https://blog.musicteachershelper.com/wp-content/images/soundtrack.jpg'),
-- (4, 'K-pop', 'https://i.pinimg.com/originals/64/f8/0b/64f80b950a27cd1bcc0c05fcf824a9d5.jpg'),
-- (7, 'Jazz', 'https://media.istockphoto.com/vectors/jazz-logo-vector-template-design-illustration-vector-id990687212');


DROP TABLE IF EXISTS 'item';
CREATE TABLE 'item' (
  'id_item' int NOT NULL AUTO_INCREMENT,
  'id_category' int NOT NULL,
  'name' varchar(50) NOT NULL,
  'price' int NOT NULL,
  'amount' int NOT NULL,
  'description' varchar(500) NOT NULL,
  'artist' varchar(50) NOT NULL,
  'release_date' date NOT NULL,
  'image_url' varchar(500) NOT NULL,
  PRIMARY KEY ('id_item'),
  KEY 'id_category' ('id_category')
);

-- INSERT INTO 'item' ('id_item', 'id_category', 'name', 'price', 'amount', 'description', 'artist', 'release_date', 'image_url') VALUES
-- (1, 1, 'Marol Panic', 9, 0, '\"Moral Panic\" by \"Nothing But Thieves\"', 'Nothing But Thieves', '2020-10-23', 'https://m.media-amazon.com/images/I/61eBzRf0RlL._SS500_.jpg'),
-- (4, 3, 'Nausicaä of the Valley of the Wind Soundtrack', 15, 0, '\"Nausicaä of the Valley of the Wind Soundtrack\" by \"Joe Hisaishi\"', 'Joe Hisaishi', '2006-08-23', 'https://m.media-amazon.com/images/I/71l3NPXJdXL._SS500_.jpg'),
-- (5, 4, 'BE (Deluxe Edition)', 50, 20, '\"BE (Deluxe Edition)\" by \"방탄소년단 (BTS)\"', 'BTS', '2020-11-20', 'https://images-na.ssl-images-amazon.com/images/I/412nrLhOuCL._SX522_.jpg'),
-- (6, 3, 'Hades: Original Soundtrack', 10, 23, '\"Hades: Original Soundtrack\" by \"Darren Korb\"', 'Darren Korb', '2020-09-20', 'https://f4.bcbits.com/img/a2368914893_10.jpg'),
-- (7, 2, 'La fête est finie - EPILOGUE', 21, 23, '\"La fête est finie - EPILOGUE\" by \"Orelsan\"', 'Orelsan', '2018-11-15', 'https://static.fnac-static.com/multimedia/Images/FD/Comete/110926/CCP_IMG_ORIGINAL/1434387.jpg');

DROP TABLE IF EXISTS 'item_list';
CREATE TABLE 'item_list' (
  'shipment_id' int NOT NULL,
  'item_id' int NOT NULL,
  'amount' int NOT NULL,
  KEY 'item_id' ('item_id'),
  KEY 'shipment_id' ('shipment_id')
);

-- INSERT INTO 'item_list' ('shipment_id', 'item_id', 'amount') VALUES
-- (23, 1, 1),
-- (23, 6, 1),
-- (24, 1, 1),
-- (24, 6, 1),
-- (25, 4, 2),
-- (25, 1, 2),
-- (26, 4, 1),
-- (26, 6, 1),
-- (27, 4, 3),
-- (28, 1, 1),
-- (29, 4, 3),
-- (30, 6, 3),
-- (30, 1, 13),
-- (31, 1, 1);

DROP TABLE IF EXISTS 'shipment';
CREATE TABLE 'shipment' (
  'id_shipment' int NOT NULL AUTO_INCREMENT,
  'user_id' int NOT NULL,
  'order_date' date NOT NULL,
  'estimated_date' date DEFAULT NULL,
  'address' varchar(200) NOT NULL,
  PRIMARY KEY ('id_shipment'),
  KEY 'client_id' ('user_id')
);

-- INSERT INTO 'shipment' ('id_shipment', 'user_id', 'order_date', 'estimated_date', 'address') VALUES
-- (23, 5, '2021-05-09', '2021-05-12', 'dqzdzq'),
-- (24, 5, '2021-05-09', '2021-05-12', 'dqzdzq'),
-- (25, 5, '2021-05-09', '2021-05-12', 'qfzfqz'),
-- (26, 5, '2021-05-09', '2021-05-12', 'qfzfqz'),
-- (27, 5, '2021-05-10', '2021-05-13', 'dqdzq'),
-- (28, 5, '2021-05-10', '2021-05-13', 'dqdzq'),
-- (29, 5, '2021-05-10', '2021-05-13', 'dqdzq'),
-- (30, 5, '2021-05-10', '2021-05-13', 'dqdzq'),
-- (31, 5, '2021-05-10', '2021-05-13', 'dqdzq');

DROP TABLE IF EXISTS 'user';
CREATE TABLE 'user' (
  'id_user' int NOT NULL AUTO_INCREMENT,
  'user_name' varchar(50) NOT NULL,
  'password' varchar(50) NOT NULL,
  'role' enum('admin','client') NOT NULL DEFAULT 'client',
  'mail' varchar(50) NOT NULL,
  'first_name' varchar(50) NOT NULL,
  'last_name' varchar(50) NOT NULL,
  'credit_card' varchar(16) DEFAULT NULL,
  'address' varchar(200) DEFAULT NULL,
  PRIMARY KEY ('id_user')
);


-- INSERT INTO 'user' ('id_user', 'user_name', 'password', 'role', 'mail', 'first_name', 'last_name', 'credit_card', 'address') VALUES
-- (3, 'kmaeleon', 'oui', 'client', 'kmaeleon@laposte.net', 'Leon', 'Kmae', '0', 'dqzqdz'),
-- (4, 'kmae', '098f6bcd4621d373cade4e832627b4f6', 'client', 'kmaeleon@laposte.net', 'Leon', 'Kmae', '0', ''),
-- (5, 'test', '098f6bcd4621d373cade4e832627b4f6', 'client', 'fqfzq@fr.fr', 'd', 'q', '0', 'dqdzq'),
-- (6, 'dqdzq', '65267df333b9d203b899765eef32fda6', 'client', 'qdzd', 'qdqz', 'dqdqz', '0', 'dqdq'),
-- (7, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin@admin.admin', 'admin', 'admin', '0', 'admin');

ALTER TABLE 'item'
  ADD CONSTRAINT 'item_category_fk' FOREIGN KEY ('id_category') REFERENCES 'category' ('id_category') ON DELETE RESTRICT ON UPDATE RESTRICT;


ALTER TABLE 'item_list'
  ADD CONSTRAINT 'item_list_item_fk' FOREIGN KEY ('item_id') REFERENCES 'item' ('id_item') ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT 'item_list_shipment_fk' FOREIGN KEY ('shipment_id') REFERENCES 'shipment' ('id_shipment');


ALTER TABLE 'shipment'
  ADD CONSTRAINT 'shipment_user_fk' FOREIGN KEY ('user_id') REFERENCES 'user' ('id_user') ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;
