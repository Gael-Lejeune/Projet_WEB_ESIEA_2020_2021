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
            <?php
        #Récupération des données à utiliser dans la page
        $nom_produit = $_GET['nom'];
        $categorie = $_GET['categorie'];
        $prix = $_GET['prix'];
        $vendeur = $_GET['vendeur'];
        $date = $_GET['date'];
        $image1 = 'https://th.bing.com/th/id/Rd3a557d6509d6e04e8dfdc17ebe87726?rik=E%2f2VoewbIA%2frcQ&pid=ImgRaw';
        $image2 = 'https://stylecaster.com/wp-content/uploads/2020/11/BTS-BE-Deluxe-Album.jpg?w=670';
        $image3 = 'https://consequenceofsound.net/wp-content/uploads/2020/11/bts-be-album-TRACKLIST.jpg?quality=80';

    ?>

    <div class="HolyGrail-body">
        <main class="HolyGrail-content">
            <h2 style="text-align: center" id="fiche">
                <?php
                    echo $GLOBALS['nom_produit'];
                ?>
            </h2>
            <br><br><br>
             <h4>
                Fiche produit
            </h4>
            <h1 id="images">
                <?php
                    echo 'Categorie : '.$GLOBALS['categorie'];
                    echo '<br>Prix : '.$GLOBALS['prix'];
                    echo '<br>Nom du vendeur/fabricant : '.$GLOBALS['vendeur'];
                    echo '<br>Date de fabrication/sortie : '.$GLOBALS['date'];
                ?>
            </h1>
            <h4>
                Images
            </h4>
                <?php
                    echo '<img class="img" src="'.$GLOBALS['image1'].'">';
                    echo '<img class="img" src="'.$GLOBALS['image2'].'">';
                    echo '<img class="img" src="'.$GLOBALS['image3'].'">';
                ?>
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
        </div>
        </main>

        <?php display_menus(); ?>

    </div>

    <a href="#header" id="button" class="button">
        <img src="./Images/arrow.png" alt="erreur d'affichage" class="buttonimg" >
    </a>

    <footer class="footerflex">
        <div class="copyright">Copyright : Gaël LEJEUNE & Angélique PROUX</div>
    </footer>

</body>
