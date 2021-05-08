<body class="HolyGrail" id="header">
    <header class="headerflex">
        <img class="headerimg" src="../html/images/logo.png" alt="erreur d'affichage" >
        <ul>
            <li class="title">Projet WEB</li>
            <li class="subtitle">Modifications Administrateur</li>
        </ul>
        <ul>
            <li>
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
          <?php
          #Récupération des données à utiliser dans la page
          $nom_admin = $result_admin['user_name'];
          ?>

            <h2 id="ajoutP">
                <?php
                    echo 'Bienvenue '.$nom_admin.'<br>';
                ?>
            </h2>

            <p style="margin-bottom:1.2cm;"></p>

            <hr/>
            <h2>Section produits</h2>
            <br>
            <TABLE class="tabAdmin" BORDER="1">
              <CAPTION>Produits enregistrés :</CAPTION>
              <TR>
                <TH> Nom du produit </TH>
                <TH> Artiste </TH>
                <TH> Date de publication </TH>
                <TH> Catégorie </TH>
                <TH> Description </TH>
                <TH> Image </TH>
                <TH> Prix </TH>
                <TH> Quantité en stock </TH>
              </TR>
              <?php
              for ($i = 0; $i < sizeof($result_items); $i++){
                echo '
                <TR>
                <TH>'.$result_items[$i]['name'].'</TH>
                <TD>'.$result_items[$i]['artist'].'</TD>
                <TD>'.$result_items[$i]['release_date'].'</TD>
                <TD>'.$result_items[$i]['label'].'</TD>
                <TD>'.$result_items[$i]['description'].'</TD>
                <TD> <img src="'.$result_items[$i]['image_url'].'" class="img2"></TD>
                <TD>'.$result_items[$i]['price'].'</TD>
                <TD>'.$result_items[$i]['amount'].'</TD>
                </TR>';
              }

              ?>
            </TABLE>
            <h4 id="modifP">
                Ajout d'un produit
            </h4>
            <h1>
                Bla bla bla bla bla
                <br>
                Bla bla bla bla bla
            </h1>
            <h4 id="suppP">
                Modification d'un produit
            </h4>
            <h1>
                Bla bla bla bla bla
                <br>
                Bla bla bla bla bla
            </h1>
            <h4 id="ajoutC">
                Suppression d'un produit
            </h4>
            <h1>
              <form id="form-delete-item" name="deleteItemform" action="<?php echo $deleteitemProcessing; ?>" method="post">
                <label for="itemname">Choisissez un produit :</label>
                <select id="itemname" name="itemname">
                  <?php
                  for ($i = 0; $i < sizeof($result_items); $i++){
                    echo '<option value="'.$result_items[$i]['name'].'">'.$result_items[$i]['name'].'</option>';
                  }
                  ?>
                </select>
                <input type="submit" value="supprimer le produit sélectionné"/>
              </form>
            </h1>

            <hr/>
            <h2>Section catégories</h2>
            <br>
            <TABLE class="tabAdmin" BORDER="1">
              <CAPTION>Catégories enregistrées :</CAPTION>
              <TR>
                <TH> Nom de la catégorie </TH>
                <TH> Image </TH>
                <TH> Nom de la catégorie </TH>
                <TH> Image </TH>
              </TR>
              <?php
              for ($i = 0; $i < sizeof($result_categories); $i=$i+2){
                echo '
                <TR>
                <TH>'.$result_categories[$i]['label'].'</TH>
                <TD> <img src="'.$result_categories[$i]['category_image_url'].'" class="img2"></TD>';
                if (($i+1)<sizeof($result_categories)){
                  echo '<TH>'.$result_categories[$i+1]['label'].'</TH>
                  <TD> <img src="'.$result_categories[$i+1]['category_image_url'].'" class="img2"></TD>';
                }
                echo '</TR>';
              }

              ?>
            </TABLE>
            <h4 id="modifC">
                Ajout d'une catégorie
            </h4>
            <h1>
                Bla bla bla bla bla
                <br>
                Bla bla bla bla bla
            </h1>
            <h4 id="suppC">
                Modification d'une catégorie
            </h4>
            <h1>
                Bla bla bla bla bla
                <br>
                Bla bla bla bla bla
            </h1>
            <h4 id="modifU">
                Suppression d'une catégorie
            </h4>
            <h1>
              <form id="form-delete-category" name="deleteCategoryform" action="<?php echo $deletecategoryProcessing; ?>" method="post">
                <label for="categorylabel">Choisissez une catégorie :</label>
                <select id="categorylabel" name="categorylabel">
                  <?php
                  for ($i = 0; $i < sizeof($result_categories); $i++){
                    echo '<option value="'.$result_categories[$i]['label'].'">'.$result_categories[$i]['label'].'</option>';
                  }
                  ?>
                </select>
                <input type="submit" value="supprimer la catégorie sélectionnée"/>
              </form>
            </h1>

            <hr/>
            <h2>Section utilisateurs</h2>
            <br>
            <TABLE class="tabAdmin" BORDER="1">
              <CAPTION>Utilisateurs enregistrés :</CAPTION>
              <TR>
                <TH> Nom d'utilisateur </TH>
                <TH> Nom </TH>
                <TH> Prénom </TH>
                <TH> Adresse électronique </TH>
                <TH> Adresse postale </TH>
                <TH> Rôle </TH>
              </TR>
              <?php
              for ($i = 0; $i < sizeof($result_users); $i++){
                echo '
                <TR>
                <TH>'.$result_users[$i]['user_name'].'</TH>
                <TD>'.$result_users[$i]['last_name'].'</TD>
                <TD>'.$result_users[$i]['first_name'].'</TD>
                <TD>'.$result_users[$i]['mail'].'</TD>
                <TD>'.$result_users[$i]['address'].'</TD>
                <TD>'.$result_users[$i]['role'].'</TD>
                </TR>';
              }

              ?>
            </TABLE>

            <h4 id="suppU">
                Modification d'un utilisateur
            </h4>
            <h1>
                Bla bla bla bla bla
                <br>
                Bla bla bla bla bla
            </h1>
            <h4>
                Suppression d'un utilisateur
            </h4>
            <h1>
              <form id="form-delete-user" name="deleteUserForm" action="<?php echo $deleteaccountProcessing; ?>" method="post">
                <label for="usersId">Choisissez un utilisateur :</label>
                <select id="usersname" name="usersname">
                  <?php
                  for ($i = 0; $i < sizeof($result_users); $i++){
                    echo '<option value="'.$result_users[$i]['user_name'].'">'.$result_users[$i]['user_name'].'</option>';
                  }
                  ?>
                </select>
                <input type="submit" value="supprimer le compte sélectionné"/>
              </form>
            </h1>
        </main>

        <?php display_menus($logged); ?>

    </div>

    <footer class="footerflex">
        <div class="copyright">Copyright : Gaël LEJEUNE & Angélique PROUX</div>
    </footer>

</body>
