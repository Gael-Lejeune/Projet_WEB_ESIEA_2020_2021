<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
    <meta name="keywords" content="Projet Web, 2021, Paris, Gaël LEJEUNE, Angélique PROUX">
    <meta name="description" content="Ce site internet est un site de vente en ligne. En tant que client, vous pourrez y trouver des produits et les commander. En tant qu'administrateur, vous pourrez ajouter et supprimer des produits et des utilisateurs.">

    <link rel="stylesheet" type="text/css" href="./css/style1.css">
    <link rel="icon" href="https://png.pngtree.com/png-vector/20190118/ourlarge/pngtree-vector-shop-icon-png-image_327584.jpg">
    <link href="https://fonts.googleapis.com/css?family=Major+Mono+Display|Merriweather|Orbitron|Quicksand" rel="stylesheet">
</head>
<body class="HolyGrail" id="header">
    <header class="headerflex">
        <img class="headerimg" src="https://png.pngtree.com/png-vector/20190118/ourlarge/pngtree-vector-shop-icon-png-image_327584.jpg" alt="erreur d'affichage">
        <ul>
            <li class="title">Projet WEB - ESIEA 2021</li>
            <li class="subtitle">Accueil</li>
        </ul>
        <ul>
            <li >
                <button class="switch" type="button" name="button" id="theme-btn">
                    <img src="https://risibank.fr/cache/stickers/d1941/194184-full.gif" alt="erreur d'affichage" class="switchimg" >
                </button>
            </li>
        </ul>
    </header>

    <div class="HolyGrail-body">
        <main class="HolyGrail-content">
            
            <div class="flex-row">
                <h2 class="item-flex-title" style="order: 1; flex-grow: 3">Informations</h2>
            
                <h1 class="item-flex-text" style="order: 3; flex-grow: 16">
                    Ce site internet est un site de vente en ligne.<br>
                    En tant que client, vous pourrez y trouver des produits et les commander.<br>
                    En tant qu'administrateur, vous pourrez ajouter et supprimer des produits et des utilisateurs.<br>
                    Il a été créé en 2021 à l'occasion d'un projet de troisième année.<br>
                    Les langages utilisés sont : Html, CSS, JavaScript, Php, SQL.<br>
                    Le site est composé d'une dizaine de pages et de trois bases de données.
                </h1>

                <h2 class="item-flex-title" style="order: 2; flex-grow: 2">Règles de navigation</h2>

                <h1 class="item-flex-text" style="order: 4; flex-grow: 1">
                    <br>
                    * Via le menu de gauche, vous pouvez accéder aux pages globales : acceuil, catégories, produits, connexion.<br>
                    * Une fois connecté, vous trouverez dans le menu de gauche soit votre panier, soit une page pour les modifications des bases de données.<br>
                    * Via le menu de droite, vous pouvez accèder à différents endroits de la page sur laquelle vous êtes.
                </h1>

            </div>

            <p id="projet" style="margin-bottom:3cm;"></p>

            <h2>Quelques mots sur le projet</h2>
            <br>
            <h1>
                Nous souhaitons concevoir un site web dynamique de vente en ligne.
                <br><br>
                Ce site proposera aux clients différents articles répartis en plusieurs catégories.
                Chaque article devra posséder sa propre fiche descriptive.
                En naviguant sur le site, les articles seront présentés sous forme de liste, et en cliquant sur l'un des articles on pourra accéder à sa description détaillée. 
                Le client pourra alors choisir de l'ajouter à son panier. 
                Il pourra ensuite consulter son panier, éventuellement supprimer ou modifier les quantités des articles choisis, puis valider sa commande.
                Pour valider une commande, il sera proposé au client d’enregistrer une carte si aucune n'est enregistrée à son nom ou alors de la modifier.
                Une fois la carte enregistrée ou bien modifiée, le client peut valider sa commande.
                Si la carte est valide, un message de validation de commande sera affiché à l’utilisateur.
                <br><br>
                Ce site permettra également aux administrateurs d'ajouter, de modifier ou de supprimer des produits.
                Les administrateurs pourront également changer les catégories et les utilisateurs.
            </h1>

            <p id="createurs" style="margin-bottom:3cm;"></p>

            <h2 >Quelques mots sur les créateurs</h2>
            <br>
            <h1>
                Ce site a été conçu et programmé par Gaël LEJEUNE et Angélique PROUX.
                Ce sont tous deux des étudiants de troisième année à l'ESIEA, école d'ingénieurs en sciences et technologies du numérique.
            </h1>
            <br>
            <h1>
                Gaël LEJEUNE : <br>
                Bla bla bla bla bla 
            </h1>

            <div class="adresse">
                Coudoux 13111
                <br>
                <a  href="mailto:glejeune@et.esiea.fr">glejeune@et.esiea.fr</a>
            </div>

            <br>
            <h1>
                Angélique PROUX :<br>
                Bla bla bla bla bla
            </h1>
            
            <div class="adresse">
                Carrières-sous-Poissy 78955
                <br>
                <a href="mailto:aproux@et.esiea.fr">aproux@et.esiea.fr</a>
            </div>

            <p style="margin-bottom:3cm;"></p>

        </main>

        <nav class="HolyGrail-nav">
            <ul class="menu">
                <li class="menuli"><div class="pos">Accueil</div></li>
                <li class="menuli"><a href="./php/produitsListe.php">Produits</a></li>
                <li class="menuli"><a href="./php/categories.php">Catégories</a></li>
                <li class="menuli"><a href="./php/connexion.php">Connexion</a></li>
                <li class="menuli"><a href="./php/inscription.php">Inscription</a></li>
            </ul>
        </nav>

        <aside class="HolyGrail-ads">
            <ul class="menu">
                <li class="menuli"><a href="#header">Informations</a></li>
                <li class="menuli"><a href="#projet">Projet</a></li>
                <li class="menuli"><a href="#createurs">Créateurs</a></li>
            </ul>

        </aside>
    </div>
    <a href="#header" id="button" class="button">
        <img src="./Images/arrow.png" alt="erreur d'affichage" class="buttonimg" >
    </a>
    <footer class="footerflex">
        <div class="copyright">Copyright : Gaël LEJEUNE & Angélique PROUX</div>
    </footer>
    <script src="./js/button-appear.js"></script>
</body>
</html>
