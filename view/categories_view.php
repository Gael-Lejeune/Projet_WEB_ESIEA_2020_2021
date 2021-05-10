<body class="HolyGrail" id="header">
    <header class="headerflex">
        <img class="headerimg" src="../html/images/logo.png" alt="erreur d'affichage" >
        <ul>
            <li class="title">Spautifaï</li>
            <li class="subtitle">Catégories Disponibles</li>
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
            <div class="flex-product">
                <?php
                for ($i = 0; $i < sizeof($result); $i++){
                    // var_dump($result[$i]);
                    echo '
                            <a href="./produitsListe.php?category='.$result[$i]['label'].'"  class="flex-content">
                                <img src="'.$result[$i]['category_image_url'].'" class="img">
                                <h1 class="description">'.$result[$i]['label'].'</h1>
                            </a>';
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
