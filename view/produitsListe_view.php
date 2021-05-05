<body class="HolyGrail" id="header">
    <header class="headerflex">
        <img class="headerimg" src="./Images/profil2.jpg" alt="erreur d'affichage" >
        <ul>
            <li class="title">Projet WEB</li>
            <li class="subtitle">Produits Disponibles</li>
        </ul>
        <ul>
            <li>
                <a href="<?php echo $panierController; ?>">
                    <button class="switch" type="button" name="button" id="theme-btn">
                        <img src="https://image.flaticon.com/icons/png/512/102/102661.png" alt="erreur d'affichage" class="switchimg" >
                    </button>
                </a>
            </li>
        </ul>
    </header>

    <div class="HolyGrail-body">
        <main class="HolyGrail-content">
            <?php
            if (isset($_GET['category'])) {
                echo '<h2>'.$_GET['category'].'</h2>';
            }
            ?>
            <div class="flex-product">
                <?php
                if (sizeof($result)==0) {
                    echo '<h2>Cette catégorie est vide pour le moment. :(</h2>';
                } else {
                    for ($i = 0; $i < sizeof($result); $i++){
                        // var_dump($result[$i]);
                        echo '
                        <a href="./produit.php?id='.$result[$i]['id_item'].'" class="flex-content">
                        <img src="'.$result[$i]['image_url'].'" alt="photo du produit" class="img2">
                        <h1>'.$result[$i]['name'].
                        '<br>'
                        .$result[$i]['artist'].
                        '<br>'
                        .$result[$i]['label'].
                        '<br>'
                        .$result[$i]['price'].
                        '$</h1>
                        </a>';
                    }
                }
                ?>
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
