<?php

$db = dtb_connect_PDO(); //connection a la base de donnée avec PDO

$query = $db->prepare('SELECT * FROM item, category WHERE item.id_category = category.id');
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);




// for( $i = 0 ; $i < $messagesParPage ; $i++ ) //On affiche les discussions
// {
//     $msg_Disc1 = $manager->getMsgForIDDisc($result[$i]['idDiscussion']);
// }
