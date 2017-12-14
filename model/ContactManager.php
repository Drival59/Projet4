<?php
/**
 *
 */
class ContactManager extends Manager
{
  private $_name;
  private $_email;
  private $_message;

  public function getName()
  {
    return $this->_name;
  }

  public function getEmail()
  {
    return $this->_email;
  }

  public function getMessage()
  {
    return $this->_message;
  }

  public function setName($name)
  {
    $this->_name = $name;
  }

  public function setEmail($email)
  {
    $this->_email = $email;
  }

  public function setMessage($message)
  {
    $this->_message = $message;
  }
  
}
