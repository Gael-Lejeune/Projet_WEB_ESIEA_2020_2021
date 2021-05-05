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
            $nom_produit = $result['name'];
            $artist = $result['artist'];
            $categorie = $result['label'];
            $prix = $result['price'];
            $date = $result['release_date'];
            $image = $result['image_url'];;
            $description = $result['description'];;
            $amount = $result['amount'];;
            ?>

            <div class="HolyGrail-body">
                <main class="HolyGrail-content">
                    <h2 class="title">
                        <?php echo $nom_produit;?>
                    </h2>
                    <div class="flex-row">
                        <div class="image">
                            <?php
                            echo '<img class="image" src="'.$image.'">';
                            ?>
                        </div>
                        <h1 class="description">
                            <?php
                            echo 'Artist : '.$artist;
                            echo '<br>Categorie : '.$categorie;
                            echo '<br>Prix : '.$prix.'$';
                            echo '<br>Date de sortie : '.$date;
                            echo '<br>Restants : '.$amount;
                            ?>
                        </h1>
                    </div>
                    <h1 id="description">
                        <?php
                        echo "Description : <br />".$description;
                        ?>
                    </h1>

                    <button name="button" class="buybutton">Ajouter au panier</button>

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
