<body class="HolyGrail" id="header">
    <header class="headerflex">
        <img class="headerimg" src="../html/images/logo.png" alt="erreur d'affichage">
        <ul>
            <li class="title">Spautifaï - Projet WEB - ESIEA 2021</li>
            <li class="subtitle">Accueil</li>
        </ul>
        <ul>
            <li >
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

            <div class="flex-row">
                <div class="flex-col informations">
                    <h2>Informations</h2>
                    <h1>
                        Ce site internet est un site de vente d'album en ligne.<br/>
                        En tant que visiteur, vous pourrez consulter les différents produits et les ajouter à votre panier.<br/>
                        En tant que client, vous pourrez gérer vos informations personnelles et effectuer des achats/commandes.<br/>
                        En tant qu'administrateur, vous pourrez ajouter et supprimer des produits, des catégories et des utilisateurs.<br/>
                        Ce site a été créé en 2021 à l'occasion d'un projet de troisième année.<br/>
                        Les langages utilisés sont : HTML/CSS, JavaScript, PHP/SQL.<br/>
                        Le site est composé d'une dizaine de pages et d'une base de données.
                    </h1>
                </div>

                <div class="flex-col informations">
                    <h2>Règles de navigation</h2>
                    <h1>
                        Via le menu de gauche, vous pouvez accéder aux pages globales :<br/>
                            - Accueil<br/>
                            - Produits<br/>
                            - Catégories<br/>
                        <br/>
                        <br/>
                        Une fois connecté, vous trouverez dans le menu de droite :<br/>
                        - Panier<br/>
                        - Mon compte<br/>
                        - Mes commandes<br/>
                        - Se déconnecter<br/>
                        Ce menu sera différent si vous êtes administrateur.
                    </h1>

                </div>
            </div>
            <div class="flex-row">
                <div>
                    <h2>Quelques mots sur le projet</h2>
                    <h1>
                        Nous souhaitions concevoir un site web dynamique de vente en ligne.
                        <br/>
                        Ce site propose aux clients différents articles répartis en plusieurs catégories.
                        Chaque article possède sa propre fiche descriptive.
                        En naviguant sur le site, les articles sont présentés sous forme de liste, et en cliquant sur l'un des articles on peut accéder à sa description détaillée.
                        Le client peut alors choisir de l'ajouter à son panier.
                        Il peut ensuite consulter son panier, éventuellement supprimer ou modifier les quantités des articles choisis, puis valider sa commande.
                        Pour valider une commande, il est proposé au client d’enregistrer une carte si aucune n'est enregistrée à son nom ou alors de la modifier.
                        Une fois la carte enregistrée ou bien modifiée, le client peut valider sa commande.
                        Si la carte est valide, un message de validation de commande sera affiché à l’utilisateur.
                        <br/><br/>
                        Ce site permet également aux administrateurs d'ajouter, de modifier ou de supprimer des produits.
                        Les administrateurs peuvent également changer les catégories et les utilisateurs.
                    </h1>
                </div>
                <img src="../html/images/logo.png" alt="erreur d'affichage" class="logo" >

            </div>

            <h2 >Quelques mots sur les créateurs</h2>
            <h1>
                Ce site a été conçu et programmé par Gaël LEJEUNE et Angélique PROUX.
                Tous deux des étudiants de troisième année à l'ESIEA, école d'ingénieurs en sciences et technologies du numérique.
            </h1>
            <br/>
            <h1>
                Gaël LEJEUNE : <br/>
                Passionné de musique et pixel-artiste à ses heures perdues.
            </h1>

            <div class="address">
                Coudoux 13111
                <br/>
                <a  href="mailto:glejeune@et.esiea.fr">glejeune@et.esiea.fr</a>
            </div>

            <br/>
            <h1>
                Angélique PROUX :<br/>
                Passionnée de musique et future ingénieure.
            </h1>

            <div class="address">
                Carrières-sous-Poissy 78955
                <br/>
                <a href="mailto:aproux@et.esiea.fr">aproux@et.esiea.fr</a>
            </div>

            <p style="margin-bottom:3cm;"></p>

        </main>

        <?php display_menus($logged); ?>
    </div>
    <footer class="footerflex">
        <div class="copyright">Copyright : Gaël LEJEUNE & Angélique PROUX - 2021-<?php echo date("Y");?></div>
    </footer>

</body>
