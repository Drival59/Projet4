<?php
/**
 *
 */
class AdminManager extends Manager
{

  public function getLogin()
  {
    $db = $this->dbConnect();
    $req = $db->query('SELECT login_admin FROM admin');
    $data = $req->fetch();
    $login = $data['login_admin'];
    return $login;
  }

  public function getPassHash()
  {
    $db = $this->dbConnect();
    $req = $db->query('SELECT password_admin FROM admin WHERE id = 1');
    $data = $req->fetch();
    $passHash = $data['password_admin'];
    return $passHash;
  }

}
