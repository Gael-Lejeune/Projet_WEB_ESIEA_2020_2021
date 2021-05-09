<?php

  $db = dtb_connect_PDO ();

  $query = $db->prepare("SELECT * FROM user WHERE user_name = ?");
  $query->execute([$_SESSION['login']]);
  $result_admin = $query->fetch(PDO::FETCH_ASSOC);


  $query2 = $db->prepare('SELECT user_name, first_name, last_name, address, mail, role FROM user');
  $query2->execute();
  $result_users = $query2->fetchAll(PDO::FETCH_ASSOC);

  $query3 = $db->prepare('SELECT * FROM category');
  $query3->execute();
  $result_categories = $query3->fetchAll(PDO::FETCH_ASSOC);

  $query4 = $db->prepare('SELECT * FROM item, category WHERE item.id_category = category.id_category');
  $query4->execute();
  $result_items = $query4->fetchAll(PDO::FETCH_ASSOC);

  $_SESSION['tab_categories'] = $result_categories;
  $_SESSION['tab_items'] = $result_items;
