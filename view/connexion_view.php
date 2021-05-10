<body class="HolyGrail" id="header">
    <header class="headerflex">
        <img class="headerimg" src="../html/images/logo.png" alt="erreur d'affichage" >
        <ul>
            <li class="title">Spautifaï</li>
            <li class="subtitle">Fiche connexion</li>
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
            <div class="baseflex">
                <fieldset>
                    <legend>Connexion client/admin : </legend>
                    <form id="form-connect" name="ForConnexion" action="<?php echo $connectuserProcessing; ?>" method="post">
                        <ul>
                            <li class="formli">
                                <label for="nomU">Nom d'utilisateur :</label>
                                <input type="text" id="nomU" name="nomU" placeholder="username">
                            </li>
                            <p id="usernameError" class="red-error"> </p>
                            <li class="formli">
                                <label for="mdpU">Mot de passe :  </label>
                                <input type="password" id="mdpU" name="mdpU" placeholder="password">
                            </li>
                            <p id="passwordError" class="red-error"> </p>
                            <li>
                                <input class="formbutton" type="submit" value="Confirmer">
                            </li>
                        </ul>
                    </form>
                </fieldset>
            </div>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <hr>
            <h4 id="support">
                Contacter le support
            </h4>
            <p>
                <a href="mailto:support@exemple.fr">support@nomDuSite.fr</a>
            </p>
        </main>

        <?php display_menus($logged); ?>

    </div>

    <footer class="footerflex">
        <div class="copyright">Copyright : Gaël LEJEUNE & Angélique PROUX - 2021-<?php echo date("Y");?></div>
    </footer>

</body>
