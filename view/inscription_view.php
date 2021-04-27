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
            <form name="ForInscrip" action="../acceuil.php">
            <fieldset>
                <legend>Formulaire d'inscription (client) :</legend>
                <br><div class="flex-row" style="justify-content: space-around">
                <div class="gauche">
                    <label for="nom">Nom :</label><br>
                    <label for="prénom">Prénom :</label><br>
                    <label for="nomU">Nom d'utilisateur :</label><br>
                    <label for="mail">E-mail :</label><br>
                    <label for="tel">Téléphone portable :</label><br>
                    <label for="adr">Adresse :</label><br>
                    <label for="sexe">Sexe :</label><br>
                    <label for="nat">Nationalité :</label><br>
                    <label for="mdpU">Mot de passe :</label><br>
                </div>
                <div class="droite">
                    <input type="text" id="nom" name="nom"><br>
                    <input type="text" id="prénom" name="prénom"><br>
                     <input type="text" id="nomU" name="nomU"><br>
                    <input type="text" id="mail" name="mail"><br>
                    <input type="text" id="tel" name="tel" placeholder="01 12 34 56 78"><br>
                    <input type="text" id="adr" name="adr"><br>
                    <input type="radio" id="male" name="sexe" value="male">
                    <label for="male">Masculin</label>
                    <input type="radio" id="female" name="sexe" value="female">
                    <label for="female">Féminin</label><br>
                    <select id="nat" name="nat" size="1">
                        <option>Choisir</option>
                        <option>Français(e)</option>
                        <option>Anglais(e)</option>
                        <option>Allemand(e)</option>
                        <option>Espagnol(e)</option>
                        <option>Italien(ne)</option>
                        <option>Chinois(e)</option>
                    </select><br>
                    <input type="password" id="mdpU" name="mdpU"><br>
                </div>

                <div class="aligné">
                <br>
                    <input type="submit" value="Confirmer">
                </div>
                </div>
            </fieldset>
        </form>

        <p style="margin-bottom:6cm;"></p>

        <form id="admin" name="ForInscrip" action="../acceuil.php">
            <fieldset>
                <legend>Formulaire d'inscription (administrateur) :</legend>
                <br><div class="flex-row" style="justify-content: space-around">
                <div class="gauche">
                    <label for="nom">Nom :</label><br>
                    <label for="prénom">Prénom :</label><br>
                    <label for="nomA">Nom d'administrateur :</label><br>
                    <label for="mail">E-mail :</label><br>
                    <label for="tel">Téléphone portable :</label><br>
                    <label for="adr">Adresse :</label><br>
                    <label for="sexe">Sexe :</label><br>
                    <label for="nat">Nationalité :</label><br>
                    <label for="mdpA">Mot de passe:</label><br>
                </div>
                <div class="droite">
                    <input type="text" id="nom" name="nom"><br>
                    <input type="text" id="prénom" name="prénom"><br>
                     <input type="text" id="nomA" name="nomA"><br>
                    <input type="text" id="mail" name="mail"><br>
                    <input type="text" id="tel" name="tel" placeholder="01 12 34 56 78"><br>
                    <input type="text" id="adr" name="adr"><br>
                    <input type="radio" id="male" name="sexe" value="male">
                    <label for="male">Masculin</label>
                    <input type="radio" id="female" name="sexe" value="female">
                    <label for="female">Féminin</label><br>
                    <select id="nat" name="nat" size="1">
                        <option>Choisir</option>
                        <option>Français(e)</option>
                        <option>Anglais(e)</option>
                        <option>Allemand(e)</option>
                        <option>Espagnol(e)</option>
                        <option>Italien(ne)</option>
                        <option>Chinois(e)</option>
                    </select><br>
                    <input type="password" id="mdpA" name="mdpA"><br>
                </div>

                <div class="aligné">
                <br>
                    <input type="submit" value="Confirmer">
                </div>
                </div>
            </fieldset>
        </form>

        <p style="margin-bottom:5cm;"></p>

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
