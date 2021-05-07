<body class="HolyGrail" id="header">
    <header class="headerflex">
        <img class="headerimg" src="https://previews.123rf.com/images/khabarushka/khabarushka1803/khabarushka180300859/98204952-violon-de-batterie-%C3%89tiquette-de-logo-de-magasin-de-magasin-de-musique-ensemble-d-instruments-de-mu.jpg" alt="erreur d'affichage" >
        <ul>
            <li class="title">Projet WEB</li>
            <li class="subtitle">Fiche inscription</li>
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
                    <legend>Formulaire d'inscription :</legend>
                    <form name="ForInscrip" action="../controller/acceuil.php" method="get">
                        <ul>
                            <li>
                                <label for="nom">Nom :</label>
                                <input type="text" id="nom" name="nom">
                            </li>
                            <li>
                                <label for="prénom">Prénom :</label>
                                <input type="text" id="prénom" name="prénom">
                            </li>
                            <li>
                                <label for="nomU">Nom d'utilisateur :</label>
                                <input type="text" id="nomU" name="nomU">
                            </li>
                            <li>
                                <label for="mail">E-mail :</label>
                                <input type="text" id="mail" name="mail">
                            </li>
                            <li>
                                <label for="adr">address :</label>
                                <input type="text" id="adr" name="adr">
                            </li>
                            <li>
                                <label for="mdpU">Mot de passe :</label>
                                <input type="password" id="mdpU" name="mdpU">
                            </li>
                            <input class="formbutton" type="submit" value="Confirmer">
                        </ul>


                    </form>
                </fieldset>
            </div>
        </main>
        <?php display_menus($logged); ?>

    </div>

    <footer class="footerflex">
        <div class="copyright">Copyright : Gaël LEJEUNE & Angélique PROUX</div>
    </footer>

</body>
