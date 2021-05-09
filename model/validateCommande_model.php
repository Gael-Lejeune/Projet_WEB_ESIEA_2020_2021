<?php
// var_dump($_SESSION);

if (isset($_SESSION['cart']) && sizeof($_SESSION['cart'])!=0){
    $db = dtb_connect_PDO(); //connection a la base de donnée avec PDO


    $query = $db->prepare('SELECT * FROM item, category WHERE item.id_category = category.id_category AND item.id_item IN ('.str_repeat('?, ', count($_SESSION['cart']) - 1) . '?)');
    $itemList = array();
    for ($i=0; $i < sizeof($_SESSION['cart']); $i++) {
        array_push($itemList, $_SESSION['cart'][$i]['id']);
    }
    $query->execute($itemList);
    $items = $query->fetchAll(PDO::FETCH_ASSOC);



    $query = $db->prepare('SELECT * FROM user WHERE user_name = ?');
    $query->execute([$_SESSION['login']]);
    $user = $query->fetch(PDO::FETCH_ASSOC);
    // var_dump($user);

    $totalPrice = null;
}
