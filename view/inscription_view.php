<body class="HolyGrail" id="header">
    <header class="headerflex">
        <img class="headerimg" src="../html/images/logo.png" alt="erreur d'affichage" >
        <ul>
            <li class="title">Projet WEB</li>
            <li class="subtitle">Fiche inscription</li>
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
                    <legend>Formulaire d'inscription :</legend>
                    <form id="form-register" name="ForInscrip" action="<?php echo $adduserProcessing; ?>" method="post">
                      <ul>
                        <li class="formli">
                          <label for="nom">Nom :</label>
                          <input type="text" id="nom" name="nom">
                        </li>
                        <p id="lastnameError" class="red-error"> </p>
                        <li class="formli">
                          <label for="prénom">Prénom :</label>
                          <input type="text" id="prénom" name="prénom">
                        </li>
                        <p id="firstnameError" class="red-error"> </p>
                        <li class="formli">
                          <label for="nomU">Nom d'utilisateur :</label>
                          <input type="text" id="nomU" name="nomU">
                        </li>
                        <p id="usernameError" class="red-error"> </p>
                        <li class="formli">
                          <label for="mail">Adresse électronique :</label>
                          <input type="email" id="mail" name="mail">
                        </li>
                        <p id="mailError" class="red-error"> </p>
                        <li class="formli">
                          <label for="adr">Adresse postale* :</label>
                          <input type="text" id="adr" name="adr">
                        </li>
                        <p class="red-error">*Ce champ peut rester vide.</p>
                        <li class="formli">
                          <label for="mdpU">Mot de passe :</label>
                          <input type="password" id="mdpU" name="mdpU">
                        </li>
                        <p id="passwordError" class="red-error"> </p>
                        <input class="formbutton" type="submit" value="Confirmer">
                      </ul>
                    </form>
                </fieldset>
            </div>
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
