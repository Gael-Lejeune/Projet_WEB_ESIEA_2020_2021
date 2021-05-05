<?php

$db = dtb_connect_PDO(); //connection a la base de donnée avec PDO

$query = $db->prepare('SELECT * FROM category');
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);

// var_dump($result);
