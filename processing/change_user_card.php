<?php
include '../model/dtb.inc.php';

session_start();
$obj = new stdClass();

$db = dtb_connect_PDO ();
$newusercard = $_REQUEST['newCard'];
$nom_client = $_SESSION['login'];

$stmt = $db->prepare("UPDATE user SET credit_card = ? WHERE user_name = ?");
if($stmt->execute([$newusercard, $nom_client])){
  $obj -> success = true;
  $obj -> card = $newusercard;
  $obj -> message = "Carte changée";
} else {
  $obj -> success = false;
  $obj -> message = "Veuillez entrer une carte valide.";
}


header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');
echo json_encode($obj);
