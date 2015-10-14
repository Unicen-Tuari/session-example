<?php
include_once 'config/config_app.php';
include_once 'controller/tareas_controller.php';
include_once 'controller/login_controller.php';
//Tenga la clave action


//No tenga la clave action
//$_REQUEST['action']

if(!array_key_exists(ConfigApp::$ACTION, $_REQUEST) ||
$_REQUEST[ConfigApp::$ACTION] == ConfigApp::$ACTION_DEFAULT)
{
  $tareasController = new TareasController();
  $tareasController->mostrarHome();
}
else {

  switch ($_REQUEST[ConfigApp::$ACTION]) {
    case ConfigApp::$ACTION_AGREGAR_TAREA:
      $tareasController = new TareasController();
      $tareasController->agregarTarea();
      break;
    case ConfigApp::$ACTION_BORRAR_TAREA:
      $tareasController = new TareasController();
      $tareasController->borrarTarea();
      break;
    case ConfigApp::$ACTION_REALIZAR_TAREA:
      $tareasController = new TareasController();
      $tareasController->realizarTarea();
      break;
    case ConfigApp::$ACTION_LOGIN:
      $loginController = new LoginController();
      $loginController->login();
      break;
    case ConfigApp::$ACTION_LOGOUT:
      $loginController = new LoginController();
      $loginController->logout();
      break;
    default:
      echo 'Pagina no encontrada';
      break;
  }

}



?>
