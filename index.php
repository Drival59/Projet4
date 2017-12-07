<?php

require_once('controler/frontend.php');
require_once('controler/backend.php');

try {
  if (isset($_GET['action'])) {
    # code...
  } else {
    index();
  }

} catch (Exception $e) {

}
