<?php
include "../model/link.inc.php";
session_start();

// $_SESSION['cart'] = null;
if (isset($_SESSION['cart'])) {
    $_SESSION['cart'] = null;
}

header('Location: '.$panierController);
