<body class="HolyGrail" id="header">
    <header class="headerflex">
        <img class="headerimg" src="./Images/profil2.jpg" alt="erreur d'affichage" >
        <ul>
            <li class="title">Projet WEB</li>
            <li class="subtitle">Catégories Disponibles</li>
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
            <div class="flex-product">
                <?php
                for ($i = 0; $i < sizeof($result); $i++){
                    // var_dump($result[$i]);
                    echo '
                            <a href="./produitsListe.php?category='.$result[$i]['label'].'"  class="flex-content">
                                <img src="https://cdn0.iconfinder.com/data/icons/media-various/100/media-square-music-512.png" class="img2">
                                <h1>'.$result[$i]['label'].'</h1>
                            </a>';
                }

                ?>
            </div>
        </main>

        <?php display_menus(); ?>

    </div>

    <footer class="footerflex">
        <div class="copyright">Copyright : Gaël LEJEUNE & Angélique PROUX</div>
    </footer>

</body>
