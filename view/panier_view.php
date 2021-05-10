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
                <div class="flex-product">';
                for ($j=0; $j < sizeof($_SESSION['cart']); $j++) {
                    for ($i = 0; $i < sizeof($result); $i++){
                        if (isset($_SESSION['cart'][$j]) &&
                        $_SESSION['cart'][$j]['id'] == $result[$i]['id_item']) {
                            if ($_SESSION['cart'][$j]['amount'] > $result[$i]['amount']) {
                                $_SESSION['cart'][$j]['amount'] = $result[$i]['amount'];
                            }
                            $item = $result[$i];
                            // var_dump($item);
                            $totalPrice += $item['price']*$_SESSION['cart'][$j]['amount'];
                            echo '
                            <div class="cartElement" id="flex-content'.$item['id_item'].'">
                                <div class="flex-row">
                                    <a href="./produit.php?id='.$item['id_item'].'">
                                        <img src="'.$item['image_url'].'" alt="photo du produit" class="img2">
                                    </a>
                                    <div class="">
                                        <h4 class="albumDescription">'.$item['name'].'</h4>
                                        <h4 class="albumDescription">'.$item['artist'].'</h4>
                                        <h4 class="albumDescription">'.$item['label'].'</h4>
                                        <h1 class="albumDescription" id="stock'.$item['id_item'].'">Disponible :<div class="stock">'.$item['amount'].'</div></h1>
                                        <h1 class="albumDescription">Prix : <div class="price">'.$item['price'].'</div>$</h1>
                                    </div>
                                </div>
                                <div class="flex-col">
                                    <img src="../html/images/arrow.png" alt="photo du produit" class="addToCartButton addButton">
                                    <p style="display:none">'.$item['id_item'].'</p>
                                    <h1 id="amount'.$item['id_item'].'">
                                        <p>Quantité : </p><p class="amount">'.$_SESSION['cart'][$j]['amount'].'</p>
                                    </h1>
                                    <img src="../html/images/arrowd.png" alt="photo du produit" class="removeFromCartButton addButton">
                                </div>
                            </div>';
                        }
                    }
                }
                echo '</div><h1><p>Prix total : </p><p id="totalPrice">'.$totalPrice.'</p><p>$</p></h1>';
                $date = new DateTime();
                $date->modify("+3 day");
                echo '<h1>Date de reception estimée : '.$date->format("d/m/Y").'</h1>';
                if ($logged) {
                    echo '<a href="'.$validateCommandeController.'">';
                } else {
                    echo '<a href="'.$connexionController.'">';
                }
                echo '<button name="button" class="buybutton">Passer la commande</button>
                    </a>
                    <br/>
                    <br/>
                    <br/>
                    <a href="'.$deleteCartProcessing.'">
                        <button name="button" class="buybutton">Vider le panier</button>
                    </a>
                    <br/>
                    <br/>
                    ';
            }
            ?>

        </main>

        <?php display_menus($logged); ?>

    </div>

    <footer class="footerflex">
        <div class="copyright">Copyright : Gaël LEJEUNE & Angélique PROUX - 2021-<?php echo date("Y");?></div>
    </footer>

</body>
