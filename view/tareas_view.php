<?php
include_once 'libs/Smarty.class.php';

class TareasView {
  private $smarty;
    private $errores;


function __construct(){
  $this->smarty = new Smarty();
  $this->errores = array();
}

function mostrar($tareas, $usuario){
  $this->smarty->assign('errores', $this->errores);
  $this->smarty->assign('tareas', $tareas);
  $this->smarty->assign('usuario', $usuario);
  $this->smarty->display('index.tpl');
}

function mostrarError($error){
  array_push($this->errores, $error);
}



}


?>
