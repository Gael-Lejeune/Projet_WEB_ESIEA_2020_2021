<?php
include "../model/link.inc.php";
include '../model/dtb.inc.php';
include "../model/utils.inc.php";

//Création de l'en tête et de l'include du css sur la page
start_page($pageAdmin, $pageAdminCSS);

//Demarrage de la session
session_start();
$logged = logincheck();

if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {

  //Appel du model
  require $pageAdminModel;

  //Affichage de la page
  require $pageAdminView;
}
else {
	echo "Page non disponible, vous n'êtes pas connecté.";
}

end_page();
