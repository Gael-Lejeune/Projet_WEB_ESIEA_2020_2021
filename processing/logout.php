<?php

session_start();
$obj = new stdClass();

session_destroy();

header('Location: ../controller/accueil.php');
