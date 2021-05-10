<?php
include '../model/dtb.inc.php';

session_start();
$obj = new stdClass();

$db = dtb_connect_PDO ();

//récupération des valeurs du formulaire
$userId = $_POST['id'];
$creditCard = $_POST['CC'];
$address = $_POST['address'];


if ($userId =="" || $creditCard=="" || $address=="" || !isset($_SESSION['cart']) || sizeof($_SESSION['cart'])==0) {
    $obj -> success = false;
    $obj -> message = "Something's wrong";
} else {
    $currentDate = new DateTime();
    $currentDateStr = $currentDate->format("Y-m-d");
    $arrivalDate = $currentDate;
    $arrivalDate->modify("+3 day");
    $arrivalDateStr = $arrivalDate->format("Y-m-d");

    $query= $db->prepare("INSERT INTO shipment (user_id, order_date, estimated_date, address) VALUES (?,?,?,?)");
    $itemList = array();
    for ($i=0; $i < sizeof($_SESSION['cart']); $i++) {
        array_push($itemList, $_SESSION['cart'][$i]['id']);
    }
    if ($query->execute([$userId,$currentDateStr,$arrivalDateStr,$address])) {
        $obj -> success = true;
    } else {
        $obj -> success = false;
        $obj -> message = "Something's wrong";
    }

    $shipmentId = $db->lastInsertId();
    $itemList = array();
    for ($i=0; $i < sizeof($_SESSION['cart']); $i++) {
        $row = [$shipmentId, $_SESSION['cart'][$i]['id'], $_SESSION['cart'][$i]['amount']];
        array_push($itemList, $row);
    }

    $rows = count($itemList);
    $cols = count($itemList[0]);
    $rowString = '(' . rtrim(str_repeat('?,', $cols), ',') . '),';
    $valString = rtrim(str_repeat($rowString, $rows), ',');
    $query= $db->prepare("INSERT INTO item_list (shipment_id, item_id, amount) VALUES" .$valString);
    // echo "INSERT INTO item_list (shipment_id, item_id, amount) VALUES" . $valString;
    $bindArray = array();
    array_walk_recursive($itemList, function($item) use (&$bindArray) {
        $bindArray[] = $item;
    });

    if ($query->execute($bindArray)) {
        $obj -> success = true;
        for ($i=0; $i < sizeof($_SESSION['cart']); $i++) {
            $stmt = $db->prepare("UPDATE item SET amount = amount - ? WHERE id_item = ?");
            $stmt->execute([$_SESSION['cart'][$i]['amount'], $_SESSION['cart'][$i]['id']]);
        }
    } else {
        $obj -> success = false;
        $obj -> message = "Something's wrong";
    }
}

if ($obj -> success == true) {
    unset($_SESSION['cart']);
}


header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');
echo json_encode($obj);
