<?php
include "../model/link.inc.php";
include "../model/dtb.inc.php";
session_start();
$obj = new stdClass();

// $_SESSION['cart'] = null;
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}
$db = dtb_connect_PDO(); //connection a la base de donnée avec PDO
// echo 'SELECT * FROM item, category WHERE item.id_category = category.id_category AND item.id_item IN ('.str_repeat('?, ', count($_SESSION['cart']) - 1) . '?)';
$query = $db->prepare('SELECT * FROM item  WHERE item.id_item = ?');
$query->execute([$_POST['id']]);
$result = $query->fetch(PDO::FETCH_ASSOC);
// var_dump($result);

$found = false;
for ($i=0; $i < sizeof($_SESSION['cart']); $i++) {
    if (isset($_SESSION['cart'][$i]) && $_SESSION['cart'][$i]['id'] == $_POST['id']) {
        // echo "nope";
        if ($result['amount'] > $_SESSION['cart'][$i]['amount']) {
            $_SESSION['cart'][$i]['amount'] = $_SESSION['cart'][$i]['amount']+1;
            $obj -> success = true;
        } else {
            $obj -> success = false;
        }
        // echo "found";
        $found = true;
        $foundIndex = $i;
    }
}


$item = array();
if ($found == false) {
    $item['id'] = $_POST['id'];
    $item['amount'] = 1;
    array_push($_SESSION['cart'], $item);
}


if ($found) {
    $obj -> amount = $_SESSION['cart'][$foundIndex]['amount'];
} else {
    $obj -> amount = $_SESSION['cart'][sizeof($_SESSION['cart'])-1]['amount'];
    $obj -> success = true;
}


header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');
echo json_encode($obj);
?>
