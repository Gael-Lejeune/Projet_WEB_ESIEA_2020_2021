<?php
include '../model/dtb.inc.php';

session_start();
$obj = new stdClass();

$db = dtb_connect_PDO ();

$result = $db->prepare("DELETE FROM category WHERE label = ?");

if ($_SESSION['role']=='admin') {
  //si l'utilisateur identifié est un administrateur
  $condition = $db->prepare("SELECT COUNT(*) FROM item WHERE id_category = (SELECT id_category FROM category WHERE label = ?)");
  $condition->execute([$_POST['categorylabel']]);
  $count = $condition->fetchColumn();

  if($count>0) {
    //Si des produits sont de cette catégorie
    $obj -> success = false;
    $obj -> message = "La catégorie n'a pas été supprimée.\nVeuillez supprimer les ".$count." albums de cette catégorie puis réessayer.";
  } else {
    //Si il n'y en a aucun
    if($result->execute([$_POST['categorylabel']])){
      $obj -> success = true;
      $obj -> message = "La catégorie ".$_POST['categorylabel']." a été supprimée.";
    } else {
      $obj -> success = false;
      $obj -> message = "La catégorie n'a pas été supprimée.\nVeuillez réessayer.";
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
