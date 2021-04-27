<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche produit</title>
    <meta name="keywords" content="Projet Web, 2021, Paris, Gaël LEJEUNE, Angélique PROUX">
    <meta name="description" content="Ce site internet est un site de vente en ligne. En tant que client, vous pourrez y trouver des produits et les commander. En tant qu'administrateur, vous pourrez ajouter et supprimer des produits et des utilisateurs.">

    <link rel="stylesheet" type="text/css" href="../css/style1.css">
    <link rel="icon" href="https://png.pngtree.com/png-vector/20190118/ourlarge/pngtree-vector-shop-icon-png-image_327584.jpg">
    <link href="https://fonts.googleapis.com/css?family=Major+Mono+Display|Merriweather|Orbitron|Quicksand" rel="stylesheet">
</head>

<body class="HolyGrail" id="header">
    <header class="headerflex">
        <img class="headerimg" src="./Images/profil2.jpg" alt="erreur d'affichage" >
        <ul>
            <li class="title">Projet WEB</li>
            <li class="subtitle">Fiche Produit</li>
        </ul>
        <ul>
            <li>
                <button class="switch" type="button" name="button" id="theme-btn">
                    <img src="./Images/daynight.jpeg" alt="erreur d'affichage" class="switchimg" >
                </button>
            </li>
        </ul>
    </header>

    <div class="HolyGrail-body">
        <main class="HolyGrail-content">
            <h2 style="text-align: center" id="fiche">
                <?php
                    echo $_GET['nom'];
                ?>
            </h2>
            <br><br><br>
             <h4>
                Fiche produit
            </h4>
            <h1 id="images">
                <?php
                    echo $_GET['categorie'];
                    echo "<br>Prix<br>";
                    echo "Nom du vendeur/fabricant<br>";
                    echo "Date de fabrication/sortie<br>";
                ?>
            </h1>
            <h4>
                Images
            </h4>
                <img class="img" src="https://th.bing.com/th/id/Rd3a557d6509d6e04e8dfdc17ebe87726?rik=E%2f2VoewbIA%2frcQ&pid=ImgRaw">
                <img class="img" src="https://stylecaster.com/wp-content/uploads/2020/11/BTS-BE-Deluxe-Album.jpg?w=670">
                <img class="img" src="https://consequenceofsound.net/wp-content/uploads/2020/11/bts-be-album-TRACKLIST.jpg?quality=80">
            <p  id="caractéristiques"></p>
            <h4>
                Caractéristiques
            </h4>
            <h1 id="commentaires">
                <?php
                    echo "Dimensions : 20x30<br>";
                    echo "Couleurs : Multicolore<br>";
                    echo "Autres : Edition spéciale hiver<br>";
                ?>
            </h1>
            <h4>
                Commentaires
            </h4>
            <h1>
                Commentaire 1 bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla
                <br>
                bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla
            </h1>
            <h1>
                Commentaire 2 bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla
                <br>
                bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla
            </h1>
        </main>

        <nav class="HolyGrail-nav">
            <ul class="menu">
                <li class="menuli"><a href="../acceuil.php">Accueil</a></li>
                <li class="menuli"><a href="./produitsListe.php">Produits</a></li>
                <li class="menuli"><a href="./categories.php">Catégories</a></li>
                <li class="menuli"><a href="./connexion.php">Connexion</a></li>
                <li class="menuli"><a href="./inscription.php">Inscription</a></li>
                <li class="menuli"><div class="pos">Produit</div></li>
            </ul>
        </nav>

        <aside class="HolyGrail-ads">
            <ul class="menu">
                <li class="menuli"><a href="#fiche">Fiche produit</a></li>
                <li class="menuli"><a href="#images">Images</a></li>
                <li class="menuli"><a href="#caractéristiques">Caractéristiques</a></li>
                <li class="menuli"><a href="#commentaires">Commentaires</a></li>
            </ul>
        </aside>
    </div>

    <a href="#header" id="button" class="button">
        <img src="./Images/arrow.png" alt="erreur d'affichage" class="buttonimg" >
    </a>

    <footer class="footerflex">
        <div class="copyright">Copyright : Gaël LEJEUNE</div>
    </footer>
    <script src="../js/button-appear.js"></script>
</body>
</html>
