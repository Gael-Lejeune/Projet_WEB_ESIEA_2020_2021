<?php
$db = dtb_connect_PDO(); //connection a la base de donnée avec PDO
// echo 'SELECT * FROM item, category WHERE item.id_category = category.id_category AND item.id_item IN ('.str_repeat('?, ', count($_SESSION['cart']) - 1) . '?)';
$query = $db->prepare('SELECT shipment.id_shipment, shipment.order_date, shipment.estimated_date, shipment.address FROM shipment,user WHERE shipment.user_id = user.id_user AND user.user_name = ?');
$query->execute([$_SESSION['login']]);
$shipments = $query->fetchAll(PDO::FETCH_ASSOC);
// var_dump($shipments);
if (isset($shipments) && sizeof($shipments) != 0) {
    $query = $db->prepare('SELECT id_shipment,order_date,estimated_date,address,item_list.amount,name,artist,price,image_url FROM shipment,item_list,item WHERE shipment.id_shipment = item_list.shipment_id AND item.id_item = item_list.item_id AND shipment.id_shipment IN ('.str_repeat('?, ', count($shipments) - 1) . '?)');
    $shipmentList = array();
    for ($i=0; $i < sizeof($shipments); $i++) {
        array_push($shipmentList, $shipments[$i]['id_shipment']);
    }
    $query->execute($shipmentList);
    $items = $query->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($items);

    $shipmentArray= array();
    for ($i=0; $i < sizeof($shipments); $i++) {
        $shipment = array();
        $shipment['id'] = $shipments[$i]['id_shipment'];
        $shipment['order_date'] = new DateTime($shipments[$i]['order_date']);
        $shipment['order_date'] = $shipment['order_date']->format("d/m/Y");
        $shipment['estimated_date'] = new DateTime($shipments[$i]['estimated_date']);
        $shipment['estimated_date'] = $shipment['estimated_date']->format("d/m/Y");
        $shipment['address'] = $shipments[$i]['address'];
        $itemList = array();
        for ($j=0; $j < sizeof($items); $j++) {
            if ($items[$j]['id_shipment'] == $shipment['id']) {
                array_push($itemList, $items[$j]);
            }
        }
        $shipment['item_list'] = $itemList;
        array_push($shipmentArray, $shipment);
    }

}

// var_dump($shipmentArray);
// var_dump($shipmentArray[0]);



// var_dump($_SESSION['cart']);
// $_SESSION['cart'] = null;
$totalPrice = null;
