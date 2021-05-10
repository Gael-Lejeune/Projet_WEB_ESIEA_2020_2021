-- Les différentes requètes possibles sur la base de données

-- Les SELECT
SELECT * FROM user WHERE user_name = ?

SELECT * FROM category

SELECT * FROM item

SELECT * FROM shipment,user WHERE shipment.user_id = user.id_user AND user.user_name = ?

SELECT id_shipment,order_date,estimated_date,address,item_list.amount,name,artist,price,image_url,item.id_item FROM shipment,item_list,item WHERE shipment.id_shipment = item_list.shipment_id AND item.id_item = item_list.item_id AND shipment.id_shipment IN ?itemIdArray?

SELECT user_name FROM user WHERE user_name = ? AND password = ?

SELECT * FROM item, category WHERE item.id_category = category.id_category AND item.id_item IN ?itemIdArray?

SELECT * FROM item, category WHERE item.id_category = category.id_category AND item.id_item = ?

SELECT * FROM item, category WHERE item.id_category = category.id_category AND category.label = ?


-- Les UPDATE
UPDATE user SET user_name =? WHERE user_name = ?

UPDATE user SET address = ? WHERE user_name = ?

UPDATE category SET label = ? WHERE id_category = ?

UPDATE item SET amount = amount - ? WHERE id_item = ?


-- LES INSERTS
INSERT INTO category (label, category_image_url)
VALUES (?, ?)

INSERT INTO item (name, price, id_category, amount, description, artist, release_date, image_url)
VALUES (?, ?, ?, ?, ?, ?, ?, ?)

INSERT INTO user (mail, password, credit_card, role, first_name, last_name, address, user_name)
VALUES (?, ?, '', 'client', ?, ?, ?, ?)

INSERT INTO shipment (user_id, order_date, estimated_date, address) VALUES (?,?,?,?)

INSERT INTO item_list (shipment_id, item_id, amount) VALUES ?itemListArray?
