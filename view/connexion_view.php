<body class="HolyGrail" id="header">
    <header class="headerflex">
        <img class="headerimg" src="./Images/profil2.jpg" alt="erreur d'affichage" >
        <ul>
            <li class="title">Projet WEB</li>
            <li class="subtitle">Fiche connexion</li>
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
                    <legend>Connexion client : </legend>
                    <form name="ForInscrip" action="../controller/compte.php">
                        <ul>
                            <li>
                            <label for="nomU">Nom d'utilisateur :</label>
                            <input type="text" id="nomU" name="nomU" placeholder="Username">
                            </li>
                            <li>
                                <label for="mdpU">Mot de passe :  </label>
                                <input type="password" id="mdpU" name="mdpU" placeholder="password">
                            <li>
                                <input class="buybutton" type="submit" value="Confirmer">
                            </li>
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
