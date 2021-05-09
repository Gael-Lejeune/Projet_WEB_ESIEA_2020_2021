<?php

session_start();
$obj = new stdClass();

$result_items =   $_SESSION['tab_items'];
$result_categories = $_SESSION['tab_categories'];

$numitem = $_POST['itemnumber'];

if ($numitem >= 0 && $numitem < sizeof($result_items)) {
  //si le produit
  $obj -> success = true;
  $categorylist = "<option value=''>Catégorie</option>";
  for ($i = 0; $i < sizeof($result_categories); $i++){
    $categorylist = $categorylist.'<option value="'.$result_categories[$i]['label'].'">'.$result_categories[$i]['label'].'</option>';
  }

  $obj -> message = '
  <TABLE class="tabAdmin" BORDER="1">
  <CAPTION>Produit correspondant :</CAPTION>
  <TR>
  <TH> Nom du produit </TH>
  <TH> Artiste </TH>
  <TH> Date de publication </TH>
  <TH> Catégorie </TH>
  </TR>
  <TR>
  <input type="text" name="iditem" value="'.$result_items[$numitem]['id_item'].'" style="display:none"/>
  <TH>'.$result_items[$numitem]['name'].'<br><input type="text" name="name"></input></TH>
  <TD>'.$result_items[$numitem]['artist'].'<br><input type="text" name="artist"></input></TD>
  <TD>'.$result_items[$numitem]['release_date'].'<br><input type="text" name="date" placeholder="yyyy-mm-dd"></input></TD>
  <TD>'.$result_items[$numitem]['label'].'<br><select id="categorylabel" name="categorylabel">'.$categorylist.'</select></TD>
  </TR>
  <TR>
  </TR>
  <TR>
  </TR>
  <TR>
  <TH> Description </TH>
  <TH> Image </TH>
  <TH> Prix </TH>
  <TH> Quantité en stock </TH>
  </TR>
  <TR>
  <TD>'.$result_items[$numitem]['description'].'<br><input type="text" name="description"></input></TD>
  <TD> <img src="'.$result_items[$numitem]['image_url'].'" class="img2"></TD>
  <TD>'.$result_items[$numitem]['price'].'<br><input type="number" name="price"></input></TD>
  <TD>'.$result_items[$numitem]['amount'].'<br><input type="number" name="amount"></input></TD>
  </TR>
  </TABLE>
  <input type="submit" value="Enregistrer les modifications sur le produit"/>';
} else {
  $obj -> success = false;
  $obj -> message = "Veuillez sélectionner un produit pour en voir les caractéristiques.<br>Pour le modifier, veuillez écrire les nouvelles valeurs dans les cases correspondantes.<br>Pensez à enregistrer les modifications.";
}


header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');
echo json_encode($obj);
