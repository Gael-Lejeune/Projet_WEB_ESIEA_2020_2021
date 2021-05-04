<?php
include "../model/link.inc.php";
include "../model/utils.inc.php";
include '../model/dtb.inc.php';

//Création de l'en tête et de l'include du css sur la page
start_page($accueil, $accueilCSS);

//Demarrage de la session
session_start();

//problème : toujours "invalid" même si les champs sont bons
function verify_user() {
  $db = dtb_connect_PDO ();
  $stmt = $db->prepare("SELECT * FROM user WHERE mail = ?");
  $stmt->execute([$_GET['nomU']]);
  $user = $stmt->fetch();

  if ($user && password_verify($_GET['mdpU'], $user['password']) && $user['role']=='client')
  {
    echo "valid client!";
    //return true;
  } else if ($user && password_verify($_GET['mdpU'], $user['password']) && $user['role']=='admin')
  {
    echo "valid admin!";
    //return true;
  }
  else {
    echo "invalid.";
    echo "<br>".$_GET['nomU']."  ".$_GET['mdpU'];
    echo "<br>user :".$user['mail']."  ".$user['password'];
    //return false;
  }
  $db = null;
}

verify_user();


end_page();

?>
