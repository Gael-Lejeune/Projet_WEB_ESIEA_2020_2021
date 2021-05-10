<body class="HolyGrail" id="header">
    <header class="headerflex">
        <img class="headerimg" src="../html/images/logo.png" alt="erreur d'affichage" >
        <ul>
            <li class="title">Projet WEB</li>
            <li class="subtitle">Commandes</li>
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
            <h2>
                Commandes
            </h2>
            <?php
            if (isset($shipmentArray)) {
                for ($i=0; $i < sizeof($shipmentArray); $i++) {
                    echo '<h1>Commande du : '.$shipmentArray[$i]['order_date'].'<br/>
                    Arrivée prévue le : '.$shipmentArray[$i]['estimated_date'].'<br/>
                    Adresse de livraison : '.$shipmentArray[$i]['address'].'</h1>
                    <h1>Récapitulatif de la commande : </h1>';
                    $totalPrice = 0;
                    for ($j=0; $j < sizeof($shipmentArray[$i]['item_list']); $j++) {
                        echo '
                        <a href="./produit.php?id='.$shipmentArray[$i]['item_list'][$j]['image_url'].'">
                        <div class="flex-content">
                        <img src="'.$shipmentArray[$i]['item_list'][$j]['image_url'].'" alt="photo du produit" class="smallImage">
                        </a>
                        <h4>
                        '.$shipmentArray[$i]['item_list'][$j]['name'].' by '.$shipmentArray[$i]['item_list'][$j]['artist'].'
                        </h4>
                        <h4>Quantité : '.$shipmentArray[$i]['item_list'][$j]['amount'].'</h4>
                        </div>
                        ';
                        $totalPrice += $shipmentArray[$i]['item_list'][$j]['amount']*$shipmentArray[$i]['item_list'][$j]['price'];
                    }
                    echo '<h1>Prix de la commande : '.$totalPrice.'$</h1>';

                    echo '<br/>';
                    echo '<hr/>';
                    echo '<br/>';

                }
            } else {
                echo '<h2>Vous n\'avez encore effectué aucune commande.</h2>
                <img src="../html/images/cart.png" alt="photo du produit" class="img2">';
            }
            ?>

        </main>

        <?php display_menus($logged); ?>

    </div>

    <footer class="footerflex">
        <div class="copyright">Copyright : Gaël LEJEUNE & Angélique PROUX - 2021-<?php echo date("Y");?></div>
    </footer>

</body>
