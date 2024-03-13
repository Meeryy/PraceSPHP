<?php
class Admin extends User{
  public int $accessLevel = 1;
  public function __construct($id, $age, $username, $accessLevel){
    parent::__construct($id, $age, $username);
    $this->accessLevel = $accessLevel;
  }

  
}