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
                    for ($j=0; $j < sizeof($_SESSION['cart']); $j++) {
                        for ($i = 0; $i < sizeof($result); $i++){
                        if (isset($_SESSION['cart'][$j]) &&
                        $_SESSION['cart'][$j]['id'] == $result[$i]['id_item']) {
                            $item = $result[$i];
                            // var_dump($item);
                            $totalPrice += $item['price']*$_SESSION['cart'][$j]['amount'];
                            echo '
                            <div id="flex-content'.$item['id_item'].'" class="flex-content">
                                <a href="./produit.php?id='.$item['id_item'].'" class="flex-content">
                                    <img src="'.$item['image_url'].'" alt="photo du produit" class="img2">
                                    <h1>'.$item['name'].
                                        '<br>'
                                        .$item['artist'].
                                        '<br>'
                                        .$item['label'].
                                        '<br>'
                                        .$item['price']*$_SESSION['cart'][$j]['amount'].'$
                                    </h1>
                                </a>
                                <div>
                                    <button class="addToCartButton">Ajouter un exemplaire</button>
                                    <p style="display:none">'.$item['id_item'].'</p>
                                        <p id="amount'.$item['id_item'].'">
                                            Amount : '.$_SESSION['cart'][$j]['amount'].
                                        '</p>
                                    <button class="removeFromCartButton">Retirer un exemplaire</button>
                                </div>
                            </div>';
                        }
                    }
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
