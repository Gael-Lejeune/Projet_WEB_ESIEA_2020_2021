<?php

  $db = dtb_connect_PDO ();

  $query = $db->prepare("SELECT * FROM user WHERE user_name = ?");
  $query->execute([$_GET['nomU']]);
  $result = $query->fetch(PDO::FETCH_ASSOC);

  function set_user_name($newusername) {
    $db = dtb_connect_PDO ();
    if($newusername!=""){
      $stmt = $db->prepare("UPDATE user SET user_name =? WHERE user_name = ?");
      if($stmt->execute([$newusername, $nom_client])){
        $nom_client = $newusername;
      } else {
        echo "Nom d'utilisateur inchangé.";
      }
    }
  }
