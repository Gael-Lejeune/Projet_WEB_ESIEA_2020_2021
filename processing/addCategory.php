<?php
include '../model/dtb.inc.php';

session_start();
$obj = new stdClass();

$db = dtb_connect_PDO ();

//récupération des valeurs du formulaire
$label = $_POST['label'];
$url = $_POST['urlcategory'];

//initialisation d'une variable de contrôle
$doCreate = true;

//initialisation des messages de retour
$obj -> labelMessage = "";
$obj -> urlMessage = "";


if ($label =="") {
  $doCreate = false;
  $obj -> labelMessage = "Le nom de catégorie est vide.";

} else {
  $stmt = $db->prepare("SELECT label FROM category WHERE label = ?");
  $stmt->execute([$label]);
  $row = $stmt->fetch(PDO::FETCH_ASSOC);

  if ($row) {
    //si le label est déjà pris, mettre à faux "doCreate"
    $doCreate = false;
    $obj -> labelMessage = "Ce nom de catégorie est déjà choisi.";
  }
}

if ($url =="") {
  $doCreate = false;
  $obj -> urlMessage = "L'url est vide.";
}


if ($doCreate==true) {
  $sql = "INSERT INTO category (label, category_image_url)
  VALUES (?, ?)";
  $stmt= $db->prepare($sql);
  if ($stmt->execute([$label, $url])) {
    $obj -> success = true;
    $obj -> message = "Catégorie ajoutée.";
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
