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
                            $item = $result[$i];
                            // var_dump($item);
                            $totalPrice += $item['price']*$_SESSION['cart'][$j]['amount'];
                            echo '
                            <div class="cartElement" id="flex-content'.$item['id_item'].'">
                                <div class="flex-row">
                                    <a href="./produit.php?id='.$item['id_item'].'">
                                        <img src="'.$item['image_url'].'" alt="photo du produit" class="img2">
                                    </a>
                                    <div class="flex-col">
                                        <h4>'.$item['name'].'<br/>
                                        '.$item['artist'].'<br/>
                                        '.$item['label'].'<br/>
                                        <div class="price">'.$item['price'].'</div>$</h4>
                                    </div>
                                </div>
                                <div class="flex-col">
                                    <img src="../html/images/arrow.png" alt="photo du produit" class="addToCartButton addButton">
                                    <p style="display:none">'.$item['id_item'].'</p>
                                    <h1 id="amount'.$item['id_item'].'">
                                        <p>Amount : </p><p class="amount">'.$_SESSION['cart'][$j]['amount'].'</p>
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
                echo '<a href="<?php echo $validateCommandeController; ?>">
                        <button name="button" class="buybutton">Passer la commande</button>
                    </a>
                    <br/>
                    <br/>
                    <br/>
                    <a href="<?php echo $deleteCartProcessing; ?>">
                        <button name="button" class="buybutton">Vider le panier</button>
                    </a>';
            }
            ?>

        </main>

        <?php display_menus($logged); ?>

    </div>

    <footer class="footerflex">
        <div class="copyright">Copyright : Gaël LEJEUNE & Angélique PROUX - 2021-<?php echo date("Y");?></div>
    </footer>

</body>
