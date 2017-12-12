<?php

require_once('Manager.php');

/**
 * class PostManager for manage posts on DB
 */
class ChapterManager extends Manager
{

  public function getLastChapters($nbChapters)
  {
    $db = $this->dbConnect();
    $req = $db->query('SELECT title, author, content, img_chapter, date_chapter FROM chapters ORDER BY date_chapter DESC LIMIT ' . $nbChapters . '');
    return $req;
  }

  public function getChapters()
  {
    $db = $this->dbConnect();
    $req = $db->query('SELECT title, author, content, img_chapter, date_chapter FROM chapters ORDER BY date_chapter DESC');
    return $req;
  }
}
