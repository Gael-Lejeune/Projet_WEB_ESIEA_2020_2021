<?php
// Contient les fonction de base en rapport avec la base de donnée et la PDO

// renvoi vrai si la personne est bien connecté (en verifiant les variables SESSION) et faux dans l'autre cas
function loginckeck($manager) {
    return ($manager->exist($_SESSION['email'], $_SESSION['password']) and $_SESSION['login']) ? true : false;
}

// Connection avec la base de donnée avec PDO
function dtb_connect_PDO () {
    $db = new PDO('mysql:host=put_host;dbname=put_database_name, put_port, put_database_password');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

    return $db;
}

//  // Charge uniquement les classes necessaire au fichier dans laquelle la fonction est appellé
// function include_classe () {
//     function chargerClasse ($classname)
//     {
//         require '../class/'.$classname.'.php';
//     }
//
//     spl_autoload_register('chargerClasse');
// }
// ?>
