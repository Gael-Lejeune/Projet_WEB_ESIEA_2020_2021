<?php
include "../model/utils.inc.php";
include "../model/link.inc.php";
include '../model/dtb.inc.php';

//Création de l'en tête et de l'include du css sur la page
start_page($inscription, $inscriptionCSS);

//Demarrage de la session
session_start();

//Appel du model
// require $inscriptionModel;

//Affichage de la page
require $inscriptionView;

end_page();
