<?php
include "../model/link.inc.php";
session_start();
$obj = new stdClass();

// $_SESSION['cart'] = null;
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

$found = false;
for ($i=0; $i < sizeof($_SESSION['cart']); $i++) {
    if (isset($_SESSION['cart'][$i]) && $_SESSION['cart'][$i]['id'] == $_POST['id']) {
        $_SESSION['cart'][$i]['amount'] = $_SESSION['cart'][$i]['amount']+1;
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

$obj -> success = true;
if ($found) {
    $obj -> amount = $_SESSION['cart'][$foundIndex]['amount'];
} else {
    $obj -> amount = $_SESSION['cart'][sizeof($_SESSION['cart'])-1]['amount'];
}


header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');
echo json_encode($obj);
?>
