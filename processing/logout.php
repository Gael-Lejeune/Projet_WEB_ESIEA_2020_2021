<?php

session_start();
$obj = new stdClass();

unset($_SESSION["login"]);
unset($_SESSION["pwd"]);

$obj -> success = true;

header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');
echo json_encode($obj);
