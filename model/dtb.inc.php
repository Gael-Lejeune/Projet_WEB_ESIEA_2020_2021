<?php
// Contient les fonction de base en rapport avec la base de donnée et la PDO

// renvoi vrai si la personne est bien connecté (en verifiant les variables SESSION) et faux dans l'autre cas
function logincheck() {
    if (isset($_SESSION['login']) && isset($_SESSION['login'])) {
        return (exist($_SESSION['login'], $_SESSION['pwd'])) ? true : false;
    } else {
        return false;
    }
}

function exist ($user_name, $password) // renvoi vrai si l'utilisateur est bien entrer dans la base de donnée et que le mot de passe correspond, faux dans l'autre cas
{
    $query = dtb_connect_PDO()->prepare('SELECT user_name FROM user WHERE user_name = :user_name AND password = :password');
    $query->execute(array(':user_name' => $user_name, ':password' => $password));
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
  $servername = "localhost";
  $username = "root";
  $password = "";
  $bddname = "projet-web";
  $db = new PDO("mysql:host=$servername;dbname=$bddname", $username, $password);
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
//

?>
