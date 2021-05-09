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

            <h2>
                <?php
                    echo 'Bienvenue '.$nom_admin.'<br>';
                ?>
            </h2>

            <p style="margin-bottom:1.2cm;"></p>

            <hr/>
            <h2>Section produits</h2>
            <br>
            <h4>
              Modification d'un produit
            </h4>
            <h1>
              <form id="form-select-item" name="selectItemform" action="<?php echo $selectitemProcessing; ?>" method="post">
                <select id="itemnumber" name="itemnumber">
                  <option value="-1">Sélectionner un produit :</option>
                  <?php
                  for ($i = 0; $i < sizeof($result_items); $i++){
                    echo '<option value="'.$i.'">'.$result_items[$i]['name'].' - '.$result_items[$i]['artist'].'</option>';
                  }
                  ?>
                </select>
              </form>
            </h1>
            <form id="form-modify-item" name="modifyItemform" action="<?php echo $modifyitemProcessing; ?>" method="post">
              <p id="zoneItem" class="form">
                Sélectionnez un produit pour en voir les caractéristiques.<br>
                Pour le modifier, écrivez les nouvelles valeurs dans les cases correspondantes.<br>
                Pensez à enregistrer les modifications.
              </p>
            </form>
            <h4>
                Ajout d'un produit
            </h4>
            <h1>
                Bla bla bla bla bla
                <br>
                Bla bla bla bla bla
            </h1>
            <h1>
                Bla bla bla bla bla
                <br>
                Bla bla bla bla bla
            </h1>
            <h4>
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
            <h4>
              Modification d'une catégorie
            </h4>
            <h1>
              <form id="form-select-category" name="selectCategoryform" action="<?php echo $selectcategoryProcessing; ?>" method="post">
                <select id="categorynumber" name="categorynumber">
                  <option value="-1">Sélectionner une catégorie :</option>
                  <?php
                  for ($i = 0; $i < sizeof($result_categories); $i++){
                    echo '<option value="'.$i.'">'.$result_categories[$i]['label'].'</option>';
                  }
                  ?>
                </select>
              </form>
            </h1>
            <form id="form-modify-category" name="modifyCategoryform" action="<?php echo $modifycategoryProcessing; ?>" method="post">
              <p id="zoneCategory" class="form">
                Sélectionnez une catégorie pour en voir les caractéristiques.<br>
                Pour la modifier, écrivez les nouvelles valeurs dans les cases correspondantes.<br>
                Pensez à enregistrer les modifications.
              </p>
            </form>
            <h4>
                Ajout d'une catégorie
            </h4>
              <form id="form-add-category" name="addcategoryForm" action="<?php echo $addCategoryProcessing; ?>" method="post">
                <ul>
                  <li>
                    <label for="label">Nom de la catégorie :</label>
                    <input type="text" id="label" name="label">
                    <p id="labelError" class="red-error"> </p>
                  </li>
                  <li>
                    <label for="urlcategory">Url de l'image :</label>
                    <input type="url" id="urlcategory" name="urlcategory">
                    <p id="urlError" class="red-error"> </p>
                  </li>
                  <input class="formbutton" type="submit" value="Ajouter">
                </ul>
              </form>
            <h4>
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

            <h4>
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
        <div class="copyright">Copyright : Gaël LEJEUNE & Angélique PROUX - 2021-<?php echo date("Y");?></div>
    </footer>

</body>
