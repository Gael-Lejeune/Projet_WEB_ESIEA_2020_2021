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

            <h2 class="pageTitle">
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
            <br/>
            <br/>
            <br/>
            <br/>
            <!-- <h4>
                Ajout d'un produit
            </h4> -->
            <div class="baseflex">
                <fieldset>
                    <legend>Ajout d'un produit</legend>
                    <form id="form-add-item" name="additemForm" action="<?php echo $addItemProcessing; ?>" method="post">
                        <ul>
                            <li class="formli">
                                <label for="nameadd">Nom du produit :</label>
                                <input type="text" id="nameadd" name="nameadd"/>
                            </li>
                            <p id="nameaddError" class="red-error"> </p>
                            <li class="formli">
                                <label for="artistadd">Artiste :</label>
                                <input type="text" id="artistadd" name="artistadd">
                            </li>
                            <p id="artistaddError" class="red-error"> </p>
                            <li class="formli">
                                <label for="dateadd">Date de publication :</label>
                                <input type="text" id="dateadd" name="dateadd" placeholder="yyyy-mm-dd"/>
                            </li>
                            <p id="dateaddError" class="red-error"> </p>
                            <li class="formli">
                                <label for="categoryadd">Catégorie :</label>
                                <select id="categoryadd" name="categoryadd">
                                    <?php
                                    for ($i = 0; $i < sizeof($result_categories); $i++){
                                        echo '<option value="'.$result_categories[$i]['id_category'].'">'.$result_categories[$i]['label'].'</option>';
                                    }
                                    ?>
                                </select>
                            </li>
                            <p id="categoryaddError" class="red-error"> </p>
                            <li class="formli">
                                <label for="urladd">Url de l'image :</label>
                                <input type="url" id="urladd" name="urladd"/>
                            </li>
                            <p id="urladdError" class="red-error"> </p>
                            <li class="formli">
                                <label for="descriptionadd">Description :</label>
                                <input type="text" id="descriptionadd" name="descriptionadd"/>
                            </li>
                            <p id="descriptionaddError" class="red-error"> </p>
                            <li class="formli">
                                <label for="priceadd">Prix :</label>
                                <input type="number" id="priceadd" name="priceadd"/>
                            </li>
                            <p id="priceaddError" class="red-error"> </p>
                            <li class="formli">
                                <label for="amountadd">Quantité :</label>
                                <input type="number" id="amountadd" name="amountadd"/>
                            </li>
                            <p id="amountaddError" class="red-error"> </p>
                            <input class="formbutton" type="submit" value="Ajouter">
                        </ul>
                    </form>

                </fieldset>

            </div>
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
            <div class="baseflex">
                <fieldset>
                    <form id="form-add-category" name="addcategoryForm" action="<?php echo $addCategoryProcessing; ?>" method="post">
                        <ul>
                            <li class="formli">
                                <label for="label">Nom de la catégorie :</label>
                                <input type="text" id="label" name="label"/>
                            </li>
                            <p id="labelError" class="red-error"> </p>
                            <li class="formli">
                                <label for="urlcategory">Url de l'image :</label>
                                <input type="url" id="urlcategory" name="urlcategory"/>
                            </li>
                            <p id="urlError" class="red-error"> </p>
                            <input class="formbutton" type="submit" value="Ajouter">
                        </ul>
                    </form>
                </fieldset>
            </div>
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
            <div class="baseflex">
                <fieldset>
                    <form id="form-modify-user" name="modifyUserform" action="<?php echo $modifyuserProcessing; ?>" method="post">
                        <li class="formli">
                            <label for="currentuser">Nom d'utilisateur actuel : </label>
                            <select id="currentuser" name="currentuser">
                                <option value="-1">Sélectionner un utilisateur :</option>
                                    <?php
                                    for ($i = 0; $i < sizeof($result_users); $i++){
                                        echo '<option value="'.$result_users[$i]['user_name'].'">'.$result_users[$i]['user_name'].'</option>';
                                    }
                                    ?>
                            </select>
                        </li><br/>
                        <li class="formli">
                            <label for="usermodify">Nouveau nom d'utilisateur :</label>
                            <input type="text" name="usermodify">
                        </li><br/>
                        <li class="formli">
                            <label for="namemodify">Nom :</label>
                            <input type="text" name="namemodify">
                        </li><br/>
                        <li class="formli">
                            <label for="firstnamemodify">Prénom :</label>
                            <input type="text" name="firstnamemodify">
                        </li><br/>
                        <li class="formli">
                            <label for="pwdmodify">Mot de passe :</label>
                            <input type="text" name="pwdmodify">
                        </li><br/>
                        <li class="formli">
                            <label for="mailmodify">Adresse électronique :</label>
                            <input type="mail" name="mailmodify">
                        </li><br/>
                        <li class="formli">
                            <label for="addressmodify">Adresse postale :</label>
                            <input type="text" name="addressmodify">
                        </li><br/>
                        <li class="formli">
                            <label for="rolemodify">Rôle :</label>
                            <select name="rolemodify">
                                <option value="">Sélectionnez un rôle</option>
                                <option value="client">client</option>
                                <option value="admin">administrateur</option>
                            </select>
                        </li>
                        <input type="submit" value="enregistrer les modifications"/>
                    </form>
                </fieldset>
            </div>
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
