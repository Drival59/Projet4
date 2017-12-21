<?php
/**
 *
 */
class CommentManager extends Manager
{

  public function getComments($idChapter)
  {
    $db = $this->dbConnect();
    $req = $db->query('SELECT * FROM comments WHERE id_chapters = ' . $idChapter . ' ORDER BY id DESC');
    return $req;
  }
  public function getCountComments($idChapter)
  {
    $db = $this->dbConnect();
    $req = $db->query('SELECT COUNT(id) as nbComments FROM comments WHERE id_chapters = ' . $idChapter . '');
    $data = $req->fetch();
    $count = $data['nbComments'];
    return $count;
  }
  public function addComment($idChapter, $name, $message)
  {
    $db = $this->dbConnect();
    $req = $db->prepare('INSERT INTO comments(id_chapters, name, message)
    VALUES (:id_chapters, :name, :message)');
    $req->bindParam(':id_chapters', $idChapter);
    $req->bindParam(':name', $name);
    $req->bindParam(':message', $message);
    $req->execute();
  }
}
