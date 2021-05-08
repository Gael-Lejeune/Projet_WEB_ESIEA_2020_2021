<?php
if (isset($_SESSION['cart']) && sizeof($_SESSION['cart'])!=0){
    $db = dtb_connect_PDO(); //connection a la base de donnée avec PDO
    // echo 'SELECT * FROM item, category WHERE item.id_category = category.id_category AND item.id_item IN ('.str_repeat('?, ', count($_SESSION['cart']) - 1) . '?)';
    $query = $db->prepare('SELECT shipment.id_shipment FROM shipment,user WHERE shipment.user_id = user.id_user AND user.user_name = ?');
    $query->execute([$_SESSION['login']]);
    $shipments = $query->fetchAll(PDO::FETCH_ASSOC);
    var_dump($shipments);

    $query = $db->prepare('SELECT * FROM shipment,item_list WHERE shipment.id_shipment = item_list.shipment_id AND shipment.id_shipment IN ('.str_repeat('?, ', count($_SESSION['cart']) - 1) . '?)');
    $shipmentList = array();
    for ($i=0; $i < sizeof($shipments); $i++) {
        array_push($shipmentList, $shipments[$i]['id_shipment']);
    }
    $query->execute($shipmentList);
    $items = $query->fetchAll(PDO::FETCH_ASSOC);
    var_dump($items);

    // var_dump($_SESSION['cart']);
    // $_SESSION['cart'] = null;
    $totalPrice = null;
}
