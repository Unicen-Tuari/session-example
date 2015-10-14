<?php
class LoginModel {

  private $db;

  function __construct() {
      $this->db = new PDO('mysql:host=localhost;dbname=tasks;charset=utf8', 'root', '');
      $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }

  function getPassword($email){
    $consulta = $this->db->prepare("SELECT password FROM usuario WHERE email=?");
    $consulta->execute(array($email));
    return $consulta->fetch();
  }

}
?>
