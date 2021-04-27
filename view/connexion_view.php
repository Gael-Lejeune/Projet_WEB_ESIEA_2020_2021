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

            <form name="ForInscrip" action="../acceuil.php">
            <fieldset>
                <legend>Connexion client :</legend>
                <br><div class="flex-row" style="justify-content: space-around">
                <div class="gauche">
                    <label for="nomU">Nom d'utilisateur :</label><br>
                    <label for="mdpU">Mot de passe :</label><br>
                </div>
                <div class="droite">
                    <input type="text" id="nomU" name="nomU"><br>
                    <input type="password" id="mdpU" name="mdpU">
                </div>

                <div class="aligné">
                <br>
                    <input type="submit" value="Confirmer">
                </div>
                </div>
            </fieldset>
        </form>

        <p style="margin-bottom:10cm;"></p>

        <form id="admin" name="ForInscrip" action="../acceuil.php">
            <fieldset>
                <legend>Connexion administrateur :</legend>
                <br><div class="flex-row" style="justify-content: space-around">
                <div class="gauche">
                    <label for="nomA">Nom d'administrateur :</label><br>
                    <label for="mdpA">Mot de passe :</label><br>
                </div>
                <div class="droite">
                    <input type="text" id="nomA" name="nomA"><br>
                    <input type="password" id="mdpA" name="mdpA">
                </div>

                <div class="aligné">
                <br>
                    <input type="submit" value="Confirmer">
                </div>
                </div>
            </fieldset>
        </form>

        <p style="margin-bottom:10cm;"></p>

        </main>

        <?php display_menus(); ?>

    </div>

    <a href="#header" id="button" class="button">
        <img src="./Images/arrow.png" alt="erreur d'affichage" class="buttonimg" >
    </a>

    <footer class="footerflex">
        <div class="copyright">Copyright : Gaël LEJEUNE</div>
    </footer>

</body>
