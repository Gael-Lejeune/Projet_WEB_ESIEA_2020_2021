<?php
include '../model/dtb.inc.php';

session_start();

$db = dtb_connect_PDO ();
$newusername = $_REQUEST['newName'];
$nom_client = $_SESSION['login'];
if($newusername != ""){
  $stmt = $db->prepare("UPDATE user SET user_name = ? WHERE user_name = ?");
  if($stmt->execute([$newusername, $nom_client])){
    $_SESSION['login'] = $newusername;
    echo $_SESSION['login'];
  } else {
    echo $_SESSION['login'];
  }
}
 ?>
