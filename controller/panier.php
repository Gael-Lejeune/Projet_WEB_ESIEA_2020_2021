<?php
include "../model/link.inc.php";
include '../model/dtb.inc.php';
include "../model/utils.inc.php";

//Création de l'en tête et de l'include du css sur la page
start_page($panier, $panierCSS);

//Demarrage de la session
session_start();
$logged = logincheck();

// var_dump($_SESSION);

?>
<script src="../js/editCart.js"></script>
<?php
//Appel du model
require $panierModel;

//Affichage de la page
require $panierView;

end_page();
