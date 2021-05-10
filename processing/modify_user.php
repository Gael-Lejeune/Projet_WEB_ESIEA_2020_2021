<?php
include '../model/dtb.inc.php';

session_start();

$obj = new stdClass();

$obj -> success = false;
$obj -> message = "Aucune modification n'a été faite.";

$db = dtb_connect_PDO ();

//Récupération des champs
$currentname = $_POST['currentuser'];
$username = $_POST['usermodify'];
$name = $_POST['namemodify'];
$firstname = $_POST['firstnamemodify'];
$pwd = $_POST['pwdmodify'];
$mail = $_POST['mailmodify'];
$address = $_POST['addressmodify'];
$role = $_POST['rolemodify'];


$condition = $db->prepare("SELECT id_user FROM user  WHERE user_name = ?");
$condition->execute([$currentname]);
$condition = $condition->fetch();

if($condition) {
  //si l'utilisateur existe
  $id = $condition['id_user'];

  if ($username != "") {
    $stmt = $db->prepare("UPDATE user SET user_name = ? WHERE id_user = ?");
    $stmt->execute([$username, $id]);
    $obj -> success = true;
  }

  if ($name != "") {
    $stmt = $db->prepare("UPDATE user SET last_name = ? WHERE id_user = ?");
    $stmt->execute([$name, $id]);
    $obj -> success = true;
  }

  if ($firstname != "") {
    $stmt = $db->prepare("UPDATE user SET first_name = ? WHERE id_user = ?");
    $stmt->execute([$firstname, $id]);
    $obj -> success = true;
  }

  if ($pwd != "") {
    $stmt = $db->prepare("UPDATE user SET password = ? WHERE id_user = ?");
    $stmt->execute([md5($pwd), $id]);
    $obj -> success = true;
  }

  if ($mail != "") {
    $stmt = $db->prepare("UPDATE user SET mail = ? WHERE id_user = ?");
    $stmt->execute([$mail, $id]);
    $obj -> success = true;
  }

  if ($address != "") {
    $stmt = $db->prepare("UPDATE user SET address = ? WHERE id_user = ?");
    $stmt->execute([$address, $id]);
    $obj -> success = true;
  }

  if ($role != "") {
    $stmt = $db->prepare("UPDATE user SET role = ? WHERE id_user = ?");
    $stmt->execute([$role, $id]);
    $obj -> success = true;
  }

  if ($obj -> success==true) {
    $obj -> message = "L'utilisateur a été modifié.";
  }

}


header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');
echo json_encode($obj);
