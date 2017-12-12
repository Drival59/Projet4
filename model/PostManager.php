<?php

require_once('Manager.php');

/**
 * class PostManager for manage posts on DB
 */
class PostManager extends Manager
{

  public function getLastPosts($nbPosts)
  {
    $db = $this->dbConnect();
    $req = $db->query('SELECT title, author, content, img_article, date_article FROM articles ORDER BY date_article DESC LIMIT ' . $nbPosts . '');
    return $req;
  }

  public function getPosts()
  {
    $db = $this->dbConnect();
    $req = $db->query('SELECT title, author, content, img_article, date_article FROM articles ORDER BY date_article DESC');
    return $req;
  }
}
