<?php
// $db = dtb_connect_PDO(); //connection a la base de donnée avec PDO
// // echo 'SELECT * FROM item, category WHERE item.id_category = category.id_category AND item.id_item IN ('.str_repeat('?, ', count($_SESSION['cart']) - 1) . '?)';
// $query = $db->prepare('SELECT * FROM item, category WHERE item.id_category = category.id_category AND item.id_item IN ('.str_repeat('?, ', count($_SESSION['cart']) - 1) . '?)');
//
// $itemList = array();
// for ($i=0; $i < sizeof($_SESSION['cart']); $i++) {
//     array_push($itemList, $_SESSION['cart'][$i]['id']);
// }
//
// $query->execute($itemList);
// $result = $query->fetchAll(PDO::FETCH_ASSOC);
// var_dump($_SESSION['cart']);
// $_SESSION['cart'] = null;
$totalPrice = null;
