<?php

/**
 * Init login database
 */
class Manager
{

  protected function dbConnect()
  {
    $db = new PDO('mysql:host="your-host";dbname="your-base";charset=utf8', 'login', 'password');
    return $db;
  }

}
