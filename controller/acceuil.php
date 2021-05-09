<?php
include "../model/link.inc.php";
include '../model/dtb.inc.php';
include "../model/utils.inc.php";

//Création de l'en tête et de l'include du css sur la page
start_page($accueil, $accueilCSS);

//Demarrage de la session
session_start();
$logged = logincheck();


//Appel du model
// require $accueilModel;

//Affichage de la page
require $accueilView;

end_page();
