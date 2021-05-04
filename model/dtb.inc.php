<?php
// Contient les fonction de base en rapport avec la base de donnée et la PDO

// renvoi vrai si la personne est bien connecté (en verifiant les variables SESSION) et faux dans l'autre cas
function logincheck($manager) {
    return ($manager->exist($_SESSION['email'], $_SESSION['password']) and $_SESSION['login']) ? true : false;
}

function exist ($email, $password) // renvoi vrai si l'utilisateur est bien entrer dans la base de donnée et que le mot de passe correspond, faux dans l'autre cas
{
    $query = $this->db->prepare('SELECT user_name FROM Users WHERE email = :email AND password = :password');
    $query->execute(array(':email' => $email, ':password' => $password));
    $result = $query->fetch(PDO::FETCH_ASSOC);

    return !$result ? false : true;
}

// if (loginckeck($user_manager)){
//     $user = $user_manager->getUser($_SESSION['email']); // On récupère ses informations
// }
// //Si la personne n'est pas connecte
// else
// {
//     session_destroy();
//     header("location:$logincontroller?error=ERROR_auth"); // On revient sur la page de connexion
// }

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