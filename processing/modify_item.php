<?php
include '../model/dtb.inc.php';

session_start();

$obj = new stdClass();

$obj -> success = false;
$obj -> message = "Aucune modification n'a été faite.";

$db = dtb_connect_PDO ();

//Récupération des champs
$iditem = $_POST['iditem'];
$name = $_POST['name'];
$artist = $_POST['artist'];
$date = $_POST['date'];
$category = $_POST['categorylabel'];
$description = $_POST['description'];
$url = $_POST['urlitem'];
$price = $_POST['price'];
$amount = $_POST['amount'];

if ($name != "") {
  $stmt = $db->prepare("UPDATE item SET name = ? WHERE id_item = ?");
  $stmt->execute([$name, $iditem]);
  $obj -> success = true;
}

if ($artist != "") {
  $stmt = $db->prepare("UPDATE item SET artist = ? WHERE id_item = ?");
  $stmt->execute([$artist, $iditem]);
  $obj -> success = true;
}

if ($date != "") {
  $stmt = $db->prepare("UPDATE item SET release_date = ? WHERE id_item = ?");
  $stmt->execute([$date, $iditem]);
  $obj -> success = true;
}

if ($category != "") {
  $stmt = $db->prepare("UPDATE item SET id_category = (SELECT id_category FROM category WHERE label = ?) WHERE id_item = ?");
  $stmt->execute([$category, $iditem]);
  $obj -> success = true;
}

if ($description != "") {
  $stmt = $db->prepare("UPDATE item SET description = ? WHERE id_item = ?");
  $stmt->execute([$description, $iditem]);
  $obj -> success = true;
}

if ($url != "") {
  $stmt = $db->prepare("UPDATE item SET image_url = ? WHERE id_item = ?");
  $stmt->execute([$url, $iditem]);
  $obj -> success = true;
}

if ($price != "" && $price > 0) {
  $stmt = $db->prepare("UPDATE item SET price = ? WHERE id_item = ?");
  $stmt->execute([$price, $iditem]);
  $obj -> success = true;
}

if ($amount != "") {
  $stmt = $db->prepare("UPDATE item SET amount = ? WHERE id_item = ?");
  $stmt->execute([$amount, $iditem]);
  $obj -> success = true;
}

if ($obj -> success==true) {
  $obj -> message = "L'album a été modifié.";
}


header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');
echo json_encode($obj);
