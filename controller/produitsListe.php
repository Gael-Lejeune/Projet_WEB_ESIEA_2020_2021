<?php
include "../model/link.inc.php";
include '../model/dtb.inc.php';
include "../model/utils.inc.php";

//Création de l'en-tête et de l'include du css sur la page
start_page($produitsListe, $produitsListeCSS);

//Démarrage de la session
session_start();
$logged = logincheck();


//Appel du model
require $produitsListeModel;

//Affichage de la page
require $produitsListeView;

end_page();
