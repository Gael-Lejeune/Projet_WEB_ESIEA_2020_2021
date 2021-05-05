<?php
include "../model/link.inc.php";
session_start();

// $_SESSION['cart'] = null;
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

$found = false;
for ($i=0; $i < sizeof($_SESSION['cart']); $i++) {
    if (isset($_SESSION['cart'][$i]) && $_SESSION['cart'][$i]['id'] == $_GET['id']) {
        $_SESSION['cart'][$i]['amount'] = $_SESSION['cart'][$i]['amount']+1;
        echo "found";
        $found = true;
    }
}


$item = array();
if ($found == false) {
    $item['id'] = $_GET['id'];
    $item['name'] = $_GET['name'];
    $item['price'] = $_GET['price'];
    $item['category'] = $_GET['category'];
    $item['stock'] = $_GET['amount'];
    $item['artist'] = $_GET['artist'];
    $item['image'] = $_GET['image'];
    $item['amount'] = 1;
    array_push($_SESSION['cart'], $item);
}


// var_dump($_GET);
// var_dump($_SESSION['cart']);
header('Location: '.$produitController."?id=".$_GET['id']);
// echo('Location: '.$produitController."?id=".$_GET['id']);
// echo('Location: '.$produitController.$_GET['id']);
?>
