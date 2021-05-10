<?php
include "../model/link.inc.php";
include '../model/dtb.inc.php';
include "../model/utils.inc.php";

//Création de l'en tête et de l'include du css sur la page
start_page($commandes, $commandesCSS);

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
  //Appel du model
  require $commandesModel;

  //Affichage de la page
  require $commandesView;
}

end_page();
