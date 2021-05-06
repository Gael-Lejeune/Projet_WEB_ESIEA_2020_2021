<?php
include '../model/dtb.inc.php';

session_start();
$obj = new stdClass();

$db = dtb_connect_PDO ();
$newusername = $_POST['newName'];
$nom_client = $_SESSION['login'];
if($newusername != ""){
  //vérifier dans la base de données si le nom d'utilisateur voulu n'existe pas
  $stmt = $db->prepare("SELECT user_name FROM user WHERE user_name = ?");
  $stmt->execute([$newusername]);
  $row = $stmt->fetch(PDO::FETCH_ASSOC);

  if ($row) {
    //si il existe, en demander un autre
    $obj -> success = false;
    $obj -> message = "Veuillez entrer un autre nom d'utilisateur.\nCelui-ci étant déjà pris.";

  } else {
    //sinon, changer le nom actuel par celui souhaité
    $stmt = $db->prepare("UPDATE user SET user_name = ? WHERE user_name = ?");

    if($stmt->execute([$newusername, $nom_client])){
      $_SESSION['login'] = $newusername;
      $obj -> success = true;
      $obj -> name = $_SESSION['login'];
      $obj -> message = "nom changé";

    } else {
      $obj -> success = false;
      $obj -> message = "Le changement n'a pas pu être fait.\nVeuillez réessayer.";
    }
  }

} else {
  $obj -> success = false;
  $obj -> message = "Veuillez entrer un nouveau nom d'utilisateur.";
}


header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');
echo json_encode($obj);
