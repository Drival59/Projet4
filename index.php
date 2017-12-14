<?php

require_once('controler/frontend.php');
require_once('controler/backend.php');

try {

  if (isset($_GET['action'])) {
    if ($_GET['action'] == 'chapters') {
      if (isset($_GET['id'])) {
        chapter($_GET['id']);
      } else {
        listChapters();
      }
    } elseif ($_GET['action'] == 'contact') {
      contact();
    }
  } else {
    index();
  }

} catch (Exception $e) {

}
