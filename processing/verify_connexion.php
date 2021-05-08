<?php
include '../model/dtb.inc.php';


//Demarrage de la session
session_start();
$obj = new stdClass();

$db = dtb_connect_PDO ();

//récupération des valeurs du formulaire
$username = $_POST['nomU'];
$password = $_POST['mdpU'];

//initialisation des messages de retour
$obj -> nameMessage = "";
$obj -> pwdMessage = "";


//vérification des identifiants et redirection

$db = dtb_connect_PDO ();
$stmt = $db->prepare("SELECT * FROM user WHERE user_name = ?");
$stmt->execute([$username]);
$user = $stmt->fetch();

if ($user) {
  // si le nom d'utilisateur existe
  if ($password==$user['password'] && $user['role']=='client')
  {
    //valid client
    $_SESSION['login'] = $_POST['nomU'];
    $_SESSION['pwd'] = $_POST['mdpU'];
    $_SESSION['role'] = 'client';
    $obj -> role = "client";
  } else if ($password==$user['password'] && $user['role']=='admin')
  {
    //valid admin
    $_SESSION['login'] = $_POST['nomU'];
    $_SESSION['pwd'] = $_POST['mdpU'];
    $_SESSION['role'] = 'admin';
    $obj -> role = "admin";
  }
  else {
    //invalid
    $obj -> role = "";
    $obj -> pwdMessage = "Mot de passe invalide.";
  }

} else {
  $obj -> nameMessage = "Nom d'utilisateur invalide.";
  //si il n'existe pas
}





header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');
echo json_encode($obj);
