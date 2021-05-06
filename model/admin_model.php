<?php

  $db = dtb_connect_PDO ();

  $query = $db->prepare("SELECT * FROM user WHERE user_name = ?");
  $query->execute([$_SESSION['login']]);
  $result = $query->fetch(PDO::FETCH_ASSOC);
