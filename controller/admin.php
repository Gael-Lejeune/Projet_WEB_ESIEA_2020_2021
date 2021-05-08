<?php
include "../model/link.inc.php";
include '../model/dtb.inc.php';
include "../model/utils.inc.php";

//Création de l'en tête et de l'include du css sur la page
start_page($pageAdmin, $pageAdminCSS);

//Demarrage de la session
session_start();
$logged = logincheck();

if ($logged) {
  if ($_SESSION['role']=='admin') {
    echo '<script src="../js/admin_functions.js"> </script>';

    //Appel du model
    require $pageAdminModel;

    //Affichage de la page
    require $pageAdminView;

  } else {
    echo '<script>
      alert("Page non disponible, vous n\'êtes pas administrateur.");
      window.location = "../controller/compte.php";
    </script> ';
  }

}
else {
  echo '<script>
    alert("Page non disponible, vous n\'êtes pas connecté.");
    window.location = "../controller/connexion.php";
  </script> ';
}

end_page();
