<?php
include "../model/link.inc.php";
include '../model/dtb.inc.php';
include "../model/utils.inc.php";

//Création de l'en tête et de l'include du css sur la page
start_page($compte, $compteCSS);

//Demarrage de la session
session_start();
$logged = logincheck();

if (!$logged) {
	echo '<script>
    alert("Page non disponible, vous n\'êtes pas connecté.");
    window.location = "../controller/accueil.php";
  </script> ';
}
else {
	echo '<script src="../js/user_function.js"> </script>';
	//Appel du model
	require $compteModel;

	//Affichage de la page
	require $compteView;
}

end_page();
