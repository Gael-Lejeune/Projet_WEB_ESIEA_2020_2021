<body class="HolyGrail" id="header">
    <header class="headerflex">
        <img class="headerimg" src="./Images/profil2.jpg" alt="erreur d'affichage" >
        <ul>
            <li class="title">Projet WEB</li>
            <li class="subtitle">Modifications Administrateur</li>
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
            <h2 id="ajoutP">
                <?php
                    echo 'Bienvenue '.$_GET['nomA'].'<br>';
                ?>
            </h2>

            <p style="margin-bottom:1.2cm;"></p>

            <h4 id="infos">
                Informations client
            </h4>
            <h1>
                Nom
                <br>
                Prénom
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
                Bla bla bla bla bla
                <br>
                Bla bla bla bla bla
            </h1>

            <h4 id="support">
                Contacter le support
            </h4>
            <h1>
                Bla bla bla bla bla
                <br>
                Bla bla bla bla bla
            </h1>
            <h4 id="suppression">
                Suppimer le compte
            </h4>
            <h1>
                Bla bla bla bla bla
                <br>
                Bla bla bla bla bla
            </h1>
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
