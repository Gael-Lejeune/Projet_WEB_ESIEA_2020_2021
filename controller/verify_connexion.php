<?php
include "../model/link.inc.php";
include "../model/utils.inc.php";
include '../model/dtb.inc.php';

//Création de l'en tête et de l'include du css sur la page
start_page($accueil, $accueilCSS);

//Demarrage de la session
session_start();

//vérification des identifiants et redirection
function verify_user() {
  $db = dtb_connect_PDO ();
  $stmt = $db->prepare("SELECT * FROM user WHERE user_name = ?");
  $stmt->execute([$_POST['nomU']]);
  $user = $stmt->fetch();

  if ($user && ($_POST['mdpU']==$user['password']) && $user['role']=='client')
  {
    //valid client
    header('Location: ../controller/compte.php?nomU='.$_POST['nomU']);
  } else if ($user && ($_POST['mdpU']==$user['password']) && $user['role']=='admin')
  {
    //valid admin
      header('Location: ../controller/admin.php?nomU='.$_POST['nomU']);
  }
  else {
    //invalid
      header('Location: ../controller/connexion.php');
  }
  $db = null;
}

verify_user();


end_page();

?>
