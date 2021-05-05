<body class="HolyGrail" id="header">
    <header class="headerflex">
        <img class="headerimg" src="./Images/profil2.jpg" alt="erreur d'affichage" >
        <ul>
            <li class="title">Projet WEB</li>
            <li class="subtitle">Fiche connexion</li>
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
            <div class="baseflex">
                <fieldset>
                    <legend>Connexion client/admin : </legend>
                    <form name="ForConnexion" action="../controller/verify_connexion.php" method="post">
                        <ul>
                            <li>
                            <label for="nomU">Nom d'utilisateur :</label>
                            <input type="text" id="nomU" name="nomU" placeholder="username">
                            </li>
                            <li>
                                <label for="mdpU">Mot de passe :  </label>
                                <input type="password" id="mdpU" name="mdpU" placeholder="password">
                            </li>
                            <li>
                                <input class="buybutton" type="submit" value="Confirmer">
                            </li>
                        </ul>
                    </form>
                </fieldset>
            </div>
            <p style="margin-bottom:3cm;"></p>
            <hr>
            <h4 id="support">
                Contacter le support
            </h4>
            <p>
                <a href="mailto:support@exemple.fr">support@nomDuSite.fr</a>
            </p>
        </main>

        <?php display_menus(); ?>

    </div>

    <a href="#header" id="button" class="button">
        <img src="./Images/arrow.png" alt="erreur d'affichage" class="buttonimg" >
    </a>

    <footer class="footerflex">
        <div class="copyright">Copyright : Gaël LEJEUNE & Angélique PROUX</div>
    </footer>

</body>
