<?php
include "../model/link.inc.php";
include '../model/dtb.inc.php';
include "../model/utils.inc.php";

//Création de l'en tête et de l'include du css sur la page
start_page($connexion, $connexionCSS);

//Demarrage de la session
session_start();
$logged = logincheck();

if (logincheck()) {
  echo '<script>
    alert("Vous êtes déjà connecté. Pour consulter cette page, veuillez vous déconnecter.\n Pour cela : mon compte > se déconnecter.");
    window.location = "../controller/accueil.php";
  </script> ';
}
else {
  echo '<script src="../js/user_connexion.js"></script>';
  //Appel du model
  // require $connexionModel;

  //Affichage de la page
  require $connexionView;
}



end_page();
