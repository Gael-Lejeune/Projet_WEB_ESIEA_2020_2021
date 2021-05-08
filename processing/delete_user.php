<?php
include '../model/dtb.inc.php';

session_start();
$obj = new stdClass();

$db = dtb_connect_PDO ();

$result = $db->prepare("DELETE FROM user  WHERE user_name = ?");
if ($_SESSION['role']=='client') {
  if($result->execute([$_SESSION['login']])){
    $obj -> success = true;
    $obj -> message = "Compte supprimé.";
  } else {
    $obj -> success = false;
    $obj -> message = "Le compte n'a pas été supprimé.\nVeuillez réessayer.";
  }
} else if ($_SESSION['role']=='admin') {
  $condition = $db->prepare("SELECT * FROM user  WHERE user_name = ?");
  $condition->execute([$_POST['usersname']]);
  $condition = $condition->fetch();
  if($condition && $condition['role']=='admin') {
    //Si l'utilisateur est administrateur, ne pas le supprimer
    $obj -> success = false;
    $obj -> message = "Vous ne pouvez pas supprimer un administrateur.";
  } else {
    if($result->execute([$_POST['usersname']])){
      $obj -> success = true;
      $obj -> message = "Le compte ".$_POST['usersname']." a été supprimé.";
    } else {
      $obj -> success = false;
      $obj -> message = "Le compte n'a pas été supprimé.\nVeuillez réessayer.";
    }
  }
} else {
  $obj -> success = false;
  $obj -> message = "Vous n'êtes pas connecté.";
}


header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');
echo json_encode($obj);
