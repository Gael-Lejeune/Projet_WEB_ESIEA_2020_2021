<?php
include '../model/dtb.inc.php';

session_start();

$db = dtb_connect_PDO ();
$newuseraddress = $_REQUEST['newAddress'];
$nom_client = $_SESSION['login'];

$stmt = $db->prepare("UPDATE user SET adress = ? WHERE user_name = ?");
if($stmt->execute([$newuseraddress, $nom_client])){
  echo $newuseraddress;
}
?>
