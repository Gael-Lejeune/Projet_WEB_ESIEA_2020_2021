<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produits</title>
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
            <li class="subtitle">Produits Disponibles</li>
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
            <div class="flex-product">

            <div class="flex-content">
                <a href="./produit.php"  class="flex-content">
                    <img src="https://k7.pngheat.com/preview/778/160/982/musical-note-clip-art-notes-thumbnail.jpg" alt="photo du produit" class="img2">
                    <p>Nom du produit<br>Catégorie du produit<br>Prix du produit</p>
                </a>
            </div>
            <div class="flex-content">
                <a href="./produit.php?nom=Rare&amp;categorie=Pop&amp;prix=40$&amp;vendeur=Amazon&amp;date=2010"  class="flex-content">
                    <img src="https://k7.pngheat.com/preview/778/160/982/musical-note-clip-art-notes-thumbnail.jpg" alt="photo du produit" class="img2">
                    <p>Rare<br>Pop<br>40$</p>
                </a>
            </div>

            <div class="flex-content">
                <a href="./produit.php?nom=BE&amp;categorie=K-pop&amp;prix=30$&amp;vendeur=BigHit&amp;date=2020"  class="flex-content">
                    <img src="https://k7.pngheat.com/preview/778/160/982/musical-note-clip-art-notes-thumbnail.jpg" alt="photo du produit" class="img2">
                    <p>BE<br>K-pop<br>30$</p>
                </a>
            </div>
            <div class="flex-content">
                <a href="./produit.php"  class="flex-content">
                    <img src="https://k7.pngheat.com/preview/778/160/982/musical-note-clip-art-notes-thumbnail.jpg" alt="photo du produit" class="img2">
                    <p>Nom du produit<br>Catégorie du produit<br>Prix du produit</p>
                </a>
            </div>


            </div>
        </main>

        <nav class="HolyGrail-nav">
            <ul class="menu">
                <li class="menuli"><a href="../acceuil.php">Accueil</a></li>
                <li class="menuli"><div class="pos">Produits</div></li>
                <li class="menuli"><a href="./categories.php">Catégories</a></li>
                <li class="menuli"><a href="./connexion.php">Connexion</a></li>
                <li class="menuli"><a href="./inscription.php">Inscription</a></li>
            </ul>
        </nav>

        <aside class="HolyGrail-ads">
            <ul class="menu">
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
