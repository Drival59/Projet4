<?php

require_once('Manager.php');

/**
 *
 */
class PostManager extends Manager
{

  public function getFivePosts()
  {
    $db = $this->dbConnect();
    $req = $db->query('SELECT title, author, content, date_article FROM articles ORDER BY date_article DESC LIMIT 5');
    return $req;
  }

  public function getPosts()
  {
    $db = $this->dbConnect();
    $req = $db->query('SELECT title, author, content, date_article FROM articles ORDER BY date_article DESC');
    return $req;
  }
}
