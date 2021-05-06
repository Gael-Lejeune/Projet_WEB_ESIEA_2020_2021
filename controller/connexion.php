<?php
include "../model/utils.inc.php";
include "../model/link.inc.php";
include '../model/dtb.inc.php';

//Création de l'en tête et de l'include du css sur la page
start_page($connexion, $connexionCSS);

//Demarrage de la session
session_start();

if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {

  echo '<script>
    alert("Vous êtes déjà connecté. Pour consulter cette page, veuillez vous déconnecter.\n Pour cela : panier > voir mon compte > se déconnecter.");
    window.location = "../controller/acceuil.php";
  </script> ';
}
else {
  //Appel du model
  // require $connexionModel;

  //Affichage de la page
  require $connexionView;
}



end_page();
