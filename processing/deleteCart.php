<?php
include "../model/link.inc.php";
session_start();

// $_SESSION['cart'] = null;
if (isset($_SESSION['cart'])) {
    unset($_SESSION['cart']);
}

header('Location: '.$panierController);
