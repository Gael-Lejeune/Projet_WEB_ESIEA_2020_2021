<?php

$db = dtb_connect_PDO(); //connection a la base de donnée avec PDO

if (isset($_GET['category'])) {
    $query = $db->prepare('SELECT * FROM item, category WHERE item.id_category = category.id_category AND category.label = ?');
    $query->execute([$_GET['category']]);
} else {
    $query = $db->prepare('SELECT * FROM item, category WHERE item.id_category = category.id_category');
    $query->execute();
}

$result = $query->fetchAll(PDO::FETCH_ASSOC);
