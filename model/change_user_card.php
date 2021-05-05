<?php
include '../model/dtb.inc.php';

session_start();

$db = dtb_connect_PDO ();
$newusercard = $_REQUEST['newCard'];
$nom_client = $_SESSION['login'];

$stmt = $db->prepare("UPDATE user SET credit_card = ? WHERE user_name = ?");
if($stmt->execute([$newusercard, $nom_client])){
  echo $newusercard;
}
?>
