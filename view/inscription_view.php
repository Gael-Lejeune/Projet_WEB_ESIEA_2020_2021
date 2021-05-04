<body class="HolyGrail" id="header">
    <header class="headerflex">
        <img class="headerimg" src="./Images/profil2.jpg" alt="erreur d'affichage" >
        <ul>
            <li class="title">Projet WEB</li>
            <li class="subtitle">Fiche inscription</li>
        </ul>
        <ul>
            <li>
                <button class="switch" type="button" name="button" id="theme-btn">
                    <img src="./Images/daynight.jpeg" alt="erreur d'affichage" class="switchimg" >
                </button>
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
                                <label for="adr">Adresse :</label>
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
        <?php display_menus(); ?>

    </div>

    <a href="#header" id="button" class="button">
        <img src="./Images/arrow.png" alt="erreur d'affichage" class="buttonimg" >
    </a>

    <footer class="footerflex">
        <div class="copyright">Copyright : Gaël LEJEUNE & Angélique PROUX</div>
    </footer>

</body>
