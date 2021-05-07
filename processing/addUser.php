<?php
include '../model/dtb.inc.php';

session_start();
$obj = new stdClass();

$db = dtb_connect_PDO ();

//récupération des valeurs du formulaire
$lastname = $_POST['nom'];
$firstname = $_POST['prénom'];
$username = $_POST['nomU'];
$mail = $_POST['mail'];
$address = $_POST['adr'];
$password = $_POST['mdpU'];

//initialisation d'une variable de contrôle
$doCreate = true;

$stmt = $db->prepare("SELECT user_name FROM user WHERE user_name = ?");
$stmt->execute([$username]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if ($row) {
  //si le nom est déjà pris, mettre à faux "doCreate"
  $doCreate = false;
  $obj -> nameMessage = "Ce nom d'utilisateur est déjà choisi.";
}

if ($username =="") {
  $doCreate = false;
  $obj -> nameMessage = "Le nom d'utilisateur est vide.";
}

if ($lastname =="") {
  $doCreate = false;
  $obj -> lastnameMessage = "Le nom de famille est vide.";
}

if ($firstname =="") {
  $doCreate = false;
  $obj -> firstnameMessage = "Le prenom est vide.";
}

if ($mail =="") {
  $doCreate = false;
  $obj -> mailMessage = "L'adresse electronique est vide.";
}

if ($password =="") {
  $doCreate = false;
  $obj -> pwdMessage = "Le mot de passe est vide.";
}


if ($doCreate==true) {
  $sql = "INSERT INTO user (mail, password, credit_card, role, first_name, last_name, address, user_name)
  VALUES (?, ?, '', 'client', ?, ?, ?, ?)";
  $stmt= $db->prepare($sql);
  if ($stmt->execute([$mail, $password, $firstname, $lastname, $address, $username])) {
    $obj -> success = true;
  } else {
    $obj -> success = false;
    $obj -> lastnameMessage = "Verifiez que votre nom de famille contient moins de 50 caractères.";
    $obj -> firstnameMessage = "Verifiez que votre prénom contient moins de 50 caractères.";
    $obj -> mailMessage = "Verifiez que votre adresse electronique contient moins de 50 caractères.";
    $obj -> pwdMessage = "Verifiez que votre mot de passe contient moins de 50 caractères.";
  }
} else {
  $obj -> success = false;
}




header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');
echo json_encode($obj);
