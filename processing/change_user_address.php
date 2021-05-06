<?php
include '../model/dtb.inc.php';

session_start();
$obj = new stdClass();

$db = dtb_connect_PDO ();
$newuseraddress = $_POST['newAddress'];
$nom_client = $_SESSION['login'];

$stmt = $db->prepare("UPDATE user SET address = ? WHERE user_name = ?");
if($stmt->execute([$newuseraddress, $nom_client])){
    $obj -> success = true;
    $obj -> address = $_POST['newAddress'];
    $obj -> message = "Adresse changée";
} else {
    $obj -> success = false;
    $obj -> message = "Veuillez entrer une addresse plus courte";
}


header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');
echo json_encode($obj);
