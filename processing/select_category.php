<?php

session_start();
$obj = new stdClass();

$result_categories = $_SESSION['tab_categories'];

$numcategory = $_POST['categorynumber'];

if ($numcategory >= 0 && $numcategory < sizeof($result_categories)) {
  $obj -> success = true;
  $obj -> message = '
  <TABLE class="tabAdmin" BORDER="1">
  <CAPTION>Catégorie correspondante :</CAPTION>
  <TR>
  <TH> Nom de la catégorie </TH>
  <TH> Image </TH>
  </TR>
  <TR>
  <input type="text" name="idcategory" value="'.$result_categories[$numcategory]['id_category'].'" style="display:none"/>
  <TH>'.$result_categories[$numcategory]['label'].'<br/><input type="text" name="nameCategory"></input></TH>
  <TD><img src="'.$result_categories[$numcategory]['category_image_url'].'" class="img2"><br/><input type="url" name="urlcategory"></input></TD>
  </TR>
  </TABLE>
  <input type="submit" value="Enregistrer les modifications sur la catégorie"/>';
} else {
  $obj -> success = false;
  $obj -> message = "Sélectionnez une catégorie pour en voir les caractéristiques.<br/>Pour le modifier, écrivez les nouvelles valeurs dans les cases correspondantes.<br/>Pensez à enregistrer les modifications.";
}


header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');
echo json_encode($obj);
