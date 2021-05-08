<body class="HolyGrail" id="header">
    <header class="headerflex">
        <img class="headerimg" src="../html/images/logo.png" alt="erreur d'affichage" >
        <ul>
            <li class="title">Projet WEB</li>
            <li class="subtitle">Panier</li>
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
            if (!isset($_SESSION['cart']) || sizeof($_SESSION['cart'])==0) {
                echo '<h2>Votre panier est vide.</h2>
                <img src="../html/images/cart.png" alt="photo du produit" class="img2">';
            } else {
                echo '<h4>Produits dans le panier</h4>
                        <div class="flex-col">';
                    for ($j=0; $j < sizeof($_SESSION['cart']); $j++) {
                        for ($i = 0; $i < sizeof($items); $i++){
                        if (isset($_SESSION['cart'][$j]) &&
                        $_SESSION['cart'][$j]['id'] == $items[$i]['id_item']) {
                            $item = $items[$i];
                            // var_dump($item);
                            $totalPrice += $item['price']*$_SESSION['cart'][$j]['amount'];
                            echo '
                            <div id="flex-content'.$item['id_item'].'" class="flex-content">
                                <a href="./produit.php?id='.$item['id_item'].'" class="flex-row">
                                    <img src="'.$item['image_url'].'" alt="photo du produit" class="img2">
                                    <div class="flex-col">
                                        <h1 class="albumInfo">'.$item['name'].'</h1>
                                        <!-- <h1 class="albumInfo">'.$item['artist'].'</h1> -->
                                        <!-- <h1 class="albumInfo">'.$item['label'].'</h1> -->
                                        <h1 class="albumInfo">Quantité : '.$_SESSION['cart'][$j]['amount'].'</h1>
                                        <h1 class="albumInfo"><div class="price">'.$item['price'].'</div>$</h1>
                                        </div>
                                </a>
                            </div>';
                        }
                    }
                }
                echo '</div><h1><p>Prix total : </p><p id="totalPrice">'.$totalPrice.'</p><p>$</p></h1>';
                $date = new DateTime();
                $date->modify("+3 day");
                echo '<h1>Date de reception estimée : '.$date->format("d/m/Y").' (3 jours)</h1>';
            }
            ?>
            <?php
            if (!isset($user['address'])){
                echo 'Vous n\'avez pas encore enregistré d\'adresse de reception. Quelle addresse voulez vous utiliser ?<br/>';
                echo '<img src="https://i.pinimg.com/564x/4e/dc/b4/4edcb460a940ff726549077935f57168.jpg" alt="erreur d\'affichage" class="img2" >
                <form id="form-address" name="changeAddressForm" action="'.$changeaddressProcessing.'" method="post">
                  &emsp;&emsp;Nouvelle addresse postale : <input type="text" name="newAddress"/>
                  <input type="submit" value="changer"/>
                </form>';
            } else {
                echo "Adresse postale actuelle : ".'<span id="address">'.$user['address'].'</span><br>';
                echo '<img src="https://i.pinimg.com/564x/4e/dc/b4/4edcb460a940ff726549077935f57168.jpg" alt="erreur d\'affichage" class="img2" >
                <form id="form-address" name="changeAddressForm" action="'.$changeaddressProcessing.'" method="post">
                  &emsp;&emsp;Nouvelle addresse postale : <input type="text" name="newAddress"/>
                  <input type="submit" value="changer"/>
                  </form>';
            }
            echo '<br />';
            if (!isset($user['credit_card'])){
                echo 'Vous n\'avez pas encore enregistré de carte de paiement. Merci de rentrer votre carte :<br/>';
                echo '<img src="https://previews.123rf.com/images/ascom73/ascom731902/ascom73190200028/119725676-credit-card-vector-icon-payment-concept-for-graphic-design-logo-web-site-social-media-mobile-app-ui-.jpg" alt="erreur d\'affichage" class="img2" >
                <form id="form-card" name="changeCardForm" action="'.$changecardProcessing.'" method="post">
                  &emsp;&emsp;Nouvelle carte : <input type="text" name="newCard"/>
                  <input type="submit" value="changer"/>
                </form>';
            } else {
                echo "<br>Carte de crédit actuelle : ".'<span id="carte">'.$carte.'</span><br>';
                echo '<img src="https://previews.123rf.com/images/ascom73/ascom731902/ascom73190200028/119725676-credit-card-vector-icon-payment-concept-for-graphic-design-logo-web-site-social-media-mobile-app-ui-.jpg" alt="erreur d\'affichage" class="img2" >
                <form id="form-card" name="changeCardForm" action="'.$changecardProcessing.'" method="post">
                  &emsp;&emsp;Nouvelle carte : <input type="text" name="newCard"/>
                  <input type="submit" value="changer"/>
                </form>';
            }
            ?>

            <a href="<?php echo $deleteCartProcessing; ?>">
                <button name="button" class="buybutton">Valider la commande</button>
            </a>
            <br />
            <br />
            <br />
            <br />


        </main>

        <?php display_menus($logged); ?>

    </div>

    <footer class="footerflex">
        <div class="copyright">Copyright : Gaël LEJEUNE & Angélique PROUX - 2021-<?php echo date("Y");?></div>
    </footer>

</body>
