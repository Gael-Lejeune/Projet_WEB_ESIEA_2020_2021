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
        $_SESSION['cart'][$i]['amount'] = $_SESSION['cart'][$i]['amount']-1;
        // echo "found";
        $found = true;
        $foundIndex = $i;
        $obj -> amount = $_SESSION['cart'][$i]['amount'];
    }
}

$obj -> success = true;
if ($found && $_SESSION['cart'][$foundIndex]['amount'] == 0) {
    unset($_SESSION['cart'][$foundIndex]);
    $_SESSION['cart'] = array_values($_SESSION['cart']);
}


header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');
echo json_encode($obj);
?>
