<?php
include '../model/dtb.inc.php';

session_start();
$obj = new stdClass();

$db = dtb_connect_PDO ();

$result = $db->prepare("DELETE FROM item WHERE label = ?");

if ($_SESSION['role']=='admin') {
  //si l'utilisateur identifié est un administrateur
  $condition = $db->prepare("SELECT COUNT(*) FROM item_list WHERE item_id = (SELECT id_item FROM item WHERE name = ?)");
  $condition->execute([$_POST['itemname']]);
  $count = $condition->fetchColumn();

  if($count>0) {
    //Si le produit est dans une liste de commande
    $obj -> success = false;
    $obj -> message = "Le produit n'a pas été supprimé.\nVeuillez supprimer les ".$count." listes de commandes associées puis réessayer.";

  } else {
    //Sinon
    if($result->execute([$_POST['itemname']])){
      $obj -> success = true;
      $obj -> message = "Le produit ".$_POST['itemname']." a été supprimé.";
    } else {
      $obj -> success = false;
      $obj -> message = "Le produit n'a pas été supprimé.\nVeuillez réessayer.";
    }
  }
} else {
  $obj -> success = false;
  $obj -> message = "Vous ne pouvez pas modifier la base de données.";
}


header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');
echo json_encode($obj);
