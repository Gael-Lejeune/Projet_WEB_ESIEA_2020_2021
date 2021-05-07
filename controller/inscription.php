<?php
include "../model/link.inc.php";
include '../model/dtb.inc.php';
include "../model/utils.inc.php";

//Création de l'en tête et de l'include du css sur la page
start_page($inscription, $inscriptionCSS);

//Demarrage de la session
session_start();
$logged = logincheck();


if ($logged) {
  echo '<script>
    alert("Vous êtes déjà connecté. Pour consulter cette page, veuillez vous déconnecter.\n Pour cela : panier > voir mon compte > se déconnecter.");
    window.location = "../controller/acceuil.php";
  </script> ';
}
else {
    echo '<script src="../js/user_registration.js"></script>';

  //Appel du model
  // require $inscriptionModel;

  //Affichage de la page
  require $inscriptionView;
}

end_page();
