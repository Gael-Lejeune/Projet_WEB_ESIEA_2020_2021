<body class="HolyGrail" id="header">
    <header class="headerflex">
        <img class="headerimg" src="../html/images/logo.png" alt="erreur d'affichage" >
        <ul>
            <li class="title">Projet WEB</li>
            <li class="subtitle">Fiche Produit</li>
        </ul>
        <ul>
            <li>
                <a href="<?php echo $panierController; ?>">
                    <button class="switch" type="button" name="button" id="theme-btn">
                        <img src="../html/images/cart.png" alt="erreur d'affichage" class="switchimg" >
                    </button>
                </a>
            </a>
        </li>
    </ul>
</header>

<div class="HolyGrail-body">
    <main class="HolyGrail-content">
        <?php
        #Récupération des données à utiliser dans la page
        $id = $result['id_item'];
        $product_name = $result['name'];
        $artist = $result['artist'];
        $category = $result['label'];
        $price = $result['price'];
        $date = new DateTime($result['release_date']);
        $date = $date->format("d/m/Y");
        $image = $result['image_url'];;
        $description = $result['description'];;
        $amount = $result['amount'];;
        ?>

        <div class="HolyGrail-body">
            <main class="HolyGrail-content">
                <h2 class="title">
                    <?php echo $product_name;?>
                </h2>
                <div class="flex-row">
                    <div class="image">
                        <?php
                        echo '<img class="itemImage" src="'.$image.'">';
                        ?>
                    </div>
                    <div>
                        <?php echo '
                        <h4>
                            Artist : '.$artist.'
                        </h4>
                        <h4>
                            Categorie : '.$category.'
                        </h4>
                        <h4>
                            Prix : '.$price.'$
                        </h4>
                        <h4>
                            Date de sortie : '.$date.'
                        </h4>
                        <h4>
                            Restants : '.$amount.'
                        </h4>
                        '; ?>
                    </div>
                    <p id="itemId" style="display:none"><?php echo $id; ?></p>
                </div>
                <h4>
                    Description : <br/><?php echo $description; ?>
                </h4>
                <p id="amount">Exemplaires dans le panier :
                    <?php
                    if (isset($_SESSION['cart'])) {
                        for ($i=0; $i < sizeof($_SESSION['cart']); $i++) {
                            if (isset($_SESSION['cart'][$i]) && $_SESSION['cart'][$i]['id'] == $_GET['id']) {
                                $found = true;
                                $foundIndex = $i;
                            }
                        }
                    }
                    if (isset($found)) {
                        echo $_SESSION['cart'][$foundIndex]['amount'];
                    } else {
                        echo "0";
                    }
                    ?>
                </p>
                <button  id="addToCartButton" class="buybutton">Ajouter au panier</button>

            </div>
        </main>

        <?php display_menus($logged); ?>

    </div>

    <footer class="footerflex">
        <div class="copyright">Copyright : Gaël LEJEUNE & Angélique PROUX - 2021-<?php echo date("Y");?></div>
    </footer>

</body>
