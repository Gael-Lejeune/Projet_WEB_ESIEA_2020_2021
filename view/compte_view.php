<body class="HolyGrail" id="header">
    <header class="headerflex">
        <img class="headerimg" src="./Images/profil2.jpg" alt="erreur d'affichage" >
        <ul>
            <li class="title">Projet WEB</li>
            <li class="subtitle">Compte</li>
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
            <?php
            #Récupération des données à utiliser dans la page
            $nom_client = $result['user_name'];
            $prenom = $result['first_name'];
            $nom = $result['last_name'];
            $mail = $result['mail'];
            $adresse = $result['adress'];
            $carte = $result['credit_card'];
            ?>

            <h2 id="ajoutP">
                <?php  echo 'Bienvenue '.$nom_client.'<br>';  ?>
            </h2>

            <p style="margin-bottom:1.2cm;"></p>

            <h4 id="infos">
                Informations client
            </h4>
            <h1>
                <?php  echo 'Nom : '.$nom.'<br>';  ?>
                <?php  echo 'Prénom : '.$prenom.'<br>';  ?>
                <?php  echo 'Mail : '.$mail.'<br>';  ?>
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
              <?php  echo 'Adresse actuelle : '.$adresse.'<br>';  ?>
              <!-- ajouter champ de texte et button pour en changer -->
              <?php  echo 'Carte de crédit actuelle : '.$carte.'<br>';  ?>
              <!-- ajouter champ de texte et button pour en changer -->
              <div id="txtHint">
                Nom d'utilisateur actuel : <?php echo $nom_client.'<br>'; ?>
              </div>
              <!-- à faire  -->

              <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
              <script type="text/javascript">
              $(function() {
                $("#formUserName").submit(function(){
                  newNameUser = $(this).find("input[name=newName]").val();
                  $.post("../model/change_user_name.php", {newUserName: newUserName}, function(data) {
                    alert(data);
                  });
                  return false;
                });
              });
              </script>
              <form action="#" id="formUserName" method="post">
                <label for="uname">&emsp;Nouveau nom d'utilisateur : </label>
                <input type="text" name="newName" value=""></input>
                <input type="submit" value="changer"></input>
              </form>
            </h1>

            <h4 id="support">
                Contacter le support
            </h4>
            <h1>
                <a  href="mailto:support@exemple.fr">support@nomDuSite.fr</a>
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
