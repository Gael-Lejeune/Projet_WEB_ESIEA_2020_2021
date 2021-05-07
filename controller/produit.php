<?php
include "../model/link.inc.php";
include '../model/dtb.inc.php';
include "../model/utils.inc.php";

//Création de l'en tête et de l'include du css sur la page
start_page($produit, $produitCSS);

//Demarrage de la session
session_start();
var_dump($_SESSION);
//Appel du model
require $produitModel;
?>
<script src="../js/addToCart.js"></script>
<?php

//Affichage de la page
require $produitView;

end_page();
