<body class="HolyGrail" id="header">
    <header class="headerflex">
        <img class="headerimg" src="./Images/profil2.jpg" alt="erreur d'affichage" >
        <ul>
            <li class="title">Projet WEB</li>
            <li class="subtitle">Panier</li>
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
            if (!isset($_SESSION['cart']) || sizeof($_SESSION['cart'])==0) {
                echo '<h2>Votre panier est vide.</h2>
                <img src="https://image.flaticon.com/icons/png/512/102/102661.png" alt="photo du produit" class="img2">';
            } else {
                echo '<h4>Produits dans le panier</h4>';
                for ($i = 0; $i < sizeof($_SESSION['cart']); $i++){
                    $item = $_SESSION['cart'][$i];
                    $totalPrice += $item['price']*$item['amount'];
                    echo '
                    <a href="./produit.php?id='.$item['id'].'" class="flex-content">
                    <img src="'.$item['image'].'" alt="photo du produit" class="img2">
                    <h1>'.$item['name'].
                    '<br>'
                    .$item['artist'].
                    '<br>'
                    .$item['category'].
                    '<br>Amount : '
                    .$item['amount'].
                    '<br>'
                    .$item['price']*$item['amount'].'$
                    </h1>
                    </a>';
                }
                echo '<h1>Prix total : '.$totalPrice.'</h1>';
            }
            ?>
            <a href="<?php echo $deleteCartProcessing; ?>">
                <button name="button" class="buybutton">Vider le panier</button>
            </a>
        </main>

        <?php display_menus(); ?>

    </div>

    <footer class="footerflex">
        <div class="copyright">Copyright : Gaël LEJEUNE & Angélique PROUX</div>
    </footer>

</body>
