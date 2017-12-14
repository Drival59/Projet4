<?php

require_once('controler/frontend.php');
require_once('controler/backend.php');

try {

  if (isset($_GET['action'])) {
    if ($_GET['action'] == 'chapters') {
      listChapters();
    } elseif ($_GET['action'] == 'contact') {
      contact();
    }
  } else {
    index();
  }

} catch (Exception $e) {

}
