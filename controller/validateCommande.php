<?php
include "../model/link.inc.php";
include '../model/dtb.inc.php';
include "../model/utils.inc.php";

//Création de l'en tête et de l'include du css sur la page
start_page($validateCommande, $validateCommandeCSS);

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
  echo '<script src="../js/validateCommande.js"> </script>';
  //Appel du model
  require $validateCommandeModel;

  //Affichage de la page
  require $validateCommandeView;
}

end_page();
