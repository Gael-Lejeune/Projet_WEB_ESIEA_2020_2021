<body class="HolyGrail" id="header">
    <header class="headerflex">
        <img class="headerimg" src="./Images/profil2.jpg" alt="erreur d'affichage" >
        <ul>
            <li class="title">Projet WEB</li>
            <li class="subtitle">Produits Disponibles</li>
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
            <div class="flex-product">

                <div class="flex-content">
                    <a href="./produit.php"  class="flex-content">
                        <img src="https://k7.pngheat.com/preview/778/160/982/musical-note-clip-art-notes-thumbnail.jpg" alt="photo du produit" class="img2">
                        <p>Nom du produit<br>Catégorie du produit<br>Prix du produit</p>
                    </a>
                </div>
                <div class="flex-content">
                    <a href="./produit.php?nom=Rare&amp;categorie=Pop&amp;prix=40$&amp;vendeur=Amazon&amp;date=2010"  class="flex-content">
                        <img src="https://k7.pngheat.com/preview/778/160/982/musical-note-clip-art-notes-thumbnail.jpg" alt="photo du produit" class="img2">
                        <p>Rare<br>Pop<br>40$</p>
                    </a>
                </div>

                <div class="flex-content">
                    <a href="./produit.php?nom=BE&amp;categorie=K-pop&amp;prix=30$&amp;vendeur=BigHit&amp;date=2020"  class="flex-content">
                        <img src="https://k7.pngheat.com/preview/778/160/982/musical-note-clip-art-notes-thumbnail.jpg" alt="photo du produit" class="img2">
                        <p>BE<br>K-pop<br>30$</p>
                    </a>
                </div>
                <div class="flex-content">
                    <a href="./produit.php"  class="flex-content">
                        <img src="https://k7.pngheat.com/preview/778/160/982/musical-note-clip-art-notes-thumbnail.jpg" alt="photo du produit" class="img2">
                        <p>Nom du produit<br>Catégorie du produit<br>Prix du produit</p>
                    </a>
                </div>

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
