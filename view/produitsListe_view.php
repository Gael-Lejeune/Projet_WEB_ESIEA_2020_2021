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
                <?php
                for ($i = 0; $i < sizeof($result); $i++){
                    echo '
                        <a href="./produit.php?id='.$result[$i]['id'].'" class="flex-content">
                            <img src="'.$result[$i]['image_url'].'" alt="photo du produit" class="img2">
                            <h1>'.$result[$i]['name'].'<br>'.$result[$i]['artist'].'<br>'.$result[$i]['label'].'<br>'.$result[$i]['price'].'$</h1>
                        </a>';
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
