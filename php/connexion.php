<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
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
            <li class="subtitle">Fiche connexion</li>
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

            <form name="ForInscrip" action="../acceuil.php">
            <fieldset>
                <legend>Connexion client :</legend>
                <br><div class="flex-row" style="justify-content: space-around">
                <div class="gauche">
                    <label for="nomU">Nom d'utilisateur :</label><br>
                    <label for="mdpU">Mot de passe :</label><br>
                </div>
                <div class="droite">
                    <input type="text" id="nomU" name="nomU"><br>
                    <input type="password" id="mdpU" name="mdpU">
                </div>
                
                <div class="aligné">
                <br>
                    <input type="submit" value="Confirmer">
                </div>
                </div>
            </fieldset>
        </form>

        <p style="margin-bottom:10cm;"></p>

        <form id="admin" name="ForInscrip" action="../acceuil.php">
            <fieldset>
                <legend>Connexion administrateur :</legend>
                <br><div class="flex-row" style="justify-content: space-around">
                <div class="gauche">
                    <label for="nomA">Nom d'administrateur :</label><br>
                    <label for="mdpA">Mot de passe :</label><br>
                </div>
                <div class="droite">
                    <input type="text" id="nomA" name="nomA"><br>
                    <input type="password" id="mdpA" name="mdpA">
                </div>
                
                <div class="aligné">
                <br>
                    <input type="submit" value="Confirmer">
                </div>
                </div>
            </fieldset>
        </form>

        <p style="margin-bottom:10cm;"></p>

        </main>

        <nav class="HolyGrail-nav">
            <ul class="menu">
                <li class="menuli"><a href="../acceuil.php">Accueil</a></li>
                <li class="menuli"><a href="./produitsListe.php">Produits</a></li>
                <li class="menuli"><a href="./categories.php">Catégories</a></li>
                <li class="menuli"><div class="pos">Connexion</div></li>
                <li class="menuli"><a href="./inscription.php">Inscription</a></li>
            </ul>
        </nav>

        <aside class="HolyGrail-ads">
            <ul class="menu">
                <li class="menuli"><a href="#header">Client</a></li>
                <li class="menuli"><a href="#admin">Administrateur</a></li>
            </ul>
        </aside>
    </div>

    <a href="#header" id="button" class="button">
        <img src="./Images/arrow.png" alt="erreur d'affichage" class="buttonimg" >
    </a>

    <footer class="footerflex">
        <div class="copyright">Copyright : Gaël LEJEUNE</div>
    </footer>
    <script src="button-appear.js"></script>
</body>
</html>
