<body class="HolyGrail" id="header">
    <header class="headerflex">
        <img class="headerimg" src="./Images/profil2.jpg" alt="erreur d'affichage" >
        <ul>
            <li class="title">Projet WEB</li>
            <li class="subtitle">Compte</li>
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

    <script>
      //fonctions pour les modifications de compte et pour la suppression
      function changeAddressFunction() {
        var str = document.forms["changeAddressForm"]["newAddress"].value;
        if (str.length == 0) {
          return;
        } else {
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("adresse").innerHTML = this.responseText;
              document.getElementsByName('newAddress')[0].value = "";
            }
          };
          xmlhttp.open("GET", "../model/change_user_address.php?newAddress=" + str, true);
          xmlhttp.send();
          alert("Adresse changée");
        }
      }

      function changeCardFunction() {
        var str = document.forms["changeCardForm"]["newCard"].value;
        if (str.length == 0) {
          return;
        } else {
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("carte").innerHTML = this.responseText;
              document.getElementsByName('newCard')[0].value = "";
            }
          };
          xmlhttp.open("GET", "../model/change_user_card.php?newCard=" + str, true);
          xmlhttp.send();
          alert("Carte changée");
        }
      }

      function changeNameFunction() {
        var str = document.forms["changeNameForm"]["newName"].value;
        if (str.length == 0) {
          document.getElementById("nomTitre").innerHTML = "";
          document.getElementById("nomChangement").innerHTML = "";
          return;
        } else {
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("nomTitre").innerHTML = this.responseText;
              document.getElementById("nomChangement").innerHTML = this.responseText;
              document.getElementsByName('newName')[0].value = "";
            }
          };
          xmlhttp.open("GET", "../model/change_user_name.php?newName=" + str, true);
          xmlhttp.send();
          alert("Nom d'utilisateur changé");
        }
      }

      function deleteAccountFunction() {
        if ( confirm( "Votre compte va être supprimé.\n   Cliquez sur 'OK' pour confirmer, ou annulez." ) ) {
          // Code à éxécuter si le l'utilisateur clique sur "OK"
          window.location = "../model/delete_user.php";
        } else {
          // Code à éxécuter si l'utilisateur clique sur "Annuler"
          return;
        }
      }
    </script>

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
                <?php  echo 'Bienvenue <span id="nomTitre">'.$nom_client.'</span><br>';  ?>
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
              <?php  echo "Adresse actuelle : ".'<span id="adresse">'.$adresse.'</span><br>';  ?>
              <form name="changeAddressForm">
                &emsp;&emsp;Nouvelle adresse : <input type="text" name="newAddress"/>
                <input type="button" onclick="changeAddressFunction()" value="changer"/>
              </form>

              <?php  echo "<br>Carte de crédit actuelle : ".'<span id="carte">'.$carte.'</span><br>';  ?>
              <form name="changeCardForm">
                &emsp;&emsp;Nouvelle carte : <input type="text" name="newCard"/>
                <input type="button" onclick="changeCardFunction()" value="changer"/>
              </form>

              <?php  echo "<br>Nom d'utilisateur actuel : ".'<span id="nomChangement">'.$nom_client.'</span><br>';  ?>

              <form name="changeNameForm">
                &emsp;&emsp;Nouveau nom d'utilisateur : <input type="text" name="newName"/>
                <input type="button" onclick="changeNameFunction()" value="changer"/>
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
              <form name="deleteForm">
                <input type="button" onclick="deleteAccountFunction()" value="supprimer le compte"/>
              </form>
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
