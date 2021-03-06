<body class="HolyGrail" id="header">
    <header class="headerflex">
        <img class="headerimg" src="../html/images/logo.png" alt="erreur d'affichage" >
        <ul>
            <li class="title">Spautifaï</li>
            <li class="subtitle">Produits Disponibles</li>
        </ul>
        <ul>
            <li>
                <a href="<?php echo $panierController; ?>">
                    <button class="switch" type="button" name="button" id="theme-btn">
                        <img src="../html/images/cart.png" alt="erreur d'affichage" class="switchimg" >
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
                        if ($result[$i]['amount'] == 0) {
                            echo '<a href="./produit.php?id='.$result[$i]['id_item'].'" class="flex-content outOfStock">';
                            echo '<img src="'.$result[$i]['image_url'].'" alt="photo du produit" class="img">
                            <h4 class="description">'.$result[$i]['name'].
                            '<br/>'
                            .$result[$i]['artist'].
                            '<br/>'
                            .$result[$i]['label'].
                            '<br/>Rupture de stock</h4>
                            </a>';
                        } else {
                            echo '<a href="./produit.php?id='.$result[$i]['id_item'].'" class="flex-content">';
                            echo '<img src="'.$result[$i]['image_url'].'" alt="photo du produit" class="img">
                            <h4 class="description">'.$result[$i]['name'].
                            '<br/>'
                            .$result[$i]['artist'].
                            '<br/>'
                            .$result[$i]['label'].
                            '<br/>'
                            .$result[$i]['price'].
                            '$</h4>
                            </a>';
                        }

                    }
                }
                ?>
            </div>
        </main>

        <?php display_menus($logged); ?>

    </div>

    <footer class="footerflex">
        <div class="copyright">Copyright : Gaël LEJEUNE & Angélique PROUX - 2021-<?php echo date("Y");?></div>
    </footer>

</body>
