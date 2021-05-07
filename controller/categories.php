<?php
include "../model/link.inc.php";
include '../model/dtb.inc.php';
include "../model/utils.inc.php";

//Création de l'en tête et de l'include du css sur la page
start_page($categories, $categoriesCSS);

//Demarrage de la session
session_start();
$logged = logincheck();

//Appel du model
require $categoriesModel;

//Affichage de la page
require $categoriesView;

end_page();
