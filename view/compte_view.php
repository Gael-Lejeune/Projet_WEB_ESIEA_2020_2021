<body class="HolyGrail" id="header">
    <header class="headerflex">
        <img class="headerimg" src="./Images/profil2.jpg" alt="erreur d'affichage" >
        <ul>
            <li class="title">Projet WEB</li>
            <li class="subtitle">Compte</li>
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

    <script src="../js/user_function.js"> </script>

    <div class="HolyGrail-body">
        <main class="HolyGrail-content">
            <?php
            #Récupération des données à utiliser dans la page
            $nom_client = $result['user_name'];
            $prenom = $result['first_name'];
            $nom = $result['last_name'];
            $mail = $result['mail'];
            $address = $result['address'];
            $carte = $result['credit_card'];
            ?>

            <h2 id="ajoutP">
                <?php  echo 'Bienvenue <span id="nomTitre">'.$nom_client.'</span><br>';  ?>
            </h2>

            <p style="margin-bottom:1.2cm;"></p>

            <h4 id="infos">
                Informations client
            </h4>
            <h1>
                <?php  echo 'Nom : '.$nom.'<br>';  ?>
                <?php  echo 'Prénom : '.$prenom.'<br>';  ?>
                <?php  echo 'Mail : '.$mail.'<br>';  ?>
            </h1>
            <h4 id="commandes">
                Historique des commandes
            </h4>
            <h1>
                Commande 1 : date -- prix
                <br>
                Commande 2 : date -- prix
            </h1>
            <h4 id="modifications">
                Modifier les informations du compte
            </h4>
            <h1>
              <?php  echo "Adresse postale actuelle : ".'<span id="address">'.$address.'</span><br>';  ?>
              <form id="form-address" name="changeAddressForm" action="<?php echo $changeaddressProcessing; ?>" method="post">
                &emsp;&emsp;Nouvelle addresse postale : <input type="text" name="newAddress"/>
                <input type="submit" value="changer"/>
              </form>

              <?php  echo "<br>Carte de crédit actuelle : ".'<span id="carte">'.$carte.'</span><br>';  ?>
              <form id="form-card" name="changeCardForm" action="<?php echo $changecardProcessing; ?>" method="post">
                &emsp;&emsp;Nouvelle carte : <input type="text" name="newCard"/>
                <input type="submit" value="changer"/>
              </form>

              <?php  echo "<br>Nom d'utilisateur actuel : ".'<span id="nomChangement">'.$nom_client.'</span><br>';  ?>

              <form id="form-name" name="changeNameForm" action="<?php echo $changenameProcessing; ?>" method="post">
                &emsp;&emsp;Nouveau nom d'utilisateur : <input type="text" name="newName"/>
                <input type="submit" value="changer"/>
              </form>

            </h1>

            <h4 id="support">
                Contacter le support
            </h4>
            <h1>
                <a  href="mailto:support@exemple.fr">support@nomDuSite.fr</a>
            </h1>
            <h4 id="suppression">
                Supprimer le compte
            </h4>
            <h1>
              <form id="form-delete" name="deleteForm" action="<?php echo $deleteaccountProcessing; ?>" method="post">
                <input type="submit" value="supprimer le compte"/>
              </form>
            </h1>
            <h4 id="déconnexion">
                Se déconnecter
            </h4>
            <h1>
              <form id="form-logout" name="logoutForm" action="<?php echo $deleteaccountProcessing; ?>" method="post">
                <input type="submit" value="déconnexion"/>
              </form>
            </h1>
        </main>

        <?php display_menus(); ?>

    </div>

    <footer class="footerflex">
        <div class="copyright">Copyright : Gaël LEJEUNE & Angélique PROUX</div>
    </footer>

</body>
