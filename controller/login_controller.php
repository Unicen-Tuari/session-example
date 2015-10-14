<?php
include_once 'view/login_view.php';
include_once 'model/login_model.php';

class LoginController {

  private $model;
  private $view;

  function __construct() {
    $this->model = new LoginModel();
    $this->view = new LoginView();
  }

  function login(){
    //echo md5('Pass1234!@');
    if(isset($_REQUEST['email']) && isset($_REQUEST['password'])){
      $pass = $this->model->getPassword($_REQUEST['email']);
      print_r($pass);
      if(md5($_REQUEST['password'])==$pass['password']){
        session_start();
        $_SESSION['email'] = $_REQUEST['email'];
        header("Location: index.php");
        die();
      }
      else {
        $this->view->mostrarError('Email o Password inválidos');
      }
    }
    
    $this->view->mostrar();
  }

  function logout(){
    session_start();
    session_destroy();
    header("Location: index.php");
    die();
  }

}

?>
