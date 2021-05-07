<?php
include '../model/dtb.inc.php';

session_start();
$obj = new stdClass();

$db = dtb_connect_PDO ();
$result = $db->prepare("DELETE FROM user  WHERE user_name = ?");
if($result->execute([$_SESSION['login']])){
  $obj -> success = true;
  $obj -> message = "Compte supprimé";
} else {
  $obj -> success = false;
  $obj -> message = "Le compte n'a pas été supprimé.\nVeuillez réessayer";
}


header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');
echo json_encode($obj);
