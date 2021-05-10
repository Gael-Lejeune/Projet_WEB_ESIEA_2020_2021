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
                            <div id="flex-content'.$item['id_item'].'" class="cartElement">
                            <div class="flex-row">
                            <a href="./produit.php?id='.$item['id_item'].'" class="flex-row">
                            <img src="'.$item['image_url'].'" alt="photo du produit" class="img2">
                            </a>
                            <div class="flex-col">
                            <h4>'.$item['name'].'<br/>
                            '.$item['artist'].'<br/>
                            '.$item['label'].'<br/>
                            <div class="price">'.$item['price'].'</div>$</h4>
                            </div>
                            </div>
                            <h4>Quantité : '.$_SESSION['cart'][$j]['amount'].'</h4>
                            </div>';
                        }
                    }
                }
                echo '</div><h1><p>Prix total : </p><p id="totalPrice">'.$totalPrice.'</p><p>$</p></h1>';
                $date = new DateTime();
                $date->modify("+3 day");
                echo '<h1>Date de reception estimée : '.$date->format("d/m/Y").' (3 jours)</h1>';

                echo '
                <div class="baseflex">
                <fieldset>
                    <legend>Informations de commande</legend>
                    <form id="form-address" name="changeAddressForm" action="'.$changeaddressProcessing.'" method="post">
                        <ul>
                            <li>
                                <h1>Adresse actuelle :
                                    <div id="address">'.$user['address'].'</div>
                                </h1>
                            </li>
                            <li class="formli">
                                &emsp;&emsp;Nouvelle addresse postale :
                                <input type="text" name="newAddress"/>
                            </li>
                            <input type="submit" value="changer"/>
                        </ul>
                    </form>
                    <form id="form-card" name="changeCardForm" action="'.$changecardProcessing.'" method="post">
                        <ul>
                        <li>
                            <h1>Carte de crédit actuelle :
                                <div id="carte">'.$user['credit_card'].'</div>
                            </h1>
                        </li>
                        <li class="formli">
                            &emsp;&emsp;Nouvelle carte :
                            <input type="text" name="newCard"/>
                        </li>
                        <input type="submit" value="changer"/>
                        </ul>
                    </form>
                    <div style="display:none" id="userId">'.$user['id_user'].'</div>
                </fieldset>
                </div>

                ';
            }

            ?>
            <h1 style="display:none" id="error">Veuillez remplir toutes les informations nécessaires</h1>
            <button name="button" class="buybutton" id="validateButton">Valider la commande</button>
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
