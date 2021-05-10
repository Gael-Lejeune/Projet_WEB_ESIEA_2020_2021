<body class="HolyGrail" id="header">
    <header class="headerflex">
        <img class="headerimg" src="../html/images/logo.png" alt="erreur d'affichage" >
        <ul>
            <li class="title">Spautifaï</li>
            <li class="subtitle">Compte</li>
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
            #Récupération des données à utiliser dans la page
            $nom_client = $result['user_name'];
            $prenom = $result['first_name'];
            $nom = $result['last_name'];
            $mail = $result['mail'];
            $address = $result['address'];
            $carte = $result['credit_card'];
            ?>

            <h2 id="ajoutP" class="pageTitle">
                <?php  echo 'Bienvenue <span id="nomTitre">'.$nom_client.'</span><br>';  ?>
            </h2>

            <p style="margin-bottom:1.2cm;"></p>

            <h2 id="infos">
                Informations client
            </h2>
            <h1>
                <?php  echo 'Nom : '.$nom.'<br>';  ?>
                <?php  echo 'Prénom : '.$prenom.'<br>';  ?>
                <?php  echo 'Mail : '.$mail.'<br>';  ?>
            </h1>
            <!-- <h2 id="modifications"> Modifier les informations du compte </h2> -->
            <div class="baseflex" id="modifications">
                <fieldset>
                    <legend>Modifier les informations du compte</legend>
                    <form id="form-address" name="changeAddressForm" action="<?php echo $changeaddressProcessing; ?>" method="post">
                        <ul>
                            <li>
                                <h1>Adresse postale actuelle : <span id="address"><?php echo $address; ?></span></h1></li>
                            </li>
                            <li class="formli">
                                &emsp;&emsp;Nouvelle addresse postale :
                                <input type="text" name="newAddress"/>
                            </li>
                            <input class="formbutton" type="submit" value="Changer"/>
                        </ul>
                    </form>

                    <form id="form-card" name="changeCardForm" action="<?php echo $changecardProcessing; ?>" method="post">
                        <ul>
                            <li>
                                <h1>Carte de crédit actuelle : <span id="carte"><?php echo $carte; ?></span></h1>
                            </li>
                            <li class="formli">
                                &emsp;&emsp;Nouvelle carte :
                                <input type="text" name="newCard"/>
                            </li>
                            <input class="formbutton" type="submit" value="Changer"/>
                        </ul>
                    </form>

                    <form id="form-name" name="changeNameForm" action="<?php echo $changenameProcessing; ?>" method="post">
                        <ul>
                            <li>
                                <h1>Nom d'utilisateur actuel : <span id="nomChangement"><?php echo $nom_client; ?></span></h1>
                            </li>
                            <li class="formli">
                                &emsp;&emsp;Nouveau nom d'utilisateur :
                                <input type="text" name="newName"/>
                            </li>
                            <input class="formbutton" type="submit" value="Changer"/>
                        </ul>
                    </form>
                </fieldset>
            </div>
            <h4 id="suppression">
                Supprimer le compte
            </h4>
            <h1>
                <form id="form-delete" name="deleteForm" action="<?php echo $deleteaccountProcessing; ?>" method="post">
                    <input type="submit" value="supprimer le compte"/>
                </form>
            </h1>

            <hr />
            <h4 id="support">
                Contacter le support
            </h4>
            <h1>
                <a  href="mailto:support@exemple.fr">support@nomDuSite.fr</a>
            </h1>
        </main>

        <?php display_menus($logged); ?>

    </div>

    <footer class="footerflex">
        <div class="copyright">Copyright : Gaël LEJEUNE & Angélique PROUX - 2021-<?php echo date("Y");?></div>
    </footer>

</body>
