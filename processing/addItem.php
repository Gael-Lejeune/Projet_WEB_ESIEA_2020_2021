<?php
include '../model/dtb.inc.php';

session_start();
$obj = new stdClass();

$db = dtb_connect_PDO ();

//récupération des valeurs du formulaire
$name = $_POST['nameadd'];
$artist = $_POST['artistadd'];
$date = $_POST['dateadd'];
$categorie = $_POST['categoryadd'];
$url = $_POST['urladd'];
$description = $_POST['descriptionadd'];
$price = $_POST['priceadd'];
$amount = $_POST['amountadd'];

//initialisation d'une variable de contrôle
$doCreate = true;

//initialisation des messages de retour
$obj -> nameMessage = "";
$obj -> artistMessage = "";
$obj -> dateMessage = "";
$obj -> categorieMessage = "";
$obj -> urlMessage = "";
$obj -> descriptionMessage = "";
$obj -> priceMessage = "";
$obj -> amountMessage = "";


if ($name =="") {
  $doCreate = false;
  $obj -> nameMessage = "Le nom de l'album est vide.";

} else {
  $stmt = $db->prepare("SELECT name FROM item WHERE name = ? AND artist = ?");
  $stmt->execute([$name, $artist]);
  $row = $stmt->fetch(PDO::FETCH_ASSOC);

  if ($row) {
    //si le nom est déjà pris pour l'artiste en question, mettre à faux "doCreate"
    $doCreate = false;
    $obj -> nameMessage = "L'album de cet artiste figure déjà dans la base de données.";
  }
}

if ($artist =="") {
  $doCreate = false;
  $obj -> artistMessage = "L'artiste est vide.";
}

if ($date =="") {
  $doCreate = false;
  $obj -> dateMessage = "La date est vide.";
}

if ($categorie =="") {
  $doCreate = false;
  $obj -> categorieMessage = "La catégorie est vide.";
}

if ($url =="") {
  $doCreate = false;
  $obj -> urlMessage = "L'url est vide.";
}

if ($description =="") {
  $doCreate = false;
  $obj -> descriptionMessage = "La description est vide.";
}

if ($price =="") {
  $doCreate = false;
  $obj -> priceMessage = "Le prix est vide.";
} elseif ($price <= 0) {
  $doCreate = false;
  $obj -> priceMessage = "Le prix doit être positif.";
}

if ($amount =="") {
  $doCreate = false;
  $obj -> amountMessage = "La quantité est vide.";
} elseif ($amount < 0) {
  $doCreate = false;
  $obj -> amountMessage = "La quantité doit être positive ou nulle.";
}


if ($doCreate == true) {
  $sql = "INSERT INTO item (name, price, id_category, amount, description, artist, release_date, image_url)
  VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
  $stmt= $db->prepare($sql);
  if ($stmt->execute([$name, $price,  $categorie, $amount, $description, $artist, $date, $url])) {
    $obj -> success = true;
    $obj -> message = "Produit ajouté.";
  } else {
    $obj -> success = false;
  }
} else {
  $obj -> success = false;
}




header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');
echo json_encode($obj);
