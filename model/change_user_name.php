<?php
include '../model/dtb.inc.php';

$db = dtb_connect_PDO ();
$newusername = $_GET['newName'];
 $nom_client = $_GET['nomU'];
if($newusername != ""){
  $stmt = $db->prepare("UPDATE user SET user_name = ? WHERE user_name = ?");
  if($stmt->execute([$newusername, $nom_client])){
    $nom_client = $newusername;
    echo "Nom d'utilisateur changé.";
  } else {
    echo "Nom d'utilisateur inchangé.";
  }
}
 ?>
