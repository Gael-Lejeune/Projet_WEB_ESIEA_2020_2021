<?php
include '../model/dtb.inc.php';

session_start();

$obj = new stdClass();

$obj -> success = false;
$obj -> message = "Aucune modification n'a été faite.";

$db = dtb_connect_PDO ();

//Récupération des champs
$idcategory = $_POST['idcategory'];
$nameCategory = $_POST['nameCategory'];

if ($nameCategory != "") {
  $stmt = $db->prepare("UPDATE category SET label = ? WHERE id_category = ?");
  $stmt->execute([$nameCategory, $idcategory]);
  $obj -> success = true;
}

if ($obj -> success==true) {
  $obj -> message = "La catégorie a été modifiée.";
}


header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');
echo json_encode($obj);
