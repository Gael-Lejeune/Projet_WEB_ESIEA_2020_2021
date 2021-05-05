<?php
include '../model/dtb.inc.php';

session_start();

$db = dtb_connect_PDO ();
$stmt = $db->prepare("DELETE FROM user  WHERE user_name = ?");
if($stmt->execute([$_SESSION['login']])){
  echo "<script>alert(\"Compte supprimé\")</script>";
  header('Location: ../controller/connexion.php');
} else {
  echo "<script>alert(\"Le compte n'a pas été supprimé\nVeuillez réessayer\")</script>";
}

?>
