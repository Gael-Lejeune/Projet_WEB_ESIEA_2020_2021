<?php
include "../model/utils.inc.php";
include "../model/link.inc.php";
include '../model/dtb.inc.php';

//Création de l'en tête et de l'include du css sur la page
start_page($connexion, $connexionCSS);

//Demarrage de la session
session_start();

//Appel du model
// require $connexionModel;

//Affichage de la page
require $connexionView;

end_page();
