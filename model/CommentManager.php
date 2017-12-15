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

  public function addComment($idChapter, $name, $message)
  {
    $db = $this->dbConnect();
    $req = $db->prepare('INSERT INTO comments(id_chapters, name, message)
    VALUES (:id_chapters, :name, :message)');
    $req->bindParam(':id_chapters', $idChapter, PDO::PARAM_INT);
    $req->bindParam(':name', $name, PDO::PARAM_STR);
    $req->bindParam(':message', $message, PDO::PARAM_STR);
    $req->execute();
  }
}
