<?php

require_once('Manager.php');

/**
 * class PostManager for manage posts on DB
 */
class ChapterManager extends Manager
{
  private $nbChaptersToLoad = 3;

  public function getNbChaptersToLoad()
  {
    return $this->nbChaptersToLoad;
  }

  public function setNbChaptersToLoad($nbChapters)
  {
    $this->nbChaptersToLoad = $nbChapters;
  }

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

  public function getCountChapters()
  {
    $db = $this->dbConnect();
    $req = $db->query('SELECT COUNT(id) as nbChapters FROM chapters');
    $data = $req->fetch();
    $count = $data['nbChapters'];
    return $count;
  }
}
