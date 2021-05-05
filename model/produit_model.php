<?php
// var_dump($_SESSION);
$db = dtb_connect_PDO(); //connection a la base de donnée avec PDO

$query = $db->prepare('SELECT * FROM item, category WHERE item.id_category = category.id_category AND item.id_item = ?');
$query->execute([$_GET['id']]);
$result = $query->fetch(PDO::FETCH_ASSOC);
