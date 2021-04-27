<?php

function start_page($title, $css){ // fonction qui affiche tout le debut de la partie html
  // echo'<!DOCTYPE html>
  // <html lang="fr">
  // <head>
  // <title>'.PHP_EOL.$title.'</title>
  // <link href="'.PHP_EOL.$css.'" rel="stylesheet">
  // <link rel="icon" type="image/png" href="https://zupimages.net/up/19/44/i76f.png" />
  // <link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">
  // </head>
  // <body>'.PHP_EOL;


  echo'<!DOCTYPE html>
  <html lang="fr">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>'.PHP_EOL.$title.'</title>
  <meta name="keywords" content="Projet Web, 2021, Paris, Gaël LEJEUNE, Angélique PROUX">
  <meta name="description" content="Ce site internet est un site de vente en ligne. En tant que client, vous pourrez y trouver des produits et les commander. En tant qu\'administrateur, vous pourrez ajouter et supprimer des produits et des utilisateurs.">

  <link rel="stylesheet" type="text/css" href="'.PHP_EOL.$css.'">
  <link rel="icon" href="https://png.pngtree.com/png-vector/20190118/ourlarge/pngtree-vector-shop-icon-png-image_327584.jpg">
  <link href="https://fonts.googleapis.com/css?family=Major+Mono+Display|Merriweather|Orbitron|Quicksand" rel="stylesheet">
  <!--
  <script src="../js/button-appear.js"></script>
  -->
  </head>
  <a href="#header" id="button" class="button">
      <img src="./Images/arrow.png" alt="erreur d\'affichage" class="buttonimg" >
  </a>
  '.PHP_EOL;

};

function end_page(){ // fonction qui affiche la fin de la partie html
  echo'</html>';
}

function display_menus(){
  echo '<nav class="HolyGrail-nav">
      <ul class="menu">
          <li class="menuli"><a href="../controller/acceuil.php">Acceuil</a></li>
          <li class="menuli"><a href="../controller/produitsListe.php">Produits</a></li>
          <li class="menuli"><a href="../controller/categories.php">Catégories</a></li>
          <li class="menuli"><a href="../controller/connexion.php">Connexion</a></li>
          <li class="menuli"><a href="../controller/inscription.php">Inscription</a></li>
      </ul>
  </nav>

  <aside class="HolyGrail-ads">
      <ul class="menu">
          <li class="menuli"><a href="#header">Informations</a></li>
          <li class="menuli"><a href="#projet">Projet</a></li>
          <li class="menuli"><a href="#createurs">Créateurs</a></li>
      </ul>

  </aside>';
}
