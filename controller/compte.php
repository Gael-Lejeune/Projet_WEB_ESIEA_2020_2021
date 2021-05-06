<?php
include "../model/link.inc.php";
include '../model/dtb.inc.php';
include "../model/utils.inc.php";

//Création de l'en tête et de l'include du css sur la page
start_page($compte, $compteCSS);

//Demarrage de la session
session_start();

if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {

//Appel du model
require $compteModel;

//Affichage de la page
require $compteView;
}
else {
	echo "Page non disponible, vous n'êtes pas connecté.";
}

end_page();
